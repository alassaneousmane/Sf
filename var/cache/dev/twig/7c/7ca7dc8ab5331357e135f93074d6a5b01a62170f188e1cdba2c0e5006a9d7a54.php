<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_7e244f5958893dea834726290615bc68e7a1f84e22c123dee1ee4d89872a318f extends Twig_Template
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
        $__internal_fbc7f8b0e6fa44ac567781104424480aac531a7b90418b63575f3c4190596e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc7f8b0e6fa44ac567781104424480aac531a7b90418b63575f3c4190596e74->enter($__internal_fbc7f8b0e6fa44ac567781104424480aac531a7b90418b63575f3c4190596e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_6067630c7aae2d927f0a3db74fc7dd7bd2f8102e3ded4566e087fb648694d6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6067630c7aae2d927f0a3db74fc7dd7bd2f8102e3ded4566e087fb648694d6f7->enter($__internal_6067630c7aae2d927f0a3db74fc7dd7bd2f8102e3ded4566e087fb648694d6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_fbc7f8b0e6fa44ac567781104424480aac531a7b90418b63575f3c4190596e74->leave($__internal_fbc7f8b0e6fa44ac567781104424480aac531a7b90418b63575f3c4190596e74_prof);

        
        $__internal_6067630c7aae2d927f0a3db74fc7dd7bd2f8102e3ded4566e087fb648694d6f7->leave($__internal_6067630c7aae2d927f0a3db74fc7dd7bd2f8102e3ded4566e087fb648694d6f7_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/opt/lampp/htdocs/Sf/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
