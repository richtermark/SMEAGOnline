<?php

/* course/header/free-mode-header-for-member.html.twig */
class __TwigTemplate_24021d2d437edf0851e44abd4ed1b6cbdcd5c9ac937504ed6488d06fc136ed32 extends Twig_Template
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
        echo "<section class=\"course-freelearn-section\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"course-progress\">
        <div class=\"cricle-progress\" id=\"freeprogress\" data-percent=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "\">
          <span class=\"percent\"></span>
        </div>
      </div>
    </div>
    <div class=\"col-md-7 hidden-xs hidden-sm\">
      <ul class=\"clearfix text-12 course-learn-list \">
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-iccheckcircleblack24px mrm\"></i>已完成
          </p>
          <span class=\"text-16\"><span class=\"color-primary\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["taskResultCount"] ?? null), "html", null, true);
        echo "</span> / <span
                class=\"mrl\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["taskCount"] ?? null), "html", null, true);
        echo "</span>
          任务</span>
        </li>
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-today mrm\"></i>学习有效期
          </p>
          <span class=\"text-16\">
            ";
        // line 25
        $this->loadTemplate("course/header/parts/member-deadline-info.html.twig", "course/header/free-mode-header-for-member.html.twig", 25)->display($context);
        // line 26
        echo "           </span>
        </li>
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-book mrm\"></i>下一学习任务
          </p>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 33
            echo "            <a class=\"link-dark text-16\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["toLearnTask"], "title", array()), 15);
            echo "</a>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <span class=\"text-16\">暂无学习任务</span>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </li>
      </ul>
    </div>
    <div class=\"col-md-2 hidden-xs hidden-sm\">
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 42
            echo "        <a class=\"btn btn-primary btn-lg mt10\" 
          href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 44
            if ((($context["taskResultCount"] ?? null) < 1)) {
                // line 45
                echo "            开始学习
          ";
            } else {
                // line 47
                echo "            继续学习
          ";
            }
            // line 49
            echo "        </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
  </div>
  ";
        // line 53
        $this->loadTemplate("course/header/header-for-member-responsive.html.twig", "course/header/free-mode-header-for-member.html.twig", 53)->display($context);
        // line 54
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "course/header/free-mode-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  124 => 53,  120 => 51,  113 => 49,  109 => 47,  105 => 45,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  86 => 37,  79 => 35,  69 => 33,  64 => 32,  56 => 26,  54 => 25,  43 => 17,  39 => 16,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/free-mode-header-for-member.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/free-mode-header-for-member.html.twig");
    }
}
