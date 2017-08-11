<?php

/* default/script-webpack.html.twig */
class __TwigTemplate_b3347a94e5236fd53675b7559a7bfdfcb5a5c37f71a0d18d614ab9e7cdb73b62 extends Twig_Template
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
        $__internal_0c1e446a7463d9a37dbdcd5b58195b919eb9be931670fea5fa0d34957ad60d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1e446a7463d9a37dbdcd5b58195b919eb9be931670fea5fa0d34957ad60d11->enter($__internal_0c1e446a7463d9a37dbdcd5b58195b919eb9be931670fea5fa0d34957ad60d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/script-webpack.html.twig"));

        // line 1
        echo " ";
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/vendor.js", 1 => "app/js/common.js", 2 => "app/js/main.js", 3 => "defaultbtheme/js/main.js"), 1000);
        
        $__internal_0c1e446a7463d9a37dbdcd5b58195b919eb9be931670fea5fa0d34957ad60d11->leave($__internal_0c1e446a7463d9a37dbdcd5b58195b919eb9be931670fea5fa0d34957ad60d11_prof);

    }

    public function getTemplateName()
    {
        return "default/script-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% do script(['libs/vendor.js','app/js/common.js','app/js/main.js','defaultbtheme/js/main.js'], 1000) %}
", "default/script-webpack.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/script-webpack.html.twig");
    }
}
