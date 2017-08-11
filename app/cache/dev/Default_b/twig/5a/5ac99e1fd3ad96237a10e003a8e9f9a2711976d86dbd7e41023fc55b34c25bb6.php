<?php

/* old-script_boot.html.twig */
class __TwigTemplate_a0305949e8f365f4783b80c84ad07f3e2403d4d8cf9d1e11e264426e58f8a804 extends Twig_Template
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
        $__internal_13335a9dfcc56d70a77835a06069af04a264d2a329cec9ab21f1d6fe363be92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13335a9dfcc56d70a77835a06069af04a264d2a329cec9ab21f1d6fe363be92c->enter($__internal_13335a9dfcc56d70a77835a06069af04a264d2a329cec9ab21f1d6fe363be92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "old-script_boot.html.twig"));

        // line 1
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCdn(), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 8
        echo twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getJsPaths());
        echo ";

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
  window.CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  window.CLOUD_FILE_SERVER = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 20
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.renren_key", ""))), "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")));
        // line 30
        echo ";

  app.arguments = {};
  ";
        // line 33
        if (array_key_exists("script_controller", $context)) {
            // line 34
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, ($context["script_controller"] ?? $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 36
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 37
            echo "    app.arguments = ";
            echo twig_jsonencode_filter(($context["script_arguments"] ?? $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 39
        echo "  
  app.scripts = ";
        // line 40
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkCdn = '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn"), "html", null, true);
        echo "';
  app.mainScript = '";
        // line 46
        echo twig_escape_filter($this->env, ($context["script_main"] ?? $this->getContext($context, "script_main")), "html", null, true);
        echo "';
  app.lang = '";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "js"));
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
        
        $__internal_13335a9dfcc56d70a77835a06069af04a264d2a329cec9ab21f1d6fe363be92c->leave($__internal_13335a9dfcc56d70a77835a06069af04a264d2a329cec9ab21f1d6fe363be92c_prof);

    }

    public function getTemplateName()
    {
        return "old-script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  108 => 40,  105 => 39,  99 => 37,  96 => 36,  90 => 34,  88 => 33,  83 => 30,  81 => 20,  76 => 18,  72 => 16,  69 => 15,  63 => 13,  60 => 12,  57 => 11,  55 => 10,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  26 => 3,  22 => 1,);
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
  var app = {};
  app.debug = {% if app.debug %}true{% else %}false{% endif %};
  app.version = '{{ asset_version('/') }}';
  app.httpHost = '{{ app.request.getSchemeAndHttpHost() }}';
  app.basePath = '{{ cdn() }}';
  app.theme = '{{ setting(\"theme.uri\"|default(\"default\")) }}';
  app.jsPaths = {{ js_paths()|json_encode|raw }};

  {% set crontabNextExecutedTime = crontab_next_executed_time() %}
  {% if not setting('magic.disable_web_crontab', 0) and crontabNextExecutedTime > 0 %}
    {% if date(crontabNextExecutedTime|date('Y-m-d H:i:s')) < date() %}
      app.scheduleCrontab = '{{ path('crontab_web') }}';
    {% endif %}
  {% endif %}

  window.CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  window.CLOUD_FILE_SERVER = \"{{ setting('developer.cloud_file_server', '') }}\"; 

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
  
  app.uploadUrl = '{{path(\"file_upload\")}}';
  app.imgCropUrl = '{{path(\"file_img_crop\")}}';
  app.lessonCopyEnabled = '{{setting(\"course.copy_enabled\",\"0\")}}';
  app.cloudSdkCdn = '{{ setting(\"developer.cloud_sdk_cdn\") }}';
  app.mainScript = '{{ script_main }}';
  app.lang = '{{ app.request.locale }}';
</script>
<script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>
<script src=\"{{ url('bazinga_jstranslation_js', {'domain': 'js'}) }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs/2.2.1/sea.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs-style/1.0.2/seajs-style.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs-global-config.js') }}\"></script>
<script>
  seajs.use(app.mainScript);
</script>", "old-script_boot.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/old-script_boot.html.twig");
    }
}
