<?php

/* macro.html.twig */
class __TwigTemplate_f27755d58da62744e31df1e2daaf703ffc82fd65518cb6b9e834a2ff695667ca extends Twig_Template
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
        $__internal_2171d9ab626e525e99c399f9104be4550a9cbdbe4a8d94e80a01988425c2e686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2171d9ab626e525e99c399f9104be4550a9cbdbe4a8d94e80a01988425c2e686->enter($__internal_2171d9ab626e525e99c399f9104be4550a9cbdbe4a8d94e80a01988425c2e686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "macro.html.twig"));

        // line 73
        echo "
";
        // line 96
        echo "
";
        // line 117
        echo "
";
        // line 139
        echo "
";
        
        $__internal_2171d9ab626e525e99c399f9104be4550a9cbdbe4a8d94e80a01988425c2e686->leave($__internal_2171d9ab626e525e99c399f9104be4550a9cbdbe4a8d94e80a01988425c2e686_prof);

    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c6c9fb0f3ede83ffe391bb1e6d96b3c827d52139ed40aa57015be072989c5e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c6c9fb0f3ede83ffe391bb1e6d96b3c827d52139ed40aa57015be072989c5e30->enter($__internal_c6c9fb0f3ede83ffe391bb1e6d96b3c827d52139ed40aa57015be072989c5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar"));

            // line 3
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 4
                echo "  <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo " ";
                if (($context["card"] ?? $this->getContext($context, "card"))) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
    ";
                // line 5
                if ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-md")) {
                    // line 6
                    echo "      ";
                    $context["avatarType"] = "medium";
                    // line 7
                    echo "    ";
                } elseif ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-lg")) {
                    // line 8
                    echo "      ";
                    $context["avatarType"] = "large";
                    // line 9
                    echo "    ";
                } else {
                    // line 10
                    echo "      ";
                    $context["avatarType"] = "small";
                    // line 11
                    echo "    ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["avatarType"] ?? $this->getContext($context, "avatarType"))), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath("", "small"), "html", null, true);
                echo "\">
    </a>
  ";
            }
            
            $__internal_c6c9fb0f3ede83ffe391bb1e6d96b3c827d52139ed40aa57015be072989c5e30->leave($__internal_c6c9fb0f3ede83ffe391bb1e6d96b3c827d52139ed40aa57015be072989c5e30_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_99ac59cc38df6ca23fa5a977b51401c9460e4a0c837918308abc05c631819a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_99ac59cc38df6ca23fa5a977b51401c9460e4a0c837918308abc05c631819a86->enter($__internal_99ac59cc38df6ca23fa5a977b51401c9460e4a0c837918308abc05c631819a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar_link"));

            // line 24
            $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? $this->getContext($context, "size")), "small")) : ("small"));
            // line 25
            echo "  ";
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 26
                echo "    <a
      class=\"avatar-link-";
                // line 27
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo " ";
                if (twig_in_filter("card", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 28
                if (twig_in_filter("_blank", ($context["options"] ?? $this->getContext($context, "options")))) {
                    // line 29
                    echo "        target=\"_blank\"
      ";
                }
                // line 31
                echo "      href=\"";
                if (twig_in_filter("null_link", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 34
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            } else {
                // line 37
                echo "    <a class=\"avatar-link-";
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo "\" href=\"javascript:;\">
      ";
                // line 38
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            }
            
            $__internal_99ac59cc38df6ca23fa5a977b51401c9460e4a0c837918308abc05c631819a86->leave($__internal_99ac59cc38df6ca23fa5a977b51401c9460e4a0c837918308abc05c631819a86_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_addfe8f3b15db2440b3bcec719f44e7ebfb493b605bbfce4792ca7e8763a2f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_addfe8f3b15db2440b3bcec719f44e7ebfb493b605bbfce4792ca7e8763a2f57->enter($__internal_addfe8f3b15db2440b3bcec719f44e7ebfb493b605bbfce4792ca7e8763a2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avater_img"));

            // line 44
            echo "<img class=\"avatar-";
            echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
            echo "\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["size"] ?? $this->getContext($context, "size"))), "html", null, true);
            echo "\">";
            
            $__internal_addfe8f3b15db2440b3bcec719f44e7ebfb493b605bbfce4792ca7e8763a2f57->leave($__internal_addfe8f3b15db2440b3bcec719f44e7ebfb493b605bbfce4792ca7e8763a2f57_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f3388d1223de8a4a64e58d665866c33a65ec2db9b28e9bf57a2e7bc43a6fc332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f3388d1223de8a4a64e58d665866c33a65ec2db9b28e9bf57a2e7bc43a6fc332->enter($__internal_f3388d1223de8a4a64e58d665866c33a65ec2db9b28e9bf57a2e7bc43a6fc332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_link"));

            // line 59
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户不存在"), "html", null, true);
                echo "</del></a>
  ";
            }
            
            $__internal_f3388d1223de8a4a64e58d665866c33a65ec2db9b28e9bf57a2e7bc43a6fc332->leave($__internal_f3388d1223de8a4a64e58d665866c33a65ec2db9b28e9bf57a2e7bc43a6fc332_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3674015bdcb6feae5e74f3322f1a4ff1532bff8cb7a4da96c574da69a7a62ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3674015bdcb6feae5e74f3322f1a4ff1532bff8cb7a4da96c574da69a7a62ed3->enter($__internal_3674015bdcb6feae5e74f3322f1a4ff1532bff8cb7a4da96c574da69a7a62ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash_messages"));

            // line 67
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo $context["flashMessage"];
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_3674015bdcb6feae5e74f3322f1a4ff1532bff8cb7a4da96c574da69a7a62ed3->leave($__internal_3674015bdcb6feae5e74f3322f1a4ff1532bff8cb7a4da96c574da69a7a62ed3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2bdec53ec5c5b749f7c90069760acb7560fa56ba5822ff39d5bb56e5bea5ef09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2bdec53ec5c5b749f7c90069760acb7560fa56ba5822ff39d5bb56e5bea5ef09->enter($__internal_2bdec53ec5c5b749f7c90069760acb7560fa56ba5822ff39d5bb56e5bea5ef09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 75
            echo "  ";
            ob_start();
            // line 76
            echo "      
      ";
            // line 77
            $context["kilobyte"] = 1024;
            // line 78
            echo "      ";
            $context["megabyte"] = (($context["kilobyte"] ?? $this->getContext($context, "kilobyte")) * 1024);
            // line 79
            echo "      ";
            $context["gigabyte"] = (($context["megabyte"] ?? $this->getContext($context, "megabyte")) * 1024);
            // line 80
            echo "      ";
            $context["terabyte"] = (($context["gigabyte"] ?? $this->getContext($context, "gigabyte")) * 1024);
            // line 81
            echo "
      ";
            // line 82
            if ((($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["kilobyte"] ?? $this->getContext($context, "kilobyte")))) {
                // line 83
                echo "          ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 84
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["megabyte"] ?? $this->getContext($context, "megabyte")))) {
                // line 85
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["kilobyte"] ?? $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 86
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["gigabyte"] ?? $this->getContext($context, "gigabyte")))) {
                // line 87
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["megabyte"] ?? $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 88
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["terabyte"] ?? $this->getContext($context, "terabyte")))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["gigabyte"] ?? $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["terabyte"] ?? $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 93
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_2bdec53ec5c5b749f7c90069760acb7560fa56ba5822ff39d5bb56e5bea5ef09->leave($__internal_2bdec53ec5c5b749f7c90069760acb7560fa56ba5822ff39d5bb56e5bea5ef09_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
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
            $__internal_829ab2b923bacde6dd37c7db758546047dd75defc7ff575b9dcc70552a704c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_829ab2b923bacde6dd37c7db758546047dd75defc7ff575b9dcc70552a704c48->enter($__internal_829ab2b923bacde6dd37c7db758546047dd75defc7ff575b9dcc70552a704c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "paginator"));

            // line 98
            echo "  ";
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 99
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 101
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 102
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
                    echo "</a></li>
          <li><a  href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 105
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 106
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "
        ";
                // line 109
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 110
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尾页"), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 113
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_829ab2b923bacde6dd37c7db758546047dd75defc7ff575b9dcc70552a704c48->leave($__internal_829ab2b923bacde6dd37c7db758546047dd75defc7ff575b9dcc70552a704c48_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_08a4621bf1c449c5c0b7f16a5c04cd922f43d1d295296bc592c07ce22745896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_08a4621bf1c449c5c0b7f16a5c04cd922f43d1d295296bc592c07ce22745896b->enter($__internal_08a4621bf1c449c5c0b7f16a5c04cd922f43d1d295296bc592c07ce22745896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "star"));

            // line 119
            echo "  ";
            $context["floorScore"] = twig_round(($context["score"] ?? $this->getContext($context, "score")), 0, "floor");
            // line 120
            echo "  ";
            $context["emptyNum"] = (5 - ($context["floorScore"] ?? $this->getContext($context, "floorScore")));
            // line 121
            echo "
  ";
            // line 122
            if ((($context["floorScore"] ?? $this->getContext($context, "floorScore")) > 0)) {
                // line 123
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["floorScore"] ?? $this->getContext($context, "floorScore"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 124
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "  ";
            }
            // line 127
            echo "
  ";
            // line 128
            if (((($context["score"] ?? $this->getContext($context, "score")) - ($context["floorScore"] ?? $this->getContext($context, "floorScore"))) >= 0.5)) {
                // line 129
                echo "    ";
                $context["emptyNum"] = (($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) - 1);
                // line 130
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 132
            echo "
  ";
            // line 133
            if ((($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) > 0)) {
                // line 134
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyNum"] ?? $this->getContext($context, "emptyNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 135
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "  ";
            }
            
            $__internal_08a4621bf1c449c5c0b7f16a5c04cd922f43d1d295296bc592c07ce22745896b->leave($__internal_08a4621bf1c449c5c0b7f16a5c04cd922f43d1d295296bc592c07ce22745896b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 140
    public function getajax_paginator($__paginator__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f32fde5edbaadf2c4193c6bc29a9c7be8e1e2abd140da55eefc06ba9c3c751c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f32fde5edbaadf2c4193c6bc29a9c7be8e1e2abd140da55eefc06ba9c3c751c2->enter($__internal_f32fde5edbaadf2c4193c6bc29a9c7be8e1e2abd140da55eefc06ba9c3c751c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "ajax_paginator"));

            // line 141
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 143
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 144
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 146
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 147
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
                    echo "</a></li>
          <li data-url=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 150
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 151
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "
        ";
                // line 154
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 155
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li data-url=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尾页"), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 158
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_f32fde5edbaadf2c4193c6bc29a9c7be8e1e2abd140da55eefc06ba9c3c751c2->leave($__internal_f32fde5edbaadf2c4193c6bc29a9c7be8e1e2abd140da55eefc06ba9c3c751c2_prof);

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
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 158,  719 => 156,  714 => 155,  712 => 154,  709 => 153,  694 => 151,  689 => 150,  684 => 148,  677 => 147,  675 => 146,  669 => 144,  667 => 143,  661 => 141,  646 => 140,  627 => 137,  620 => 135,  615 => 134,  613 => 133,  610 => 132,  606 => 130,  603 => 129,  601 => 128,  598 => 127,  595 => 126,  588 => 124,  583 => 123,  581 => 122,  578 => 121,  575 => 120,  572 => 119,  557 => 118,  536 => 113,  529 => 111,  524 => 110,  522 => 109,  519 => 108,  504 => 106,  499 => 105,  494 => 103,  487 => 102,  485 => 101,  479 => 99,  476 => 98,  460 => 97,  440 => 93,  434 => 91,  428 => 89,  426 => 88,  421 => 87,  419 => 86,  414 => 85,  412 => 84,  407 => 83,  405 => 82,  402 => 81,  399 => 80,  396 => 79,  393 => 78,  391 => 77,  388 => 76,  385 => 75,  370 => 74,  348 => 71,  337 => 69,  332 => 68,  327 => 67,  313 => 66,  289 => 62,  279 => 60,  277 => 59,  260 => 58,  238 => 44,  222 => 43,  200 => 38,  195 => 37,  189 => 34,  185 => 33,  181 => 32,  172 => 31,  168 => 29,  166 => 28,  158 => 27,  155 => 26,  152 => 25,  150 => 24,  133 => 23,  109 => 17,  104 => 16,  94 => 12,  91 => 11,  88 => 10,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  74 => 5,  59 => 4,  57 => 3,  39 => 2,  31 => 139,  28 => 117,  25 => 96,  22 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# user_avater 已废弃，请勿使用 #}
{%- macro user_avatar(user, class, imgClass, card = true) -%}
  {% if user %}
  <a class=\"{{ class }} {% if card %}js-user-card{% endif %}\" href=\"{{ path('user_show', {id:user.id}) }}\" data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\" data-user-id=\"{{ user.id }}\">
    {% if imgClass == 'avatar-md' %}
      {% set avatarType = 'medium' %}
    {% elseif imgClass == 'avatar-lg' %}
      {% set avatarType = 'large' %}
    {% else %}
      {% set avatarType = 'small' %}
    {% endif %}
    <img class=\"{{ imgClass|default('avatar-sm') }}\" src=\"{{ avatar_path(user, avatarType) }}\">

  </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\">
      <img class=\"{{ imgClass|default('avatar-sm') }}\"  src=\"{{ avatar_path('', 'small') }}\">
    </a>
  {% endif %}
{%- endmacro -%}

{# options 可以传card(显示卡片), _blank(新开窗口), null_link(空链接) #}
{%- macro user_avatar_link(user, size, options = []) -%}
  {% set size = size|default('small') %}
  {% if user %}
    <a
      class=\"avatar-link-{{ size }} {% if 'card' in options %}js-user-card{% endif %}\"
      {% if '_blank' in options %}
        target=\"_blank\"
      {% endif %}
      href=\"{% if 'null_link' in options %}javascript:;{% else %}{{ path('user_show', {id:user.id}) }}{% endif %}\"
      data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\"
      data-user-id=\"{{ user.id }}\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% else %}
    <a class=\"avatar-link-{{ size }}\" href=\"javascript:;\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% endif %}
{%- endmacro -%}

{%- macro user_avater_img(user, size) -%}
  <img class=\"avatar-{{ size }}\"  src=\"{{ avatar_path(user, size) }}\">
{%- endmacro -%}


{# {%- macro user_link(user, class, options = []) -%}
  {% if user %}
    <a
      class=\"{{ class }} {% if 'card' in options %}js-user-card{% endif %}\" {% if '_blank' in options %} target=\"_blank\" {% endif %}href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}
    </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\"><del>用户不存在</del></a>
  {% endif %}
{%- endmacro -%} #}

{%- macro user_link(user, class, card = true) -%}
  {% if user %}
    <a class=\"link-dark {{ class }}\" href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}</a>
  {% else %}
    <a class=\"link-dark {{ class }}\" href=\"javascript:;\"><del>{{'用户不存在'|trans}}</del></a>
  {% endif %}
{%- endmacro -%}

{% macro flash_messages() %}
  {% for type, flashMessages in app.session.flashbag.all() %}
    {% for flashMessage in flashMessages %}
      <div class=\"alert alert-{{ type }}\">{{ flashMessage|raw }}</div>
    {% endfor %}
  {% endfor %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
  {% spaceless %}
      
      {% set kilobyte = 1024 %}
      {% set megabyte = kilobyte * 1024 %}
      {% set gigabyte = megabyte * 1024 %}
      {% set terabyte = gigabyte * 1024 %}

      {% if bytes < kilobyte %}
          {{ bytes ~ ' B' }}
      {% elseif bytes < megabyte %}
          {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
      {% elseif bytes < gigabyte %}
          {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
      {% elseif bytes < terabyte %}
          {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
      {% else %}
          {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
      {% endif %}

  {% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator.lastPage > 1 %}
    <nav class=\" {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\">{{'首页'|trans}}</a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\">{{'尾页'|trans}}</a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro star(score) %}
  {% set floorScore = score|round(0, 'floor') %}
  {% set emptyNum = 5 - floorScore %}

  {% if floorScore > 0 %}
    {% for i in range(1, floorScore) %}
      <i class=\"es-icon es-icon-star color-warning\"></i>
    {% endfor %}
  {% endif %}

  {% if (score - floorScore) >= 0.5 %}
    {% set emptyNum = emptyNum - 1 %}
    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  {% endif %}

  {% if emptyNum > 0 %}
    {% for i in range(1, emptyNum) %}
      <i class=\"es-icon es-icon-staroutline\"></i>
    {% endfor %}
  {% endif %}
{% endmacro %}

{% macro ajax_paginator(paginator)  %}
  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"{{ paginator.currentPage|default(1) }}\">

  {% if paginator.lastPage > 1 %}
    <nav class=\" {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.firstPage) }}\"><a href=\"javascript:;\">{{'首页'|trans}}</a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %} data-url=\"{{ paginator.getPageUrl(page) }}\"><a href=\"javascript:;\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.getLastPage) }}\"><a  href=\"javascript:;\">{{'尾页'|trans}}</a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}", "macro.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/macro.html.twig");
    }
}
