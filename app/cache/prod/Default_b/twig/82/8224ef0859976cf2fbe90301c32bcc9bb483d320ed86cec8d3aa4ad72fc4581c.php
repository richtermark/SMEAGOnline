<?php

/* admin/common-admin/li.html.twig */
class __TwigTemplate_1340927275ee7d7de1eff903c3ac398b2674c7dc2f2d3839261d799605b8df09 extends Twig_Template
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
        echo "<li class=\"shortcut-item clearfix\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "url", array()), "html", null, true);
        echo "\">
    <i class=\"glyphicon glyphicon-bookmark text-info\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "title", array()), "html", null, true);
        echo "
  </a>
  <span class=\"glyphicon glyphicon-remove-circle text-muted\" data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_remove", array("id" => $this->getAttribute(($context["admin"] ?? null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除常用链接"), "html", null, true);
        echo "\"></span>
</li>";
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
        return array (  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/common-admin/li.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/common-admin/li.html.twig");
    }
}
