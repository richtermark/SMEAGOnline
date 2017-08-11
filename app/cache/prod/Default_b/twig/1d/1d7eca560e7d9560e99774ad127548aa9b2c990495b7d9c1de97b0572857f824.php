<?php

/* es-bar/left-list/phone-consult.html.twig */
class __TwigTemplate_943d9e9113acb4344c5efe9e676d960e5abe5c3f9e55a39cfda259ab6e6864b3 extends Twig_Template
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
        if ((($context["consultPhones"] ?? null) ||  !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "worktime", array())))) {
            // line 2
            echo "  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话客服"), "html", null, true);
            echo "\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/left-list/phone-consult.html.twig";
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
        return new Twig_Source("", "es-bar/left-list/phone-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/phone-consult.html.twig");
    }
}
