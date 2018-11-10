<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_eca75b5376293fba57d3e6020de4289358d0021f0dfd45f690e207903647db35 extends Twig_Template
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
        $__internal_6ebd845f552095091daf1a6cfddcd478f037840d6e5d37b19a1f6af8a9eeac7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebd845f552095091daf1a6cfddcd478f037840d6e5d37b19a1f6af8a9eeac7f->enter($__internal_6ebd845f552095091daf1a6cfddcd478f037840d6e5d37b19a1f6af8a9eeac7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_bdaed28e3f0c521f8c9f9b7f796cf5a04d0a8ffff875a635818baf070b8afd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaed28e3f0c521f8c9f9b7f796cf5a04d0a8ffff875a635818baf070b8afd8c->enter($__internal_bdaed28e3f0c521f8c9f9b7f796cf5a04d0a8ffff875a635818baf070b8afd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_6ebd845f552095091daf1a6cfddcd478f037840d6e5d37b19a1f6af8a9eeac7f->leave($__internal_6ebd845f552095091daf1a6cfddcd478f037840d6e5d37b19a1f6af8a9eeac7f_prof);

        
        $__internal_bdaed28e3f0c521f8c9f9b7f796cf5a04d0a8ffff875a635818baf070b8afd8c->leave($__internal_bdaed28e3f0c521f8c9f9b7f796cf5a04d0a8ffff875a635818baf070b8afd8c_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
