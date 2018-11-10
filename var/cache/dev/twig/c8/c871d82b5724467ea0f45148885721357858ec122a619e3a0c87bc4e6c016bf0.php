<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_83d1e6d7b2f32553c9cf1a2a1c99ee401c128053acba66c8e48c4fe158c8a5ed extends Twig_Template
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
        $__internal_7031a07a9d205ddccead71f89ddb0e9de2b1f1d678ba5bfb1d583e09bd7f3fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7031a07a9d205ddccead71f89ddb0e9de2b1f1d678ba5bfb1d583e09bd7f3fb6->enter($__internal_7031a07a9d205ddccead71f89ddb0e9de2b1f1d678ba5bfb1d583e09bd7f3fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4ee56504672e2bbe78eb87f410c73681d5d6cae526563e60cadeae67a74daf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee56504672e2bbe78eb87f410c73681d5d6cae526563e60cadeae67a74daf17->enter($__internal_4ee56504672e2bbe78eb87f410c73681d5d6cae526563e60cadeae67a74daf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7031a07a9d205ddccead71f89ddb0e9de2b1f1d678ba5bfb1d583e09bd7f3fb6->leave($__internal_7031a07a9d205ddccead71f89ddb0e9de2b1f1d678ba5bfb1d583e09bd7f3fb6_prof);

        
        $__internal_4ee56504672e2bbe78eb87f410c73681d5d6cae526563e60cadeae67a74daf17->leave($__internal_4ee56504672e2bbe78eb87f410c73681d5d6cae526563e60cadeae67a74daf17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
