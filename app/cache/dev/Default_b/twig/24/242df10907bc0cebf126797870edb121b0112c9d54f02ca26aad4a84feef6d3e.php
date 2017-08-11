<?php

/* es-bar/left-list/qq-consult.html.twig */
class __TwigTemplate_6159352e8c512446df924fa2554a830f548a8456fbac903e6b76bcec1682e23f extends Twig_Template
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
        $__internal_bc33d882ccfb028649feb966c76e26100f53fcf014a5f0ff67109fc129cf5c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc33d882ccfb028649feb966c76e26100f53fcf014a5f0ff67109fc129cf5c88->enter($__internal_bc33d882ccfb028649feb966c76e26100f53fcf014a5f0ff67109fc129cf5c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/qq-consult.html.twig"));

        // line 1
        if ((($context["consultQqs"] ?? $this->getContext($context, "consultQqs")) || ($context["consultQqGroups"] ?? $this->getContext($context, "consultQqGroups")))) {
            // line 2
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服及QQ群"), "html", null, true);
            echo "\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
        
        $__internal_bc33d882ccfb028649feb966c76e26100f53fcf014a5f0ff67109fc129cf5c88->leave($__internal_bc33d882ccfb028649feb966c76e26100f53fcf014a5f0ff67109fc129cf5c88_prof);

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
        return new Twig_Source("{% if consultQqs or consultQqGroups %}
  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"{{'QQ客服及QQ群'|trans}}\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/qq-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/qq-consult.html.twig");
    }
}
