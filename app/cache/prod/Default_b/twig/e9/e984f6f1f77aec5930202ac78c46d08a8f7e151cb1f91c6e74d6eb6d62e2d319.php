<?php

/* review/widget/list.html.twig */
class __TwigTemplate_1a6ef9b20bd29dfc383b0748b51ee6a6197570a6e58739219a3355ff639ac1a9 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "review/widget/list.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-raty.js", 1 => "libs/jquery-validation.js", 2 => "app/js/review/list/index.js"));
        // line 3
        echo "
";
        // line 4
        if ((((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false)) &&  !twig_in_filter("auditor", $this->getAttribute(($context["member"] ?? null), "role", array())))) {
            // line 5
            echo "  <div class=\"clearfix\">
     <button class=\"btn btn-primary btn-sm pull-right js-show-review-form\" ";
            // line 6
            if (( !($context["userReview"] ?? null) || ((array_key_exists("hideRereview", $context)) ? (_twig_default_filter(($context["hideRereview"] ?? null), false)) : (false)))) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新评价"), "html", null, true);
            echo "</button>
  </div>
  ";
            // line 8
            $this->loadTemplate("review/widget/review-form.html.twig", "review/widget/list.html.twig", 8)->display(array_merge($context, array("userReview" => ($context["userReview"] ?? null), "reviewSaveUrl" => ((array_key_exists("reviewSaveUrl", $context)) ? (_twig_default_filter(($context["reviewSaveUrl"] ?? null), null)) : (null)))));
        }
        // line 10
        echo "
