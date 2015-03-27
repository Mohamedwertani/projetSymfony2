<?php

/* UserAdminBundle:Group:list.html.twig */
class __TwigTemplate_d372bf506af11aacd2b66c0774284a0df7c4bf3111785eea7c9a6afa7b661391 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
        // line 8
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Group:list.html.twig";
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
