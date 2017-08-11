<?php

/* default/member-recently-learned.html.twig */
class __TwigTemplate_148bcddc790e71ade7f7744789fa30fb4ac350ab831d29cecc18079368d574c4 extends Twig_Template
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
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("MemberRecentlyLearned", array("user" => $this->getAttribute(($context["app"] ?? null), "user", array())));
        // line 2
        echo "
";
        // line 3
        if (($context["courseSet"] ?? null)) {
            // line 4
            echo "  <div class=\"es-box\">
    <div class=\"es-box-heading\">
      <h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学课程"), "html", null, true);
            echo "</h2>
    </div>
    <div class=\"es-box-body user-learn clearfix\">
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((($this->getAttribute($this->getAttribute(($context["course"] ?? null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["course"] ?? null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"), "html", null, true);
            echo "\"  class=\"img-responsive thumb pull-left\">
      </a>
      <p>《";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "》</p>
      ";
            // line 13
            $context["teacher"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array()), "teachers", array()));
            // line 14
            echo "      ";
            $context["progress"] = $this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array()), "progress", array());
            // line 15
            echo "      <p class=\"teacher-name\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师：%nickname%", array("%nickname%" => (($this->getAttribute(($context["teacher"] ?? null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "")) : ("")))), "html", null, true);
            echo "</p>
      <div class=\"progress-block clearfix\">
        <div class=\"progress\" style=\"width:90%\">
          <span class=\"progress-bar\" style=\"width: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["progress"] ?? null), "percent", array()), "html", null, true);
            echo ";\"></span>
        </div>
        <div class=\"percentage clearfix\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成%percent%", array("%percent%" => $this->getAttribute(($context["progress"] ?? null), "percent", array()))), "html", null, true);
            echo "</div>

        ";
            // line 22
            $context["task"] = $this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array()), "nextLearnTask", array());
            // line 23
            echo "        ";
            if (($context["task"] ?? null)) {
                // line 24
                echo "          <div class=\"continue\">
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array()), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习：%title%", array("%title%" => $this->getAttribute(($context["task"] ?? null), "title", array()))), "html", null, true);
                echo "\" class=\"btn btn-success pull-right\">
            ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习"), "html", null, true);
                echo "
            </a>
          </div>
        ";
            }
            // line 30
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/member-recently-learned.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  85 => 26,  79 => 25,  76 => 24,  73 => 23,  71 => 22,  66 => 20,  61 => 18,  54 => 15,  51 => 14,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/member-recently-learned.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/member-recently-learned.html.twig");
    }
}
