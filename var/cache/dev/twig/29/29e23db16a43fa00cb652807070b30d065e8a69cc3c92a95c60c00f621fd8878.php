<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7f4689ce6aa2ebfa59ccfa7a886f1c46c3361428471da7212ffb869d6297f126 extends Twig_Template
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
        $__internal_523686e632e912d52fecbfa78dc9c9aba97315180695c599a1354d740e5ad1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523686e632e912d52fecbfa78dc9c9aba97315180695c599a1354d740e5ad1b8->enter($__internal_523686e632e912d52fecbfa78dc9c9aba97315180695c599a1354d740e5ad1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea9a5b8c4ae677fd159600cb681738dff5a72f410b3d1320dec742bc1dbcc840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9a5b8c4ae677fd159600cb681738dff5a72f410b3d1320dec742bc1dbcc840->enter($__internal_ea9a5b8c4ae677fd159600cb681738dff5a72f410b3d1320dec742bc1dbcc840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_523686e632e912d52fecbfa78dc9c9aba97315180695c599a1354d740e5ad1b8->leave($__internal_523686e632e912d52fecbfa78dc9c9aba97315180695c599a1354d740e5ad1b8_prof);

        
        $__internal_ea9a5b8c4ae677fd159600cb681738dff5a72f410b3d1320dec742bc1dbcc840->leave($__internal_ea9a5b8c4ae677fd159600cb681738dff5a72f410b3d1320dec742bc1dbcc840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
