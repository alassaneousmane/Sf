<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9b31b11cb2f9771f1e5ca42b04953db919cb4f3dd45f6b906b3d82a9e39e43d3 extends Twig_Template
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
        $__internal_8e4031e15ec9a440ee8cedea488cc66bee20b1dfdb1b505a8ac478924979436a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4031e15ec9a440ee8cedea488cc66bee20b1dfdb1b505a8ac478924979436a->enter($__internal_8e4031e15ec9a440ee8cedea488cc66bee20b1dfdb1b505a8ac478924979436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_71883a948f77b58ed88c840e33168b63b5ef35c2b564780abf285772b5de2813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71883a948f77b58ed88c840e33168b63b5ef35c2b564780abf285772b5de2813->enter($__internal_71883a948f77b58ed88c840e33168b63b5ef35c2b564780abf285772b5de2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8e4031e15ec9a440ee8cedea488cc66bee20b1dfdb1b505a8ac478924979436a->leave($__internal_8e4031e15ec9a440ee8cedea488cc66bee20b1dfdb1b505a8ac478924979436a_prof);

        
        $__internal_71883a948f77b58ed88c840e33168b63b5ef35c2b564780abf285772b5de2813->leave($__internal_71883a948f77b58ed88c840e33168b63b5ef35c2b564780abf285772b5de2813_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
