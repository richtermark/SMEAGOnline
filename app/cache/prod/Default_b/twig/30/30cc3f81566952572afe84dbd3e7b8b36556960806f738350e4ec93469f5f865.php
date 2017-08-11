<?php

/* course/tabs/widget/course-choice.html.twig */
class __TwigTemplate_36c59e6dfc592d6295172d4cb386219c862f09f88a47dce19ca4b9703d5e451d extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["courses"] ?? null)) > 1)) {
            // line 2
            echo "  <ul class=\"nav nav-pills nav-pills-sm hidden-xs mb20\" role=\"tablist\">

    <li role=\"presentation\" ";
            // line 4
            if ((0 == ($context["selectedCourseId"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["currentRoute"] ?? null), array("id" => $this->getAttribute(($context["currentCourse"] ?? null), "id", array()), "tab" => ($context["tab"] ?? null), "selectedCourse" => 0)), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, ($context["tab"] ?? null), "html", null, true);
            echo "\">全部</a>
    </li>

    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["selectCourse"]) {
                // line 9
                echo "      <li role=\"presentation\" ";
                if (($this->getAttribute($context["selectCourse"], "id", array()) == ($context["selectedCourseId"] ?? null))) {
                    echo "class=\"active\"";
                }
                echo ">
        <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["currentRoute"] ?? null), array("id" => $this->getAttribute(($context["currentCourse"] ?? null), "id", array()), "selectedCourse" => $this->getAttribute($context["selectCourse"], "id", array()), "tab" => ($context["tab"] ?? null))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, ($context["tab"] ?? null), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["selectCourse"], "title", array()), 12);
                echo "</a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectCourse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "course/tabs/widget/course-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  50 => 10,  43 => 9,  39 => 8,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/widget/course-choice.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/tabs/widget/course-choice.html.twig");
    }
}
