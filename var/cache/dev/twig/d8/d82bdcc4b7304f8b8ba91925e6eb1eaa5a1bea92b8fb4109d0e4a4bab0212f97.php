<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cd72bfd25a44105c1d3994f47c8f41ce0b7a11829dcee027150779e78ad76d0e extends Twig_Template
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
        $__internal_17bc2f71229eb6093620add9bde3913c93ee688c94e303192f04377ce4e2d1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17bc2f71229eb6093620add9bde3913c93ee688c94e303192f04377ce4e2d1bf->enter($__internal_17bc2f71229eb6093620add9bde3913c93ee688c94e303192f04377ce4e2d1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f25f5b9ed8214f7561b7ca2c68df9afe2ac6b131b4095051ae64938da49cf5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25f5b9ed8214f7561b7ca2c68df9afe2ac6b131b4095051ae64938da49cf5d6->enter($__internal_f25f5b9ed8214f7561b7ca2c68df9afe2ac6b131b4095051ae64938da49cf5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_17bc2f71229eb6093620add9bde3913c93ee688c94e303192f04377ce4e2d1bf->leave($__internal_17bc2f71229eb6093620add9bde3913c93ee688c94e303192f04377ce4e2d1bf_prof);

        
        $__internal_f25f5b9ed8214f7561b7ca2c68df9afe2ac6b131b4095051ae64938da49cf5d6->leave($__internal_f25f5b9ed8214f7561b7ca2c68df9afe2ac6b131b4095051ae64938da49cf5d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
