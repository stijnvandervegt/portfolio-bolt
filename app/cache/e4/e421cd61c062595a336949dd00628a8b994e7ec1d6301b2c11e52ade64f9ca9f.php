<?php

/* activity/systemlog.twig */
class __TwigTemplate_6d3a0c024a3b5ff64ce9f7fc3bddce8b191d3daf676f13c1f0718e8da8958e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "activity/systemlog.twig", 3);
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
        echo $this->env->getExtension('Bolt')->trans("logs.system-log");
    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $context["__internal_df8515f3f056312e17779b7e51bd0c872c53ab79bce7c82251dc6b9673c57ef7"] = $this->loadTemplate("_macro/_pager.twig", "activity/systemlog.twig", 11);
        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "activity/systemlog.twig", 13);
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            <form class=\"form-inline\" role=\"form\">
                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"level\" id=\"level\">
                        <option value=\"\">-- Level --</option>
                        <option value=\"100\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(100), "html", null, true);
        echo "</option>
                        <option value=\"200\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(200), "html", null, true);
        echo "</option>
                        <option value=\"250\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(250), "html", null, true);
        echo "</option>
                        <option value=\"300\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(300), "html", null, true);
        echo "</option>
                        <option value=\"400\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(400), "html", null, true);
        echo "</option>
                        <option value=\"500\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(500), "html", null, true);
        echo "</option>
                        <option value=\"550\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(550), "html", null, true);
        echo "</option>
                        <option value=\"600\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel(600), "html", null, true);
        echo "</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"context\" id=\"context\">
                        <option value=\"\">-- Context --</option>
                        <option value=\"authentication\">authentication</option>
                        <option value=\"config\">config</option>
                        <option value=\"content\">content</option>
                        <option value=\"cron\">cron</option>
                        <option value=\"deprecated\">deprecated</option>
                        <option value=\"exception\">exception</option>
                        <option value=\"news\">news</option>
                        <option value=\"nut\">nut</option>
                        <option value=\"security\">security</option>
                        <option value=\"storage\">storage</option>
                        <option value=\"template\">template</option>
                        <option value=\"translation\">translation</option>
                        <option value=\"twig\">twig</option>
                        <option value=\"upload\">upload</option>
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-secondary\"> <!-- href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("systemlog", array("action" => "trim"));
        echo "\"> -->
                    <i class=\"fa fa-filter\"></i> ";
        // line 54
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "
                </button>

                <div class=\"btn-group pull-right\" style=\"padding-bottom: 12px\">
                    <a class=\"btn btn-default\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("systemlog", array("action" => "trim"));
        echo "\">
                        <i class=\"fa fa-trash-o\"></i> ";
        // line 59
        echo $this->env->getExtension('Bolt')->trans("Trim System Log");
        echo "
                    </a>
                    <a class=\"btn btn-default confirm\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("systemlog", array("action" => "clear"));
        echo "\" data-confirm=\"Are you sure you want to clear the system logs?\">
                        <i class=\"fa fa-trash\"></i> ";
        // line 62
        echo $this->env->getExtension('Bolt')->trans("Clear System Log");
        echo "
                    </a>
                </div>
            </form>

            <table class=\"table table-striped dashboardlisting\">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Type</th>
                        <th>Context</th>
                        <th>Route</th>
                        <th>URI</th>
                        <th>Details</th>
                        <th>User</th>
                        <th>IP</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 83
            echo "                    <tr>
                        <td>
                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->logLevel($this->getAttribute($context["entry"], "level", array())), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "context", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "route", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "requesturi", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 100
            ob_start();
            // line 101
            echo "                            <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "message", array()), "html", null, true);
            echo "</b>
                            ";
            // line 102
            if ($this->getAttribute($context["entry"], "source", array())) {
                // line 103
                echo "                            <span class=\"info-pop pull-right\" style=\"background-color: inherit !important;\"
                                  data-content=\"";
                // line 104
                echo $this->getAttribute($this, "trace_info_html", array(0 => $this->getAttribute($context["entry"], "source", array())), "method");
                echo "\"
                                  data-html=\"true\" >
                                  <i class=\"fa fa-bug\"></i>
                            </span>
                            ";
            }
            // line 109
            echo "                            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 110
            echo "                        </td>
                        <td>
                            ";
            // line 112
            $context["user"] = $this->env->getExtension('Bolt')->getUser($this->getAttribute($context["entry"], "ownerid", array()));
            // line 113
            echo "                            ";
            if ( !twig_test_empty((isset($context["user"]) ? $context["user"] : null))) {
                // line 114
                echo "                                ";
                $context["userlink"] = $context["macro"]->getuserlink((isset($context["user"]) ? $context["user"] : null));
                // line 115
                echo "                            ";
            } else {
                // line 116
                echo "                                ";
                $context["userlink"] = $this->env->getExtension('Bolt')->trans("panel.latest-activity.unknown");
                // line 117
                echo "                            ";
            }
            // line 118
            echo "                            <em>";
            echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
            echo "</em>
                        </td>
                        <td>
                            ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "ip", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <time class=\"moment\" datetime=\"";
            // line 124
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
        // line 128
        echo "                </tbody>
            </table>

            ";
        // line 131
        echo $context["__internal_df8515f3f056312e17779b7e51bd0c872c53ab79bce7c82251dc6b9673c57ef7"]->getpager();
        echo "

        </div>
    </div>

