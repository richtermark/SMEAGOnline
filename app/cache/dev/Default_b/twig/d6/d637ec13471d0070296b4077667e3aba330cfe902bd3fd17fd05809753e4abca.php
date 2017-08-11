<?php

/* expression.twig */
class __TwigTemplate_1d54eac5e58d0c3dcdb5afd4ffa4babf2ebe610009564d16095f1812e179757b extends Twig_Template
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
        $__internal_bce034f317bd9ea5b9709b55e9bee9525919ae567c85148806b47eab00eea58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce034f317bd9ea5b9709b55e9bee9525919ae567c85148806b47eab00eea58c->enter($__internal_bce034f317bd9ea5b9709b55e9bee9525919ae567c85148806b47eab00eea58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "type", array()) != "system"), "html", null, true);
        
        $__internal_bce034f317bd9ea5b9709b55e9bee9525919ae567c85148806b47eab00eea58c->leave($__internal_bce034f317bd9ea5b9709b55e9bee9525919ae567c85148806b47eab00eea58c_prof);

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
        return new Twig_Source("{{user.type != 'system'}}", "expression.twig", "");
    }
}
