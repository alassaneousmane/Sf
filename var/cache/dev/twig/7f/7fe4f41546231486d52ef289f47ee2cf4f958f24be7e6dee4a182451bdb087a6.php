<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72b310326be6c0498804abba09a85d7da8593b68d10cfb6eaef3720637cf1eff extends Twig_Template
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
        $__internal_074d08ba70092707df8ae83ca9b98c772a1e431c20aab289ff2a55ee64c5a6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074d08ba70092707df8ae83ca9b98c772a1e431c20aab289ff2a55ee64c5a6bc->enter($__internal_074d08ba70092707df8ae83ca9b98c772a1e431c20aab289ff2a55ee64c5a6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0b0cb1ac097ae745528672d188841fdff4376525a5a9a4707c0f90c5b5f64568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0cb1ac097ae745528672d188841fdff4376525a5a9a4707c0f90c5b5f64568->enter($__internal_0b0cb1ac097ae745528672d188841fdff4376525a5a9a4707c0f90c5b5f64568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_074d08ba70092707df8ae83ca9b98c772a1e431c20aab289ff2a55ee64c5a6bc->leave($__internal_074d08ba70092707df8ae83ca9b98c772a1e431c20aab289ff2a55ee64c5a6bc_prof);

        
        $__internal_0b0cb1ac097ae745528672d188841fdff4376525a5a9a4707c0f90c5b5f64568->leave($__internal_0b0cb1ac097ae745528672d188841fdff4376525a5a9a4707c0f90c5b5f64568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
