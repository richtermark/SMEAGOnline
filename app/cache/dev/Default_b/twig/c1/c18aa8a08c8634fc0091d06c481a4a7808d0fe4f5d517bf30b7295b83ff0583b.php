<?php

/* es-bar/layout.html.twig */
class __TwigTemplate_c371ed9e27a44c1196116db8805ce91e1ba8af1dbf0421ed049339eee51eb0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d20db8c28c0f76744ddf59f1055a7f6f3203749f4ee5aede128eda87b9e74e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20db8c28c0f76744ddf59f1055a7f6f3203749f4ee5aede128eda87b9e74e7d->enter($__internal_d20db8c28c0f76744ddf59f1055a7f6f3203749f4ee5aede128eda87b9e74e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/layout.html.twig"));

        // line 1
        echo "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-dark\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  ";
        // line 3
        $this->displayBlock('esBarTitle', $context, $blocks);
        // line 6
        echo "</div>

<div class=\"bar-main-body\">
  ";
        // line 9
        $this->displayBlock('esBarBody', $context, $blocks);
        // line 12
        echo "</div>
";
        
        $__internal_d20db8c28c0f76744ddf59f1055a7f6f3203749f4ee5aede128eda87b9e74e7d->leave($__internal_d20db8c28c0f76744ddf59f1055a7f6f3203749f4ee5aede128eda87b9e74e7d_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_d8206dbb604695042bb54c51f95e50cb37251c9c3465fba9dad379e8b1a591ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8206dbb604695042bb54c51f95e50cb37251c9c3465fba9dad379e8b1a591ea->enter($__internal_d8206dbb604695042bb54c51f95e50cb37251c9c3465fba9dad379e8b1a591ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "
  ";
        
        $__internal_d8206dbb604695042bb54c51f95e50cb37251c9c3465fba9dad379e8b1a591ea->leave($__internal_d8206dbb604695042bb54c51f95e50cb37251c9c3465fba9dad379e8b1a591ea_prof);

    }

    // line 9
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_38323a184bed9ee87bc53c7931a9a23e6adfba43765a1c8fa49100080085004c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38323a184bed9ee87bc53c7931a9a23e6adfba43765a1c8fa49100080085004c->enter($__internal_38323a184bed9ee87bc53c7931a9a23e6adfba43765a1c8fa49100080085004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 10
        echo "
  ";
        
        $__internal_38323a184bed9ee87bc53c7931a9a23e6adfba43765a1c8fa49100080085004c->leave($__internal_38323a184bed9ee87bc53c7931a9a23e6adfba43765a1c8fa49100080085004c_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  51 => 4,  45 => 3,  37 => 12,  35 => 9,  30 => 6,  28 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-dark\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  {% block esBarTitle %}

  {% endblock %}
</div>

<div class=\"bar-main-body\">
  {% block esBarBody %}

  {% endblock %}
</div>
", "es-bar/layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/layout.html.twig");
    }
}
