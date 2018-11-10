<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55bae1d7a2a07db4026e80bbae35a08c4140142b66d736dcee67f5a14708ece1 extends Twig_Template
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
        $__internal_9ac310b9af75f88d9676d2e996a95f8dfd0a5d3e1dfaa1419ba2a2bd64bce310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac310b9af75f88d9676d2e996a95f8dfd0a5d3e1dfaa1419ba2a2bd64bce310->enter($__internal_9ac310b9af75f88d9676d2e996a95f8dfd0a5d3e1dfaa1419ba2a2bd64bce310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6653eef43d1d27c538d24a352d43526b02cdf9f100a70470552889c30eeeb0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6653eef43d1d27c538d24a352d43526b02cdf9f100a70470552889c30eeeb0fd->enter($__internal_6653eef43d1d27c538d24a352d43526b02cdf9f100a70470552889c30eeeb0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9ac310b9af75f88d9676d2e996a95f8dfd0a5d3e1dfaa1419ba2a2bd64bce310->leave($__internal_9ac310b9af75f88d9676d2e996a95f8dfd0a5d3e1dfaa1419ba2a2bd64bce310_prof);

        
        $__internal_6653eef43d1d27c538d24a352d43526b02cdf9f100a70470552889c30eeeb0fd->leave($__internal_6653eef43d1d27c538d24a352d43526b02cdf9f100a70470552889c30eeeb0fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
