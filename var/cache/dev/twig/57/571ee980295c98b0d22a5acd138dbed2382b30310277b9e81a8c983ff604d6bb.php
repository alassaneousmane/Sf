<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4387a3e0330b52424a29c6687f098493cc746795f7a2c269889cface750f0ca2 extends Twig_Template
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
        $__internal_859822cea13cfb4017216da4b5e091dcc07385536b94eacdbbed50adc1e4360a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859822cea13cfb4017216da4b5e091dcc07385536b94eacdbbed50adc1e4360a->enter($__internal_859822cea13cfb4017216da4b5e091dcc07385536b94eacdbbed50adc1e4360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f39d3b7b195f8ec0bd1a34779cb07e54e70f25a5cd6d18f0ac8873f464225cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39d3b7b195f8ec0bd1a34779cb07e54e70f25a5cd6d18f0ac8873f464225cd7->enter($__internal_f39d3b7b195f8ec0bd1a34779cb07e54e70f25a5cd6d18f0ac8873f464225cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_859822cea13cfb4017216da4b5e091dcc07385536b94eacdbbed50adc1e4360a->leave($__internal_859822cea13cfb4017216da4b5e091dcc07385536b94eacdbbed50adc1e4360a_prof);

        
        $__internal_f39d3b7b195f8ec0bd1a34779cb07e54e70f25a5cd6d18f0ac8873f464225cd7->leave($__internal_f39d3b7b195f8ec0bd1a34779cb07e54e70f25a5cd6d18f0ac8873f464225cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
