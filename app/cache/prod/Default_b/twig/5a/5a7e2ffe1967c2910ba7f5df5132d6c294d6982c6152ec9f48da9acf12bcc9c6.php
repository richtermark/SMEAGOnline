<?php

/* default/index.html.twig */
class __TwigTemplate_20714220f8be01f25de49c1f107a52bc2bf253530353230cf3b2bae62dad80c2 extends Twig_Template
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
        // line 3
        $context["bodyClass"] = "homepage";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "defaultbtheme/js/default/index.js"));
        // line 6
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        if (($context["openCourses"] ?? null)) {
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
            echo $this->getAttribute($this, "open_course_grids", array(0 => ($context["openCourses"] ?? null)), "method");
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
        if (($context["classrooms"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
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
                    if (($context["teachers"] ?? null)) {
                        // line 65
                        echo "                            <span class=\"class-teacher\">
                              <i class=\"es-icon es-icon-people\"></i>
                              ";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
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
        if (($context["recommendCourseSets"] ?? null)) {
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
        if (($context["latestCourseSets"] ?? null)) {
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
            if (($context["recentLiveCourseSets"] ?? null)) {
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
        if (($context["articles"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        if (($context["teachers"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
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
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_link", array(0 => $context["teacher"]), "method"), "html", null, true);
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
            if (($context["levels"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["levels"] ?? null));
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
            if (($context["groups"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
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
        if (($context["tags"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
        if (($context["courseSetsRank"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["courseSetsRank"] ?? null));
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
        if (($context["learns"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["learns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 381
                echo "                  <li class=\"media\">
                    ";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_avatar", array(0 => $this->getAttribute($context["learn"], "user", array()), 1 => "pull-left", 2 => "media-objec", 3 => true), "method"), "html", null, true);
                echo "
                    <div class=\"media-body\">
                      ";
                // line 384
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_link", array(0 => $this->getAttribute($context["learn"], "user", array())), "method"), "html", null, true);
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
            if (($context["hotThreads"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["hotThreads"] ?? null));
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
            // line 432
            echo "  ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter(($context["mode"] ?? null), "default")) : ("default"));
            // line 433
            echo "  ";
            if (($context["courseSets"] ?? null)) {
                // line 434
                echo "    <ul class=\"course-grids clearfix\">
      ";
                // line 435
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
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
                    if (($context["course"] ?? null)) {
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
                            if (((($context["lesson"] ?? null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["lesson"] ?? null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["lesson"] ?? null), "endTime", array())))) {
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
                        if (twig_in_filter(($context["mode"] ?? null), array(0 => "default", 1 => "teach"))) {
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
                                if (($context["lesson"] ?? null)) {
                                    // line 467
                                    echo "                    <span class=\"live-course-lesson metas\">
                  <span class=\"text-success mrm\">";
                                    // line 468
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lesson"] ?? null), "startTime", array()), "m-d H:i"), "html", null, true);
                                    echo " ~ ";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lesson"] ?? null), "endTime", array()), "H:i"), "html", null, true);
                                    echo "</span>
                  <span class=\"text-muted mrm\">";
                                    // line 469
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第%lessonNumber%课时", array("%lessonNumber%" => $this->getAttribute(($context["lesson"] ?? null), "number", array()))), "html", null, true);
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
                            if (($this->getAttribute(($context["course"] ?? null), "ratingNum", array()) > 0)) {
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
                        if (twig_in_filter(($context["mode"] ?? null), array(0 => "default"))) {
                            // line 506
                            echo "                ";
                            $context["user"] = (($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute(($context["course"] ?? null), "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), twig_first($this->env, $this->getAttribute(($context["course"] ?? null), "teacherIds", array())), array(), "array"), null)) : (null));
                            // line 507
                            echo "                ";
                            if (($context["user"] ?? null)) {
                                // line 508
                                echo "                  <span class=\"teacher clearfix\">
                <img src=\"";
                                // line 509
                                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["user"] ?? null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                                echo "\" class=\"thumb\">
                <span class=\"nickname ellipsis\">";
                                // line 510
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                                echo "</span>
                <span class=\"user-title ellipsis\">";
                                // line 511
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", array()), "html", null, true);
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
                        if (twig_in_filter(($context["mode"] ?? null), array(0 => "learn"))) {
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
                                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->calculatePercent($this->getAttribute(($context["course"] ?? null), "memberLearnedNum", array()), $this->getAttribute(($context["course"] ?? null), "lessonNum", array())), "html", null, true);
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
                        if ((($context["mode"] ?? null) == "teach")) {
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
            // line 558
            echo "  ";
            if (($context["courses"] ?? null)) {
                // line 559
                echo "    <ul class=\"course-grids clearfix\">
      ";
                // line 560
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
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
                        if (((($context["lessons"] ?? null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($this->getAttribute(($context["lessons"] ?? null), 0, array(), "array"), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($this->getAttribute(($context["lessons"] ?? null), 0, array(), "array"), "endTime", array())))) {
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
                    if (($context["user"] ?? null)) {
                        // line 597
                        echo "              <span class=\"teacher clearfix\">
                <img src=\"";
                        // line 598
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["user"] ?? null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                        echo "\" class=\"thumb\">
                <span class=\"nickname ellipsis\">";
                        // line 599
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                        echo "</span>
                <span class=\"user-title ellipsis\">";
                        // line 600
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", array()), "html", null, true);
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
        return array (  1509 => 609,  1505 => 607,  1496 => 603,  1490 => 600,  1486 => 599,  1482 => 598,  1479 => 597,  1476 => 596,  1474 => 595,  1467 => 591,  1461 => 588,  1455 => 585,  1450 => 582,  1445 => 575,  1442 => 574,  1439 => 573,  1435 => 571,  1431 => 569,  1428 => 568,  1426 => 567,  1421 => 565,  1417 => 564,  1413 => 562,  1410 => 561,  1406 => 560,  1403 => 559,  1400 => 558,  1388 => 557,  1369 => 553,  1365 => 551,  1351 => 550,  1345 => 546,  1342 => 545,  1336 => 543,  1334 => 542,  1329 => 541,  1327 => 540,  1322 => 539,  1319 => 538,  1317 => 537,  1314 => 536,  1311 => 535,  1305 => 533,  1303 => 532,  1298 => 531,  1296 => 530,  1293 => 529,  1288 => 527,  1283 => 525,  1280 => 524,  1275 => 522,  1270 => 519,  1268 => 518,  1265 => 517,  1263 => 516,  1260 => 515,  1257 => 514,  1251 => 511,  1247 => 510,  1243 => 509,  1240 => 508,  1237 => 507,  1234 => 506,  1232 => 505,  1229 => 504,  1224 => 501,  1218 => 498,  1214 => 497,  1211 => 496,  1209 => 495,  1205 => 493,  1196 => 488,  1190 => 485,  1182 => 483,  1180 => 482,  1176 => 480,  1172 => 478,  1170 => 477,  1167 => 476,  1165 => 475,  1161 => 473,  1158 => 472,  1152 => 469,  1146 => 468,  1143 => 467,  1140 => 466,  1137 => 465,  1135 => 464,  1132 => 463,  1130 => 462,  1126 => 461,  1123 => 460,  1120 => 459,  1114 => 457,  1108 => 455,  1105 => 454,  1102 => 453,  1100 => 452,  1097 => 451,  1091 => 449,  1089 => 448,  1084 => 447,  1081 => 446,  1075 => 444,  1073 => 443,  1068 => 442,  1066 => 441,  1062 => 440,  1058 => 439,  1055 => 438,  1052 => 437,  1049 => 436,  1032 => 435,  1029 => 434,  1026 => 433,  1023 => 432,  1011 => 431,  1002 => 416,  999 => 415,  993 => 411,  987 => 410,  980 => 408,  976 => 407,  973 => 406,  970 => 405,  966 => 404,  960 => 401,  957 => 400,  954 => 399,  951 => 398,  948 => 397,  943 => 394,  940 => 393,  934 => 389,  924 => 385,  920 => 384,  915 => 382,  912 => 381,  908 => 380,  896 => 376,  892 => 374,  889 => 373,  886 => 372,  883 => 370,  877 => 366,  871 => 365,  863 => 360,  859 => 359,  854 => 357,  851 => 356,  848 => 355,  844 => 354,  837 => 350,  833 => 348,  830 => 347,  827 => 346,  824 => 344,  818 => 340,  812 => 339,  804 => 337,  801 => 336,  797 => 335,  790 => 331,  786 => 329,  783 => 328,  780 => 327,  777 => 325,  774 => 324,  771 => 323,  768 => 322,  763 => 318,  760 => 317,  754 => 313,  748 => 312,  738 => 305,  734 => 304,  725 => 302,  721 => 300,  713 => 298,  705 => 296,  703 => 295,  697 => 294,  692 => 291,  689 => 290,  685 => 289,  679 => 286,  673 => 285,  670 => 284,  667 => 283,  664 => 282,  661 => 281,  658 => 279,  655 => 278,  649 => 274,  643 => 273,  634 => 268,  628 => 266,  621 => 264,  619 => 263,  613 => 260,  609 => 259,  602 => 255,  598 => 254,  594 => 253,  589 => 250,  586 => 249,  582 => 248,  575 => 244,  569 => 243,  565 => 241,  562 => 240,  559 => 239,  556 => 238,  553 => 236,  547 => 232,  541 => 231,  534 => 227,  530 => 226,  526 => 225,  521 => 223,  517 => 222,  513 => 220,  510 => 219,  506 => 218,  497 => 214,  493 => 213,  489 => 211,  486 => 210,  483 => 209,  480 => 207,  478 => 171,  475 => 169,  469 => 165,  463 => 164,  452 => 161,  446 => 160,  442 => 159,  439 => 158,  436 => 157,  432 => 156,  425 => 152,  419 => 151,  415 => 149,  412 => 148,  409 => 147,  406 => 145,  403 => 144,  396 => 140,  390 => 137,  384 => 136,  380 => 134,  377 => 133,  374 => 132,  371 => 131,  368 => 129,  361 => 125,  355 => 122,  351 => 121,  347 => 119,  344 => 118,  341 => 117,  338 => 115,  331 => 111,  325 => 108,  321 => 107,  317 => 105,  314 => 104,  311 => 103,  307 => 100,  301 => 96,  287 => 95,  280 => 91,  276 => 89,  273 => 88,  267 => 86,  261 => 84,  258 => 83,  255 => 82,  249 => 80,  241 => 78,  238 => 77,  236 => 76,  230 => 74,  226 => 72,  212 => 71,  204 => 69,  201 => 68,  184 => 67,  180 => 65,  178 => 64,  170 => 61,  163 => 57,  159 => 56,  156 => 55,  153 => 54,  150 => 53,  133 => 52,  126 => 48,  120 => 47,  116 => 45,  113 => 44,  111 => 43,  108 => 42,  101 => 38,  95 => 35,  90 => 32,  87 => 31,  85 => 30,  73 => 24,  62 => 21,  59 => 20,  54 => 19,  52 => 18,  45 => 14,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/Applications/MAMP/htdocs/smeagonline/web/themes/default-b/views/default/index.html.twig");
    }
}
