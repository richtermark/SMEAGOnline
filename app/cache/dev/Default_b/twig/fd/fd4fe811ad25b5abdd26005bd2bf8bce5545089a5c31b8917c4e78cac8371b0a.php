<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_934b8089204b4c03a36fba68d0370dbb59a1d90494fc554cab50c60f1eb04eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca638588976e5c7b247f74a05766aeb95065e2cef55a62b4439f40028f61d364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca638588976e5c7b247f74a05766aeb95065e2cef55a62b4439f40028f61d364->enter($__internal_ca638588976e5c7b247f74a05766aeb95065e2cef55a62b4439f40028f61d364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca638588976e5c7b247f74a05766aeb95065e2cef55a62b4439f40028f61d364->leave($__internal_ca638588976e5c7b247f74a05766aeb95065e2cef55a62b4439f40028f61d364_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84b346908fdf46ad11bc11a26773944684a042c3f4e6c07fc5a6c1c642ad2c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b346908fdf46ad11bc11a26773944684a042c3f4e6c07fc5a6c1c642ad2c22->enter($__internal_84b346908fdf46ad11bc11a26773944684a042c3f4e6c07fc5a6c1c642ad2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84b346908fdf46ad11bc11a26773944684a042c3f4e6c07fc5a6c1c642ad2c22->leave($__internal_84b346908fdf46ad11bc11a26773944684a042c3f4e6c07fc5a6c1c642ad2c22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5100b4ee43ab02e66255279ea66ea7a718fa5ee5c04e5429d47b9ca2bec0da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5100b4ee43ab02e66255279ea66ea7a718fa5ee5c04e5429d47b9ca2bec0da60->enter($__internal_5100b4ee43ab02e66255279ea66ea7a718fa5ee5c04e5429d47b9ca2bec0da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5100b4ee43ab02e66255279ea66ea7a718fa5ee5c04e5429d47b9ca2bec0da60->leave($__internal_5100b4ee43ab02e66255279ea66ea7a718fa5ee5c04e5429d47b9ca2bec0da60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd7027b904f6c1493aa2e17bace94ddecfd2dd4598c4233270a4376964c752b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7027b904f6c1493aa2e17bace94ddecfd2dd4598c4233270a4376964c752b5->enter($__internal_fd7027b904f6c1493aa2e17bace94ddecfd2dd4598c4233270a4376964c752b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd7027b904f6c1493aa2e17bace94ddecfd2dd4598c4233270a4376964c752b5->leave($__internal_fd7027b904f6c1493aa2e17bace94ddecfd2dd4598c4233270a4376964c752b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/smeagonline/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
