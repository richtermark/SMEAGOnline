<?php

/* admin/default/unsolved-questions-block.html.twig */
class __TwigTemplate_e5e5d83b8e709801407894cb75cf76b64351da307595d7772db18b71959101f2 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/unsolved-questions-block.html.twig", 1);
        // line 2
        echo "
  \t";
        // line 3
        if (($context["questions"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
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
                if (($context["course"] ?? null)) {
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
        return array (  103 => 36,  97 => 34,  92 => 31,  84 => 28,  76 => 26,  74 => 25,  68 => 22,  61 => 18,  57 => 17,  53 => 15,  50 => 14,  46 => 13,  39 => 9,  35 => 8,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/unsolved-questions-block.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/unsolved-questions-block.html.twig");
    }
}
