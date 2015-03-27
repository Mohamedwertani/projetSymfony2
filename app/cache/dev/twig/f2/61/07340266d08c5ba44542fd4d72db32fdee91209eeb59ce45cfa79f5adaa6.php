<?php

/* UserAdminBundle:Registration:register.html.twig */
class __TwigTemplate_f26107340266d08c5ba44542fd4d72db32fdee91209eeb59ce45cfa79f5adaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'connect_lien' => array($this, 'block_connect_lien'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
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

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "    
 ";
        // line 12
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  58 => 12,  55 => 11,  52 => 10,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
