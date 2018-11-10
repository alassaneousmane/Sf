<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d256b2adc2aebd8d6e9c7dee6dc8813ab63e78ca801447505590ac6f5a47cb58 extends Twig_Template
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
        $__internal_f7abfc44be8b0306bf681076a11c38f21794ee166dc4b790bfd2b8b6163f7a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7abfc44be8b0306bf681076a11c38f21794ee166dc4b790bfd2b8b6163f7a07->enter($__internal_f7abfc44be8b0306bf681076a11c38f21794ee166dc4b790bfd2b8b6163f7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3a0bea3f8360a12bdf42556f4adf12f06bb9d27cf116db6bae76a6ce95bb46be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0bea3f8360a12bdf42556f4adf12f06bb9d27cf116db6bae76a6ce95bb46be->enter($__internal_3a0bea3f8360a12bdf42556f4adf12f06bb9d27cf116db6bae76a6ce95bb46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f7abfc44be8b0306bf681076a11c38f21794ee166dc4b790bfd2b8b6163f7a07->leave($__internal_f7abfc44be8b0306bf681076a11c38f21794ee166dc4b790bfd2b8b6163f7a07_prof);

        
        $__internal_3a0bea3f8360a12bdf42556f4adf12f06bb9d27cf116db6bae76a6ce95bb46be->leave($__internal_3a0bea3f8360a12bdf42556f4adf12f06bb9d27cf116db6bae76a6ce95bb46be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
