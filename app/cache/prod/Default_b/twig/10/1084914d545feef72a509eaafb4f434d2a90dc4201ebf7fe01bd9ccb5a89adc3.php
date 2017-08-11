<?php

/* org/batch-update-org-btn.html.twig */
class __TwigTemplate_6f9536a39f137f171a2b7136be3c2a0a28a06a5897ca016a704d98ac54f97450 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/org/batch-org-btn");
            // line 3
            echo "  ";
            $this->loadTemplate("seajs_loader_compatible.html.twig", "org/batch-update-org-btn.html.twig", 3)->display(array_merge($context, array("topxiawebbundle" => true)));
            // line 4
            echo "\t";
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter(($context["generate"] ?? null), "generate")) : ("generate")) != "no-generate");
            // line 5
            echo "\t";
            if (($context["generate"] ?? null)) {
                // line 6
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
                echo "</label>
\t";
            }
            // line 9
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if (($context["generate"] ?? null)) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            echo twig_escape_filter($this->env, ($context["formId"] ?? null), "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter(($context["generate"] ?? null), false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_update_org", array("module" => ($context["module"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置组织机构"), "html", null, true);
            echo "</a>
\t";
            // line 10
            if (($context["generate"] ?? null)) {
                // line 11
                echo "\t  </div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "org/batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  56 => 10,  41 => 9,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/batch-update-org-btn.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/batch-update-org-btn.html.twig");
    }
}
