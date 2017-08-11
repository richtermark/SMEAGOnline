<?php

/* default/index.html.twig */
class __TwigTemplate_c0a9944dc91ca1bc20512ddaff8b12f342c0819b8259de38a5e8fbd0b5f73ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e635fdb5e8c57a01b44600b6526f60b95ba094781053f16a7273fcb17003bc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e635fdb5e8c57a01b44600b6526f60b95ba094781053f16a7273fcb17003bc44->enter($__internal_e635fdb5e8c57a01b44600b6526f60b95ba094781053f16a7273fcb17003bc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 3
        $context["bodyClass"] = "homepage";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "defaultbtheme/js/default/index.js"));
        // line 6
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e635fdb5e8c57a01b44600b6526f60b95ba094781053f16a7273fcb17003bc44->leave($__internal_e635fdb5e8c57a01b44600b6526f60b95ba094781053f16a7273fcb17003bc44_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c341a58968bd96149f8f904c27423e81fc780575c3baa0a326d4a5155da5f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c341a58968bd96149f8f904c27423e81fc780575c3baa0a326d4a5155da5f8b->enter($__internal_8c341a58968bd96149f8f904c27423e81fc780575c3baa0a326d4a5155da5f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
  <div class=\"es-row-wrap container-gap\">

    <div class=\"homepage-feature homepage-feature-slides \">
      <div class=\"cycle-pager\"></div>
      ";
        // line 14
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("default-b:home_top_banner");
        echo "
    </div>

    <ul class=\"homepage-category-nav\">
      ";
        // line 18
        $context["categories"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Categories", array("parentId" => 0, "group" => "course"));
        // line 19
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "        <li><a
            href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute($context["category"], "code", array()), "fliter" => array("type" => "all", "price" => "all", "currentLevelId" => "all"), "orderBy" => "latest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a></li>
    </ul>

    <div class=\"row row-9-3\">
      <div class=\"col-md-9\">

        ";
        // line 30
        $context["openCourses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourses", array("count" => 3, "orderBy" => "recommendedSeq"));
        // line 31
        echo "        ";
        if (($context["openCourses"] ?? $this->getContext($context, "openCourses"))) {
            // line 32
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>公开课</h2>
              <a class=\"pull-right\" href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 38
            echo $this->getAttribute($this, "open_course_grids", array(0 => ($context["openCourses"] ?? $this->getContext($context, "openCourses"))), "method");
            echo "
            </div>
          </div>
        ";
        }
        // line 42
        echo "
        ";
        // line 43
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendClassrooms", array("count" => 6));
        // line 44
        echo "        ";
        if (($context["classrooms"] ?? $this->getContext($context, "classrooms"))) {
            // line 45
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
            echo "&gt;</a>
              <h2>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐%classroomName%", array("%classroomName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"home-class-list clearfix\">
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? $this->getContext($context, "classrooms")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 53
                echo "                  ";
                $context["teachers"] = (($this->getAttribute($context["classroom"], "users", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "users", array()), null)) : (null));
                // line 54
                echo "                  ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                    // line 55
                    echo "                    <li class=\"class-item\">
                      <a class=\"class-picture-link\" href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 57
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                    echo "
                      </a>
                      <div class=\"class-body\">
                        <h3 class=\"class-title\">
                          <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "</a>
                        </h3>
                        <div class=\"class-metas\">
                          ";
                    // line 64
                    if (($context["teachers"] ?? $this->getContext($context, "teachers"))) {
                        // line 65
                        echo "                            <span class=\"class-teacher\">
                              <i class=\"es-icon es-icon-people\"></i>
                              ";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                            // line 68
                            echo "                                ";
                            if (($this->getAttribute($context["loop"], "index", array()) <= 1)) {
                                // line 69
                                echo "                                  <a class=\"teacher-nickname mrl\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                                echo "</a>
                                ";
                            }
                            // line 71
                            echo "                              ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                            </span>
                          ";
                    }
                    // line 74
                    echo "                          <span class=\"class-student hidden-md\"><i class=\"es-icon es-icon-people\"></i>";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                    echo " 人</span>
                          <span class=\"class-price\">
                            ";
                    // line 76
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                        // line 77
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 78
                            echo "                                ";
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                            echo "
                              ";
                        } else {
                            // line 80
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            echo "
                              ";
                        }
                        // line 82
                        echo "                            ";
                    } else {
                        // line 83
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 84
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%classroomPrice%元", array("%classroomPrice%" => $this->getAttribute($context["classroom"], "price", array()))), "html", null, true);
                            echo "
                              ";
                        } else {
                            // line 86
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            echo "
                              ";
                        }
                        // line 88
                        echo "                            ";
                    }
                    // line 89
                    echo "                          </span>
                        </div>
                        <div class=\"course-num\">";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%classroomCourseNum%课程", array("%classroomCourseNum%" => $this->getAttribute($context["classroom"], "courseNum", array()))), "html", null, true);
                    echo "</div>
                      </div>
                    </li>
                  ";
                }
                // line 95
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 100
        echo "

        ";
        // line 103
        echo "        ";
        $context["recommendCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", array("count" => 3));
        // line 104
        echo "        ";
        if (($context["recommendCourseSets"] ?? $this->getContext($context, "recommendCourseSets"))) {
            // line 105
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("sort" => "recommendedSeq"));
            echo "\">更多&gt;</a>
              <h2>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐课程"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 111
            echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", array("count" => 3))), "method");
            echo "
            </div>
          </div>
        ";
        }
        // line 115
        echo "
        ";
        // line 117
        echo "        ";
        $context["latestCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => 6));
        // line 118
        echo "        ";
        if (($context["latestCourseSets"] ?? $this->getContext($context, "latestCourseSets"))) {
            // line 119
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">更多&gt;</a>
              <h2>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新课程"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 125
            echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => 6))), "method");
            echo "
            </div>
          </div>
        ";
        }
        // line 129
        echo "
        ";
        // line 131
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 132
            echo "          ";
            $context["recentLiveCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveCourseSets", array("count" => 3));
            // line 133
            echo "          ";
            if (($context["recentLiveCourseSets"] ?? $this->getContext($context, "recentLiveCourseSets"))) {
                // line 134
                echo "            <div class=\"es-box\">
              <div class=\"es-box-heading\">
                <a class=\"pull-right\" href=\"";
                // line 136
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_set_explore");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "&gt;</a>
                <h2>";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新直播"), "html", null, true);
                echo "</h2>
              </div>
              <div class=\"es-box-body\">
                ";
                // line 140
                echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveCourseSets", array("count" => 3))), "method");
                echo "
              </div>
            </div>
          ";
            }
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        $context["articles"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestArticles", array("count" => 4));
        // line 148
        echo "        ";
        if (($context["articles"] ?? $this->getContext($context, "articles"))) {
            // line 149
            echo "          <div class=\"es-box news\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
            echo "&gt;</a>
              <h2>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新%article_name%", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
                ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 157
                echo "                  ";
                if ($context["article"]) {
                    // line 158
                    echo "                    <li class=\"col-md-6\">
                      <em>";
                    // line 159
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publishedTime", array()), "m-d H:i"), "html", null, true);
                    echo " </em>
                      <a href=\"";
                    // line 160
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\"> ";
                    if ($this->getAttribute($context["article"], "categoryId", array())) {
                        // line 161
                        echo "                        <span>[";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "category", array()), "name", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo " </a>
                    </li>
                  ";
                }
                // line 164
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        // line 207
        echo "
        ";
        // line 209
        echo "        ";
        $context["teachers"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendTeachers", array("count" => "3"));
        // line 210
        echo "        ";
        if (($context["teachers"] ?? $this->getContext($context, "teachers"))) {
            // line 211
            echo "          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("讲师团"), "html", null, true);
            echo "</h2>
              <a class=\"pull-right\" href=\"";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
            echo "&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row teacher-grids\">
                ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 219
                echo "                  ";
                if ($context["teacher"]) {
                    // line 220
                    echo "                    <li class=\"col-xs-6  col-sm-6 col-md-4\">
                      <div class=\"teachers-item\">
                        <a href=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                    echo "\">
                          <img class=\"img-circle\" src=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["teacher"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                    echo "\">
                        </a>
                        <span>";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "user_link", array(0 => $context["teacher"]), "method"), "html", null, true);
                    echo "</span>
                        <i> ";
                    // line 226
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                    echo "</i>
                        <p> ";
                    // line 227
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["teacher"], "about", array()), 50);
                    echo "</p>
                      </div>
                    </li>
                  ";
                }
                // line 231
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 236
        echo "
        ";
        // line 238
        echo "        ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 239
            echo "          ";
            $context["levels"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("VipLevels", array("count" => 100));
            // line 240
            echo "          ";
            if (($context["levels"] ?? $this->getContext($context, "levels"))) {
                // line 241
                echo "            <div class=\"es-box vip\">
              <div class=\"es-box-heading\">
                <a class=\"pull-right\" href=\"";
                // line 243
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "&gt;</a>
                <h2>";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员专区"), "html", null, true);
                echo "</h2>
              </div>
              <div class=\"es-box-body\">
                <ul class=\"vip-lists\">
                  ";
                // line 248
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["levels"] ?? $this->getContext($context, "levels")));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 249
                    echo "                    ";
                    if ($context["level"]) {
                        // line 250
                        echo "                      <li class=\"vip-item\">
                        <div class=\"row\">
                          <div class=\"col-sm-3\">
                            <a href=\"";
                        // line 253
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
                        echo "\">
                              <img class=\"img-responsive\" src=\"";
                        // line 254
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["level"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level"], "icon", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                        echo "\"
                                alt=\"";
                        // line 255
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                        echo "\">
                            </a>
                          </div>
                          <div class=\"col-sm-6\">
                            <h3>";
                        // line 259
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                        echo "</h3>
                            <p>";
                        // line 260
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["level"], "description", array()), 40);
                        echo "</p>
                          </div>
                          <div class=\"vip-price col-sm-3\">
                            ";
                        // line 263
                        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                            // line 264
                            echo "                              <h4> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetPrice(($this->getAttribute($context["level"], "monthPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate"))), "html", null, true);
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                            echo "</h4>
                            ";
                        } else {
                            // line 266
                            echo "                              <h4>¥&nbsp;";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "monthPrice", array()), "html", null, true);
                            echo "</h4>
                            ";
                        }
                        // line 268
                        echo "                            <h4><a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_buy");
                        echo "\" class=\"btn btn-success\">立即购买</a></h4>
                          </div>
                        </div>
                      </li>
                    ";
                    }
                    // line 273
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 278
            echo "        ";
        }
        // line 279
        echo "
        ";
        // line 281
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 282
            echo "          ";
            $context["groups"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("HotGroup", array("count" => 15));
            // line 283
            echo "          ";
            if (($context["groups"] ?? $this->getContext($context, "groups"))) {
                // line 284
                echo "            <div class=\"es-box hot-group\">
              <div class=\"es-box-heading\"><a href=\"";
                // line 285
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_search_group");
                echo "\" class=\"pull-right\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "&gt;</a>
                <h2>";
                // line 286
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热小组"), "html", null, true);
                echo "</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"list-unstyled\">
                  ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 290
                    echo "                    ";
                    if (($this->getAttribute($context["group"], "status", array()) == "open")) {
                        // line 291
                        echo "                      <li class=\"col-md-4\">
                        <div class=\"panel\">
                          <div class=\"media\">
                            <a href=\"";
                        // line 294
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\" class=\"pull-left\">
                              ";
                        // line 295
                        if ($this->getAttribute($context["group"], "logo", array())) {
                            // line 296
                            echo "                                <img class=\"avatar-square-sm\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFilePath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        } else {
                            // line 298
                            echo "                                <img class=\"avatar-square-sm\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        }
                        // line 300
                        echo "                            </a>
                            <div class=\"media-body\">
                              <p><a href=\"";
                        // line 302
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["group"], "title", array()), 10);
                        echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                        // line 304
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%groupMemberNum%个成员", array("%groupMemberNum%" => $this->getAttribute($context["group"], "memberNum", array()))), "html", null, true);
                        echo "&nbsp;
                                ";
                        // line 305
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%groupThreadNum%个话题", array("%groupThreadNum%" => $this->getAttribute($context["group"], "threadNum", array()))), "html", null, true);
                        echo "
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    ";
                    }
                    // line 312
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 313
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 317
            echo "        ";
        }
        // line 318
        echo "      </div>

      <div class=\"col-md-3\">
        ";
        // line 322
        echo "        ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 323
            echo "          ";
            $this->loadTemplate("default/member-recently-learned.html.twig", "default/index.html.twig", 323)->display($context);
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 327
        echo "        ";
        $context["tags"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Tags", array("count" => 5));
        // line 328
        echo "        ";
        if (($context["tags"] ?? $this->getContext($context, "tags"))) {
            // line 329
            echo "          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门标签"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <div class=\"tag-list\">
                ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 336
                echo "                  ";
                if ($context["tag"]) {
                    // line 337
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 339
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "              </div>
            </div>
          </div>
        ";
        }
        // line 344
        echo "
        ";
        // line 346
        echo "        ";
        $context["courseSetsRank"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => "5", "type" => "studentNum"));
        // line 347
        echo "        ";
        if (($context["courseSetsRank"] ?? $this->getContext($context, "courseSetsRank"))) {
            // line 348
            echo "          <div class=\"es-box courseSets-rank\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 350
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程排行"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseSetsRank"] ?? $this->getContext($context, "courseSetsRank")));
            foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                // line 355
                echo "                  ";
                if ($context["courseSet"]) {
                    // line 356
                    echo "                    <li class=\"media\">
                      <a href=\"";
                    // line 357
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                    echo "\">
                        <div class=\"course-item\">
                          <img src=\"";
                    // line 359
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "large"), "courseSet.png"), "html", null, true);
                    echo "\" class=\"img-responsive thumb pull-left\">
                          <div class=\"course-title\">";
                    // line 360
                    echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                    echo "</div>
                        </div>
                      </a>
                    </li>
                  ";
                }
                // line 365
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 370
        echo "
        ";
        // line 372
        echo "        ";
        $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("mode" => "simple", "count" => 5, "private" => 0));
        // line 373
        echo "        ";
        if (($context["learns"] ?? $this->getContext($context, "learns"))) {
            // line 374
            echo "          <div class=\"es-box status-side\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 376
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("动态"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 380
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["learns"] ?? $this->getContext($context, "learns")));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 381
                echo "                  <li class=\"media\">
                    ";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "user_avatar", array(0 => $this->getAttribute($context["learn"], "user", array()), 1 => "pull-left", 2 => "media-objec", 3 => true), "method"), "html", null, true);
                echo "
                    <div class=\"media-body\">
                      ";
                // line 384
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "user_link", array(0 => $this->getAttribute($context["learn"], "user", array())), "method"), "html", null, true);
                echo "
                      ";
                // line 385
                echo $this->getAttribute($context["learn"], "message", array());
                echo "
                    </div>
                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 389
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 393
        echo "
        ";
        // line 394
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

        ";
        // line 397
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 398
            echo "          ";
            $context["hotThreads"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("HotThreads", array("count" => 11));
            // line 399
            echo "          ";
            if (($context["hotThreads"] ?? $this->getContext($context, "hotThreads"))) {
                // line 400
                echo "            <div class=\"es-box hot-threads\">
              <div class=\"es-box-heading\"><h2>";
                // line 401
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热话题"), "html", null, true);
                echo "</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"text-list\">
                  ";
                // line 404
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["hotThreads"] ?? $this->getContext($context, "hotThreads")));
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 405
                    echo "                    ";
                    if ($context["thread"]) {
                        // line 406
                        echo "                      <li
                        style=\"border-bottom:none;background:url('";
                        // line 407
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\">
                        <a href=\"";
                        // line 408
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 15);
                        echo "</a></li>
                    ";
                    }
                    // line 410
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 415
            echo "        ";
        }
        // line 416
        echo "
      </div>
    </div>

  </div>
