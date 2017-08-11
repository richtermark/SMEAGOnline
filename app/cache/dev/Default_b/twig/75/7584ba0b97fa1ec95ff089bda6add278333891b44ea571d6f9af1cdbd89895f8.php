<?php

/* default/member-recently-learned.html.twig */
class __TwigTemplate_ec63e22d8a6b31b4aeb2d487dd4f61ef3f9e7222a27cc1d731523666ae5680fa extends Twig_Template
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
        $__internal_8dc440871be4093832f3911e24321768a040db00414a86d5f47061cc48039a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc440871be4093832f3911e24321768a040db00414a86d5f47061cc48039a9b->enter($__internal_8dc440871be4093832f3911e24321768a040db00414a86d5f47061cc48039a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/member-recently-learned.html.twig"));

        // line 1
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("MemberRecentlyLearned", array("user" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())));
        // line 2
        echo "
";
        // line 3
        if (($context["courseSet"] ?? $this->getContext($context, "courseSet"))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((($this->getAttribute($this->getAttribute(($context["course"] ?? null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["course"] ?? null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"), "html", null, true);
            echo "\"  class=\"img-responsive thumb pull-left\">
      </a>
      <p>《";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo "》</p>
      ";
            // line 13
            $context["teacher"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "course", array()), "teachers", array()));
            // line 14
            echo "      ";
            $context["progress"] = $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "course", array()), "progress", array());
            // line 15
            echo "      <p class=\"teacher-name\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师：%nickname%", array("%nickname%" => (($this->getAttribute(($context["teacher"] ?? null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "")) : ("")))), "html", null, true);
            echo "</p>
      <div class=\"progress-block clearfix\">
        <div class=\"progress\" style=\"width:90%\">
          <span class=\"progress-bar\" style=\"width: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["progress"] ?? $this->getContext($context, "progress")), "percent", array()), "html", null, true);
            echo ";\"></span>
        </div>
        <div class=\"percentage clearfix\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成%percent%", array("%percent%" => $this->getAttribute(($context["progress"] ?? $this->getContext($context, "progress")), "percent", array()))), "html", null, true);
            echo "</div>

        ";
            // line 22
            $context["task"] = $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "course", array()), "nextLearnTask", array());
            // line 23
            echo "        ";
            if (($context["task"] ?? $this->getContext($context, "task"))) {
                // line 24
                echo "          <div class=\"continue\">
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "course", array()), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习：%title%", array("%title%" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "title", array()))), "html", null, true);
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
        
        $__internal_8dc440871be4093832f3911e24321768a040db00414a86d5f47061cc48039a9b->leave($__internal_8dc440871be4093832f3911e24321768a040db00414a86d5f47061cc48039a9b_prof);

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
        return array (  95 => 30,  88 => 26,  82 => 25,  79 => 24,  76 => 23,  74 => 22,  69 => 20,  64 => 18,  57 => 15,  54 => 14,  52 => 13,  48 => 12,  43 => 10,  39 => 9,  33 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set courseSet = data('MemberRecentlyLearned',{'user':app.user}) %}

{% if courseSet %}
  <div class=\"es-box\">
    <div class=\"es-box-heading\">
      <h2>{{'在学课程'|trans}}</h2>
    </div>
    <div class=\"es-box-body user-learn clearfix\">
      <a href=\"{{ path('course_show',{id: courseSet.defaultCourseId}) }}\">
        <img src=\"{{ filepath(course.cover.large|default(), 'course.png') }}\"  class=\"img-responsive thumb pull-left\">
      </a>
      <p>《{{ courseSet.title }}》</p>
      {% set teacher = courseSet.course.teachers|first %}
      {% set progress = courseSet.course.progress %}
      <p class=\"teacher-name\">{{'教师：%nickname%'|trans({'%nickname%': teacher.nickname|default(\"\") })}}</p>
      <div class=\"progress-block clearfix\">
        <div class=\"progress\" style=\"width:90%\">
          <span class=\"progress-bar\" style=\"width: {{ progress.percent }};\"></span>
        </div>
        <div class=\"percentage clearfix\">{{'完成%percent%'|trans({'%percent%': progress.percent })}}</div>

        {% set task = courseSet.course.nextLearnTask %}
        {% if task %}
          <div class=\"continue\">
            <a href=\"{{ path('course_task_show', {id: task.id, courseId: courseSet.course.id}) }}\" title=\"{{'继续学习：%title%'|trans({'%title%':  task.title })}}\" class=\"btn btn-success pull-right\">
            {{'继续学习'|trans}}
            </a>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}", "default/member-recently-learned.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/member-recently-learned.html.twig");
    }
}
