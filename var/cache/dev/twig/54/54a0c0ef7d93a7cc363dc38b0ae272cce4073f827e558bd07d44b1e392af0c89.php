<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c64e8e86c3eac1d68bb6e6e8fa2c4dffefc8296df20a81d447ffb310eb85ffd1 extends Twig_Template
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
        $__internal_0a70d5117550e7ee6c91367eb7eb6a77abec9cf94212fffc9e68d548ea43467d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a70d5117550e7ee6c91367eb7eb6a77abec9cf94212fffc9e68d548ea43467d->enter($__internal_0a70d5117550e7ee6c91367eb7eb6a77abec9cf94212fffc9e68d548ea43467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_58d0973716350e96fd1500c6daec831b439ae05052124789ac337abd200fa697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d0973716350e96fd1500c6daec831b439ae05052124789ac337abd200fa697->enter($__internal_58d0973716350e96fd1500c6daec831b439ae05052124789ac337abd200fa697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0a70d5117550e7ee6c91367eb7eb6a77abec9cf94212fffc9e68d548ea43467d->leave($__internal_0a70d5117550e7ee6c91367eb7eb6a77abec9cf94212fffc9e68d548ea43467d_prof);

        
        $__internal_58d0973716350e96fd1500c6daec831b439ae05052124789ac337abd200fa697->leave($__internal_58d0973716350e96fd1500c6daec831b439ae05052124789ac337abd200fa697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
