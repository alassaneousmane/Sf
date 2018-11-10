<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f599e9baa08c1fa4e7951e1ee145175948fecfc93f504d4e07d47bd41d4fea6e extends Twig_Template
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
        $__internal_fc48060916b3a5d859a1622378405ab79bb36f20e90666954dca1048212f9954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc48060916b3a5d859a1622378405ab79bb36f20e90666954dca1048212f9954->enter($__internal_fc48060916b3a5d859a1622378405ab79bb36f20e90666954dca1048212f9954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bc773b1be24363e291a3ecfd92ceddb303257f666c46e7c81040e55512b56fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc773b1be24363e291a3ecfd92ceddb303257f666c46e7c81040e55512b56fc5->enter($__internal_bc773b1be24363e291a3ecfd92ceddb303257f666c46e7c81040e55512b56fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fc48060916b3a5d859a1622378405ab79bb36f20e90666954dca1048212f9954->leave($__internal_fc48060916b3a5d859a1622378405ab79bb36f20e90666954dca1048212f9954_prof);

        
        $__internal_bc773b1be24363e291a3ecfd92ceddb303257f666c46e7c81040e55512b56fc5->leave($__internal_bc773b1be24363e291a3ecfd92ceddb303257f666c46e7c81040e55512b56fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
