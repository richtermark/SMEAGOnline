<?php

/* admin/category/modal.html.twig */
class __TwigTemplate_614309e80a1d84d10a0722571ae3cd0911832ae27bd8e62afef84588bc1cb5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "admin/category/modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute(($context["category"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑分类"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加分类"), "html", null, true);
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"category-creater-widget\">

\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        // line 9
        if ($this->getAttribute(($context["category"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute(($context["category"] ?? null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 24
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编码"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_checkcode", array("exclude" => $this->getAttribute(($context["category"] ?? null), "code", array()))), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必填，建议使用分类名称的英文单词或缩写作为编码。"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-description-field\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类描述"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<textarea class=\"form-control\" id=\"category-description-field\" style=\"height:100px;\" name=\"description\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t<div class=\"help-block\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("非必填"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图标"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<div id=\"category-icon-field\">
\t\t\t\t\t";
        // line 45
        if ($this->getAttribute(($context["category"] ?? null), "icon", array())) {
            // line 46
            echo "\t\t\t\t\t\t<img class=\"mbm\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "icon", array()), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "icon", array()), "html", null, true);
        echo "\">
\t\t\t\t<button id=\"category-icon-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#category-icon-field\"><i class=\"glyphicon glyphicon-picture\"></i></button>
\t\t\t\t<button ";
        // line 51
        if ( !$this->getAttribute(($context["category"] ?? null), "icon", array())) {
            echo "style=\"display:none;\"";
        }
        echo " id=\"category-icon-delete\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></button>
\t\t\t\t<div class=\"help-block\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许上传的图标文件格式为"), "html", null, true);
        echo "'pg, jpeg, gif, png</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"groupId\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "groupId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "parentId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
</div>

<script type=\"text/javascript\"> app.load('category/save-modal'); </script>
";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "\t";
        if ($this->getAttribute(($context["category"] ?? null), "id", array())) {
            // line 67
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => $this->getAttribute(($context["category"] ?? null), "id", array()))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
\t";
        } else {
            // line 69
            echo "
\t";
        }
        // line 71
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
\t<button id=\"category-create-btn\" data-submiting-text=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "admin/category/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 72,  179 => 71,  175 => 69,  167 => 67,  164 => 66,  161 => 65,  151 => 58,  147 => 57,  143 => 56,  136 => 52,  130 => 51,  125 => 49,  122 => 48,  116 => 46,  114 => 45,  108 => 42,  100 => 37,  96 => 36,  91 => 34,  83 => 29,  77 => 28,  72 => 26,  68 => 24,  61 => 13,  56 => 11,  47 => 9,  43 => 7,  40 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/category/modal.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/category/modal.html.twig");
    }
}
