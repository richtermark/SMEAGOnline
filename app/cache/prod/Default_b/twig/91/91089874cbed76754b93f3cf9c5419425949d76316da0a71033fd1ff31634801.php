<?php

/* course/header/header-for-member.html.twig */
class __TwigTemplate_ea748cdd1df7a021d10e3fc7f17cc376ab65ac487d606de20123efb16e1d761c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-for-member-layout.html.twig", "course/header/header-for-member.html.twig", 1);
        $this->blocks = array(
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-for-member-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_type"] = "member";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_course_heard_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        if (($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "freeMode")) {
            // line 8
            echo "\t<!-- 2、加入后：自由式学习 -->
\t\t";
            // line 9
            $this->loadTemplate("course/header/free-mode-header-for-member.html.twig", "course/header/header-for-member.html.twig", 9)->display($context);
            // line 10
            echo "\t";
        } elseif (($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "lockMode")) {
            // line 11
            echo "\t<!-- 3、加入后：任务式学习 -->
\t\t";
            // line 12
            $this->loadTemplate("course/header/lock-mode-header-for-member.html.twig", "course/header/header-for-member.html.twig", 12)->display($context);
            // line 13
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  50 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-member.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/header/header-for-member.html.twig");
    }
}
