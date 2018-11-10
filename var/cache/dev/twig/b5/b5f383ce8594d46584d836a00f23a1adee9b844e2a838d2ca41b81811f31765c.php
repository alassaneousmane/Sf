<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c11db863eac376a0e07e5a0c567c913ccc5d76f586045aa58ae6c8b00313e2ec extends Twig_Template
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
        $__internal_3cad98a9523ba6050f7aba76f3cae6ec895d98614d2edb7c715f7a68a2f859b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cad98a9523ba6050f7aba76f3cae6ec895d98614d2edb7c715f7a68a2f859b3->enter($__internal_3cad98a9523ba6050f7aba76f3cae6ec895d98614d2edb7c715f7a68a2f859b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_960b62b31230bd8da7b97ea5bc1530961f6b12e4455fb849594b2163f2eb4d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960b62b31230bd8da7b97ea5bc1530961f6b12e4455fb849594b2163f2eb4d6f->enter($__internal_960b62b31230bd8da7b97ea5bc1530961f6b12e4455fb849594b2163f2eb4d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3cad98a9523ba6050f7aba76f3cae6ec895d98614d2edb7c715f7a68a2f859b3->leave($__internal_3cad98a9523ba6050f7aba76f3cae6ec895d98614d2edb7c715f7a68a2f859b3_prof);

        
        $__internal_960b62b31230bd8da7b97ea5bc1530961f6b12e4455fb849594b2163f2eb4d6f->leave($__internal_960b62b31230bd8da7b97ea5bc1530961f6b12e4455fb849594b2163f2eb4d6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
