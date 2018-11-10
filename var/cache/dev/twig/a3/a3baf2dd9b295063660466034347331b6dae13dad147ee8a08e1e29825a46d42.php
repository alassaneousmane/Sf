<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_e01be92af140453f4ee7e72e1255c9ff7e62acee898e48b98c7da5c38146f1cc extends Twig_Template
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
        $__internal_31ddc84309b9fbfd8396d3b9938e5801b4f56f189ccaa8f6a451cb18fb842586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ddc84309b9fbfd8396d3b9938e5801b4f56f189ccaa8f6a451cb18fb842586->enter($__internal_31ddc84309b9fbfd8396d3b9938e5801b4f56f189ccaa8f6a451cb18fb842586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ca402c1aa848ccadcd016fd356677cc29238e90687e961af773243fad947243b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca402c1aa848ccadcd016fd356677cc29238e90687e961af773243fad947243b->enter($__internal_ca402c1aa848ccadcd016fd356677cc29238e90687e961af773243fad947243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_31ddc84309b9fbfd8396d3b9938e5801b4f56f189ccaa8f6a451cb18fb842586->leave($__internal_31ddc84309b9fbfd8396d3b9938e5801b4f56f189ccaa8f6a451cb18fb842586_prof);

        
        $__internal_ca402c1aa848ccadcd016fd356677cc29238e90687e961af773243fad947243b->leave($__internal_ca402c1aa848ccadcd016fd356677cc29238e90687e961af773243fad947243b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
