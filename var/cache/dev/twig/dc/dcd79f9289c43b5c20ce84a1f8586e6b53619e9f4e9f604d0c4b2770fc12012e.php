<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_de86cef5a808c33368b51bc6e045588b5fe5499d3926b3a22561b892b8b30e9a extends Twig_Template
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
        $__internal_20f65f840817ede69faaf12c32ba166e06fbdd0e102c50e227d03309b98e74a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f65f840817ede69faaf12c32ba166e06fbdd0e102c50e227d03309b98e74a7->enter($__internal_20f65f840817ede69faaf12c32ba166e06fbdd0e102c50e227d03309b98e74a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ff94920d242557951bf79c62c403d8dd1157d4078597806b8deea0ff3e1d8c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff94920d242557951bf79c62c403d8dd1157d4078597806b8deea0ff3e1d8c3c->enter($__internal_ff94920d242557951bf79c62c403d8dd1157d4078597806b8deea0ff3e1d8c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_20f65f840817ede69faaf12c32ba166e06fbdd0e102c50e227d03309b98e74a7->leave($__internal_20f65f840817ede69faaf12c32ba166e06fbdd0e102c50e227d03309b98e74a7_prof);

        
        $__internal_ff94920d242557951bf79c62c403d8dd1157d4078597806b8deea0ff3e1d8c3c->leave($__internal_ff94920d242557951bf79c62c403d8dd1157d4078597806b8deea0ff3e1d8c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}