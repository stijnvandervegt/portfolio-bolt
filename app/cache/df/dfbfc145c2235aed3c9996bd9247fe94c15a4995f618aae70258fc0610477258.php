<?php

/* boltforms_form.twig */
class __TwigTemplate_20a65f4f785c052ff30bfdffa9512183a15c84bfcb056f456ef02506679ff4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'boltforms_css' => array($this, 'block_boltforms_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "boltforms_custom.twig"));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('boltforms_css', $context, $blocks);
        // line 7
        echo "
<div class=\"boltform\">
";
        // line 9
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            // line 10
            echo "    <p class=\"boltform-error\">[Debug] Notification debug mode enabled!</p>
";
        }
        // line 12
        echo "
";
        // line 13
        if (((isset($context["error"]) ? $context["error"] : null) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => (isset($context["formname"]) ? $context["formname"] : null)), "method"))) {
            // line 14
            echo "    <p class=\"boltform-error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
";
        }
        // line 16
        echo "
";
        // line 17
        if (((isset($context["message"]) ? $context["message"] : null) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => (isset($context["formname"]) ? $context["formname"] : null)), "method"))) {
            // line 18
            echo "    <p class=\"boltform-message\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
";
        }
        // line 20
        echo "
";
        // line 21
        if ( !(isset($context["sent"]) ? $context["sent"] : null)) {
            // line 22
            echo "
    ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["html_pre"]) ? $context["html_pre"] : null), "html", null, true);
            echo "

    ";
            // line 25
            if (($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "enabled", array()) && (($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "theme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "theme", array()), "clean")) : ("clean")))) {
                // line 26
                echo "    <script>
        var RecaptchaOptions = {
            theme : '";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "theme", array()), "html", null, true);
                echo "'
        };
    </script>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("name" => (isset($context["formname"]) ? $context["formname"] : null))));
            echo "
        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 37
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["value"], "config", array()), "name", array()) != "submit")) {
                    // line 38
                    echo "            <div class=\"boltforms-row";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                        echo " boltforms-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "class", array()), "html", null, true);
                        echo "-row";
                    }
                    echo "\">
                ";
                    // line 39
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array"), 'label');
                    echo "
                ";
                    // line 40
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array"), 'errors');
                    echo "
                ";
                    // line 41
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["key"], array(), "array"), 'widget');
                    echo "
            </div>
            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "enabled", array())) {
                // line 47
                echo "
            ";
                // line 48
                if ( !$this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "valid", array())) {
                    // line 49
                    echo "            <ul class=\"boltform-error\">
                <li class=\"boltform-errors\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "error_message", array()), "html", null, true);
                    echo "</li>
            </ul>
            ";
                }
                // line 53
                echo "
            <div class=\"boltform-row\">
                <label for=\"form_message\" class=\"required\">";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</label>
                <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
                echo "\" async defer></script>
                <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recaptcha"]) ? $context["recaptcha"] : null), "public_key", array()), "html", null, true);
                echo "\"></div>
            </div>

        ";
            }
            // line 61
            echo "
        <br>

        <div class=\"boltforms-row";
            // line 64
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                echo " boltforms-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), "vars", array()), "attr", array()), "class", array()), "html", null, true);
                echo "-row";
            }
            echo "\">
            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget');
            echo "
        </div>

    ";
            // line 68
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "

";
        } else {
            // line 71
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["html_post"]) ? $context["html_post"] : null), "html", null, true);
            echo "
";
        }
        // line 73
        echo "</div>

";
    }

    // line 4
    public function block_boltforms_css($context, array $blocks = array())
    {
        // line 5
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "extensions", array()), "html", null, true);
        echo "vendor/bolt/boltforms/css/boltforms.css\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    public function getTemplateName()
    {
        return "boltforms_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 5,  211 => 4,  205 => 73,  199 => 71,  193 => 68,  187 => 65,  179 => 64,  174 => 61,  167 => 57,  163 => 56,  159 => 55,  155 => 53,  149 => 50,  146 => 49,  144 => 48,  141 => 47,  139 => 46,  136 => 45,  130 => 44,  124 => 41,  120 => 40,  116 => 39,  107 => 38,  104 => 37,  100 => 36,  95 => 34,  91 => 33,  88 => 32,  81 => 28,  77 => 26,  75 => 25,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  56 => 18,  54 => 17,  51 => 16,  45 => 14,  43 => 13,  40 => 12,  36 => 10,  34 => 9,  30 => 7,  28 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% form_theme form 'boltforms_custom.twig' %}*/
/* */
/* {% block boltforms_css %}*/
/* <link href="{{ app.paths.extensions }}vendor/bolt/boltforms/css/boltforms.css" rel="stylesheet" type="text/css" />*/
/* {% endblock boltforms_css %}*/
/* */
/* <div class="boltform">*/
/* {% if debug %}*/
/*     <p class="boltform-error">[Debug] Notification debug mode enabled!</p>*/
/* {% endif %}*/
/* */
/* {% if error and app.request.get(formname) %}*/
/*     <p class="boltform-error">{{ error }}</p>*/
/* {% endif %}*/
/* */
/* {% if message and app.request.get(formname) %}*/
/*     <p class="boltform-message">{{ message }}</p>*/
/* {% endif %}*/
/* */
/* {% if not sent %}*/
/* */
/*     {{ html_pre }}*/
/* */
/*     {% if recaptcha.enabled and recaptcha.theme|default('clean') %}*/
/*     <script>*/
/*         var RecaptchaOptions = {*/
/*             theme : '{{ recaptcha.theme }}'*/
/*         };*/
/*     </script>*/
/*     {% endif %}*/
/* */
/*     {{ form_start(form, {'attr': {'name': formname}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         {% for key, value in fields  %}*/
/*             {% if value.config.name != 'submit' %}*/
/*             <div class="boltforms-row{% if form[key].vars.attr.class is defined %} boltforms-{{ form[key].vars.attr.class }}-row{% endif %}">*/
/*                 {{ form_label(form[key]) }}*/
/*                 {{ form_errors(form[key]) }}*/
/*                 {{ form_widget(form[key]) }}*/
/*             </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if recaptcha.enabled %}*/
/* */
/*             {% if not recaptcha.valid %}*/
/*             <ul class="boltform-error">*/
/*                 <li class="boltform-errors">{{ recaptcha.error_message }}</li>*/
/*             </ul>*/
/*             {% endif %}*/
/* */
/*             <div class="boltform-row">*/
/*                 <label for="form_message" class="required">{{ recaptcha.label|trans({}, translation_domain) }}</label>*/
/*                 <script src="https://www.google.com/recaptcha/api.js?hl={{ htmllang() }}" async defer></script>*/
/*                 <div class="g-recaptcha" data-sitekey="{{ recaptcha.public_key }}"></div>*/
/*             </div>*/
/* */
/*         {% endif %}*/
/* */
/*         <br>*/
/* */
/*         <div class="boltforms-row{% if form.submit.vars.attr.class is defined %} boltforms-{{ form.submit.vars.attr.class }}-row{% endif %}">*/
/*             {{ form_widget(form.submit) }}*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% else %}*/
/*     {{ html_post }}*/
/* {% endif %}*/
/* </div>*/
/* */
/* */
