<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2035ea6fdfcb8bc09ea29411fcc704a7f856b2b694d08ade75a71198269317a0 extends Twig_Template
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
        $__internal_cd1aad9770335cc35fe5181f908425aa93cdfda3cd7b7a638662d0d0867b31d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1aad9770335cc35fe5181f908425aa93cdfda3cd7b7a638662d0d0867b31d1->enter($__internal_cd1aad9770335cc35fe5181f908425aa93cdfda3cd7b7a638662d0d0867b31d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7cef109fbaf758add099fdeb3e15c278459256be4f70c95ad65fdeef878c60be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cef109fbaf758add099fdeb3e15c278459256be4f70c95ad65fdeef878c60be->enter($__internal_7cef109fbaf758add099fdeb3e15c278459256be4f70c95ad65fdeef878c60be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cd1aad9770335cc35fe5181f908425aa93cdfda3cd7b7a638662d0d0867b31d1->leave($__internal_cd1aad9770335cc35fe5181f908425aa93cdfda3cd7b7a638662d0d0867b31d1_prof);

        
        $__internal_7cef109fbaf758add099fdeb3e15c278459256be4f70c95ad65fdeef878c60be->leave($__internal_7cef109fbaf758add099fdeb3e15c278459256be4f70c95ad65fdeef878c60be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
