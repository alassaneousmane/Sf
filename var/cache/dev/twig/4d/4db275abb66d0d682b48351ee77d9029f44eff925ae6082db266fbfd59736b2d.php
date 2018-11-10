<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e4823016f9e5c39046e9a5054dee4835a25dc51ff2eac9afc79ae2316f01f01e extends Twig_Template
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
        $__internal_d96c5883120919c76dcdd29283507e9c723a2c2d6eb9ef9a86e006199f3c7c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96c5883120919c76dcdd29283507e9c723a2c2d6eb9ef9a86e006199f3c7c02->enter($__internal_d96c5883120919c76dcdd29283507e9c723a2c2d6eb9ef9a86e006199f3c7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_06c622fdd2b4e78eafb9e4b3f45ab15928adf135c0b7782254b005007b506363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c622fdd2b4e78eafb9e4b3f45ab15928adf135c0b7782254b005007b506363->enter($__internal_06c622fdd2b4e78eafb9e4b3f45ab15928adf135c0b7782254b005007b506363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d96c5883120919c76dcdd29283507e9c723a2c2d6eb9ef9a86e006199f3c7c02->leave($__internal_d96c5883120919c76dcdd29283507e9c723a2c2d6eb9ef9a86e006199f3c7c02_prof);

        
        $__internal_06c622fdd2b4e78eafb9e4b3f45ab15928adf135c0b7782254b005007b506363->leave($__internal_06c622fdd2b4e78eafb9e4b3f45ab15928adf135c0b7782254b005007b506363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
