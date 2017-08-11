<?php

/* admin/message/index.html.twig */
class __TwigTemplate_91d69108d6a6e9967b286cb686e4d21f86b5c177b09da9d69c153d2d1b75be3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/message/index.html.twig", 1);
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
        $context["menu"] = "admin_message";
        // line 4
        $context["script_controller"] = "message/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"well well-sm\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\"
               class=\"form-control\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人用户名"), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"content\" name=\"content\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\"
               class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信内容关键词"), "html", null, true);
        echo "\">
      </div>

      <button class=\"btn btn-primary\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    </form>
  </div>

  <div id=\"message-table-container\">

  <table class=\"table table-striped table-hover\" id=\"message-table\">
    <thead>
      <tr >
        <th width=\"10%\"> <input type=\"checkbox\"  data-role=\"batch-select\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收信人"), "html", null, true);
        echo "</th>
        <th width=\"45%\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
        echo "</th>
        <th width=\"15%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送时间"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 45
        if (($context["messages"] ?? null)) {
            // line 46
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 47
                echo "          <tr class=\"message-tr\" id=\"message-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\">
            <td><input value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\" data-role=\"batch-item\">
              ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "user_link", array(0 => $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["message"], "fromId", array()), array(), "array")), "method"), "html", null, true);
                echo "
            </td>

            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "user_link", array(0 => $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["message"], "toId", array()), array(), "array")), "method"), "html", null, true);
                echo " </td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
                // line 55
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["message"], "content", array()), 60);
                echo " <span class=\"trigger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(展开)"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"long-text\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true);
                echo " <span class=\"trigger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(收起)"), "html", null, true);
                echo "</span></div>
              </div>
            </td>
            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
        } else {
            // line 64
            echo "        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无私信记录"), "html", null, true);
            echo "</div>
          </td>
        </tr>
      ";
        }
        // line 70
        echo "
      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
        echo "\"
              data-url=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_message_delete_messages");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "
      </button>
    </div>

  </div>

  <div>
    ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "admin/message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 83,  193 => 76,  189 => 75,  185 => 74,  179 => 70,  172 => 66,  168 => 64,  165 => 63,  156 => 60,  148 => 57,  141 => 55,  135 => 52,  129 => 49,  125 => 48,  120 => 47,  115 => 46,  113 => 45,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  82 => 29,  76 => 26,  72 => 25,  65 => 21,  61 => 20,  52 => 16,  42 => 11,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/message/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/message/index.html.twig");
    }
}