";
        // line 11
        $context["canAccess"] = ((array_key_exists("canAccess", $context)) ? (_twig_default_filter(($context["canAccess"] ?? null), false)) : (false));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 14
                echo "  ";
                $context["user"] = $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 15
                echo "  ";
                $context["posts"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("ReviewPosts", array("reviewId" => $this->getAttribute($context["review"], "id", array()), "targetType" => ((array_key_exists("targetType", $context)) ? (_twig_default_filter(($context["targetType"] ?? null), "course")) : ("course")), "start" => 0, "limit" => 5)), null);
                // line 16
                echo "
  <div class=\"js-reviews\">
    <div class=\"media media-evaluate\">
      <div class=\"media-left\">
        ";
                // line 20
                echo $context["web_macro"]->getuser_avatar_link(($context["user"] ?? null), "small", array(0 => "card"));
                echo "
      </div>
      <div class=\"media-body thread-post\">
        <div class=\"title\">";
                // line 23
                echo $context["web_macro"]->getuser_link(($context["user"] ?? null));
                echo " 
          ";
                // line 24
                if ($this->getAttribute($context["review"], "meta", array())) {
                    echo "<span>";
                    echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["courseMap"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["courseMap"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", false, true), "title", array()), "教学计划")) : ("教学计划")) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成进度")), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "learnedNum", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "lessonNum", array()), "html", null, true);
                    echo "</span>";
                }
                echo "&nbsp;&nbsp;
          ";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d"), "html", null, true);
                echo " 
        </div>
        <div class=\"score\">
          ";
                // line 28
                echo $context["web_macro"]->getstar($this->getAttribute($context["review"], "rating", array()));
                echo "
        </div>
        <div class=\"content\">
          <div class=\"short-content\">";
                // line 31
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["review"], "content", array()), 100);
                echo "
            ";
                // line 32
                if ((($this->getAttribute($context["review"], "updatedTime", array()) != $this->getAttribute($context["review"], "createdTime", array())) &&  !(null === $this->getAttribute($context["review"], "updatedTime", array())))) {
                    echo "<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("追评"), "html", null, true);
                    echo "</span>";
                }
                // line 33
                echo "          </div>
          <div class=\"full-content\" style=\"display:none;\">";
                // line 34
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
                echo "
            ";
                // line 35
                if ((($this->getAttribute($context["review"], "updatedTime", array()) != $this->getAttribute($context["review"], "createdTime", array())) &&  !(null === $this->getAttribute($context["review"], "updatedTime", array())))) {
                    echo "<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("追评"), "html", null, true);
                    echo "</span>";
                }
                // line 36
                echo "          </div>
        </div>
        <div class=\"actions clearfix\">
          <a href=\"javascript:;\" class=\"show-full-btn\" style=\"display:none;\">[";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开全文"), "html", null, true);
                echo "]</a>
          <a href=\"javascript:;\" class=\"show-short-btn\" style=\"display:none;\">[";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起全文"), "html", null, true);
                echo "]</a>
          ";
                // line 41
                if (($context["canAccess"] ?? null)) {
                    // line 42
                    echo "            <a href=\"javascript:;\" class=\"js-reply pull-right\">";
                    if (twig_test_empty(($context["posts"] ?? null))) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
                    }
                    echo "</a>
          ";
                }
                // line 44
                echo "        </div>
        
        ";
                // line 46
                $context["goto"] = ((array_key_exists("goto", $context)) ? (_twig_default_filter(($context["goto"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage")));
                // line 47
                echo "        ";
                if ((((array_key_exists("targetType", $context)) ? (_twig_default_filter(($context["targetType"] ?? null), "course")) : ("course")) == "classroom")) {
                    // line 48
                    echo "          ";
                    $context["postReplyUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_review_post", array("id" => $this->getAttribute($context["review"], "classroomId", array()), "reviewId" => $this->getAttribute($context["review"], "id", array())));
                    // line 49
                    echo "        ";
                } else {
                    // line 50
                    echo "          ";
                    $context["postReplyUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_post", array("courseId" => $this->getAttribute($context["review"], "courseId", array()), "reviewId" => $this->getAttribute($context["review"], "id", array())));
                    // line 51
                    echo "        ";
                }
                // line 52
                echo "
        <div class=\"thread-subpost-container subcomments clearfix ";
                // line 53
                if (twig_test_empty(($context["posts"] ?? null))) {
                    echo "hide";
                }
                echo "\">
          <div class=\"thread-subpost-content\">
            ";
                // line 55
                $this->loadTemplate("review/widget/subposts.html.twig", "review/widget/list.html.twig", 55)->display(array_merge($context, array("posts" => ($context["posts"] ?? null), "targetType" => ((array_key_exists("targetType", $context)) ? (_twig_default_filter(($context["targetType"] ?? null), "course")) : ("course")), "canAccess" => ((array_key_exists("canAccess", $context)) ? (_twig_default_filter(($context["canAccess"] ?? null), false)) : (false)))));
                // line 56
                echo "          </div>
          
          ";
                // line 58
                if (($context["canAccess"] ?? null)) {
                    // line 59
                    echo "            <div class=\"thread-subpost-morebar clearfix ";
                    if (twig_test_empty(($context["posts"] ?? null))) {
                        echo "hide";
                    }
                    echo "\">
              <button class=\"btn btn-default btn-xs pull-right js-toggle-subpost-form\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
                    echo "</button>
            </div>
          ";
                }
                // line 63
                echo "
          ";
                // line 64
                if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
                    // line 65
                    echo "            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, ($context["postReplyUrl"] ?? null), "html", null, true);
                    echo "\" class=\"thread-subpost-form ";
                    if (($context["posts"] ?? null)) {
                        echo "hide";
                    }
                    echo "\">
              <div class=\"form-group\">
                <div class=\"controls\">
                  <textarea class=\"form-control\" name=\"content\" data-display=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
                    echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
                    echo "\">
                <button type=\"submit\" data-loading-text=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在发表"), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发表"), "html", null, true);
                    echo "</button>
              </div>
            </form>
          ";
                } else {
                    // line 77
                    echo "            <div class=\"empty\">
              ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没有登录，请先"), "html", null, true);
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ($context["goto"] ?? null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["goto"] ?? null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
                    echo "</a>！
            </div>
          ";
                }
                // line 81
                echo "        </div>

      </div>
    </div>
  </div>

";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 88
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无评价"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
";
        // line 91
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter(($context["paginator"] ?? null), null)) : (null))) {
            // line 92
            echo "  ";
            echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "review/widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 92,  291 => 91,  288 => 90,  279 => 88,  264 => 81,  248 => 78,  245 => 77,  236 => 73,  232 => 72,  225 => 68,  214 => 65,  212 => 64,  209 => 63,  203 => 60,  196 => 59,  194 => 58,  190 => 56,  188 => 55,  181 => 53,  178 => 52,  175 => 51,  172 => 50,  169 => 49,  166 => 48,  163 => 47,  161 => 46,  157 => 44,  147 => 42,  145 => 41,  141 => 40,  137 => 39,  132 => 36,  126 => 35,  122 => 34,  119 => 33,  113 => 32,  109 => 31,  103 => 28,  97 => 25,  85 => 24,  81 => 23,  75 => 20,  69 => 16,  66 => 15,  63 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 8,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "review/widget/list.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/review/widget/list.html.twig");
    }
}
