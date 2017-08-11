<?php

/* default/latest-reviews-block.html.twig */
class __TwigTemplate_ef8c7005cefa9c03c274cd7de11d33f7a6f43641c5efeb45fa1d75ee97fe742b extends Twig_Template
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
        $__internal_306db9ba879beff9c136312cd0ca2a6f8fcda22a25c77d8d0e07037e31f3fd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306db9ba879beff9c136312cd0ca2a6f8fcda22a25c77d8d0e07037e31f3fd64->enter($__internal_306db9ba879beff9c136312cd0ca2a6f8fcda22a25c77d8d0e07037e31f3fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/latest-reviews-block.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/latest-reviews-block.html.twig", 1);
        // line 2
        if (($context["reviews"] ?? $this->getContext($context, "reviews"))) {
            // line 3
            echo "\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\"><h2>";
            // line 4
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
            echo "</h2></div>
\t<ul class=\"media-list latest-review-list\">
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 7
                echo "\t\t  ";
                $context["author"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
                // line 8
                echo "\t\t  ";
                $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
                // line 9
                echo "      ";
                $context["courseSet"] = (($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["review"], "courseSetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["review"], "courseSetId", array()), array(), "array"), null)) : (null));
                // line 10
                echo "\t\t  ";
                if ((($context["author"] ?? $this->getContext($context, "author")) && ($context["course"] ?? $this->getContext($context, "course")))) {
                    // line 11
                    echo "\t\t\t  <li class=\"media\">

\t\t\t  \t";
                    // line 13
                    echo $context["web_macro"]->getuser_avatar(($context["author"] ?? $this->getContext($context, "author")), "author-picture-link", "author-picture");
                    echo "
\t\t\t  \t";
                    // line 14
                    echo $context["web_macro"]->getuser_link(($context["author"] ?? $this->getContext($context, "author")), "author-nickname");
                    echo "

\t\t\t  \t<span class=\"color-gray\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("说："), "html", null, true);
                    echo "</span> <br>
\t\t\t  \t<div class=\"review-content\">";
                    // line 17
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 50);
                    echo "</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                    echo "\" class=\"course-title\"> 《 ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
                    echo " 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
                    echo "\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  ";
                }
                // line 26
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t</ul>
\t</div>
";
        }
        
        $__internal_306db9ba879beff9c136312cd0ca2a6f8fcda22a25c77d8d0e07037e31f3fd64->leave($__internal_306db9ba879beff9c136312cd0ca2a6f8fcda22a25c77d8d0e07037e31f3fd64_prof);

    }

    public function getTemplateName()
    {
        return "default/latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  92 => 26,  85 => 22,  78 => 20,  72 => 17,  68 => 16,  63 => 14,  59 => 13,  55 => 11,  52 => 10,  49 => 9,  46 => 8,  43 => 7,  39 => 6,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
{% if reviews %}
\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\"><h2>{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{'学员'|trans}}{% endif %}{{'评价'|trans}}</h2></div>
\t<ul class=\"media-list latest-review-list\">
\t\t{% for review in reviews %}
\t\t  {% set author = users[review.userId]|default(null) %}
\t\t  {% set course = courses[review.courseId]|default(null) %}
      {% set courseSet = courseSets[review.courseSetId]|default(null) %}
\t\t  {% if author and course %}
\t\t\t  <li class=\"media\">

\t\t\t  \t{{ web_macro.user_avatar(author,'author-picture-link','author-picture') }}
\t\t\t  \t{{ web_macro.user_link(author, 'author-nickname')}}

\t\t\t  \t<span class=\"color-gray\">{{'说：'|trans}}</span> <br>
\t\t\t  \t<div class=\"review-content\">{{ review.content|plain_text(50) }}</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\" class=\"course-title\"> 《 {{ courseSet.title }} 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-{{ review.rating }}\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  {% endif %}
\t\t{% endfor %}
\t</ul>
\t</div>
{% endif %}", "default/latest-reviews-block.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/default/latest-reviews-block.html.twig");
    }
}