<?php

/* admin/course-set/tab.html.twig */
class __TwigTemplate_3ab3f53b3ade873f4a5892c2223a2a599da3ddacc72a442772b8e79eaccc0280 extends Twig_Template
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
        echo "<div class=\"btn-group\">

    <a href=\" ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if ((($context["filter"] ?? null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("普通课程"), "html", null, true);
        echo "</a>

    <a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if ((($context["filter"] ?? null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>

    ";
        // line 7
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip")) {
            // line 8
            echo "        <a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if ((($context["filter"] ?? null) == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "admin/course-set/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  48 => 8,  46 => 7,  34 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/tab.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/course-set/tab.html.twig");
    }
}
