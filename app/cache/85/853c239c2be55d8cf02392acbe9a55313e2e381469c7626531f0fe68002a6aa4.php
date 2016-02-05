<?php

/* _base/_page-popup.twig */
class __TwigTemplate_b58f20ef611dd2255630d1944263d0fa6af63d6a5a12e73b9ae609289d33b9fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("_base/_page.twig", "_base/_page-popup.twig", 9);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["page_bodyclass"] = "popup";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('page_main', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 19
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    public function getTemplateName()
    {
        return "_base/_page-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  44 => 20,  42 => 19,  39 => 18,  36 => 17,  32 => 9,  30 => 15,  28 => 13,  26 => 11,  11 => 9,);
    }
}
/* {##*/
/*  # HTML page template for popups*/
/*  #*/
/*  # Blocks: page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {% extends '_base/_page.twig' %}*/
/* */
/* {% set page_bodyclass = 'popup' %}*/
/* */
/* {% set page_hasnav = false %}*/
/* */
/* {% set page_nav = '' %}*/
/* */
/* {% block page_plain %}*/
/* */
/*     {% block page_main %}[PAGE_MAIN]{% endblock page_main %}*/
/* */
/* {% endblock page_plain %}*/
/* */
