<?php

/* course/header/header-layout.html.twig */
class __TwigTemplate_e291a3f6a093c6758760798a899400c02b1fe09418744a335bcfea3b001b851d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_header_qrcode' => array($this, 'block_course_header_qrcode'),
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/header/header-layout.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script("app/js/course/header-top/index.js");
        // line 3
        echo "
<!-- 3、加入后：任务式学习 -->
<div class=\"container\">
  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("breadcrumbs", $context)) ? (_twig_default_filter(($context["breadcrumbs"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
            // line 12
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </a></li>
      <li class=\"active\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo " </li>
    ";
        } else {
            // line 15
            echo "      <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </li>
    ";
        }
        // line 17
        echo "  </ol>

  ";
        // line 19
        $this->displayBlock('course_header_info', $context, $blocks);
        // line 20
        echo "  <div class=\"es-section course-detail-section clearfix\">
    <div class=\"course-detail-top clearfix\">
      <span class=\"tags mrm\">
        ";
        // line 23
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 24
            echo "          <span class=\"tag-serialing\"></span>
        ";
        } elseif (($this->getAttribute(        // line 25
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 26
            echo "          <span class=\"tag-finished\"></span>
        ";
        }
        // line 28
        echo "      </span>
      <span class=\"course-detail-heading\">
       ";
        // line 30
        if (($context["marketingPage"] ?? null)) {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "
         ";
        } else {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
       ";
        }
        // line 35
        echo "       ";
        $this->displayBlock('course_header_qrcode', $context, $blocks);
        // line 44
        echo "      </span>
      ";
        // line 45
        $this->displayBlock('course_header_subtitle', $context, $blocks);
        // line 46
        echo "      <ul class=\"course-operation hidden-xs hidden-sm clearfix\">
        <!--非营销页显示-->
        ";
        // line 48
        $this->displayBlock('course_header_people_num', $context, $blocks);
        // line 58
        echo "
        <!--营销页显示-->
        ";
        // line 60
        if (($context["marketingPage"] ?? null)) {
            // line 61
            echo "        <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
            ";
            // line 62
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
          <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"已收藏\"
             data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmark color-primary\"></i>
          </a>
        </li>
        <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
            ";
            // line 68
            if (($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
          <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"收藏\"
             data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmarkoutline\"></i>
          </a>
        </li>
        ";
        }
        // line 74
        echo "
        <li class=\"es-share top\">
          <a class=\"btn btn-default btn-xs dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"课程分享\">
            <i class=\"es-icon es-icon-share\"></i>
          </a>
          ";
        // line 79
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-layout.html.twig", 79)->display(array_merge($context, array("type" => "courseSet")));
        // line 80
        echo "        </li>

        ";
        // line 82
        $context["canManage"] = (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 83
        echo "        ";
        if (($context["canManage"] ?? null)) {
            // line 84
            echo "          <li>
            ";
            // line 85
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
                // line 86
                echo "              <a class=\"btn btn-default btn-xs \"
                 href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                 title=\"课程管理\">
                <i class=\"es-icon es-icon-setting\"></i>
              </a>
            ";
            } else {
                // line 92
                echo "              <a class=\"btn btn-default btn-xs \"
                 href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
                echo "\"
                 title=\"课程管理\">
                <i class=\"es-icon es-icon-setting\"></i>
              </a>
            ";
            }
            // line 98
            echo "          </li>
        ";
        }
        // line 100
        echo "        ";
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 101
        echo "      </ul>
    </div>
    ";
        // line 103
        $this->displayBlock('course_heard_content', $context, $blocks);
        // line 104
        echo "  </div>
</div>

";
    }

    // line 19
    public function block_course_header_info($context, array $blocks = array())
    {
    }

    // line 35
    public function block_course_header_qrcode($context, array $blocks = array())
    {
        // line 36
        echo "        <span class=\"es-qrcode top pt5 hidden-xs\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"es-icon es-icon-qrcode\"></i>
          <span class=\"qrcode-popover\">
            <img src=\"\" alt=\"\">
            扫二维码继续学习二维码时效为半小时
          </span>
        </span>
       ";
    }

    // line 45
    public function block_course_header_subtitle($context, array $blocks = array())
    {
    }

    // line 48
    public function block_course_header_people_num($context, array $blocks = array())
    {
        // line 49
        echo "          ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 50
            echo "            <li>
              <span class=\"btn btn-xs cursor-default\">
                <i class=\"es-icon es-icon-people text-16\"></i>
                <span class=\"mls\">";
            // line 53
            $this->displayBlock('course_member_count', $context, $blocks);
            echo "</span>
              </span>
            </li>
          ";
        }
        // line 57
        echo "        ";
    }

    // line 53
    public function block_course_member_count($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "studentNum", array()), "html", null, true);
        echo "人 ";
    }

    // line 100
    public function block_course_member_exit($context, array $blocks = array())
    {
    }

    // line 103
    public function block_course_heard_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course/header/header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 103,  288 => 100,  281 => 53,  277 => 57,  270 => 53,  265 => 50,  262 => 49,  259 => 48,  254 => 45,  241 => 36,  238 => 35,  233 => 19,  226 => 104,  224 => 103,  220 => 101,  217 => 100,  213 => 98,  205 => 93,  202 => 92,  194 => 87,  191 => 86,  189 => 85,  186 => 84,  183 => 83,  181 => 82,  177 => 80,  175 => 79,  168 => 74,  157 => 68,  153 => 67,  143 => 62,  138 => 61,  136 => 60,  132 => 58,  130 => 48,  126 => 46,  124 => 45,  121 => 44,  118 => 35,  112 => 33,  106 => 31,  104 => 30,  100 => 28,  96 => 26,  94 => 25,  91 => 24,  89 => 23,  84 => 20,  82 => 19,  78 => 17,  72 => 15,  67 => 13,  60 => 12,  57 => 11,  46 => 9,  42 => 8,  36 => 7,  30 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/header-layout.html.twig");
    }
}
