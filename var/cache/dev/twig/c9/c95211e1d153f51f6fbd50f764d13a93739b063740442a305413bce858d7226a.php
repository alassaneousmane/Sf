<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4efd1390687b3e10c553f30da707c36bc1e2dea7da71d865929d9fadfa19a521 extends Twig_Template
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
        $__internal_4b4717cd6f4325043c823ee7ab4e9d70a3118ef39661fe3593db270ed206bf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4717cd6f4325043c823ee7ab4e9d70a3118ef39661fe3593db270ed206bf93->enter($__internal_4b4717cd6f4325043c823ee7ab4e9d70a3118ef39661fe3593db270ed206bf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_28628f2f4b9b20f63478493be0f2dc82688930b73ea03c81bceaa04bc0491d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28628f2f4b9b20f63478493be0f2dc82688930b73ea03c81bceaa04bc0491d7c->enter($__internal_28628f2f4b9b20f63478493be0f2dc82688930b73ea03c81bceaa04bc0491d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4b4717cd6f4325043c823ee7ab4e9d70a3118ef39661fe3593db270ed206bf93->leave($__internal_4b4717cd6f4325043c823ee7ab4e9d70a3118ef39661fe3593db270ed206bf93_prof);

        
        $__internal_28628f2f4b9b20f63478493be0f2dc82688930b73ea03c81bceaa04bc0491d7c->leave($__internal_28628f2f4b9b20f63478493be0f2dc82688930b73ea03c81bceaa04bc0491d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
