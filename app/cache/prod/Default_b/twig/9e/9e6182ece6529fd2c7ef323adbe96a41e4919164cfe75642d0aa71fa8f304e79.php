<?php

/* admin/course-set/index.html.twig */
class __TwigTemplate_754abf6eddfa4b01e7f09e78f23a0d6e0cda517bddd8dd17fa72b1ecfc53a370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/course-set/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("admin/course-set/tab.html.twig", "admin/course-set/index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 12
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/course-set/index.html.twig", 12)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 13
        echo "
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程状态"));
        echo "
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "\" name=\"creatorName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "creatorName"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

      ";
        // line 33
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/course-set/index.html.twig", 33)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程说明Tooltip"), "placement" => "left")));
        // line 34
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, ($context["searchCourseSetsNum"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, ($context["publishedCourseSetsNum"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, ($context["closedCourseSetsNum"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, ($context["unPublishedCourseSetsNum"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 47
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 48
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 50
        echo "      <th width=\"5%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
        echo "</th>
      ";
        // line 53
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/course-set/index.html.twig", 53)->display($context);
        // line 54
        echo "      <th width=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("连载状态"), "html", null, true);
        echo "</th>
      ";
        // line 55
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 56
            echo "        <th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所在"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 58
            echo "        <th>";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo "数
        </th>

      ";
        }
        // line 62
        echo "
      ";
        // line 63
        if ((($context["filter"] ?? null) == "course")) {
            // line 64
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收入(元)"), "html", null, true);
            echo "</th>
      ";
        }
        // line 66
        echo "
      ";
        // line 67
        if ((($context["filter"] ?? null) == "vip")) {
            // line 68
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员等级"), "html", null, true);
            echo "</th>
      ";
        }
        // line 70
        echo "
      <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th clas=\"5%\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "</th>
      <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 78
            echo "      ";
            $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
            // line 79
            echo "      ";
            $context["category"] = (($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 80
            echo "      ";
            $this->loadTemplate("admin/course-set/tr.html.twig", "admin/course-set/index.html.twig", 80)->display($context);
            // line 81
            echo "    ";
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
            // line 82
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程记录"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </tbody>
  </table>
  ";
        // line 90
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/course-set/index.html.twig", 90)->display(array_merge($context, array("module" => "courseSet", "formId" => "course-table")));
        // line 91
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/course-set/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 91,  277 => 90,  273 => 88,  263 => 84,  259 => 82,  246 => 81,  243 => 80,  240 => 79,  237 => 78,  219 => 77,  212 => 73,  208 => 72,  204 => 71,  201 => 70,  195 => 68,  193 => 67,  190 => 66,  184 => 64,  182 => 63,  179 => 62,  167 => 58,  160 => 56,  158 => 55,  153 => 54,  151 => 53,  147 => 52,  143 => 51,  138 => 50,  134 => 48,  132 => 47,  119 => 41,  111 => 40,  103 => 39,  95 => 38,  89 => 34,  87 => 33,  82 => 31,  75 => 29,  67 => 26,  59 => 21,  51 => 16,  46 => 13,  44 => 12,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/course-set/index.html.twig");
    }
}
