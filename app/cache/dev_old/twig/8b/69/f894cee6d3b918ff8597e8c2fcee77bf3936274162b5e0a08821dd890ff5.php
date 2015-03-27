<?php

/* ::layout-1.html.twig */
class __TwigTemplate_8b69f894cee6d3b918ff8597e8c2fcee77bf3936274162b5e0a08821dd890ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar' => array($this, 'block_navbar'),
            'connect_lien' => array($this, 'block_connect_lien'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\"
              rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->

        ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/dashboard.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">

        ";
        } else {
            // line 27
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/signin.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        }
        // line 29
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 30
        echo "    </head>
    <body>


        <div class=\"navbar navbar-fixed-top\">

            <div class=\"navbar-inner\">

                <div class=\"container\">
                    ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "
                        ";
            // line 41
            $this->displayBlock('navbar', $context, $blocks);
            // line 67
            echo "
                    ";
        } else {
            // line 69
            echo "
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                        <a class=\"brand\" href=\"index.html\">
                            Projet Web Symfony 2\t
                        </a>

                        <div class=\"nav-collapse\">
                            <ul class=\"nav pull-right\">
                                <li class=\"\"> 
                                    ";
            // line 83
            $this->displayBlock('connect_lien', $context, $blocks);
            // line 90
            echo "                                </li>
                                <li class=\"\">\t\t\t\t\t\t
                                    <a href=\"index.html\" class=\"\">
                                        <i class=\"icon-chevron-left\"></i>
                                        Back to Homepage
                                    </a>

                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->\t

                    ";
        }
        // line 104
        echo "

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->
        ";
        // line 111
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 112
            echo "            <div class=\"subnavbar\">
                <div class=\"subnavbar-inner\">
                    <div class=\"container\">
                        <ul class=\"mainnav\">
                            <li class=\"active\"><a href=\"index.html\"><i class=\"icon-dashboard\"></i><span>Dashboard</span> </a> </li>
                            <li><a href=\"reports.html\"><i class=\"icon-list-alt\"></i><span>Reports</span> </a> </li>
                            <li><a href=\"guidely.html\"><i class=\"icon-facetime-video\"></i><span>App Tour</span> </a></li>
                            <li><a href=\"charts.html\"><i class=\"icon-bar-chart\"></i><span>Charts</span> </a> </li>
                            <li><a href=\"shortcodes.html\"><i class=\"icon-code\"></i><span>Shortcodes</span> </a> </li>
                            <li class=\"dropdown\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"icon-long-arrow-down\"></i><span>Drops</span> <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"icons.html\">Icons</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"pricing.html\">Pricing Plans</a></li>
                                    <li><a href=\"login.html\">Login</a></li>
                                    <li><a href=\"signup.html\">Signup</a></li>
                                    <li><a href=\"error.html\">404</a></li>
                                </ul>
                            </li>
                            ";
            // line 131
            $this->displayBlock('menu', $context, $blocks);
            // line 133
            echo "                        </ul>
                    </div>
                    <!-- /container --> 
                </div>
                <!-- /subnavbar-inner --> 
            </div>
            <!-- /subnavbar -->
        ";
        } else {
            // line 141
            echo "
        ";
        }
        // line 142
        echo "  

        ";
        // line 144
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 145
            echo "            <div class=\"main\">
                <div class=\"main-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12\">
                                ";
            // line 150
            $this->displayBlock('content', $context, $blocks);
            // line 388
            echo "                            </div>
                        </div>
                        <!-- /row --> 
                    </div>
                    <!-- /container --> 
                </div>
                <!-- /main-inner --> 
            </div>
            <!-- /main -->
        ";
        } else {
            // line 398
            echo "
            <div class=\"account-container\">

                <div class=\"content clearfix\">
                    ";
            // line 402
            $this->displayBlock('main', $context, $blocks);
            // line 406
            echo "                </div>
            </div> 

        ";
        }
        // line 410
        echo "
        ";
        // line 411
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 412
            echo "

            <div class=\"extra\">
                <div class=\"extra-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span3\">
                                <h4>
                                    About Free Admin Template</h4>
                                <ul>
                                    <li><a href=\"javascript:;\">EGrappler.com</a></li>
                                    <li><a href=\"javascript:;\">Web Development Resources</a></li>
                                    <li><a href=\"javascript:;\">Responsive HTML5 Portfolio Templates</a></li>
                                    <li><a href=\"javascript:;\">Free Resources and Scripts</a></li>
                                </ul>
                            </div>
                            <!-- /span3 -->
                            <div class=\"span3\">
                                <h4>
                                    Support</h4>
                                <ul>
                                    <li><a href=\"javascript:;\">Frequently Asked Questions</a></li>
                                    <li><a href=\"javascript:;\">Ask a Question</a></li>
                                    <li><a href=\"javascript:;\">Video Tutorial</a></li>
                                    <li><a href=\"javascript:;\">Feedback</a></li>
                                </ul>
                            </div>
                            <!-- /span3 -->
                            <div class=\"span3\">
                                <h4>
                                    Something Legal</h4>
                                <ul>
                                    <li><a href=\"javascript:;\">Read License</a></li>
                                    <li><a href=\"javascript:;\">Terms of Use</a></li>
                                    <li><a href=\"javascript:;\">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <!-- /span3 -->
                            <div class=\"span3\">
                                <h4>
                                    Open Source jQuery Plugins</h4>
                                <ul>
                                    <li><a href=\"http://www.egrappler.com\">Open Source jQuery Plugins</a></li>
                                    <li><a href=\"http://www.egrappler.com;\">HTML5 Responsive Tempaltes</a></li>
                                    <li><a href=\"http://www.egrappler.com;\">Free Contact Form Plugin</a></li>
                                    <li><a href=\"http://www.egrappler.com;\">Flat UI PSD</a></li>
                                </ul>
                            </div>
                            <!-- /span3 -->
                        </div>
                        <!-- /row --> 
                    </div>
                    <!-- /container --> 
                </div>
                <!-- /extra-inner --> 
            </div>
            <!-- /extra -->
            <div class=\"footer\">
                <div class=\"footer-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12\"> &copy; 2013 <a href=\"http://www.egrappler.com/\">Bootstrap Responsive Admin Template</a>. </div>
                            <!-- /span12 --> 
                        </div>
                        <!-- /row --> 
                    </div>
                    <!-- /container --> 
                </div>
                <!-- /footer-inner --> 
            </div>
            <!-- /footer --> 
            <!-- Le javascript
            ================================================== --> 
            <!-- Placed at the end of the document so the pages load faster --> 
            <script src=\"";
            // line 486
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
            echo "\"></script> 
            <script src=\"";
            // line 487
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/excanvas.min.js"), "html", null, true);
            echo "\"></script> 
            <script src=\"";
            // line 488
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/chart.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script> 
            <script src=\"";
            // line 489
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
            <script language=\"javascript\" type=\"text/javascript\" src=\"";
            // line 490
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/full-calendar/fullcalendar.min.js"), "html", null, true);
            echo "\"></script>

            <script src=\"";
            // line 492
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/base.js"), "html", null, true);
            echo "\"></script> 
            <script>

                var lineChartData = {
                    labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                    datasets: [
                        {
                            fillColor: \"rgba(220,220,220,0.5)\",
                            strokeColor: \"rgba(220,220,220,1)\",
                            pointColor: \"rgba(220,220,220,1)\",
                            pointStrokeColor: \"#fff\",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            fillColor: \"rgba(151,187,205,0.5)\",
                            strokeColor: \"rgba(151,187,205,1)\",
                            pointColor: \"rgba(151,187,205,1)\",
                            pointStrokeColor: \"#fff\",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]

                }

                var myLine = new Chart(document.getElementById(\"area-chart\").getContext(\"2d\")).Line(lineChartData);


                var barChartData = {
                    labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                    datasets: [
                        {
                            fillColor: \"rgba(220,220,220,0.5)\",
                            strokeColor: \"rgba(220,220,220,1)\",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            fillColor: \"rgba(151,187,205,0.5)\",
                            strokeColor: \"rgba(151,187,205,1)\",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]

                }

                \$(document).ready(function () {
                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();
                    var calendar = \$('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        selectable: true,
                        selectHelper: true,
                        select: function (start, end, allDay) {
                            var title = prompt('Event Title:');
                            if (title) {
                                calendar.fullCalendar('renderEvent',
                                        {
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },
                                true // make the event \"stick\"
                                        );
                            }
                            calendar.fullCalendar('unselect');
                        },
                        editable: true,
                        events: [
                            {
                                title: 'All Day Event',
                                start: new Date(y, m, 1)
                            },
                            {
                                title: 'Long Event',
                                start: new Date(y, m, d + 5),
                                end: new Date(y, m, d + 7)
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d - 3, 16, 0),
                                allDay: false
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d + 4, 16, 0),
                                allDay: false
                            },
                            {
                                title: 'Meeting',
                                start: new Date(y, m, d, 10, 30),
                                allDay: false
                            },
                            {
                                title: 'Lunch',
                                start: new Date(y, m, d, 12, 0),
                                end: new Date(y, m, d, 14, 0),
                                allDay: false
                            },
                            {
                                title: 'Birthday Party',
                                start: new Date(y, m, d + 1, 19, 0),
                                end: new Date(y, m, d + 1, 22, 30),
                                allDay: false
                            },
                            {
                                title: 'EGrappler.com',
                                start: new Date(y, m, 28),
                                end: new Date(y, m, 29),
                                url: 'http://EGrappler.com/'
                            }
                        ]
                    });
                });
            </script><!-- /Calendar -->

        ";
        } else {
            // line 616
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
            echo "\"></script> 
            <script src=\"";
            // line 617
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 618
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/signin.js"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 620
        echo "
    ";
        // line 621
        $this->displayBlock('javascripts', $context, $blocks);
        // line 622
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Dashboard - Bootstrap Admin Template  ";
    }

    // line 29
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " ";
    }

    // line 41
    public function block_navbar($context, array $blocks = array())
    {
        // line 42
        echo "                            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                                <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span> </a><a class=\"brand\" href=\"index.html\">Bootstrap Admin Template </a>
                            <div class=\"nav-collapse\">
                                <ul class=\"nav pull-right\">
                                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
                                                class=\"icon-cog\"></i> Account <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"javascript:;\">Settings</a></li>
                                            <li><a href=\"javascript:;\">Help</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
                                                class=\"icon-user\"></i> EGrappler.com <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class=\"navbar-search pull-right\">
                                    <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                                </form>
                            </div>
                            <!--/.nav-collapse --> 
                        ";
    }

    // line 83
    public function block_connect_lien($context, array $blocks = array())
    {
        // line 84
        echo "                                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 85
            echo "
                                        ";
        } else {
            // line 87
            echo "                                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 89
        echo "                                    ";
    }

    // line 131
    public function block_menu($context, array $blocks = array())
    {
        // line 132
        echo "                            ";
    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        // line 151
        echo "

                                    <div class=\"span6\">
                                        <div class=\"widget widget-nopad\">
                                            <div class=\"widget-header\"> <i class=\"icon-list-alt\"></i>
                                                <h3> Today's Stats</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <div class=\"widget big-stats-container\">
                                                    <div class=\"widget-content\">
                                                        <h6 class=\"bigstats\">A fully responsive premium quality admin template built on Twitter Bootstrap by <a href=\"http://www.egrappler.com\" target=\"_blank\">EGrappler.com</a>.  These are some dummy lines to fill the area.</h6>
                                                        <div id=\"big_stats\" class=\"cf\">
                                                            <div class=\"stat\"> <i class=\"icon-anchor\"></i> <span class=\"value\">851</span> </div>
                                                            <!-- .stat -->

                                                            <div class=\"stat\"> <i class=\"icon-thumbs-up-alt\"></i> <span class=\"value\">423</span> </div>
                                                            <!-- .stat -->

                                                            <div class=\"stat\"> <i class=\"icon-twitter-sign\"></i> <span class=\"value\">922</span> </div>
                                                            <!-- .stat -->

                                                            <div class=\"stat\"> <i class=\"icon-bullhorn\"></i> <span class=\"value\">25%</span> </div>
                                                            <!-- .stat --> 
                                                        </div>
                                                    </div>
                                                    <!-- /widget-content --> 

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /widget -->
                                        <div class=\"widget widget-nopad\">
                                            <div class=\"widget-header\"> <i class=\"icon-list-alt\"></i>
                                                <h3> Recent News</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <div id='calendar'>
                                                </div>
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget -->
                                        <div class=\"widget\">
                                            <div class=\"widget-header\"> <i class=\"icon-file\"></i>
                                                <h3> Content</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <ul class=\"messages_layout\">
                                                    <li class=\"from_user left\"> <a href=\"#\" class=\"avatar\"><img src=\"img/message_avatar1.png\"/></a>
                                                        <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                                                            <div class=\"info\"> <a class=\"name\">John Smith</a> <span class=\"time\">1 hour ago</span>
                                                                <div class=\"options_arrow\">
                                                                    <div class=\"dropdown pull-right\"> <a class=\"dropdown-toggle \" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\"> <i class=\" icon-caret-down\"></i> </a>
                                                                        <ul class=\"dropdown-menu \" role=\"menu\" aria-labelledby=\"dLabel\">
                                                                            <li><a href=\"#\"><i class=\" icon-share-alt icon-large\"></i> Reply</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-trash icon-large\"></i> Delete</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-share icon-large\"></i> Share</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"text\"> As an interesting side note, as a head without a body, I envy the dead. There's one way and only one way to determine if an animal is intelligent. Dissect its brain! Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"by_myself right\"> <a href=\"#\" class=\"avatar\"><img src=\"img/message_avatar2.png\"/></a>
                                                        <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                                                            <div class=\"info\"> <a class=\"name\">Bender (myself) </a> <span class=\"time\">4 hours ago</span>
                                                                <div class=\"options_arrow\">
                                                                    <div class=\"dropdown pull-right\"> <a class=\"dropdown-toggle \" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\"> <i class=\" icon-caret-down\"></i> </a>
                                                                        <ul class=\"dropdown-menu \" role=\"menu\" aria-labelledby=\"dLabel\">
                                                                            <li><a href=\"#\"><i class=\" icon-share-alt icon-large\"></i> Reply</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-trash icon-large\"></i> Delete</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-share icon-large\"></i> Share</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"text\"> All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! I had more, but you go ahead. Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. File not found. </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"from_user left\"> <a href=\"#\" class=\"avatar\"><img src=\"img/message_avatar1.png\"/></a>
                                                        <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                                                            <div class=\"info\"> <a class=\"name\">Celeste Holm </a> <span class=\"time\">1 Day ago</span>
                                                                <div class=\"options_arrow\">
                                                                    <div class=\"dropdown pull-right\"> <a class=\"dropdown-toggle \" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\"> <i class=\" icon-caret-down\"></i> </a>
                                                                        <ul class=\"dropdown-menu \" role=\"menu\" aria-labelledby=\"dLabel\">
                                                                            <li><a href=\"#\"><i class=\" icon-share-alt icon-large\"></i> Reply</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-trash icon-large\"></i> Delete</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-share icon-large\"></i> Share</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"text\"> And I'd do it again! And perhaps a third time! But that would be it. Are you crazy? I can't swallow that. And I'm his friend Jesus. No, I'm Santa Claus! And from now on you're all named Bender Jr. </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"from_user left\"> <a href=\"#\" class=\"avatar\"><img src=\"img/message_avatar2.png\"/></a>
                                                        <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                                                            <div class=\"info\"> <a class=\"name\">Mark Jobs </a> <span class=\"time\">2 Days ago</span>
                                                                <div class=\"options_arrow\">
                                                                    <div class=\"dropdown pull-right\"> <a class=\"dropdown-toggle \" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\"> <i class=\" icon-caret-down\"></i> </a>
                                                                        <ul class=\"dropdown-menu \" role=\"menu\" aria-labelledby=\"dLabel\">
                                                                            <li><a href=\"#\"><i class=\" icon-share-alt icon-large\"></i> Reply</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-trash icon-large\"></i> Delete</a></li>
                                                                            <li><a href=\"#\"><i class=\" icon-share icon-large\"></i> Share</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"text\"> That's the ONLY thing about being a slave. Now, now. Perfectly symmetrical violence never solved anything. Uh, is the puppy mechanical in any way? As an interesting side note, as a head without a body, I envy the dead. </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget --> 
                                    </div>
                                    <!-- /span6 -->
                                    <div class=\"span6\">
                                        <div class=\"widget\">
                                            <div class=\"widget-header\"> <i class=\"icon-bookmark\"></i>
                                                <h3>Important Shortcuts</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <div class=\"shortcuts\"> <a href=\"javascript:;\" class=\"shortcut\"><i class=\"shortcut-icon icon-list-alt\"></i><span
                                                            class=\"shortcut-label\">Apps</span> </a><a href=\"javascript:;\" class=\"shortcut\"><i
                                                            class=\"shortcut-icon icon-bookmark\"></i><span class=\"shortcut-label\">Bookmarks</span> </a><a href=\"javascript:;\" class=\"shortcut\"><i class=\"shortcut-icon icon-signal\"></i> <span class=\"shortcut-label\">Reports</span> </a><a href=\"javascript:;\" class=\"shortcut\"> <i class=\"shortcut-icon icon-comment\"></i><span class=\"shortcut-label\">Comments</span> </a><a href=\"javascript:;\" class=\"shortcut\"><i class=\"shortcut-icon icon-user\"></i><span
                                                            class=\"shortcut-label\">Users</span> </a><a href=\"javascript:;\" class=\"shortcut\"><i
                                                            class=\"shortcut-icon icon-file\"></i><span class=\"shortcut-label\">Notes</span> </a><a href=\"javascript:;\" class=\"shortcut\"><i class=\"shortcut-icon icon-picture\"></i> <span class=\"shortcut-label\">Photos</span> </a><a href=\"javascript:;\" class=\"shortcut\"> <i class=\"shortcut-icon icon-tag\"></i><span class=\"shortcut-label\">Tags</span> </a> </div>
                                                <!-- /shortcuts --> 
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget -->
                                        <div class=\"widget\">
                                            <div class=\"widget-header\"> <i class=\"icon-signal\"></i>
                                                <h3> Area Chart Example</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <canvas id=\"area-chart\" class=\"chart-holder\" height=\"250\" width=\"538\"> </canvas>
                                                <!-- /area-chart --> 
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget -->
                                        <div class=\"widget widget-table action-table\">
                                            <div class=\"widget-header\"> <i class=\"icon-th-list\"></i>
                                                <h3>A Table Example</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <table class=\"table table-striped table-bordered\">
                                                    <thead>
                                                        <tr>
                                                            <th> Free Resource </th>
                                                            <th> Download</th>
                                                            <th class=\"td-actions\"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Fresh Web Development Resources </td>
                                                            <td> http://www.egrappler.com/ </td>
                                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"javascript:;\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Fresh Web Development Resources </td>
                                                            <td> http://www.egrappler.com/ </td>
                                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"javascript:;\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Fresh Web Development Resources </td>
                                                            <td> http://www.egrappler.com/ </td>
                                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"javascript:;\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Fresh Web Development Resources </td>
                                                            <td> http://www.egrappler.com/ </td>
                                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"javascript:;\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Fresh Web Development Resources </td>
                                                            <td> http://www.egrappler.com/ </td>
                                                            <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"javascript:;\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget --> 
                                        <div class=\"widget widget-nopad\">
                                            <div class=\"widget-header\"> <i class=\"icon-list-alt\"></i>
                                                <h3> Recent News</h3>
                                            </div>
                                            <!-- /widget-header -->
                                            <div class=\"widget-content\">
                                                <ul class=\"news-items\">
                                                    <li>

                                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">29</span> <span class=\"news-item-month\">Aug</span> </div>
                                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/thursday-roundup-40/\" class=\"news-item-title\" target=\"_blank\">Thursday Roundup # 40</a>
                                                            <p class=\"news-item-preview\"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">15</span> <span class=\"news-item-month\">Jun</span> </div>
                                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/\" class=\"news-item-title\" target=\"_blank\">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                                                            <p class=\"news-item-preview\"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class=\"news-item-date\"> <span class=\"news-item-day\">29</span> <span class=\"news-item-month\">Oct</span> </div>
                                                        <div class=\"news-item-detail\"> <a href=\"http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/\" class=\"news-item-title\" target=\"_blank\">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                                                            <p class=\"news-item-preview\"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /widget-content --> 
                                        </div>
                                        <!-- /widget -->
                                    </div>
                                    <!-- /span6 --> 
                                ";
    }

    // line 402
    public function block_main($context, array $blocks = array())
    {
        // line 403
        echo "

                    ";
    }

    // line 621
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 621,  811 => 403,  808 => 402,  568 => 151,  565 => 150,  561 => 132,  558 => 131,  554 => 89,  546 => 87,  542 => 85,  539 => 84,  536 => 83,  522 => 57,  518 => 56,  502 => 42,  499 => 41,  493 => 29,  487 => 6,  480 => 622,  478 => 621,  475 => 620,  470 => 618,  466 => 617,  461 => 616,  334 => 492,  329 => 490,  325 => 489,  321 => 488,  317 => 487,  313 => 486,  237 => 412,  235 => 411,  232 => 410,  226 => 406,  224 => 402,  218 => 398,  206 => 388,  204 => 150,  197 => 145,  195 => 144,  191 => 142,  187 => 141,  177 => 133,  175 => 131,  154 => 112,  152 => 111,  143 => 104,  127 => 90,  125 => 83,  109 => 69,  105 => 67,  103 => 41,  100 => 40,  98 => 39,  87 => 30,  84 => 29,  78 => 27,  71 => 24,  69 => 23,  59 => 16,  55 => 15,  51 => 14,  45 => 11,  41 => 10,  34 => 6,  27 => 1,);
    }
}
