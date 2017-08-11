<?php

/* es-bar/list-content/study-place.html.twig */
class __TwigTemplate_453de07ee5b5fbda37833fc800023ff0a6d415257203edfd3dcfda14c6409090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/study-place.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e009ad819e8d74f1de9987c5346a79f35d889289fdc53c606e2f3ca6403857e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e009ad819e8d74f1de9987c5346a79f35d889289fdc53c606e2f3ca6403857e->enter($__internal_4e009ad819e8d74f1de9987c5346a79f35d889289fdc53c606e2f3ca6403857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/list-content/study-place.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e009ad819e8d74f1de9987c5346a79f35d889289fdc53c606e2f3ca6403857e->leave($__internal_4e009ad819e8d74f1de9987c5346a79f35d889289fdc53c606e2f3ca6403857e_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_7eba5a825dd2e1145551d07c09473ae6cc2d5d112b68236a1335cf3aa788afa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eba5a825dd2e1145551d07c09473ae6cc2d5d112b68236a1335cf3aa788afa1->enter($__internal_7eba5a825dd2e1145551d07c09473ae6cc2d5d112b68236a1335cf3aa788afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "
";
        
        $__internal_7eba5a825dd2e1145551d07c09473ae6cc2d5d112b68236a1335cf3aa788afa1->leave($__internal_7eba5a825dd2e1145551d07c09473ae6cc2d5d112b68236a1335cf3aa788afa1_prof);

    }

    // line 7
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_249abd93eb46da8150d2f487844c5e88eb31d0a37343c5875d5f5a03ee9b882e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249abd93eb46da8150d2f487844c5e88eb31d0a37343c5875d5f5a03ee9b882e->enter($__internal_249abd93eb46da8150d2f487844c5e88eb31d0a37343c5875d5f5a03ee9b882e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 8
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_course");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? $this->getContext($context, "esBarMenu")), "")) : ("")) != "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-course-btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_classroom");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? $this->getContext($context, "esBarMenu")), "")) : ("")) == "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-classroom-btn\">";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    ";
        // line 18
        $this->displayBlock('myStudyPlace', $context, $blocks);
        // line 20
        echo "  </div>
";
        
        $__internal_249abd93eb46da8150d2f487844c5e88eb31d0a37343c5875d5f5a03ee9b882e->leave($__internal_249abd93eb46da8150d2f487844c5e88eb31d0a37343c5875d5f5a03ee9b882e_prof);

    }

    // line 18
    public function block_myStudyPlace($context, array $blocks = array())
    {
        $__internal_76e324105fab92db9e64e842bf591ffed8ef94852b93bda5f14b1972361e12be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e324105fab92db9e64e842bf591ffed8ef94852b93bda5f14b1972361e12be->enter($__internal_76e324105fab92db9e64e842bf591ffed8ef94852b93bda5f14b1972361e12be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStudyPlace"));

        // line 19
        echo "    ";
        
        $__internal_76e324105fab92db9e64e842bf591ffed8ef94852b93bda5f14b1972361e12be->leave($__internal_76e324105fab92db9e64e842bf591ffed8ef94852b93bda5f14b1972361e12be_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/list-content/study-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 18,  92 => 20,  90 => 18,  82 => 13,  74 => 12,  70 => 11,  62 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'es-bar/layout.html.twig' %}

{% block esBarTitle %}
  {{'我的课程/%name%'|trans({'%name%': setting('classroom.name')|default('班级'|trans)}) }}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_course') }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'classroom' %}active{% endif %}\"
         id=\"bar-course-btn\">{{'课程'|trans}}</a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_classroom' ) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'classroom' %}active{% endif %}\"
         id=\"bar-classroom-btn\">{{ setting('classroom.name')|default('班级'|trans) }}</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    {% block myStudyPlace%}
    {% endblock %}
  </div>
{% endblock %}", "es-bar/list-content/study-place.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/list-content/study-place.html.twig");
    }
}
