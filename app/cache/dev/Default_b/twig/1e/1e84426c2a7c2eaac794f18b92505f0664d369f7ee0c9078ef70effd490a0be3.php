<?php

/* org/parts/table-body-td.html.twig */
class __TwigTemplate_bd1d1f23996a515d6c9c82b16d4f73cbc58180533aad5b3d62ab8d3cca8fd9d4 extends Twig_Template
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
        $__internal_bb03a88fb7c7b0aa0cf5c74f1e3088eb6fb2a163746437e47c2a43cf47dcd8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb03a88fb7c7b0aa0cf5c74f1e3088eb6fb2a163746437e47c2a43cf47dcd8ee->enter($__internal_bb03a88fb7c7b0aa0cf5c74f1e3088eb6fb2a163746437e47c2a43cf47dcd8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-body-td.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<td>
\t    ";
            // line 3
            $context["org"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Org", array("orgCode" => ($context["orgCode"] ?? $this->getContext($context, "orgCode"))));
            // line 4
            echo "\t    ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["org"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["org"] ?? null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t    <br>
\t    <span class=\"color-gray text-sm\">编码：";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["org"] ?? $this->getContext($context, "org")), "code", array()), "html", null, true);
            echo "</span>
\t</td>
";
        }
        
        $__internal_bb03a88fb7c7b0aa0cf5c74f1e3088eb6fb2a163746437e47c2a43cf47dcd8ee->leave($__internal_bb03a88fb7c7b0aa0cf5c74f1e3088eb6fb2a163746437e47c2a43cf47dcd8ee_prof);

    }

    public function getTemplateName()
    {
        return "org/parts/table-body-td.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
\t<td>
\t    {% set org = data('Org',{orgCode: orgCode}) %}
\t    {{ org.name|default('--')}}
\t    <br>
\t    <span class=\"color-gray text-sm\">编码：{{ org.code }}</span>
\t</td>
{% endif %}", "org/parts/table-body-td.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/parts/table-body-td.html.twig");
    }
}
