<?php

/* admin/role/templates/tabs.html.twig */
class __TwigTemplate_e074b6ecfaf7333ea89750dde3007259133385400a9e575c0222953b41580eda extends Twig_Template
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
        $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter(($context["tabMenus"] ?? null), null)) : (null)) && (twig_length_filter($this->env, ($context["tabMenus"] ?? null)) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabMenus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 5
                    echo "
      ";
                    // line 6
                    if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                        // line 7
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                        // line 8
                        echo "      ";
                    } else {
                        // line 9
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 10
                        echo "      ";
                    }
                    // line 11
                    echo "
      <li ";
                    // line 12
                    if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
        <a
            title=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
            class=\"";
                    // line 15
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                    echo "\"
            href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\"
        >
          ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
        </a>
      </li>

    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/role/templates/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  83 => 23,  71 => 18,  66 => 16,  62 => 15,  58 => 14,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/tabs.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/tabs.html.twig");
    }
}
