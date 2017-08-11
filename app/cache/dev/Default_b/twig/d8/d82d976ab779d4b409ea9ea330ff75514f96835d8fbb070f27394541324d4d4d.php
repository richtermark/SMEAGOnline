<?php

/* es-bar/list-content/consult.html.twig */
class __TwigTemplate_93dc5d1cafab0a32aea5141e489530ea0daf7cb3f5081fa01780f63972eea523 extends Twig_Template
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
        $__internal_cb26ceb30b3d24e0afda562a9abbb06947a5f8dfd11bb53d4e094a9c0a7060a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb26ceb30b3d24e0afda562a9abbb06947a5f8dfd11bb53d4e094a9c0a7060a7->enter($__internal_cb26ceb30b3d24e0afda562a9abbb06947a5f8dfd11bb53d4e094a9c0a7060a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/list-content/consult.html.twig"));

        // line 1
        if (($context["consultEnabled"] ?? $this->getContext($context, "consultEnabled"))) {
            // line 2
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\">
    ";
            // line 4
            if (($context["consultQqs"] ?? $this->getContext($context, "consultQqs"))) {
                // line 5
                echo "      <div class=\"row mtm\">
        ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["consultQqs"] ?? $this->getContext($context, "consultQqs")));
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
            if (($context["consultQqGroups"] ?? $this->getContext($context, "consultQqGroups"))) {
                // line 22
                echo "      <div class=\"row\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["consultQqGroups"] ?? $this->getContext($context, "consultQqGroups")));
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
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "worktime", array()))) {
                // line 50
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作时间：%worktime%", array("%worktime%" => $this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "worktime", array()))), "html", null, true);
                echo "</p>
      ";
            }
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["consultPhones"] ?? $this->getContext($context, "consultPhones")));
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
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "email", array()))) {
                // line 56
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱："), "html", null, true);
                echo " <a class=\"link-dark\" href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 58
            echo "    </div>

    ";
            // line 60
            if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "webchatURI", array()))) {
                // line 61
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
        
        $__internal_cb26ceb30b3d24e0afda562a9abbb06947a5f8dfd11bb53d4e094a9c0a7060a7->leave($__internal_cb26ceb30b3d24e0afda562a9abbb06947a5f8dfd11bb53d4e094a9c0a7060a7_prof);

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
        return array (  255 => 65,  249 => 62,  246 => 61,  244 => 60,  240 => 58,  230 => 56,  227 => 55,  216 => 53,  211 => 52,  205 => 50,  203 => 49,  198 => 46,  194 => 44,  178 => 41,  172 => 38,  169 => 37,  167 => 36,  164 => 35,  156 => 32,  153 => 31,  151 => 30,  143 => 27,  139 => 26,  129 => 24,  112 => 23,  109 => 22,  107 => 21,  104 => 20,  100 => 18,  80 => 14,  73 => 13,  67 => 11,  61 => 9,  59 => 8,  50 => 7,  33 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if consultEnabled %}
  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\">
    {% if consultQqs %}
      <div class=\"row mtm\">
        {% for qq in consultQqs %}
            <div class=\"mbm text-overflow {% if loop.last and (loop.length % 2 == 1) %}col-xs-12{% else %}col-xs-6{% endif %}\">
            {% if qq.url|default(false) %}
              <a class=\"link-dark\" href=\"{{ qq.url|raw }}\" target=\"_blank\">
            {% else %}
              <a class=\"link-dark\" href=\"http://wpa.qq.com/msgrd?v=3&uin={{ qq.number }}&site=qq&menu=yes\" target=\"_blank\">
            {% endif %}
                <img class=\"mrs\" src=\"{{asset(\"assets/v2/img/bar_qq.png\")}}\" alt=\"\" title=\"{{'点击这里给我发消息'|trans}}\" alt=\"\">
                <span alt=\"\" title=\"{{qq.name}}\">{{ qq.name }}</span>
              </a>
            </div>
        {% endfor %}
      </div>
    {% endif %}
      <hr>
    {% if consultQqGroups %}
      <div class=\"row\">
        {% for qqgroup in consultQqGroups %}
          <div class=\"mbm {% if loop.last and (loop.length % 2 == 1) %}col-xs-12{% else %}col-xs-6{% endif %}\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"{{asset(\"assets/v2/img/bar_qq_group.png\")}}\" alt=\"\">
              <span alt=\"\" title=\"{{ qqgroup.name }}\">{{ qqgroup.name }}</span>
            </p>

            {% if not qqgroup.url|default(false) %}
              <p class=\"text-overflow\">
                <span alt=\"\" title=\"{{ qqgroup.number }}\">{{ qqgroup.number }}</span>
              </p>
            {% endif %}

            {% if qqgroup.url|default(false) %}
              <p class=\"text-overflow\">
                {{ qqgroup.url|raw }}
              </p>
            {% endif %}

          </div>
        {% endfor %}
      </div>
    {% endif %}
    </div>

    <div id=\"bar-phone-content\">
      {% if consult.worktime is not empty %}
        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>{{'工作时间：%worktime%'|trans({'%worktime%': consult.worktime}) }}</p>
      {% endif %}
      {% for phone in consultPhones %}
        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>{{ phone.name }}:{{ phone.number }}</p>
      {% endfor %}
      {% if consult.email is not empty %}
        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>{{'邮箱：'|trans}} <a class=\"link-dark\" href=\"mailto:{{consult.email}}\">{{consult.email}}</a></p>
      {% endif %}
    </div>

    {% if consult.webchatURI is not empty %}
      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"{{ asset(consult.webchatURI) }}\" alt=\"\">
      </div>
    {% endif %}
  </div>
{% endif %}
", "es-bar/list-content/consult.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/list-content/consult.html.twig");
    }
}
