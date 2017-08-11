<?php

/* course/task-list/default-task-list.html.twig */
class __TwigTemplate_fe2e07e9a8b7834b31595320f1e6841b566f1f8e79b507c1d1c0ab36c4fb5cd7 extends Twig_Template
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
        echo "<div class=\"course-detail-content\">
  <ul class=\"task-list task-list-md task-list-hover\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseItems"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 4
            echo "      ";
            if (((($this->getAttribute($context["item"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "type", array()), null)) : (null)) == "chapter")) {
                // line 5
                echo "        <li class=\"task-item bg-gray-lighter js-task-chapter\"><i class=\"es-icon es-icon-menu left-menu\"></i>
          <a href=\"javascript:void(0);\" class=\"title gray-dark\">第";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a>
          <i class=\"right-menu es-icon es-icon-remove js-remove-icon\"></i>
        </li>
      ";
            } elseif (((($this->getAttribute(            // line 9
$context["item"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "type", array()), null)) : (null)) == "unit")) {
                // line 10
                echo "        <li class=\"task-item color-gray bg-gray-lighter\">
          <span class=\"title\">第";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</span>
        </li>
      ";
            } elseif (((($this->getAttribute(            // line 13
$context["item"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "type", array()), null)) : (null)) == "lesson")) {
                // line 14
                echo "        ";
                $context["tasks"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex($this->getAttribute($context["item"], "tasks", array()), "mode");
                // line 15
                echo "        ";
                $context["index"] = (($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "lesson", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "lesson", array(), "any", false, true), "number", array()), null)) : (null));
                // line 16
                echo "
        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tasks", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    if (($this->getAttribute($context["task"], "isOptional", array()) == 0)) {
                        // line 18
                        echo "
          ";
                        // line 19
                        $context["task_lock"] = false;
                        // line 20
                        echo "          ";
                        $context["file"] = (($this->getAttribute(($context["files"] ?? null), $this->getAttribute($this->getAttribute($context["task"], "activity", array()), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["files"] ?? null), $this->getAttribute($this->getAttribute($context["task"], "activity", array()), "id", array()), array(), "array"), null)) : (null));
                        // line 21
                        echo "          <li class=\"task-item task-content mouse-control\">
            <i class=\"es-icon
              ";
                        // line 23
                        if (($context["task_lock"] ?? null)) {
                            // line 24
                            echo "              es-icon-lock
              ";
                        } elseif (( !(($this->getAttribute(                        // line 25
$context["task"], "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["task"], "result", array()), null)) : (null)) || twig_test_empty(($context["member"] ?? null)))) {
                            // line 26
                            echo "              es-icon-undone-check color-gray
              ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 27
$context["task"], "result", array()), "status", array()) == "start")) {
                            // line 28
                            echo "              es-icon-doing color-primary
              ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 29
$context["task"], "result", array()), "status", array()) == "finish")) {
                            // line 30
                            echo "              es-icon-iccheckcircleblack24px color-primary
              ";
                        }
                        // line 32
                        echo "              left-menu\"></i>

            ";
                        // line 34
                        if ((($this->getAttribute(($context["course"] ?? null), "status", array()) == "published") && ($this->getAttribute($context["task"], "status", array()) == "published"))) {
                            // line 35
                            echo "
              ";
                            // line 36
                            if (($context["member"] ?? null)) {
                                // line 37
                                echo "                <a class=\"title\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                echo "\">
                  ";
                                // line 38
                                $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 38)->display($context);
                                // line 39
                                echo "                </a>
              ";
                            } else {
                                // line 41
                                echo "                <a class=\"title\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                                // line 42
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                echo "\"
                  style=\"margin-top:-8px\">";
                                // line 43
                                $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 43)->display($context);
                                echo "</a>
              ";
                            }
                            // line 45
                            echo "
              ";
                            // line 46
                            $this->loadTemplate("course/task-list/parts/task-length.html.twig", "course/task-list/default-task-list.html.twig", 46)->display($context);
                            // line 47
                            echo "
              <span class=\"right-menu mouse-enter\">
              ";
                            // line 49
                            if ( !($context["member"] ?? null)) {
                                // line 50
                                echo "                ";
                                if ($this->getAttribute($context["task"], "isFree", array())) {
                                    // line 51
                                    echo "                  <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
                    data-url=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                    echo "\"
                    style=\"margin-top:-8px\">预览</a>
\t              ";
                                } elseif ((($this->getAttribute(                                // line 54
($context["course"] ?? null), "tryLookable", array()) && ($this->getAttribute($context["task"], "type", array()) == "video")) && ((($this->getAttribute(($context["file"] ?? null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["file"] ?? null), "storage", array()), "")) : ("")) == "cloud"))) {
                                    // line 55
                                    echo "                  <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                    data-url=\"";
                                    // line 56
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                    echo "\"
                    style=\"margin-top:-8px\">试看</a>
                ";
                                } elseif (( !$this->getAttribute(                                // line 58
$context["task"], "isFree", array()) && ((($this->getAttribute(($context["course"] ?? null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "parentId", array()), 0)) : (0)) == 0))) {
                                    // line 59
                                    echo "                  ";
                                    if ($this->getAttribute(($context["course"] ?? null), "isFree", array())) {
                                        // line 60
                                        echo "                    <a style=\"margin-top:-8px\" class=\"btn btn-primary ";
                                        if (((array_key_exists("previewAs", $context)) ? (_twig_default_filter(($context["previewAs"] ?? null))) : (""))) {
                                            echo "disabled";
                                        }
                                        echo "\"
                      ";
                                        // line 61
                                        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isBuyCourseFromModal($this->getAttribute(($context["course"] ?? null), "id", array()))) {
                                            // line 62
                                            echo "                      href=\"#modal\"
                      data-toggle=\"modal\"
                      data-url=\"";
                                            // line 64
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
                                            echo "\"
                    ";
                                        } else {
                                            // line 66
                                            echo "                      href=\"";
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
                                            echo "\"
                      ";
                                        }
                                        // line 67
                                        echo ">加入
\t\t                \t</a>
\t\t\t\t\t\t\t\t\t\t";
                                    } else {
                                        // line 70
                                        echo "                    <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
                      data-url=\"";
                                        // line 71
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                        echo "\"
                      style=\"margin-top:-8px\">购买</a>
                  ";
                                    }
                                    // line 74
                                    echo "                ";
                                }
                                // line 75
                                echo "
              ";
                            }
                            // line 77
                            echo "              </span>
            ";
                        } else {
                            // line 79
                            echo "              <span class=\"title\">
                ";
                            // line 80
                            $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 80)->display($context);
                            // line 81
                            echo "              </span>
              <span class=\"right-menu color-gray\">
                敬请期待
              </span>
            ";
                        }
                        // line 86
                        echo "          </li>
        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "      ";
            }
            // line 89
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "course/task-list/default-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 90,  269 => 89,  266 => 88,  255 => 86,  248 => 81,  246 => 80,  243 => 79,  239 => 77,  235 => 75,  232 => 74,  226 => 71,  223 => 70,  218 => 67,  212 => 66,  207 => 64,  203 => 62,  201 => 61,  194 => 60,  191 => 59,  189 => 58,  184 => 56,  181 => 55,  179 => 54,  174 => 52,  171 => 51,  168 => 50,  166 => 49,  162 => 47,  160 => 46,  157 => 45,  152 => 43,  148 => 42,  145 => 41,  141 => 39,  139 => 38,  134 => 37,  132 => 36,  129 => 35,  127 => 34,  123 => 32,  119 => 30,  117 => 29,  114 => 28,  112 => 27,  109 => 26,  107 => 25,  104 => 24,  102 => 23,  98 => 21,  95 => 20,  93 => 19,  90 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  60 => 11,  57 => 10,  55 => 9,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/default-task-list.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/task-list/default-task-list.html.twig");
    }
}
