<?php

/* @theme/default-b/block/home_top_banner.template.html.twig */
class __TwigTemplate_acc26b59392767eb627d28712501ec2f8edca7e9c756557887f28d4bb5e7066b extends Twig_Template
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
        $__internal_ce5c95f90676c9a338c82788edc10d06b53188ce05bd9137c847aed70e5b3225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5c95f90676c9a338c82788edc10d06b53188ce05bd9137c847aed70e5b3225->enter($__internal_ce5c95f90676c9a338c82788edc10d06b53188ce05bd9137c847aed70e5b3225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@theme/default-b/block/home_top_banner.template.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("carousel", $context)) ? (_twig_default_filter(($context["carousel"] ?? $this->getContext($context, "carousel")), null)) : (null)));
        foreach ($context['_seq'] as $context["_key"] => $context["imglink"]) {
            if ((($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : (""))) {
                // line 2
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "href", array()), "")) : ("")), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["imglink"], "target", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : ("")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "alt", array()), "")) : ("")), "html", null, true);
                echo "\"></a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imglink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ce5c95f90676c9a338c82788edc10d06b53188ce05bd9137c847aed70e5b3225->leave($__internal_ce5c95f90676c9a338c82788edc10d06b53188ce05bd9137c847aed70e5b3225_prof);

    }

    public function getTemplateName()
    {
        return "@theme/default-b/block/home_top_banner.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for imglink in carousel|default(null) if imglink.src|default('') %}
  <a href=\"{{ imglink.href|default('') }}\" target=\"{{ imglink.target }}\"><img src=\"{{ imglink.src|default('') }}\" alt=\"{{ imglink.alt|default('') }}\"></a>
{% endfor %}", "@theme/default-b/block/home_top_banner.template.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/block/home_top_banner.template.html.twig");
    }
}
