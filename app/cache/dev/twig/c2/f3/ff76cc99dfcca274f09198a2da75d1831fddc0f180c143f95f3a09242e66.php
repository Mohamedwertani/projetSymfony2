<?php

/* UserAdminBundle:Profile:signup.html.twig */
class __TwigTemplate_c2f3ff76cc99dfcca274f09198a2da75d1831fddc0f180c143f95f3a09242e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::deconnectTemplet.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'connect_lien' => array($this, 'block_connect_lien'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::deconnectTemplet.html.twig";
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
        echo $this->env->getExtension('routing')->getPath("user_admin_homepage_login");
        echo "\" class=\"\">
            Already have an account? Login now
        </a>
    </li>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"account-container register\">

        <div class=\"content clearfix\">

            <form action=\"#\" method=\"post\">

                <h1>Signup for Free Account</h1>\t\t\t

                <div class=\"login-fields\">

                    <p>Create your free account:</p>

                    <div class=\"field\">
                        <label for=\"firstname\">First Name:</label>
                        <input type=\"text\" id=\"firstname\" name=\"firstname\" value=\"\" placeholder=\"First Name\" class=\"login\" />
                    </div> <!-- /field -->

                    <div class=\"field\">
                        <label for=\"lastname\">Last Name:</label>\t
                        <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"\" placeholder=\"Last Name\" class=\"login\" />
                    </div> <!-- /field -->


                    <div class=\"field\">
                        <label for=\"email\">Email Address:</label>
                        <input type=\"text\" id=\"email\" name=\"email\" value=\"\" placeholder=\"Email\" class=\"login\"/>
                    </div> <!-- /field -->

                    <div class=\"field\">
                        <label for=\"password\">Password:</label>
                        <input type=\"password\" id=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"login\"/>
                    </div> <!-- /field -->

                    <div class=\"field\">
                        <label for=\"confirm_password\">Confirm Password:</label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" value=\"\" placeholder=\"Confirm Password\" class=\"login\"/>
                    </div> <!-- /field -->

                </div> <!-- /login-fields -->

                <div class=\"login-actions\">

                    <span class=\"login-checkbox\">
                        <input id=\"Field\" name=\"Field\" type=\"checkbox\" class=\"field login-checkbox\" value=\"First Choice\" tabindex=\"4\" />
                        <label class=\"choice\" for=\"Field\">Agree with the Terms & Conditions.</label>
                    </span>

                    <button class=\"button btn btn-primary btn-large\">Register</button>

                </div> <!-- .actions -->

            </form>

        </div> <!-- /content -->

    </div> <!-- /account-container -->


    <!-- Text Under Box -->
    <div class=\"login-extra\">
        Already have an account? <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("user_admin_homepage_login");
        echo "\">Login to your account</a>
    </div> <!-- /login-extra -->

";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Profile:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 70,  55 => 10,  52 => 9,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
