<?php

/* es-bar/left-list/phone-consult.html.twig */
class __TwigTemplate_58f1fb8c1e0e771d87b4a63973d5e998297dd01406d80cf0ee30188fd57be82f extends Twig_Template
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
        $__internal_39375a7541296e716569a26153319a8bf3ed8e7642ea5bf5b088b9d43c253270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39375a7541296e716569a26153319a8bf3ed8e7642ea5bf5b088b9d43c253270->enter($__internal_39375a7541296e716569a26153319a8bf3ed8e7642ea5bf5b088b9d43c253270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/phone-consult.html.twig"));

        // line 1
        if ((($context["consultPhones"] ?? $this->getContext($context, "consultPhones")) ||  !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "worktime", array())))) {
            // line 2
            echo "  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话客服"), "html", null, true);
            echo "\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
";
        }
        
        $__internal_39375a7541296e716569a26153319a8bf3ed8e7642ea5bf5b088b9d43c253270->leave($__internal_39375a7541296e716569a26153319a8bf3ed8e7642ea5bf5b088b9d43c253270_prof);

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
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if consultPhones or consult.worktime is not empty %}
  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"{{'电话客服'|trans}}\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/phone-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/phone-consult.html.twig");
    }
}
