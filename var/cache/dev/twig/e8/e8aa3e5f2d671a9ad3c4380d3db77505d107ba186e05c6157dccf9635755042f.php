<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_557efa14dfd44c6eec6e84b1726822cb2e18704b9853b4f1108e50141f29ced8 extends Twig_Template
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
        $__internal_66a5469ae65411858781029f8a9ed019998fd6847f0b1bacae0fbaf513973693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a5469ae65411858781029f8a9ed019998fd6847f0b1bacae0fbaf513973693->enter($__internal_66a5469ae65411858781029f8a9ed019998fd6847f0b1bacae0fbaf513973693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c5f4573443dcd554969d5b2d8e8fc6d310bbfd0bd389e4182f0451646b9e5834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f4573443dcd554969d5b2d8e8fc6d310bbfd0bd389e4182f0451646b9e5834->enter($__internal_c5f4573443dcd554969d5b2d8e8fc6d310bbfd0bd389e4182f0451646b9e5834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_66a5469ae65411858781029f8a9ed019998fd6847f0b1bacae0fbaf513973693->leave($__internal_66a5469ae65411858781029f8a9ed019998fd6847f0b1bacae0fbaf513973693_prof);

        
        $__internal_c5f4573443dcd554969d5b2d8e8fc6d310bbfd0bd389e4182f0451646b9e5834->leave($__internal_c5f4573443dcd554969d5b2d8e8fc6d310bbfd0bd389e4182f0451646b9e5834_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
