<?php

/* admin/role/templates/group-button.html.twig */
class __TwigTemplate_77bb4cfbcf1b1221dec82772c9ea2640795839a0e73fb037338c9296445f3270 extends Twig_Template
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
        $context["self_macro"] = $this->loadTemplate("admin/role/templates/macro.html.twig", "admin/role/templates/group-button.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions(($context["parentCode"] ?? null), ((array_key_exists("group", $context)) ? (_twig_default_filter(($context["group"] ?? null), null)) : (null)));
        // line 4
        echo "
";
        // line 5
        $context["dropdownMenusShow"] = false;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 8
            echo "    ";
            if ($this->getAttribute($context["permission"], "visable", array(), "any", true, true)) {
                // line 9
                echo "      ";
                if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visable", array()))) {
                    // line 10
                    echo "        ";
                    $context["dropdownMenusShow"] = true;
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "      ";
                $context["dropdownMenusShow"] = true;
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        if ((($context["dropdownMenusShow"] ?? null) && ((array_key_exists("permissions", $context)) ? (_twig_default_filter(($context["permissions"] ?? null), null)) : (null)))) {
            // line 18
            echo "<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 23
                echo "    <li>
      ";
                // line 24
                if ($this->getAttribute($context["permission"], "visable", array(), "any", true, true)) {
                    // line 25
                    echo "        ";
                    if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visable", array()))) {
                        // line 26
                        echo "          ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                        echo "
        ";
                    }
                    // line 28
                    echo "      ";
                } else {
                    // line 29
                    echo "        ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                    echo "
      ";
                }
                // line 31
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/role/templates/group-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  101 => 31,  95 => 29,  92 => 28,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  74 => 22,  68 => 18,  66 => 17,  63 => 16,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/group-button.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/group-button.html.twig");
    }
}
