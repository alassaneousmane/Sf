<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c45ca7bb9a241a1baed9b28f16f540f37f884d5f29d90ce689abef235636dd6e extends Twig_Template
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
        $__internal_5583301bb4cfb480471e9d631e59e7919ec123114739cfc8e5cb704b902f94e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5583301bb4cfb480471e9d631e59e7919ec123114739cfc8e5cb704b902f94e4->enter($__internal_5583301bb4cfb480471e9d631e59e7919ec123114739cfc8e5cb704b902f94e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4d4ce7e247fd9d3a426d5ede765008a1a1b5060dea1f4a2d68f16375b0c44a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4ce7e247fd9d3a426d5ede765008a1a1b5060dea1f4a2d68f16375b0c44a68->enter($__internal_4d4ce7e247fd9d3a426d5ede765008a1a1b5060dea1f4a2d68f16375b0c44a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5583301bb4cfb480471e9d631e59e7919ec123114739cfc8e5cb704b902f94e4->leave($__internal_5583301bb4cfb480471e9d631e59e7919ec123114739cfc8e5cb704b902f94e4_prof);

        
        $__internal_4d4ce7e247fd9d3a426d5ede765008a1a1b5060dea1f4a2d68f16375b0c44a68->leave($__internal_4d4ce7e247fd9d3a426d5ede765008a1a1b5060dea1f4a2d68f16375b0c44a68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
