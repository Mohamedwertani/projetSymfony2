<?php

/* ::footer.html.twig */
class __TwigTemplate_ce2aec35e1c675fb047d5f3723e0c940fa5f526fb1caa030214ff43a16bce763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
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
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
            echo "\"></script> 
    <script src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/excanvas.min.js"), "html", null, true);
            echo "\"></script> 
    <script src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/chart.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script> 
    <script src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/full-calendar/fullcalendar.min.js"), "html", null, true);
            echo "\"></script>

    <script src=\"";
            // line 82
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
            // line 206
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
            echo "\"></script> 
    <script src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/signin.js"), "html", null, true);
            echo "\"></script>
 ";
        }
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('javascripts', $context, $blocks);
        // line 212
        echo " 
</body>
</html>
";
    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 211,  265 => 212,  263 => 211,  260 => 210,  255 => 208,  251 => 207,  246 => 206,  119 => 82,  114 => 80,  110 => 79,  106 => 78,  102 => 77,  98 => 76,  22 => 2,  20 => 1,);
    }
}
