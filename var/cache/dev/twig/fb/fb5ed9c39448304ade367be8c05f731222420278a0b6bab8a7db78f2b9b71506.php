<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_0f4e603b2b434e4eafa45d251c6edaee6a683d1696845f1e124a55fcbcc84198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_3cbf13250ba12ff3e50f283dcbfc6942b40cd800a7b960a2cb485d28f6e15874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbf13250ba12ff3e50f283dcbfc6942b40cd800a7b960a2cb485d28f6e15874->enter($__internal_3cbf13250ba12ff3e50f283dcbfc6942b40cd800a7b960a2cb485d28f6e15874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_a91c63fd0054c723343f0aea7bd0abe865018e6c196994f2071e5407fed7111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91c63fd0054c723343f0aea7bd0abe865018e6c196994f2071e5407fed7111d->enter($__internal_a91c63fd0054c723343f0aea7bd0abe865018e6c196994f2071e5407fed7111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbf13250ba12ff3e50f283dcbfc6942b40cd800a7b960a2cb485d28f6e15874->leave($__internal_3cbf13250ba12ff3e50f283dcbfc6942b40cd800a7b960a2cb485d28f6e15874_prof);

        
        $__internal_a91c63fd0054c723343f0aea7bd0abe865018e6c196994f2071e5407fed7111d->leave($__internal_a91c63fd0054c723343f0aea7bd0abe865018e6c196994f2071e5407fed7111d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_863fa18a1b24a4684a73e7d0bb5a412db8bf73aadc7a5db64842ba29a9b9650a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863fa18a1b24a4684a73e7d0bb5a412db8bf73aadc7a5db64842ba29a9b9650a->enter($__internal_863fa18a1b24a4684a73e7d0bb5a412db8bf73aadc7a5db64842ba29a9b9650a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58d7603904090769a60a79a915bb18c8a0aed87e92035f13a557cfe94a78aeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d7603904090769a60a79a915bb18c8a0aed87e92035f13a557cfe94a78aeff->enter($__internal_58d7603904090769a60a79a915bb18c8a0aed87e92035f13a557cfe94a78aeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_58d7603904090769a60a79a915bb18c8a0aed87e92035f13a557cfe94a78aeff->leave($__internal_58d7603904090769a60a79a915bb18c8a0aed87e92035f13a557cfe94a78aeff_prof);

        
        $__internal_863fa18a1b24a4684a73e7d0bb5a412db8bf73aadc7a5db64842ba29a9b9650a->leave($__internal_863fa18a1b24a4684a73e7d0bb5a412db8bf73aadc7a5db64842ba29a9b9650a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a16b929c2d5e43ae206e85bcef0251c9088e94095b79f4cad10fae1961c93084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16b929c2d5e43ae206e85bcef0251c9088e94095b79f4cad10fae1961c93084->enter($__internal_a16b929c2d5e43ae206e85bcef0251c9088e94095b79f4cad10fae1961c93084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c02ebc826d70ffce766d129ec133c8124e3cf14925a6e381453bcae7ab687263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02ebc826d70ffce766d129ec133c8124e3cf14925a6e381453bcae7ab687263->enter($__internal_c02ebc826d70ffce766d129ec133c8124e3cf14925a6e381453bcae7ab687263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo " ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo " \" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_c02ebc826d70ffce766d129ec133c8124e3cf14925a6e381453bcae7ab687263->leave($__internal_c02ebc826d70ffce766d129ec133c8124e3cf14925a6e381453bcae7ab687263_prof);

        
        $__internal_a16b929c2d5e43ae206e85bcef0251c9088e94095b79f4cad10fae1961c93084->leave($__internal_a16b929c2d5e43ae206e85bcef0251c9088e94095b79f4cad10fae1961c93084_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  98 => 24,  91 => 19,  86 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" de {{ advert.author }} ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer {{ advert.title }} \" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}", "OCPlatformBundle:Advert:delete.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
