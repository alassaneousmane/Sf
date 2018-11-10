<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5472532df54c9a406e362f8062c7edb470d09b81b01b925ae56fdd65b1b7c12f extends Twig_Template
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
        $__internal_5c7ff1578cca94f345e51549e69ecbc95b02fb4210aa422ccd3a55540860ae88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7ff1578cca94f345e51549e69ecbc95b02fb4210aa422ccd3a55540860ae88->enter($__internal_5c7ff1578cca94f345e51549e69ecbc95b02fb4210aa422ccd3a55540860ae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_59c71aee4f5d14f61a9f7a809cca488bd53e502f430fc194ef9d70f6e7d4e0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c71aee4f5d14f61a9f7a809cca488bd53e502f430fc194ef9d70f6e7d4e0a1->enter($__internal_59c71aee4f5d14f61a9f7a809cca488bd53e502f430fc194ef9d70f6e7d4e0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5c7ff1578cca94f345e51549e69ecbc95b02fb4210aa422ccd3a55540860ae88->leave($__internal_5c7ff1578cca94f345e51549e69ecbc95b02fb4210aa422ccd3a55540860ae88_prof);

        
        $__internal_59c71aee4f5d14f61a9f7a809cca488bd53e502f430fc194ef9d70f6e7d4e0a1->leave($__internal_59c71aee4f5d14f61a9f7a809cca488bd53e502f430fc194ef9d70f6e7d4e0a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
