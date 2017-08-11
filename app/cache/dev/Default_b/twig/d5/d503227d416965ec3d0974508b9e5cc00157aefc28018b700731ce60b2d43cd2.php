<?php

/* announcement/announcement.html.twig */
class __TwigTemplate_d0a58d569835c384d67a8a679f513bbc89d18ace9476a6956894f2a74ed9811f extends Twig_Template
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
        $__internal_a4631df7e7d1ad67b8a29846ad56511f3520a8ccfa5f714eaaa4ba77881a26cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4631df7e7d1ad67b8a29846ad56511f3520a8ccfa5f714eaaa4ba77881a26cf->enter($__internal_a4631df7e7d1ad67b8a29846ad56511f3520a8ccfa5f714eaaa4ba77881a26cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "announcement/announcement.html.twig"));

        // line 1
        $context["announcements"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Announcement", array("count" => 3));
        // line 2
        if ((($context["announcements"] ?? $this->getContext($context, "announcements")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_announcements_alert"), "method"))) {
            // line 3
            echo "<div class=\"alert alert-warning alert-notice announcements-alert hidden-xs\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? $this->getContext($context, "announcements")));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        ";
                if ($this->getAttribute($context["announcement"], "url", array())) {
                    // line 8
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
            ";
                    // line 11
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
          </a>
        </div>
        ";
                } else {
                    // line 15
                    echo "          <div class=\"swiper-slide\">
            <i class=\"es-icon es-icon-infooutline mrm\"></i>
            <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_global_show", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                    echo "\" >
              ";
                    // line 18
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
            </a>
          </div>
        ";
                }
                // line 22
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
";
        }
        
        $__internal_a4631df7e7d1ad67b8a29846ad56511f3520a8ccfa5f714eaaa4ba77881a26cf->leave($__internal_a4631df7e7d1ad67b8a29846ad56511f3520a8ccfa5f714eaaa4ba77881a26cf_prof);

    }

    public function getTemplateName()
    {
        return "announcement/announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  68 => 22,  61 => 18,  57 => 17,  53 => 15,  46 => 11,  42 => 10,  38 => 8,  35 => 7,  31 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set announcements = data('Announcement',{ count:3 }) %}
{% if announcements and not app.request.cookies.get('close_announcements_alert') %}
<div class=\"alert alert-warning alert-notice announcements-alert hidden-xs\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      {% for announcement in announcements %}
        {% if announcement.url %}
        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"{{announcement.url}}\" target=\"_blank\">
            {{announcement.content|sub_text(50)}}
          </a>
        </div>
        {% else %}
          <div class=\"swiper-slide\">
            <i class=\"es-icon es-icon-infooutline mrm\"></i>
            <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('announcement_global_show', {id:announcement.id}) }}\" >
              {{announcement.content|sub_text(50)}}
            </a>
          </div>
        {% endif %}
      {% endfor %}

    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
{% endif %}
", "announcement/announcement.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/announcement/announcement.html.twig");
    }
}
