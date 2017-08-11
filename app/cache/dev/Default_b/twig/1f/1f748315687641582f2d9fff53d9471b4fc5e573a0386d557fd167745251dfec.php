<?php

/* es-bar/left-list/wechat-consult.html.twig */
class __TwigTemplate_62348b9730d279d89b95b7c89ef621e57eaa9500090e0752f2f2b7485e385901 extends Twig_Template
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
        $__internal_5c79f7544a579347e0d1760c075d1f677ad858e9095145074c6d534a1a50787a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c79f7544a579347e0d1760c075d1f677ad858e9095145074c6d534a1a50787a->enter($__internal_5c79f7544a579347e0d1760c075d1f677ad858e9095145074c6d534a1a50787a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/wechat-consult.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "webchatURI", array()))) {
            // line 2
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
        
        $__internal_5c79f7544a579347e0d1760c075d1f677ad858e9095145074c6d534a1a50787a->leave($__internal_5c79f7544a579347e0d1760c075d1f677ad858e9095145074c6d534a1a50787a_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/wechat-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if consult.webchatURI is not empty %}
  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/wechat-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/wechat-consult.html.twig");
    }
}
