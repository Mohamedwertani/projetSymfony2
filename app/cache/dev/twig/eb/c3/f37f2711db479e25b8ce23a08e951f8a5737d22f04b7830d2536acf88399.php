<?php

/* ::nav.html.twig */
class __TwigTemplate_ebc3f37f2711db479e25b8ce23a08e951f8a5737d22f04b7830d2536acf88399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <div class=\"subnavbar\">
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
            // line 21
            $this->displayBlock('menu', $context, $blocks);
            // line 23
            echo "                </ul>
            </div>
            <!-- /container --> 
        </div>
        <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->
";
        } else {
            // line 31
            echo "
";
        }
    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  55 => 31,  45 => 23,  43 => 21,  22 => 2,  20 => 1,);
    }
}
