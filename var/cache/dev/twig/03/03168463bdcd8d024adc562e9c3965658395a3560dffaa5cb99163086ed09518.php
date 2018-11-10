<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_100e73ed1b115ec666b2b0b8508546e7c7e87740a34848325ffed317f609a24a extends Twig_Template
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
        $__internal_e9bfdc3711f54f482e20f0b170c723ba0f36aa7340aaee4586b9b827f528bde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bfdc3711f54f482e20f0b170c723ba0f36aa7340aaee4586b9b827f528bde5->enter($__internal_e9bfdc3711f54f482e20f0b170c723ba0f36aa7340aaee4586b9b827f528bde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_753de6c642442b5599d8c9b1b93b8e8e0ad429fd8ff72ad63fd868a65732870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753de6c642442b5599d8c9b1b93b8e8e0ad429fd8ff72ad63fd868a65732870d->enter($__internal_753de6c642442b5599d8c9b1b93b8e8e0ad429fd8ff72ad63fd868a65732870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e9bfdc3711f54f482e20f0b170c723ba0f36aa7340aaee4586b9b827f528bde5->leave($__internal_e9bfdc3711f54f482e20f0b170c723ba0f36aa7340aaee4586b9b827f528bde5_prof);

        
        $__internal_753de6c642442b5599d8c9b1b93b8e8e0ad429fd8ff72ad63fd868a65732870d->leave($__internal_753de6c642442b5599d8c9b1b93b8e8e0ad429fd8ff72ad63fd868a65732870d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
