<?php

/* admin/default/cloud-notice.html.twig */
class __TwigTemplate_ba7a8399441ee3b1bd04b997d898bc10455953ada7d724439f522a08e6912445 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      <p>
        &nbsp;&nbsp;";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎使用，试用将于"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\"> 
          ";
            // line 12
            if ($this->getAttribute(($context["trialTime"] ?? null), "endTime", array(), "any", true, true)) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["trialTime"] ?? null), "endTime", array()), "Y-m-d"), "html", null, true);
                echo " 
          ";
            } else {
                // line 14
                echo " 
            ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未知时间"), "html", null, true);
                echo "
          ";
            }
            // line 17
            echo "        </span> 
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("到期,剩余"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\">
          ";
            // line 20
            if ($this->getAttribute(($context["trialTime"] ?? null), "remainDays", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["trialTime"] ?? null), "remainDays", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未知"), "html", null, true);
            }
            // line 21
            echo "        </span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("天。"), "html", null, true);
            echo "
      </p>
      <p>
        &nbsp; ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您可以联系销售人员购买授权版本，或者延长试用期限。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
            echo "
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 36
            echo "    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站长公告"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notices"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 44
                echo "            <li>
              <a class=\"link-primary\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                echo "</a>
              ";
                // line 47
                echo "            </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "              <div class=\"empty\"> 暂无公告</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </ul>
        </div>
      </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/default/cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  126 => 49,  120 => 47,  114 => 45,  111 => 44,  106 => 43,  99 => 39,  94 => 36,  76 => 24,  69 => 21,  61 => 20,  56 => 18,  53 => 17,  48 => 15,  45 => 14,  39 => 13,  37 => 12,  32 => 10,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/cloud-notice.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/default/cloud-notice.html.twig");
    }
}
