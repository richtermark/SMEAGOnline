<?php

/* admin/role/templates/side-bar.html.twig */
class __TwigTemplate_059d460a8f0ac91a57a5aa0d2d1f1e40e70a9a7ca3dc5e572491aed9c69719a4 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->groupedPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array())), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array())), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedPermissions"]) {
            // line 2
            echo "  <div class=\"list-group\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedPermissions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 4
                    echo "      ";
                    $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                    // line 5
                    echo "
      ";
                    // line 6
                    $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]);
                    // line 7
                    echo "      ";
                    if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 8
                        echo "        ";
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? null));
                        // line 9
                        echo "      ";
                    }
                    // line 10
                    echo "
      <a
          title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
          class=\"";
                    // line 13
                    echo twig_escape_filter($this->env, ($context["menuClass"] ?? null), "html", null, true);
                    echo "\"
          href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? null)), "html", null, true);
                    echo "\"
      >
        ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
      </a>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "admin/role/templates/side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  65 => 16,  60 => 14,  56 => 13,  52 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/side-bar.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/role/templates/side-bar.html.twig");
    }
}
