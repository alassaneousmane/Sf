<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_69b4c98c48a9c2df7d78afc6fe4c5cce56da8d72eaaccecf998dc27626b2066b extends Twig_Template
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
        $__internal_43ae0a8a86e0b090a46a7b5de6290a60850ff060647a6eff5350944cfa67db85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ae0a8a86e0b090a46a7b5de6290a60850ff060647a6eff5350944cfa67db85->enter($__internal_43ae0a8a86e0b090a46a7b5de6290a60850ff060647a6eff5350944cfa67db85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_92fce29c4e079d400818c4a6642178e994abe4d59318342ea65648964a5ce814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fce29c4e079d400818c4a6642178e994abe4d59318342ea65648964a5ce814->enter($__internal_92fce29c4e079d400818c4a6642178e994abe4d59318342ea65648964a5ce814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43ae0a8a86e0b090a46a7b5de6290a60850ff060647a6eff5350944cfa67db85->leave($__internal_43ae0a8a86e0b090a46a7b5de6290a60850ff060647a6eff5350944cfa67db85_prof);

        
        $__internal_92fce29c4e079d400818c4a6642178e994abe4d59318342ea65648964a5ce814->leave($__internal_92fce29c4e079d400818c4a6642178e994abe4d59318342ea65648964a5ce814_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
