<?php

/* nav/_secondary-content.twig */
class __TwigTemplate_08d125fa71ed58ce7af58380872dba563e96bebe8c40e3748d67e2f553df7995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["definedSubs"] = array();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $context["slug"]))) {
                // line 5
                echo "        ";
                $context["sub_view"] = array("icon" => (($this->getAttribute(                // line 6
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.view", array("%contenttypes%" => $this->getAttribute(                // line 7
$context["contenttype"], "slug", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                 // line 8
$context["slug"])));
                // line 10
                echo "        ";
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" =>                 // line 12
$context["slug"])), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                 // line 13
$context["slug"])), "isallowed" => (("contenttype:" .                 // line 14
$context["slug"]) . ":create"));
                // line 16
                echo "        ";
                $context["sub"] = array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null), 1 => (isset($context["sub_new"]) ? $context["sub_new"] : null), 2 => "-");
                // line 17
                echo "
        ";
                // line 19
                echo "        ";
                if (($this->getAttribute($context["contenttype"], "show_in_menu", array()) == "true")) {
                    // line 20
                    echo "
            ";
                    // line 21
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['records'] =                     $template_storage->getContent((isset($context["slug"]) ? $context["slug"] : null), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 22
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 23
                        echo "                ";
                        $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(                        // line 25
$context["contenttype"], "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => trim(twig_replace_filter($this->getAttribute(                        // line 26
$context["record"], "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                         // line 27
$context["slug"], "id" => $this->getAttribute($context["record"], "id", array()))))));
                        // line 30
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
            ";
                    // line 32
                    $context["label"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array())));
                    // line 33
                    echo "            ";
                    $context["active"] = (((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Content/*") && ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["slug"]));
                    // line 34
                    echo "
            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => (($this->getAttribute($context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), "")) : ("")), 1 => (isset($context["label"]) ? $context["label"] : null), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => (isset($context["active"]) ? $context["active"] : null), 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "
            ";
                    // line 40
                    $context["sub_view"] = array("icon" => (($this->getAttribute(                    // line 41
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute(                    // line 42
$context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                     // line 43
$context["slug"])));
                    // line 45
                    echo "
            ";
                    // line 46
                    $context["key"] = (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ($this->getAttribute($context["contenttype"], "show_in_menu", array())) : ($this->env->getExtension('Bolt')->trans("Other content")));
                    // line 47
                    echo "            ";
                    if ($this->getAttribute((isset($context["definedSubs"]) ? $context["definedSubs"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array", true, true)) {
                        // line 48
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
                        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
                            // line 49
                            echo "                    ";
                            if (((isset($context["key"]) ? $context["key"] : null) == $context["submenuName"])) {
                                // line 50
                                echo "                        ";
                                $context["submenudef"] = twig_array_merge($context["submenudef"], array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null)));
                                // line 51
                                echo "                        ";
                                $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array($context["submenuName"] => $context["submenudef"]));
                                // line 52
                                echo "                    ";
                            }
                            // line 53
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "            ";
                    } else {
                        // line 55
                        echo "                ";
                        $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array((isset($context["key"]) ? $context["key"] : null) => array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null))));
                        // line 56
                        echo "            ";
                    }
                    // line 57
                    echo "
        ";
                }
                // line 59
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
            // line 64
            echo "    ";
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:th-list", 1 => $context["submenuName"], 2 => $context["submenudef"], 3 => false, 4 => false, 5 => false, 6 => true), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  160 => 64,  156 => 63,  153 => 61,  146 => 59,  142 => 57,  139 => 56,  136 => 55,  133 => 54,  127 => 53,  124 => 52,  121 => 51,  118 => 50,  115 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  94 => 39,  91 => 38,  86 => 35,  83 => 34,  80 => 33,  78 => 32,  75 => 31,  69 => 30,  67 => 27,  66 => 26,  65 => 25,  63 => 23,  58 => 22,  55 => 21,  52 => 20,  49 => 19,  46 => 17,  43 => 16,  41 => 14,  40 => 13,  39 => 12,  37 => 10,  35 => 8,  34 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set definedSubs = [] %}*/
/* */
/* {% for slug, contenttype in app.config.get('contenttypes')  %}*/
/*     {% if isallowed('contenttype:' ~ slug) %}*/
/*         {% set sub_view = {*/
/*             icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*             label: __('contenttypes.generic.view', {'%contenttypes%': contenttype.slug}),*/
/*             link: path('overview', {'contenttypeslug': slug})*/
/*         } %}*/
/*         {% set sub_new = {*/
/*             icon: 'fa:plus',*/
/*             label: __('contenttypes.generic.new', {'%contenttype%': slug}),*/
/*             link: path('editcontent', {'contenttypeslug': slug}),*/
/*             isallowed: 'contenttype:' ~ slug ~ ':create'*/
/*         } %}*/
/*         {% set sub = [sub_view, sub_new, '-'] %}*/
/* */
/*         {# Contenttypes, where show_in_menu is set true #}*/
/*         {% if contenttype.show_in_menu == "true" %}*/
/* */
/*             {% setcontent records = slug limit 4 nohydrate orderby '-datechanged' %}*/
/*             {% for record in records %}*/
/*                 {% set sub = sub|merge([*/
/*                     {*/
/*                         icon: contenttype.icon_one|default('fa:file-text-o'),*/
/*                         label: record.excerpt(80, true)|replace({"</b>": "&nbsp;</b>"})|trim,*/
/*                         link: path('editcontent', {'contenttypeslug': slug, 'id': record.id})*/
/*                     }*/
/*                 ]) %}*/
/*             {% endfor %}*/
/* */
/*             {% set label = __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}) %}*/
/*             {% set active = (page_nav == 'Content/*' and context.contenttype.slug|default == slug) %}*/
/* */
/*             {{ nav.submenu(contenttype.icon_many|default(''), label, sub, active, true) }}*/
/* */
/*         {# Contenttypes, where show_in_menu is set to a custom value or false #}*/
/*         {% else %}*/
/* */
/*             {% set sub_view = {*/
/*                 icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*                 label: __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}),*/
/*                 link: path('overview', {'contenttypeslug': slug})*/
/*             } %}*/
/* */
/*             {% set key = contenttype.show_in_menu ?: __('Other content') %}*/
/*             {% if definedSubs[key] is defined %}*/
/*                 {% for submenuName, submenudef in definedSubs %}*/
/*                     {% if key == submenuName %}*/
/*                         {% set submenudef = submenudef|merge([sub_view]) %}*/
/*                         {% set definedSubs = definedSubs|merge({(submenuName) : submenudef}) %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 {% set definedSubs = definedSubs|merge({(key) : [sub_view]}) %}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {# Display contenttypes, that have show_in_menu set to false or a custom value in submenus #}*/
/* {% for submenuName, submenudef in definedSubs %}*/
/*     {# Create the submenu and force it to be a submenu #}*/
/*     {{ nav.submenu('fa:th-list', submenuName, submenudef, false, false, false, true) }}*/
/* {% endfor %}*/
/* */
