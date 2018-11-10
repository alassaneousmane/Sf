<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d82291e4540fd87e15972bbc1eef14783c8dec14bd5593f709fb9e82011e4c35 extends Twig_Template
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
        $__internal_0997bfd24fe51ef42ed02322d53640b1752c79dcb108f267157dd24d8839dfbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0997bfd24fe51ef42ed02322d53640b1752c79dcb108f267157dd24d8839dfbc->enter($__internal_0997bfd24fe51ef42ed02322d53640b1752c79dcb108f267157dd24d8839dfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4c1447e0a06a814dc04c7d85ffb7bfc9af0fb9f989052cd318d37f758fe8b510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1447e0a06a814dc04c7d85ffb7bfc9af0fb9f989052cd318d37f758fe8b510->enter($__internal_4c1447e0a06a814dc04c7d85ffb7bfc9af0fb9f989052cd318d37f758fe8b510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0997bfd24fe51ef42ed02322d53640b1752c79dcb108f267157dd24d8839dfbc->leave($__internal_0997bfd24fe51ef42ed02322d53640b1752c79dcb108f267157dd24d8839dfbc_prof);

        
        $__internal_4c1447e0a06a814dc04c7d85ffb7bfc9af0fb9f989052cd318d37f758fe8b510->leave($__internal_4c1447e0a06a814dc04c7d85ffb7bfc9af0fb9f989052cd318d37f758fe8b510_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
