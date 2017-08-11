<?php

/* admin/role/role-modal.html.twig */
class __TwigTemplate_47b5b6acd141f9325ce292429e5f42ab39322e3768d89e4158e53c3566d169ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "admin/role/role-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["topxiawebbundle"] = true;
        // line 13
        $context["role"] = ((array_key_exists("role", $context)) ? (_twig_default_filter(($context["role"] ?? null), null)) : (null));
        // line 14
        $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter(($context["modal"] ?? null), "create")) : ("create"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if ((($context["model"] ?? null) == "show")) {
            // line 6
            echo "    角色详情
  ";
        } elseif ((        // line 7
($context["model"] ?? null) == "edit")) {
            // line 8
            echo "    编辑角色
  ";
        } else {
            // line 10
            echo "    新增角色
  ";
        }
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"role-form\" method=\"post\"
        action=\"";
        // line 20
        if ((($context["model"] ?? null) == "create")) {
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_create");
            echo " ";
        } elseif ((($context["model"] ?? null) == "edit")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_edit", array("id" => $this->getAttribute(($context["role"] ?? null), "id", array()))), "html", null, true);
            echo " ";
        }
        echo "\">
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" ";
        // line 26
        if ((($context["model"] ?? null) == "show")) {
            echo " readOnly=\"true\" ";
        }
        // line 27
        echo "               class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["role"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["role"] ?? null), "name", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"管理员\"
               data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_check_name", array("exclude" => (($this->getAttribute(($context["role"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["role"] ?? null), "name", array()), "")) : ("")))), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"code\">编码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"code\" name=\"code\" ";
        // line 36
        if (((($context["model"] ?? null) == "show") || (($context["model"] ?? null) == "edit"))) {
            echo "readOnly=\"true\"";
        }
        echo " class=\"form-control\"
               value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["role"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["role"] ?? null), "code", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"ROLE_ADMIN\"
               data-url=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_check_code", array("exclude" => (($this->getAttribute(($context["role"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["role"] ?? null), "code", array()), "")) : ("")))), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>权限</label>
      </div>
      <div class=\"col-md-8\">
        <ul id=\"tree\" class=\"ztree\">
          <textarea style=\"display:none\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["menus"] ?? null), "html", null, true);
        echo "</textarea>
        </ul>
      </div>
    </div>

    <input type=\"text\" id=\"menus\" name=\"data\" class=\"hide\" value=\"\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  ";
        // line 61
        if ((($context["model"] ?? null) != "show")) {
            // line 62
            echo "    <button id=\"role-submit\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\"
            data-target=\"#role-form\">添加
    </button>
  ";
        }
        // line 66
        echo "
  <script>app.load('topxiaadminbundle/controller/role/create')</script>
";
    }

    public function getTemplateName()
    {
        return "admin/role/role-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 66,  153 => 62,  151 => 61,  148 => 60,  145 => 59,  136 => 53,  127 => 47,  115 => 38,  111 => 37,  105 => 36,  94 => 28,  89 => 27,  85 => 26,  68 => 20,  61 => 17,  58 => 16,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  33 => 1,  31 => 14,  29 => 13,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/role-modal.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/role-modal.html.twig");
    }
}
