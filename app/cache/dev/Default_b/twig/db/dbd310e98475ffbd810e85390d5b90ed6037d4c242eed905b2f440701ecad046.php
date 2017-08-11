<?php

/* default/footer.html.twig */
class __TwigTemplate_f8728cbded8be7862fcfdc6aedb41ffc8698d277bcee33e6085667a73f22f104 extends Twig_Template
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
        $__internal_c258239ea090a01f71f6769d3bf081b0e76eadfa1e0d13ee5733fe5c61098401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c258239ea090a01f71f6769d3bf081b0e76eadfa1e0d13ee5733fe5c61098401->enter($__internal_c258239ea090a01f71f6769d3bf081b0e76eadfa1e0d13ee5733fe5c61098401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<div class=\"site-footer container clearfix\">

  ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:footNavigation"));
        echo "

  <div class=\"text-gray\" data-role=\"default-foot-bar\">
    ";
        // line 6
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "
    <div class=\"pull-right\">";
        // line 8
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程内容版权均归"), "html", null, true);
            echo "<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
        }
        echo "&nbsp;";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            echo "<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "</a>";
        }
        echo "</div>

    <div class=\"pull-right mhs\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
        echo "</a></div>
  </div>
</div>
";
        
        $__internal_c258239ea090a01f71f6769d3bf081b0e76eadfa1e0d13ee5733fe5c61098401->leave($__internal_c258239ea090a01f71f6769d3bf081b0e76eadfa1e0d13ee5733fe5c61098401_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  39 => 8,  34 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"site-footer container clearfix\">

  {{ render(controller('AppBundle:Default:footNavigation')) }}

  <div class=\"text-gray\" data-role=\"default-foot-bar\">
    {% include \"powered-by.html.twig\" %}
    {{ setting('site.analytics')|raw }}
    <div class=\"pull-right\">{% if setting('site.copyright') %}{{'课程内容版权均归'|trans}}<a href=\"/\">{{ setting('site.copyright') }}</a>{{'所有'|trans}}{% endif %}&nbsp;{% if setting('site.icp') %}<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">{{ setting('site.icp') }}</a>{% endif %}</div>

    <div class=\"pull-right mhs\"><a href=\"{{ path('course_set_archive') }}\">{{'课程存档'|trans}}</a></div>
  </div>
</div>
", "default/footer.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/footer.html.twig");
    }
}
