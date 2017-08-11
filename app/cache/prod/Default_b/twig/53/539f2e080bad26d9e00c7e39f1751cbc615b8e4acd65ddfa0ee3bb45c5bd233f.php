<?php

/* admin/plugin-upgrade-notify-modal.html.twig */
class __TwigTemplate_e4f51eb24dc8dae9392e2df787c75f438ec5976d121e567221107cf976c23da9 extends Twig_Template
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
        $context["current_route"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
";
        // line 3
        if ((((($context["current_route"] ?? null) != "admin_app_upgrades") && $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isSuperAdmin", array(), "method"))) {
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
            if ( !twig_test_empty(($context["notifies"] ?? null))) {
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
                $context['_seq'] = twig_ensure_traversable(($context["notifies"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["apps"]) {
                    // line 20
                    echo "                  <p class=\"color-primary mbl mtl\">请即刻升级以下";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["dispalys"] ?? null), $context["type"], array(), "array"), "html", null, true);
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
        return array (  91 => 33,  83 => 27,  76 => 25,  67 => 23,  63 => 22,  57 => 20,  53 => 19,  48 => 17,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/plugin-upgrade-notify-modal.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/plugin-upgrade-notify-modal.html.twig");
    }
}
