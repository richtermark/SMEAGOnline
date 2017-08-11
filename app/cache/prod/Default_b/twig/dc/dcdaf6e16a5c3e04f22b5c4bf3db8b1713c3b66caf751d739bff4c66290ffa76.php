<?php

/* es-bar/left-list/qq-consult.html.twig */
class __TwigTemplate_9297011887764c31fd2f8b94ef56e93c90a03bcd6d418e423df7479bc22765d2 extends Twig_Template
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
        if ((($context["consultQqs"] ?? null) || ($context["consultQqGroups"] ?? null))) {
            // line 2
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服及QQ群"), "html", null, true);
            echo "\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/left-list/qq-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list/qq-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/qq-consult.html.twig");
    }
}
