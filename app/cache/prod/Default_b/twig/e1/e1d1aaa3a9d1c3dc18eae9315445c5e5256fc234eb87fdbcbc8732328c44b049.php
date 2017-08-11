<?php

/* course/header/header-for-member-layout.html.twig */
class __TwigTemplate_527a5be488b030a55260186cdfd1e6cc0c458e83c27d58822634ac78b178c80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-member-layout.html.twig", 1);
        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_course_header_info($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (((($this->getAttribute(($context["member"] ?? null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 5
            echo "  <div class=\"alert alert-warning\">
    您的退款申请已提交，请等待管理员的处理。
    <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
  </div>
  ";
        }
    }

    // line 12
    public function block_course_member_exit($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        if ((((($this->getAttribute(($context["member"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "id", array()), false)) : (false)) && ($this->getAttribute(($context["member"] ?? null), "role", array()) != "teacher")) &&  !(($this->getAttribute(($context["course"] ?? null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "parentId", array()), 0)) : (0)))) {
            // line 14
            echo "\t\t<li>
\t\t  <a class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_refund", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\" ><i class=\"es-icon es-icon-exit\"></i>
\t\t  </a>
\t\t</li>
\t";
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-member-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  50 => 13,  47 => 12,  39 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-member-layout.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/header-for-member-layout.html.twig");
    }
}
