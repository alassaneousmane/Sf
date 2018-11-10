<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c247b65f6ce094c5c3315588ef7aa4d9a66fb0aa8f8d7434190344978518a6fe extends Twig_Template
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
        $__internal_ff50514460300f078cef6d91e3011968b30815672cd1e2d4902d79cf427ff227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff50514460300f078cef6d91e3011968b30815672cd1e2d4902d79cf427ff227->enter($__internal_ff50514460300f078cef6d91e3011968b30815672cd1e2d4902d79cf427ff227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_09484271a02c717fc51b6d26b61de79de3fb8541cf42b6edb361f58c146aa197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09484271a02c717fc51b6d26b61de79de3fb8541cf42b6edb361f58c146aa197->enter($__internal_09484271a02c717fc51b6d26b61de79de3fb8541cf42b6edb361f58c146aa197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ff50514460300f078cef6d91e3011968b30815672cd1e2d4902d79cf427ff227->leave($__internal_ff50514460300f078cef6d91e3011968b30815672cd1e2d4902d79cf427ff227_prof);

        
        $__internal_09484271a02c717fc51b6d26b61de79de3fb8541cf42b6edb361f58c146aa197->leave($__internal_09484271a02c717fc51b6d26b61de79de3fb8541cf42b6edb361f58c146aa197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
