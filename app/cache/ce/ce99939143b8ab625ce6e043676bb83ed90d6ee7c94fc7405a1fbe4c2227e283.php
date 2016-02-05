<?php

/* activity/changelog.twig */
class __TwigTemplate_4986cca237f8626dd3fca2710f919dc13026b82fc2d84989f70a66cd55b538ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "activity/changelog.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("logs.change-log");
    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $context["__internal_f4b16dc542aa55f4b673eb5447c7d7ff48667d646a0d58fd4bd1c1ca761c794f"] = $this->loadTemplate("_macro/_pager.twig", "activity/changelog.twig", 11);
        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "activity/changelog.twig", 13);
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            <div class=\"btn-group pull-right\" style=\"padding-bottom: 12px\">
                <a class=\"btn btn-default\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("changelog", array("action" => "trim"));
        echo "\">
                    <i class=\"fa fa-trash-o\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Trim Change Log");
        echo "
                </a>
                <a class=\"btn btn-default confirm\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("changelog", array("action" => "clear"));
        echo "\" data-confirm=\"Are you sure you want to clear the change logs?\">
                    <i class=\"fa fa-trash\"></i> ";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("Clear Change Log");
        echo "
                </a>
            </div>

            <table class=\"table table-striped dashboardlisting\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Type</th>
                        <th>Contenttype</th>
                        <th>Title</th>
                        <th>Fields</th>
                        <th>Comment</th>
                        <th>User</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 42
            echo "                    <tr>
                        <td>
                            № ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["entry"], "mutation_type", array())), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contenttype", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            [";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter($this->getAttribute($context["entry"], "diff", array())), ", "), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "comment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "comment", array()), "")) : ("")), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 62
            $context["user"] = $this->env->getExtension('Bolt')->getUser($this->getAttribute($context["entry"], "ownerid", array()));
            // line 63
            echo "                            ";
            if ( !twig_test_empty((isset($context["user"]) ? $context["user"] : null))) {
                // line 64
                echo "                                ";
                $context["userlink"] = $context["macro"]->getuserlink((isset($context["user"]) ? $context["user"] : null));
                // line 65
                echo "                            ";
            } else {
                // line 66
                echo "                                ";
                $context["userlink"] = $this->env->getExtension('Bolt')->trans("panel.latest-activity.unknown");
                // line 67
                echo "                            ";
            }
            // line 68
            echo "                            <em>";
            echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
            echo "</em>
                        </td>
                        <td>
                            <time class=\"moment\" datetime=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "date", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "date", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "date", array()), "html", null, true);
            echo "</time>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>

            ";
        // line 78
        echo $context["__internal_f4b16dc542aa55f4b673eb5447c7d7ff48667d646a0d58fd4bd1c1ca761c794f"]->getpager();
        echo "

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "activity/changelog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 78,  180 => 75,  166 => 71,  159 => 68,  156 => 67,  153 => 66,  150 => 65,  147 => 64,  144 => 63,  142 => 62,  136 => 59,  130 => 56,  122 => 53,  116 => 50,  110 => 47,  104 => 44,  100 => 42,  96 => 41,  75 => 23,  71 => 22,  66 => 20,  62 => 19,  55 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  42 => 9,  36 => 7,  30 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Dashboard > Configuration > Change Log #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title __('logs.change-log') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% from '_macro/_pager.twig' import pager %}*/
/* */
/*     {% import '_macro/_macro.twig' as macro %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/* */
/*             <div class="btn-group pull-right" style="padding-bottom: 12px">*/
/*                 <a class="btn btn-default" href="{{ path('changelog', {'action': 'trim'}) }}">*/
/*                     <i class="fa fa-trash-o"></i> {{ __('Trim Change Log') }}*/
/*                 </a>*/
/*                 <a class="btn btn-default confirm" href="{{ path('changelog', {'action': 'clear'}) }}" data-confirm="Are you sure you want to clear the change logs?">*/
/*                     <i class="fa fa-trash"></i> {{ __('Clear Change Log') }}*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <table class="table table-striped dashboardlisting">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th></th>*/
/*                         <th>Type</th>*/
/*                         <th>Contenttype</th>*/
/*                         <th>Title</th>*/
/*                         <th>Fields</th>*/
/*                         <th>Comment</th>*/
/*                         <th>User</th>*/
/*                         <th>Date</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entry in entries %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             № {{ entry.id }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.mutation_type|title }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.contenttype }}*/
/*                         </td>*/
/*                         <td>*/
/*                             [{{ entry.contentid }}] {{ entry.title }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.diff|keys|join(', ') }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.comment|default('') }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% set user = getuser(entry.ownerid) %}*/
/*                             {% if user is not empty %}*/
/*                                 {% set userlink = macro.userlink(user) %}*/
/*                             {% else %}*/
/*                                 {% set userlink = __('panel.latest-activity.unknown') %}*/
/*                             {% endif %}*/
/*                             <em>{{ userlink }}</em>*/
/*                         </td>*/
/*                         <td>*/
/*                             <time class="moment" datetime="{{ entry.date|date("c") }}" title="{{ entry.date }}">{{ entry.date }}</time>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*             {{ pager() }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
