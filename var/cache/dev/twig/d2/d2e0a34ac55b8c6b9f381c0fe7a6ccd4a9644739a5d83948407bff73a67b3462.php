<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0fb862fe91d8507f1f287adfd57766c5ae398cfad33de23b270fac89fb504b68 extends Twig_Template
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
        $__internal_868139ff9869a70b8adb473dc4cd881d28814f6e9a53432c64681f592c41afb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868139ff9869a70b8adb473dc4cd881d28814f6e9a53432c64681f592c41afb2->enter($__internal_868139ff9869a70b8adb473dc4cd881d28814f6e9a53432c64681f592c41afb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b994c946395b121b6b6b30587758e3f6e9422bb45d2eddae40478e9e3f802397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b994c946395b121b6b6b30587758e3f6e9422bb45d2eddae40478e9e3f802397->enter($__internal_b994c946395b121b6b6b30587758e3f6e9422bb45d2eddae40478e9e3f802397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_868139ff9869a70b8adb473dc4cd881d28814f6e9a53432c64681f592c41afb2->leave($__internal_868139ff9869a70b8adb473dc4cd881d28814f6e9a53432c64681f592c41afb2_prof);

        
        $__internal_b994c946395b121b6b6b30587758e3f6e9422bb45d2eddae40478e9e3f802397->leave($__internal_b994c946395b121b6b6b30587758e3f6e9422bb45d2eddae40478e9e3f802397_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
