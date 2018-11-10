<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a399d29f6a346ac6be4bcd77881786237c8f66cc658c59d0665469714ecc1d84 extends Twig_Template
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
        $__internal_7c834ec8b3be64c75b4054f509b14f4e40a1072f04a9c225e40cd6b98c7ac09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c834ec8b3be64c75b4054f509b14f4e40a1072f04a9c225e40cd6b98c7ac09b->enter($__internal_7c834ec8b3be64c75b4054f509b14f4e40a1072f04a9c225e40cd6b98c7ac09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8f89610503c3ea738b3e84f72bd490eff4de7b98f04cd418dc1aa177644c0db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f89610503c3ea738b3e84f72bd490eff4de7b98f04cd418dc1aa177644c0db8->enter($__internal_8f89610503c3ea738b3e84f72bd490eff4de7b98f04cd418dc1aa177644c0db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7c834ec8b3be64c75b4054f509b14f4e40a1072f04a9c225e40cd6b98c7ac09b->leave($__internal_7c834ec8b3be64c75b4054f509b14f4e40a1072f04a9c225e40cd6b98c7ac09b_prof);

        
        $__internal_8f89610503c3ea738b3e84f72bd490eff4de7b98f04cd418dc1aa177644c0db8->leave($__internal_8f89610503c3ea738b3e84f72bd490eff4de7b98f04cd418dc1aa177644c0db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
