<?php

/* es-bar/left-list.html.twig */
class __TwigTemplate_0b5d7b9cc053eaeea2e05cb9ec5f802ba33425c87ded6d24f64950f2218e67a6 extends Twig_Template
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
        if (($context["consultEnabled"] ?? null)) {
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
        return array (  71 => 22,  65 => 19,  60 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  37 => 9,  34 => 8,  31 => 7,  28 => 6,  26 => 5,  23 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list.html.twig");
    }
}
