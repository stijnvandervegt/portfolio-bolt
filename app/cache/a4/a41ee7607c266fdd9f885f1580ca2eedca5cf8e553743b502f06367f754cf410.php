<?php

/* files_ck/_folders.twig */
class __TwigTemplate_fb765a095d9a3ced8de86aa954366fbec7701cc6b1435a39ef00f7c26d380a3c extends Twig_Template
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
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.folders");
        echo "</th>
            <th>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.modified");
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 11
            echo "            <tr>
                <td style=\"height: 30px;\">
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>

                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => $this->getAttribute($context["folder"], "newpath", array()), "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
            echo "\">
                        <b>";
            // line 16
            echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["folder"], "foldername", array()), 40));
            echo "/</b>
                    </a>
                </td>
                <td>
                    <time class=\"moment\" datetime=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "modified", array()), "html", null, true);
            echo "</time>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files_ck/_folders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  57 => 20,  50 => 16,  46 => 15,  40 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="dashboardlisting">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{{ __('page.ckeditor-browse-server.folders') }}</th>*/
/*             <th>{{ __('page.ckeditor-browse-server.modified') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/*         {% for folder in context.folders %}*/
/*             <tr>*/
/*                 <td style="height: 30px;">*/
/*                     <i class="fa fa-fw fa-folder-open-o"></i>*/
/* */
/*                     <a href="{{ path('files', {'path': folder.newpath, 'namespace': context.namespace, 'CKEditor': app.request.query.get('CKEditor'), 'CKEditorFuncNum': app.request.query.get('CKEditorFuncNum'), 'langCode': app.request.query.get('langCode')}) }}">*/
/*                         <b>{{ folder.foldername|excerpt(40)|shy }}/</b>*/
/*                     </a>*/
/*                 </td>*/
/*                 <td>*/
/*                     <time class="moment" datetime="{{ folder.modified|date("c") }}" title="{{ folder.modified }}">{{ folder.modified }}</time>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
