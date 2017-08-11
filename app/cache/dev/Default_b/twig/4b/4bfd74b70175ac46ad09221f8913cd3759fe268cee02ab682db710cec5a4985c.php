<?php

/* script_boot.html.twig */
class __TwigTemplate_270708ba71956213f7d1815d3d0189f3732fe3aed9fcbe984d6ebed476deb6c6 extends Twig_Template
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
        $__internal_63279b418e2571309638303a652927f0caf99c989f5ed224cdbb7af2f3609a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63279b418e2571309638303a652927f0caf99c989f5ed224cdbb7af2f3609a49->enter($__internal_63279b418e2571309638303a652927f0caf99c989f5ed224cdbb7af2f3609a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "script_boot.html.twig"));

        // line 1
        echo "<script>
  if (typeof app === 'undefined') {
      var app = {};
  }
  app.version = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';

  ";
        // line 10
        $context["crontabNextExecutedTime"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getNextExecutedTime();
        // line 11
        echo "  ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.disable_web_crontab", 0) && (($context["crontabNextExecutedTime"] ?? $this->getContext($context, "crontabNextExecutedTime")) > 0))) {
            // line 12
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, ($context["crontabNextExecutedTime"] ?? $this->getContext($context, "crontabNextExecutedTime")), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 13
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crontab_web");
                echo "';
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  var CLOUD_FILE_SERVER = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 19
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.renren_key", ""))), "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")));
        // line 29
        echo ";

  app.arguments = {};
  ";
        // line 32
        if (array_key_exists("script_controller", $context)) {
            // line 33
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, ($context["script_controller"] ?? $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 35
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 36
            echo "    app.arguments = ";
            echo twig_jsonencode_filter(($context["script_arguments"] ?? $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 38
        echo "  
  app.scripts = ";
        // line 39
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";

  app.uploadUrl = '";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkCdn = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn"), "html", null, true);
        echo "';
  app.lang = '";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>

<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("jstranslation_js", array("domain" => "js"));
        echo "\"></script>

";
        // line 51
        $this->loadTemplate("js_loader.html.twig", "script_boot.html.twig", 51)->display($context);
        // line 52
        echo "
<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
";
        
        $__internal_63279b418e2571309638303a652927f0caf99c989f5ed224cdbb7af2f3609a49->leave($__internal_63279b418e2571309638303a652927f0caf99c989f5ed224cdbb7af2f3609a49_prof);

    }

    public function getTemplateName()
    {
        return "script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  133 => 51,  128 => 49,  124 => 48,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  97 => 39,  94 => 38,  88 => 36,  85 => 35,  79 => 33,  77 => 32,  72 => 29,  70 => 19,  65 => 17,  62 => 16,  59 => 15,  53 => 13,  50 => 12,  47 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
  if (typeof app === 'undefined') {
      var app = {};
  }
  app.version = '{{ asset_version('/') }}';
  app.httpHost = '{{ app.request.getSchemeAndHttpHost() }}';
  app.basePath = '{{ app.request.getBasePath() }}';
  app.theme = '{{ setting(\"theme.uri\"|default(\"default\")) }}';

  {% set crontabNextExecutedTime = crontab_next_executed_time() %}
  {% if not setting('magic.disable_web_crontab', 0) and crontabNextExecutedTime > 0  %}
    {% if date(crontabNextExecutedTime|date('Y-m-d H:i:s')) < date() %}
      app.scheduleCrontab = '{{ path('crontab_web') }}';
    {% endif %}
  {% endif %}

  var CLOUD_FILE_SERVER = \"{{ setting('developer.cloud_file_server', '') }}\"; 

  app.config = {{
    {
      api:{
        weibo:{key:setting('login_bind.weibo_key', '')},
        qq:{key:setting('login_bind.qq_key', '')},
        douban:{key:setting('login_bind.douban_key', '')},
        renren:{key:setting('login_bind.renren_key', '')}
      },
      loading_img_path: asset('assets/img/default/loading.gif'),
    }|json_encode|raw
  }};

  app.arguments = {};
  {% if script_controller is defined %}
    app.controller = '{{ script_controller }}';
  {% endif %}
  {% if script_arguments is defined %}
    app.arguments = {{ script_arguments|json_encode|raw }};
  {% endif %}
  
  app.scripts = {{ export_scripts()|default(null)|json_encode|raw }};

  app.uploadUrl = '{{ path(\"file_upload\") }}';
  app.imgCropUrl = '{{ path(\"file_img_crop\") }}';
  app.lessonCopyEnabled = '{{ setting(\"course.copy_enabled\",\"0\") }}';
  app.cloudSdkCdn = '{{ setting(\"developer.cloud_sdk_cdn\") }}';
  app.lang = '{{ app.request.locale }}';
</script>

<script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>
<script src=\"{{ url('jstranslation_js', {'domain': 'js'}) }}\"></script>

{% include 'js_loader.html.twig' %}

<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
", "script_boot.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/script_boot.html.twig");
    }
}
