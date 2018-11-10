<?php

/* OCPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_449f860252339d605ebc4a322a9a94a89b3492d03e85194a5e1af5d30ca01d18 extends Twig_Template
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
        $__internal_f592ed4413ecf97a98c56650474a3e715028e80028ab84739f37b49103b6b295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f592ed4413ecf97a98c56650474a3e715028e80028ab84739f37b49103b6b295->enter($__internal_f592ed4413ecf97a98c56650474a3e715028e80028ab84739f37b49103b6b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:email.txt.twig"));

        $__internal_5447a4b92841ebda94836521cf5413daa62459ec1799db5c81c34e78d35ada6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5447a4b92841ebda94836521cf5413daa62459ec1799db5c81c34e78d35ada6d->enter($__internal_5447a4b92841ebda94836521cf5413daa62459ec1799db5c81c34e78d35ada6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:email.txt.twig"));

        // line 2
        echo "
Bonjour ";
        // line 3
        echo ($context["pseudo"] ?? $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_f592ed4413ecf97a98c56650474a3e715028e80028ab84739f37b49103b6b295->leave($__internal_f592ed4413ecf97a98c56650474a3e715028e80028ab84739f37b49103b6b295_prof);

        
        $__internal_5447a4b92841ebda94836521cf5413daa62459ec1799db5c81c34e78d35ada6d->leave($__internal_5447a4b92841ebda94836521cf5413daa62459ec1799db5c81c34e78d35ada6d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/email.txt.twig #}

Bonjour {{ pseudo }},

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !", "OCPlatformBundle:Advert:email.txt.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/email.txt.twig");
    }
}
