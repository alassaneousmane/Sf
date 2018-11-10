<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f293d9751522e891e07dc33e424d13dcfed2bcac8bb9ca7d8417eca5a495ba00 extends Twig_Template
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
        $__internal_ffa4b8b13ca24eae8238280c68865e75a808e06a45afb9329c855cbb1947d687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa4b8b13ca24eae8238280c68865e75a808e06a45afb9329c855cbb1947d687->enter($__internal_ffa4b8b13ca24eae8238280c68865e75a808e06a45afb9329c855cbb1947d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bc15043e89cd2c25a84ce35fb0218d804503e7b581ce8409090fb0a7112fa3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc15043e89cd2c25a84ce35fb0218d804503e7b581ce8409090fb0a7112fa3b0->enter($__internal_bc15043e89cd2c25a84ce35fb0218d804503e7b581ce8409090fb0a7112fa3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ffa4b8b13ca24eae8238280c68865e75a808e06a45afb9329c855cbb1947d687->leave($__internal_ffa4b8b13ca24eae8238280c68865e75a808e06a45afb9329c855cbb1947d687_prof);

        
        $__internal_bc15043e89cd2c25a84ce35fb0218d804503e7b581ce8409090fb0a7112fa3b0->leave($__internal_bc15043e89cd2c25a84ce35fb0218d804503e7b581ce8409090fb0a7112fa3b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
