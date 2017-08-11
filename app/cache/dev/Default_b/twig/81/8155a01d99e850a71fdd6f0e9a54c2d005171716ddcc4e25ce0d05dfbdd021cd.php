<?php

/* expression.twig */
class __TwigTemplate_0c07a0319874849cf79b50cc09b932bdeddf3edb08bb5cee55db47e618d7b0e4 extends Twig_Template
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
        $__internal_e3459eac693f94caf5ecbcd2608302f0f2a843496fab60c6112c4359303a3123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3459eac693f94caf5ecbcd2608302f0f2a843496fab60c6112c4359303a3123->enter($__internal_e3459eac693f94caf5ecbcd2608302f0f2a843496fab60c6112c4359303a3123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "type", array()) != "system") && ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "locked", array()) == 1)), "html", null, true);
        
        $__internal_e3459eac693f94caf5ecbcd2608302f0f2a843496fab60c6112c4359303a3123->leave($__internal_e3459eac693f94caf5ecbcd2608302f0f2a843496fab60c6112c4359303a3123_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{user.type != 'system' and user.locked == 1}}", "expression.twig", "");
    }
}
