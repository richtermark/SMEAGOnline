<?php

/* admin/user/user-table-tr.html.twig */
class __TwigTemplate_3b894c1b489905439c6ba0a98ac83b230de1f13b94f9ce7e09f41508daab93a4 extends Twig_Template
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
        $__internal_4ce255873e292be657488f43e405eb0ce3cea426d9a1ff2e5802476475b8e51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce255873e292be657488f43e405eb0ce3cea426d9a1ff2e5802476475b8e51f->enter($__internal_4ce255873e292be657488f43e405eb0ce3cea426d9a1ff2e5802476475b8e51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/user-table-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/user/user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/user/user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? $this->getContext($context, "user")));
        echo "</strong>
    ";
        // line 6
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            $context["userRole"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Role", array("code" => $context["role"]));
            // line 14
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter(($context["userRole"] ?? $this->getContext($context, "userRole")), false)) : (false))) {
                // line 15
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["userRole"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userRole"] ?? null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "          ";
                echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 19
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " &nbsp ";
            }
            // line 20
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </span>
  </td>
 ";
        // line 23
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/user/user-table-tr.html.twig", 23)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "orgCode", array()))));
        // line 24
        echo "  <td>
    ";
        // line 25
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "verifiedMobile", array())) {
            // line 26
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</span>
    ";
        } elseif ($this->getAttribute(        // line 27
($context["profile"] ?? $this->getContext($context, "profile")), "mobile", array())) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未绑定"), "html", null, true);
            echo ")</span>
    ";
        } else {
            // line 30
            echo "       -- 
    ";
        }
        // line 32
        echo "  </td>

  <td>
    ";
        // line 35
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "@");
        // line 36
        echo "    ";
        if (($this->getAttribute(($context["emailArr"] ?? $this->getContext($context, "emailArr")), 1, array(), "array") != "edusoho.net")) {
            // line 37
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "      --
    ";
        }
        // line 41
        echo "    
    <br>
    ";
        // line 43
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "emailVerified", array())) {
            // line 44
            echo "      <label class=\"label label-success\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该Email地址已验证"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已验证"), "html", null, true);
            echo "</label>
    ";
        }
        // line 46
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 59
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "loginTime", array()) == 0)) {
            // line 60
            echo "       --
      ";
        } else {
            // line 62
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 64
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 74
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/user/user-table-tr.html.twig", 74)->display(array_merge($context, array("parentCode" => "admin_user_manage", "group" => "groupButton", "user" => ($context["user"] ?? $this->getContext($context, "user")))));
        // line 75
        echo "    </div>
  </td>
</tr>

";
        
        $__internal_4ce255873e292be657488f43e405eb0ce3cea426d9a1ff2e5802476475b8e51f->leave($__internal_4ce255873e292be657488f43e405eb0ce3cea426d9a1ff2e5802476475b8e51f_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 75,  232 => 74,  228 => 73,  220 => 68,  214 => 67,  209 => 64,  203 => 62,  199 => 60,  197 => 59,  188 => 53,  182 => 52,  176 => 49,  171 => 46,  163 => 44,  161 => 43,  157 => 41,  153 => 39,  147 => 37,  144 => 36,  142 => 35,  137 => 32,  133 => 30,  125 => 28,  123 => 27,  116 => 26,  114 => 25,  111 => 24,  109 => 23,  105 => 21,  91 => 20,  86 => 19,  80 => 17,  74 => 15,  71 => 14,  68 => 13,  51 => 12,  46 => 9,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'admin/macro.html.twig' as admin_macro %}
<tr id=\"user-table-tr-{{ user.id }}\">
  {% include 'org/parts/table-body-checkbox.html.twig' %}
  <td>
    <strong>{{ admin_macro.user_link(user) }}</strong>
    {% if user.locked %}
      <label class=\"label label-danger\">{{'禁'|trans}}</label>
    {% endif %}

    <br>
    <span class=\"text-muted text-sm\">
      {% for role in user.roles %}
        {% set userRole = data('Role', {code: role}) %}
        {% if userRole|default(false) %}
          {{userRole.name|default('')}}
        {% else %}
          {{ dict_text('userRole', role) }}
        {% endif %}
        {% if not loop.last %} &nbsp {% endif %}
      {% endfor %}
    </span>
  </td>
 {% include 'org/parts/table-body-td.html.twig' with {orgCode: user.orgCode}%}
  <td>
    {% if user.verifiedMobile %}
      {{ user.verifiedMobile }}<span class=\"text-success\">({{'已绑定'|trans}})</span>
    {% elseif profile.mobile %}
      {{ profile.mobile }}<span class=\"text-danger\">({{'未绑定'|trans}})</span>
    {% else %}
       -- 
    {% endif %}
  </td>

  <td>
    {% set emailArr = user.email|split('@') %}
    {% if emailArr[1] != 'edusoho.net' %}
      {{ user.email }}
    {% else %}
      --
    {% endif %}
    
    <br>
    {% if user.emailVerified %}
      <label class=\"label label-success\" title=\"{{'该Email地址已验证'|trans}}\">{{'已验证'|trans}}</label>
    {% endif %}
  </td>

  <td>
    <span class=\"text-sm\">{{ user.createdTime|date('Y-n-d H:i:s') }}</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ user.createdIp }}\" target=\"_blank\">{{ user.createdIp }}</a>
    {{convertIP(user.createdIp)}}
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      {% if user.loginTime == 0 %}
       --
      {% else %}
        {{ user.loginTime|date('Y-n-d H:i:s') }}
      {% endif %}
    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ user.loginIp }}\" target=\"_blank\">{{ user.loginIp }}</a>
    {{convertIP(user.loginIp)}}
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_user_show', {id:user.id}) }}\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      {% include 'admin/role/templates/group-button.html.twig' with {parentCode: 'admin_user_manage', group:'groupButton', user: user} %}
    </div>
  </td>
</tr>

", "admin/user/user-table-tr.html.twig", "/Applications/MAMP/htdocs/smeagonline/app/Resources/views/admin/user/user-table-tr.html.twig");
    }
}
