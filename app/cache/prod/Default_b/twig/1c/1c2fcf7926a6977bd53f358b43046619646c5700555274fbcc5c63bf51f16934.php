<?php

/* org/org-tree-select.html.twig */
class __TwigTemplate_ee7b5e2ae2043ad5043d907f34964eaa59cb471d6fd63e3fb9e90ab3ff0248b7 extends Twig_Template
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
            echo " 
  ";
            // line 3
            echo "  ";
            // line 4
            echo "  ";
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter(($context["modal"] ?? null), null)) : (null));
            // line 5
            echo "
  ";
            // line 7
            echo "  ";
            if ( !((array_key_exists("notLoadJs", $context)) ? (_twig_default_filter(($context["notLoadJs"] ?? null), false)) : (false))) {
                // line 8
                echo "     ";
                // line 9
                echo "    ";
                if ((((array_key_exists("seajsLoade", $context)) ? (_twig_default_filter(($context["seajsLoade"] ?? null), false)) : (false)) && (($context["modal"] ?? null) == "modal"))) {
                    // line 10
                    echo "       <script>app.load('topxiawebbundle/controller/widget/category-select')</script> 
    ";
                } elseif ((                // line 11
($context["modal"] ?? null) == "modal")) {
                    // line 12
                    echo "      ";
                    $this->loadTemplate("seajs_loader_compatible.html.twig", "org/org-tree-select.html.twig", 12)->display(array_merge($context, array("topxiawebbundle" => true)));
                    // line 13
                    echo "      <script>app.lazyLoad = function() { app.load('topxiawebbundle/controller/widget/category-select') };</script>
    ";
                } else {
                    // line 15
                    echo "      ";
                    $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/widget/category-select");
                    // line 16
                    echo "      ";
                    $this->loadTemplate("seajs_loader_compatible.html.twig", "org/org-tree-select.html.twig", 16)->display(array_merge($context, array("topxiawebbundle" => true)));
                    // line 17
                    echo "    ";
                }
                // line 18
                echo "  ";
            }
            // line 19
            echo "
  ";
            // line 20
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter(($context["colmd"] ?? null), 8)) : (8));
            // line 21
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter(($context["lablecolmd"] ?? null), 2)) : (2));
            // line 22
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter(($context["nocolmd"] ?? null), false)) : (false));
            // line 23
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter(($context["inputClass"] ?? null), "")) : (""));
            echo " 

  ";
            // line 25
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter(($context["orgCode"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array())));
            // line 26
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) ? (null) : (($context["currentOrgCode"] ?? null)))));
            // line 27
            echo "  
    <div class=\"form-group ";
            // line 28
            if ((($context["modal"] ?? null) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 29
            if ((($context["modal"] ?? null) != "list")) {
                // line 30
                echo "      <label class=\"";
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["lablecolmd"] ?? null), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("组织机构"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 31
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 33
            echo "      
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 34
            echo twig_escape_filter($this->env, ($context["inputClass"] ?? null), "html", null, true);
            echo "\">
        <option value=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentOrgTree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 37
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == ($context["currentOrgCode"] ?? null))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </select>

      ";
            // line 41
            if ((($context["modal"] ?? null) != "list")) {
                // line 42
                echo "      </div>
      ";
            }
            // line 44
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "org/org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 44,  163 => 42,  161 => 41,  157 => 39,  132 => 37,  128 => 36,  122 => 35,  118 => 34,  115 => 33,  106 => 31,  96 => 30,  94 => 29,  88 => 28,  85 => 27,  82 => 26,  80 => 25,  74 => 23,  71 => 22,  68 => 21,  66 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  51 => 15,  47 => 13,  44 => 12,  42 => 11,  39 => 10,  36 => 9,  34 => 8,  31 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/org-tree-select.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/org/org-tree-select.html.twig");
    }
}
