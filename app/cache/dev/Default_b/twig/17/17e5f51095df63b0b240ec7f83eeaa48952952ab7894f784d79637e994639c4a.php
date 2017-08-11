<?php

/* expression.twig */
class __TwigTemplate_0cd9e9cfae400dad0d8bc3ffd4bbdecf4c4d305dc31de9401ddce70e8baf57a2 extends Twig_Template
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
        $__internal_baf3b9f4f7b8ade2024d647bc28285780b39a5b80f1d066e7fb8981bb373e572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf3b9f4f7b8ade2024d647bc28285780b39a5b80f1d066e7fb8981bb373e572->enter($__internal_baf3b9f4f7b8ade2024d647bc28285780b39a5b80f1d066e7fb8981bb373e572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        
        $__internal_baf3b9f4f7b8ade2024d647bc28285780b39a5b80f1d066e7fb8981bb373e572->leave($__internal_baf3b9f4f7b8ade2024d647bc28285780b39a5b80f1d066e7fb8981bb373e572_prof);

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
        return new Twig_Source("{{user.id}}", "expression.twig", "");
    }
}
