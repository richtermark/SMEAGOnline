<?php

/* default/top-navigation.html.twig */
class __TwigTemplate_78475eca8d1593d4aa0cecaf9c2aecdebac836b3bda66f19d959660bb9d25dc7 extends Twig_Template
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
        $__internal_2055823e4a00a4829ce9f2986e1dc07f6bcbf3937df5fbc12a7d543645b9f65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2055823e4a00a4829ce9f2986e1dc07f6bcbf3937df5fbc12a7d543645b9f65f->enter($__internal_2055823e4a00a4829ce9f2986e1dc07f6bcbf3937df5fbc12a7d543645b9f65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/top-navigation.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? $this->getContext($context, "navigations")));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 3
            echo "    ";
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "    ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 5
                echo "      <li class=\"";
                if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
                    echo " dropdown ";
                }
                if ((($context["siteNav"] ?? $this->getContext($context, "siteNav")) && (($context["siteNav"] ?? $this->getContext($context, "siteNav")) == $this->getAttribute($context["nav"], "url", array())))) {
                    echo "active ";
                }
                echo "\">
        <a href=\"";
                // line 6
                if ($this->getAttribute($context["nav"], "url", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["nav"], "url", array())), "html", null, true);
                } else {
                    echo "javascript:;";
                }
                echo "\" class=\"";
                if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
                    echo " dropdown-toggle ";
                }
                echo "\" ";
                if ($this->getAttribute($context["nav"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo " ";
                if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
                    echo " data-toggle=\"dropdown\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "name", array()), "html", null, true);
                echo " ";
                if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
                    echo " <b class=\"caret\"></b>";
                }
                echo "</a>
        ";
                // line 7
                if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
                    // line 8
                    echo "          <ul class=\"dropdown-menu\">
            ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subNavs"] ?? $this->getContext($context, "subNavs")));
                    foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                        // line 10
                        echo "              ";
                        if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                            // line 11
                            echo "              <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                            echo "\"  ";
                            if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                                echo "target=\"_blank\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                            echo "</a></li>
              ";
                        }
                        // line 13
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "          </ul>
        ";
                }
                // line 16
                echo "      </li>
    ";
            }
            // line 18
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
        
        $__internal_2055823e4a00a4829ce9f2986e1dc07f6bcbf3937df5fbc12a7d543645b9f65f->leave($__internal_2055823e4a00a4829ce9f2986e1dc07f6bcbf3937df5fbc12a7d543645b9f65f_prof);

    }

    public function getTemplateName()
    {
        return "default/top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 19,  109 => 18,  105 => 16,  101 => 14,  95 => 13,  83 => 11,  80 => 10,  76 => 9,  73 => 8,  71 => 7,  45 => 6,  35 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav\">
  {% for nav in navigations %}
    {% if nav.isOpen %}
    {% set subNavs = nav.children|default([]) %}
      <li class=\"{% if subNavs %} dropdown {% endif %}{% if siteNav and siteNav == nav.url %}active {% endif %}\">
        <a href=\"{% if nav.url %}{{ nav.url|navigation_url }}{% else %}javascript:;{% endif %}\" class=\"{% if subNavs %} dropdown-toggle {% endif %}\" {% if nav.isNewWin %}target=\"_blank\"{% endif %} {% if subNavs %} data-toggle=\"dropdown\" {% endif %}>{{ nav.name }} {% if subNavs %} <b class=\"caret\"></b>{% endif %}</a>
        {% if subNavs %}
          <ul class=\"dropdown-menu\">
            {% for subNav in subNavs %}
              {% if subNav.isOpen %}
              <li><a href=\"{{ subNav.url|navigation_url }}\"  {% if subNav.isNewWin %}target=\"_blank\"{% endif %}>{{ subNav.name }}</a></li>
              {% endif %}
            {% endfor %}
          </ul>
        {% endif %}
      </li>
    {% endif %}
  {% endfor %}
</ul>", "default/top-navigation.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/top-navigation.html.twig");
    }
}
