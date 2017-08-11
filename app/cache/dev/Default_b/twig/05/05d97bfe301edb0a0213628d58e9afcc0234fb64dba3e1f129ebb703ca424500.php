<?php

/* admin/user/index.html.twig */
class __TwigTemplate_d5069bc2291e3d214159afed3f734d9656819877a95fcbac92d29ab42c5f1174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/index.html.twig", 3);
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
        $__internal_6038108553285eb5561aea8ea429ee71ec05035c6de1f10b36f6228f33c5df97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6038108553285eb5561aea8ea429ee71ec05035c6de1f10b36f6228f33c5df97->enter($__internal_6038108553285eb5561aea8ea429ee71ec05035c6de1f10b36f6228f33c5df97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        // line 5
        $context["menu"] = "admin_user_manage";
        // line 7
        $context["script_controller"] = "user/list";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6038108553285eb5561aea8ea429ee71ec05035c6de1f10b36f6228f33c5df97->leave($__internal_6038108553285eb5561aea8ea429ee71ec05035c6de1f10b36f6228f33c5df97_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2cabc26b6365b6adf4dcf8e642d3fe48eeacb347fa204744f8187123290d7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cabc26b6365b6adf4dcf8e642d3fe48eeacb347fa204744f8187123290d7a8->enter($__internal_a2cabc26b6365b6adf4dcf8e642d3fe48eeacb347fa204744f8187123290d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "
  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">

      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("longinDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录时间"), "registerDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时间")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "datePicker"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--时间类型--"));
        echo "
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        ";
        // line 30
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->arrayMerge($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userRole"), ($context["allRoles"] ?? $this->getContext($context, "allRoles"))), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有角色--"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        ";
        // line 37
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--注册来源--"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        ";
        // line 43
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    ";
        // line 54
        if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_user_export") && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("UserImporter"))) {
            // line 55
            echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_export");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出搜索结果"), "html", null, true);
            echo "</a>
    ";
        }
        // line 58
        echo "
  </form>



  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
      ";
        // line 66
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 67
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 69
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</th>
      ";
        // line 70
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/user/index.html.twig", 70)->display($context);
        // line 71
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号"), "html", null, true);
        echo "</th>
      <th>Email</th>
      <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近登录"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户总数："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, ($context["userCount"] ?? $this->getContext($context, "userCount")), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 83
            echo "      ";
            $this->loadTemplate("admin/user/user-table-tr.html.twig", "admin/user/index.html.twig", 83)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute(($context["profiles"] ?? $this->getContext($context, "profiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 84
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </tbody>
  </table>
  ";
        // line 88
        echo "  ";
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/user/index.html.twig", 88)->display(array_merge($context, array("module" => "user", "formId" => "user-table")));
        // line 89
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? $this->getContext($context, "admin_macro")), "paginator", array(0 => ($context["paginator"] ?? $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_a2cabc26b6365b6adf4dcf8e642d3fe48eeacb347fa204744f8187123290d7a8->leave($__internal_a2cabc26b6365b6adf4dcf8e642d3fe48eeacb347fa204744f8187123290d7a8_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 89,  224 => 88,  220 => 85,  206 => 84,  203 => 83,  186 => 82,  179 => 80,  171 => 75,  167 => 74,  163 => 73,  157 => 71,  155 => 70,  150 => 69,  146 => 67,  144 => 66,  134 => 58,  127 => 56,  124 => 55,  122 => 54,  114 => 49,  110 => 48,  102 => 43,  93 => 37,  83 => 30,  72 => 24,  64 => 21,  57 => 17,  48 => 11,  45 => 10,  39 => 9,  32 => 3,  30 => 7,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'admin/layout.html.twig' %}

{% set menu = 'admin_user_manage' %}

{% set script_controller = 'user/list' %}

{% block main %}

  {{ web_macro.flash_messages() }}

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">

      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        {{ select_options({longinDate:'登录时间'|trans, registerDate: '注册时间'|trans}, app.request.get('datePicker') ,'--时间类型--'|trans) }}
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"{{ app.request.query.get('startDate') }}\" placeholder=\"{{ '起始时间'|trans }}\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"{{ app.request.query.get('endDate') }}\" placeholder=\"{{ '结束时间'|trans }}\">
      </div>
    </div>
    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        {{ select_options(dict('userRole')|array_merge(allRoles), app.request.query.get('roles'), '--所有角色--'|trans) }}
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        {{ select_options(dict('userType'), app.request.query.get('keywordUserType'), '--注册来源--'|trans) }}
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        {{ select_options(dict('userKeyWordType'), app.request.query.get('keywordType') ? app.request.query.get('keywordType') : 'nickname') }}
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{ app.request.query.get('keyword') }}\"
             placeholder=\"{{ '关键词'|trans }}\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    {% if has_permission('admin_user_export') and is_plugin_installed('UserImporter') %}
      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"{{ path('admin_user_export') }}\">{{ '导出搜索结果'|trans }}</a>
    {% endif %}

  </form>



  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
      {% if setting('magic.enable_org','0') %}
        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      {% endif %}
      <th>{{ '用户名'|trans }}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      <th>{{ '手机号'|trans }}</th>
      <th>Email</th>
      <th>{{ '注册时间'|trans }}</th>
      <th>{{ '最近登录'|trans }}</th>
      <th width=\"10%\">{{ '操作'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">{{ '用户总数：'|trans }}<strong class=\"inflow-num\">{{ userCount }}</strong></span>
    </p>
    {% for user in users %}
      {% include 'admin/user/user-table-tr.html.twig' with {user:user,profile:profiles[user.id]} %}
    {% endfor %}
    </tbody>
  </table>
  {#{% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}#}
  {% include 'org/batch-update-org-btn.html.twig' with {module:'user', formId:'user-table'} %}
  {{ admin_macro.paginator(paginator) }}
{% endblock %}", "admin/user/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/user/index.html.twig");
    }
}