";
    }

    // line 138
    public function gettrace_info_html($__source__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "source" => $__source__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            echo "    ";
            if ((isset($context["source"]) ? $context["source"] : null)) {
                // line 140
                echo "        ";
                $context["source"] = $this->env->getExtension('Bolt')->jsonDecode((isset($context["source"]) ? $context["source"] : null));
                // line 141
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["source"]) ? $context["source"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 142
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "<br>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "activity/systemlog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 144,  314 => 142,  309 => 141,  306 => 140,  303 => 139,  291 => 138,  281 => 131,  276 => 128,  262 => 124,  256 => 121,  249 => 118,  246 => 117,  243 => 116,  240 => 115,  237 => 114,  234 => 113,  232 => 112,  228 => 110,  225 => 109,  217 => 104,  214 => 103,  212 => 102,  207 => 101,  205 => 100,  199 => 97,  193 => 94,  187 => 91,  181 => 88,  175 => 85,  171 => 83,  167 => 82,  144 => 62,  140 => 61,  135 => 59,  131 => 58,  124 => 54,  120 => 53,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  55 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  42 => 9,  36 => 7,  30 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Dashboard > Configuration > System Log #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title __('logs.system-log') %}*/
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
/*             <form class="form-inline" role="form">*/
/*                 <div class="form-group">*/
/*                     <select class="form-control" name="level" id="level">*/
/*                         <option value="">-- Level --</option>*/
/*                         <option value="100">{{ 100|loglevel }}</option>*/
/*                         <option value="200">{{ 200|loglevel }}</option>*/
/*                         <option value="250">{{ 250|loglevel }}</option>*/
/*                         <option value="300">{{ 300|loglevel }}</option>*/
/*                         <option value="400">{{ 400|loglevel }}</option>*/
/*                         <option value="500">{{ 500|loglevel }}</option>*/
/*                         <option value="550">{{ 550|loglevel }}</option>*/
/*                         <option value="600">{{ 600|loglevel }}</option>*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <select class="form-control" name="context" id="context">*/
/*                         <option value="">-- Context --</option>*/
/*                         <option value="authentication">authentication</option>*/
/*                         <option value="config">config</option>*/
/*                         <option value="content">content</option>*/
/*                         <option value="cron">cron</option>*/
/*                         <option value="deprecated">deprecated</option>*/
/*                         <option value="exception">exception</option>*/
/*                         <option value="news">news</option>*/
/*                         <option value="nut">nut</option>*/
/*                         <option value="security">security</option>*/
/*                         <option value="storage">storage</option>*/
/*                         <option value="template">template</option>*/
/*                         <option value="translation">translation</option>*/
/*                         <option value="twig">twig</option>*/
/*                         <option value="upload">upload</option>*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <button type="submit" class="btn btn-secondary"> <!-- href="{{ path('systemlog', {'action': 'trim'}) }}"> -->*/
/*                     <i class="fa fa-filter"></i> {{ __('Filter') }}*/
/*                 </button>*/
/* */
/*                 <div class="btn-group pull-right" style="padding-bottom: 12px">*/
/*                     <a class="btn btn-default" href="{{ path('systemlog', {'action': 'trim'}) }}">*/
/*                         <i class="fa fa-trash-o"></i> {{ __('Trim System Log') }}*/
/*                     </a>*/
/*                     <a class="btn btn-default confirm" href="{{ path('systemlog', {'action': 'clear'}) }}" data-confirm="Are you sure you want to clear the system logs?">*/
/*                         <i class="fa fa-trash"></i> {{ __('Clear System Log') }}*/
/*                     </a>*/
/*                 </div>*/
/*             </form>*/
/* */
/*             <table class="table table-striped dashboardlisting">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>№</th>*/
/*                         <th>Type</th>*/
/*                         <th>Context</th>*/
/*                         <th>Route</th>*/
/*                         <th>URI</th>*/
/*                         <th>Details</th>*/
/*                         <th>User</th>*/
/*                         <th>IP</th>*/
/*                         <th>Date</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entry in entries %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {{ entry.id }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.level|loglevel }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.context }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.route }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entry.requesturi }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% spaceless %}*/
/*                             <b>{{ entry.message }}</b>*/
/*                             {% if entry.source %}*/
/*                             <span class="info-pop pull-right" style="background-color: inherit !important;"*/
/*                                   data-content="{{ _self.trace_info_html(entry.source) }}"*/
/*                                   data-html="true" >*/
/*                                   <i class="fa fa-bug"></i>*/
/*                             </span>*/
/*                             {% endif %}*/
/*                             {% endspaceless %}*/
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
/*                             {{ entry.ip }}*/
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
/* {% macro trace_info_html(source) %}*/
/*     {% if source %}*/
/*         {% set source = source|json_decode %}*/
/*         {% for key,value in source %}*/
/*             {{ key }}: {{ value }}<br>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
