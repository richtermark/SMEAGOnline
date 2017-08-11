<?php

/* admin/common-admin/main.html.twig */
class __TwigTemplate_1055da75f3a507113b140222f5ee2fbc539c2174452bdb37af18bc9cb398c3da extends Twig_Template
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
        $__internal_7ff7ffbefde2433ec87e796de99f6941bdafabafb0c338b57075910d22fcfec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff7ffbefde2433ec87e796de99f6941bdafabafb0c338b57075910d22fcfec9->enter($__internal_7ff7ffbefde2433ec87e796de99f6941bdafabafb0c338b57075910d22fcfec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/common-admin/main.html.twig"));

        // line 1
        if ((($context["isCollect"] ?? $this->getContext($context, "isCollect")) == 0)) {
            // line 2
            echo "  <li class=\"shortcut-add\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_add");
            echo "\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加当前页面为常用功能"), "html", null, true);
            echo "</a></li>
";
        } else {
            // line 4
            echo "  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前页面已添加"), "html", null, true);
            echo "</span></a></li>
";
        }
        // line 6
        echo "
";
        // line 7
        if (($context["admins"] ?? $this->getContext($context, "admins"))) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 12
            echo "  ";
            $this->loadTemplate("admin/common-admin/li.html.twig", "admin/common-admin/main.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7ff7ffbefde2433ec87e796de99f6941bdafabafb0c338b57075910d22fcfec9->leave($__internal_7ff7ffbefde2433ec87e796de99f6941bdafabafb0c338b57075910d22fcfec9_prof);

    }

    public function getTemplateName()
    {
        return "admin/common-admin/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  50 => 11,  47 => 10,  43 => 8,  41 => 7,  38 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isCollect == 0 %}
  <li class=\"shortcut-add\" data-url=\"{{path('admin_common_add')}}\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加当前页面为常用功能'|trans}}</a></li>
{% else %}
  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">{{'当前页面已添加'|trans}}</span></a></li>
{% endif %}

{% if admins %}
  <li role=\"presentation\" class=\"divider\"></li>
{% endif %}

{% for admin in admins %}
  {% include 'admin/common-admin/li.html.twig' %}
{% endfor %}", "admin/common-admin/main.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/common-admin/main.html.twig");
    }
}
