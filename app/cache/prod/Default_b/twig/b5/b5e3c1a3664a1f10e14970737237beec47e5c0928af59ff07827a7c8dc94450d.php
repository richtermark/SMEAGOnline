<?php

/* es-bar/list-content/practice.html.twig */
class __TwigTemplate_2f5b9d4a863b05529b8a297c99dd9ecce2a05ac9f62a29677f4fc85a73c331c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? null), "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
        echo "</span></a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? null), "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已提交"), "html", null, true);
        echo "</a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  77 => 14,  72 => 17,  70 => 14,  57 => 10,  47 => 9,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/practice.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/list-content/practice.html.twig");
    }
}
