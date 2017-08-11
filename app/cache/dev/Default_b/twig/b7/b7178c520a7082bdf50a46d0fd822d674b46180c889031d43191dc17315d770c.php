<?php

/* course/widgets/price.html.twig */
class __TwigTemplate_92e855706f8934e6c4c16a25dca0a71639e7aefc329608405756f4b7cfabc333 extends Twig_Template
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
        $__internal_4dc50032f7a73059a8c40de2e927e30394e6e8884a4856bc1c718c10f2b99dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc50032f7a73059a8c40de2e927e30394e6e8884a4856bc1c718c10f2b99dc6->enter($__internal_4dc50032f7a73059a8c40de2e927e30394e6e8884a4856bc1c718c10f2b99dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/price.html.twig"));

        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter(($context["shows"] ?? $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

  ";
        // line 14
        if ($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discountId", array())) {
            // line 15
            echo "
    ";
            // line 16
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("price", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 17
                echo "      ";
                if ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "coin")) {
                    // line 18
                    echo "        <span >";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 20
                    echo "        <span >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()))), "html", null, true);
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
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("originPrice", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 25
                echo "      ";
                if ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "coin")) {
                    // line 26
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 28
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%originPrice%元", array("%originPrice%" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()))), "html", null, true);
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
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("discount", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 33
                echo "
      <span class=\"discount\">
        ";
                // line 35
                if (((($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discount", array()) == 0) || ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "coin") && ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()) == 0))) || ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "default") && ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()) == 0)))) {
                    // line 36
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 38
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%discount%折", array("%discount%" => twig_round($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discount", array()), 2, "common"))), "html", null, true);
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
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("price", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 47
                echo "      <span class=\"price\">
        ";
                // line 48
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                    // line 49
                    echo "          ";
                    if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo " 
            ";
                        // line 50
                        echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
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
                    if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()) > 0)) {
                        // line 57
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "price", array()))), "html", null, true);
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
            if (twig_in_filter("originPrice", ($context["shows"] ?? $this->getContext($context, "shows")))) {
                // line 66
                echo "      ";
                if ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "coin")) {
                    // line 67
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 69
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
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
        
        $__internal_4dc50032f7a73059a8c40de2e927e30394e6e8884a4856bc1c718c10f2b99dc6->leave($__internal_4dc50032f7a73059a8c40de2e927e30394e6e8884a4856bc1c718c10f2b99dc6_prof);

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
        return array (  206 => 74,  202 => 72,  199 => 71,  193 => 69,  186 => 67,  183 => 66,  181 => 65,  178 => 64,  174 => 62,  170 => 60,  165 => 59,  162 => 58,  156 => 57,  153 => 56,  150 => 55,  145 => 53,  142 => 52,  137 => 51,  133 => 50,  128 => 49,  126 => 48,  123 => 47,  121 => 46,  118 => 45,  114 => 43,  109 => 40,  103 => 38,  97 => 36,  95 => 35,  91 => 33,  89 => 32,  86 => 31,  83 => 30,  77 => 28,  69 => 26,  66 => 25,  64 => 24,  61 => 23,  58 => 22,  52 => 20,  44 => 18,  41 => 17,  39 => 16,  36 => 15,  34 => 14,  29 => 11,  27 => 10,  25 => 9,  22 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
  mode的取值有：
    full：该模式下显示折扣价、原价、打折
    price: 该模式下如有打折活动则显示折扣价，没有打折活动就显示为原价
    originPrice：该模式下只显示原价
    discount：该模式下只显示折扣
#}

{% set shows = shows|default(['full']) %}
{% set priceType = (setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin') ? 'coin' : 'default'  %}

<span class=\"course-price-widget\">

  {% if courseSet.discountId %}

    {% if 'full' in shows or 'price' in shows %}
      {% if priceType == 'coin' %}
        <span >{{ course.price * setting('coin.cash_rate')}} {{setting('coin.coin_name', '虚拟币'|trans)}}</span>
      {% else %}
        <span >{{'%price%元'|trans({'%price%': course.price})}}</span>
      {% endif %}
    {% endif %}

    {% if 'full' in shows or 'originPrice' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"origin-price\"><del>{{course.originPrice * setting('coin.cash_rate')}} {{setting('coin.coin_name', '虚拟币'|trans)}}</del></span>
      {% else %}
        <span class=\"origin-price\"><del>{{'%originPrice%元'|trans({'%originPrice%': course.originPrice})}}</del></span>
      {% endif %}
    {% endif %}

    {% if 'full' in shows or 'discount' in shows %}

      <span class=\"discount\">
        {% if (courseSet.discount == 0) or (priceType == 'coin' and course.originPrice == 0) or (priceType == 'default' and course.originPrice == 0) %}
          {{'限免'|trans}}
        {% else  %}
          {{'%discount%折'|trans({'%discount%': courseSet.discount|round(2, 'common') })}}
        {% endif %}
      </span>

    {% endif %}

  {% else %}

    {% if 'full' in shows or 'price' in shows %}
      <span class=\"price\">
        {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
          {% if course.price > 0 %} 
            {{ course.price * setting('coin.cash_rate')}}
            {{setting('coin.coin_name', '虚拟币'|trans)}} 
          {% else %} 
            <span class=\"color-success\">{{'免费'|trans}}</span> 
          {% endif  %}
        {% else %}
          {% if course.price > 0 %}
            {{'%price%元'|trans({'%price%': course.price})}}
          {% else %} 
            <span class=\"color-success\">{{'免费'|trans}}</span> 
          {% endif %} 
        {% endif %}
      </span>
    {% endif %}

    {% if 'originPrice' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"origin-price\">{{course.originPrice * setting('coin.cash_rate')}}{{setting('coin.coin_name', '虚拟币'|trans)}}</span>
      {% else %}
        ¥<span class=\"origin-price\">{{course.originPrice}}</span>
      {% endif %}
    {% endif %}

  {% endif %}
</span>", "course/widgets/price.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/widgets/price.html.twig");
    }
}
