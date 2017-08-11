<?php

/* admin/category/embed.html.twig */
class __TwigTemplate_7a2160a2382f1f66d80cf5119a0b9244ea6e3aca6e1bb46daff18d8cc1e7761e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/category/embed.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), "admin_course_category_manage")) : ("admin_course_category_manage"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
      <div class=\"row\">
        <div class=\"td col-md-7\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-2\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编码"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</div>
      </div>
    </li>
    ";
        // line 15
        $this->loadTemplate("admin/category/tbody.html.twig", "admin/category/embed.html.twig", 15)->display($context);
        // line 16
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "admin/category/embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  48 => 12,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/category/embed.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/category/embed.html.twig");
    }
}
