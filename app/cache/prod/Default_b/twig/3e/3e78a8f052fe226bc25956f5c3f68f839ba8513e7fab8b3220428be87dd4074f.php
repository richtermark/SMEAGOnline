<?php

/* course/tabs/threads.html.twig */
class __TwigTemplate_278013c52546149a5f14a0a312947b764c8bcb014834c34d7752d3e47532b23c extends Twig_Template
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
        $this->loadTemplate("course/thread/header.html.twig", "course/tabs/threads.html.twig", 1)->display(array_merge($context, array("courseSet" => ($context["courseSet"] ?? null), "course" => ($context["course"] ?? null))));
        // line 2
        $this->loadTemplate("thread/list.html.twig", "course/tabs/threads.html.twig", 2)->display($context);
        // line 3
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/tabs/threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/threads.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/tabs/threads.html.twig");
    }
}
