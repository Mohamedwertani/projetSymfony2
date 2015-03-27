<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b1a713149cea59cd8c24185036d5284f8f000e7829e1f76ec0adcae1c6119009 extends Twig_Template
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
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 4
        echo "  
        <div class=\"span12\">
  
            <div class=\"widget widget-content\">
 
                ";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "            </div> 
        </div>
    </div>
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "
                    ";
        // line 11
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 12
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  64 => 11,  61 => 10,  58 => 9,  51 => 14,  49 => 9,  42 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
