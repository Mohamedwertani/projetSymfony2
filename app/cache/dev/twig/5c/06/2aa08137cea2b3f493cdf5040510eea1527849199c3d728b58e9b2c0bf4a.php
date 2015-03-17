<?php

/* UserAdminBundle:Profile:login.html.twig */
class __TwigTemplate_5c062aa08137cea2b3f493cdf5040510eea1527849199c3d728b58e9b2c0bf4a extends Twig_Template
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
        echo "
    <div class=\"account-container\">

        <div class=\"content clearfix\">
            ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 17
        echo "
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <label for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
            </form>
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
        // line 76
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
        return array (  151 => 76,  102 => 30,  97 => 28,  90 => 24,  85 => 22,  81 => 21,  76 => 19,  72 => 18,  69 => 17,  63 => 15,  61 => 14,  55 => 10,  52 => 9,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
