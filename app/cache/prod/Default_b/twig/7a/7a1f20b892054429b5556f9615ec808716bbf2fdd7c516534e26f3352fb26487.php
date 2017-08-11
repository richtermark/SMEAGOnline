<?php

/* admin/user/user-table-tr.html.twig */
class __TwigTemplate_fc6bdce3c6abfd22b60bfe7964a5cc2d68f2b892b68c0ac760f02fd6e6be78a4 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/user/user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/user/user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? null));
        echo "</strong>
    ";
        // line 6
        if ($this->getAttribute(($context["user"] ?? null), "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            $context["userRole"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Role", array("code" => $context["role"]));
            // line 14
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter(($context["userRole"] ?? null), false)) : (false))) {
                // line 15
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["userRole"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userRole"] ?? null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "          ";
                echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 19
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " &nbsp ";
            }
            // line 20
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </span>
  </td>
 ";
        // line 23
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/user/user-table-tr.html.twig", 23)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["user"] ?? null), "orgCode", array()))));
        // line 24
        echo "  <td>
    ";
        // line 25
        if ($this->getAttribute(($context["user"] ?? null), "verifiedMobile", array())) {
            // line 26
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</span>
    ";
        } elseif ($this->getAttribute(        // line 27
($context["profile"] ?? null), "mobile", array())) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未绑定"), "html", null, true);
            echo ")</span>
    ";
        } else {
            // line 30
            echo "       -- 
    ";
        }
        // line 32
        echo "  </td>

  <td>
    ";
        // line 35
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "@");
        // line 36
        echo "    ";
        if (($this->getAttribute(($context["emailArr"] ?? null), 1, array(), "array") != "edusoho.net")) {
            // line 37
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "      --
    ";
        }
        // line 41
        echo "    
    <br>
    ";
        // line 43
        if ($this->getAttribute(($context["user"] ?? null), "emailVerified", array())) {
            // line 44
            echo "      <label class=\"label label-success\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该Email地址已验证"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已验证"), "html", null, true);
            echo "</label>
    ";
        }
        // line 46
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? null), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 59
        if (($this->getAttribute(($context["user"] ?? null), "loginTime", array()) == 0)) {
            // line 60
            echo "       --
      ";
        } else {
            // line 62
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 64
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? null), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 74
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/user/user-table-tr.html.twig", 74)->display(array_merge($context, array("parentCode" => "admin_user_manage", "group" => "groupButton", "user" => ($context["user"] ?? null))));
        // line 75
        echo "    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "admin/user/user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 75,  229 => 74,  225 => 73,  217 => 68,  211 => 67,  206 => 64,  200 => 62,  196 => 60,  194 => 59,  185 => 53,  179 => 52,  173 => 49,  168 => 46,  160 => 44,  158 => 43,  154 => 41,  150 => 39,  144 => 37,  141 => 36,  139 => 35,  134 => 32,  130 => 30,  122 => 28,  120 => 27,  113 => 26,  111 => 25,  108 => 24,  106 => 23,  102 => 21,  88 => 20,  83 => 19,  77 => 17,  71 => 15,  68 => 14,  65 => 13,  48 => 12,  43 => 9,  37 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/user/user-table-tr.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/user/user-table-tr.html.twig");
    }
}
