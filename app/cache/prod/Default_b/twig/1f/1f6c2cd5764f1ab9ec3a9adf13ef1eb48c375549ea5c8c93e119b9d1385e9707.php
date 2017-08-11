<?php

/* admin/layout.html.twig */
class __TwigTemplate_dee2d6af1e42bd85b7105c5c2eb9aff77b0de1b934f50684de76a52727072703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["menu"] ?? null));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " | SMEAGOnline";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body ";
        // line 50
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
  <!--[if lt IE 9]>
    ";
        // line 52
        $this->loadTemplate("default/ie8-alert.html.twig", "admin/layout.html.twig", 52)->display($context);
        // line 53
        echo "  <![endif]-->
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  ";
        // line 55
        if (($context["cloudSmsInfo"] ?? null)) {
            // line 56
            echo "    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["cloudSmsInfo"] ?? null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloudSmsInfo"] ?? null), "remainCount", array()), 0)) : (0)), "html", null, true);
            echo "条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  ";
        }
        // line 58
        echo "    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
     ";
        // line 66
        echo "        <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo "SMEAGONLINE ";
        }
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 69
        $this->loadTemplate("admin/role/templates/navigation.html.twig", "admin/layout.html.twig", 69)->display(array_merge($context, array("parentCode" => "admin")));
        // line 70
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>

          <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回首页"), "html", null, true);
        echo "</a></li>

          ";
        // line 82
        echo "          <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-flag\"></i> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language"), "html", null, true);
        echo "</a>
              
              <ul class=\"dropdown-menu\">
                  <li>
                      <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_language", array("language" => "zh_CN", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\"><img src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/china-flag.png"), "html", null, true);
        echo "\" width = '30' height = '20' /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Chinese"), "html", null, true);
        echo "</a>
                  </li>
                  <li>
                 
                      <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_language", array("language" => "en_US", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\"> <img src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/us-flag.png"), "html", null, true);
        echo "\" width = '30' height = '20' /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
        echo "</a>
                  </li>
              </ul>
          </li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container ";
        // line 108
        if (($context["cloudSmsInfo"] ?? null)) {
            echo "es-admin-container-down";
        }
        echo "\">

    ";
        // line 110
        $this->loadTemplate("admin/plugin-upgrade-notify-modal.html.twig", "admin/layout.html.twig", 110)->display($context);
        // line 111
        echo "
    ";
        // line 112
        $this->displayBlock('container', $context, $blocks);
        // line 161
        echo "
  </div>

  ";
        // line 164
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo "
  ";
        // line 168
        $this->loadTemplate("old-script_boot.html.twig", "admin/layout.html.twig", 168)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 169
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  <div id=\"attachment-modal\" class=\"modal\" ></div>
  ";
        // line 171
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 172
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 173
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 179
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentMenu"] ?? null), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/admin/educloud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 112
    public function block_container($context, array $blocks = array())
    {
        // line 113
        echo "      <div class=\"row\">  
        ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </div>
    ";
    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
        // line 115
        echo "          <div class=\"col-md-2\">
            ";
        // line 116
        $this->displayBlock('sidebar', $context, $blocks);
        // line 119
        echo "          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              ";
        // line 123
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 126
        echo "              <h1 class=\"pull-left\">
                ";
        // line 127
        $this->displayBlock('page_title', $context, $blocks);
        // line 130
        echo "              </h1>
              <div class=\"pull-right\">

                ";
        // line 133
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 145
        echo "
              </div>
            </div>

            ";
        // line 149
        $this->displayBlock('content_header', $context, $blocks);
        // line 150
        echo "            
            ";
        // line 151
        $this->displayBlock('tabs', $context, $blocks);
        // line 152
        echo "
            ";
        // line 153
        $this->displayBlock('capsule', $context, $blocks);
        // line 154
        echo "
            ";
        // line 155
        $this->displayBlock('main', $context, $blocks);
        // line 156
        echo "          </div>

        ";
    }

    // line 116
    public function block_sidebar($context, array $blocks = array())
    {
        // line 117
        echo "              ";
        $this->loadTemplate("admin/role/templates/side-bar.html.twig", "admin/layout.html.twig", 117)->display($context);
        // line 118
        echo "            ";
    }

    // line 123
    public function block_page_flash_message($context, array $blocks = array())
    {
        // line 124
        echo "
              ";
    }

    // line 127
    public function block_page_title($context, array $blocks = array())
    {
        // line 128
        echo "                  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute(($context["currentMenu"] ?? null), "code", array())), "name", array())), "html", null, true);
        echo "
                ";
    }

    // line 133
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 134
        echo "
                  ";
        // line 135
        if ((((($this->getAttribute(($context["currentMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter(($context["capsule"] ?? null), false)) : (false)))) {
            // line 136
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["capsule"] ?? null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 137
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                  ";
        } else {
            // line 140
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute(($context["currentMenu"] ?? null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 141
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                  ";
        }
        // line 144
        echo "                ";
    }

    // line 149
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 151
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("admin/role/templates/tabs.html.twig", "admin/layout.html.twig", 151)->display($context);
    }

    // line 153
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 155
    public function block_main($context, array $blocks = array())
    {
    }

    // line 164
    public function block_footer($context, array $blocks = array())
    {
        // line 165
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 182
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 183
            echo "  <a 
  ";
            // line 184
            if (($context["class"] ?? null)) {
                // line 185
                echo "    class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"
  ";
            }
            // line 187
            echo "  ";
            if (((($this->getAttribute(($context["menu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "mode", array()), null)) : (null)) == "modal")) {
                // line 188
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 192
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? null)), "html", null, true);
                echo "\"
  ";
            }
            // line 194
            echo "  ";
            if ((($this->getAttribute(($context["menu"] ?? null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "blank", array()), false)) : (false))) {
                // line 195
                echo "    target=\"blank\"
  ";
            }
            // line 197
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["menu"] ?? null), "name", array())), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 197,  568 => 195,  565 => 194,  559 => 192,  551 => 188,  548 => 187,  542 => 185,  540 => 184,  537 => 183,  523 => 182,  516 => 165,  513 => 164,  508 => 155,  503 => 153,  497 => 151,  492 => 149,  488 => 144,  485 => 143,  476 => 141,  471 => 140,  468 => 139,  459 => 137,  454 => 136,  452 => 135,  449 => 134,  446 => 133,  439 => 128,  436 => 127,  431 => 124,  428 => 123,  424 => 118,  421 => 117,  418 => 116,  412 => 156,  410 => 155,  407 => 154,  405 => 153,  402 => 152,  400 => 151,  397 => 150,  395 => 149,  389 => 145,  387 => 133,  382 => 130,  380 => 127,  377 => 126,  375 => 123,  369 => 119,  367 => 116,  364 => 115,  361 => 114,  356 => 159,  354 => 114,  351 => 113,  348 => 112,  343 => 44,  337 => 41,  333 => 40,  329 => 39,  325 => 38,  321 => 37,  316 => 36,  313 => 35,  302 => 25,  299 => 24,  292 => 179,  283 => 175,  278 => 173,  275 => 172,  273 => 171,  269 => 169,  267 => 168,  264 => 167,  262 => 164,  257 => 161,  255 => 112,  252 => 111,  250 => 110,  243 => 108,  229 => 99,  224 => 97,  211 => 91,  200 => 87,  193 => 83,  190 => 82,  183 => 79,  176 => 75,  171 => 73,  167 => 72,  163 => 70,  161 => 69,  150 => 66,  141 => 58,  135 => 56,  133 => 55,  129 => 53,  127 => 52,  118 => 50,  112 => 47,  108 => 46,  105 => 45,  103 => 44,  100 => 43,  98 => 35,  95 => 34,  90 => 32,  85 => 31,  83 => 30,  79 => 28,  74 => 27,  72 => 24,  66 => 21,  56 => 15,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/layout.html.twig");
    }
}
