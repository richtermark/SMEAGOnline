<?php

/* admin/default/domain.html.twig */
class __TwigTemplate_7e76a6705f0e6ec98a1bb7aff1ce1e92dc1d5eb85d68f837c895a456159b4494 extends Twig_Template
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
        $__internal_0893002187447c740d239faa7e3db142121eacda8d52879eb3603461fe80308c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0893002187447c740d239faa7e3db142121eacda8d52879eb3603461fe80308c->enter($__internal_0893002187447c740d239faa7e3db142121eacda8d52879eb3603461fe80308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/domain.html.twig"));

        // line 1
        if (($context["inspectList"] ?? $this->getContext($context, "inspectList"))) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inspectList"] ?? $this->getContext($context, "inspectList")));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "      <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
      <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
        
        $__internal_0893002187447c740d239faa7e3db142121eacda8d52879eb3603461fe80308c->leave($__internal_0893002187447c740d239faa7e3db142121eacda8d52879eb3603461fe80308c_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if inspectList %}
  <div class=\"alert alert-warning\" role=\"alert\">
    {% for inspectItem in inspectList %}
      <span>{{inspectItem.value.errorMessage}}</span>
      <a href='{{inspectItem.value.settingUrl}}'>{{'设置'|trans}}</a>
    {% endfor %}
  </div>
{% endif %}", "admin/default/domain.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/domain.html.twig");
    }
}
