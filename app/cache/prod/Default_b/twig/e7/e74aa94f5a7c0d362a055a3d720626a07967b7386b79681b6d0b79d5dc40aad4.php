<?php

/* common/weixin-share.html.twig */
class __TwigTemplate_d09a75df6ae188da3817c8eb78fa27a183afdf6b1dc22121f64635b202dc891c extends Twig_Template
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
        $context["wxconfig"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->weixinConfig();
        // line 2
        if (((array_key_exists("wxconfig", $context)) ? (_twig_default_filter(($context["wxconfig"] ?? null), null)) : (null))) {
            // line 3
            echo "\t";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("common/weixin-share");
            // line 4
            echo "\t";
            $this->loadTemplate("seajs_loader_compatible.html.twig", "common/weixin-share.html.twig", 4)->display(array_merge($context, array("topxiawebbundle" => true)));
            // line 5
            echo "\t\t<div class=\"hidden jweixin-data\" 
\t\t\tdata-config=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["wxconfig"] ?? null), "html", null, true);
            echo "\"
\t\t\tdata-title=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" 
\t\t\tdata-desc='";
            // line 8
            echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
            echo "'
\t\t\tdata-link=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" 
\t\t\tdata-img-url=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["imgUrl"] ?? null), "html", null, true);
            echo "\" 
\t\t\tdata-type=\"";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")), "html", null, true);
            echo "\" 
\t\t\tdata-data-url=\"";
            // line 12
            echo twig_escape_filter($this->env, ((array_key_exists("dataUrl", $context)) ? (_twig_default_filter(($context["dataUrl"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
\t\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "common/weixin-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/weixin-share.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/common/weixin-share.html.twig");
    }
}
