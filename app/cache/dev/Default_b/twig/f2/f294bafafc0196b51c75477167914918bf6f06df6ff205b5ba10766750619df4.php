<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_281b7130792e4bb64ac34acc0cada52732314b8748ac4073295403e8c260d760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017a83388c6e1f4dd0d8377a6ca9b85860a0507728c64b1d125ed2a693e6f06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017a83388c6e1f4dd0d8377a6ca9b85860a0507728c64b1d125ed2a693e6f06e->enter($__internal_017a83388c6e1f4dd0d8377a6ca9b85860a0507728c64b1d125ed2a693e6f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017a83388c6e1f4dd0d8377a6ca9b85860a0507728c64b1d125ed2a693e6f06e->leave($__internal_017a83388c6e1f4dd0d8377a6ca9b85860a0507728c64b1d125ed2a693e6f06e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f98d8cee43604e39fcb7dd9001c5f0aa95abafc443c5d9316ae4cfdf62af9ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98d8cee43604e39fcb7dd9001c5f0aa95abafc443c5d9316ae4cfdf62af9ffc->enter($__internal_f98d8cee43604e39fcb7dd9001c5f0aa95abafc443c5d9316ae4cfdf62af9ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f98d8cee43604e39fcb7dd9001c5f0aa95abafc443c5d9316ae4cfdf62af9ffc->leave($__internal_f98d8cee43604e39fcb7dd9001c5f0aa95abafc443c5d9316ae4cfdf62af9ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bf95ba52032aeaba2ea7ff43483c24751a1e8448ab3f6b9866f0a32f6d0c075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf95ba52032aeaba2ea7ff43483c24751a1e8448ab3f6b9866f0a32f6d0c075->enter($__internal_3bf95ba52032aeaba2ea7ff43483c24751a1e8448ab3f6b9866f0a32f6d0c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3bf95ba52032aeaba2ea7ff43483c24751a1e8448ab3f6b9866f0a32f6d0c075->leave($__internal_3bf95ba52032aeaba2ea7ff43483c24751a1e8448ab3f6b9866f0a32f6d0c075_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bff565aabe4cda366ba1b32f138f216ce7d0ab4bfcb373e253b7d3ef97dc36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bff565aabe4cda366ba1b32f138f216ce7d0ab4bfcb373e253b7d3ef97dc36d->enter($__internal_8bff565aabe4cda366ba1b32f138f216ce7d0ab4bfcb373e253b7d3ef97dc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8bff565aabe4cda366ba1b32f138f216ce7d0ab4bfcb373e253b7d3ef97dc36d->leave($__internal_8bff565aabe4cda366ba1b32f138f216ce7d0ab4bfcb373e253b7d3ef97dc36d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/smeagonline/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