";
        
        $__internal_8c341a58968bd96149f8f904c27423e81fc780575c3baa0a326d4a5155da5f8b->leave($__internal_8c341a58968bd96149f8f904c27423e81fc780575c3baa0a326d4a5155da5f8b_prof);

    }

    // line 431
    public function getcourse_grids($__courseSets__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "courseSets" => $__courseSets__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5ccc2c77466381aeda623268b42fc0047dea277e29e3e1d675a365d8321ee7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5ccc2c77466381aeda623268b42fc0047dea277e29e3e1d675a365d8321ee7b1->enter($__internal_5ccc2c77466381aeda623268b42fc0047dea277e29e3e1d675a365d8321ee7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "course_grids"));

            // line 432
            echo "  ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter(($context["mode"] ?? $this->getContext($context, "mode")), "default")) : ("default"));
            // line 433
            echo "  ";
            if (($context["courseSets"] ?? $this->getContext($context, "courseSets"))) {
                // line 434
                echo "    <ul class=\"course-grids clearfix\">
      ";
                // line 435
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? $this->getContext($context, "courseSets")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                    // line 436
                    echo "        ";
                    $context["course"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PublishedCourseByCourseSet", array("courseSetId" => $this->getAttribute($context["courseSet"], "id", array())));
                    // line 437
                    echo "        ";
                    if (($context["course"] ?? $this->getContext($context, "course"))) {
                        // line 438
                        echo "          <li class=\"course-grid\">
            <a href=\"";
                        // line 439
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                        echo "\" class=\"grid-body\">
              ";
                        // line 440
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "large"), "courseSet.png"), "img-responsive thumb", "");
                        echo "
              ";
                        // line 441
                        if (($this->getAttribute($context["courseSet"], "status", array()) == "draft")) {
                            // line 442
                            echo "                <span class=\"label  label-warning course-status\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                            echo "</span>
              ";
                        } elseif (($this->getAttribute(                        // line 443
$context["courseSet"], "status", array()) == "closed")) {
                            // line 444
                            echo "                <span class=\"label label-danger course-status\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                            echo "</span>
              ";
                        }
                        // line 446
                        echo "              ";
                        if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialize")) {
                            // line 447
                            echo "                <span class=\"label label-success series-mode-label\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新中"), "html", null, true);
                            echo "</span>
              ";
                        } elseif (($this->getAttribute(                        // line 448
$context["courseSet"], "serializeMode", array()) == "finished")) {
                            // line 449
                            echo "                <span class=\"label label-warning series-mode-label\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                            echo "</span>
              ";
                        }
                        // line 451
                        echo "
              ";
                        // line 452
                        if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                            // line 453
                            echo "                ";
                            $context["lesson"] = (($this->getAttribute($context["courseSet"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "lesson", array(), "array"), null)) : (null));
                            // line 454
                            echo "                ";
                            if (((($context["lesson"] ?? $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["lesson"] ?? $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["lesson"] ?? $this->getContext($context, "lesson")), "endTime", array())))) {
                                // line 455
                                echo "                  <span class=\"label label-warning series-mode-label\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播中"), "html", null, true);
                                echo "</span>
                ";
                            } else {
                                // line 457
                                echo "                  <span class=\"label label-success series-mode-label\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                                echo "</span>
                ";
                            }
                            // line 459
                            echo "              ";
                        }
                        // line 460
                        echo "
              <span class=\"title\">";
                        // line 461
                        echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                        echo "</span>
              ";
                        // line 462
                        if (twig_in_filter(($context["mode"] ?? $this->getContext($context, "mode")), array(0 => "default", 1 => "teach"))) {
                            // line 463
                            echo "
                ";
                            // line 464
                            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                                // line 465
                                echo "                  ";
                                $context["lesson"] = (($this->getAttribute($context["courseSet"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "lesson", array(), "array"), null)) : (null));
                                // line 466
                                echo "                  ";
                                if (($context["lesson"] ?? $this->getContext($context, "lesson"))) {
                                    // line 467
                                    echo "                    <span class=\"live-course-lesson metas\">
                  <span class=\"text-success mrm\">";
                                    // line 468
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lesson"] ?? $this->getContext($context, "lesson")), "startTime", array()), "m-d H:i"), "html", null, true);
                                    echo " ~ ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lesson"] ?? $this->getContext($context, "lesson")), "endTime", array()), "H:i"), "html", null, true);
                                    echo "</span>
                  <span class=\"text-muted mrm\">";
                                    // line 469
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第%lessonNumber%课时", array("%lessonNumber%" => $this->getAttribute(($context["lesson"] ?? $this->getContext($context, "lesson")), "number", array()))), "html", null, true);
                                    echo "</span>
                </span>
                  ";
                                }
                                // line 472
                                echo "                ";
                            }
                            // line 473
                            echo "
                <span class=\"metas clearfix\">
            ";
                            // line 475
                            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("courseSet.coursesPrice") == 0)) {
                                // line 476
                                echo "              <div class=\"price-block\">
                 ";
                                // line 477
                                $this->loadTemplate("course/widgets/price.html.twig", "default/index.html.twig", 477)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                                // line 478
                                echo "              </div>
            ";
                            }
                            // line 480
                            echo "
                  <span class=\"review-col pull-left\" style=\"text-align: left;\">
                ";
                            // line 482
                            if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "ratingNum", array()) > 0)) {
                                // line 483
                                echo "                  <span class=\"meta-label\"><strong>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "ratingNum", array()), "html", null, true);
                                echo "</strong> ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
                                echo "</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-";
                                // line 485
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["courseSet"], "rating", array())), "html", null, true);
                                echo "\">&nbsp;</span>
                  </span>
                ";
                            } else {
                                // line 488
                                echo "                  <span class=\"meta-label\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无评价"), "html", null, true);
                                echo "</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-0\">&nbsp;</span>
                  </span>
                ";
                            }
                            // line 493
                            echo "              </span>

                  ";
                            // line 495
                            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                                // line 496
                                echo "                    <span class=\"student-col\">
                <span class=\"meta-label\">";
                                // line 497
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学生"), "html", null, true);
                                echo "</span>
                <span class=\"student-num\">";
                                // line 498
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%courseTtudentNum%人", array("%courseTtudentNum%" => $this->getAttribute($context["courseSet"], "studentNum", array()))), "html", null, true);
                                echo "</span>
              </span>
                  ";
                            }
                            // line 501
                            echo "
            </span>
              ";
                        }
                        // line 504
                        echo "
              ";
                        // line 505
                        if (twig_in_filter(($context["mode"] ?? $this->getContext($context, "mode")), array(0 => "default"))) {
                            // line 506
                            echo "                ";
                            $context["user"] = (($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "teacherIds", array())), array(), "array"), null)) : (null));
                            // line 507
                            echo "                ";
                            if (($context["user"] ?? $this->getContext($context, "user"))) {
                                // line 508
                                echo "                  <span class=\"teacher clearfix\">
                <img src=\"";
                                // line 509
                                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "smallAvatar", array()), "avatar.png"), "html", null, true);
                                echo "\" class=\"thumb\">
                <span class=\"nickname ellipsis\">";
                                // line 510
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                                echo "</span>
                <span class=\"user-title ellipsis\">";
                                // line 511
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "title", array()), "html", null, true);
                                echo "</span>
              </span>
                ";
                            }
                            // line 514
                            echo "              ";
                        }
                        // line 515
                        echo "
              ";
                        // line 516
                        if (twig_in_filter(($context["mode"] ?? $this->getContext($context, "mode")), array(0 => "learn"))) {
                            // line 517
                            echo "                <div class=\"learn-status\">
                  ";
                            // line 518
                            if ($this->getAttribute($context["courseSet"], "memberIsLearned", array())) {
                                // line 519
                                echo "                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"></div>
                    </div>
                    <div class=\"action\"><span class=\"btn btn-default btn-sm\">";
                                // line 522
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看课程"), "html", null, true);
                                echo "</span></div>
                  ";
                            } else {
                                // line 524
                                echo "                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                                // line 525
                                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->calculatePercent($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "memberLearnedNum", array()), $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "lessonNum", array())), "html", null, true);
                                echo ";\"></div>
                    </div>
                    <div class=\"action\"><span class=\"btn btn-primary btn-sm\">";
                                // line 527
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习"), "html", null, true);
                                echo "</span></div>
                  ";
                            }
                            // line 529
                            echo "                </div>
                ";
                            // line 530
                            if (($this->getAttribute($context["courseSet"], "status", array()) == "draft")) {
                                // line 531
                                echo "                  <span class=\"label  label-warning course-status\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                                echo "</span>
                ";
                            } elseif (($this->getAttribute(                            // line 532
$context["courseSet"], "status", array()) == "closed")) {
                                // line 533
                                echo "                  <span class=\"label label-danger course-status\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                                echo "</span>
                ";
                            }
                            // line 535
                            echo "              ";
                        }
                        // line 536
                        echo "
              ";
                        // line 537
                        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "teach")) {
                            // line 538
                            echo "                ";
                            if (($this->getAttribute($context["courseSet"], "status", array()) == "published")) {
                                // line 539
                                echo "                  <span class=\"label label-success course-status\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                                echo "</span>
                ";
                            } elseif (($this->getAttribute(                            // line 540
$context["courseSet"], "status", array()) == "draft")) {
                                // line 541
                                echo "                  <span class=\"label  label-warning course-status\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                                echo "</span>
                ";
                            } elseif (($this->getAttribute(                            // line 542
$context["courseSet"], "status", array()) == "closed")) {
                                // line 543
                                echo "                  <span class=\"label label-danger course-status\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                                echo "</span>
                ";
                            }
                            // line 545
                            echo "              ";
                        }
                        // line 546
                        echo "
            </a>
          </li>
        ";
                    }
                    // line 550
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 551
                echo "    </ul>
  ";
            } else {
                // line 553
                echo "    <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程。"), "html", null, true);
                echo "</div>
  ";
            }
            
            $__internal_5ccc2c77466381aeda623268b42fc0047dea277e29e3e1d675a365d8321ee7b1->leave($__internal_5ccc2c77466381aeda623268b42fc0047dea277e29e3e1d675a365d8321ee7b1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 557
    public function getopen_course_grids($__courses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $__courses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c561885bf8586e322e24d0022d16be7040eccae4dae8a38802d12006f8251e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c561885bf8586e322e24d0022d16be7040eccae4dae8a38802d12006f8251e24->enter($__internal_c561885bf8586e322e24d0022d16be7040eccae4dae8a38802d12006f8251e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "open_course_grids"));

            // line 558
            echo "  ";
            if (($context["courses"] ?? $this->getContext($context, "courses"))) {
                // line 559
                echo "    <ul class=\"course-grids clearfix\">
      ";
                // line 560
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 561
                    echo "        ";
                    $context["lessons"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute($context["course"], "id", array()), "count" => 1));
                    // line 562
                    echo "
        <li class=\"course-grid\">
          <a href=\"";
                    // line 564
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\" class=\"grid-body\">
            ";
                    // line 565
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["course"], "largePicture", array()), "course.png"), "img-responsive thumb", "");
                    echo "

            ";
                    // line 567
                    if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                        // line 568
                        echo "              ";
                        if (((($context["lessons"] ?? $this->getContext($context, "lessons")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($this->getAttribute(($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($this->getAttribute(($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "endTime", array())))) {
                            // line 569
                            echo "                <span class=\"label label-warning series-mode-label\">正在直播中</span>
              ";
                        } else {
                            // line 571
                            echo "                <span class=\"label label-success series-mode-label\">直播</span>
              ";
                        }
                        // line 573
                        echo "            ";
                    }
                    // line 574
                    echo "
            <span class=\"title\">";
                    // line 575
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "</span>

            ";
                    // line 582
                    echo "
            <span class=\"metas clearfix\">
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-removeredeye mrs\"></i>";
                    // line 585
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                    echo "
                </span>
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-thumbup mrs\"></i>";
                    // line 588
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "likeNum", array()), "html", null, true);
                    echo "
                </span>
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-textsms mrs\"></i>";
                    // line 591
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "postNum", array()), "html", null, true);
                    echo "
                </span>
              </span>

            ";
                    // line 595
                    $context["user"] = (($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                    // line 596
                    echo "            ";
                    if (($context["user"] ?? $this->getContext($context, "user"))) {
                        // line 597
                        echo "              <span class=\"teacher clearfix\">
                <img src=\"";
                        // line 598
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "smallAvatar", array()), "avatar.png"), "html", null, true);
                        echo "\" class=\"thumb\">
                <span class=\"nickname ellipsis\">";
                        // line 599
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                        echo "</span>
                <span class=\"user-title ellipsis\">";
                        // line 600
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "title", array()), "html", null, true);
                        echo "</span>
              </span>
            ";
                    }
                    // line 603
                    echo "
          </a>
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 607
                echo "    </ul>
  ";
            } else {
                // line 609
                echo "    <div class=\"empty\">暂无课程。</div>
  ";
            }
            
            $__internal_c561885bf8586e322e24d0022d16be7040eccae4dae8a38802d12006f8251e24->leave($__internal_c561885bf8586e322e24d0022d16be7040eccae4dae8a38802d12006f8251e24_prof);

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
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1530 => 609,  1526 => 607,  1517 => 603,  1511 => 600,  1507 => 599,  1503 => 598,  1500 => 597,  1497 => 596,  1495 => 595,  1488 => 591,  1482 => 588,  1476 => 585,  1471 => 582,  1466 => 575,  1463 => 574,  1460 => 573,  1456 => 571,  1452 => 569,  1449 => 568,  1447 => 567,  1442 => 565,  1438 => 564,  1434 => 562,  1431 => 561,  1427 => 560,  1424 => 559,  1421 => 558,  1406 => 557,  1384 => 553,  1380 => 551,  1366 => 550,  1360 => 546,  1357 => 545,  1351 => 543,  1349 => 542,  1344 => 541,  1342 => 540,  1337 => 539,  1334 => 538,  1332 => 537,  1329 => 536,  1326 => 535,  1320 => 533,  1318 => 532,  1313 => 531,  1311 => 530,  1308 => 529,  1303 => 527,  1298 => 525,  1295 => 524,  1290 => 522,  1285 => 519,  1283 => 518,  1280 => 517,  1278 => 516,  1275 => 515,  1272 => 514,  1266 => 511,  1262 => 510,  1258 => 509,  1255 => 508,  1252 => 507,  1249 => 506,  1247 => 505,  1244 => 504,  1239 => 501,  1233 => 498,  1229 => 497,  1226 => 496,  1224 => 495,  1220 => 493,  1211 => 488,  1205 => 485,  1197 => 483,  1195 => 482,  1191 => 480,  1187 => 478,  1185 => 477,  1182 => 476,  1180 => 475,  1176 => 473,  1173 => 472,  1167 => 469,  1161 => 468,  1158 => 467,  1155 => 466,  1152 => 465,  1150 => 464,  1147 => 463,  1145 => 462,  1141 => 461,  1138 => 460,  1135 => 459,  1129 => 457,  1123 => 455,  1120 => 454,  1117 => 453,  1115 => 452,  1112 => 451,  1106 => 449,  1104 => 448,  1099 => 447,  1096 => 446,  1090 => 444,  1088 => 443,  1083 => 442,  1081 => 441,  1077 => 440,  1073 => 439,  1070 => 438,  1067 => 437,  1064 => 436,  1047 => 435,  1044 => 434,  1041 => 433,  1038 => 432,  1023 => 431,  1011 => 416,  1008 => 415,  1002 => 411,  996 => 410,  989 => 408,  985 => 407,  982 => 406,  979 => 405,  975 => 404,  969 => 401,  966 => 400,  963 => 399,  960 => 398,  957 => 397,  952 => 394,  949 => 393,  943 => 389,  933 => 385,  929 => 384,  924 => 382,  921 => 381,  917 => 380,  905 => 376,  901 => 374,  898 => 373,  895 => 372,  892 => 370,  886 => 366,  880 => 365,  872 => 360,  868 => 359,  863 => 357,  860 => 356,  857 => 355,  853 => 354,  846 => 350,  842 => 348,  839 => 347,  836 => 346,  833 => 344,  827 => 340,  821 => 339,  813 => 337,  810 => 336,  806 => 335,  799 => 331,  795 => 329,  792 => 328,  789 => 327,  786 => 325,  783 => 324,  780 => 323,  777 => 322,  772 => 318,  769 => 317,  763 => 313,  757 => 312,  747 => 305,  743 => 304,  734 => 302,  730 => 300,  722 => 298,  714 => 296,  712 => 295,  706 => 294,  701 => 291,  698 => 290,  694 => 289,  688 => 286,  682 => 285,  679 => 284,  676 => 283,  673 => 282,  670 => 281,  667 => 279,  664 => 278,  658 => 274,  652 => 273,  643 => 268,  637 => 266,  630 => 264,  628 => 263,  622 => 260,  618 => 259,  611 => 255,  607 => 254,  603 => 253,  598 => 250,  595 => 249,  591 => 248,  584 => 244,  578 => 243,  574 => 241,  571 => 240,  568 => 239,  565 => 238,  562 => 236,  556 => 232,  550 => 231,  543 => 227,  539 => 226,  535 => 225,  530 => 223,  526 => 222,  522 => 220,  519 => 219,  515 => 218,  506 => 214,  502 => 213,  498 => 211,  495 => 210,  492 => 209,  489 => 207,  487 => 171,  484 => 169,  478 => 165,  472 => 164,  461 => 161,  455 => 160,  451 => 159,  448 => 158,  445 => 157,  441 => 156,  434 => 152,  428 => 151,  424 => 149,  421 => 148,  418 => 147,  415 => 145,  412 => 144,  405 => 140,  399 => 137,  393 => 136,  389 => 134,  386 => 133,  383 => 132,  380 => 131,  377 => 129,  370 => 125,  364 => 122,  360 => 121,  356 => 119,  353 => 118,  350 => 117,  347 => 115,  340 => 111,  334 => 108,  330 => 107,  326 => 105,  323 => 104,  320 => 103,  316 => 100,  310 => 96,  296 => 95,  289 => 91,  285 => 89,  282 => 88,  276 => 86,  270 => 84,  267 => 83,  264 => 82,  258 => 80,  250 => 78,  247 => 77,  245 => 76,  239 => 74,  235 => 72,  221 => 71,  213 => 69,  210 => 68,  193 => 67,  189 => 65,  187 => 64,  179 => 61,  172 => 57,  168 => 56,  165 => 55,  162 => 54,  159 => 53,  142 => 52,  135 => 48,  129 => 47,  125 => 45,  122 => 44,  120 => 43,  117 => 42,  110 => 38,  104 => 35,  99 => 32,  96 => 31,  94 => 30,  82 => 24,  71 => 21,  68 => 20,  63 => 19,  61 => 18,  54 => 14,  47 => 9,  41 => 8,  34 => 1,  32 => 6,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% set bodyClass = 'homepage' %}
{% do script(['libs/echo-js.js','defaultbtheme/js/default/index.js']) %}

