<?php

/* admin/default/system-status.html.twig */
class __TwigTemplate_458455e31fe89c6d26ff3d93b19ce7edca52be010e9d8f9e560be884e0875cee extends Twig_Template
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
        echo "<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">系统版本</div>
    <div class=\"info\">
      ";
        // line 5
        if (($context["mainAppUpgrade"] ?? null)) {
            // line 6
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mainAppUpgrade"] ?? null), "package", array()), "fromVersion", array()), "html", null, true);
            echo "</span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> 有更新</a>
      ";
        } else {
            // line 10
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 11
            echo twig_escape_filter($this->env, twig_constant("AppBundle\\System::VERSION"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">网校应用</div>
    <div class=\"info\">
      ";
        // line 18
        if ((($context["upgradeAppCount"] ?? null) == 0)) {
            // line 19
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已更新</span>
      ";
        } else {
            // line 22
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> ";
            echo twig_escape_filter($this->env, ($context["upgradeAppCount"] ?? null), "html", null, true);
            echo " 个未更新</a>
      ";
        }
        // line 25
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">教育云服务</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        ";
        // line 32
        if ((($context["disabledCloudServiceCount"] ?? null) > 0)) {
            // line 33
            echo "          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
            echo "\">";
            echo twig_escape_filter($this->env, ($context["disabledCloudServiceCount"] ?? null), "html", null, true);
            echo "个未开启</a>
        ";
        } else {
            // line 36
            echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">已开启</span>
        ";
        }
        // line 39
        echo "        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">云视频</span>
              ";
        // line 43
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 44
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 48
        echo "            </li>
            <li>
              <span class=\"key\">云文档</span>
              ";
        // line 51
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 52
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 56
        echo "            </li>
            <li>
              <span class=\"key\">云直播</span>
              ";
        // line 59
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 60
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 62
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_edulive_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 64
        echo "            </li>
            <li>
              <span class=\"key\">云短信</span>
              ";
        // line 67
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "0") == "1")) {
            // line 68
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 70
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 72
        echo "            </li>
            <li>
              <span class=\"key\">云搜索</span>
              ";
        // line 75
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 76
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 78
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 80
        echo "            </li>
            <li>
              <span class=\"key\">云问答</span>
              ";
        // line 83
        $context["cloud_consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_consult", "");
        // line 84
        echo "              ";
        if ((($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array()), 0)) : (0))) {
            // line 85
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 87
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_consult_setting");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 89
        echo "            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">移动客户端</div>
    <div class=\"info\">
      ";
        // line 98
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 99
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已开启</span>
      ";
        } else {
            // line 102
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\" class=\"text-lg link-underline text-danger\"> 未开启</a>
      ";
        }
        // line 105
        echo "    </div>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "admin/default/system-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 105,  224 => 103,  221 => 102,  216 => 99,  214 => 98,  203 => 89,  197 => 87,  193 => 85,  190 => 84,  188 => 83,  183 => 80,  177 => 78,  173 => 76,  171 => 75,  166 => 72,  160 => 70,  156 => 68,  154 => 67,  149 => 64,  143 => 62,  139 => 60,  137 => 59,  132 => 56,  126 => 54,  122 => 52,  120 => 51,  115 => 48,  109 => 46,  105 => 44,  103 => 43,  97 => 39,  92 => 36,  85 => 34,  82 => 33,  80 => 32,  71 => 25,  64 => 23,  61 => 22,  56 => 19,  54 => 18,  47 => 13,  42 => 11,  39 => 10,  34 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/system-status.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/system-status.html.twig");
    }
}
