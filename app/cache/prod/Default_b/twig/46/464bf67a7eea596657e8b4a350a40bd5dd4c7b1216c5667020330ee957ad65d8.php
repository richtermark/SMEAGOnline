<?php

/* admin/default/domain.html.twig */
class __TwigTemplate_87d76c571dfe3cc231ef205983c5a77b1da183bd468656d15637886c24be8314 extends Twig_Template
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
        if (($context["inspectList"] ?? null)) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inspectList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "      <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
      <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/default/domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/domain.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/domain.html.twig");
    }
}
