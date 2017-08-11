<?php

/* course/tabs/notes.html.twig */
class __TwigTemplate_ab36cfa7a34ff5fff31d91b411f94c6c4db2f2f0f9820758ad7e87c57377054f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'detail_content' => array($this, 'block_detail_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset/show/notes/index.js"));
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/tabs/notes.html.twig", 2);
        // line 3
        $context["nav"] = "note";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('detail_content', $context, $blocks);
    }

    public function block_detail_content($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/Course:renderCourseChoice"));
        echo "

  ";
        // line 8
        $context["sort"] = $this->getAttribute($this->getAttribute(($context["currentRequest"] ?? null), "query", array()), "get", array(0 => "sort", 1 => "latest"), "method");
        // line 9
        echo "  ";
        $context["selectedTaskId"] = $this->getAttribute($this->getAttribute(($context["currentRequest"] ?? null), "query", array()), "get", array(0 => "task", 1 => 0), "method");
        // line 10
        echo "  ";
        $context["selectedCourseId"] = $this->getAttribute($this->getAttribute(($context["currentRequest"] ?? null), "query", array()), "get", array(0 => "selectedCourse", 1 => 0), "method");
        // line 11
        echo "
  <div class=\"note-filter nav-filter clearfix\">
    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        ";
        // line 15
        $context["task"] = (($this->getAttribute(($context["tasks"] ?? null), ($context["selectedTaskId"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), ($context["selectedTaskId"] ?? null), array(), "array"), null)) : (null));
        // line 16
        echo "        ";
        if (twig_test_empty(($context["task"] ?? null))) {
            // line 17
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部任务"), "html", null, true);
            echo "
        ";
        } else {
            // line 19
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
            echo "
        ";
        }
        // line 21
        echo "        <span class=\"caret\"></span>
      </button>
      ";
        // line 23
        if (($context["tasks"] ?? null)) {
            // line 24
            echo "        <ul class=\"dropdown-menu\" role=\"menu\">
          ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 26
                echo "            <li class=\"";
                if (($this->getAttribute($context["task"], "id", array()) == ($context["selectedTaskId"] ?? null))) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["currentRoute"] ?? null), array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "notes", "sort" => ($context["sort"] ?? null), "task" => $this->getAttribute($context["task"], "id", array()), "selectedCourse" => ($context["selectedCourseId"] ?? null))), "html", null, true);
                echo "#notes\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "\">
                ";
                // line 28
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["task"], "title", array()), 16);
                echo "
              </a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </ul>
      ";
        }
        // line 34
        echo "    </div>

    <ul class=\"nav nav-pills nav-pills-sm\">
      <li class=\"dropdown hidden-xs\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
          <span>排序：</span>
          ";
        // line 40
        if ((($context["sort"] ?? null) == "latest")) {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新笔记"), "html", null, true);
            echo "
          ";
        } else {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点赞最多"), "html", null, true);
            echo "
          ";
        }
        // line 45
        echo "          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu hidden-xs\">
          <li class=\"";
        // line 48
        if ((($context["sort"] ?? null) == "latest")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "notes", "sort" => "latest", "task" => ($context["selectedTaskId"] ?? null), "selectedCourse" => ($context["selectedCourseId"] ?? null))), "html", null, true);
        echo "#notes\">
              ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新笔记"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"";
        // line 53
        if ((($context["sort"] ?? null) == "like")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "notes", "sort" => "like", "task" => ($context["selectedTaskId"] ?? null), "selectedCourse" => ($context["selectedCourseId"] ?? null))), "html", null, true);
        echo "#notes\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点赞最多"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </div>

  <div class=\"note-list\" id=\"note-list\">
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 66
            echo "      ";
            $context["author"] = $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["note"], "userId", array()), array(), "array");
            // line 67
            echo "      ";
            $context["task"] = (($this->getAttribute(($context["tasks"] ?? null), $this->getAttribute($context["note"], "taskId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), $this->getAttribute($context["note"], "taskId", array()), array(), "array"), null)) : (null));
            // line 68
            echo "      <div class=\"media note-item\">
        <div class=\"media-left\">
          <a class=\" js-user-card\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["author"] ?? null), "id", array()))), "html", null, true);
            echo "\"
            data-card-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["author"] ?? null), "id", array()))), "html", null, true);
            echo "\" data-user-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["author"] ?? null), "id", array()), "html", null, true);
            echo "\">
            <img class=\"avatar-sm\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["author"] ?? null), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
          </a>
        </div>
        <div class=\"media-body\">
          <div class=\"content\">
            ";
            // line 77
            echo $this->getAttribute($context["note"], "content", array());
            echo "
          </div>
          <a href=\"javascript:;\" class=\"more more-show\">[展开全文]</a>
          <div class=\"metas clearfix\">
            <a class=\"link-dark name\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["author"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["author"] ?? null), "nickname", array()), "html", null, true);
            echo "</a>
            · <span>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["note"], "updatedTime", array())), "html", null, true);
            echo "</span>
            ";
            // line 83
            if (($context["task"] ?? null)) {
                // line 84
                echo "              · ";
                if (($context["member"] ?? null)) {
                    // line 85
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["note"], "taskId", array()))), "html", null, true);
                    echo "\" class=\"period\"
                target=\"_blank\">
                ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
                    echo "
              </a>
            ";
                } else {
                    // line 90
                    echo "              <a href=\"javascript:;\" class=\"period\">
                ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
                    echo "
              </a>
            ";
                }
                // line 94
                echo "            ";
            } else {
                // line 95
                echo "              · 该任务已被删除
            ";
            }
            // line 97
            echo "            <span class=\"metas-sns\">
              <span class=\"icon-favour\">
                <a href=\"javascript:;\" class=\"js-like ";
            // line 99
            if (twig_in_filter($this->getAttribute($context["note"], "id", array()), ($context["likeNoteIds"] ?? null))) {
                echo "color-primary";
            }
            echo "\"
                  data-like-url=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_like", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
                  data-cancel-like-url=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_cancel_like", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">
                  <i class=\"es-icon es-icon-thumbup\"></i>
                  <span class=\"js-like-num\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "likeNum", array()), "html", null, true);
            echo "</span>
                </a>
              </span>
            </span>
          </div>
        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无笔记"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
    ";
        // line 114
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter(($context["paginator"] ?? null), null)) : (null))) {
            // line 115
            echo "      ";
            echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
            echo "
    ";
        }
        // line 117
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "course/tabs/notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 117,  307 => 115,  305 => 114,  302 => 113,  293 => 111,  280 => 103,  275 => 101,  271 => 100,  265 => 99,  261 => 97,  257 => 95,  254 => 94,  248 => 91,  245 => 90,  239 => 87,  233 => 85,  230 => 84,  228 => 83,  224 => 82,  218 => 81,  211 => 77,  203 => 72,  197 => 71,  193 => 70,  189 => 68,  186 => 67,  183 => 66,  178 => 65,  165 => 55,  161 => 54,  155 => 53,  149 => 50,  145 => 49,  139 => 48,  134 => 45,  128 => 43,  122 => 41,  120 => 40,  112 => 34,  108 => 32,  98 => 28,  92 => 27,  85 => 26,  81 => 25,  78 => 24,  76 => 23,  72 => 21,  66 => 19,  60 => 17,  57 => 16,  55 => 15,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  35 => 6,  29 => 5,  26 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/notes.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/tabs/notes.html.twig");
    }
}
