<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d3611b2945a3dac5b6a4487f09f753c03af37da35334341dadc1dd69a6e72c06 extends Twig_Template
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
        $__internal_0914144bc852bb2b4892ec92480266786e2da9d032faa59685f004c5c04be345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0914144bc852bb2b4892ec92480266786e2da9d032faa59685f004c5c04be345->enter($__internal_0914144bc852bb2b4892ec92480266786e2da9d032faa59685f004c5c04be345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_92877c3c76d2e4f8ad76357a2b5d2b2828ac38d31c5314a1f55051c8c7e7c4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92877c3c76d2e4f8ad76357a2b5d2b2828ac38d31c5314a1f55051c8c7e7c4d6->enter($__internal_92877c3c76d2e4f8ad76357a2b5d2b2828ac38d31c5314a1f55051c8c7e7c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0914144bc852bb2b4892ec92480266786e2da9d032faa59685f004c5c04be345->leave($__internal_0914144bc852bb2b4892ec92480266786e2da9d032faa59685f004c5c04be345_prof);

        
        $__internal_92877c3c76d2e4f8ad76357a2b5d2b2828ac38d31c5314a1f55051c8c7e7c4d6->leave($__internal_92877c3c76d2e4f8ad76357a2b5d2b2828ac38d31c5314a1f55051c8c7e7c4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
