<?php

/* admin/common-admin/li.html.twig */
class __TwigTemplate_f2981f3afb7c287363a275f0774cfd7c2ee69e0bce26b66b626c5000bcefbf87 extends Twig_Template
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
        $__internal_35a3bc88f140581a5fbe42357819bee66bf24237d9d437ad164c52b8e1ad38d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a3bc88f140581a5fbe42357819bee66bf24237d9d437ad164c52b8e1ad38d1->enter($__internal_35a3bc88f140581a5fbe42357819bee66bf24237d9d437ad164c52b8e1ad38d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/common-admin/li.html.twig"));

        // line 1
        echo "<li class=\"shortcut-item clearfix\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"glyphicon glyphicon-bookmark text-info\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "title", array()), "html", null, true);
        echo "
  </a>
  <span class=\"glyphicon glyphicon-remove-circle text-muted\" data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_remove", array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除常用链接"), "html", null, true);
        echo "\"></span>
</li>";
        
        $__internal_35a3bc88f140581a5fbe42357819bee66bf24237d9d437ad164c52b8e1ad38d1->leave($__internal_35a3bc88f140581a5fbe42357819bee66bf24237d9d437ad164c52b8e1ad38d1_prof);

    }

    public function getTemplateName()
    {
        return "admin/common-admin/li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"shortcut-item clearfix\">
  <a href=\"{{admin.url}}\">
    <i class=\"glyphicon glyphicon-bookmark text-info\"></i>
    {{admin.title}}
  </a>
  <span class=\"glyphicon glyphicon-remove-circle text-muted\" data-url=\"{{ path('admin_common_remove', {id:admin.id}) }}\" title=\"{{'删除常用链接'|trans}}\"></span>
</li>", "admin/common-admin/li.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/common-admin/li.html.twig");
    }
}
