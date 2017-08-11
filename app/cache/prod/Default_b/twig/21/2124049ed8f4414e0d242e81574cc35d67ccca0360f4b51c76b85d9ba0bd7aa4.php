<?php

/* admin/system/site.html.twig */
class __TwigTemplate_50c514223ef84d21446e4eee99246181253061ae3808ef192c46fbeb0a573a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/site.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_message";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站名称"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站副标题"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站域名"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("以\"%http%://\"开头", array("%http%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站LOGO"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute(($context["site"] ?? null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute(($context["site"] ?? null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。网校logo设置后显示顶部导航左上角,"), "html", null, true);
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\">点击查看</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浏览器图标"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute(($context["site"] ?? null), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? null), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute(($context["site"] ?? null), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传ico格式的图标文件, 建议大小16*16或者32*32。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO关键词"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置多个关键词请用半角逗号\",\"隔开。"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO描述信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理员邮箱地址"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程内容版权方"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您可以填写网站名称或公司名称。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ICP备案号"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站统计分析代码部署"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("统计分析代码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">统计代码是网站统计软件发布的一段代码，用以统计添加统计代码的网站的数据。</p>
        <p class=\"help-block\">包括网站的访客来源，从哪个网页跳转到此网站，搜索什么关键词到网站，一共有多少人访问，每天多少人多少IP，平均访问时间是多少等等数据。</p>
        <p class=\"help-block\">统计分析工具可以分析网校访问趋势，以及根据数据做推广调整，优化网校资源，建议使用<a href=\"http://tongji.baidu.com\" target=\"_blank\">百度统计</a>、<a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>或者<a target=\"_blank\" href=\"http://www.umeng.com/\">CNZZ。</a></p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站点状态"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站状态"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 152
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("status", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开放"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute(($context["site"] ?? null), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站关闭公告"), "html", null, true);
        echo "</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码"), "html", null, true);
        echo "。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 173,  354 => 169,  344 => 162,  340 => 161,  334 => 158,  325 => 152,  319 => 149,  312 => 145,  299 => 135,  292 => 131,  286 => 128,  274 => 119,  268 => 116,  259 => 110,  255 => 109,  249 => 106,  240 => 100,  234 => 97,  225 => 91,  219 => 88,  210 => 82,  206 => 81,  200 => 78,  191 => 72,  187 => 71,  177 => 70,  169 => 67,  165 => 66,  155 => 63,  149 => 60,  140 => 54,  134 => 53,  124 => 52,  118 => 51,  114 => 50,  105 => 48,  99 => 45,  90 => 39,  86 => 38,  80 => 35,  71 => 29,  65 => 26,  56 => 20,  50 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/site.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/system/site.html.twig");
    }
}
