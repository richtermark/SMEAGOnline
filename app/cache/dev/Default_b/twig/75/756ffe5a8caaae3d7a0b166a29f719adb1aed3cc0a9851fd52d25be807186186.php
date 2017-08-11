<?php

/* admin/default/parts/course-review-table.html.twig */
class __TwigTemplate_0c7ea55dd16e0b1d002a51abad2970aed4853946f8903649c66af7cbc2a151b2 extends Twig_Template
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
        $__internal_8f6c34bb00469c01ce974a9b984bc5c7cef66360dca84588aa0d013cb5e5ecf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6c34bb00469c01ce974a9b984bc5c7cef66360dca84588aa0d013cb5e5ecf0->enter($__internal_8f6c34bb00469c01ce974a9b984bc5c7cef66360dca84588aa0d013cb5e5ecf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/parts/course-review-table.html.twig"));

        // line 1
        echo "<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"70%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价内容"), "html", null, true);
        echo "</th>
    <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评分"), "html", null, true);
        echo "</th>
    <th width=\"15%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 12
            echo "    ";
            $context["author"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 13
            echo "    ";
            $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
            // line 14
            echo "    <tr>
      <td>
        <a class=\"link-primary\" target=\"_blank\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()), "tab" => "reviews")), "html", null, true);
            echo "\">  ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo "</a>
      </td>
      <td class=\"pull-right prl\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("星"), "html", null, true);
            echo "</td>
      <td>
        <a target=\"_blank\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()), "tab" => "reviews")), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">查看</a>
      </td>
    </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <tr><td><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无评价"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </tbody>
</table>

";
        
        $__internal_8f6c34bb00469c01ce974a9b984bc5c7cef66360dca84588aa0d013cb5e5ecf0->leave($__internal_8f6c34bb00469c01ce974a9b984bc5c7cef66360dca84588aa0d013cb5e5ecf0_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/parts/course-review-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  80 => 24,  71 => 20,  65 => 18,  58 => 16,  54 => 14,  51 => 13,  48 => 12,  43 => 11,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"70%\">{{ '评价内容'|trans }}</th>
    <th width=\"15%\">{{ '评分'|trans }}</th>
    <th width=\"15%\">{{ '操作'|trans }}</th>
  </tr>
  </thead>
  <tbody>

  {% for review in reviews %}
    {% set author = users[review.userId]|default(null) %}
    {% set course = courses[review.courseId]|default(null) %}
    <tr>
      <td>
        <a class=\"link-primary\" target=\"_blank\" href=\"{{ path('course_show',{id:review.courseId, tab: 'reviews'}) }}\">  {{ review.content|plain_text(60) }}</a>
      </td>
      <td class=\"pull-right prl\">{{ review.rating }}{{'星'|trans}}</td>
      <td>
        <a target=\"_blank\" href=\"{{ path('course_show',{id:review.courseId, tab: 'reviews'}) }}\" class=\"btn btn-default btn-xs\">查看</a>
      </td>
    </tr>
  {% else %}
    <tr><td><div class=\"empty\">{{'暂无评价'|trans}}</div></td></tr>
  {% endfor %}
  </tbody>
</table>

", "admin/default/parts/course-review-table.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/parts/course-review-table.html.twig");
    }
}
