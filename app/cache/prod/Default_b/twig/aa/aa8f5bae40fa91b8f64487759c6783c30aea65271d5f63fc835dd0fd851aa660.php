<?php

/* css_loader.html.twig */
class __TwigTemplate_a169b4cd10243fddf2920300422881a18f0f17550bae749e925a03c52b6ad155 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_40d52b49907a491f9be3445f5deda5df457e79d4101343c70e9f2bd6d8c0135a = $context["path"]) && is_string($__internal_b59a59cac1bf70ddd1542677433147f4f61db8e89489a6f8c59efe8218b6e25e = "http://") && ('' === $__internal_b59a59cac1bf70ddd1542677433147f4f61db8e89489a6f8c59efe8218b6e25e || 0 === strpos($__internal_40d52b49907a491f9be3445f5deda5df457e79d4101343c70e9f2bd6d8c0135a, $__internal_b59a59cac1bf70ddd1542677433147f4f61db8e89489a6f8c59efe8218b6e25e)))) {
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
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/css_loader.html.twig");
    }
}
