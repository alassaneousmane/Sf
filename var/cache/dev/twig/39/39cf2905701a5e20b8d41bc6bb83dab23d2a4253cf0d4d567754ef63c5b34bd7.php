<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_64dde074652dd7ae4082aa8244f3a16c5027ae7ca865657408ea006c6692e929 extends Twig_Template
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
        $__internal_4e7907ca7cfa06de9888a12a0c2b4b8a8c3a0ad65601945c0cacf36e38fd0651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7907ca7cfa06de9888a12a0c2b4b8a8c3a0ad65601945c0cacf36e38fd0651->enter($__internal_4e7907ca7cfa06de9888a12a0c2b4b8a8c3a0ad65601945c0cacf36e38fd0651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0d4de13559c038d789e54717b34d3965fc7dbef3b3c1f18e90100bc28a9da571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4de13559c038d789e54717b34d3965fc7dbef3b3c1f18e90100bc28a9da571->enter($__internal_0d4de13559c038d789e54717b34d3965fc7dbef3b3c1f18e90100bc28a9da571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4e7907ca7cfa06de9888a12a0c2b4b8a8c3a0ad65601945c0cacf36e38fd0651->leave($__internal_4e7907ca7cfa06de9888a12a0c2b4b8a8c3a0ad65601945c0cacf36e38fd0651_prof);

        
        $__internal_0d4de13559c038d789e54717b34d3965fc7dbef3b3c1f18e90100bc28a9da571->leave($__internal_0d4de13559c038d789e54717b34d3965fc7dbef3b3c1f18e90100bc28a9da571_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
