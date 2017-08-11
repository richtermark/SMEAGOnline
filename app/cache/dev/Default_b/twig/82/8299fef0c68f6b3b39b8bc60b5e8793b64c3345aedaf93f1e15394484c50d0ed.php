<?php

/* es-bar/list-content/notification.html.twig */
class __TwigTemplate_55982185e5f19476b4ac2b03d4aeb1bf6401bae6aa06a5833686cfe686ce2176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ab3c4cb6db02b38b21cff89363d5d80784d44c598080a0572a68c48c44e6de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab3c4cb6db02b38b21cff89363d5d80784d44c598080a0572a68c48c44e6de0->enter($__internal_2ab3c4cb6db02b38b21cff89363d5d80784d44c598080a0572a68c48c44e6de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/list-content/notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab3c4cb6db02b38b21cff89363d5d80784d44c598080a0572a68c48c44e6de0->leave($__internal_2ab3c4cb6db02b38b21cff89363d5d80784d44c598080a0572a68c48c44e6de0_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_a933a77968cb5811d92b708b0f405071138a28d0b9451c90d0061f137c2a3765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a933a77968cb5811d92b708b0f405071138a28d0b9451c90d0061f137c2a3765->enter($__internal_a933a77968cb5811d92b708b0f405071138a28d0b9451c90d0061f137c2a3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
        echo "
";
        
        $__internal_a933a77968cb5811d92b708b0f405071138a28d0b9451c90d0061f137c2a3765->leave($__internal_a933a77968cb5811d92b708b0f405071138a28d0b9451c90d0061f137c2a3765_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_edc373b6f0cf14bf5e86db5dfbe4158f92dd846be115eefd563546fa1e1b4152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc373b6f0cf14bf5e86db5dfbe4158f92dd846be115eefd563546fa1e1b4152->enter($__internal_edc373b6f0cf14bf5e86db5dfbe4158f92dd846be115eefd563546fa1e1b4152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
        
        $__internal_edc373b6f0cf14bf5e86db5dfbe4158f92dd846be115eefd563546fa1e1b4152->leave($__internal_edc373b6f0cf14bf5e86db5dfbe4158f92dd846be115eefd563546fa1e1b4152_prof);

    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        $__internal_2aa43d5b60057a629b6c0f7c8555962886b11fad49f11904e98027c5418fc083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa43d5b60057a629b6c0f7c8555962886b11fad49f11904e98027c5418fc083->enter($__internal_2aa43d5b60057a629b6c0f7c8555962886b11fad49f11904e98027c5418fc083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myMessage"));

        // line 9
        echo "
    ";
        
        $__internal_2aa43d5b60057a629b6c0f7c8555962886b11fad49f11904e98027c5418fc083->leave($__internal_2aa43d5b60057a629b6c0f7c8555962886b11fad49f11904e98027c5418fc083_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/list-content/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  71 => 8,  63 => 11,  61 => 8,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
    {{'通知'|trans}}
{% endblock %}

{% block esBarBody %}
  <ul class=\"bar-message\">
    {% block myMessage %}

    {% endblock %}
  </ul>
{% endblock %}
", "es-bar/list-content/notification.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/list-content/notification.html.twig");
    }
}
