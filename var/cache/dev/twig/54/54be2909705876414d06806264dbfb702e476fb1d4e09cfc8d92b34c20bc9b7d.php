<?php

/* OCPlatformBundle:Advert:purge.html.twig */
class __TwigTemplate_e7a16137ee791ea2d6c1b53ce7ecf8313eb5d4f63f055fa6fff315132cb5e74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:purge.html.twig", 3);
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
        $__internal_4e9d34e5524607fc31cee30a72a745b87a2bcd6698a96e34c5fda5a441234a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9d34e5524607fc31cee30a72a745b87a2bcd6698a96e34c5fda5a441234a31->enter($__internal_4e9d34e5524607fc31cee30a72a745b87a2bcd6698a96e34c5fda5a441234a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purge.html.twig"));

        $__internal_553261c88967b81d43fa1e639089af76628c5d12d800519aaa25207d34c2e9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553261c88967b81d43fa1e639089af76628c5d12d800519aaa25207d34c2e9a6->enter($__internal_553261c88967b81d43fa1e639089af76628c5d12d800519aaa25207d34c2e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purge.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9d34e5524607fc31cee30a72a745b87a2bcd6698a96e34c5fda5a441234a31->leave($__internal_4e9d34e5524607fc31cee30a72a745b87a2bcd6698a96e34c5fda5a441234a31_prof);

        
        $__internal_553261c88967b81d43fa1e639089af76628c5d12d800519aaa25207d34c2e9a6->leave($__internal_553261c88967b81d43fa1e639089af76628c5d12d800519aaa25207d34c2e9a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd37200c5409f8807cb86de037d624d44de05f35d57a1117f0f8512c19bf0337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd37200c5409f8807cb86de037d624d44de05f35d57a1117f0f8512c19bf0337->enter($__internal_cd37200c5409f8807cb86de037d624d44de05f35d57a1117f0f8512c19bf0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab704431756abd0fcc17eab1722ec326c3596c5fc66e1bc25598716f5da6bf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab704431756abd0fcc17eab1722ec326c3596c5fc66e1bc25598716f5da6bf61->enter($__internal_ab704431756abd0fcc17eab1722ec326c3596c5fc66e1bc25598716f5da6bf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Purger des annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab704431756abd0fcc17eab1722ec326c3596c5fc66e1bc25598716f5da6bf61->leave($__internal_ab704431756abd0fcc17eab1722ec326c3596c5fc66e1bc25598716f5da6bf61_prof);

        
        $__internal_cd37200c5409f8807cb86de037d624d44de05f35d57a1117f0f8512c19bf0337->leave($__internal_cd37200c5409f8807cb86de037d624d44de05f35d57a1117f0f8512c19bf0337_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_67c8c42f3e62f8757ce15290ba781abc889972a51aae49bbfaf489e533720312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c8c42f3e62f8757ce15290ba781abc889972a51aae49bbfaf489e533720312->enter($__internal_67c8c42f3e62f8757ce15290ba781abc889972a51aae49bbfaf489e533720312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_dde012ea98396ee3a4fdc5fa2186fda8d9e0e877535aeccd1db5e376504bd8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde012ea98396ee3a4fdc5fa2186fda8d9e0e877535aeccd1db5e376504bd8a9->enter($__internal_dde012ea98396ee3a4fdc5fa2186fda8d9e0e877535aeccd1db5e376504bd8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
";
        // line 11
        if ( !twig_test_empty(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")))) {
            echo "  
<h2>Purger ";
            // line 12
            echo twig_escape_filter($this->env, (($context["days"] ?? $this->getContext($context, "days")) . " annonces ? "), "html", null, true);
            echo "</h2>

  <p>
    Etes-vous certain de vouloir purger ces annonces : ?   

     ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 18
                echo "        <a href=\"#\">
          ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "
        </a><br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
    ";
        } else {
            // line 24
            echo "
    <p>Pas d'annonces à purger. </p>     
     
  </p>

  ";
            // line 30
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_purge", array("days" => ($context["days"] ?? $this->getContext($context, "days")))), "html", null, true);
            echo "\" method=\"post\">
   
    ";
            // line 33
            echo "    <input type=\"submit\" value=\"Démarrer le purge maintenant\" class=\"btn btn-danger\" />
    ";
            // line 35
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

  </form>
";
        }
        // line 39
        echo "

   <hr>
    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>

";
        
        $__internal_dde012ea98396ee3a4fdc5fa2186fda8d9e0e877535aeccd1db5e376504bd8a9->leave($__internal_dde012ea98396ee3a4fdc5fa2186fda8d9e0e877535aeccd1db5e376504bd8a9_prof);

        
        $__internal_67c8c42f3e62f8757ce15290ba781abc889972a51aae49bbfaf489e533720312->leave($__internal_67c8c42f3e62f8757ce15290ba781abc889972a51aae49bbfaf489e533720312_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:purge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  131 => 39,  123 => 35,  120 => 33,  114 => 30,  107 => 24,  103 => 22,  94 => 19,  91 => 18,  87 => 17,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
  Purger des annonces - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

{% if listAdverts is not empty %}  
<h2>Purger {{ days ~ \" annonces ? \"}}</h2>

  <p>
    Etes-vous certain de vouloir purger ces annonces : ?   

     {% for advert in listAdverts %}
        <a href=\"#\">
          {{ advert.title }}
        </a><br>
    {% endfor %}

    {% else %}

    <p>Pas d'annonces à purger. </p>     
     
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_purge', {'days': days}) }}\" method=\"post\">
   
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Démarrer le purge maintenant\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}

  </form>
{% endif %}


   <hr>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>

{% endblock %}", "OCPlatformBundle:Advert:purge.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/purge.html.twig");
    }
}
