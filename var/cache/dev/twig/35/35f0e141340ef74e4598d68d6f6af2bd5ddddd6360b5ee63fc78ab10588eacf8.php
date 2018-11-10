<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_776d12b5c26791ab8bcb79a2add395403bba93258a194336dc819e64a0e50fe4 extends Twig_Template
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
        $__internal_9c14ea564d1dc3778dc70142c28967ab127e73d4dc57bee316467970b1db41c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c14ea564d1dc3778dc70142c28967ab127e73d4dc57bee316467970b1db41c5->enter($__internal_9c14ea564d1dc3778dc70142c28967ab127e73d4dc57bee316467970b1db41c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0af1749c20b4418805486b498dbb4fd97a99b3b0f6ff6930c49a33962b607af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af1749c20b4418805486b498dbb4fd97a99b3b0f6ff6930c49a33962b607af7->enter($__internal_0af1749c20b4418805486b498dbb4fd97a99b3b0f6ff6930c49a33962b607af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9c14ea564d1dc3778dc70142c28967ab127e73d4dc57bee316467970b1db41c5->leave($__internal_9c14ea564d1dc3778dc70142c28967ab127e73d4dc57bee316467970b1db41c5_prof);

        
        $__internal_0af1749c20b4418805486b498dbb4fd97a99b3b0f6ff6930c49a33962b607af7->leave($__internal_0af1749c20b4418805486b498dbb4fd97a99b3b0f6ff6930c49a33962b607af7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
