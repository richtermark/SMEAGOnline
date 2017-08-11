<?php

/* default/foot-navigation.html.twig */
class __TwigTemplate_a7e0e7b792eded73990f56ea766c3d1f417489d67202893bc832d0efda490cef extends Twig_Template
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
        echo "<ul class=\"site-footer-links\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? null));
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
        return array (  47 => 7,  41 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/foot-navigation.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/foot-navigation.html.twig");
    }
}
