<?php

/* status/status-block.html.twig */
class __TwigTemplate_918cdbc9068783b924fb4f06bc295547e03249a0f5e5efcd8ee717dcf8e22250 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "status/status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员动态"), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if (($context["learns"] ?? null)) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["learns"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 11
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                    // line 12
                    echo "          <div class=\"media media-number-o color-gray text-overflow\">
            ";
                    // line 13
                    echo $context["web_macro"]->getuser_link($this->getAttribute($context["learn"], "user", array()));
                    echo "
            ";
                    // line 14
                    echo $this->getAttribute($context["learn"], "message", array());
                    echo "
          </div>
         ";
                }
                // line 17
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
    ";
        } else {
            // line 20
            echo "     <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有动态"), "html", null, true);
            echo "</div>
    ";
        }
        // line 22
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "status/status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  87 => 20,  83 => 18,  69 => 17,  63 => 14,  59 => 13,  56 => 12,  53 => 11,  35 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "status/status-block.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/status/status-block.html.twig");
    }
}
