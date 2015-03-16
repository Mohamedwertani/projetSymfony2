<?php

/* UserAdminBundle:Login:login.html.twig */
class __TwigTemplate_c5945e95f0664e7f663a25597693e3c576ec782fe136ca91e9ac26f296ec085d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  
<head>
    <meta charset=\"utf-8\">
    <title>Login - Bootstrap Admin Template</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
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
\t
\t<div class=\"navbar navbar-fixed-top\">
\t
\t<div class=\"navbar-inner\">
\t\t
\t\t<div class=\"container\">
\t\t\t
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"brand\" href=\"index.html\">
\t\t\t\tBootstrap Admin Template\t\t\t\t
\t\t\t</a>\t\t
\t\t\t
\t\t\t<div class=\"nav-collapse\">
\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t
\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"signup.html\" class=\"\">
\t\t\t\t\t\t\tDon't have an account?
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"index.html\" class=\"\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t\tBack to Homepage
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div><!--/.nav-collapse -->\t
\t
\t\t</div> <!-- /container -->
\t\t
\t</div> <!-- /navbar-inner -->
\t
</div> <!-- /navbar -->



<div class=\"account-container\">
\t
\t<div class=\"content clearfix\">
\t\t
\t\t<form action=\"#\" method=\"post\">
\t\t
\t\t\t<h1>Member Login</h1>\t\t
\t\t\t
\t\t\t<div class=\"login-fields\">
\t\t\t\t
\t\t\t\t<p>Please provide your details</p>
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"username\" value=\"\" placeholder=\"Username\" class=\"login username-field\" />
\t\t\t\t</div> <!-- /field -->
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"login password-field\"/>
\t\t\t\t</div> <!-- /password -->
\t\t\t\t
\t\t\t</div> <!-- /login-fields -->
\t\t\t
\t\t\t<div class=\"login-actions\">
\t\t\t\t
\t\t\t\t<span class=\"login-checkbox\">
\t\t\t\t\t<input id=\"Field\" name=\"Field\" type=\"checkbox\" class=\"field login-checkbox\" value=\"First Choice\" tabindex=\"4\" />
\t\t\t\t\t<label class=\"choice\" for=\"Field\">Keep me signed in</label>
\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t<button class=\"button btn btn-success btn-large\">Sign In</button>
\t\t\t\t
\t\t\t</div> <!-- .actions -->
\t\t\t
\t\t\t
\t\t\t
\t\t</form>
\t\t
\t</div> <!-- /content -->
\t
</div> <!-- /account-container -->



<div class=\"login-extra\">
\t<a href=\"#\">Reset Password</a>
</div> <!-- /login-extra -->


<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/signin.js"), "html", null, true);
        echo "\"></script>

</body>

</html>

 
";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 122,  158 => 120,  154 => 119,  50 => 18,  46 => 17,  40 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
