<?php

/* course/announcement/block.html.twig */
class __TwigTemplate_5ee95f245ce18fa8b3b61ad4146df171003c311a379f2ec154254c9b3d50ea2e extends Twig_Template
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
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey(("course-announcements-block/course/" . ($context["courseId"] ?? null)), 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 2
                echo "  ";
                $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/announcement/announcement-swiper-slide/index.js"));
                // line 3
                echo "  ";
                $context["announcements"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseAnnouncements", array("courseId" => ($context["courseId"] ?? null), "count" => 10));
                // line 4
                echo "  ";
                if (($context["announcements"] ?? null)) {
                    // line 5
                    echo "    <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
        ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                        // line 9
                        echo "          <div class=\"swiper-slide\">
            <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                        // line 10
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_show", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => "course", "targetId" => $this->getAttribute($context["announcement"], "targetId", array()))), "html", null, true);
                        echo "\" >
            <i class=\"es-icon es-icon-infooutline\"></i>
            ";
                        // line 12
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50), "<span class=\"text-warning\">(请点击查看)</span>"));
                        echo "</a>
          </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "        </div>
      </div>
    </div>
  ";
                }
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 20
        echo "





";
    }

    public function getTemplateName()
    {
        return "course/announcement/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  60 => 15,  51 => 12,  46 => 10,  43 => 9,  39 => 8,  34 => 5,  31 => 4,  28 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/announcement/block.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/announcement/block.html.twig");
    }
}
