<?php

/* site-hint.html.twig */
class __TwigTemplate_3214754b1ee52476e4924dec7ea41d7558102c0e007f7d229798c6bb7cb308a1 extends Twig_Template
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
        if (((($this->getAttribute(($context["app"] ?? null), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || (($context["hideSetupHint"] ?? null) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("email-setting.html.twig", "site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
            $asm89Key1 = $asm89CacheStrategy1->generateKey("layout/announcement", 600            );
            $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
            if ($asm89CacheBody1 === false) {
                ob_start();
                    // line 5
                    echo "\t\t";
                    $this->loadTemplate("announcement/announcement.html.twig", "site-hint.html.twig", 5)->display($context);
                    // line 6
                    echo "\t";
                
                $asm89CacheBody1 = ob_get_clean();
                $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
            }
            echo $asm89CacheBody1;
        }
    }

    public function getTemplateName()
    {
        return "site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site-hint.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/site-hint.html.twig");
    }
}
