<?php

/* UserAdminBundle:Group:edit.html.twig */
class __TwigTemplate_8c8aa301b16f1ec0e2140e2c69bd002226bec947ddb1a2dd1d578f2125dd5b5d extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Group:edit_content.html.twig")->display($context);
        // line 8
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Group:edit.html.twig";
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
