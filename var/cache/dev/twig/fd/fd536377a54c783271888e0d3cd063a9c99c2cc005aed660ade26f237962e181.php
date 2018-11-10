<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2a471623c4c29acbb861f3190d8e65fb4cd6e88de76d35e6d4f40ce64eb149a3 extends Twig_Template
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
        $__internal_188f9bec412bd0566542844a3db94f48d79255003733d731d89dee200f294d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188f9bec412bd0566542844a3db94f48d79255003733d731d89dee200f294d86->enter($__internal_188f9bec412bd0566542844a3db94f48d79255003733d731d89dee200f294d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bd592536569e2b65441637c9d33e8ee0d273fcd6708da5ab6854d5858a7769f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd592536569e2b65441637c9d33e8ee0d273fcd6708da5ab6854d5858a7769f7->enter($__internal_bd592536569e2b65441637c9d33e8ee0d273fcd6708da5ab6854d5858a7769f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_188f9bec412bd0566542844a3db94f48d79255003733d731d89dee200f294d86->leave($__internal_188f9bec412bd0566542844a3db94f48d79255003733d731d89dee200f294d86_prof);

        
        $__internal_bd592536569e2b65441637c9d33e8ee0d273fcd6708da5ab6854d5858a7769f7->leave($__internal_bd592536569e2b65441637c9d33e8ee0d273fcd6708da5ab6854d5858a7769f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
