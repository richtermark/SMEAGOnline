<?php

/* admin/role/index.html.twig */
class __TwigTemplate_ecf64bf4b46cf99f25f528cb743e4c9a1b62ee8fe2d2428cb91c06da5eaa59b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/role/index.html.twig", 1);
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
        $context["menu"] = "admin_role_manage";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/role/index";
        // line 6
        $context["notUpdateRoles"] = array(0 => "ROLE_SUPER_ADMIN", 1 => "ROLE_ADMIN", 2 => "ROLE_TEACHER", 3 => "ROLE_USER");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          ";
        // line 15
        $context["options"] = array("" => "--关键词类型--", "nameLike" => "角色名称", "codeLike" => "编码");
        // line 16
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(($context["options"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">角色名称</th>
      <th width=\"25%\">编码</th>
      <th width=\"20%\">创建时间</th>
      <th width=\"20%\">创建者</th>
      <th>操作</th>
    </tr>   
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 36
            echo "      <tr>
        <td>
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "
        <td>
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "code", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["role"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "        </td>
        <td>
          ";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array()), "--")) : ("--")), "html", null, true);
            echo "
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
            ";
            // line 50
            if (!twig_in_filter($this->getAttribute($context["role"], "code", array()), ($context["notUpdateRoles"] ?? null))) {
                // line 51
                echo "              ";
                $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/role/index.html.twig", 51)->display(array_merge($context, array("parentCode" => "admin_role_manage", "group" => "groupBtn", "role" => $context["role"])));
                // line 52
                echo "            ";
            }
            // line 53
            echo "          </div>
        </td>
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
            // line 57
            echo "      <tr><td class=\"empty\" colspan=\"20\">暂无角色</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    <p>1、初始化的4个角色，无法编辑和删除</p>
    <p>2、角色创建成功后编码不可修改</p>
  </div>


  ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  158 => 59,  151 => 57,  135 => 53,  132 => 52,  129 => 51,  127 => 50,  123 => 49,  116 => 45,  111 => 43,  105 => 40,  100 => 38,  96 => 36,  78 => 35,  60 => 20,  52 => 16,  50 => 15,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/index.html.twig");
    }
}
