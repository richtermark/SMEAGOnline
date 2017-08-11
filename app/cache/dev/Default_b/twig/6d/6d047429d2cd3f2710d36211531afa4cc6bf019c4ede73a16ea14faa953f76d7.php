<?php

/* expression.twig */
class __TwigTemplate_8e6fa55774c2ffe9396e0a61340aa73981cef123f2afb91142c3f9644128f6d2 extends Twig_Template
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
        $__internal_dbec11af41c0050d0ba8ee15c6a0fb53cc15bd7726155ba40b56f2adfc09a053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbec11af41c0050d0ba8ee15c6a0fb53cc15bd7726155ba40b56f2adfc09a053->enter($__internal_dbec11af41c0050d0ba8ee15c6a0fb53cc15bd7726155ba40b56f2adfc09a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork()), "html", null, true);
        
        $__internal_dbec11af41c0050d0ba8ee15c6a0fb53cc15bd7726155ba40b56f2adfc09a053->leave($__internal_dbec11af41c0050d0ba8ee15c6a0fb53cc15bd7726155ba40b56f2adfc09a053_prof);

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
        return new Twig_Source("{{not (setting('copyright.thirdCopyright', false) == 1) and not is_without_network()}}", "expression.twig", "");
    }
}
