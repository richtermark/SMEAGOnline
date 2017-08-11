<?php

/* review/widget/review-form.html.twig */
class __TwigTemplate_242aa0c2589c5a8416f9f6c8ecf24d78e1f39366eb0b64370ee99e014f86b164 extends Twig_Template
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
        $context["reviewSaveUrl"] = ((array_key_exists("reviewSaveUrl", $context)) ? (_twig_default_filter(($context["reviewSaveUrl"] ?? null), "")) : (""));
        // line 2
        $context["userReview"] = ((array_key_exists("userReview", $context)) ? (_twig_default_filter(($context["userReview"] ?? null), null)) : (null));
        // line 3
        echo "
<form id=\"review-form\" method=\"post\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["reviewSaveUrl"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["userReview"] ?? null) || (($context["selectedCourseId"] ?? null) != $this->getAttribute(($context["course"] ?? null), "id", array())))) {
            echo "style=\"display:none;\"";
        }
        echo ">
  <div class=\"form-group controls\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请打分："), "html", null, true);
        echo " <span data-rating=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["userReview"] ?? null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userReview"] ?? null), "rating", array()), 0)) : (0)), "html", null, true);
        echo "\" data-img-path=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
        echo "\" class=\"rating-btn\"></span>
    <input type=\"hidden\" name=\"rating\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["userReview"] ?? null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userReview"] ?? null), "rating", array()), 0)) : (0)), "html", null, true);
        echo "\">
  </div>

  <div class=\"form-group controls\">
    <textarea class=\"form-control\" rows=\"8\" data-display=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价详细内容"), "html", null, true);
        echo "\" name=\"content\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["userReview"] ?? null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userReview"] ?? null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
  </div>

  <div class=\"form-group clearfix\">
    <span class=\"color-success pull-left js-review-remind\" style=\"display: none;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价已保存！"), "html", null, true);
        echo "</span>
    <a href=\"javascript:;\" class=\"btn btn-primary pull-right js-btn-save\" data-loading-text=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存"), "html", null, true);
        echo "...\" autocomplete=\"off\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</a>
    <a href=\"javascript:;\" class=\"btn btn-link pull-right js-hide-review-form\" ";
        // line 17
        if (($context["userReview"] ?? null)) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</a>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "review/widget/review-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  69 => 17,  63 => 16,  59 => 15,  50 => 11,  43 => 7,  35 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "review/widget/review-form.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/review/widget/review-form.html.twig");
    }
}
