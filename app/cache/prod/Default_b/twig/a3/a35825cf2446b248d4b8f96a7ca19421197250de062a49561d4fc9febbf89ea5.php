<?php

/* course/header/header-for-member-responsive.html.twig */
class __TwigTemplate_fd04fd7dd4999e0b69e2d06af61e236fdff1c451b0699c1380558456b79199d1 extends Twig_Template
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
        echo "<div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
  <ul class=\"clearfix\">
    <!--营销页显示-->
    ";
        // line 4
        if (($context["marketingPage"] ?? null)) {
            // line 5
            echo "    <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
      ";
            // line 6
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
      <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"已收藏\"
        data-trigger=\"hover\">
        <i class=\"es-icon es-icon-bookmark color-primary\"></i>
        <br/>
        已收藏
      </a>
    </li>
    <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
    ";
            // line 15
            if (($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
    <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"收藏\"
        data-trigger=\"hover\">
        <i class=\"es-icon es-icon-bookmarkoutline\"></i>
        <br/>
        收藏
    </a>
    </li>
    ";
        }
        // line 24
        echo "
    <li class=\"es-share top  ";
        // line 25
        if ( !($context["marketingPage"] ?? null)) {
            echo " learn-es-share ";
        }
        echo "\">
      <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"课程分享\">
        <i class=\"es-icon es-icon-share\"></i>
        <br/>
        分享
      </a>
      ";
        // line 31
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-member-responsive.html.twig", 31)->display(array_merge($context, array("type" => "courseSet")));
        // line 32
        echo "    </li>
  </ul>
</div>
<div class=\"text-right buy-btn-group visible-xs visible-sm\">
  <span class=\"mr20\">完成任务：";
        // line 36
        echo twig_escape_filter($this->env, ($context["taskResultCount"] ?? null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, ($context["taskCount"] ?? null), "html", null, true);
        echo "</span>
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 38
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 39
                echo "      <a class=\"btn btn-primary btn-lg \" 
        href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
                echo "\">
        ";
                // line 41
                if ((($context["taskResultCount"] ?? null) < 1)) {
                    // line 42
                    echo "          开始学习
        ";
                } else {
                    // line 44
                    echo "          继续学习
        ";
                }
                // line 46
                echo "      </a>
    ";
            }
            // line 48
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "course/header/header-for-member-responsive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  131 => 48,  127 => 46,  123 => 44,  119 => 42,  117 => 41,  113 => 40,  110 => 39,  107 => 38,  90 => 37,  84 => 36,  78 => 32,  76 => 31,  65 => 25,  62 => 24,  48 => 15,  44 => 14,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-member-responsive.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/header-for-member-responsive.html.twig");
    }
}
