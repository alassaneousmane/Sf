<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_98dd7616d95a7288462b15a01084a8409f687864f00fef68cbdb813cc4bfb5b2 extends Twig_Template
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
        $__internal_ef1927096bc41c9feea64f203fa2e9776b98a19e181717d2d62d5377fe9789c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1927096bc41c9feea64f203fa2e9776b98a19e181717d2d62d5377fe9789c2->enter($__internal_ef1927096bc41c9feea64f203fa2e9776b98a19e181717d2d62d5377fe9789c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_12533086f43513486c67e578b50ba70a5179e3babb28c297c657e8a6d30f3a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12533086f43513486c67e578b50ba70a5179e3babb28c297c657e8a6d30f3a96->enter($__internal_12533086f43513486c67e578b50ba70a5179e3babb28c297c657e8a6d30f3a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ef1927096bc41c9feea64f203fa2e9776b98a19e181717d2d62d5377fe9789c2->leave($__internal_ef1927096bc41c9feea64f203fa2e9776b98a19e181717d2d62d5377fe9789c2_prof);

        
        $__internal_12533086f43513486c67e578b50ba70a5179e3babb28c297c657e8a6d30f3a96->leave($__internal_12533086f43513486c67e578b50ba70a5179e3babb28c297c657e8a6d30f3a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
