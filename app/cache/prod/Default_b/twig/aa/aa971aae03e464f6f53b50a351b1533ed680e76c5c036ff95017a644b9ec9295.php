<?php

/* old-bootstrap-modal-layout.html.twig */
class __TwigTemplate_8ec59adf139e6c16ca41e8976eddaac0db4c031807ea70fd3761becfd3369f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "old-bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "old-bootstrap-modal-layout.html.twig", 2);
        // line 3
        echo "
<div class=\"modal-dialog ";
        // line 4
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter(($context["modal_class"] ?? null), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["modal_class"] ?? null), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 11
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter(($context["hide_footer"] ?? null), false)) : (false))) {
            // line 12
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 15
        echo "  </div>
</div>

<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  79 => 12,  74 => 10,  69 => 8,  60 => 15,  57 => 14,  51 => 12,  49 => 11,  45 => 10,  40 => 8,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "old-bootstrap-modal-layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/old-bootstrap-modal-layout.html.twig");
    }
}
