<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_597de21b72a6d8c3bdda279a98745c0371e83991f8349266e79dea8842f115c5 extends Twig_Template
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
        $__internal_cbe78c5c20ab4b87342c129713615f8edc482a773f528690bab4d697face5999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe78c5c20ab4b87342c129713615f8edc482a773f528690bab4d697face5999->enter($__internal_cbe78c5c20ab4b87342c129713615f8edc482a773f528690bab4d697face5999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_29f67cfa9fd9ef850301fae79a612c0f5af5c3ce800e11119d86efba5579b6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f67cfa9fd9ef850301fae79a612c0f5af5c3ce800e11119d86efba5579b6f1->enter($__internal_29f67cfa9fd9ef850301fae79a612c0f5af5c3ce800e11119d86efba5579b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cbe78c5c20ab4b87342c129713615f8edc482a773f528690bab4d697face5999->leave($__internal_cbe78c5c20ab4b87342c129713615f8edc482a773f528690bab4d697face5999_prof);

        
        $__internal_29f67cfa9fd9ef850301fae79a612c0f5af5c3ce800e11119d86efba5579b6f1->leave($__internal_29f67cfa9fd9ef850301fae79a612c0f5af5c3ce800e11119d86efba5579b6f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
