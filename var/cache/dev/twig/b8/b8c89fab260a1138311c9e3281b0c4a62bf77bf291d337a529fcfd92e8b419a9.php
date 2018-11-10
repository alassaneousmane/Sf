<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cd012550cf518a4490f1ff12c39663d085942e196d0f5cf4c9bc9d3976e39101 extends Twig_Template
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
        $__internal_a8fc137ab536e31969f0bdad1edc9a17b46dfe5c3b7fc93ea5c0c7043a4cd742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fc137ab536e31969f0bdad1edc9a17b46dfe5c3b7fc93ea5c0c7043a4cd742->enter($__internal_a8fc137ab536e31969f0bdad1edc9a17b46dfe5c3b7fc93ea5c0c7043a4cd742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f3add404d70ddf0909126e19062deb5c908a67101e39526fafc418cfcf1636d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3add404d70ddf0909126e19062deb5c908a67101e39526fafc418cfcf1636d5->enter($__internal_f3add404d70ddf0909126e19062deb5c908a67101e39526fafc418cfcf1636d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a8fc137ab536e31969f0bdad1edc9a17b46dfe5c3b7fc93ea5c0c7043a4cd742->leave($__internal_a8fc137ab536e31969f0bdad1edc9a17b46dfe5c3b7fc93ea5c0c7043a4cd742_prof);

        
        $__internal_f3add404d70ddf0909126e19062deb5c908a67101e39526fafc418cfcf1636d5->leave($__internal_f3add404d70ddf0909126e19062deb5c908a67101e39526fafc418cfcf1636d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
