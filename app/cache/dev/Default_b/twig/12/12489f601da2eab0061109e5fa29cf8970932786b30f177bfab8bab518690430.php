<?php

/* admin/default/index.html.twig */
class __TwigTemplate_133d7a0b0d5df5c2bd06d4f70cf27a1aa317f6a2c85ddc7a29dbae67c7edccbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b86efaeb949fe66ae7ba0d1097d59d4e30b6bc3ab8dd4b5524aa246d8abef301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86efaeb949fe66ae7ba0d1097d59d4e30b6bc3ab8dd4b5524aa246d8abef301->enter($__internal_b86efaeb949fe66ae7ba0d1097d59d4e30b6bc3ab8dd4b5524aa246d8abef301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86efaeb949fe66ae7ba0d1097d59d4e30b6bc3ab8dd4b5524aa246d8abef301->leave($__internal_b86efaeb949fe66ae7ba0d1097d59d4e30b6bc3ab8dd4b5524aa246d8abef301_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_68103d4fa436d2ca095ef8e50670afae478f99ec8ab0e29ab8509b67e3ae3d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68103d4fa436d2ca095ef8e50670afae478f99ec8ab0e29ab8509b67e3ae3d05->enter($__internal_68103d4fa436d2ca095ef8e50670afae478f99ec8ab0e29ab8509b67e3ae3d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
        
        $__internal_68103d4fa436d2ca095ef8e50670afae478f99ec8ab0e29ab8509b67e3ae3d05->leave($__internal_68103d4fa436d2ca095ef8e50670afae478f99ec8ab0e29ab8509b67e3ae3d05_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_7f85b8187d9d2e91f188f263528b6295bf9e42a0059a0f3b5595f4001e52785b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f85b8187d9d2e91f188f263528b6295bf9e42a0059a0f3b5595f4001e52785b->enter($__internal_7f85b8187d9d2e91f188f263528b6295bf9e42a0059a0f3b5595f4001e52785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
    <div class=\"
      ";
        // line 14
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 15
            echo "        col-md-6
      ";
        } else {
            // line 17
            echo "        col-md-12
      ";
        }
        // line 19
        echo "      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态栏"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_status");
        echo "\">
          <div class=\"empty\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日数据"), "html", null, true);
        echo "
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录用户"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动的登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在线总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动用户数，包括登录用户及未登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增注册"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台新增用户数，包括自主注册、第三方注册及导入"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员人次"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日加入课程和班级的总人次，1个学员加入2个课程，算2人次"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增会员"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日购买会员的人数"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复问答"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日新产生问题中未回答的数量"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("到目前为止，未回答问题总数"), "html", null, true);
        echo "</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
    </div>
  </div>
  ";
        // line 74
        echo "  ";
        // line 75
        echo "    ";
        // line 76
        echo "      ";
        // line 77
        echo "        ";
        // line 78
        echo "        ";
        // line 79
        echo "          ";
        // line 80
        echo "                  ";
        // line 81
        echo "                  ";
        // line 82
        echo "          ";
        // line 83
        echo "          ";
        // line 84
        echo "                  ";
        // line 85
        echo "                  ";
        // line 86
        echo "          ";
        // line 87
        echo "        ";
        // line 88
        echo "      ";
        // line 89
        echo "      ";
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        // line 92
        echo "          ";
        // line 93
        echo "            ";
        // line 94
        echo "            ";
        // line 95
        echo "          ";
        // line 96
        echo "          ";
        // line 97
        echo "            ";
        // line 98
        echo "            ";
        // line 99
        echo "          ";
        // line 100
        echo "        ";
        // line 101
        echo "      ";
        // line 102
        echo "    ";
        // line 103
        echo "    ";
        // line 104
        echo "         ";
        // line 105
        echo "      ";
        // line 106
        echo "    ";
        // line 107
        echo "  ";
        // line 108
        echo "  ";
        // line 109
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单统计"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的所有订单，包括免费和付费"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的订单价格大于0元的订单"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单统计"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-task-switch-button\"
                      data-time=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-task-switch-button\"
                      data-time=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务完成数"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击\"学过了\"的任务数量"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-task-count-statistic\"
             data-url=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程排行榜"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新问答"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新评价"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 258
        echo "          <h3 class=\"panel-title\">
            ";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门搜索"), "html", null, true);
        echo "
            <small>";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 264
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 265
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          ";
        } else {
            // line 269
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 271
        echo "        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_7f85b8187d9d2e91f188f263528b6295bf9e42a0059a0f3b5595f4001e52785b->leave($__internal_7f85b8187d9d2e91f188f263528b6295bf9e42a0059a0f3b5595f4001e52785b_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 271,  602 => 269,  596 => 266,  593 => 265,  591 => 264,  584 => 260,  580 => 259,  577 => 258,  567 => 250,  560 => 246,  553 => 244,  542 => 236,  536 => 233,  532 => 232,  528 => 231,  513 => 219,  507 => 216,  499 => 213,  493 => 212,  486 => 210,  480 => 209,  466 => 198,  457 => 192,  449 => 187,  441 => 184,  435 => 183,  428 => 181,  422 => 180,  414 => 177,  399 => 165,  393 => 162,  385 => 159,  379 => 158,  372 => 156,  366 => 155,  358 => 152,  346 => 143,  337 => 137,  333 => 136,  327 => 133,  323 => 132,  315 => 127,  308 => 123,  302 => 122,  296 => 119,  290 => 118,  282 => 115,  274 => 109,  272 => 108,  270 => 107,  268 => 106,  266 => 105,  264 => 104,  262 => 103,  260 => 102,  258 => 101,  256 => 100,  254 => 99,  252 => 98,  250 => 97,  248 => 96,  246 => 95,  244 => 94,  242 => 93,  240 => 92,  238 => 91,  236 => 90,  234 => 89,  232 => 88,  230 => 87,  228 => 86,  226 => 85,  224 => 84,  222 => 83,  220 => 82,  218 => 81,  216 => 80,  214 => 79,  212 => 78,  210 => 77,  208 => 76,  206 => 75,  204 => 74,  198 => 70,  194 => 69,  185 => 63,  181 => 62,  175 => 59,  171 => 58,  165 => 55,  161 => 54,  155 => 51,  151 => 50,  145 => 47,  141 => 46,  135 => 43,  131 => 42,  125 => 39,  121 => 38,  114 => 34,  102 => 25,  98 => 24,  93 => 22,  88 => 19,  84 => 17,  80 => 15,  78 => 14,  74 => 12,  68 => 10,  66 => 9,  60 => 7,  58 => 6,  52 => 5,  40 => 2,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}
{% block title %}{{ '管理后台'|trans }}{% endblock %}
{% set panel = 'dashboard' %}
{% set script_controller = 'default/index' %}
{% block container %}
  {# 域名检查提示#}
  {{ render(controller('AppBundle:Admin/Default:validateDomain')) }}
  <div class=\"row\">
    {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
      {{ render(controller('AppBundle:Admin/Default:getCloudNotices')) }}
    {% endif %}

    <div class=\"
      {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
        col-md-6
      {% else %}
        col-md-12
      {% endif %}
      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">{{ '状态栏'|trans }}</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"{{ path('admin_system_status') }}\">
          <div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        {{ '今日数据'|trans }}
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">{{ '登录用户'|trans }}</div>
            <div class=\"content\">{{ '15分钟内活动的登录用户'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '在线总数'|trans }}</div>
            <div class=\"content\">{{ '15分钟内活动用户数，包括登录用户及未登录用户'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增注册'|trans }}</div>
            <div class=\"content\">{{ '平台新增用户数，包括自主注册、第三方注册及导入'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增学员人次'|trans }}</div>
            <div class=\"content\">{{ '今日加入课程和班级的总人次，1个学员加入2个课程，算2人次'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增会员'|trans }}</div>
            <div class=\"content\">{{ '今日购买会员的人数'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '未回复问答'|trans }}</div>
            <div class=\"content\">{{ '今日新产生问题中未回答的数量'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '未回复总数'|trans }}</div>
            <div class=\"content\">{{ '到目前为止，未回答问题总数'|trans }}</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"{{ path('admin_operation_analysis') }}\">
      <div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>
    </div>
  </div>
  {##}
  {#<div class=\"panel panel-default panel-380\">#}
    {#<div class=\"panel-heading\">#}
      {#<div class=\"pull-right\">#}
        {#<span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}</span>#}
        {#<div class=\"btn-group btn-group-xs\">#}
          {#<button type=\"button\" class=\"btn btn-primary js-user-switch-button\"#}
                  {#data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"#}
                  {#data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\">最近7天#}
          {#</button>#}
          {#<button type=\"button\" class=\"btn btn-default js-user-switch-button\"#}
                  {#data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"#}
                  {#data-url=\"{{ path('admin_user_statistic', {period: 'month'}) }}\">最近30天#}
          {#</button>#}
        {#</div>#}
      {#</div>#}
      {#<h3 class=\"panel-title\">{{ '用户统计'|trans }}#}
        {#<span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>#}
        {#<div class=\"popover-content hidden\">#}
          {#<div class=\"popover-item\">#}
            {#<div class=\"title\">{{ '活跃用户数'|trans }}</div>#}
            {#<div class=\"content\">{{ '在30天内登录过系统的用户即为活跃用户'|trans }}</div>#}
          {#</div>#}
          {#<div class=\"popover-item\">#}
            {#<div class=\"title\">{{ '流失用户数'|trans }}</div>#}
            {#<div class=\"content\">{{ '在30天内没有登录过系统的注册用户即为流失用户'|trans }}</div>#}
          {#</div>#}
        {#</div>#}
      {#</h3>#}
    {#</div>#}
    {#<div class=\"panel-body js-statistic-areas\" id=\"user-statistic\"#}
         {#data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\" style=\"height:320px;\">#}
      {#<div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>#}
    {#</div>#}
  {#</div>#}
  {##}

  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'month'}) }}\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '订单统计'|trans }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">{{ '新增订单'|trans }}</div>
                <div class=\"content\">{{ '平台当日产生的所有订单，包括免费和付费'|trans }}</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">{{ '付费订单'|trans }}</div>
                <div class=\"content\">{{ '平台当日产生的订单价格大于0元的订单'|trans }}</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic',{period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '付费订单统计'|trans }}</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-task-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_task_learn_statistic', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-task-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_task_learn_statistic', {period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '任务完成数'|trans }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">{{ '点击\"学过了\"的任务数量'|trans }}</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-task-count-statistic\"
             data-url=\"{{ path('admin_task_learn_statistic', {period: 'week'}) }}\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '课程排行榜'|trans }}</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"{{ url('admin_question', {postStatus: 'unPosted'}) }}\"
          >{{ '更多'|trans }}</a>
          <h3 class=\"panel-title\">{{ '最新问答'|trans }}</h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('AppBundle:Admin/Default:unsolvedQuestionsBlock')) }}
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"{{ path('admin_review') }}\" class=\"pull-right\">{{ '更多'|trans }}</a>
          <h3 class=\"panel-title\">
            {{ '最新评价'|trans }}
          </h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('AppBundle:Admin/Default:courseReview')) }}
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          {# <a href=\"\" class=\"pull-right\">{{ '更多'|trans }}</a>#}
          <h3 class=\"panel-title\">
            {{ '热门搜索'|trans }}
            <small>{{ '最近7天'|trans }}</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          {% if not setting('cloud_search.search_enabled') %}
            <div class=\"empty\">
              <a target=\"_blank\" href=\"{{ path('admin_edu_cloud_search') }}\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          {% else %}
            {{ render(controller('AppBundle:Admin/Default:cloudSearchRanking')) }}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "admin/default/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/index.html.twig");
    }
}
