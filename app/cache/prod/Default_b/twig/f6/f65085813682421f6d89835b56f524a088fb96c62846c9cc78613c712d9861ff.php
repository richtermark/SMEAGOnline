<?php

/* admin/default/parts/course-review-table.html.twig */
class __TwigTemplate_fbef3f2aeaeefa2d9d45089038428d63ee42bf39363989635e66937c5074a250 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
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
        return array (  86 => 26,  77 => 24,  68 => 20,  62 => 18,  55 => 16,  51 => 14,  48 => 13,  45 => 12,  40 => 11,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/parts/course-review-table.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/parts/course-review-table.html.twig");
    }
}
