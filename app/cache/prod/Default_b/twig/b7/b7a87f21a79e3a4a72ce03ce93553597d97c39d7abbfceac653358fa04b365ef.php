<?php

/* admin/default/operation-analysis-dashbord.html.twig */
class __TwigTemplate_b9dce9bda4e7ce0a5c2cbc08a9063537d2eac7e346b26a8863c984fc8635c1bf extends Twig_Template
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
        echo "<ul class=\"subfield-list 
  ";
        // line 2
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 3
            echo "    five-subfield 
  ";
        } else {
            // line 5
            echo "    four-subfield
  ";
        }
        // line 7
        echo "  clearfix\">
  <li>
    <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录用户"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("loginCount", $context)) ? (_twig_default_filter(($context["loginCount"] ?? null), "0")) : ("0")), "html", null, true);
        echo "</span>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在线总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["onlineCount"] ?? null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增注册"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["todayRegisterNum"] ?? null), "html", null, true);
        echo "</span>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalRegisterNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 20
        echo twig_escape_filter($this->env, (($context["todayCourseMemberNum"] ?? null) + ($context["todayClassroomMemberNum"] ?? null)), "html", null, true);
        echo "</span>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总人次"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($context["totalCourseMemberNum"] ?? null) + ($context["totalClassroomMemberNum"] ?? null)), "html", null, true);
        echo "</p>
  </li>
  ";
        // line 23
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 24
            echo "    <li>
      <div class=\"title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增会员"), "html", null, true);
            echo "</div>
      <span class=\"number\">";
            // line 26
            echo twig_escape_filter($this->env, ($context["todayVipNum"] ?? null), "html", null, true);
            echo "</span>
      <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["totalVipNum"] ?? null), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 30
        echo "  <li>
    <div class=\"title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复回答"), "html", null, true);
        echo "</div>
    <span class=\"number\">
      ";
        // line 33
        echo twig_escape_filter($this->env, ($context["todayThreadUnAnswerNum"] ?? null), "html", null, true);
        echo "
    </span>
    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalThreadNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "admin/default/operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  112 => 33,  107 => 31,  104 => 30,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  83 => 23,  76 => 21,  72 => 20,  68 => 19,  60 => 16,  56 => 15,  52 => 14,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/operation-analysis-dashbord.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/operation-analysis-dashbord.html.twig");
    }
}
