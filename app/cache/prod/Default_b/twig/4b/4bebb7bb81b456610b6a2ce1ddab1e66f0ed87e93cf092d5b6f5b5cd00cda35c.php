<?php

/* es-bar/list-content/consult.html.twig */
class __TwigTemplate_85e14fedf2b63e227fcd7d7fb1408a4285cbc9f3e9459fe3bb4400b70b79620b extends Twig_Template
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
        if (($context["consultEnabled"] ?? null)) {
            // line 2
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\">
    ";
            // line 4
            if (($context["consultQqs"] ?? null)) {
                // line 5
                echo "      <div class=\"row mtm\">
        ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["consultQqs"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                    // line 7
                    echo "            <div class=\"mbm text-overflow ";
                    if (($this->getAttribute($context["loop"], "last", array()) && (($this->getAttribute($context["loop"], "length", array()) % 2) == 1))) {
                        echo "col-xs-12";
                    } else {
                        echo "col-xs-6";
                    }
                    echo "\">
            ";
                    // line 8
                    if ((($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                        // line 9
                        echo "              <a class=\"link-dark\" href=\"";
                        echo $this->getAttribute($context["qq"], "url", array());
                        echo "\" target=\"_blank\">
            ";
                    } else {
                        // line 11
                        echo "              <a class=\"link-dark\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                        echo "&site=qq&menu=yes\" target=\"_blank\">
            ";
                    }
                    // line 13
                    echo "                <img class=\"mrs\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击这里给我发消息"), "html", null, true);
                    echo "\" alt=\"\">
                <span alt=\"\" title=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "</span>
              </a>
            </div>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "      </div>
    ";
            }
            // line 20
            echo "      <hr>
    ";
            // line 21
            if (($context["consultQqGroups"] ?? null)) {
                // line 22
                echo "      <div class=\"row\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["consultQqGroups"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                    // line 24
                    echo "          <div class=\"mbm ";
                    if (($this->getAttribute($context["loop"], "last", array()) && (($this->getAttribute($context["loop"], "length", array()) % 2) == 1))) {
                        echo "col-xs-12";
                    } else {
                        echo "col-xs-6";
                    }
                    echo "\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq_group.png"), "html", null, true);
                    echo "\" alt=\"\">
              <span alt=\"\" title=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo "</span>
            </p>

            ";
                    // line 30
                    if ( !(($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 31
                        echo "              <p class=\"text-overflow\">
                <span alt=\"\" title=\"";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                        echo "</span>
              </p>
            ";
                    }
                    // line 35
                    echo "
            ";
                    // line 36
                    if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 37
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 38
                        echo $this->getAttribute($context["qqgroup"], "url", array());
                        echo "
              </p>
            ";
                    }
                    // line 41
                    echo "
          </div>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "    </div>

    <div id=\"bar-phone-content\">
      ";
            // line 49
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "worktime", array()))) {
                // line 50
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作时间：%worktime%", array("%worktime%" => $this->getAttribute(($context["consult"] ?? null), "worktime", array()))), "html", null, true);
                echo "</p>
      ";
            }
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["consultPhones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 53
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "      ";
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "email", array()))) {
                // line 56
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱："), "html", null, true);
                echo " <a class=\"link-dark\" href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 58
            echo "    </div>

    ";
            // line 60
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "webchatURI", array()))) {
                // line 61
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["consult"] ?? null), "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 65,  246 => 62,  243 => 61,  241 => 60,  237 => 58,  227 => 56,  224 => 55,  213 => 53,  208 => 52,  202 => 50,  200 => 49,  195 => 46,  191 => 44,  175 => 41,  169 => 38,  166 => 37,  164 => 36,  161 => 35,  153 => 32,  150 => 31,  148 => 30,  140 => 27,  136 => 26,  126 => 24,  109 => 23,  106 => 22,  104 => 21,  101 => 20,  97 => 18,  77 => 14,  70 => 13,  64 => 11,  58 => 9,  56 => 8,  47 => 7,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/list-content/consult.html.twig");
    }
}
