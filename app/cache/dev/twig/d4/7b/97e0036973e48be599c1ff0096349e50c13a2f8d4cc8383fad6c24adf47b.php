<?php

/* UserAdminBundle:Group:new.html.twig */
class __TwigTemplate_d47b97e0036973e48be599c1ff0096349e50c13a2f8d4cc8383fad6c24adf47b extends Twig_Template
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

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"account-container\">

        <div class=\"content clearfix\">
            ";
        // line 7
        $this->env->loadTemplate("FOSUserBundle:Group:new_content.html.twig")->display($context);
        // line 8
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
