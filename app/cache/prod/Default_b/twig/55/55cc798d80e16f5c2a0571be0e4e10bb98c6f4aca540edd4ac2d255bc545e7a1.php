<?php

/* org/parts/table-body-td.html.twig */
class __TwigTemplate_83dd5d275ea8f778fc80d5eb71ae06b550bfc2cc879f66d3717ec78e816c77b4 extends Twig_Template
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
        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<td>
\t    ";
            // line 3
            $context["org"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Org", array("orgCode" => ($context["orgCode"] ?? null)));
            // line 4
            echo "\t    ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["org"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["org"] ?? null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t    <br>
\t    <span class=\"color-gray text-sm\">编码：";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["org"] ?? null), "code", array()), "html", null, true);
            echo "</span>
\t</td>
";
        }
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
        return array (  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/parts/table-body-td.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/parts/table-body-td.html.twig");
    }
}
