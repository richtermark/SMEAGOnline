<?php

/* event_report.html.twig */
class __TwigTemplate_2748e8051e24450fea68cff29d472d62304a13c669f547c84dc6d3d861ce94cb extends Twig_Template
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
        echo "<div
    ";
        // line 2
        if (((array_key_exists("eventId", $context)) ? (_twig_default_filter(($context["eventId"] ?? null), "")) : (""))) {
            // line 3
            echo "        id=\"";
            echo twig_escape_filter($this->env, ($context["eventId"] ?? null), "html", null, true);
            echo "\"
    ";
        }
        // line 5
        echo "     class=\"event-report\"
     data-url=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_dispatch");
        echo "\" data-event-name=\"";
        echo twig_escape_filter($this->env, ($context["eventName"] ?? null), "html", null, true);
        echo "\"
     data-subject-type=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["subjectType"] ?? null), "html", null, true);
        echo "\"
     data-subject-id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["subjectId"] ?? null), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("eventReportParams", $context)) ? (_twig_default_filter(($context["eventReportParams"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " data-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "></div>";
    }

    public function getTemplateName()
    {
        return "event_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "event_report.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/event_report.html.twig");
    }
}
