<?php

/* org/parts/table-thead-tr.html.twig */
class __TwigTemplate_c67d3f1d048136a3cbc9e0f07f9bc9f896f02b1641d94b5223b5b38b6d5ac8cc extends Twig_Template
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
            echo "  <th width=\"12%\">
\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属组织机构"), "html", null, true);
            echo "
  </th>
";
        }
    }

    public function getTemplateName()
    {
        return "org/parts/table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/parts/table-thead-tr.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/parts/table-thead-tr.html.twig");
    }
}
