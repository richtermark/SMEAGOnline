<?php

/* default/message.html.twig */
class __TwigTemplate_ab3aae07004dd359495e233fd307f5a890ae399741dca48759b8e3f4a930b361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0027017f647181f7717e12a8e85c3e4a6c9b1f1b94ecf5e9ced08e627a84fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0027017f647181f7717e12a8e85c3e4a6c9b1f1b94ecf5e9ced08e627a84fcc->enter($__internal_d0027017f647181f7717e12a8e85c3e4a6c9b1f1b94ecf5e9ced08e627a84fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/message.html.twig"));

        // line 2
        $context["typeTitles"] = array("info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示信息"), "warning" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告信息"), "error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误提示"));
        // line 3
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter(($context["title"] ?? $this->getContext($context, "title")), $this->getAttribute(($context["typeTitles"] ?? $this->getContext($context, "typeTitles")), ($context["type"] ?? $this->getContext($context, "type")), array(), "array"))) : ($this->getAttribute(($context["typeTitles"] ?? $this->getContext($context, "typeTitles")), ($context["type"] ?? $this->getContext($context, "type")), array(), "array")));
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/message/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0027017f647181f7717e12a8e85c3e4a6c9b1f1b94ecf5e9ced08e627a84fcc->leave($__internal_d0027017f647181f7717e12a8e85c3e4a6c9b1f1b94ecf5e9ced08e627a84fcc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_01870d7b6de058ced5ca5d643ad61fe9fe5ec7fabb9ba9b7c864f91be9434ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01870d7b6de058ced5ca5d643ad61fe9fe5ec7fabb9ba9b7c864f91be9434ba1->enter($__internal_01870d7b6de058ced5ca5d643ad61fe9fe5ec7fabb9ba9b7c864f91be9434ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_01870d7b6de058ced5ca5d643ad61fe9fe5ec7fabb9ba9b7c864f91be9434ba1->leave($__internal_01870d7b6de058ced5ca5d643ad61fe9fe5ec7fabb9ba9b7c864f91be9434ba1_prof);

    }

    // line 5
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_e121537dd9461174f48cdce1ae6faac2917bbc19428ea81688312261c134a4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e121537dd9461174f48cdce1ae6faac2917bbc19428ea81688312261c134a4f3->enter($__internal_e121537dd9461174f48cdce1ae6faac2917bbc19428ea81688312261c134a4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        echo ((array_key_exists("script", $context)) ? (_twig_default_filter(($context["script"] ?? $this->getContext($context, "script")), "")) : (""));
        
        $__internal_e121537dd9461174f48cdce1ae6faac2917bbc19428ea81688312261c134a4f3->leave($__internal_e121537dd9461174f48cdce1ae6faac2917bbc19428ea81688312261c134a4f3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4f6bc0be407609ec28ee8db34ff4555ce92c09aedf4291ea1393f22ce255a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f6bc0be407609ec28ee8db34ff4555ce92c09aedf4291ea1393f22ce255a10->enter($__internal_f4f6bc0be407609ec28ee8db34ff4555ce92c09aedf4291ea1393f22ce255a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        echo twig_escape_filter($this->env, ($context["goto"] ?? $this->getContext($context, "goto")), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, ($context["duration"] ?? $this->getContext($context, "duration")), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? $this->getContext($context, "message")), "")) : (""))), "html", null, true);
        echo "</div>
  </div>
</div>
";
        
        $__internal_f4f6bc0be407609ec28ee8db34ff4555ce92c09aedf4291ea1393f22ce255a10->leave($__internal_f4f6bc0be407609ec28ee8db34ff4555ce92c09aedf4291ea1393f22ce255a10_prof);

    }

    public function getTemplateName()
    {
        return "default/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  84 => 12,  75 => 9,  69 => 8,  57 => 5,  43 => 4,  36 => 1,  34 => 6,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% set typeTitles = {info:'提示信息'|trans, warning:'警告信息'|trans, error: '错误提示'|trans} %}
{% set title = title|default(typeTitles[type]) %}
{% block title %}{{ title|trans }} - {{ parent() }}{% endblock %}
{% block head_scripts %}{{ script|default('')|raw }}{% endblock %}
{% do script(['app/js/default/message/index.js']) %}

{% block content %}
<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"{{ goto }}\" data-duration={{ duration }}>
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">{{ title|trans }}</h2>
    </div>
    <div class=\"page-message-body\">{{ message|default('')|trans }}</div>
  </div>
</div>
{% endblock %}", "default/message.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/message.html.twig");
    }
}
