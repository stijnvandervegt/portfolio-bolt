<?php

/* files_async/files_async.twig */
class __TwigTemplate_9282ebf991ec77d95a139ba9b0623e302c76f64450eae888dd16b28471587e9f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <title>Remote file for Bootstrap Modal</title>
    </head>

    <body>
        <div class=\"modal-body\">

            ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array())) > 0)) {
            // line 12
            echo "                <p>
                    ";
            // line 13
            echo $this->env->getExtension('Bolt')->trans("Path:");
            echo "
                    <a href=\"#\" data-action=\"Bolt.stack.changeFolder('";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "key" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()))), "html", null, true);
            echo "');\" class=\"folder\">
                        ";
            // line 15
            echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), 40));
            // line 16
            echo "</a> /
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 18
                echo "                    ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    echo " / ";
                }
                // line 19
                echo "                    <a href=\"#\" data-action=\"Bolt.stack.changeFolder('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "path" => $context["path"], "key" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()))), "html", null, true);
                echo "');\" class=\"folder\">";
                echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt(((array_key_exists("segment", $context)) ? (_twig_default_filter($context["segment"], "…")) : ("…")), 40));
                echo "</a>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </p>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array())) > 0)) {
            // line 25
            echo "                <table class=\"dashboardlisting\">
                    <tr>
                        <th>";
            // line 27
            echo $this->env->getExtension('Bolt')->trans("Folders");
            echo "</th>
                    </tr>

                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 31
                echo "                        <tr style=\"height: 30px;\">
                            <td> <i class=\"fa fa-fw fa-folder-open-o\"></i>
                                <a href=\"#\" data-action=\"Bolt.stack.changeFolder('";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "path" => $this->getAttribute($context["folder"], "newpath", array()), "key" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()))), "html", null, true);
                echo "');\" class=\"folder\"><b>";
                echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["folder"], "foldername", array()), 40));
                echo "/</b>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </table>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 42
            echo "            <table class=\"dashboardlisting\">
                <tr>
                    <th>";
            // line 44
            echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
            echo "</th>
                    <th style=\"min-width: 102px;\">";
            // line 45
            echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.size");
            echo "</th>
                    <th>&nbsp;</th>
                </tr>

                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 50
                echo "                    ";
                if (twig_in_filter($this->getAttribute($context["file"], "type", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                    // line 51
                    echo "                        <tr>
                            <td>

                                <i class=\"fa fa-fw fa-file-image-o\"></i>

                                ";
                    // line 56
                    if ($this->getAttribute($context["file"], "readable", array())) {
                        // line 57
                        echo "                                    <a href=\"#\" data-action=\"Bolt.stack.selectFromPulldown('";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "relativepath", array()), "html", null, true);
                        echo "');\" class=\"file\">
                                        <b>";
                        // line 58
                        echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                        echo "</b>
                                    </a>
                                ";
                    } else {
                        // line 61
                        echo "                                    <b>";
                        echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                        echo " </b><i class=\"fa fa-lock\"></i>
                                ";
                    }
                    // line 63
                    echo "                            </td>

                            <td>
                                ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filesize", array()), "html", null, true);
                    echo ".
                                ";
                    // line 67
                    if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                        // line 68
                        echo "                                    <br>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "imagesize", array()), "html", null, true);
                        echo " px.
                                ";
                    }
                    // line 70
                    echo "                            </td>

                            <td class=\"listthumb\">
                                ";
                    // line 73
                    echo $this->env->getExtension('Bolt')->showImage($this->getAttribute($context["file"], "newpath", array()), 54, 40, "c");
                    echo "
                            </td>

                        </tr>
                    ";
                } else {
                    // line 78
                    echo "
                        <tr>
                            <td>

                                <i class=\"fa fa-fw fa-file-image-o\"></i>

                                ";
                    // line 84
                    if ($this->getAttribute($context["file"], "readable", array())) {
                        // line 85
                        echo "                                    <a href=\"#\" data-action=\"Bolt.stack.selectFromPulldown('";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "key", array()), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "relativepath", array()), "html", null, true);
                        echo "');\" class=\"file\">
                                        <b>";
                        // line 86
                        echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                        echo "</b>
                                    </a>
                                ";
                    } else {
                        // line 89
                        echo "                                    <b>";
                        echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                        echo " </b><i class=\"fa fa-lock\"></i>
                                ";
                    }
                    // line 91
                    echo "                            </td>

                            <td>";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filesize", array()), "html", null, true);
                    echo ".</td>

                            <td class=\"listthumb\">&nbsp;</td>

                        </tr>

                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                </table>
            ";
        }
        // line 103
        echo "        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 106
        echo $this->env->getExtension('Bolt')->trans("Cancel");
        echo "</button>
        </div>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "files_async/files_async.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 106,  278 => 103,  274 => 101,  268 => 100,  258 => 93,  254 => 91,  248 => 89,  242 => 86,  235 => 85,  233 => 84,  225 => 78,  217 => 73,  212 => 70,  206 => 68,  204 => 67,  200 => 66,  195 => 63,  189 => 61,  183 => 58,  176 => 57,  174 => 56,  167 => 51,  164 => 50,  160 => 49,  153 => 45,  149 => 44,  145 => 42,  143 => 41,  140 => 40,  136 => 38,  121 => 33,  117 => 31,  113 => 30,  107 => 27,  103 => 25,  101 => 24,  98 => 23,  94 => 21,  73 => 19,  68 => 18,  51 => 17,  48 => 16,  46 => 15,  40 => 14,  36 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*         <title>Remote file for Bootstrap Modal</title>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="modal-body">*/
