<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_be402373803b2b311a4761953f56c5865f306caeda15cdecfd47e95adabae99c extends Twig_Template
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
        $__internal_e0b4f6cb339ed36aab84caf3753b02799c6b8559794ea2e9749060abf631171f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b4f6cb339ed36aab84caf3753b02799c6b8559794ea2e9749060abf631171f->enter($__internal_e0b4f6cb339ed36aab84caf3753b02799c6b8559794ea2e9749060abf631171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_715785ffd579b1ad0d6df932942a43a66c869fb3c86ee52ca6542ae95f99c8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715785ffd579b1ad0d6df932942a43a66c869fb3c86ee52ca6542ae95f99c8e2->enter($__internal_715785ffd579b1ad0d6df932942a43a66c869fb3c86ee52ca6542ae95f99c8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e0b4f6cb339ed36aab84caf3753b02799c6b8559794ea2e9749060abf631171f->leave($__internal_e0b4f6cb339ed36aab84caf3753b02799c6b8559794ea2e9749060abf631171f_prof);

        
        $__internal_715785ffd579b1ad0d6df932942a43a66c869fb3c86ee52ca6542ae95f99c8e2->leave($__internal_715785ffd579b1ad0d6df932942a43a66c869fb3c86ee52ca6542ae95f99c8e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
