<?php

/* admin/macro.html.twig */
class __TwigTemplate_738225faac386ed720429fef263606110fde6c91c373b8c7022010a46ec0d13f extends Twig_Template
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
        // line 8
        echo "
";
        // line 31
        echo "
";
    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if (($context["user"] ?? null)) {
                // line 3
                echo "\t\t<a ";
                if (($context["class"] ?? null)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户已删除"), "html", null, true);
                echo "</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 14
            echo "\t    ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 15
            echo "\t    ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 18
                echo "\t        ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 19
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 20
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 21
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 22
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 23
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 24
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "  ";
            if (((($this->getAttribute(($context["paginator"] ?? null), "lastPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) : ("")) > 1)) {
                // line 34
                echo "    <nav class=\"admin-pagination ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 36
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()))) {
                    // line 37
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 40
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 45
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 48
                echo "      </ul>
      <span class=\"page-num\">
\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) - 1) * $this->getAttribute(($context["paginator"] ?? null), "perPageCount", array())) + 1), "html", null, true);
                echo "
      \t-
\t      ";
                // line 52
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 53
                    echo "\t        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "itemCount", array()), "html", null, true);
                    echo "
\t      ";
                } else {
                    // line 55
                    echo "\t        ";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) * $this->getAttribute(($context["paginator"] ?? null), "perPageCount", array())), "html", null, true);
                    echo "
\t      ";
                }
                // line 57
                echo "\t      / ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "itemCount", array()), "html", null, true);
                echo "
\t    </span>
    </nav>
    
  ";
            }
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
        return "admin/macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 57,  246 => 55,  240 => 53,  238 => 52,  233 => 50,  229 => 48,  224 => 46,  219 => 45,  217 => 44,  214 => 43,  199 => 41,  194 => 40,  189 => 38,  184 => 37,  182 => 36,  176 => 34,  173 => 33,  160 => 32,  143 => 28,  137 => 26,  131 => 24,  129 => 23,  124 => 22,  122 => 21,  117 => 20,  115 => 19,  110 => 18,  108 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  94 => 12,  91 => 11,  88 => 10,  76 => 9,  57 => 5,  43 => 3,  40 => 2,  27 => 1,  22 => 31,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/macro.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/macro.html.twig");
    }
}
