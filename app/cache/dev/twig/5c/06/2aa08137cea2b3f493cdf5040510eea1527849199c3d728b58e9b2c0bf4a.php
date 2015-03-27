<?php

/* UserAdminBundle:Profile:login.html.twig */
class __TwigTemplate_5c062aa08137cea2b3f493cdf5040510eea1527849199c3d728b58e9b2c0bf4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'connect_lien' => array($this, 'block_connect_lien'),
            'main' => array($this, 'block_main'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_connect_lien($context, array $blocks = array())
    {
        // line 3
        echo "    <li class=\"\">\t\t\t\t\t\t
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("user_admin_homepage_signup");
        echo "\" class=\"\">
            Don't have an account?
        </a>
    </li>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 58
        echo "
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"account-container\">

        <div class=\"content clearfix\">

            <form action=\"#\" method=\"post\">

                <h1>Member Login</h1>\t\t

                <div class=\"login-fields\">

                    <p>Please provide your details</p>

                    <div class=\"field\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"username\" value=\"\" placeholder=\"Username\" class=\"login username-field\" />
                    </div> <!-- /field -->

                    <div class=\"field\">
                        <label for=\"password\">Password:</label>
                        <input type=\"password\" id=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"login password-field\"/>
                    </div> <!-- /password -->

                </div> <!-- /login-fields -->

                <div class=\"login-actions\">

                    <span class=\"login-checkbox\">
                        <input id=\"Field\" name=\"Field\" type=\"checkbox\" class=\"field login-checkbox\" value=\"First Choice\" tabindex=\"4\" />
                        <label class=\"choice\" for=\"Field\">Keep me signed in</label>
                    </span>

                    <button class=\"button btn btn-success btn-large\">Sign In</button>

                </div> <!-- .actions -->
 
            </form>
        </div> <!-- /content -->

    </div> <!-- /account-container -->



    <div class=\"login-extra\">
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("user_admin_homepage_login");
        echo "\">Reset Password</a>
    </div> <!-- /login-extra -->
    ";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Profile:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  66 => 11,  63 => 10,  58 => 58,  56 => 10,  53 => 9,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
