<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7842610dcbfba82643a6092c4c86d142b7ff3c7122e2ef7d5ae047647daffd6d extends Twig_Template
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
        $__internal_9b361696534a5fe25479df0bd9b34f553d5f3623820263d7d3ce93f2528b9ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b361696534a5fe25479df0bd9b34f553d5f3623820263d7d3ce93f2528b9ecf->enter($__internal_9b361696534a5fe25479df0bd9b34f553d5f3623820263d7d3ce93f2528b9ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5ba076b26c0e4c33ed8f4cb196e03c7471704cd50268d31ca335f864d65b60f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba076b26c0e4c33ed8f4cb196e03c7471704cd50268d31ca335f864d65b60f5->enter($__internal_5ba076b26c0e4c33ed8f4cb196e03c7471704cd50268d31ca335f864d65b60f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9b361696534a5fe25479df0bd9b34f553d5f3623820263d7d3ce93f2528b9ecf->leave($__internal_9b361696534a5fe25479df0bd9b34f553d5f3623820263d7d3ce93f2528b9ecf_prof);

        
        $__internal_5ba076b26c0e4c33ed8f4cb196e03c7471704cd50268d31ca335f864d65b60f5->leave($__internal_5ba076b26c0e4c33ed8f4cb196e03c7471704cd50268d31ca335f864d65b60f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
