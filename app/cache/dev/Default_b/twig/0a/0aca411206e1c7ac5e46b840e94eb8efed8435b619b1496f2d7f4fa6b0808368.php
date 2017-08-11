<?php

/* admin/default/unsolved-questions-block.html.twig */
class __TwigTemplate_6ec64213757cbb4679411956b6099a629abedd64cdb8d397200c731c16791cf5 extends Twig_Template
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
        $__internal_92dc23f83e3481980b2880afb816f8991a734f41ae494c016ae05761d010b2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dc23f83e3481980b2880afb816f8991a734f41ae494c016ae05761d010b2f3->enter($__internal_92dc23f83e3481980b2880afb816f8991a734f41ae494c016ae05761d010b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/unsolved-questions-block.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/unsolved-questions-block.html.twig", 1);
        // line 2
        echo "
  \t";
        // line 3
        if (($context["questions"] ?? $this->getContext($context, "questions"))) {
            // line 4
            echo "      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"60%\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问题"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看数"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 14
                echo "            ";
                $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 15
                echo "  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
                echo "
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
              </td>
  \t          <td>
  \t          \t";
                // line 25
                if (($context["course"] ?? $this->getContext($context, "course"))) {
                    // line 26
                    echo "  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提醒教师"), "html", null, true);
                    echo "</button>
  \t\t          ";
                }
                // line 28
                echo "  \t\t        </td>
  \t        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </tbody>
        </table>
    ";
        } else {
            // line 34
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无最新未回复问答"), "html", null, true);
            echo "</div>
    ";
        }
        // line 36
        echo "
";
        
        $__internal_92dc23f83e3481980b2880afb816f8991a734f41ae494c016ae05761d010b2f3->leave($__internal_92dc23f83e3481980b2880afb816f8991a734f41ae494c016ae05761d010b2f3_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  100 => 34,  95 => 31,  87 => 28,  79 => 26,  77 => 25,  71 => 22,  64 => 18,  60 => 17,  56 => 15,  53 => 14,  49 => 13,  42 => 9,  38 => 8,  34 => 7,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/macro.html.twig\" as admin_macro %}

  \t{% if questions %}
      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"60%\">{{'问题'|trans}}</th>
            <th width=\"20%\">{{'查看数'|trans}}</th>
            <th width=\"20%\">{{'操作'|trans}}</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          {% for question in questions %}
            {% set course =  courses[question.courseId]|default(null) %}
  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"{{ path('course_thread_show', {courseId:question.courseId, threadId:question.id}) }}\" target=\"_blank\">
                  {{ question.title }}
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                {{ question.hitNum }}
              </td>
  \t          <td>
  \t          \t{% if course %}
  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"{{ path('admin_question_remind_teachers', {courseId:question.courseId, questionId:question.id}) }}\">{{'提醒教师'|trans}}</button>
  \t\t          {% endif %}
  \t\t        </td>
  \t        </tr>
          {% endfor %}
        </tbody>
        </table>
    {% else %}
      <div class=\"empty\">{{'暂无最新未回复问答'|trans}}</div>
    {% endif %}

", "admin/default/unsolved-questions-block.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/unsolved-questions-block.html.twig");
    }
}
