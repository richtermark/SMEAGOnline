<?php

/* course/widgets/newest-students.html.twig */
class __TwigTemplate_e8d4221b4f856e437b55d1937317e399942e42ec1dd407be4bc8ab81ad98b965 extends Twig_Template
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
        if ( !twig_test_empty(($context["students"] ?? null))) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">最新学员</h3>
  </div>
  <div class=\"panel-body\">
    <ul class=\"user-avatar-list clearfix\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 9
                echo "        <li>
          <a class=\" js-user-card\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"
            data-user-id=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "\" data-original-title=\"\" title=\"\">
            <img class=\"avatar-sm\" src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["student"], "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/newest-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  46 => 12,  42 => 11,  36 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/newest-students.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/course/widgets/newest-students.html.twig");
    }
}
