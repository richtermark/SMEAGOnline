<?php

/* default/ie8-alert.html.twig */
class __TwigTemplate_0ed905cfb7aea0415eebc661a50c299cb48602e64d346f23de83e892979d297a extends Twig_Template
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
        $__internal_f6feaadd2fdd86ac47351084cd34e0dbf0e9de89c162fd1e0021e35aafa55bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6feaadd2fdd86ac47351084cd34e0dbf0e9de89c162fd1e0021e35aafa55bf7->enter($__internal_f6feaadd2fdd86ac47351084cd34e0dbf0e9de89c162fd1e0021e35aafa55bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/ie8-alert.html.twig"));

        // line 1
        echo "<style>
  .lt-ie9 {
    overflow: hidden;
  }
  .ie-mask {
    z-index: 999999;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    filter: alpha(opacity=50);
    opacity: 0.5;
    background: #000;
  }
  .ie-alert-wrap {
    position: absolute;
    z-index: 1000000;
    margin: -200px auto 0;
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
  }
  .ie-alert {
    width: 514px;
    height: 397px;
    margin: 0 auto;
  }
  .ie-alert__chrome,
  .ie-alert__firefox {
    position: absolute;
    z-index: 1000001;
    display: block;
    bottom: 48px;
    width: 60px;
    height: 80px;
  }
  .ie-alert__chrome {
    left: 50%;
    margin-left: -80px;
  }
  .ie-alert__firefox {
    right: 50%;
    margin-right: -80px;
  }
</style>
<div class=\"ie-mask\"></div>
<div class=\"ie-alert-wrap\">
  <div class=\"ie-alert\" style=\"background:url('";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/browser/browser_update.png"), "html", null, true);
        echo "')\">
    <a href=\"http://www.baidu.com/s?wd=%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8\" target=\"_blank\" class=\"ie-alert__chrome\"></a>
    <a href=\"http://firefox.com.cn/download/\" target=\"_blank\" class=\"ie-alert__firefox\"></a>
  </div>
</div>

";
        
        $__internal_f6feaadd2fdd86ac47351084cd34e0dbf0e9de89c162fd1e0021e35aafa55bf7->leave($__internal_f6feaadd2fdd86ac47351084cd34e0dbf0e9de89c162fd1e0021e35aafa55bf7_prof);

    }

    public function getTemplateName()
    {
        return "default/ie8-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 50,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
  .lt-ie9 {
    overflow: hidden;
  }
  .ie-mask {
    z-index: 999999;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    filter: alpha(opacity=50);
    opacity: 0.5;
    background: #000;
  }
  .ie-alert-wrap {
    position: absolute;
    z-index: 1000000;
    margin: -200px auto 0;
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
  }
  .ie-alert {
    width: 514px;
    height: 397px;
    margin: 0 auto;
  }
  .ie-alert__chrome,
  .ie-alert__firefox {
    position: absolute;
    z-index: 1000001;
    display: block;
    bottom: 48px;
    width: 60px;
    height: 80px;
  }
  .ie-alert__chrome {
    left: 50%;
    margin-left: -80px;
  }
  .ie-alert__firefox {
    right: 50%;
    margin-right: -80px;
  }
</style>
<div class=\"ie-mask\"></div>
<div class=\"ie-alert-wrap\">
  <div class=\"ie-alert\" style=\"background:url('{{asset(\"static-dist/app/img/browser/browser_update.png\")}}')\">
    <a href=\"http://www.baidu.com/s?wd=%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8\" target=\"_blank\" class=\"ie-alert__chrome\"></a>
    <a href=\"http://firefox.com.cn/download/\" target=\"_blank\" class=\"ie-alert__firefox\"></a>
  </div>
</div>

", "default/ie8-alert.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/ie8-alert.html.twig");
    }
}
