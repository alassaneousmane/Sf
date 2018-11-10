<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3cb8e2ba9867c040194dade26c9c7bf79f75049ed6de3d179e8531bca6292728 extends Twig_Template
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
        $__internal_4eb9b7dad07cbc07a8389353bf67475d03a1905a6932acf6256bd95dc682f744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb9b7dad07cbc07a8389353bf67475d03a1905a6932acf6256bd95dc682f744->enter($__internal_4eb9b7dad07cbc07a8389353bf67475d03a1905a6932acf6256bd95dc682f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f6eadf1ea7db8d8c753cc57487001f78660446d24eb289d52ce7cf29291abef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6eadf1ea7db8d8c753cc57487001f78660446d24eb289d52ce7cf29291abef8->enter($__internal_f6eadf1ea7db8d8c753cc57487001f78660446d24eb289d52ce7cf29291abef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4eb9b7dad07cbc07a8389353bf67475d03a1905a6932acf6256bd95dc682f744->leave($__internal_4eb9b7dad07cbc07a8389353bf67475d03a1905a6932acf6256bd95dc682f744_prof);

        
        $__internal_f6eadf1ea7db8d8c753cc57487001f78660446d24eb289d52ce7cf29291abef8->leave($__internal_f6eadf1ea7db8d8c753cc57487001f78660446d24eb289d52ce7cf29291abef8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
