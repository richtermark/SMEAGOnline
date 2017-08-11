<?php

/* course/tabs/material.html.twig */
class __TwigTemplate_9bcd742b7c6f1a8dabf8ba5474eeaa7d83b517f57adc0faf70a1db80277c8087 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/tabs/material.html.twig", 1);
        // line 2
        echo "
<ul class=\"media-list\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["materials"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 5
            echo "    ";
            $context["task"] = (($this->getAttribute(($context["tasks"] ?? null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 6
            echo "
    <li class=\"media\">
      <div class=\"media-body\">
        <div class=\"mbs\">
          ";
            // line 10
            if ((($context["task"] ?? null) && ($this->getAttribute(($context["task"] ?? null), "status", array()) != "published"))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                echo " <span class=\"color-gray text-sm\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务未发布，不能下载该资料"), "html", null, true);
                echo ")</span>
          ";
            } else {
                // line 13
                echo "            ";
                if ($this->getAttribute($context["material"], "link", array())) {
                    // line 14
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
              <span class=\"glyphicon glyphicon-new-window color-gray text-sm\" title=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网络链接资料"), "html", null, true);
                    echo "\"></span>
            ";
                } else {
                    // line 17
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_material_download", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 19
                echo "          ";
            }
            // line 20
            echo "        </div>

        ";
            // line 22
            if (($this->getAttribute($context["material"], "description", array()) &&  !$this->getAttribute($context["material"], "link", array()))) {
                // line 23
                echo "          <div class=\"color-gray text-sm mbs\">
            ";
                // line 24
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["material"], "description", array()), 100);
                echo "
          </div>
        ";
            }
            // line 27
            echo "
        <div class=\"text-sm\">
          ";
            // line 29
            if (($this->getAttribute($context["material"], "fileId", array()) > 0)) {
                // line 30
                echo "            <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                echo "</span>
            <span class=\"bullet\">•</span>
          ";
            }
            // line 33
            echo "          ";
            if (($context["task"] ?? null)) {
                // line 34
                echo "            <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%", array("%number%" => $this->getAttribute(($context["task"] ?? null), "number", array()))), "html", null, true);
                echo "</a>
            <span class=\"bullet\">•</span>
          ";
            }
            // line 37
            echo "          <span class=\"color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传于"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["material"], "createdTime", array())), "html", null, true);
            echo "</span>
        </div>

      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "    <li class=\"empty tac color-gray mvl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程暂无资料"), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul>
";
        // line 46
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "

";
    }

    public function getTemplateName()
    {
        return "course/tabs/material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  139 => 45,  130 => 43,  117 => 37,  106 => 34,  103 => 33,  96 => 30,  94 => 29,  90 => 27,  84 => 24,  81 => 23,  79 => 22,  75 => 20,  72 => 19,  64 => 17,  59 => 15,  52 => 14,  49 => 13,  41 => 11,  39 => 10,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/material.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/tabs/material.html.twig");
    }
}
