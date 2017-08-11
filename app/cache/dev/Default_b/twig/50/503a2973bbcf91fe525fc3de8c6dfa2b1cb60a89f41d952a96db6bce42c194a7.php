<?php

/* mobile/footer-tool-bar.html.twig */
class __TwigTemplate_8969be50969efb7e05434ef78f233a7fac45d2d59a0f5225950b82ddb7ec461a extends Twig_Template
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
        $__internal_7a847d7f441bbdc6758885deaab89e5b31e05ee4d8ef9056d1bfc5fa606b3641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a847d7f441bbdc6758885deaab89e5b31e05ee4d8ef9056d1bfc5fa606b3641->enter($__internal_7a847d7f441bbdc6758885deaab89e5b31e05ee4d8ef9056d1bfc5fa606b3641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mobile/footer-tool-bar.html.twig"));

        // line 1
        echo "<div class=\"footer-tool-bar\">
  <div class=\"";
        // line 2
        if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "index")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      首页
    </a>
  </div>
  <div class=\"";
        // line 8
        if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "course")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      课程
    </a>
  </div>
  <div class=\"";
        // line 14
        if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "learning")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">
      <i class=\"es-icon es-icon-write\"></i><br>
      学习
    </a>
  </div>
</div>";
        
        $__internal_7a847d7f441bbdc6758885deaab89e5b31e05ee4d8ef9056d1bfc5fa606b3641->leave($__internal_7a847d7f441bbdc6758885deaab89e5b31e05ee4d8ef9056d1bfc5fa606b3641_prof);

    }

    public function getTemplateName()
    {
        return "mobile/footer-tool-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 14,  45 => 9,  39 => 8,  31 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-tool-bar\">
  <div class=\"{% if mobile_tool_bar == 'index' %}active{% endif %}\">
    <a href=\"{{ path('homepage') }}\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      首页
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'course' %}active{% endif %}\">
    <a href=\"{{ path('course_set_explore') }}\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      课程
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'learning' %}active{% endif %}\">
    <a href=\"{{ path('my_courses_learning') }}\">
      <i class=\"es-icon es-icon-write\"></i><br>
      学习
    </a>
  </div>
</div>", "mobile/footer-tool-bar.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/mobile/footer-tool-bar.html.twig");
    }
}
