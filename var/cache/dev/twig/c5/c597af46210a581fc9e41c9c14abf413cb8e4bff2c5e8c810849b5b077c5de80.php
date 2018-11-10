<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fde70ebe614314b2a7565060c69401cb7b8b8957cffae64a3fe13725987f1630 extends Twig_Template
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
        $__internal_67570e3c4b26a0189f73e53320e16611f07d7b8beab26681340284106848fa32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67570e3c4b26a0189f73e53320e16611f07d7b8beab26681340284106848fa32->enter($__internal_67570e3c4b26a0189f73e53320e16611f07d7b8beab26681340284106848fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c2814252e4ed3597a789a8ff93bac7775e32907e4197fc6f524859687b518532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2814252e4ed3597a789a8ff93bac7775e32907e4197fc6f524859687b518532->enter($__internal_c2814252e4ed3597a789a8ff93bac7775e32907e4197fc6f524859687b518532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_67570e3c4b26a0189f73e53320e16611f07d7b8beab26681340284106848fa32->leave($__internal_67570e3c4b26a0189f73e53320e16611f07d7b8beab26681340284106848fa32_prof);

        
        $__internal_c2814252e4ed3597a789a8ff93bac7775e32907e4197fc6f524859687b518532->leave($__internal_c2814252e4ed3597a789a8ff93bac7775e32907e4197fc6f524859687b518532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
