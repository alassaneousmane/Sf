<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_c90804bb9ab98f73297e0b21286c358c4fa6a4b2bdf7268e90710fb86bffef0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e19cdb2343461dacbcadff92a1b773898c8ad1f4e6b9a8b744b3897e633591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e19cdb2343461dacbcadff92a1b773898c8ad1f4e6b9a8b744b3897e633591->enter($__internal_38e19cdb2343461dacbcadff92a1b773898c8ad1f4e6b9a8b744b3897e633591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_284a04b509f997772bc6f2e0c02c0c36251f15e609227a9b5c29e35626b43afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284a04b509f997772bc6f2e0c02c0c36251f15e609227a9b5c29e35626b43afa->enter($__internal_284a04b509f997772bc6f2e0c02c0c36251f15e609227a9b5c29e35626b43afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e19cdb2343461dacbcadff92a1b773898c8ad1f4e6b9a8b744b3897e633591->leave($__internal_38e19cdb2343461dacbcadff92a1b773898c8ad1f4e6b9a8b744b3897e633591_prof);

        
        $__internal_284a04b509f997772bc6f2e0c02c0c36251f15e609227a9b5c29e35626b43afa->leave($__internal_284a04b509f997772bc6f2e0c02c0c36251f15e609227a9b5c29e35626b43afa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d1ae7da16e5919a2fa00c5b68caffa0aacf13294a9ff4340c51845322d2774b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1ae7da16e5919a2fa00c5b68caffa0aacf13294a9ff4340c51845322d2774b->enter($__internal_6d1ae7da16e5919a2fa00c5b68caffa0aacf13294a9ff4340c51845322d2774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cc01718d752fd48fc0ab95028a17b15caec57c778b39c278fdd29b892a726d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc01718d752fd48fc0ab95028a17b15caec57c778b39c278fdd29b892a726d4->enter($__internal_4cc01718d752fd48fc0ab95028a17b15caec57c778b39c278fdd29b892a726d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cc01718d752fd48fc0ab95028a17b15caec57c778b39c278fdd29b892a726d4->leave($__internal_4cc01718d752fd48fc0ab95028a17b15caec57c778b39c278fdd29b892a726d4_prof);

        
        $__internal_6d1ae7da16e5919a2fa00c5b68caffa0aacf13294a9ff4340c51845322d2774b->leave($__internal_6d1ae7da16e5919a2fa00c5b68caffa0aacf13294a9ff4340c51845322d2774b_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4437fb2fdee4af8f68ab115de1fda28e76495a9b968b8c31bf6705edca2bb551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4437fb2fdee4af8f68ab115de1fda28e76495a9b968b8c31bf6705edca2bb551->enter($__internal_4437fb2fdee4af8f68ab115de1fda28e76495a9b968b8c31bf6705edca2bb551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_41ca082ee1015ff58f994d17865e8686088514662cadd395cff69db5b6e93392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ca082ee1015ff58f994d17865e8686088514662cadd395cff69db5b6e93392->enter($__internal_41ca082ee1015ff58f994d17865e8686088514662cadd395cff69db5b6e93392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Ajout d'une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous ajoutez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
  ";
        // line 28
        echo "
";
        
        $__internal_41ca082ee1015ff58f994d17865e8686088514662cadd395cff69db5b6e93392->leave($__internal_41ca082ee1015ff58f994d17865e8686088514662cadd395cff69db5b6e93392_prof);

        
        $__internal_4437fb2fdee4af8f68ab115de1fda28e76495a9b968b8c31bf6705edca2bb551->leave($__internal_4437fb2fdee4af8f68ab115de1fda28e76495a9b968b8c31bf6705edca2bb551_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Ajout d'une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous ajoutez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
  {# 
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>
  #}

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
