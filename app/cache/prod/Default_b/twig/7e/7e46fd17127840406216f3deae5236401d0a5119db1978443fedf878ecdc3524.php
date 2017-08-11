<?php

/* js_loader_async.html.twig */
class __TwigTemplate_52c9a21cf115a2d655288ebb59c11e9019991bf01fd3a0c6e1ae49ebc735bd01 extends Twig_Template
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
        echo "<script id=\"script-loader-async\" type=\"text/javascript\">
  \"use strict\";
  (function() {
    var paths = [
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 6
            echo "        ";
            if (twig_in_filter("//", $context["path"])) {
                // line 7
                echo "          ";
                if (twig_in_filter("js-sdk", $context["path"])) {
                    // line 8
                    echo "            \"";
                    echo twig_escape_filter($this->env, (($context["path"] . "?") . twig_round(($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) / 100))), "html", null, true);
                    echo "\",
          ";
                } else {
                    // line 10
                    echo "            \"";
                    echo twig_escape_filter($this->env, (($context["path"] . "?") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("")), "html", null, true);
                    echo "\",
          ";
                }
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "          \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\",
        ";
            }
            // line 15
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ];

    script(paths, function() {
      var node = document.getElementById('script-loader-async');
      if(node) {
        node.parentNode.removeChild(node);
      }
    }, document.getElementById('modal'));
  })();
</script>";
    }

    public function getTemplateName()
    {
        return "js_loader_async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  56 => 15,  50 => 13,  47 => 12,  41 => 10,  35 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "js_loader_async.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/js_loader_async.html.twig");
    }
}
