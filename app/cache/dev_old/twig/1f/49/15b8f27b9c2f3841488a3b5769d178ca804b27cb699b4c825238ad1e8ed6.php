<?php

/* navtop.html.twig */
class __TwigTemplate_1f4915b8f27b9c2f3841488a3b5769d178ca804b27cb699b4c825238ad1e8ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'connect_lien' => array($this, 'block_connect_lien'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"navbar navbar-fixed-top\">

    <div class=\"navbar-inner\">

        <div class=\"container\">
            ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "
                ";
            // line 9
            $this->displayBlock('navbar', $context, $blocks);
            // line 35
            echo "
            ";
        } else {
            // line 37
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
                        ";
            // line 50
            $this->displayBlock('connect_lien', $context, $blocks);
            // line 53
            echo "                        <li class=\"\">\t\t\t\t\t\t
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
        // line 66
        echo "

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
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
                                    <li><a href=\"javascript:;\">Profile</a></li>
                                    <li><a href=\"javascript:;\">Logout</a></li>
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

    // line 50
    public function block_connect_lien($context, array $blocks = array())
    {
        // line 51
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "navtop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  113 => 50,  85 => 10,  82 => 9,  72 => 66,  57 => 53,  55 => 50,  40 => 37,  36 => 35,  34 => 9,  31 => 8,  29 => 7,  21 => 1,);
    }
}
