<?php

/* default/header.html.twig */
class __TwigTemplate_1c99d8b775ce43bbdc8fef77fc265862a22b5ec02903ad65e0a393a95609e771 extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_remind_counter");
        echo "\">
  <div class=\"container\">
    <div class=\"container-gap\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 10
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 11
            echo "          <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
        ";
        } else {
            // line 13
            echo "          <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
        ";
        }
        // line 15
        echo "      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null), null)) : (null)))));
        echo "

        <ul class=\"nav navbar-nav navbar-right\">
          ";
        // line 20
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 21
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程"), "html", null, true);
            echo " </a></li>           
            ";
            // line 22
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled")) {
                // line 23
                echo "              <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
                echo "\" class=\"mobile-badge-container\">
                <span class=\"glyphicon glyphicon-phone\"></span>
              </a></li>
            ";
            }
            // line 27
            echo "            <li>
              <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                <div class=\"form-group\">
                  <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "\">
                  <button class=\"button es-icon es-icon-search\"></button>
                </div>
              </form>
            </li>
            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
              <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
              <span class=\"visible-lt-ie8\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</span>
              ";
            // line 38
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
            <li>
              <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
              <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
              <span class=\"visible-lt-ie8\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</span>
              ";
            // line 43
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()), "html", null, true);
                echo "</span>";
            }
            // line 44
            echo "              </a>
            </li>
            <li>
              <a href=\"";
            // line 47
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled")) {
                // line 48
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
                echo "
                   ";
            } else {
                // line 50
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_bill");
                echo "
                   ";
            }
            // line 51
            echo "\">
                <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getDefaultPath("qiandai.png"), "html", null, true);
            echo "\" width=\"14\" style=\"margin-top: -2px\" />
              </a>
            </li>  
            <li class=\"visible-lt-ie8\"><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
            echo "</a></li>
            <li class=\"dropdown hidden-lt-ie8\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的主页"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
                <li class=\"divider\"></li>
                ";
            // line 62
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BACKEND")) {
                // line 63
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
                  <li class=\"divider\"></li>
                  ";
            }
            // line 66
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
          ";
        } else {
            // line 70
            echo "            ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled")) {
                // line 71
                echo "              <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机版"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 73
            echo "            <li>
              <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                <div class=\"form-group\">
                  <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "\">
                  <button class=\"button es-icon es-icon-search\"></button>
                </div>
              </form>
            </li>
            <li><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
          ";
        }
        // line 84
        echo "        </ul>
      </div><!--/.navbar-collapse -->
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 84,  229 => 82,  223 => 81,  215 => 76,  210 => 73,  202 => 71,  199 => 70,  189 => 66,  180 => 63,  178 => 62,  171 => 60,  165 => 59,  160 => 57,  153 => 55,  147 => 52,  144 => 51,  138 => 50,  132 => 48,  130 => 47,  125 => 44,  119 => 43,  115 => 42,  110 => 40,  101 => 38,  97 => 37,  92 => 35,  84 => 30,  79 => 27,  71 => 23,  69 => 22,  62 => 21,  60 => 20,  54 => 17,  50 => 15,  42 => 13,  34 => 11,  32 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/header.html.twig");
    }
}
