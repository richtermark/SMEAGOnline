<?php

/* css_loader.html.twig */
class __TwigTemplate_5210f225321e6d52d92cb22d489db1239a2f4fb7210db34f6e940cdd0c1e3016 extends Twig_Template
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
        $__internal_1657db292546102434b23b9cbd6a8a815abc1d6a1912b7b2e7508ec74ce7228a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1657db292546102434b23b9cbd6a8a815abc1d6a1912b7b2e7508ec74ce7228a->enter($__internal_1657db292546102434b23b9cbd6a8a815abc1d6a1912b7b2e7508ec74ce7228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_0da09a5926a5df8b5a340118ba0fa71203ca2c76c91cb4784a8e7daf1228c3f7 = $context["path"]) && is_string($__internal_20c0f449542797eebc8ba60868058fc1cc8602b3b4fdb3232b8d66b0c18bf6eb = "http://") && ('' === $__internal_20c0f449542797eebc8ba60868058fc1cc8602b3b4fdb3232b8d66b0c18bf6eb || 0 === strpos($__internal_0da09a5926a5df8b5a340118ba0fa71203ca2c76c91cb4784a8e7daf1228c3f7, $__internal_20c0f449542797eebc8ba60868058fc1cc8602b3b4fdb3232b8d66b0c18bf6eb)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1657db292546102434b23b9cbd6a8a815abc1d6a1912b7b2e7508ec74ce7228a->leave($__internal_1657db292546102434b23b9cbd6a8a815abc1d6a1912b7b2e7508ec74ce7228a_prof);

    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in css() %}
  {% if path starts with 'http://' %}
    <link href=\"{{ path }}\" rel=\"stylesheet\" />
  {% else %}
    <link href=\"{{ asset('static-dist/' ~ path) }}\" rel=\"stylesheet\" />
  {% endif %}
{% endfor %}", "css_loader.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/css_loader.html.twig");
    }
}
