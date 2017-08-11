<?php

/* admin/plugin-upgrade-notify-modal.html.twig */
class __TwigTemplate_1359e10c731337c4b18fab96af02ad5f1b1f3cc3a59802b391e79744f7b19560 extends Twig_Template
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
        $__internal_83bcd1cd8f6c067511411ed6b992c217df94e2f331557f9cecf407c2a546c561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bcd1cd8f6c067511411ed6b992c217df94e2f331557f9cecf407c2a546c561->enter($__internal_83bcd1cd8f6c067511411ed6b992c217df94e2f331557f9cecf407c2a546c561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/plugin-upgrade-notify-modal.html.twig"));

        // line 1
        $context["current_route"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
";
        // line 3
        if ((((($context["current_route"] ?? $this->getContext($context, "current_route")) != "admin_app_upgrades") && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 4
            echo "  ";
            $context["notifies"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->pluginUpdateNotify();
            // line 5
            echo "
  ";
            // line 6
            $context["dispalys"] = array("plugin" => "应用", "theme" => "主题");
            // line 7
            echo "  ";
            if ( !twig_test_empty(($context["notifies"] ?? $this->getContext($context, "notifies")))) {
                // line 8
                echo "    <div class=\"modal js-update-modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">升级引导</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"update-redmine-body\">
              <img class=\"pbm img-responsive\" src='";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/course-8-update.jpg"), "html", null, true);
                echo "'>
              <div class=\"mll mtl mrl clearfix\">
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notifies"] ?? $this->getContext($context, "notifies")));
                foreach ($context['_seq'] as $context["type"] => $context["apps"]) {
                    // line 20
                    echo "                  <p class=\"color-primary mbl mtl\">请即刻升级以下";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["dispalys"] ?? $this->getContext($context, "dispalys")), $context["type"], array(), "array"), "html", null, true);
                    echo "，否则会影响到网站的正常使用</p>
                  <div class=\"clearfix\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["apps"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                        // line 23
                        echo "                      <p class=\"color-dark\" style=\"float:left;width:33.33%\"><span class=\"mrm\">●</span>";
                        echo twig_escape_filter($this->env, $context["app"], "html", null, true);
                        echo "</p>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['apps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                <p class=\"color-primary mbl mtl\">非官方应用暂不支持8.0，请等待第三方开发者升级</p>

              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <a type=\"button\" class=\"btn btn-primary\" href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
                echo "\">去升级</a>
          </div>
        </div>
      </div>
    </div>
  ";
            }
        }
        
        $__internal_83bcd1cd8f6c067511411ed6b992c217df94e2f331557f9cecf407c2a546c561->leave($__internal_83bcd1cd8f6c067511411ed6b992c217df94e2f331557f9cecf407c2a546c561_prof);

    }

    public function getTemplateName()
    {
        return "admin/plugin-upgrade-notify-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  86 => 27,  79 => 25,  70 => 23,  66 => 22,  60 => 20,  56 => 19,  51 => 17,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_route = app.request.get('_route') %}

{% if current_route != 'admin_app_upgrades' and app.user and app.user.isSuperAdmin() %}
  {% set notifies = plugin_update_notify() %}

  {% set dispalys = {plugin: '应用', theme: '主题'} %}
  {% if not notifies is empty %}
    <div class=\"modal js-update-modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">升级引导</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"update-redmine-body\">
              <img class=\"pbm img-responsive\" src='{{ asset('bundles/topxiaadmin/img/course-8-update.jpg') }}'>
              <div class=\"mll mtl mrl clearfix\">
                {% for type, apps in notifies %}
                  <p class=\"color-primary mbl mtl\">请即刻升级以下{{ dispalys[type] }}，否则会影响到网站的正常使用</p>
                  <div class=\"clearfix\">
                    {% for app in apps %}
                      <p class=\"color-dark\" style=\"float:left;width:33.33%\"><span class=\"mrm\">●</span>{{ app }}</p>
                    {% endfor  %}
                  </div>
                {% endfor %}
                <p class=\"color-primary mbl mtl\">非官方应用暂不支持8.0，请等待第三方开发者升级</p>

              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <a type=\"button\" class=\"btn btn-primary\" href=\"{{ path('admin_app_upgrades') }}\">去升级</a>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}
", "admin/plugin-upgrade-notify-modal.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/plugin-upgrade-notify-modal.html.twig");
    }
}
