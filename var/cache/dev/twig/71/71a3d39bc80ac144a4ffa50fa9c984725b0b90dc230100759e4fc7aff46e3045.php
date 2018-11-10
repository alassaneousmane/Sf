<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_be5fc6c9aa91c7128994d0940384238a164764fe0817a8482da4e7b8e2602bda extends Twig_Template
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
        $__internal_d5ef45cf2f50d5ebfd669b57991e4c45c5f41a8ca086dc40c52f5e7b6e3fc201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ef45cf2f50d5ebfd669b57991e4c45c5f41a8ca086dc40c52f5e7b6e3fc201->enter($__internal_d5ef45cf2f50d5ebfd669b57991e4c45c5f41a8ca086dc40c52f5e7b6e3fc201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d2e498f9aff9c564a87bc4617b48f24a05ef0d7a4ed861e21355f9da7777e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e498f9aff9c564a87bc4617b48f24a05ef0d7a4ed861e21355f9da7777e282->enter($__internal_d2e498f9aff9c564a87bc4617b48f24a05ef0d7a4ed861e21355f9da7777e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d5ef45cf2f50d5ebfd669b57991e4c45c5f41a8ca086dc40c52f5e7b6e3fc201->leave($__internal_d5ef45cf2f50d5ebfd669b57991e4c45c5f41a8ca086dc40c52f5e7b6e3fc201_prof);

        
        $__internal_d2e498f9aff9c564a87bc4617b48f24a05ef0d7a4ed861e21355f9da7777e282->leave($__internal_d2e498f9aff9c564a87bc4617b48f24a05ef0d7a4ed861e21355f9da7777e282_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
