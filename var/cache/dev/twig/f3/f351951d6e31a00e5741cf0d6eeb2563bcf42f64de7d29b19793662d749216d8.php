<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d421d5c9df9946c8ce310482afd184324d8cdc9a5a030f63edb9cffa777bdfba extends Twig_Template
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
        $__internal_e42e3393403a69a56d69a9948802bf5653aa6247ba91411d823dd8a20cbd2a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42e3393403a69a56d69a9948802bf5653aa6247ba91411d823dd8a20cbd2a96->enter($__internal_e42e3393403a69a56d69a9948802bf5653aa6247ba91411d823dd8a20cbd2a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e7404f4028309c391f3e2028a4b4a7c143c45f42619e0bd195b8e773d531aa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7404f4028309c391f3e2028a4b4a7c143c45f42619e0bd195b8e773d531aa73->enter($__internal_e7404f4028309c391f3e2028a4b4a7c143c45f42619e0bd195b8e773d531aa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e42e3393403a69a56d69a9948802bf5653aa6247ba91411d823dd8a20cbd2a96->leave($__internal_e42e3393403a69a56d69a9948802bf5653aa6247ba91411d823dd8a20cbd2a96_prof);

        
        $__internal_e7404f4028309c391f3e2028a4b4a7c143c45f42619e0bd195b8e773d531aa73->leave($__internal_e7404f4028309c391f3e2028a4b4a7c143c45f42619e0bd195b8e773d531aa73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
