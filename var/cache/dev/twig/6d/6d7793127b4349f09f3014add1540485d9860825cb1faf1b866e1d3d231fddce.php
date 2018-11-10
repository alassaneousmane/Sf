<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ad62bb433506d41b5d82a9df490db5aeffe6a0108c1e830149262952f79a3a06 extends Twig_Template
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
        $__internal_6aa67e36a4e1120fd828450b8b83107ed895446d8494d6d5374c8a8557f5b8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa67e36a4e1120fd828450b8b83107ed895446d8494d6d5374c8a8557f5b8f4->enter($__internal_6aa67e36a4e1120fd828450b8b83107ed895446d8494d6d5374c8a8557f5b8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2f813401364f4c3e14aa5cbe1edeb6e90b1ef47729a3bcf88289ba5172d61c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f813401364f4c3e14aa5cbe1edeb6e90b1ef47729a3bcf88289ba5172d61c89->enter($__internal_2f813401364f4c3e14aa5cbe1edeb6e90b1ef47729a3bcf88289ba5172d61c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6aa67e36a4e1120fd828450b8b83107ed895446d8494d6d5374c8a8557f5b8f4->leave($__internal_6aa67e36a4e1120fd828450b8b83107ed895446d8494d6d5374c8a8557f5b8f4_prof);

        
        $__internal_2f813401364f4c3e14aa5cbe1edeb6e90b1ef47729a3bcf88289ba5172d61c89->leave($__internal_2f813401364f4c3e14aa5cbe1edeb6e90b1ef47729a3bcf88289ba5172d61c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