{% set consultDisplay = true %}

{% block content %}

  <div class=\"es-row-wrap container-gap\">

    <div class=\"homepage-feature homepage-feature-slides \">
      <div class=\"cycle-pager\"></div>
      {{ block_show('default-b:home_top_banner') }}
    </div>

    <ul class=\"homepage-category-nav\">
      {% set categories = data('Categories', {parentId:0, group:'course'}) %}
      {% for category in categories %}
        <li><a
            href=\"{{ path('course_set_explore', {category:category.code,fliter:{type: 'all',price: 'all',currentLevelId: 'all'},orderBy:'latest'}) }}\">{{ category.name }}</a>
        </li>
      {% endfor %}
      <li><a href=\"{{ path('course_set_explore') }}\">{{ '更多'|trans }}</a></li>
    </ul>

    <div class=\"row row-9-3\">
      <div class=\"col-md-9\">

        {% set openCourses = data('OpenCourses',{ count:3, orderBy:'recommendedSeq' }) %}
        {% if openCourses %}
          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>公开课</h2>
              <a class=\"pull-right\" href=\"{{ path('open_course_explore') }}\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              {{ _self.open_course_grids(openCourses) }}
            </div>
          </div>
        {% endif %}

        {% set classrooms = data('RecommendClassrooms',{'count':6}) %}
        {% if classrooms %}
          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"{{ path('classroom_explore') }}\">{{ '更多'|trans }}&gt;</a>
              <h2>{{ '推荐%classroomName%'|trans({'%classroomName%': setting('classroom.name')|default('班级'|trans)}) }}</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"home-class-list clearfix\">
                {% for classroom in classrooms %}
                  {% set teachers = classroom.users|default(null) %}
                  {% if loop.index <= 5 %}
                    <li class=\"class-item\">
                      <a class=\"class-picture-link\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">
                        {{ lazy_img(filepath(classroom.middlePicture, 'classroom.png'), 'img-responsive', classroom.title, 'lazyload_class.png') }}
                      </a>
                      <div class=\"class-body\">
                        <h3 class=\"class-title\">
                          <a href=\"{{ path('classroom_show', {id:classroom.id}) }}\">{{ classroom.title }}</a>
                        </h3>
                        <div class=\"class-metas\">
                          {% if teachers %}
                            <span class=\"class-teacher\">
                              <i class=\"es-icon es-icon-people\"></i>
                              {% for teacher in teachers %}
                                {% if loop.index <= 1 %}
                                  <a class=\"teacher-nickname mrl\" href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
                                {% endif %}
                              {% endfor %}
                            </span>
                          {% endif %}
                          <span class=\"class-student hidden-md\"><i class=\"es-icon es-icon-people\"></i>{{ classroom.studentNum + classroom.auditorNum }} 人</span>
                          <span class=\"class-price\">
                            {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                              {% if classroom.price > 0 %}
                                {{ classroom.price * setting('coin.cash_rate') }} {{ setting('coin.coin_name') }}
                              {% else %}
                                {{ '免费'|trans }}
                              {% endif %}
                            {% else %}
                              {% if classroom.price > 0 %}
                                {{ '%classroomPrice%元'|trans({'%classroomPrice%': classroom.price}) }}
                              {% else %}
                                {{ '免费'|trans }}
                              {% endif %}
                            {% endif %}
                          </span>
                        </div>
                        <div class=\"course-num\">{{ '共%classroomCourseNum%课程'|trans({'%classroomCourseNum%': classroom.courseNum}) }}</div>
                      </div>
                    </li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %}


        {# 推荐课程 #}
        {% set recommendCourseSets = data('RecommendCourseSets', {count:3}) %}
        {% if recommendCourseSets %}
          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"{{ path('course_set_explore', {sort:'recommendedSeq'}) }}\">更多&gt;</a>
              <h2>{{ '推荐课程'|trans }}</h2>
            </div>
            <div class=\"es-box-body\">
              {{ _self.course_grids(data('RecommendCourseSets',{ count:3 })) }}
            </div>
          </div>
        {% endif %}

        {# 最新课程 #}
        {% set latestCourseSets = data('LatestCourseSets', {count:6}) %}
        {% if latestCourseSets %}
          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"{{ path('course_set_explore') }}\">更多&gt;</a>
              <h2>{{ '最新课程'|trans }}</h2>
            </div>
            <div class=\"es-box-body\">
              {{ _self.course_grids(data('LatestCourseSets',{ count:6 })) }}
            </div>
          </div>
        {% endif %}

        {# 最新直播 #}
        {% if setting('course.live_course_enabled') %}
          {% set recentLiveCourseSets = data('RecentLiveCourseSets', {count:3}) %}
          {% if recentLiveCourseSets %}
            <div class=\"es-box\">
              <div class=\"es-box-heading\">
                <a class=\"pull-right\" href=\"{{ path('live_course_set_explore') }}\">{{ '更多'|trans }}&gt;</a>
                <h2>{{ '最新直播'|trans }}</h2>
              </div>
              <div class=\"es-box-body\">
                {{ _self.course_grids(data('RecentLiveCourseSets',{ count:3 })) }}
              </div>
            </div>
          {% endif %}
        {% endif %}

        {# 最新资讯 #}
        {% set articles = data('LatestArticles',{'count':4}) %}
        {% if articles %}
          <div class=\"es-box news\">
            <div class=\"es-box-heading\">
              <a class=\"pull-right\" href=\"{{ path('article_show') }}\">{{ '更多'|trans }}&gt;</a>
              <h2>{{'最新%article_name%'|trans({'%article_name%': setting('article.name')|default('资讯'|trans)})}}</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
                {% for article in articles %}
                  {% if article %}
                    <li class=\"col-md-6\">
                      <em>{{ article.publishedTime|date('m-d H:i') }} </em>
                      <a href=\"{{ path('article_detail', {id:article.id}) }}\" title=\"{{ article.title }}\"> {% if article.categoryId %}
                        <span>[{{ article.category.name }}]{% endif %}</span>{{ article.title }} </a>
                    </li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %}

        {# 推荐话题 #}
        {# {% set threads = data('EliteCourseThreadsByType',{'count':4, 'type':'discussion'}) %}
        {% if threads %}
          <div class=\"es-box topic\">
            <div class=\"es-box-heading\">
              <h2>{{'课程讨论'|trans}}</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
                {% for thread in threads %}
                  {% if thread %}
                    <li class=\"col-md-6\">
                      <div class=\"topic-item\">
                        <h4>
                          <a href=\"{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}\">{{ thread.title|plain_text(28) }}</a>
                        </h4>
                        <div class=\"topic-body\">
                          {% set user = thread.user %}
                          {% set latestPostUser = thread.latestPostUser %}
                          <img src=\"{{ filepath(thread.user.mediumAvatar, 'avatar.png') }}\" class=\"pull-left\">
                          <h3>{{ user.nickname }}</h3>
                          <p><a href=\"{{ path('course_show', {id:thread.course.id}) }}\">{{ thread.course.title }}</a></p>
                        </div>

                        <p class=\"topic-bottom\">
                          <span>{{ web_macro.user_link(latestPostUser) }}  </span>
              {{ thread.latestPostTime|smart_time }}{{'回复'|trans}}
                          <span class=\"pull-right\">{{'共%threadPostNum%个回复'|trans({'%threadPostNum%': thread.postNum})}}</span>
                        </p>
                      </div>
                    </li>
                  {% endif %} 
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %} #}

        {# 讲师团 #}
        {% set teachers = data('RecommendTeachers',{'count':'3'}) %}
        {% if teachers %}
          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>{{ '讲师团'|trans }}</h2>
              <a class=\"pull-right\" href=\"{{ path('teacher') }}\">{{ '更多'|trans }}&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row teacher-grids\">
                {% for teacher in teachers %}
                  {% if teacher %}
                    <li class=\"col-xs-6  col-sm-6 col-md-4\">
                      <div class=\"teachers-item\">
                        <a href=\"{{ path('user_show', {id:teacher.id}) }}\">
                          <img class=\"img-circle\" src=\"{{ filepath(teacher.mediumAvatar, 'avatar.png') }}\">
                        </a>
                        <span>{{ web_macro.user_link(teacher) }}</span>
                        <i> {{ teacher.title }}</i>
                        <p> {{ teacher.about|plain_text(50) }}</p>
                      </div>
                    </li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %}

        {# vip #}
        {% if is_plugin_installed('Vip') and setting('vip.enabled') %}
          {% set levels = data('VipLevels',{'count':100}) %}
          {% if levels %}
            <div class=\"es-box vip\">
              <div class=\"es-box-heading\">
                <a class=\"pull-right\" href=\"{{ path('vip') }}\">{{ '更多'|trans }}&gt;</a>
                <h2>{{ '会员专区'|trans }}</h2>
              </div>
              <div class=\"es-box-body\">
                <ul class=\"vip-lists\">
                  {% for level in levels %}
                    {% if level %}
                      <li class=\"vip-item\">
                        <div class=\"row\">
                          <div class=\"col-sm-3\">
                            <a href=\"{{ path('vip_course_explore', {levelId:level.id}) }}\">
                              <img class=\"img-responsive\" src=\"{{ level.icon|default(asset('assets/img/default/vip-default.png')) }}\"
                                alt=\"{{ level.name }}\">
                            </a>
                          </div>
                          <div class=\"col-sm-6\">
                            <h3>{{ level.name }}</h3>
                            <p>{{ level.description|plain_text(40) }}</p>
                          </div>
                          <div class=\"vip-price col-sm-3\">
                            {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                              <h4> {{ set_price((level.monthPrice) * (setting('coin.cash_rate'))) }}{{ setting('coin.coin_name', '虚拟币') }}</h4>
                            {% else %}
                              <h4>¥&nbsp;{{ level.monthPrice }}</h4>
                            {% endif %}
                            <h4><a href=\"{{ path('vip_buy') }}\" class=\"btn btn-success\">立即购买</a></h4>
                          </div>
                        </div>
                      </li>
                    {% endif %}
                  {% endfor %}
                </ul>
              </div>
            </div>
          {% endif %}
        {% endif %}

        {# 小组 #}
        {% if setting('group').group_show|default(1) %}
          {% set groups = data('HotGroup', {'count':15}) %}
          {% if groups %}
            <div class=\"es-box hot-group\">
              <div class=\"es-box-heading\"><a href=\"{{ path('group_search_group') }}\" class=\"pull-right\">{{ '更多'|trans }}&gt;</a>
                <h2>{{ '最热小组'|trans }}</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"list-unstyled\">
                  {% for group in groups %}
                    {% if group.status=='open' %}
                      <li class=\"col-md-4\">
                        <div class=\"panel\">
                          <div class=\"media\">
                            <a href=\"{{ path('group_show',{id:group.id}) }}\" title=\"{{ group.title }}\" class=\"pull-left\">
                              {% if group.logo %}
                                <img class=\"avatar-square-sm\" src=\"{{ file_path(group.logo) }}\" alt=\"{{ group.title }}\">
                              {% else %}
                                <img class=\"avatar-square-sm\" src=\"{{ asset('assets/img/default/group.png') }}\" alt=\"{{ group.title }}\">
                              {% endif %}
                            </a>
                            <div class=\"media-body\">
                              <p><a href=\"{{ path('group_show',{id:group.id}) }}\" title=\"{{ group.title }}\">{{ group.title|sub_text(10) }}</a></p>
                              <div class=\"text-muted text-normal\">
                                {{ '%groupMemberNum%个成员'|trans({'%groupMemberNum%': group.memberNum}) }}&nbsp;
                                {{ '%groupThreadNum%个话题'|trans({'%groupThreadNum%': group.threadNum}) }}
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    {% endif %}
                  {% endfor %}
                </ul>
              </div>
            </div>
          {% endif %}
        {% endif %}
      </div>

      <div class=\"col-md-3\">
        {# 在学课程 #}
        {% if app.user %}
          {% include 'default/member-recently-learned.html.twig' %}
        {% endif %}

        {# 热门标签 #}
        {% set tags = data('Tags',{'count':5}) %}
        {% if tags %}
          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>{{ '热门标签'|trans }}</h2>
            </div>
            <div class=\"es-box-body\">
              <div class=\"tag-list\">
                {% for tag in tags %}
                  {% if tag %}
                    <a href=\"{{ path('tag_show', {name:tag.name}) }}\"> {{ tag.name }}</a>
                  {% endif %}
                {% endfor %}
              </div>
            </div>
          </div>
        {% endif %}

        {# 课程排行 #}
        {% set courseSetsRank = data('PopularCourseSets',{'count':'5', 'type':'studentNum'}) %}
        {% if courseSetsRank %}
          <div class=\"es-box courseSets-rank\">
            <div class=\"es-box-heading\">
              <h2>{{ '课程排行'|trans }}</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                {% for courseSet in courseSetsRank %}
                  {% if courseSet %}
                    <li class=\"media\">
                      <a href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\">
                        <div class=\"course-item\">
                          <img src=\"{{ filepath(course_set_cover(courseSet, 'large'), 'courseSet.png') }}\" class=\"img-responsive thumb pull-left\">
                          <div class=\"course-title\">{{ courseSet.title }}</div>
                        </div>
                      </a>
                    </li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %}

        {# 学员动态 #}
        {% set learns = data('LatestStatuses', {mode:'simple', count: 5,private:0}) %}
        {% if learns %}
          <div class=\"es-box status-side\">
            <div class=\"es-box-heading\">
              <h2>{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}{{ '动态'|trans }}</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                {% for learn in learns %}
                  <li class=\"media\">
                    {{ web_macro.user_avatar(learn.user,'pull-left','media-objec',true) }}
                    <div class=\"media-body\">
                      {{ web_macro.user_link(learn.user) }}
                      {{ learn.message|raw }}
                    </div>
                  </li>
                {% endfor %}
              </ul>
            </div>
          </div>
        {% endif %}

        {{ render(controller('AppBundle:Default:latestReviewsBlock', {number:5})) }}

        {# 最热话题 #}
        {% if setting('group').group_show|default(1) %}
          {% set hotThreads = data('HotThreads', {'count':11}) %}
          {% if hotThreads %}
            <div class=\"es-box hot-threads\">
              <div class=\"es-box-heading\"><h2>{{ '最热话题'|trans }}</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"text-list\">
                  {% for thread in hotThreads %}
                    {% if thread %}
                      <li
                        style=\"border-bottom:none;background:url('{{ asset('assets/img/default/triangle.png') }}') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\">
                        <a href=\"{{ path('group_thread_show',{id:thread.groupId,threadId:thread.id}) }}\">{{ thread.title|sub_text(15) }}</a></li>
                    {% endif %}
                  {% endfor %}
                </ul>
              </div>
            </div>
          {% endif %}
        {% endif %}

      </div>
    </div>

  </div>
{% endblock %}

{# {% block contact %}
  {% if contact %}
  {% if contact.enabled == 1 %}
    {% include 'TopxiaWebBundle:ContactFloat:contact.html.twig'   with {contact:contact} %}
  {% endif %}
  {% endif %}
{% endblock %} #}

{% macro course_grids(courseSets) %}
  {% set mode = mode|default('default') %}
  {% if courseSets %}
    <ul class=\"course-grids clearfix\">
      {% for courseSet in courseSets %}
        {% set course = data('PublishedCourseByCourseSet', {'courseSetId':courseSet.id}) %}
        {% if course %}
          <li class=\"course-grid\">
            <a href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\" class=\"grid-body\">
              {{ lazy_img(filepath(course_set_cover(courseSet, 'large'), 'courseSet.png'), 'img-responsive thumb', '') }}
              {% if courseSet.status == 'draft' %}
                <span class=\"label  label-warning course-status\">{{ '未发布'|trans }}</span>
              {% elseif courseSet.status == 'closed' %}
                <span class=\"label label-danger course-status\">{{ '已关闭'|trans }}</span>
              {% endif %}
              {% if courseSet.serializeMode=='serialize' %}
                <span class=\"label label-success series-mode-label\">{{ '更新中'|trans }}</span>
              {% elseif courseSet.serializeMode=='finished' %}
                <span class=\"label label-warning series-mode-label\">{{ '已完结'|trans }}</span>
              {% endif %}

              {% if courseSet.type == 'live' %}
                {% set lesson = courseSet['lesson']|default(null) %}
                {% if lesson and \"now\"|date(\"U\") >= lesson.startTime and \"now\"|date(\"U\") <= lesson.endTime %}
                  <span class=\"label label-warning series-mode-label\">{{ '正在直播中'|trans }}</span>
                {% else %}
                  <span class=\"label label-success series-mode-label\">{{ '直播'|trans }}</span>
                {% endif %}
              {% endif %}

              <span class=\"title\">{{ courseSet.title }}</span>
              {% if mode in ['default', 'teach'] %}

                {% if courseSet.type == 'live' %}
                  {% set lesson = courseSet['lesson']|default(null) %}
                  {% if lesson %}
                    <span class=\"live-course-lesson metas\">
                  <span class=\"text-success mrm\">{{ lesson.startTime|date('m-d H:i') }} ~ {{ lesson.endTime|date('H:i') }}</span>
                  <span class=\"text-muted mrm\">{{ '第%lessonNumber%课时'|trans({'%lessonNumber%': lesson.number}) }}</span>
                </span>
                  {% endif %}
                {% endif %}

                <span class=\"metas clearfix\">
            {% if setting('courseSet.coursesPrice') == 0 %}
              <div class=\"price-block\">
                 {% include \"course/widgets/price.html.twig\" with {shows: ['price', 'discount']} %}
              </div>
            {% endif %}

                  <span class=\"review-col pull-left\" style=\"text-align: left;\">
                {% if course.ratingNum > 0 %}
                  <span class=\"meta-label\"><strong>{{ courseSet.ratingNum }}</strong> {{ '评价'|trans }}</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-{{ (courseSet.rating)|number_format }}\">&nbsp;</span>
                  </span>
                {% else %}
                  <span class=\"meta-label\">{{ '无评价'|trans }}</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-0\">&nbsp;</span>
                  </span>
                {% endif %}
              </span>

                  {% if setting('course.show_student_num_enabled', '1') == 1 %}
                    <span class=\"student-col\">
                <span class=\"meta-label\">{{ '学生'|trans }}</span>
                <span class=\"student-num\">{{ '%courseTtudentNum%人'|trans({'%courseTtudentNum%': courseSet.studentNum}) }}</span>
              </span>
                  {% endif %}

            </span>
              {% endif %}

              {% if mode in ['default'] %}
                {% set user = users[course.teacherIds|first]|default(null) %}
                {% if user %}
                  <span class=\"teacher clearfix\">
                <img src=\"{{ filepath(user.smallAvatar, 'avatar.png') }}\" class=\"thumb\">
                <span class=\"nickname ellipsis\">{{ user.nickname }}</span>
                <span class=\"user-title ellipsis\">{{ user.title }}</span>
              </span>
                {% endif %}
              {% endif %}

              {% if mode in ['learn'] %}
                <div class=\"learn-status\">
                  {% if courseSet.memberIsLearned %}
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"></div>
                    </div>
                    <div class=\"action\"><span class=\"btn btn-default btn-sm\">{{ '查看课程'|trans }}</span></div>
                  {% else %}
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-success\" style=\"width: {{ percent(course.memberLearnedNum, course.lessonNum) }};\"></div>
                    </div>
                    <div class=\"action\"><span class=\"btn btn-primary btn-sm\">{{ '继续学习'|trans }}</span></div>
                  {% endif %}
                </div>
                {% if courseSet.status == 'draft' %}
                  <span class=\"label  label-warning course-status\">{{ '未发布'|trans }}</span>
                {% elseif courseSet.status == 'closed' %}
                  <span class=\"label label-danger course-status\">{{ '已关闭'|trans }}</span>
                {% endif %}
              {% endif %}

              {% if mode == 'teach' %}
                {% if courseSet.status == 'published' %}
                  <span class=\"label label-success course-status\">{{ '已发布'|trans }}</span>
                {% elseif courseSet.status == 'draft' %}
                  <span class=\"label  label-warning course-status\">{{ '未发布'|trans }}</span>
                {% elseif courseSet.status == 'closed' %}
                  <span class=\"label label-danger course-status\">{{ '已关闭'|trans }}</span>
                {% endif %}
              {% endif %}

            </a>
          </li>
        {% endif %}
      {% endfor %}
    </ul>
  {% else %}
    <div class=\"empty\">{{ '暂无课程。'|trans }}</div>
  {% endif %}
{% endmacro %}

{% macro open_course_grids(courses) %}
  {% if courses %}
    <ul class=\"course-grids clearfix\">
      {% for course in courses %}
        {% set lessons = data('OpenCourseLessons',{courseId:course.id,count:1}) %}

        <li class=\"course-grid\">
          <a href=\"{{ path('open_course_show', {courseId:course.id}) }}\" class=\"grid-body\">
            {{ lazy_img(filepath(course.largePicture, 'course.png'), 'img-responsive thumb', '') }}

            {% if course.type == 'liveOpen' %}
              {% if lessons and \"now\"|date(\"U\") >= lessons[0].startTime and \"now\"|date(\"U\") <= lessons[0].endTime %}
                <span class=\"label label-warning series-mode-label\">正在直播中</span>
              {% else %}
                <span class=\"label label-success series-mode-label\">直播</span>
              {% endif %}
            {% endif %}

            <span class=\"title\">{{ course.title }}</span>

            {#{% if course.type == 'liveOpen' and lessons %}
              <span class=\"live-course-lesson metas\">
                <span class=\"text-success mrm\">{{ lessons[0].startTime|date('n月j日 H:i') }} ~ {{ lessons[0].endTime|date('H:i') }}</span>
              </span>
            {% endif %}#}

            <span class=\"metas clearfix\">
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-removeredeye mrs\"></i>{{ course.hitNum }}
                </span>
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-thumbup mrs\"></i>{{ course.likeNum }}
                </span>
                <span class=\"text-muted mrm\">
                  <i class=\"es-icon es-icon-textsms mrs\"></i>{{ course.postNum }}
                </span>
              </span>

            {% set user = users[course.teacherIds|first]|default(null) %}
            {% if user %}
              <span class=\"teacher clearfix\">
                <img src=\"{{ filepath(user.smallAvatar, 'avatar.png') }}\" class=\"thumb\">
                <span class=\"nickname ellipsis\">{{ user.nickname }}</span>
                <span class=\"user-title ellipsis\">{{ user.title }}</span>
              </span>
            {% endif %}

          </a>
        </li>
      {% endfor %}
    </ul>
  {% else %}
    <div class=\"empty\">暂无课程。</div>
  {% endif %}
{% endmacro %}

", "default/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/index.html.twig");
    }
}
