<?php

/* admin/role/templates/tabs.html.twig */
class __TwigTemplate_1183ed9c23eb6517e7b7893439999e7ca03c1989720279aa68c2a377c675db79 extends Twig_Template
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
        $__internal_58ffabc1df943007629c292819fb0464be5c61339fd1103db276da0cc3d58726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ffabc1df943007629c292819fb0464be5c61339fd1103db276da0cc3d58726->enter($__internal_58ffabc1df943007629c292819fb0464be5c61339fd1103db276da0cc3d58726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/tabs.html.twig"));

        // line 1
        $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter(($context["tabMenus"] ?? $this->getContext($context, "tabMenus")), null)) : (null)) && (twig_length_filter($this->env, ($context["tabMenus"] ?? $this->getContext($context, "tabMenus"))) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabMenus"] ?? $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 5
                    echo "
      ";
                    // line 6
                    if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                        // line 7
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                        // line 8
                        echo "      ";
                    } else {
                        // line 9
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 10
                        echo "      ";
                    }
                    // line 11
                    echo "
      <li ";
                    // line 12
                    if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
        <a
            title=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
            class=\"";
                    // line 15
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                    echo "\"
            href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                    echo "\"
        >
          ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
        </a>
      </li>

    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        }
        // line 25
        echo "
";
        
        $__internal_58ffabc1df943007629c292819fb0464be5c61339fd1103db276da0cc3d58726->leave($__internal_58ffabc1df943007629c292819fb0464be5c61339fd1103db276da0cc3d58726_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  86 => 23,  74 => 18,  69 => 16,  65 => 15,  61 => 14,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tabMenus = sub_permissions(menu|parent_permission.code|default(null)) %}
{% if tabMenus|default(null) and tabMenus|length > 1 %}
  <ul class=\"nav nav-tabs mbm\">
    {% for m in tabMenus if not m.visable is defined or (m.visable is defined and eval_expression(m.visable)) %}

      {% if not m.mode|default('') == 'capsules' %}
        {% set path = permission_path(m) %}
      {% else %}
        {% set path = permission_path(first_child_permission(m)) %}
      {% endif %}

      <li {% if m.code == menu|default(null) %}class=\"active\"{% endif %}>
        <a
            title=\"{{ m.name|trans }}\"
            class=\"{{ m.class|default('') }}\"
            href=\"{{ path }}\"
        >
          {{ m.name|trans }}
        </a>
      </li>

    {% endfor %}
  </ul>
{% endif %}

", "admin/role/templates/tabs.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/tabs.html.twig");
    }
}
