<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_654546900055ab49e06d652bfda49a3357f580b29c5704b9043f4831f1482e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_4460da68185b02b2d903e9571fe8a3e8b135d306843c6950bece761895eecd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4460da68185b02b2d903e9571fe8a3e8b135d306843c6950bece761895eecd93->enter($__internal_4460da68185b02b2d903e9571fe8a3e8b135d306843c6950bece761895eecd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_6c181e5bb4a46f109c702cb39bfebab67fb58921c7d3e48ac1a22a1a19f8af4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c181e5bb4a46f109c702cb39bfebab67fb58921c7d3e48ac1a22a1a19f8af4b->enter($__internal_6c181e5bb4a46f109c702cb39bfebab67fb58921c7d3e48ac1a22a1a19f8af4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4460da68185b02b2d903e9571fe8a3e8b135d306843c6950bece761895eecd93->leave($__internal_4460da68185b02b2d903e9571fe8a3e8b135d306843c6950bece761895eecd93_prof);

        
        $__internal_6c181e5bb4a46f109c702cb39bfebab67fb58921c7d3e48ac1a22a1a19f8af4b->leave($__internal_6c181e5bb4a46f109c702cb39bfebab67fb58921c7d3e48ac1a22a1a19f8af4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3a455cb808ab4bf9b14b7ea265659bfb807317cadca57a2f87fb28199cd6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3a455cb808ab4bf9b14b7ea265659bfb807317cadca57a2f87fb28199cd6bb->enter($__internal_3f3a455cb808ab4bf9b14b7ea265659bfb807317cadca57a2f87fb28199cd6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_083686b2b3a17ab45e1d749ec1e648bc345f7609a551b021e5742e2344af463e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083686b2b3a17ab45e1d749ec1e648bc345f7609a551b021e5742e2344af463e->enter($__internal_083686b2b3a17ab45e1d749ec1e648bc345f7609a551b021e5742e2344af463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_083686b2b3a17ab45e1d749ec1e648bc345f7609a551b021e5742e2344af463e->leave($__internal_083686b2b3a17ab45e1d749ec1e648bc345f7609a551b021e5742e2344af463e_prof);

        
        $__internal_3f3a455cb808ab4bf9b14b7ea265659bfb807317cadca57a2f87fb28199cd6bb->leave($__internal_3f3a455cb808ab4bf9b14b7ea265659bfb807317cadca57a2f87fb28199cd6bb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7d46c39ee8b08107a51f8dfa6dc737936cf0d8a655df565f98ac103bc76e5570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d46c39ee8b08107a51f8dfa6dc737936cf0d8a655df565f98ac103bc76e5570->enter($__internal_7d46c39ee8b08107a51f8dfa6dc737936cf0d8a655df565f98ac103bc76e5570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_374e5ab730a7e8cd91090ed728fee372dfdb74bab00289cf71b96c8b0611f725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374e5ab730a7e8cd91090ed728fee372dfdb74bab00289cf71b96c8b0611f725->enter($__internal_374e5ab730a7e8cd91090ed728fee372dfdb74bab00289cf71b96c8b0611f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "

  <h2>Modifier une annonce</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
  ";
        // line 22
        if ($this->getAttribute(($context["advert"] ?? null), "id", array(), "any", true, true)) {
            // line 23
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  ";
        }
        // line 28
        echo "    
  </p>

";
        
        $__internal_374e5ab730a7e8cd91090ed728fee372dfdb74bab00289cf71b96c8b0611f725->leave($__internal_374e5ab730a7e8cd91090ed728fee372dfdb74bab00289cf71b96c8b0611f725_prof);

        
        $__internal_7d46c39ee8b08107a51f8dfa6dc737936cf0d8a655df565f98ac103bc76e5570->leave($__internal_7d46c39ee8b08107a51f8dfa6dc737936cf0d8a655df565f98ac103bc76e5570_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  91 => 23,  89 => 22,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}


  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
  {% if advert.id is defined %}
  <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  {% endif %}
    
  </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
