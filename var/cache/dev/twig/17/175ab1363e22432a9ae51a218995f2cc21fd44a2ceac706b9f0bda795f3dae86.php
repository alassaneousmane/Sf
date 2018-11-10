<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_25dca058c5216c3e26d864202091a3e8e5456b08129fe2320ab2a610b83cd520 extends Twig_Template
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
        $__internal_31ef49d8ac4312efc1f4bbabfdc191ae2c5eb3296d6cbe2c608c69748817b957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ef49d8ac4312efc1f4bbabfdc191ae2c5eb3296d6cbe2c608c69748817b957->enter($__internal_31ef49d8ac4312efc1f4bbabfdc191ae2c5eb3296d6cbe2c608c69748817b957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_37cd6536714aca452c953bbbc0503595727521da3caf38dea38efcb042e92d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cd6536714aca452c953bbbc0503595727521da3caf38dea38efcb042e92d28->enter($__internal_37cd6536714aca452c953bbbc0503595727521da3caf38dea38efcb042e92d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_31ef49d8ac4312efc1f4bbabfdc191ae2c5eb3296d6cbe2c608c69748817b957->leave($__internal_31ef49d8ac4312efc1f4bbabfdc191ae2c5eb3296d6cbe2c608c69748817b957_prof);

        
        $__internal_37cd6536714aca452c953bbbc0503595727521da3caf38dea38efcb042e92d28->leave($__internal_37cd6536714aca452c953bbbc0503595727521da3caf38dea38efcb042e92d28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
