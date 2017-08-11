<?php

/* bootstrap-modal-layout.html.twig */
class __TwigTemplate_f90741c342c46e618e6d9b01fd959f4ae28bbc83102a227c9a0f4840da29c7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "bootstrap-modal-layout.html.twig", 2);
        // line 3
        $this->loadTemplate("css_loader.html.twig", "bootstrap-modal-layout.html.twig", 3)->display($context);
        // line 4
        echo "
<div class=\"modal-dialog ";
        // line 5
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter(($context["modal_class"] ?? null), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["modal_class"] ?? null), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 12
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter(($context["hide_footer"] ?? null), false)) : (false))) {
            // line 13
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 15
        echo "    ";
        $this->loadTemplate("js_loader_async.html.twig", "bootstrap-modal-layout.html.twig", 15)->display($context);
        // line 16
        echo "  </div>
</div>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  71 => 11,  66 => 9,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  46 => 11,  41 => 9,  31 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap-modal-layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/bootstrap-modal-layout.html.twig");
    }
}
