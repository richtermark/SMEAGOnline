<?php

/* admin/course-set/tr.html.twig */
class __TwigTemplate_e27874651c5d148f1aa58ce8d8b8e49a1936c2eee1918fcc9b4062b0f81fd863 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/course-set/tr.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/course-set/tr.html.twig", 3);
        // line 4
        $context["target"] = (("" . ($context["filter"] ?? null)) . "_index");
        // line 5
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/course-set/tr.html.twig", 6)->display($context);
        // line 7
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
        echo "\"
       target=\"_blank\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</strong></a>
    ";
        // line 11
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 12
            echo "      ";
            $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
            // line 13
            echo "      ";
            if ( !($context["classroom"] ?? null)) {
                // line 14
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已移除"), "html", null, true);
                echo "</span>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live")) {
            // line 18
            echo "      <span class=\"label label-success live-label mls\">直播</span>
    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类："), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["category"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["category"] ?? null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute(($context["courseSet"] ?? null), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("荐:"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo "
        / ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("序号:"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 26
        echo "
  </td>
  <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()))) : ("")), "html", null, true);
        echo "</td>
  ";
        // line 29
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/course-set/tr.html.twig", 29)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()))));
        // line 30
        echo "  ";
        if (((($context["filter"] ?? null) != "open") && (($context["filter"] ?? null) != "liveOpen"))) {
            // line 31
            echo "    <td>
      <span class=\"text-info\">";
            // line 32
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("courseSerializeMode", $this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()));
            echo "</span>
    </td>
    ";
            // line 34
            if ((($context["filter"] ?? null) == "classroom")) {
                // line 35
                echo "      <td>
        ";
                // line 36
                $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
                // line 37
                echo "        ";
                if (($context["classroom"] ?? null)) {
                    // line 38
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? null), "classroomId", array()))), "html", null, true);
                    echo "\"
             target=\"_blank\">";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["classroom"] ?? null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 41
                echo "      </td>
    ";
            } else {
                // line 43
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 45
            echo "    ";
            if ((($context["filter"] ?? null) == "vip")) {
                // line 46
                echo "      ";
                $context["levels"] = $this->getAttribute(($context["courseSet"] ?? null), "levels", array(), "array");
                // line 47
                echo "      ";
                $context["length"] = twig_length_filter($this->env, ($context["levels"] ?? null));
                // line 48
                echo "      ";
                if ((($context["length"] ?? null) == 0)) {
                    // line 49
                    echo "        <td>该会员等级已删除</td>
      ";
                } else {
                    // line 51
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["levels"] ?? null)), "name", array()), "html", null, true);
                    echo "
          ";
                    // line 52
                    if ((($context["length"] ?? null) > 1)) {
                        // line 53
                        echo "            <br>
            <span class=\"text-muted text-sm\">等";
                        // line 54
                        echo twig_escape_filter($this->env, ($context["length"] ?? null), "html", null, true);
                        echo "个会员等级</span>
          ";
                    }
                    // line 56
                    echo "        </td>
      ";
                }
                // line 58
                echo "    ";
            }
            // line 59
            echo "  ";
        }
        // line 60
        echo "
  <td> ";
        // line 61
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute(($context["courseSet"] ?? null), "status", array()));
        echo "</td>
  <td>
    ";
        // line 63
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">

      ";
        // line 70
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage")) {
            // line 71
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
           target=\"_blank\">";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
            echo "</a>
      ";
        }
        // line 74
        echo "      ";
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/course-set/tr.html.twig", 74)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "courseSet" => ($context["courseSet"] ?? null))));
        // line 75
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/course-set/tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 75,  220 => 74,  215 => 72,  210 => 71,  208 => 70,  200 => 65,  195 => 63,  190 => 61,  187 => 60,  184 => 59,  181 => 58,  177 => 56,  172 => 54,  169 => 53,  167 => 52,  162 => 51,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  140 => 43,  136 => 41,  131 => 39,  126 => 38,  123 => 37,  121 => 36,  118 => 35,  116 => 34,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  99 => 28,  95 => 26,  89 => 24,  83 => 23,  81 => 22,  76 => 21,  73 => 20,  69 => 18,  66 => 17,  63 => 16,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/tr.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/course-set/tr.html.twig");
    }
}
