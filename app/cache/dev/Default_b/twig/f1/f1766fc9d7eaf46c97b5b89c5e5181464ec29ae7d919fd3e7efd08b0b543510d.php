<?php

/* es-bar/index.html.twig */
class __TwigTemplate_42f80be689e06b32cb27e9809202eb37d07023cf98ce16f8d66a55a2a7ea4470 extends Twig_Template
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
        $__internal_84a39d7fe7372740da7cd1304177dd51ad8af49f410201070c0d810317b91ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a39d7fe7372740da7cd1304177dd51ad8af49f410201070c0d810317b91ea1->enter($__internal_84a39d7fe7372740da7cd1304177dd51ad8af49f410201070c0d810317b91ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/index.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/perfect-scrollbar.js", 1 => "app/js/es-bar/index.js"));
        // line 2
        echo "
";
        // line 3
        $context["consultEnabled"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0);
        // line 4
        $context["consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult");
        // line 5
        echo "
";
        // line 6
        $context["consultQqs"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayFilter((($this->getAttribute(($context["consult"] ?? null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["consult"] ?? null), "qq", array()))) : ("")), array(0 => "name", 1 => "number"));
        // line 7
        $context["consultQqGroups"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayFilter((($this->getAttribute(($context["consult"] ?? null), "qqgroup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["consult"] ?? null), "qqgroup", array()))) : ("")), array(0 => "name", 1 => "number"));
        // line 8
        $context["consultPhones"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayFilter((($this->getAttribute(($context["consult"] ?? null), "phone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["consult"] ?? null), "phone", array()))) : ("")), array(0 => "name", 1 => "number"));
        // line 9
        echo "
<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  ";
        // line 14
        $this->loadTemplate("es-bar/left-list.html.twig", "es-bar/index.html.twig", 14)->display($context);
        // line 15
        echo "
  <!-- 列表内容 -->
  ";
        // line 17
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 18
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 20
            $this->loadTemplate("es-bar/list-content/notification.html.twig", "es-bar/index.html.twig", 20)->display($context);
            // line 21
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 25
            $this->loadTemplate("es-bar/list-content/practice.html.twig", "es-bar/index.html.twig", 25)->display($context);
            // line 26
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 30
            $this->loadTemplate("es-bar/list-content/study-place.html.twig", "es-bar/index.html.twig", 30)->display($context);
            // line 31
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 36
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 48
            echo "
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        $this->loadTemplate("es-bar/list-content/consult.html.twig", "es-bar/index.html.twig", 51)->display($context);
        // line 52
        echo "</div>";
        
        $__internal_84a39d7fe7372740da7cd1304177dd51ad8af49f410201070c0d810317b91ea1->leave($__internal_84a39d7fe7372740da7cd1304177dd51ad8af49f410201070c0d810317b91ea1_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  95 => 51,  92 => 50,  88 => 48,  83 => 36,  77 => 31,  75 => 30,  69 => 26,  67 => 25,  61 => 21,  59 => 20,  55 => 18,  53 => 17,  49 => 15,  47 => 14,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['libs/perfect-scrollbar.js','app/js/es-bar/index.js'])  %}

{% set consultEnabled =  setting('consult.enabled', 0)  %}
{% set consult = setting('consult') %}

{% set consultQqs = array_filter(consult.qq|default(), {0:'name',1:'number'}) %}
{% set consultQqGroups = array_filter(consult.qqgroup|default(), {0:'name',1:'number'}) %}
{% set consultPhones = array_filter(consult.phone|default(), {0:'name',1:'number'}) %}

<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  {% include 'es-bar/left-list.html.twig' %}

  <!-- 列表内容 -->
  {% if app.user and app.user.isLogin() %}
    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      {% include 'es-bar/list-content/notification.html.twig' %}
    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      {% include 'es-bar/list-content/practice.html.twig' %}
    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      {% include 'es-bar/list-content/study-place.html.twig' %}
    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      {# {% include 'es-bar/list-content/study-center.html.twig' %} #}
    </div>

    <!-- 学习历史 -->
    {#<div class=\"es-bar-main\" id=\"bar-history\">
      <div class=\"bar-main-header\">
        <a href=\"javascript:;\" class=\"js-bar-shrink pull-left link-dark\" data-url=\"\" id=\"bar-my-history\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
        学习历史
      </div>
      <div class=\"bar-main-body\" id=\"bar-history-list\">

      </div>
    </div>#}

  {% endif %}

  {% include 'es-bar/list-content/consult.html.twig' %}
</div>", "es-bar/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/index.html.twig");
    }
}
