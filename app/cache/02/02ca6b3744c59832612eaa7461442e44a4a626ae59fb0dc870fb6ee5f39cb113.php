<?php

/* editcontent/_relations.twig */
class __TwigTemplate_73b6dcf2dfea9f4b6a12d4b551e32b1d4d3db294a1edacb0f4d23059bf5014bf extends Twig_Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 2
            echo "    <hr>

    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "\"
            data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.relationships", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "relations", array())) {
            // line 12
            echo "    ";
            $this->loadTemplate("editcontent/_relationships.twig", "editcontent/_relations.twig", 12)->display($context);
        }
        // line 14
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "relation", array()));
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
        foreach ($context['_seq'] as $context["reltype"] => $context["ids"]) {
            // line 17
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", false, true), $context["reltype"], array(), "array", true, true)) {
                // line 18
                echo "        <p>";
                echo $this->env->getExtension('Bolt')->trans("This record is related to:");
                echo "</p>
        <table class=\"table table-striped dashboardlisting\">
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ids"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                    // line 21
                    echo "                ";
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['record'] =                     $template_storage->getContent((((isset($context["reltype"]) ? $context["reltype"] : null) . "/") . (isset($context["id"]) ? $context["id"] : null)), array() );
                    // line 22
                    echo "                ";
                    if ((isset($context["record"]) ? $context["record"] : null)) {
                        // line 23
                        echo "                    ";
                        $context["editable"] = $this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["record"]) ? $context["record"] : null));
                        // line 24
                        echo "                    ";
                        $this->loadTemplate(array(0 => "_sub/_listing.twig"), "editcontent/_relations.twig", 24)->display(array_merge($context, array("excerptlength" => 280, "thumbsize" => 54, "compact" => true, "content" => (isset($context["record"]) ? $context["record"] : null), "permissions" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()))));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        </table>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['reltype'], $context['ids'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()) && twig_in_filter("relations", $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "groups", array())))) {
            // line 32
            echo "    ";
            $this->loadTemplate("editcontent/_fields.twig", "editcontent/_relations.twig", 32)->display($context);
        }
        // line 34
        echo "
";
        // line 35
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 36
            echo "    <hr>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_relations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 36,  155 => 35,  152 => 34,  148 => 32,  146 => 31,  143 => 30,  127 => 27,  113 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  97 => 21,  80 => 20,  74 => 18,  71 => 17,  54 => 16,  51 => 14,  47 => 12,  45 => 11,  42 => 10,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if not context.has.tabs %}*/
/*     <hr>*/
/* */
/*     <h3>*/
/*         {{ __('Relationships') }}*/
/*         <span class="label info-pop" data-html="true" data-title="{{ __('Relationships') }}"*/
/*             data-content="{{ app.translator.trans('info.relationships', {}, 'infos') }}">{{ __('Info') }}</span>*/
/*     </h3>*/
/* {% endif %}*/
/* */
/* {% if context.has.relations %}*/
/*     {% include 'editcontent/_relationships.twig' %}*/
/* {% endif %}*/
/* */
/* {# Output 'incoming' relations #}*/
/* {% for reltype, ids in context.content.relation %}*/
/*     {% if context.contenttype.relations[reltype] is not defined %}*/
/*         <p>{{ __('This record is related to:') }}</p>*/
/*         <table class="table table-striped dashboardlisting">*/
/*             {% for id in ids %}*/
/*                 {% setcontent record = reltype ~ '/' ~ id %}*/
/*                 {% if record %}*/
/*                     {% set editable = isallowed('edit', record) %}*/
/*                     {% include ['_sub/_listing.twig'] with {'excerptlength': 280, 'thumbsize': 54, 'compact': true, 'content': record, 'permissions': context.permissions} %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% if context.has.tabs and 'relations' in context.contenttype.groups %}*/
/*     {% include 'editcontent/_fields.twig' %}*/
/* {% endif %}*/
/* */
/* {% if not context.has.tabs %}*/
/*     <hr>*/
/* {% endif %}*/
/* */
