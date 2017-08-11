<?php

/* admin/role/templates/navigation.html.twig */
class __TwigTemplate_a3f2532a9559ad3ad12b06554981b87e4d5348176315445200b4661c356755a0 extends Twig_Template
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
        $__internal_b104a6ad9fbba0c9e10d0ec116897c6fa5fc27fed0ec2c31a1bcd12ea3f3e7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b104a6ad9fbba0c9e10d0ec116897c6fa5fc27fed0ec2c31a1bcd12ea3f3e7fc->enter($__internal_b104a6ad9fbba0c9e10d0ec116897c6fa5fc27fed0ec2c31a1bcd12ea3f3e7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/navigation.html.twig"));

        // line 1
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions(($context["parentCode"] ?? $this->getContext($context, "parentCode")));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter(($context["permissions"] ?? $this->getContext($context, "permissions")), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array())))) {
                    // line 12
                    echo "      ";
                    // line 13
                    echo "      ";
                    if (($this->getAttribute($context["m"], "code", array()) != "admin_homepage")) {
                        // line 14
                        echo "        <li ";
                        if ((($context["menu"] ?? $this->getContext($context, "menu")) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute(($context["rootMenu"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["rootMenu"] ?? null), "code", array()), null)) : (null))))) {
                            echo "class=\"active\"";
                        }
                        echo ">
          
          ";
                        // line 16
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 17
                        echo "          ";
                        if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules")) {
                            // line 18
                            echo "            ";
                            $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? $this->getContext($context, "tabMenu")));
                            // line 19
                            echo "          ";
                        }
                        // line 20
                        echo "          <a
              title=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                        echo "\"
              href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? $this->getContext($context, "tabMenu"))), "html", null, true);
                        echo "\"
              ";
                        // line 23
                        if ((($this->getAttribute($context["m"], "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", array()), false)) : (false))) {
                            // line 24
                            echo "                target=\"_blank\"
              ";
                        }
                        // line 26
                        echo "          >
            ";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                        echo "
          </a>

        ";
                        // line 31
                        echo "      </li>
      ";
                    }
                    // line 33
                    echo "      ";
                    // line 34
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ul>
";
        }
        
        $__internal_b104a6ad9fbba0c9e10d0ec116897c6fa5fc27fed0ec2c31a1bcd12ea3f3e7fc->leave($__internal_b104a6ad9fbba0c9e10d0ec116897c6fa5fc27fed0ec2c31a1bcd12ea3f3e7fc_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  109 => 34,  107 => 33,  103 => 31,  97 => 27,  94 => 26,  90 => 24,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  58 => 14,  55 => 13,  53 => 12,  48 => 11,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set permissions = sub_permissions(parentCode) %}

{% if permissions|default(null) %}
  {% if menu|default(null) %}
    {% set rootMenu = menu|parent_permission.code|parent_permission %}
  {% else %}
    {% set rootMenu = permission('admin') %}
  {% endif %}

  <ul class=\"nav navbar-nav\">
    {% for m in permissions if not m.visable is defined or eval_expression(m.visable) %}
      {# {% if not (m.code == 'admin_app' and (setting('copyright.thirdCopyright') == 1 or is_without_network())) %} #}
      {% if m.code != 'admin_homepage' %}
        <li {% if menu and  m.code == rootMenu.code|default(null) %}class=\"active\"{% endif %}>
          
          {% set tabMenu = first_child_permission(first_child_permission(m)) %}
          {% if tabMenu.mode|default('') == 'capsules' %}
            {% set tabMenu = first_child_permission(tabMenu) %}
          {% endif %}
          <a
              title=\"{{ m.name|trans }}\"
              href=\"{{ permission_path(tabMenu) }}\"
              {% if m.blank|default(false)%}
                target=\"_blank\"
              {% endif %}
          >
            {{ m.name|trans }}
          </a>

        {# {{ self_macro.menu_link_html(_context, currentMenu) }} #}
      </li>
      {% endif %}
      {# {% endif %} #}
    {% endfor %}
  </ul>
{% endif %}
", "admin/role/templates/navigation.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/navigation.html.twig");
    }
}
