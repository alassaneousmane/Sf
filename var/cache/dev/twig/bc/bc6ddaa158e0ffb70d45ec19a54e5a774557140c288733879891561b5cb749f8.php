<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8e56098166b66c19080a775b99b0217128ea1ef1d12f751ecebb32edc946197d extends Twig_Template
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
        $__internal_64d444395f4006afa4f19a9ec578691709909e5ff7c0f325da3fbc4bcc054c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d444395f4006afa4f19a9ec578691709909e5ff7c0f325da3fbc4bcc054c09->enter($__internal_64d444395f4006afa4f19a9ec578691709909e5ff7c0f325da3fbc4bcc054c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bc4cf952dcfe4110666b2726d9ce849d6207da10bb691563ee73fce6ea5962b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4cf952dcfe4110666b2726d9ce849d6207da10bb691563ee73fce6ea5962b1->enter($__internal_bc4cf952dcfe4110666b2726d9ce849d6207da10bb691563ee73fce6ea5962b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_64d444395f4006afa4f19a9ec578691709909e5ff7c0f325da3fbc4bcc054c09->leave($__internal_64d444395f4006afa4f19a9ec578691709909e5ff7c0f325da3fbc4bcc054c09_prof);

        
        $__internal_bc4cf952dcfe4110666b2726d9ce849d6207da10bb691563ee73fce6ea5962b1->leave($__internal_bc4cf952dcfe4110666b2726d9ce849d6207da10bb691563ee73fce6ea5962b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
