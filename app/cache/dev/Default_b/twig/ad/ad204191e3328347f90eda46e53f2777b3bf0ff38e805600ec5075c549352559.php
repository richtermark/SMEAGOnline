<?php

/* org/parts/table-body-checkbox.html.twig */
class __TwigTemplate_20b4e186a2092d6700b5ae7e2e989ef95d6a159f09e3a922c3681f6e3132d24e extends Twig_Template
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
        $__internal_575ecb3e4f22a3939407e7f25432aa538880ae3c2d9e1a727b8ecfa8a2306730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575ecb3e4f22a3939407e7f25432aa538880ae3c2d9e1a727b8ecfa8a2306730->enter($__internal_575ecb3e4f22a3939407e7f25432aa538880ae3c2d9e1a727b8ecfa8a2306730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-body-checkbox.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
        
        $__internal_575ecb3e4f22a3939407e7f25432aa538880ae3c2d9e1a727b8ecfa8a2306730->leave($__internal_575ecb3e4f22a3939407e7f25432aa538880ae3c2d9e1a727b8ecfa8a2306730_prof);

    }

    public function getTemplateName()
    {
        return "org/parts/table-body-checkbox.html.twig";
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
        return new Twig_Source("{% if setting('magic.enable_org','0') %}
\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
{% endif %}
", "org/parts/table-body-checkbox.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/parts/table-body-checkbox.html.twig");
    }
}
