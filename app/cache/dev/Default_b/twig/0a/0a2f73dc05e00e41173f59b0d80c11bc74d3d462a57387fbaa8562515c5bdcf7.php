<?php

/* es-bar/left-list/my-learn-result.html.twig */
class __TwigTemplate_4d28b5928a0d92f98a47339bb2314e8b952049908522cfbddb28326996fcc3fb extends Twig_Template
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
        $__internal_eaefe8ea2e0ffa193883f088825430762ec6dc73689d0ae90e11d313194332d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaefe8ea2e0ffa193883f088825430762ec6dc73689d0ae90e11d313194332d0->enter($__internal_eaefe8ea2e0ffa193883f088825430762ec6dc73689d0ae90e11d313194332d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/my-learn-result.html.twig"));

        // line 1
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
  <a href=\"javascript:;\" data-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\">
    <i class=\"es-icon es-icon-edit\"></i>
  </a>
</li>";
        
        $__internal_eaefe8ea2e0ffa193883f088825430762ec6dc73689d0ae90e11d313194332d0->leave($__internal_eaefe8ea2e0ffa193883f088825430762ec6dc73689d0ae90e11d313194332d0_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/my-learn-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{ '我的考试/作业'|trans }}\" data-trigger=\"hover\" data-container=\".es-bar\">
  <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'finished'}) }}\">
    <i class=\"es-icon es-icon-edit\"></i>
  </a>
</li>", "es-bar/left-list/my-learn-result.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/es-bar/left-list/my-learn-result.html.twig");
    }
}
