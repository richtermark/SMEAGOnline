<?php

/* es-bar/left-list.html.twig */
class __TwigTemplate_32f5063453f5c11bc3405d9bc9c30f0f2ea4941066489d714615c4dd7ec9ae8b extends Twig_Template
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
        $__internal_d3a5cd65b65cf492c44af9bfefd9ffd27d3c179b8b87f655aa7e6969d03a4fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a5cd65b65cf492c44af9bfefd9ffd27d3c179b8b87f655aa7e6969d03a4fbb->enter($__internal_d3a5cd65b65cf492c44af9bfefd9ffd27d3c179b8b87f655aa7e6969d03a4fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list.html.twig"));

        // line 1
        echo "<div class=\"es-bar-menu\">
  <ul class=\"bar-menu-top\">
    ";
        // line 4
        echo "    ";
        $this->loadTemplate("es-bar/left-list/study-center.html.twig", "es-bar/left-list.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        $this->loadTemplate("es-bar/left-list/my-learn-result.html.twig", "es-bar/left-list.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("es-bar/left-list/my-learn-place.html.twig", "es-bar/left-list.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("es-bar/left-list/my-notification.html.twig", "es-bar/left-list.html.twig", 8)->display($context);
        // line 9
        echo "  </ul>
  <ul class=\"bar-menu-sns\">
    ";
        // line 11
        if (($context["consultEnabled"] ?? $this->getContext($context, "consultEnabled"))) {
            // line 12
            echo "      ";
            $this->loadTemplate("es-bar/left-list/qq-consult.html.twig", "es-bar/left-list.html.twig", 12)->display($context);
            // line 13
            echo "      ";
            $this->loadTemplate("es-bar/left-list/phone-consult.html.twig", "es-bar/left-list.html.twig", 13)->display($context);
            // line 14
            echo "      ";
            $this->loadTemplate("es-bar/left-list/wechat-consult.html.twig", "es-bar/left-list.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", 0)) {
            // line 18
            echo "      <li data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机端"), "html", null, true);
            echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-phone1\"></i></a>
      </li>
    ";
        }
        // line 22
        echo "    <li class=\"go-top\" style=\"margin:-10px auto 0 auto;\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回到顶端"), "html", null, true);
        echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
      <a href=\"javascript:;\">
        <i class=\"es-icon es-icon-keyboardarrowup\" style=\"margin-bottom:-8px\"></i>
        <span class=\"text-sm\">TOP</span>
      </a>
    </li>
  </ul>
</div>";
        
        $__internal_d3a5cd65b65cf492c44af9bfefd9ffd27d3c179b8b87f655aa7e6969d03a4fbb->leave($__internal_d3a5cd65b65cf492c44af9bfefd9ffd27d3c179b8b87f655aa7e6969d03a4fbb_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  68 => 19,  63 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  44 => 11,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"es-bar-menu\">
  <ul class=\"bar-menu-top\">
    {#任务中心#}
    {% include 'es-bar/left-list/study-center.html.twig' %}
    {#我的考试/作业#}
    {% include 'es-bar/left-list/my-learn-result.html.twig' %}
    {% include 'es-bar/left-list/my-learn-place.html.twig' %}
    {% include 'es-bar/left-list/my-notification.html.twig' %}
  </ul>
  <ul class=\"bar-menu-sns\">
    {% if consultEnabled %}
      {% include 'es-bar/left-list/qq-consult.html.twig' %}
      {% include 'es-bar/left-list/phone-consult.html.twig' %}
      {% include 'es-bar/left-list/wechat-consult.html.twig' %}
    {% endif %}

    {% if setting('mobile.enabled', 0) %}
      <li data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'手机端'|trans}}\" data-trigger=\"hover\" data-container=\".es-bar\">
        <a href=\"{{ path('mobile') }}\" target=\"_blank\"><i class=\"es-icon es-icon-phone1\"></i></a>
      </li>
    {% endif %}
    <li class=\"go-top\" style=\"margin:-10px auto 0 auto;\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'回到顶端'|trans}}\" data-trigger=\"hover\" data-container=\".es-bar\">
      <a href=\"javascript:;\">
        <i class=\"es-icon es-icon-keyboardarrowup\" style=\"margin-bottom:-8px\"></i>
        <span class=\"text-sm\">TOP</span>
      </a>
    </li>
  </ul>
</div>", "es-bar/left-list.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list.html.twig");
    }
}
