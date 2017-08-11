<?php

/* common/share-dropdown.html.twig */
class __TwigTemplate_13f66c13eabcf91f0bb914dd80ecc73ebfe9529708e93c05f4d91560a48504e3 extends Twig_Template
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
        if ((((array_key_exists("useSeajs", $context)) ? (_twig_default_filter(($context["useSeajs"] ?? null), false)) : (false)) == true)) {
            // line 2
            echo "  ";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("common/share-dropdown.js");
            // line 3
            echo "  ";
            $this->loadTemplate("seajs_loader_compatible.html.twig", "common/share-dropdown.html.twig", 3)->display(array_merge($context, array("topxiawebbundle" => true)));
        } else {
            // line 5
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/share/index.js"));
        }
        // line 7
        echo "
";
        // line 8
        if ((($context["type"] ?? null) == "courseSet")) {
            // line 9
            echo "  ";
            $context["title"] = $this->getAttribute(($context["courseSet"] ?? null), "title", array());
            // line 10
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["courseSet"] ?? null), "summary", array()), 50);
            // line 11
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "我正在学习《%course%》，收获巨大哦，一起来学习吧！"), array("%course%" => $this->getAttribute(($context["courseSet"] ?? null), "title", array())));
            // line 12
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array())));
            // line 13
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((($this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "cover", array(), "any", false, true), "large", array()), null)) : (null)), "course.png");
            // line 14
            echo "  ";
            $context["id"] = $this->getAttribute(($context["courseSet"] ?? null), "id", array());
        } elseif ((        // line 15
($context["type"] ?? null) == "classroom")) {
            // line 16
            echo "  ";
            $context["title"] = $this->getAttribute(($context["classroom"] ?? null), "title", array());
            // line 17
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["classroom"] ?? null), "description", array()), 50);
            // line 18
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.classroomShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在学习「%classroom%」，收获巨大哦，一起来学习吧！"), array("%classroom%" => $this->getAttribute(($context["classroom"] ?? null), "title", array())));
            // line 19
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? null), "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["classroom"] ?? null), "largePicture", array()), "classroom.png");
            // line 21
            echo "  ";
            $context["id"] = $this->getAttribute(($context["classroom"] ?? null), "id", array());
        } elseif ((        // line 22
($context["type"] ?? null) == "article")) {
            // line 23
            echo "  ";
            $context["title"] = $this->getAttribute(($context["article"] ?? null), "title", array());
            // line 24
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["article"] ?? null), "body", array()), 50);
            // line 25
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.articleShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在看「%articletitle%」，关注「%sitename%」，分享知识，成就未来。"), array("%articletitle%" => $this->getAttribute(($context["article"] ?? null), "title", array()), "%sitename%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name")));
            // line 26
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("article_detail", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array())));
            // line 27
            echo "  ";
            $context["picture"] = "";
            // line 28
            echo "  ";
            $context["id"] = $this->getAttribute(($context["article"] ?? null), "id", array());
        } elseif ((        // line 29
($context["type"] ?? null) == "group_thread")) {
            // line 30
            echo "  ";
            $context["title"] = $this->getAttribute(($context["thread"] ?? null), "title", array());
            // line 31
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["thread"] ?? null), "content", array()), 50);
            // line 32
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.groupShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在「%groupname%」小组，看到「%threadname%」，很不错哦，一起来看看吧！"), array("%groupname%" => $this->getAttribute(($context["group"] ?? null), "title", array()), "%threadname%" => $this->getAttribute(($context["thread"] ?? null), "title", array())));
            // line 33
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("group_thread_show", array("id" => $this->getAttribute(($context["group"] ?? null), "id", array()), "threadId" => $this->getAttribute(($context["thread"] ?? null), "id", array())));
            // line 34
            echo "  ";
            $context["picture"] = "";
            // line 35
            echo "  ";
            $context["id"] = $this->getAttribute(($context["group"] ?? null), "id", array());
        } elseif ((        // line 36
($context["type"] ?? null) == "open_course")) {
            // line 37
            echo "  ";
            $context["title"] = $this->getAttribute(($context["course"] ?? null), "title", array());
            // line 38
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter((($this->getAttribute(($context["course"] ?? null), "summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "summary", array()), "")) : ("")), 50);
            // line 39
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "我正在学习《%course%》，收获巨大哦，一起来学习吧！"), array("%course%" => $this->getAttribute(($context["course"] ?? null), "title", array())));
            // line 40
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("open_course_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array())));
            // line 41
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["course"] ?? null), "largePicture", array()), "course.png");
            // line 42
            echo "  ";
            $context["id"] = $this->getAttribute(($context["course"] ?? null), "id", array());
        } elseif ((        // line 43
($context["type"] ?? null) == "task")) {
            // line 44
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course_task_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array())));
            // line 45
            echo "  ";
            $context["title"] = $this->getAttribute(($context["task"] ?? null), "title", array());
            // line 46
            echo "  ";
            $context["summary"] = "";
            // line 47
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "我正在学习《%course%》，收获巨大哦，一起来学习吧！"), array("%course%" => $this->getAttribute(($context["task"] ?? null), "title", array())));
            // line 48
            echo "  ";
            $context["picture"] = "";
            // line 49
            echo "  ";
            $context["id"] = $this->getAttribute(($context["task"] ?? null), "id", array());
        }
        // line 51
        echo "
<div class=\"dropdown-menu ";
        // line 52
        if (((array_key_exists("right", $context)) ? (_twig_default_filter(($context["right"] ?? null), false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" data-summary=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter(($context["summary"] ?? null), "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" data-picture=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter(($context["picture"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 53
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Point")) {
            // line 54
            echo "   ";
            // line 55
            echo "  ";
        }
        // line 56
        echo "
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到微信"), "html", null, true);
        echo "\" data-share=\"weixin\" data-qrcode-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("common_qrcode", array("text" => ($context["url"] ?? null))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到新浪微博"), "html", null, true);
        echo "\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到QQ好友"), "html", null, true);
        echo "\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到QQ空间"), "html", null, true);
        echo "\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>
";
    }

    public function getTemplateName()
    {
        return "common/share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 60,  195 => 59,  191 => 58,  185 => 57,  182 => 56,  179 => 55,  177 => 54,  175 => 53,  159 => 52,  156 => 51,  152 => 49,  149 => 48,  146 => 47,  143 => 46,  140 => 45,  137 => 44,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  117 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/share-dropdown.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/common/share-dropdown.html.twig");
    }
}
