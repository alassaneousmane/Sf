<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9456b3eafe89a4332736de9a7d7120763290eb1dad87202deae36db03fee0d76 extends Twig_Template
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
        $__internal_8fed209477ba95fa42591d93d39cb728e35a266e0f51263dfb20bf7903fe0155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fed209477ba95fa42591d93d39cb728e35a266e0f51263dfb20bf7903fe0155->enter($__internal_8fed209477ba95fa42591d93d39cb728e35a266e0f51263dfb20bf7903fe0155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_19e307e8163e6e53cb4a81a28d8967fccb9eba6308d725206a9977e8af7d0b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e307e8163e6e53cb4a81a28d8967fccb9eba6308d725206a9977e8af7d0b84->enter($__internal_19e307e8163e6e53cb4a81a28d8967fccb9eba6308d725206a9977e8af7d0b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8fed209477ba95fa42591d93d39cb728e35a266e0f51263dfb20bf7903fe0155->leave($__internal_8fed209477ba95fa42591d93d39cb728e35a266e0f51263dfb20bf7903fe0155_prof);

        
        $__internal_19e307e8163e6e53cb4a81a28d8967fccb9eba6308d725206a9977e8af7d0b84->leave($__internal_19e307e8163e6e53cb4a81a28d8967fccb9eba6308d725206a9977e8af7d0b84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
