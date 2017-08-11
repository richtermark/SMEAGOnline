<?php

/* course/header/nav-tab-for-member.html.twig */
class __TwigTemplate_2eddcd0cccf6ddbe15bee72993fc5e5d3bc5a4d918299d15bef722fd612b4bbf extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs ";
        if (($context["mobile"] ?? null)) {
            echo " es-mobile-nav ";
        }
        echo "\" role=\"tablist\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["metas"] ?? null), "tabs", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 3
            echo "\t\t";
            if (($context["mobile"] ?? null)) {
                // line 4
                echo "\t\t\t";
                if (( !((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)) && ($this->getAttribute($context["loop"], "index", array()) <= 3))) {
                    // line 5
                    echo "\t\t\t\t<li role=\"presentation\" id=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
\t\t\t\t    class=\"";
                    // line 6
                    if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                    // line 8
                    if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                        // line 9
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                    } else {
                        // line 11
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 15
                    if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                        // line 16
                        echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                        echo twig_escape_filter($this->env, ($context["categoryTag"] ?? null), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t\t";
                    if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                        // line 19
                        echo "\t\t\t\t\t\t\t";
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                            // line 20
                            echo "\t\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t\t";
                        } else {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t\t";
                        }
                        // line 24
                        echo "\t\t\t\t\t\t";
                    }
                    // line 25
                    echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                } elseif (($this->getAttribute(                // line 27
$context["loop"], "index", array()) == 1)) {
                    // line 28
                    echo "\t\t\t\t<li role=\"presentation\" id=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
\t\t\t\t    class=\"navs ";
                    // line 29
                    if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                    // line 31
                    if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                    } else {
                        // line 34
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 38
                    if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                        // line 39
                        echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                        echo twig_escape_filter($this->env, ($context["categoryTag"] ?? null), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t";
                    if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                        // line 42
                        echo "\t\t\t\t\t\t\t";
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                            // line 43
                            echo "\t\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t\t";
                        } else {
                            // line 45
                            echo "\t\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t\t";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 51
                echo "\t\t";
            } else {
                // line 52
                echo "\t\t\t<li role=\"presentation\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
\t\t\t    class=\"";
                // line 53
                if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a
\t\t\t\t\t\t";
                // line 55
                if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                    // line 56
                    echo "\t\t\t\t\t\t\thref=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t\thref=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t>
\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 62
                if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                    // line 63
                    echo "\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                    echo twig_escape_filter($this->env, ($context["categoryTag"] ?? null), "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                    // line 66
                    echo "\t\t\t\t\t\t";
                    if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                        // line 67
                        echo "\t\t\t\t\t\t\t<small>(";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                        echo ")</small>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<small>(";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                        echo ")</small>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 75
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "course/header/nav-tab-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 76,  254 => 75,  249 => 72,  246 => 71,  240 => 69,  234 => 67,  231 => 66,  228 => 65,  222 => 63,  220 => 62,  216 => 61,  213 => 60,  207 => 58,  201 => 56,  199 => 55,  192 => 53,  187 => 52,  184 => 51,  179 => 48,  176 => 47,  170 => 45,  164 => 43,  161 => 42,  158 => 41,  152 => 39,  150 => 38,  146 => 37,  143 => 36,  137 => 34,  131 => 32,  129 => 31,  122 => 29,  117 => 28,  115 => 27,  111 => 25,  108 => 24,  102 => 22,  96 => 20,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  78 => 14,  75 => 13,  69 => 11,  63 => 9,  61 => 8,  54 => 6,  49 => 5,  46 => 4,  43 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/nav-tab-for-member.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/nav-tab-for-member.html.twig");
    }
}
