<?php

/* common/data-dict-macro.html.twig */
class __TwigTemplate_3fe72b2511c1277c0b1fbc22baa93b03ac6d75ff2469fe761e4350b31119a9e4 extends Twig_Template
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
        // line 10
        echo "
";
        // line 24
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 90
        echo "
";
    }

    // line 1
    public function getcourseStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((($context["status"] ?? null) == "draft")) {
                // line 3
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 4
($context["status"] ?? null) == "published")) {
                // line 5
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 6
($context["status"] ?? null) == "closed")) {
                // line 7
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                echo "</span>
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

    // line 11
    public function getfileType($__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    ";
            if ((($context["type"] ?? null) == "video")) {
                // line 13
                echo "        <span class=\"glyphicon glyphicon-facetime-video color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
($context["type"] ?? null) == "audio")) {
                // line 15
                echo "        <span class=\"glyphicon glyphicon-music color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 16
($context["type"] ?? null) == "document")) {
                // line 17
                echo "        <span class=\"glyphicon glyphicon-briefcase color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 18
($context["type"] ?? null) == "image")) {
                // line 19
                echo "        <span class=\"glyphicon glyphicon-picture color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图片"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 20
($context["type"] ?? null) == "other")) {
                // line 21
                echo "        <span class=\"glyphicon glyphicon-question-sign color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其他"), "html", null, true);
                echo "</span>
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

    // line 25
    public function getorderStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            if ((($context["status"] ?? null) == "created")) {
                // line 27
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 28
($context["status"] ?? null) == "paid")) {
                // line 29
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 30
($context["status"] ?? null) == "refunding")) {
                // line 31
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 32
($context["status"] ?? null) == "refunded")) {
                // line 33
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已退款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 34
($context["status"] ?? null) == "cancelled")) {
                // line 35
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                echo "</span>
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

    // line 39
    public function getrefundStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "    ";
            if ((($context["status"] ?? null) == "created")) {
                // line 41
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已申请"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 42
($context["status"] ?? null) == "success")) {
                // line 43
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款成功"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 44
($context["status"] ?? null) == "failed")) {
                // line 45
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款失败"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 46
($context["status"] ?? null) == "cancelled")) {
                // line 47
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已取消"), "html", null, true);
                echo "</span>
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

    // line 51
    public function getlogLevel($__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "    ";
            if ((($context["level"] ?? null) == "info")) {
                // line 53
                echo "        <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 54
($context["level"] ?? null) == "warning")) {
                // line 55
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 56
($context["level"] ?? null) == "error")) {
                // line 57
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误"), "html", null, true);
                echo "</span>
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

    // line 61
    public function getcontentStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "    ";
            if ((($context["status"] ?? null) == "published")) {
                // line 63
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 64
($context["status"] ?? null) == "unpublished")) {
                // line 65
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 66
($context["status"] ?? null) == "trash")) {
                // line 67
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回收站"), "html", null, true);
                echo "</span>
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

    // line 71
    public function getarticleStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            if ((($context["status"] ?? null) == "published")) {
                // line 73
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 74
($context["status"] ?? null) == "unpublished")) {
                // line 75
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 76
($context["status"] ?? null) == "trash")) {
                // line 77
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回收站"), "html", null, true);
                echo "</span>
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

    // line 81
    public function getdiscountStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            if ((($context["status"] ?? null) == "unstart")) {
                // line 83
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未开始"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 84
($context["status"] ?? null) == "running")) {
                // line 85
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进行中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 86
($context["status"] ?? null) == "finished")) {
                // line 87
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已结束"), "html", null, true);
                echo "</span>
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

    // line 91
    public function getvideo_quality($__option__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "option" => $__option__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 92
            echo "     ";
            if ((($context["option"] ?? null) == "low")) {
                // line 93
                echo "       ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合PPT讲解"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 94
($context["option"] ?? null) == "normal")) {
                // line 95
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合屏幕录制、摄像头拍摄"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 96
($context["option"] ?? null) == "high")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精细"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合动态电影"), "html", null, true);
                echo ")</span>
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
        return "common/data-dict-macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 97,  495 => 96,  488 => 95,  486 => 94,  479 => 93,  476 => 92,  464 => 91,  445 => 87,  443 => 86,  438 => 85,  436 => 84,  431 => 83,  428 => 82,  416 => 81,  397 => 77,  395 => 76,  390 => 75,  388 => 74,  383 => 73,  380 => 72,  368 => 71,  349 => 67,  347 => 66,  342 => 65,  340 => 64,  335 => 63,  332 => 62,  320 => 61,  301 => 57,  299 => 56,  294 => 55,  292 => 54,  287 => 53,  284 => 52,  272 => 51,  253 => 47,  251 => 46,  246 => 45,  244 => 44,  239 => 43,  237 => 42,  232 => 41,  229 => 40,  217 => 39,  198 => 35,  196 => 34,  191 => 33,  189 => 32,  184 => 31,  182 => 30,  177 => 29,  175 => 28,  170 => 27,  167 => 26,  155 => 25,  136 => 21,  134 => 20,  129 => 19,  127 => 18,  122 => 17,  120 => 16,  115 => 15,  113 => 14,  108 => 13,  105 => 12,  93 => 11,  74 => 7,  72 => 6,  67 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,  40 => 90,  37 => 80,  34 => 70,  31 => 60,  28 => 50,  25 => 38,  22 => 24,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/data-dict-macro.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/common/data-dict-macro.html.twig");
    }
}
