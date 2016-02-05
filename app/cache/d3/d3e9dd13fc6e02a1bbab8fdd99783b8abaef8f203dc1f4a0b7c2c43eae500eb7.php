<?php

/* files_ck/_files.twig */
class __TwigTemplate_4ebe4a09860a4391beb53f0c774bbcae057096ae51c90e84406f608a22c016a5 extends Twig_Template
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
        echo "<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
        echo "</th>
            <th style=\"min-width: 102px;\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.size");
        echo "</th>
            <th style=\"min-width: 60px;\">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 12
            echo "            ";
            if (twig_in_filter($this->getAttribute($context["file"], "type", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                // line 13
                echo "
                <tr>
                    <td>

                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        ";
                // line 19
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 20
                    echo "                            <a class=\"filebrowserCallbackLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "url", array()), "html", null, true);
                    echo "\">
                                <b>";
                    // line 21
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 60));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 24
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 60));
                    echo " </b><i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 26
                echo "                    </td>
                    <td>
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filesize", array()), "html", null, true);
                echo ".<br>
                        ";
                // line 29
                if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "imagesize", array()), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.pixel");
                }
                // line 30
                echo "                    </td>
                    <td>
                        ";
                // line 32
                echo $this->env->getExtension('Bolt')->showImage($this->getAttribute($context["file"], "newpath", array()), 54, 40, "c");
                echo "
                    </td>
                    ";
                // line 37
                echo "                </tr>
            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files_ck/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  98 => 39,  94 => 37,  89 => 32,  85 => 30,  79 => 29,  75 => 28,  71 => 26,  65 => 24,  59 => 21,  54 => 20,  52 => 19,  44 => 13,  41 => 12,  37 => 11,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="dashboardlisting">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{{ __('page.ckeditor-browse-server.files') }}</th>*/
/*             <th style="min-width: 102px;">{{ __('page.ckeditor-browse-server.size') }}</th>*/
/*             <th style="min-width: 60px;">&nbsp;</th>*/
/*         </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/*         {% for file in context.files %}*/
/*             {% if file.type in ['jpeg', 'jpg', 'png', 'gif'] %}*/
/* */
/*                 <tr>*/
/*                     <td>*/
/* */
/*                         <i class="fa fa-fw fa-file-image-o"></i>*/
/* */
/*                         {% if file.readable %}*/
/*                             <a class="filebrowserCallbackLink" href="{{ file.url }}">*/
/*                                 <b>{{ file.filename|excerpt(60)|shy }}</b>*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <b>{{ file.filename|excerpt(60)|shy }} </b><i class="fa fa-lock"></i>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ file.filesize }}.<br>*/
/*                         {% if file.imagesize is defined %}{{ file.imagesize }} {{ __('page.ckeditor-browse-server.pixel') }}{% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ file.newpath|showimage(54, 40, 'c') }}*/
/*                     </td>*/
/*                     {# <td>*/
/*                         <a href="{{ file.newpath|thumbnail(1000, 1000, 'r') }}" class="btn btn-mini magnifig" title="Image: {{ file.filename }}">{{ __('Preview') }}</a>*/
/*                     </td> #}*/
/*                 </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
