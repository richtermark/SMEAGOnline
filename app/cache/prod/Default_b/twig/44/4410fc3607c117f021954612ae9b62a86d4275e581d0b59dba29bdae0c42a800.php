<?php

/* es-bar/index.html.twig */
class __TwigTemplate_29b6796578bfd312d3db143ae84b30b81580c95cc68bbf9fcae97e0ef2204ecc extends Twig_Template
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
        if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isLogin", array(), "method"))) {
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
        return array (  94 => 52,  92 => 51,  89 => 50,  85 => 48,  80 => 36,  74 => 31,  72 => 30,  66 => 26,  64 => 25,  58 => 21,  56 => 20,  52 => 18,  50 => 17,  46 => 15,  44 => 14,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/index.html.twig");
    }
}
