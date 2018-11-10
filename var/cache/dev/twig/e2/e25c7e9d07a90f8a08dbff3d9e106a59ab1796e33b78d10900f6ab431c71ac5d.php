<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b2d34b9876f0572b26b8f73706192bd83fc3772e6c19c7507e2ca62a0b8482bd extends Twig_Template
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
        $__internal_ab7e082b51fab55b02a0ffe0cab48c3e596fc293ced24568be68a1967be8e464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7e082b51fab55b02a0ffe0cab48c3e596fc293ced24568be68a1967be8e464->enter($__internal_ab7e082b51fab55b02a0ffe0cab48c3e596fc293ced24568be68a1967be8e464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9c06dffad0461f2f93892c094d86d3401c7fa11b8214b6e53d20c62eb6a4679c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c06dffad0461f2f93892c094d86d3401c7fa11b8214b6e53d20c62eb6a4679c->enter($__internal_9c06dffad0461f2f93892c094d86d3401c7fa11b8214b6e53d20c62eb6a4679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ab7e082b51fab55b02a0ffe0cab48c3e596fc293ced24568be68a1967be8e464->leave($__internal_ab7e082b51fab55b02a0ffe0cab48c3e596fc293ced24568be68a1967be8e464_prof);

        
        $__internal_9c06dffad0461f2f93892c094d86d3401c7fa11b8214b6e53d20c62eb6a4679c->leave($__internal_9c06dffad0461f2f93892c094d86d3401c7fa11b8214b6e53d20c62eb6a4679c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
