<?php

/* course/widgets/price.html.twig */
class __TwigTemplate_cf66a99d622fbf6793fa9e9fa51be35a3933a6ac603cf47796040959bb62bc31 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter(($context["shows"] ?? null), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

  ";
        // line 14
        if ($this->getAttribute(($context["courseSet"] ?? null), "discountId", array())) {
            // line 15
            echo "
    ";
            // line 16
            if ((twig_in_filter("full", ($context["shows"] ?? null)) || twig_in_filter("price", ($context["shows"] ?? null)))) {
                // line 17
                echo "      ";
                if ((($context["priceType"] ?? null) == "coin")) {
                    // line 18
                    echo "        <span >";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 20
                    echo "        <span >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["course"] ?? null), "price", array()))), "html", null, true);
                    echo "</span>
      ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if ((twig_in_filter("full", ($context["shows"] ?? null)) || twig_in_filter("originPrice", ($context["shows"] ?? null)))) {
                // line 25
                echo "      ";
                if ((($context["priceType"] ?? null) == "coin")) {
                    // line 26
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 28
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%originPrice%元", array("%originPrice%" => $this->getAttribute(($context["course"] ?? null), "originPrice", array()))), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if ((twig_in_filter("full", ($context["shows"] ?? null)) || twig_in_filter("discount", ($context["shows"] ?? null)))) {
                // line 33
                echo "
      <span class=\"discount\">
        ";
                // line 35
                if (((($this->getAttribute(($context["courseSet"] ?? null), "discount", array()) == 0) || ((($context["priceType"] ?? null) == "coin") && ($this->getAttribute(($context["course"] ?? null), "originPrice", array()) == 0))) || ((($context["priceType"] ?? null) == "default") && ($this->getAttribute(($context["course"] ?? null), "originPrice", array()) == 0)))) {
                    // line 36
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 38
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%discount%折", array("%discount%" => twig_round($this->getAttribute(($context["courseSet"] ?? null), "discount", array()), 2, "common"))), "html", null, true);
                    echo "
        ";
                }
                // line 40
                echo "      </span>

    ";
            }
            // line 43
            echo "
  ";
        } else {
            // line 45
            echo "
    ";
            // line 46
            if ((twig_in_filter("full", ($context["shows"] ?? null)) || twig_in_filter("price", ($context["shows"] ?? null)))) {
                // line 47
                echo "      <span class=\"price\">
        ";
                // line 48
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                    // line 49
                    echo "          ";
                    if (($this->getAttribute(($context["course"] ?? null), "price", array()) > 0)) {
                        echo " 
            ";
                        // line 50
                        echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                        echo "
            ";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                        echo " 
          ";
                    } else {
                        // line 52
                        echo " 
            <span class=\"color-success\">";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> 
          ";
                    }
                    // line 55
                    echo "        ";
                } else {
                    // line 56
                    echo "          ";
                    if (($this->getAttribute(($context["course"] ?? null), "price", array()) > 0)) {
                        // line 57
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["course"] ?? null), "price", array()))), "html", null, true);
                        echo "
          ";
                    } else {
                        // line 58
                        echo " 
            <span class=\"color-success\">";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> 
          ";
                    }
                    // line 60
                    echo " 
        ";
                }
                // line 62
                echo "      </span>
    ";
            }
            // line 64
            echo "
    ";
            // line 65
            if (twig_in_filter("originPrice", ($context["shows"] ?? null))) {
                // line 66
                echo "      ";
                if ((($context["priceType"] ?? null) == "coin")) {
                    // line 67
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 69
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 71
                echo "    ";
            }
            // line 72
            echo "
  ";
        }
        // line 74
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "course/widgets/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 74,  199 => 72,  196 => 71,  190 => 69,  183 => 67,  180 => 66,  178 => 65,  175 => 64,  171 => 62,  167 => 60,  162 => 59,  159 => 58,  153 => 57,  150 => 56,  147 => 55,  142 => 53,  139 => 52,  134 => 51,  130 => 50,  125 => 49,  123 => 48,  120 => 47,  118 => 46,  115 => 45,  111 => 43,  106 => 40,  100 => 38,  94 => 36,  92 => 35,  88 => 33,  86 => 32,  83 => 31,  80 => 30,  74 => 28,  66 => 26,  63 => 25,  61 => 24,  58 => 23,  55 => 22,  49 => 20,  41 => 18,  38 => 17,  36 => 16,  33 => 15,  31 => 14,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/price.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/widgets/price.html.twig");
    }
}
