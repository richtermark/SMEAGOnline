<?php

/* default/foot-navigation.html.twig */
class __TwigTemplate_27cfc910e25eba7ef472995715bf51a068fa7d7b32d49fffff90c23bb599ebb2 extends Twig_Template
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
        $__internal_e3c646ad7ed943685b5f14f4c0997fc48d93e48649830f30bcce5e6d6c56691d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c646ad7ed943685b5f14f4c0997fc48d93e48649830f30bcce5e6d6c56691d->enter($__internal_e3c646ad7ed943685b5f14f4c0997fc48d93e48649830f30bcce5e6d6c56691d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/foot-navigation.html.twig"));

        // line 1
        echo "<ul class=\"site-footer-links\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? $this->getContext($context, "navigations")));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 3
            echo "\t  ";
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "\t\t  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["nav"], "url", array())), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["nav"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "name", array()), "html", null, true);
                echo "</a></li>
\t\t";
            }
            // line 6
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_e3c646ad7ed943685b5f14f4c0997fc48d93e48649830f30bcce5e6d6c56691d->leave($__internal_e3c646ad7ed943685b5f14f4c0997fc48d93e48649830f30bcce5e6d6c56691d_prof);

    }

    public function getTemplateName()
    {
        return "default/foot-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  44 => 6,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"site-footer-links\">
\t{% for nav in navigations %}
\t  {% if nav.isOpen %}
\t\t  <li><a href=\"{{ nav.url|navigation_url }}\" {% if nav.isNewWin %}target=\"_blank\"{% endif %}>{{ nav.name }}</a></li>
\t\t{% endif %}
\t{% endfor %}
</ul>", "default/foot-navigation.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/foot-navigation.html.twig");
    }
}
