<?php

/* admin/role/templates/side-bar.html.twig */
class __TwigTemplate_2b2e2624eb6211ec24c6296ccdda9145a36bfcb403f7eb4f754b5e4783ba5043 extends Twig_Template
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
        $__internal_64d1f35f3d1e0a639bfca9be48ed489ca1e702a463eee4009d2645a516d16745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d1f35f3d1e0a639bfca9be48ed489ca1e702a463eee4009d2645a516d16745->enter($__internal_64d1f35f3d1e0a639bfca9be48ed489ca1e702a463eee4009d2645a516d16745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/side-bar.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->groupedPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array())), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array())), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedPermissions"]) {
            // line 2
            echo "  <div class=\"list-group\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedPermissions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 4
                    echo "      ";
                    $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                    // line 5
                    echo "
      ";
                    // line 6
                    $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]);
                    // line 7
                    echo "      ";
                    if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 8
                        echo "        ";
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? $this->getContext($context, "tabMenu")));
                        // line 9
                        echo "      ";
                    }
                    // line 10
                    echo "
      <a
          title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
          class=\"";
                    // line 13
                    echo twig_escape_filter($this->env, ($context["menuClass"] ?? $this->getContext($context, "menuClass")), "html", null, true);
                    echo "\"
          href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? $this->getContext($context, "tabMenu"))), "html", null, true);
                    echo "\"
      >
        ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
      </a>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_64d1f35f3d1e0a639bfca9be48ed489ca1e702a463eee4009d2645a516d16745->leave($__internal_64d1f35f3d1e0a639bfca9be48ed489ca1e702a463eee4009d2645a516d16745_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  68 => 16,  63 => 14,  59 => 13,  55 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  34 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for groupedPermissions in grouped_permissions(menu|parent_permission.code|parent_permission.code|default(null)) %}
  <div class=\"list-group\">
    {% for m in groupedPermissions if not m.visable is defined or (m.visable is defined and eval_expression(m.visable)) %}
      {% set menuClass = (m.code == menu|parent_permission.code|default(null) ? 'list-group-item active' : 'list-group-item') %}

      {% set tabMenu = first_child_permission(m) %}
      {% if tabMenu.mode|default('') == 'capsules' %}
        {% set tabMenu = first_child_permission(tabMenu) %}
      {% endif %}

      <a
          title=\"{{ m.name|trans }}\"
          class=\"{{ menuClass }}\"
          href=\"{{ permission_path(tabMenu) }}\"
      >
        {{ m.name|trans }}
      </a>
    {% endfor %}
  </div>
{% endfor %}
", "admin/role/templates/side-bar.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/side-bar.html.twig");
    }
}
