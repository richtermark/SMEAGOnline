<?php

/* expression.twig */
class __TwigTemplate_c5967c83513d3ac455257d9e563d4642e653c8693dba2d8da95a4dd881356e3e extends Twig_Template
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
        $__internal_5f94b039918d1e5fdc160614c82a9a97fa1bea4941f8599197201bf8aa2894aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f94b039918d1e5fdc160614c82a9a97fa1bea4941f8599197201bf8aa2894aa->enter($__internal_5f94b039918d1e5fdc160614c82a9a97fa1bea4941f8599197201bf8aa2894aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "type", array()) != "system") && ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "locked", array()) == 0)), "html", null, true);
        
        $__internal_5f94b039918d1e5fdc160614c82a9a97fa1bea4941f8599197201bf8aa2894aa->leave($__internal_5f94b039918d1e5fdc160614c82a9a97fa1bea4941f8599197201bf8aa2894aa_prof);

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
        return new Twig_Source("{{user.type != 'system' and user.locked == 0}}", "expression.twig", "");
    }
}