/* */
/*             {% if context.pathsegments|length > 0 %}*/
/*                 <p>*/
/*                     {{ __('Path:') }}*/
/*                     <a href="#" data-action="Bolt.stack.changeFolder('{{ context.key }}', '{{ path('asyncbrowse', {'namespace': context.namespace, 'key': context.key}) }}');" class="folder">*/
/*                         {{ context.namespace|excerpt(40)|shy -}}*/
/*                     </a> /*/
/*                     {% for path, segment in context.pathsegments %}*/
/*                     {% if not loop.first %} / {% endif %}*/
/*                     <a href="#" data-action="Bolt.stack.changeFolder('{{ context.key }}', '{{ path('asyncbrowse', {'namespace': context.namespace, 'path': path, 'key': context.key}) }}');" class="folder">{{ segment|default('…')|excerpt(40)|shy }}</a>*/
/*                     {% endfor %}*/
/*                 </p>*/
/*             {% endif %}*/
/* */
/*             {% if context.folders|length > 0 %}*/
/*                 <table class="dashboardlisting">*/
/*                     <tr>*/
/*                         <th>{{ __('Folders') }}</th>*/
/*                     </tr>*/
/* */
/*                     {% for folder in context.folders %}*/
/*                         <tr style="height: 30px;">*/
/*                             <td> <i class="fa fa-fw fa-folder-open-o"></i>*/
/*                                 <a href="#" data-action="Bolt.stack.changeFolder('{{ context.key }}', '{{ path('asyncbrowse', {'namespace': context.namespace, 'path': folder.newpath, 'key': context.key}) }}');" class="folder"><b>{{ folder.foldername|excerpt(40)|shy }}/</b>*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if context.files|length > 0 %}*/
/*             <table class="dashboardlisting">*/
/*                 <tr>*/
/*                     <th>{{ __('page.ckeditor-browse-server.files') }}</th>*/
/*                     <th style="min-width: 102px;">{{ __('page.ckeditor-browse-server.size') }}</th>*/
/*                     <th>&nbsp;</th>*/
/*                 </tr>*/
/* */
/*                 {% for file in context.files %}*/
/*                     {% if file.type in ['jpeg', 'jpg', 'png', 'gif'] %}*/
/*                         <tr>*/
/*                             <td>*/
/* */
/*                                 <i class="fa fa-fw fa-file-image-o"></i>*/
/* */
/*                                 {% if file.readable %}*/
/*                                     <a href="#" data-action="Bolt.stack.selectFromPulldown('{{ context.key }}', '{{ file.relativepath }}');" class="file">*/
/*                                         <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <b>{{ file.filename|excerpt(80)|shy }} </b><i class="fa fa-lock"></i>*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 {{ file.filesize }}.*/
/*                                 {% if file.imagesize is defined %}*/
/*                                     <br>{{ file.imagesize }} px.*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                             <td class="listthumb">*/
/*                                 {{ file.newpath|showimage(54, 40, 'c') }}*/
/*                             </td>*/
/* */
/*                         </tr>*/
/*                     {% else %}*/
/* */
/*                         <tr>*/
/*                             <td>*/
/* */
/*                                 <i class="fa fa-fw fa-file-image-o"></i>*/
/* */
/*                                 {% if file.readable %}*/
/*                                     <a href="#" data-action="Bolt.stack.selectFromPulldown('{{ context.key }}', '{{ file.relativepath }}');" class="file">*/
/*                                         <b>{{ file.filename|excerpt(80)|shy }}</b>*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <b>{{ file.filename|excerpt(80)|shy }} </b><i class="fa fa-lock"></i>*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                             <td>{{ file.filesize }}.</td>*/
/* */
/*                             <td class="listthumb">&nbsp;</td>*/
/* */
/*                         </tr>*/
/* */
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 </table>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>*/
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
