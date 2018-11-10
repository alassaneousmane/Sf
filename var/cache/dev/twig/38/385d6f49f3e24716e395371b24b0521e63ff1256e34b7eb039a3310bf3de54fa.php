<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ca16a410fd85b40156390dcf2a487103971809a18681f9dedd092b7b21aca9b6 extends Twig_Template
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
        $__internal_25d5348094a3e76add129e06176d90324564f1ac875cc2e58706b013b626cca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d5348094a3e76add129e06176d90324564f1ac875cc2e58706b013b626cca3->enter($__internal_25d5348094a3e76add129e06176d90324564f1ac875cc2e58706b013b626cca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a7ca4f5bcf36cb0255656cab4163918d973718e0e6e483c2d0025c6b583c72ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ca4f5bcf36cb0255656cab4163918d973718e0e6e483c2d0025c6b583c72ca->enter($__internal_a7ca4f5bcf36cb0255656cab4163918d973718e0e6e483c2d0025c6b583c72ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_25d5348094a3e76add129e06176d90324564f1ac875cc2e58706b013b626cca3->leave($__internal_25d5348094a3e76add129e06176d90324564f1ac875cc2e58706b013b626cca3_prof);

        
        $__internal_a7ca4f5bcf36cb0255656cab4163918d973718e0e6e483c2d0025c6b583c72ca->leave($__internal_a7ca4f5bcf36cb0255656cab4163918d973718e0e6e483c2d0025c6b583c72ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
