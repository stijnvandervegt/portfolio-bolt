<?php
// Sitemap Extension for Bolt, by Bob den Otter

namespace Bolt\Extension\Bolt\Sitemap;

use Bolt\Extensions\Snippets\Location as SnippetLocation;
use Symfony\Component\HttpFoundation\Response;

# If we have a boatload of content, we might need a bit more memory.
set_time_limit(0);
ini_set('memory_limit', '512M');

class Extension extends \Bolt\BaseExtension
{
    public function getName()
    {
        return 'Sitemap';
    }

    /**
     * Initialize Sitemap. Called during bootstrap phase.
     */
    public function initialize()
    {
        if (empty($this->config['ignore_contenttype'])) {
            $this->config['ignore_contenttype'] = array();
        }

        if (empty($this->config['ignore'])) {
            $this->config['ignore'] = array();
        }

        if (empty($this->config['ignore_listing'])) {
            $this->config['ignore_listing'] = false;
        }

        // Set up the routes for the sitemap..
        $this->app->match('/sitemap', array($this, 'sitemap'));
        $this->app->match('/sitemap.xml', array($this, 'sitemapXml'));

        $this->addSnippet(SnippetLocation::END_OF_HEAD, 'headsnippet');
    }

    public function sitemap($xml = false)
    {
        if ($xml) {
            $this->app['extensions']->clearSnippetQueue();
            $this->app['extensions']->disableJquery();
            $this->app['debugbar'] = false;
        }

        $links = array(array('link' => $this->app['paths']['root'], 'title' => $this->app['config']->get('general/sitename')));
        foreach ($this->app['config']->get('contenttypes') as $contenttype) {
            if (!in_array($contenttype['slug'], $this->config['ignore_contenttype']) && !$contenttype['viewless'] &&
                ((isset($contenttype['searchable']) && $contenttype['searchable']) ||  !isset($contenttype['searchable']))
               ) {
                $baseDepth = 0;
                if (isset($contenttype['listing_template']) && !$this->config['ignore_listing']) {
                    $baseDepth = 1;
                    $links[] = array('link' => $this->app['paths']['root'] . $contenttype['slug'], 'title' => $contenttype['name'], 'depth' => 1);
                }
                $content = $this->app['storage']->getContent(
                    $contenttype['slug'],
                    array('limit' => 10000, 'order' => 'datepublish desc', 'hydrate' => false)
                );
                foreach ($content as $entry) {
                    $links[] = array('link' => $entry->link(), 'title' => $entry->getTitle(), 'depth' => $baseDepth + 1,
                        'lastmod'           => date(\DateTime::W3C, strtotime($entry->get('datechanged'))), 'record' => $entry, );
                }
            }
        }

        foreach ($links as $idx => $link) {
            if ($this->linkIsIgnored($link)) {
                unset($links[$idx]);
            }
        }

        if ($xml) {
            $template = $this->config['xml_template'];
        } else {
            $template = $this->config['template'];
        }

        $this->app['twig.loader.filesystem']->addPath(__DIR__);

        $body = $this->app['render']->render($template, array(
            'entries' => $links,
        ));

        $headers = array();
        if ($xml) {
            $headers['Content-Type'] = 'application/xml; charset=utf-8';
        }

        return new Response($body, 200, $headers);
    }

    public function linkIsIgnored($link)
    {
        if (in_array($link['link'], $this->config['ignore'])) {
            // Perfect match
            return true;
        }

        // use ignore as a regex
        foreach ($this->config['ignore'] as $ignore) {
            $pattern = str_replace('/', '\/', $ignore);

            // Match on whole string so a $ignore of "/entry/" isn't the same as
            // "/entry/.*"
            if (preg_match("/^{$pattern}$/", $link['link'])) {
                return true;
            }
        }

        // no absolute match + no regex match
        return false;
    }

    public function sitemapXml()
    {
        return $this->sitemap(true);
    }

    public function headsnippet()
    {
        $snippet = sprintf(
            '<link rel="sitemap" type="application/xml" title="Sitemap" href="%ssitemap.xml">',
            $this->app['paths']['rooturl']
        );

        return $snippet;
    }
}
