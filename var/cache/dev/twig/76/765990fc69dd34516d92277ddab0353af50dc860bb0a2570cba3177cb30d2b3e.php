<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5085cdea07ab98c7602d4fb3f477676828c5d7647adbededd492888dceeabad8 extends Twig_Template
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
        $__internal_2f1cb52eac3f977cf78eada2cf45c40bb8ac23253bdb231cb816d80e653fdd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1cb52eac3f977cf78eada2cf45c40bb8ac23253bdb231cb816d80e653fdd7c->enter($__internal_2f1cb52eac3f977cf78eada2cf45c40bb8ac23253bdb231cb816d80e653fdd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b7cfddfdb2e5979d9b083af194dade864bb532476b8116ade3de01dabb75e6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cfddfdb2e5979d9b083af194dade864bb532476b8116ade3de01dabb75e6bb->enter($__internal_b7cfddfdb2e5979d9b083af194dade864bb532476b8116ade3de01dabb75e6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2f1cb52eac3f977cf78eada2cf45c40bb8ac23253bdb231cb816d80e653fdd7c->leave($__internal_2f1cb52eac3f977cf78eada2cf45c40bb8ac23253bdb231cb816d80e653fdd7c_prof);

        
        $__internal_b7cfddfdb2e5979d9b083af194dade864bb532476b8116ade3de01dabb75e6bb->leave($__internal_b7cfddfdb2e5979d9b083af194dade864bb532476b8116ade3de01dabb75e6bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
