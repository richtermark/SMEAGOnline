<?php

/* es-bar/left-list/my-notification.html.twig */
class __TwigTemplate_d51473c547f9a91b6bfceaa02308bd1427db6db62006c4fd8cd572ec31622c1a extends Twig_Template
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
        $__internal_6c98b675be3009c0004dfcfe917972c1861c2b5a3d8174d086a3428be20fd090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c98b675be3009c0004dfcfe917972c1861c2b5a3d8174d086a3428be20fd090->enter($__internal_6c98b675be3009c0004dfcfe917972c1861c2b5a3d8174d086a3428be20fd090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/my-notification.html.twig"));

        // line 1
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
    <a href=\"javascript:;\" data-url=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_notify");
            echo "\">
      ";
            // line 4
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                // line 5
                echo "        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      ";
            } else {
                // line 8
                echo "        <i class=\"es-icon es-icon-notifications\"></i>
      ";
            }
            // line 10
            echo "    </a>
  </li>
";
        } else {
            // line 13
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
";
        }
        
        $__internal_6c98b675be3009c0004dfcfe917972c1861c2b5a3d8174d086a3428be20fd090->leave($__internal_6c98b675be3009c0004dfcfe917972c1861c2b5a3d8174d086a3428be20fd090_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/my-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 10,  40 => 8,  35 => 5,  33 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user and app.user.isLogin() %}
  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'通知'|trans}}\" data-trigger=\"hover\" data-container=\".es-bar\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_notify') }}\">
      {% if app.user.newNotificationNum > 0 %}
        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      {% else %}
        <i class=\"es-icon es-icon-notifications\"></i>
      {% endif %}
    </a>
  </li>
{% else %}
  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'通知'|trans}}\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
{% endif %}
", "es-bar/left-list/my-notification.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/my-notification.html.twig");
    }
}
