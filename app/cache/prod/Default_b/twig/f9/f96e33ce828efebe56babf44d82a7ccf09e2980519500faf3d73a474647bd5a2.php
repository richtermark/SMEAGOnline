<?php

/* course/widgets/student-activity.html.twig */
class __TwigTemplate_8a1ed4d583d51a31320adf723b839692434bba4c783dcae60582a7b3cc69fa0e extends Twig_Template
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
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
            // line 2
            echo "  ";
            $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute(($context["course"] ?? null), "id", array())));
        } else {
            // line 4
            echo "  ";
            $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "courseSet", "objectId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array())));
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("status/status-block.html.twig", "course/widgets/student-activity.html.twig", 7)->display(array_merge($context, array("learns" => ($context["learns"] ?? null))));
    }

    public function getTemplateName()
    {
        return "course/widgets/student-activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/student-activity.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/widgets/student-activity.html.twig");
    }
}
