<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9823299ca9f234f7b43ba7c827a9ccd9991ea97bacc8c0353ac84df83699ae99 extends Twig_Template
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
        $__internal_33e5b9066824dccd456c3955b10769d1044c21347442e32505d785ffe3a41b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e5b9066824dccd456c3955b10769d1044c21347442e32505d785ffe3a41b33->enter($__internal_33e5b9066824dccd456c3955b10769d1044c21347442e32505d785ffe3a41b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9d920b46cc95d99c5f0e446202c2feb031fb5a92ad9e80af4a90ab22e7bb989b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d920b46cc95d99c5f0e446202c2feb031fb5a92ad9e80af4a90ab22e7bb989b->enter($__internal_9d920b46cc95d99c5f0e446202c2feb031fb5a92ad9e80af4a90ab22e7bb989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_33e5b9066824dccd456c3955b10769d1044c21347442e32505d785ffe3a41b33->leave($__internal_33e5b9066824dccd456c3955b10769d1044c21347442e32505d785ffe3a41b33_prof);

        
        $__internal_9d920b46cc95d99c5f0e446202c2feb031fb5a92ad9e80af4a90ab22e7bb989b->leave($__internal_9d920b46cc95d99c5f0e446202c2feb031fb5a92ad9e80af4a90ab22e7bb989b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
