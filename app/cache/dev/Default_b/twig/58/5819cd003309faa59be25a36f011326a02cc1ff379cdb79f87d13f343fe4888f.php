<?php

/* login/index.html.twig */
class __TwigTemplate_b03c39cd118a6c1b704159eb2539367ebcd655117600824050a065a1e3b30f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64b9a4e5200d38ff899ec1546e9cf50c3146dfe2e3f2ae9a51276ecdfb235393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b9a4e5200d38ff899ec1546e9cf50c3146dfe2e3f2ae9a51276ecdfb235393->enter($__internal_64b9a4e5200d38ff899ec1546e9cf50c3146dfe2e3f2ae9a51276ecdfb235393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login/index.js"));
        // line 3
        $context["bodyClass"] = "login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b9a4e5200d38ff899ec1546e9cf50c3146dfe2e3f2ae9a51276ecdfb235393->leave($__internal_64b9a4e5200d38ff899ec1546e9cf50c3146dfe2e3f2ae9a51276ecdfb235393_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a86a843956d92fad105a0cc670d34fe0301f33dff1e438aee70d654174367038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86a843956d92fad105a0cc670d34fe0301f33dff1e438aee70d654174367038->enter($__internal_a86a843956d92fad105a0cc670d34fe0301f33dff1e438aee70d654174367038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a86a843956d92fad105a0cc670d34fe0301f33dff1e438aee70d654174367038->leave($__internal_a86a843956d92fad105a0cc670d34fe0301f33dff1e438aee70d654174367038_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_22a62fbbc8ffbb26cfac0e3030d24086a63ee11518cb415fbac5cc0b4d96bfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a62fbbc8ffbb26cfac0e3030d24086a63ee11518cb415fbac5cc0b4d96bfa0->enter($__internal_22a62fbbc8ffbb26cfac0e3030d24086a63ee11518cb415fbac5cc0b4d96bfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 9
            echo "    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  ";
        }
        // line 13
        echo "  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

        ";
        // line 21
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 22
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
        ";
        }
        // line 24
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帐号"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required
              placeholder='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记住密码"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["_target_path"] ?? $this->getContext($context, "_target_path")), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找回密码"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
        <a class=\"link-primary\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即注册"), "html", null, true);
        echo "</a>
      </div>

      ";
        // line 60
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
            // line 61
            echo "        <div class=\"social-login\">
        <span>
          ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => ($context["_target_path"] ?? $this->getContext($context, "_target_path")))));
            echo "
        </span>
          <div class=\"line\"></div>
        </div>
      ";
        }
        // line 68
        echo "    </div>
  </div>

";
        
        $__internal_22a62fbbc8ffbb26cfac0e3030d24086a63ee11518cb415fbac5cc0b4d96bfa0->leave($__internal_22a62fbbc8ffbb26cfac0e3030d24086a63ee11518cb415fbac5cc0b4d96bfa0_prof);

    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_cc72336c7e90cfe1512767a6ed0064ef0a8bf981ce9e1e59e10aec60a313ef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc72336c7e90cfe1512767a6ed0064ef0a8bf981ce9e1e59e10aec60a313ef0e->enter($__internal_cc72336c7e90cfe1512767a6ed0064ef0a8bf981ce9e1e59e10aec60a313ef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        // line 74
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "login/index.html.twig", 74)->display(array_merge($context, array("mobile_tool_bar" => "login")));
        
        $__internal_cc72336c7e90cfe1512767a6ed0064ef0a8bf981ce9e1e59e10aec60a313ef0e->leave($__internal_cc72336c7e90cfe1512767a6ed0064ef0a8bf981ce9e1e59e10aec60a313ef0e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  206 => 73,  196 => 68,  188 => 63,  184 => 61,  182 => 60,  174 => 57,  170 => 56,  163 => 54,  156 => 50,  152 => 49,  146 => 46,  139 => 42,  130 => 36,  125 => 34,  117 => 29,  113 => 28,  108 => 26,  102 => 24,  96 => 22,  94 => 21,  89 => 19,  81 => 16,  77 => 15,  73 => 13,  67 => 10,  64 => 9,  61 => 8,  55 => 7,  41 => 5,  34 => 1,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% do script(['libs/jquery-validation.js','app/js/auth/login/index.js']) %}
{% set bodyClass = 'login' %}

{% block title %}{{ '登录'|trans }} - {{ parent() }}{% endblock %}

{% block content %}
  {% if app.request.cookies.get('modalOpened') == 1 %}
    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  {% endif %}
  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">{{ '登录帐号'|trans }}</a>
      <a href=\"{{ path('register', {goto:_target_path}) }}\">{{ '注册帐号'|trans }}</a>
    </div>
    <div class=\"login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"{{ path('login_check') }}\">

        {% if error %}
          <div class=\"alert alert-danger\">{{ error.message|trans }}</div>
        {% endif %}
        {{ web_macro.flash_messages() }}
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">{{ '帐号'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" required
              placeholder='{{ '邮箱/手机/用户名'|trans }}'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">{{ '密码'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='{{ '密码'|trans }}'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> {{ '记住密码'|trans }}
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">{{ '登录'|trans }}</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"{{ _target_path }}\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"{{ path('password_reset') }}\">{{ '找回密码'|trans }}</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">{{ '还没有注册帐号？'|trans }}</span>
        <a class=\"link-primary\" href=\"{{ path('register', {goto:_target_path}) }}\">{{ '立即注册'|trans }}</a>
      </div>

      {% if setting('login_bind.enabled') %}
        <div class=\"social-login\">
        <span>
          {{ render(controller('AppBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
        </span>
          <div class=\"line\"></div>
        </div>
      {% endif %}
    </div>
  </div>

{% endblock %}

{% block bottom %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'login' } %}
{% endblock %}", "login/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/login/index.html.twig");
    }
}
