<?php

/* default/message.html.twig */
class __TwigTemplate_a2424b615374f77dedca4cb6eea32292f12958fcef71284beccfbcf8e2529ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["typeTitles"] = array("info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示信息"), "warning" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告信息"), "error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误提示"));
        // line 3
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter(($context["title"] ?? null), $this->getAttribute(($context["typeTitles"] ?? null), ($context["type"] ?? null), array(), "array"))) : ($this->getAttribute(($context["typeTitles"] ?? null), ($context["type"] ?? null), array(), "array")));
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/message/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_head_scripts($context, array $blocks = array())
    {
        echo ((array_key_exists("script", $context)) ? (_twig_default_filter(($context["script"] ?? null), "")) : (""));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null), "")) : (""))), "html", null, true);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 12,  54 => 9,  51 => 8,  45 => 5,  37 => 4,  33 => 1,  31 => 6,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/message.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/message.html.twig");
    }
}
