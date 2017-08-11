<?php

/* admin/layout.html.twig */
class __TwigTemplate_b17de76dcd988693fa29e7e2cf80b7fed8dc85eb4d3b76a9f03358ef9d24a60a extends Twig_Template
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
        $__internal_90c8d8ef62bebdff4d5ecd753912019a033a61295603d480590a7536a4431e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c8d8ef62bebdff4d5ecd753912019a033a61295603d480590a7536a4431e54->enter($__internal_90c8d8ef62bebdff4d5ecd753912019a033a61295603d480590a7536a4431e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

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
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["menu"] ?? $this->getContext($context, "menu")));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
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
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "html", null, true);
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
        if (($context["cloudSmsInfo"] ?? $this->getContext($context, "cloudSmsInfo"))) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("语言"), "html", null, true);
        echo "</a>
              
              <ul class=\"dropdown-menu\">
                  <li>
                      <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_language", array("language" => "zh_CN", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\"><img src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/china-flag.png"), "html", null, true);
        echo "\" width = '30' height = '20' /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中文"), "html", null, true);
        echo "</a>
                  </li>
                  <li>
                 
                      <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_language", array("language" => "en_US", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\"> <img src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/us-flag.png"), "html", null, true);
        echo "\" width = '30' height = '20' /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("英语"), "html", null, true);
        echo "</a>
                  </li>
              </ul>
          </li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
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
        if (($context["cloudSmsInfo"] ?? $this->getContext($context, "cloudSmsInfo"))) {
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
        
        $__internal_90c8d8ef62bebdff4d5ecd753912019a033a61295603d480590a7536a4431e54->leave($__internal_90c8d8ef62bebdff4d5ecd753912019a033a61295603d480590a7536a4431e54_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b335f90f6e1e9ce6ced4370428b66a5172f01641199725c06ee3110137178d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b335f90f6e1e9ce6ced4370428b66a5172f01641199725c06ee3110137178d->enter($__internal_39b335f90f6e1e9ce6ced4370428b66a5172f01641199725c06ee3110137178d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
        
        $__internal_39b335f90f6e1e9ce6ced4370428b66a5172f01641199725c06ee3110137178d->leave($__internal_39b335f90f6e1e9ce6ced4370428b66a5172f01641199725c06ee3110137178d_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_654cde0072d6860a3bb5bfd6bcfed9b1f58740eed424c838b78668c9119f4a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654cde0072d6860a3bb5bfd6bcfed9b1f58740eed424c838b78668c9119f4a83->enter($__internal_654cde0072d6860a3bb5bfd6bcfed9b1f58740eed424c838b78668c9119f4a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_654cde0072d6860a3bb5bfd6bcfed9b1f58740eed424c838b78668c9119f4a83->leave($__internal_654cde0072d6860a3bb5bfd6bcfed9b1f58740eed424c838b78668c9119f4a83_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bbb4773bd0a2b16d7773e7fd4997f7787cfe76e852410c3ce76544af5b17ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbb4773bd0a2b16d7773e7fd4997f7787cfe76e852410c3ce76544af5b17ca2->enter($__internal_8bbb4773bd0a2b16d7773e7fd4997f7787cfe76e852410c3ce76544af5b17ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bbb4773bd0a2b16d7773e7fd4997f7787cfe76e852410c3ce76544af5b17ca2->leave($__internal_8bbb4773bd0a2b16d7773e7fd4997f7787cfe76e852410c3ce76544af5b17ca2_prof);

    }

    // line 112
    public function block_container($context, array $blocks = array())
    {
        $__internal_8ed6e1a518776edf6bb1961f8c2f6da5f9803995f87d184f7952f4a3ac279318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6e1a518776edf6bb1961f8c2f6da5f9803995f87d184f7952f4a3ac279318->enter($__internal_8ed6e1a518776edf6bb1961f8c2f6da5f9803995f87d184f7952f4a3ac279318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 113
        echo "      <div class=\"row\">  
        ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </div>
    ";
        
        $__internal_8ed6e1a518776edf6bb1961f8c2f6da5f9803995f87d184f7952f4a3ac279318->leave($__internal_8ed6e1a518776edf6bb1961f8c2f6da5f9803995f87d184f7952f4a3ac279318_prof);

    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a4a32c0f98f4d56725bb367bbf3e6f2ef9d6024bde275a7e0126059440cd91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4a32c0f98f4d56725bb367bbf3e6f2ef9d6024bde275a7e0126059440cd91e->enter($__internal_3a4a32c0f98f4d56725bb367bbf3e6f2ef9d6024bde275a7e0126059440cd91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3a4a32c0f98f4d56725bb367bbf3e6f2ef9d6024bde275a7e0126059440cd91e->leave($__internal_3a4a32c0f98f4d56725bb367bbf3e6f2ef9d6024bde275a7e0126059440cd91e_prof);

    }

    // line 116
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d56023e27c7a95729a815447e95eae78361e4904031bb6a817994be066c005e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56023e27c7a95729a815447e95eae78361e4904031bb6a817994be066c005e0->enter($__internal_d56023e27c7a95729a815447e95eae78361e4904031bb6a817994be066c005e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 117
        echo "              ";
        $this->loadTemplate("admin/role/templates/side-bar.html.twig", "admin/layout.html.twig", 117)->display($context);
        // line 118
        echo "            ";
        
        $__internal_d56023e27c7a95729a815447e95eae78361e4904031bb6a817994be066c005e0->leave($__internal_d56023e27c7a95729a815447e95eae78361e4904031bb6a817994be066c005e0_prof);

    }

    // line 123
    public function block_page_flash_message($context, array $blocks = array())
    {
        $__internal_46ce843a5393068768be6a069036f03c9c9c1083763d4d9d625839f88774af62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ce843a5393068768be6a069036f03c9c9c1083763d4d9d625839f88774af62->enter($__internal_46ce843a5393068768be6a069036f03c9c9c1083763d4d9d625839f88774af62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_flash_message"));

        // line 124
        echo "
              ";
        
        $__internal_46ce843a5393068768be6a069036f03c9c9c1083763d4d9d625839f88774af62->leave($__internal_46ce843a5393068768be6a069036f03c9c9c1083763d4d9d625839f88774af62_prof);

    }

    // line 127
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1934829267d20aedf195514f25a39a572b90506d29a4146a9b0d2db4dca5ec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1934829267d20aedf195514f25a39a572b90506d29a4146a9b0d2db4dca5ec50->enter($__internal_1934829267d20aedf195514f25a39a572b90506d29a4146a9b0d2db4dca5ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 128
        echo "                  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "code", array())), "name", array())), "html", null, true);
        echo "
                ";
        
        $__internal_1934829267d20aedf195514f25a39a572b90506d29a4146a9b0d2db4dca5ec50->leave($__internal_1934829267d20aedf195514f25a39a572b90506d29a4146a9b0d2db4dca5ec50_prof);

    }

    // line 133
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_936f4ba8e06ac44c902bb8caab4a1d806ecedb2a0e34de96ff27d7a534e29ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936f4ba8e06ac44c902bb8caab4a1d806ecedb2a0e34de96ff27d7a534e29ce1->enter($__internal_936f4ba8e06ac44c902bb8caab4a1d806ecedb2a0e34de96ff27d7a534e29ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        // line 134
        echo "
                  ";
        // line 135
        if ((((($this->getAttribute(($context["currentMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter(($context["capsule"] ?? $this->getContext($context, "capsule")), false)) : (false)))) {
            // line 136
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["capsule"] ?? $this->getContext($context, "capsule"))), "code", array()), "topBtn"));
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
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "code", array()), "topBtn"));
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
        
        $__internal_936f4ba8e06ac44c902bb8caab4a1d806ecedb2a0e34de96ff27d7a534e29ce1->leave($__internal_936f4ba8e06ac44c902bb8caab4a1d806ecedb2a0e34de96ff27d7a534e29ce1_prof);

    }

    // line 149
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f7810b6be15d59f68978948696b41de639a71df6ca009caf76f0b5e7f749a339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7810b6be15d59f68978948696b41de639a71df6ca009caf76f0b5e7f749a339->enter($__internal_f7810b6be15d59f68978948696b41de639a71df6ca009caf76f0b5e7f749a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_f7810b6be15d59f68978948696b41de639a71df6ca009caf76f0b5e7f749a339->leave($__internal_f7810b6be15d59f68978948696b41de639a71df6ca009caf76f0b5e7f749a339_prof);

    }

    // line 151
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_a65f65782ae6a869cb03dd1cc4c963c294a394930cae93e83fa9e12b73228f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65f65782ae6a869cb03dd1cc4c963c294a394930cae93e83fa9e12b73228f83->enter($__internal_a65f65782ae6a869cb03dd1cc4c963c294a394930cae93e83fa9e12b73228f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        $this->loadTemplate("admin/role/templates/tabs.html.twig", "admin/layout.html.twig", 151)->display($context);
        
        $__internal_a65f65782ae6a869cb03dd1cc4c963c294a394930cae93e83fa9e12b73228f83->leave($__internal_a65f65782ae6a869cb03dd1cc4c963c294a394930cae93e83fa9e12b73228f83_prof);

    }

    // line 153
    public function block_capsule($context, array $blocks = array())
    {
        $__internal_f021eae1e69da28a2b5ae500b7ab297cfbb139486a90f1b861f200c0e795d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f021eae1e69da28a2b5ae500b7ab297cfbb139486a90f1b861f200c0e795d9a5->enter($__internal_f021eae1e69da28a2b5ae500b7ab297cfbb139486a90f1b861f200c0e795d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capsule"));

        
        $__internal_f021eae1e69da28a2b5ae500b7ab297cfbb139486a90f1b861f200c0e795d9a5->leave($__internal_f021eae1e69da28a2b5ae500b7ab297cfbb139486a90f1b861f200c0e795d9a5_prof);

    }

    // line 155
    public function block_main($context, array $blocks = array())
    {
        $__internal_d93b28e63c6e240482c2d9e64697f17cfe6b4a9675dbf1fc263d86358dc0f73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93b28e63c6e240482c2d9e64697f17cfe6b4a9675dbf1fc263d86358dc0f73c->enter($__internal_d93b28e63c6e240482c2d9e64697f17cfe6b4a9675dbf1fc263d86358dc0f73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d93b28e63c6e240482c2d9e64697f17cfe6b4a9675dbf1fc263d86358dc0f73c->leave($__internal_d93b28e63c6e240482c2d9e64697f17cfe6b4a9675dbf1fc263d86358dc0f73c_prof);

    }

    // line 164
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7c14cdf62532cdc9b71940dc6e830f146c28954a197e06f1764c3157fa2c5fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c14cdf62532cdc9b71940dc6e830f146c28954a197e06f1764c3157fa2c5fee->enter($__internal_7c14cdf62532cdc9b71940dc6e830f146c28954a197e06f1764c3157fa2c5fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 165
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo " 
  ";
        
        $__internal_7c14cdf62532cdc9b71940dc6e830f146c28954a197e06f1764c3157fa2c5fee->leave($__internal_7c14cdf62532cdc9b71940dc6e830f146c28954a197e06f1764c3157fa2c5fee_prof);

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
            $__internal_bc0e9dbda3e021feeada4c29cf37f95c613979cc029e457c9d30ad5cad60d060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bc0e9dbda3e021feeada4c29cf37f95c613979cc029e457c9d30ad5cad60d060->enter($__internal_bc0e9dbda3e021feeada4c29cf37f95c613979cc029e457c9d30ad5cad60d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 183
            echo "  <a 
  ";
            // line 184
            if (($context["class"] ?? $this->getContext($context, "class"))) {
                // line 185
                echo "    class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 187
            echo "  ";
            if (((($this->getAttribute(($context["menu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "mode", array()), null)) : (null)) == "modal")) {
                // line 188
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 192
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? $this->getContext($context, "menu"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "name", array())), "html", null, true);
            echo "</a>
";
            
            $__internal_bc0e9dbda3e021feeada4c29cf37f95c613979cc029e457c9d30ad5cad60d060->leave($__internal_bc0e9dbda3e021feeada4c29cf37f95c613979cc029e457c9d30ad5cad60d060_prof);

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
        return array (  665 => 197,  661 => 195,  658 => 194,  652 => 192,  644 => 188,  641 => 187,  635 => 185,  633 => 184,  630 => 183,  613 => 182,  603 => 165,  597 => 164,  586 => 155,  575 => 153,  563 => 151,  552 => 149,  545 => 144,  542 => 143,  533 => 141,  528 => 140,  525 => 139,  516 => 137,  511 => 136,  509 => 135,  506 => 134,  500 => 133,  490 => 128,  484 => 127,  476 => 124,  470 => 123,  463 => 118,  460 => 117,  454 => 116,  445 => 156,  443 => 155,  440 => 154,  438 => 153,  435 => 152,  433 => 151,  430 => 150,  428 => 149,  422 => 145,  420 => 133,  415 => 130,  413 => 127,  410 => 126,  408 => 123,  402 => 119,  400 => 116,  397 => 115,  391 => 114,  383 => 159,  381 => 114,  378 => 113,  372 => 112,  361 => 44,  352 => 41,  348 => 40,  344 => 39,  340 => 38,  336 => 37,  331 => 36,  325 => 35,  311 => 25,  305 => 24,  295 => 179,  286 => 175,  281 => 173,  278 => 172,  276 => 171,  272 => 169,  270 => 168,  267 => 167,  265 => 164,  260 => 161,  258 => 112,  255 => 111,  253 => 110,  246 => 108,  232 => 99,  227 => 97,  214 => 91,  203 => 87,  196 => 83,  193 => 82,  186 => 79,  179 => 75,  174 => 73,  170 => 72,  166 => 70,  164 => 69,  153 => 66,  144 => 58,  138 => 56,  136 => 55,  132 => 53,  130 => 52,  121 => 50,  115 => 47,  111 => 46,  108 => 45,  106 => 44,  103 => 43,  101 => 35,  98 => 34,  93 => 32,  88 => 31,  86 => 30,  82 => 28,  77 => 27,  75 => 24,  69 => 21,  59 => 15,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
{% import \"admin/macro.html.twig\" as admin_macro %}
{% import _self as self_macro %}

{% set menu = menu|default(null) %}
{% set currentMenu = permission(menu) %}
{% set cloudSmsInfo = isOldSmsUser()|default(false) %}

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <title>

    {% block title %}
      {{ currentMenu.name|trans }} - {{ menu|parent_permission.name|trans }} - {{ menu|parent_permission.code|parent_permission.name|trans  }}
    {% endblock %}
    {% if not setting('copyright.owned') %} | SMEAGOnline{% endif %}
  </title>

  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
    <link href=\"{{ asset(setting('site.favicon')) }}\" rel=\"shortcut icon\" />
  {% endif %}
  
  {% block stylesheets %}
  <link href=\"{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/common.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('bundles/topxiaadmin/css/admin.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('bundles/topxiaadmin/css/admin_v2.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/v2/css/admin/educloud.css') }}\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assets/v2/css/es-icon.css') }}\" />
  {% endblock %}

  {% block javascripts %}{% endblock %}
  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->
</head>
<body {% if bodyClass|default('') %}class=\"{{ bodyClass }}\"{% endif %}>
  <!--[if lt IE 9]>
    {% include 'default/ie8-alert.html.twig' %}
  <![endif]-->
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  {% if cloudSmsInfo %}
    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余{{cloudSmsInfo.remainCount|default(0)}}条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  {% endif %}
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
     {#    <a class=\"navbar-brand\" href=\"{{ url('admin') }}\">{% if not setting('copyright.owned') %}SMEAGOnline {% endif %}{{'管理后台'|trans}}</a> #}
        <a class=\"navbar-brand\" href=\"{{ url('admin') }}\">{% if not setting('copyright.owned') %}SMEAGONLINE {% endif %}{# {{'管理后台'|trans}} #}</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        {% include 'admin/role/templates/navigation.html.twig' with {parentCode:'admin'} %}

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"{{path('admin_common_admin')}}\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> {{'常用'|trans}}</a>
            <ul class=\"dropdown-menu shortcuts\">
              {{ render(controller('AppBundle:Admin/CommonAdmin:commonAdmin')) }}
            </ul>
          </li>

          <li><a href=\"{{ path('homepage') }}\"><i class=\"glyphicon glyphicon-home\"></i> {{'回首页'|trans}}</a></li>

          {# Change language  #}
          <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-flag\"></i> {{'语言'|trans}}</a>
              
              <ul class=\"dropdown-menu\">
                  <li>
                      <a href=\"{{ path('switch_language', {language: 'zh_CN', _target_path: _target_path|default(app.request.server.get('REQUEST_URI'))}) }}\"><img src = \"{{ asset('bundles/topxiaadmin/img/china-flag.png') }}\" width = '30' height = '20' /> {{'中文'|trans}}</a>
                  </li>
                  <li>
                 
                      <a href=\"{{ path('switch_language', {language: 'en_US', _target_path: _target_path|default(app.request.server.get('REQUEST_URI'))}) }}\"> <img src = \"{{ asset('bundles/topxiaadmin/img/us-flag.png') }}\" width = '30' height = '20' /> {{'英语'|trans}}</a>
                  </li>
              </ul>
          </li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> {{ app.user.nickname }} <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"{{ path('logout') }}\"><i class=\"glyphicon glyphicon-off\"></i> {{'退出'|trans}}</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container {% if cloudSmsInfo %}es-admin-container-down{% endif %}\">

    {% include 'admin/plugin-upgrade-notify-modal.html.twig' %}

    {% block container %}
      <div class=\"row\">  
        {% block content %}
          <div class=\"col-md-2\">
            {% block sidebar %}
              {% include 'admin/role/templates/side-bar.html.twig' %}
            {% endblock %}
          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              {% block page_flash_message %}

              {% endblock %}
              <h1 class=\"pull-left\">
                {% block page_title %}
                  {{ currentMenu.code|parent_permission.name|trans }}
                {% endblock %}
              </h1>
              <div class=\"pull-right\">

                {% block page_buttons %}

                  {% if currentMenu.mode|default('') == 'capsules' and capsule|default(false) %}
                    {% for m in sub_permissions(permission(capsule).code,'topBtn') %}
                      {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                    {% endfor %}
                  {% else %}
                    {% for m in sub_permissions(currentMenu.code,'topBtn') %}
                      {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                    {% endfor %}
                  {% endif %}
                {% endblock %}

              </div>
            </div>

            {% block content_header %}{% endblock %}
            
            {% block tabs %}{% include 'admin/role/templates/tabs.html.twig' %}{% endblock %}

            {% block capsule %}{% endblock %}

            {% block main %}{% endblock %}
          </div>

        {% endblock %}
      </div>
    {% endblock %}

  </div>

  {% block footer %}
    {{ setting('site.analytics')|raw }} 
  {% endblock %}

  {% include 'old-script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}
  <div id=\"modal\" class=\"modal\" ></div>
  <div id=\"attachment-modal\" class=\"modal\" ></div>
  {% if setting('copyright.thirdCopyright') != 1 %}
    <div class=\"fixed-bar\">
      <a href=\"{{path('admin_feedback')}}\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>{{'产品'|trans}}<br/>{{'反馈'|trans}}</span>
      </a>
    </div>
  {% endif %}
</body>
</html>

{% macro menu_link_html(_context, menu, class) %}
  <a 
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}
  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >{{ menu.name|trans }}</a>
{% endmacro %}", "admin/layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/layout.html.twig");
    }
}
