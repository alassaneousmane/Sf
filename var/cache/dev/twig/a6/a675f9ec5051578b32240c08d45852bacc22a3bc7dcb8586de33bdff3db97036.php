<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2725fb50ad24d51cec6755f215e2c48bd0939369dc7fadb1dee198b87e35bd88 extends Twig_Template
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
        $__internal_01fff8afc31c3e93c567578044973734a7a562cee2e032a6f820f2fdb2caaca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fff8afc31c3e93c567578044973734a7a562cee2e032a6f820f2fdb2caaca8->enter($__internal_01fff8afc31c3e93c567578044973734a7a562cee2e032a6f820f2fdb2caaca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_aea0ae91a74c0426a30c6d7906f02d8cef98ecccbab02eedc11faaff970bfef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea0ae91a74c0426a30c6d7906f02d8cef98ecccbab02eedc11faaff970bfef7->enter($__internal_aea0ae91a74c0426a30c6d7906f02d8cef98ecccbab02eedc11faaff970bfef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_01fff8afc31c3e93c567578044973734a7a562cee2e032a6f820f2fdb2caaca8->leave($__internal_01fff8afc31c3e93c567578044973734a7a562cee2e032a6f820f2fdb2caaca8_prof);

        
        $__internal_aea0ae91a74c0426a30c6d7906f02d8cef98ecccbab02eedc11faaff970bfef7->leave($__internal_aea0ae91a74c0426a30c6d7906f02d8cef98ecccbab02eedc11faaff970bfef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
