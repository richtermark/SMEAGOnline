<?php

/* admin/default/parts/course-explore-table.html.twig */
class __TwigTemplate_0ebe801a2b77b4aa97f17c4d0a4bb983d1ad6dbe0670473c235877f720835600 extends Twig_Template
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
    <th width=\"10%\"></th>
    <th width=\"70%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名"), "html", null, true);
        echo "</th>
    <th width=\"25%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberCounts"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["memberCount"]) {
            // line 11
            echo "    <tr>
      <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
      <td>
        <a class=\"link-primary\"
           target=\"_blank\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["memberCount"], "courseSetId", array()), array(), "array"), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["memberCount"], "courseSetId", array()), array(), "array"), "title", array()), "html", null, true);
            echo "</a>
      </td>
      <td class=\"pull-right prl\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberCount"], "count", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 20
            echo "    <tr><td colspan=\"3\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberCount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "admin/default/parts/course-explore-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  86 => 20,  70 => 17,  63 => 15,  57 => 12,  54 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/parts/course-explore-table.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/parts/course-explore-table.html.twig");
    }
}
