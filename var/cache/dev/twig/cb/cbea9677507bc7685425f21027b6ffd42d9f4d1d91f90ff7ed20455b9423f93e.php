<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c0b5578fb2969a87dd7d59737a0d0797e3f878286e8483089fb497ab42ba1d35 extends Twig_Template
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
        $__internal_7a6d6eafe1247096722b479d1eef6e30c9e76d20cc7ad28062b5ae226e69f202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6d6eafe1247096722b479d1eef6e30c9e76d20cc7ad28062b5ae226e69f202->enter($__internal_7a6d6eafe1247096722b479d1eef6e30c9e76d20cc7ad28062b5ae226e69f202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5b9be7936d5e0a994b7ad0f5d0cec57b278adf3b6ba0edf9762cbc46c8b2e2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9be7936d5e0a994b7ad0f5d0cec57b278adf3b6ba0edf9762cbc46c8b2e2ea->enter($__internal_5b9be7936d5e0a994b7ad0f5d0cec57b278adf3b6ba0edf9762cbc46c8b2e2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7a6d6eafe1247096722b479d1eef6e30c9e76d20cc7ad28062b5ae226e69f202->leave($__internal_7a6d6eafe1247096722b479d1eef6e30c9e76d20cc7ad28062b5ae226e69f202_prof);

        
        $__internal_5b9be7936d5e0a994b7ad0f5d0cec57b278adf3b6ba0edf9762cbc46c8b2e2ea->leave($__internal_5b9be7936d5e0a994b7ad0f5d0cec57b278adf3b6ba0edf9762cbc46c8b2e2ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
