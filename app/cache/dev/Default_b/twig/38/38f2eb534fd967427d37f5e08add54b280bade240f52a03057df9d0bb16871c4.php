<?php

/* org/parts/table-thead-tr.html.twig */
class __TwigTemplate_ef8d823cd371aa039d975af7161fe223916301fee454772f99fff0cfb74d42e6 extends Twig_Template
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
        $__internal_e74c608fc9d58533ef3a12f514386f117811fe0e6f4601e2573dc3448f58c0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74c608fc9d58533ef3a12f514386f117811fe0e6f4601e2573dc3448f58c0f2->enter($__internal_e74c608fc9d58533ef3a12f514386f117811fe0e6f4601e2573dc3448f58c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-thead-tr.html.twig"));

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
        
        $__internal_e74c608fc9d58533ef3a12f514386f117811fe0e6f4601e2573dc3448f58c0f2->leave($__internal_e74c608fc9d58533ef3a12f514386f117811fe0e6f4601e2573dc3448f58c0f2_prof);

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
        return array (  27 => 3,  24 => 2,  22 => 1,);
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
  <th width=\"12%\">
\t{{ '所属组织机构'|trans }}
  </th>
{% endif %}", "org/parts/table-thead-tr.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/parts/table-thead-tr.html.twig");
    }
}
