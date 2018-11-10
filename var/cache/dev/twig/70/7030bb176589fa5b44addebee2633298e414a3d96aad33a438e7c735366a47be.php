<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4cb094927f29327b6b7cae867abc1ad8c5d3516ddd4c27e317858dbbbd7d22d6 extends Twig_Template
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
        $__internal_94cf69910e1ef00ed017fb71e4dc186f3879ac8bfb27d918b2d26c1e2e32fe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cf69910e1ef00ed017fb71e4dc186f3879ac8bfb27d918b2d26c1e2e32fe6c->enter($__internal_94cf69910e1ef00ed017fb71e4dc186f3879ac8bfb27d918b2d26c1e2e32fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2339973b8d3fa5a848d4ba7c534d567ff60890e656d255548616353fb2172803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2339973b8d3fa5a848d4ba7c534d567ff60890e656d255548616353fb2172803->enter($__internal_2339973b8d3fa5a848d4ba7c534d567ff60890e656d255548616353fb2172803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_94cf69910e1ef00ed017fb71e4dc186f3879ac8bfb27d918b2d26c1e2e32fe6c->leave($__internal_94cf69910e1ef00ed017fb71e4dc186f3879ac8bfb27d918b2d26c1e2e32fe6c_prof);

        
        $__internal_2339973b8d3fa5a848d4ba7c534d567ff60890e656d255548616353fb2172803->leave($__internal_2339973b8d3fa5a848d4ba7c534d567ff60890e656d255548616353fb2172803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
