<?php

/* admin/edu-cloud/overview/index.html.twig */
class __TwigTemplate_aa3cc51a5158d323e2b0eea5b36c406aec80baf9ebcb326df19caca37c2942f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/edu-cloud/overview/index.html.twig", 1);
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
        $context["menu"] = "admin_my_cloud_overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        if ((($this->getAttribute(($context["overview"] ?? null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["overview"] ?? null), "error", array()), "")) : (""))) {
            // line 7
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/not-access.html.twig", "admin/edu-cloud/overview/index.html.twig", 7)->display($context);
        } elseif (($this->getAttribute(        // line 8
($context["overview"] ?? null), "enabled", array()) == false)) {
            // line 9
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/disabled.html.twig", "admin/edu-cloud/overview/index.html.twig", 9)->display($context);
        } elseif ((($this->getAttribute(        // line 10
($context["overview"] ?? null), "accessCloud", array()) == false) || $this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial())) {
            // line 11
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/not-access.html.twig", "admin/edu-cloud/overview/index.html.twig", 11)->display($context);
        } else {
            // line 13
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/normal-use.html.twig", "admin/edu-cloud/overview/index.html.twig", 13)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/overview/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/edu-cloud/overview/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/edu-cloud/overview/index.html.twig");
    }
}
