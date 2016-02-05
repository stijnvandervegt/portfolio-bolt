<?php

/* files_ck/files_ck.twig */
class __TwigTemplate_09813ad142214bb5a2a2873498beaf563bd6f9d900e71c55f2b228c8621c0ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-popup.twig", "files_ck/files_ck.twig", 3);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-popup.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.title");
    }

    // line 7
    public function block_page_main($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $context["__internal_26ac498daa977d6a3c9b8568aabc61f15e3674c569387b2645f875b77e71bd06"] = $this->loadTemplate("_macro/_files_path.twig", "files_ck/files_ck.twig", 9);
        // line 10
        echo "    ";
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "files_ck/files_ck.twig", 10);
        // line 11
        echo "

    ";
        // line 14
        echo "    ";
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "path", array()) == "")) {
            // line 15
            echo "        ";
            // line 16
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("showstack", array("items" => 7, "options" => "minimal")));
            echo "
    ";
        }
        // line 18
        echo "
    <h1";
        // line 19
        echo $context["macro"]->getattr(array("_bind" => array(0 => "ckfileselect")));
        echo ">";
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

    ";
        // line 21
        $context["pathoptions"] = array("path" => "", "namespace" => $this->getAttribute(        // line 23
(isset($context["context"]) ? $context["context"] : null), "namespace", array()), "CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 24
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 25
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 26
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"));
        // line 28
        echo "
    ";
        // line 29
        echo $context["__internal_26ac498daa977d6a3c9b8568aabc61f15e3674c569387b2645f875b77e71bd06"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), (isset($context["pathoptions"]) ? $context["pathoptions"] : null));
        echo "

    ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array())) > 0)) {
            // line 32
            echo "        ";
            $this->loadTemplate("files_ck/_folders.twig", "files_ck/files_ck.twig", 32)->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 36
            echo "            ";
            $this->loadTemplate("files_ck/_files.twig", "files_ck/files_ck.twig", 36)->display($context);
            // line 37
            echo "    ";
        }
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "files_ck/files_ck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  101 => 37,  98 => 36,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  85 => 31,  80 => 29,  77 => 28,  75 => 26,  74 => 25,  73 => 24,  72 => 23,  71 => 21,  64 => 19,  61 => 18,  55 => 16,  53 => 15,  50 => 14,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Content ... > Edit > CkEditor > Image > Browse Server #}*/
/* */
/* {% extends '_base/_page-popup.twig' %}*/
/* */
/* {% block page_title __('page.ckeditor-browse-server.title') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% from '_macro/_files_path.twig' import files_path %}*/
/*     {% import '_macro/_macro.twig' as macro %}*/
/* */
/* */
/*     {# Only show the stack on the topmost level. #}*/
/*     {% if context.path == "" %}*/
/*         {# Show the stack with the latest items. #}*/
/*         {{ render(path("showstack", {'items': 7, 'options': 'minimal'})) }}*/
/*     {% endif %}*/
/* */
/*     <h1{{ macro.attr({_bind: ['ckfileselect']}) }}>{{ block('page_title') }}</h1>*/
/* */
/*     {% set pathoptions = {*/
/*         'path': '',*/
/*         'namespace': context.namespace,*/
/*         'CKEditor': app.request.query.get('CKEditor'),*/
/*         'CKEditorFuncNum': app.request.query.get('CKEditorFuncNum'),*/
/*         'langCode': app.request.query.get('langCode')*/
/*     } %}*/
/* */
/*     {{ files_path(context.pathsegments, context.namespace, pathoptions) }}*/
/* */
/*     {% if context.folders|length > 0 %}*/
/*         {% include 'files_ck/_folders.twig' %}*/
/*     {% endif %}*/
/* */
/*     {% if context.files|length > 0 %}*/
/*             {% include 'files_ck/_files.twig' %}*/
/*     {% endif %}*/
/* */
/* {% endblock page_main %}*/
/* */
