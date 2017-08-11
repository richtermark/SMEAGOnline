<?php

/* org/batch-update-org-btn.html.twig */
class __TwigTemplate_04edec3314ec748a603f99515d07e1711f169cc7b07d37dec6bd78ade7d9e16c extends Twig_Template
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
        $__internal_195744a42c2e415dbc8f15f596ae326a3ead753398ce6c76e906c53f45f15ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195744a42c2e415dbc8f15f596ae326a3ead753398ce6c76e906c53f45f15ba3->enter($__internal_195744a42c2e415dbc8f15f596ae326a3ead753398ce6c76e906c53f45f15ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/batch-update-org-btn.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/org/batch-org-btn");
            // line 3
            echo "  ";
            $this->loadTemplate("seajs_loader_compatible.html.twig", "org/batch-update-org-btn.html.twig", 3)->display(array_merge($context, array("topxiawebbundle" => true)));
            // line 4
            echo "\t";
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter(($context["generate"] ?? $this->getContext($context, "generate")), "generate")) : ("generate")) != "no-generate");
            // line 5
            echo "\t";
            if (($context["generate"] ?? $this->getContext($context, "generate"))) {
                // line 6
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
                echo "</label>
\t";
            }
            // line 9
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if (($context["generate"] ?? $this->getContext($context, "generate"))) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            echo twig_escape_filter($this->env, ($context["formId"] ?? $this->getContext($context, "formId")), "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter(($context["generate"] ?? $this->getContext($context, "generate")), false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_update_org", array("module" => ($context["module"] ?? $this->getContext($context, "module")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置组织机构"), "html", null, true);
            echo "</a>
\t";
            // line 10
            if (($context["generate"] ?? $this->getContext($context, "generate"))) {
                // line 11
                echo "\t  </div>
\t";
            }
        }
        
        $__internal_195744a42c2e415dbc8f15f596ae326a3ead753398ce6c76e906c53f45f15ba3->leave($__internal_195744a42c2e415dbc8f15f596ae326a3ead753398ce6c76e906c53f45f15ba3_prof);

    }

    public function getTemplateName()
    {
        return "org/batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  59 => 10,  44 => 9,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('magic.enable_org','0') %}
\t{% do load_script('topxiawebbundle/controller/org/batch-org-btn') %}
  {% include 'seajs_loader_compatible.html.twig' with {topxiawebbundle: true} %}
\t{% set generate = generate|default('generate') != 'no-generate' %}
\t{% if generate %}
\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{ '全选'|trans }}</label>
\t{% endif %}
  \t<a class=\"btn btn-default btn-sm {% if generate %} mlm {% endif %}\" id=\"batch-update-org\" data-form-id=\"{{formId}}\" data-toggle=\"modal\" data-generate=\"{{generate|default(false)}}\" data-target=\"#modal\" data-url=\"{{path('admin_batch_update_org',{module:module})}}\">{{ '设置组织机构'|trans }}</a>
\t{% if generate %}
\t  </div>
\t{% endif %}
{% endif %}", "org/batch-update-org-btn.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/batch-update-org-btn.html.twig");
    }
}
