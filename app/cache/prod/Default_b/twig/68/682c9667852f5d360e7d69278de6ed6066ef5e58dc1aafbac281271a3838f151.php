<?php

/* es-bar/left-list/wechat-consult.html.twig */
class __TwigTemplate_78c38dc7878dd28591d336cb9c43f54663964f5275b68039cba0304a10bb9f54 extends Twig_Template
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
        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "webchatURI", array()))) {
            // line 2
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
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
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list/wechat-consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/wechat-consult.html.twig");
    }
}
