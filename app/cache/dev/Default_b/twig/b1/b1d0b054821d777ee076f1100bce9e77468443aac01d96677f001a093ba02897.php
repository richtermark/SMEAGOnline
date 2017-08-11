<?php

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_a484107ff1d5a6f8d062e38f0ef9b0be974b04ac4d2543275d8240e566ae8b76 extends Twig_Template
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
        $__internal_9354886b66e5ed26bbdd52096c7a716983ad184047d1d43cc5dd02ce28fbad17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9354886b66e5ed26bbdd52096c7a716983ad184047d1d43cc5dd02ce28fbad17->enter($__internal_9354886b66e5ed26bbdd52096c7a716983ad184047d1d43cc5dd02ce28fbad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/stylesheet-webpack.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/vendor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/app-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/defaultbtheme/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        
        $__internal_9354886b66e5ed26bbdd52096c7a716983ad184047d1d43cc5dd02ce28fbad17->leave($__internal_9354886b66e5ed26bbdd52096c7a716983ad184047d1d43cc5dd02ce28fbad17_prof);

    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset('static-dist/libs/vendor.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/libs/app-bootstrap.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/defaultbtheme/css/main.css') }}\" rel=\"stylesheet\" />", "default/stylesheet-webpack.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/stylesheet-webpack.html.twig");
    }
}
