<?php

/* admin/category/tbody.html.twig */
class __TwigTemplate_fa8b67c54c3e14dca00257b965588aeeb2185d49e701f12607e61ef934b05517 extends Twig_Template
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
        echo "
<li id=\"category-table-body\" data-sort-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_sort");
        echo "\">
    ";
        // line 3
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this, "showCategoryTree", array(0 => ($context["categories"] ?? null), 1 => ($context["group"] ?? null), 2 => false), "method");
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"row empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无分类记录"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "</li>

";
        // line 10
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("category/tbody");
        // line 11
        echo "

";
    }

    // line 13
    public function getshowCategoryTree($__categories__ = null, $__group__ = null, $__isCollapseChildren__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "group" => $__group__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["categories"] ?? null), 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "            ";
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($context["category"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "children", array()), null)) : (null)));
                // line 17
                echo "            ";
                $context["isRoot"] = ($this->getAttribute($context["category"], "depth", array()) == 1);
                // line 18
                echo "            <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                echo ((( !($context["isRoot"] ?? null) && ($context["isCollapseChildren"] ?? null))) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 19
                echo (((($context["isParent"] ?? null) && ($context["isCollapseChildren"] ?? null))) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-7 name sort-handle\" style=\"padding-left: ";
                // line 20
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($context["category"], "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 21
                if (($context["isParent"] ?? null)) {
                    // line 22
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    echo ((($context["isCollapseChildren"] ?? null)) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 24
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-2 code\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-3 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">
                            <i class=\"glyphicon glyphicon-edit\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
                echo "
                        </a>
                        ";
                // line 33
                if (($this->getAttribute(($context["group"] ?? null), "depth", array()) > $this->getAttribute($context["category"], "depth", array()))) {
                    // line 34
                    echo "                            <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()), "groupId" => $this->getAttribute(($context["group"] ?? null), "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加子分类"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 36
                echo "
                    </div>
                </div>
                ";
                // line 39
                if (($context["isParent"] ?? null)) {
                    // line 40
                    echo "                    ";
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => ($context["group"] ?? null), 2 => ($context["isCollapseChildren"] ?? null)), "method");
                    echo "
                ";
                }
                // line 42
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/category/tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  157 => 42,  151 => 40,  149 => 39,  144 => 36,  136 => 34,  134 => 33,  129 => 31,  125 => 30,  120 => 28,  114 => 26,  110 => 24,  104 => 22,  102 => 21,  98 => 20,  94 => 19,  81 => 18,  78 => 17,  75 => 16,  71 => 15,  66 => 14,  52 => 13,  46 => 11,  44 => 10,  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/category/tbody.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/category/tbody.html.twig");
    }
}
