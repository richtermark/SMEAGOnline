<?php

/* course/widgets/teachers.html.twig */
class __TwigTemplate_079451a940c98ecbf3b44e410e19689ac256b821f7c609580224c17cce59f9ed extends Twig_Template
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
        if ( !twig_test_empty(($context["teachers"] ?? null))) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">授课教师</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 8
                echo "        <div class=\"media media-default\">
          <div class=\"media-left\">
            <a class=\"js-user-card\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\"
               data-card-url=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\"
               data-user-id=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
                echo "\"
               data-original-title=\"\" title=\"\">
              <img class=\"avatar-md\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["teacher"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                echo "\"></a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"link-dark link-dark\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                echo "</a>
            </div>
            <div class=\"content\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  63 => 20,  56 => 18,  49 => 14,  44 => 12,  40 => 11,  36 => 10,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/teachers.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/widgets/teachers.html.twig");
    }
}
