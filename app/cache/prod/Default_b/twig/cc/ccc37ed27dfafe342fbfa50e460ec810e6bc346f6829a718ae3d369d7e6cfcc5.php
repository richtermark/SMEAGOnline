<?php

/* course/tabs/summary.html.twig */
class __TwigTemplate_7ed1bf4ab5a622695fc871a2cbae5f4507c5942804c9ccffc3b87179c05b1eff extends Twig_Template
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
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array())));
        // line 2
        echo "
";
        // line 3
        if (( !((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter(($context["isMarketingPage"] ?? null), null)) : (null)) && ((($this->getAttribute(($context["course"] ?? null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "courseNum", array()), 1)) : (1)) > 1))) {
            // line 4
            echo "  <div class=\"es-piece\">
    <div class=\"piece-body\">
      想查看更多教学计划？
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">返回课程宣传页</a>
    </div>
  </div>
";
        }
        // line 11
        echo "

<div class=\"es-piece\">
  <div class=\"piece-header\">课程介绍</div>
  <div class=\"piece-body p-lg clearfix\">
    ";
        // line 16
        echo (($this->getAttribute(($context["course"] ?? null), "summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "summary", array()), $this->getAttribute(($context["courseSet"] ?? null), "summary", array()))) : ($this->getAttribute(($context["courseSet"] ?? null), "summary", array())));
        echo "
  </div>
</div>

<div class=\"es-piece ";
        // line 20
        if (twig_test_empty((($this->getAttribute(($context["course"] ?? null), "goals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "goals", array()), $this->getAttribute(($context["courseSet"] ?? null), "goals", array()))) : ($this->getAttribute(($context["courseSet"] ?? null), "goals", array()))))) {
            echo " hidden ";
        }
        echo "\">
  <div class=\"piece-header\">课程目标</div>
  <div class=\"piece-body\">
    <ul class=\"piece-body-list\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["course"] ?? null), "goals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "goals", array()), $this->getAttribute(($context["courseSet"] ?? null), "goals", array()))) : ($this->getAttribute(($context["courseSet"] ?? null), "goals", array()))));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 25
            echo "        <li><i class=\"es-icon es-icon-dot mrm\"></i>
          ";
            // line 26
            echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
            echo "
        </li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "        <span class=\"empty\">为设置目标</span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
  </div>
</div>

<div class=\"es-piece ";
        // line 35
        if (twig_test_empty((($this->getAttribute(($context["course"] ?? null), "audiences", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "audiences", array()), $this->getAttribute(($context["courseSet"] ?? null), "audiences", array()))) : ($this->getAttribute(($context["courseSet"] ?? null), "audiences", array()))))) {
            echo " hidden ";
        }
        echo "\">
  <div class=\"piece-header\">适合人群</div>
  <div class=\"piece-body\">
    <ul class=\"piece-body-list\">
      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["course"] ?? null), "audiences", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "audiences", array()), $this->getAttribute(($context["courseSet"] ?? null), "audiences", array()))) : ($this->getAttribute(($context["courseSet"] ?? null), "audiences", array()))));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
            // line 40
            echo "        <li><i class=\"es-icon es-icon-dot mrm\"></i>
          ";
            // line 41
            echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
            echo "
        </li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "        <span class=\"empty\">为设置目标</span>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </ul>
  </div>
</div>

</section>


";
        // line 53
        if ((((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter(($context["isMarketingPage"] ?? null), null)) : (null)) && ($this->getAttribute(($context["course"] ?? null), "taskNum", array()) > 0))) {
            // line 54
            echo "
  <div class=\"panel panel-default hidden-xs\">
    <div class=\"panel-heading \">
      <h3 class=\"panel-title\">目录</h3>
    </div>
    <div class=\"panel-body\">
    ";
            // line 60
            $this->loadTemplate("course/tabs/tasks.html.twig", "course/tabs/summary.html.twig", 60)->display(array_merge($context, array("limitCount" => 2)));
            // line 61
            echo "    ";
            if (($this->getAttribute(($context["course"] ?? null), "taskNum", array()) > 6)) {
                // line 62
                echo "    <div class=\"text-center pt10 border-top-gray-lighter\" >
       <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "tasks")), "html", null, true);
                echo " \" class=\"link-dark\">查看全部  &gt;</a>  
    </div>
    ";
            }
            // line 66
            echo "    </div>
  </div>
";
        }
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/tabs/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  155 => 66,  149 => 63,  146 => 62,  143 => 61,  141 => 60,  133 => 54,  131 => 53,  122 => 46,  115 => 44,  107 => 41,  104 => 40,  99 => 39,  90 => 35,  84 => 31,  77 => 29,  69 => 26,  66 => 25,  61 => 24,  52 => 20,  45 => 16,  38 => 11,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/summary.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/tabs/summary.html.twig");
    }
}
