<?php

/* course/task-list/parts/list-li-title.html.twig */
class __TwigTemplate_96814f0f84dd4263c46cfd0bf6b2d0bf8054ace71efea3129a78b6a80e495657 extends Twig_Template
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
        if ((twig_test_empty(($context["member"] ?? null)) && $this->getAttribute(($context["task"] ?? null), "isFree", array()))) {
            // line 2
            echo "  <span class=\"label label-success mr10\">免费</span>
";
        } elseif ((((twig_test_empty(        // line 3
($context["member"] ?? null)) && $this->getAttribute(($context["course"] ?? null), "tryLookable", array())) && ($this->getAttribute(($context["task"] ?? null), "type", array()) == "video")) && ((($this->getAttribute(($context["file"] ?? null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["file"] ?? null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 4
            echo "  <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试看"), "html", null, true);
            echo "</span>
";
        } elseif ((        // line 5
($context["member"] ?? null) && ($this->getAttribute(($context["task"] ?? null), "isOptional", array()) == 1))) {
            // line 6
            echo "  <span class=\"label label-info mr10\">选修</span>
";
        }
        // line 8
        echo "任务";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "number", array()), "html", null, true);
        echo "： ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/list-li-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/list-li-title.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/task-list/parts/list-li-title.html.twig");
    }
}
