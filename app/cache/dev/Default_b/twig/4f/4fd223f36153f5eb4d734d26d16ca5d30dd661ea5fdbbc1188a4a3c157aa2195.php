<?php

/* expression.twig */
class __TwigTemplate_29fd322982ec2b3155204e1b85cf8a69f4cc273f770369b55392bd0786e429e8 extends Twig_Template
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
        $__internal_6f0d8e8acd92ef0da2915274dda934fe5328045d14523bac0de5b552b10d21bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0d8e8acd92ef0da2915274dda934fe5328045d14523bac0de5b552b10d21bc->enter($__internal_6f0d8e8acd92ef0da2915274dda934fe5328045d14523bac0de5b552b10d21bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array())) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", 0) == 1)), "html", null, true);
        
        $__internal_6f0d8e8acd92ef0da2915274dda934fe5328045d14523bac0de5b552b10d21bc->leave($__internal_6f0d8e8acd92ef0da2915274dda934fe5328045d14523bac0de5b552b10d21bc_prof);

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
        return new Twig_Source("{{ app.user.id != user.id and setting('magic.enable_org', 0) == 1 }}", "expression.twig", "");
    }
}
