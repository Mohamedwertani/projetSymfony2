<?php

/* ::deconnectTemplet.html.twig */
class __TwigTemplate_e5a19bb89670030765a2ec19a8939c076af27d9af1ea3ede51a5abfd4e086433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'connect_lien' => array($this, 'block_connect_lien'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>Login - Bootstrap Admin Template</title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"> 

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\">

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    </head>

    <body>

        <div class=\"navbar navbar-fixed-top\">

            <div class=\"navbar-inner\">

                <div class=\"container\">

                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <a class=\"brand\" href=\"index.html\">
                        Projet Web Symfony 2\t\t\t\t
                    </a>\t\t

                    <div class=\"nav-collapse\">
                        <ul class=\"nav pull-right\">
                            ";
        // line 42
        $this->displayBlock('connect_lien', $context, $blocks);
        // line 45
        echo "                            <li class=\"\">\t\t\t\t\t\t
                                <a href=\"index.html\" class=\"\">
                                    <i class=\"icon-chevron-left\"></i>
                                    Back to Homepage
                                </a>

                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->\t

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->

        ";
        // line 62
        $this->displayBlock('main', $context, $blocks);
        // line 65
        echo "

        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/signin.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>


";
    }

    // line 42
    public function block_connect_lien($context, array $blocks = array())
    {
        // line 43
        echo "
                            ";
    }

    // line 62
    public function block_main($context, array $blocks = array())
    {
        // line 63
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "::deconnectTemplet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  135 => 62,  130 => 43,  127 => 42,  115 => 70,  110 => 68,  106 => 67,  102 => 65,  100 => 62,  81 => 45,  79 => 42,  52 => 18,  48 => 17,  42 => 14,  37 => 12,  33 => 11,  21 => 1,);
    }
}
