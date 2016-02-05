<?php

/* components/stack-minimal.twig */
class __TwigTemplate_5132603f5bba085e15174b681335385acf7f4a0297d7cfb666c48337e4f27829 extends Twig_Template
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
        echo "<h2>
    <i class=\"fa fa-paperclip\"></i> ";
        // line 2
        echo $this->env->getExtension('Bolt')->trans("Files on the stack");
        echo "
</h2>

<div id=\"stackholder\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "stack", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <div class=\"stackitem stackitem-wide item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
            echo "\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "files", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
            echo "\" class=\"filebrowserCallbackLink\">
                ";
            // line 9
            if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                // line 10
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                echo "\" width=\"100\" height=\"100\">
                ";
            } else {
                // line 12
                echo "                    <strong>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                echo "</strong>
                    <small>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "</small>
                ";
            }
            // line 15
            echo "            </a>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/stack-minimal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  76 => 15,  71 => 13,  66 => 12,  60 => 10,  58 => 9,  53 => 8,  46 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <h2>*/
/*     <i class="fa fa-paperclip"></i> {{ __('Files on the stack') }}*/
/* </h2>*/
/* */
/* <div id="stackholder">*/
/*     {% for item in context.stack %}*/
/*         <div class="stackitem stackitem-wide item-{{ loop.index }} {{ item.type }}">*/
/*             <a href="{{ app.paths.files }}{{ item.filepath }}" class="filebrowserCallbackLink">*/
/*                 {% if item.type == 'image' %}*/
/*                     <img src="{{ item.filepath|thumbnail(100,100) }}" width="100" height="100">*/
/*                 {% else %}*/
/*                     <strong>{{ item.extension|upper }}</strong>*/
/*                     <small>{{ item.basename }}</small>*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
