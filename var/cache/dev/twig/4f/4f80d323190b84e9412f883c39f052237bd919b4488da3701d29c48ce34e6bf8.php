<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_1ace5e2706ce9569b19995b4603ce5b6ab2ac91c834ea607cf7e6178c8e2bf73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_00cda9de25ab4d18c0d4288ab9fc39448468429d8a157080b1a8c279db53b7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cda9de25ab4d18c0d4288ab9fc39448468429d8a157080b1a8c279db53b7b4->enter($__internal_00cda9de25ab4d18c0d4288ab9fc39448468429d8a157080b1a8c279db53b7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_f8e2d687915c6acd3dedbf8bb79c9a5daf3292c49ee1c6915b4c9a8d975c4565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e2d687915c6acd3dedbf8bb79c9a5daf3292c49ee1c6915b4c9a8d975c4565->enter($__internal_f8e2d687915c6acd3dedbf8bb79c9a5daf3292c49ee1c6915b4c9a8d975c4565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00cda9de25ab4d18c0d4288ab9fc39448468429d8a157080b1a8c279db53b7b4->leave($__internal_00cda9de25ab4d18c0d4288ab9fc39448468429d8a157080b1a8c279db53b7b4_prof);

        
        $__internal_f8e2d687915c6acd3dedbf8bb79c9a5daf3292c49ee1c6915b4c9a8d975c4565->leave($__internal_f8e2d687915c6acd3dedbf8bb79c9a5daf3292c49ee1c6915b4c9a8d975c4565_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d178deb8a7d51434857fc9baa94ad3b7ccf5d460e71f49800ee9a2e45fca3e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d178deb8a7d51434857fc9baa94ad3b7ccf5d460e71f49800ee9a2e45fca3e00->enter($__internal_d178deb8a7d51434857fc9baa94ad3b7ccf5d460e71f49800ee9a2e45fca3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b890ed59a75581f9105303f68aa913a4800454b7db64cd9d517d9c486190209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b890ed59a75581f9105303f68aa913a4800454b7db64cd9d517d9c486190209->enter($__internal_8b890ed59a75581f9105303f68aa913a4800454b7db64cd9d517d9c486190209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8b890ed59a75581f9105303f68aa913a4800454b7db64cd9d517d9c486190209->leave($__internal_8b890ed59a75581f9105303f68aa913a4800454b7db64cd9d517d9c486190209_prof);

        
        $__internal_d178deb8a7d51434857fc9baa94ad3b7ccf5d460e71f49800ee9a2e45fca3e00->leave($__internal_d178deb8a7d51434857fc9baa94ad3b7ccf5d460e71f49800ee9a2e45fca3e00_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5e23181356f9934973b24eb9389f05d82261003d2f87b4681e69cdef71c32729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e23181356f9934973b24eb9389f05d82261003d2f87b4681e69cdef71c32729->enter($__internal_5e23181356f9934973b24eb9389f05d82261003d2f87b4681e69cdef71c32729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_29c669692a11c5a44dfc0c7c41c96fe0b91e422d8de7763d1bd1f92da6ed4c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c669692a11c5a44dfc0c7c41c96fe0b91e422d8de7763d1bd1f92da6ed4c62->enter($__internal_29c669692a11c5a44dfc0c7c41c96fe0b91e422d8de7763d1bd1f92da6ed4c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    <div class=\"alert alert-info\" role=\"alert\"><strong>Message flash :: </strong>  ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

 ";
        // line 17
        echo " ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 18
            echo "
  <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\">
     <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()) . "-") . $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "id", array())), "html", null, true);
            echo "\" height=\"180px\" class=\"img-thumbnail\" width=\"300px\" />
  </a>
  ";
        } else {
            // line 23
            echo "
  <p>Aucune image n'est associée à cette annonce à priori </p>

 ";
        }
        // line 27
        echo "
  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo " ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "email", array()))) {
            echo " - <a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "email", array()), "html", null, true);
            echo "</a> ";
        }
        echo " - ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "full", "none"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 32
        echo $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array());
        echo "
  </div>
  ";
        // line 35
        echo "  ";
        if (array_key_exists("listAdvertSkills", $context)) {
            // line 36
            echo "
  ";
            // line 37
            if ((twig_length_filter($this->env, ($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills"))) > 0)) {
                // line 38
                echo "    ";
                // line 39
                echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ol>
      ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills")));
                foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                    // line 43
                    echo "        <li><p class=\"alert alert-success\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                    echo "</strong> : niveau <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "advert", array()), "title", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "advert", array()), "author", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "advert", array()), "date", array()), "d/m/Y"), "html", null, true);
                    echo " </p></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "    </ol>
  </div>
";
            } else {
                // line 48
                echo "  <p class=\"alert alert-info\">Aucune compétence n'est requise pour effectuer cette tâche.</p>
";
            }
        }
        // line 51
        echo "
  ";
        // line 53
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 54
            echo "    <p id=\"listeCategories\">
      Cette annonce est apparue dans les catégories suivants:
      ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 57
                echo "        <a href=\"\" class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a> ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 58
                echo "        ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo ".";
                }
                // line 59
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </p>
  ";
        }
        // line 62
        echo "  ";
        // line 63
        echo "  ";
        if (array_key_exists("listApplications", $context)) {
            // line 64
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listApplications"] ?? $this->getContext($context, "listApplications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 65
                echo "    <p class=\"alert alert-danger\"><i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "author", array()), "html", null, true);
                echo " </i> : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
                echo "</p>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  ";
        }
        // line 68
        echo "
  <p>
    <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
     ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour à la liste"), "html", null, true);
        echo " 
    </a>
    ";
        // line 74
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 75
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
     ";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Modifier l'annonce", array(), "messages");
            // line 78
            echo "    </a>
     <a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
            echo "\" title=\"Ajouter une annonce\" class=\"btn btn-default\">
           <i class=\"glyphicon glyphicon-plus\"></i>&nbsp;";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ajouter d'annonces", array(), "messages");
            echo "</a>
       
    
      <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        ";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Supprimer l'annonce", array(), "messages");
            // line 86
            echo "    </a>
    ";
        }
        // line 88
        echo "    
        
  </p>

";
        
        $__internal_29c669692a11c5a44dfc0c7c41c96fe0b91e422d8de7763d1bd1f92da6ed4c62->leave($__internal_29c669692a11c5a44dfc0c7c41c96fe0b91e422d8de7763d1bd1f92da6ed4c62_prof);

        
        $__internal_5e23181356f9934973b24eb9389f05d82261003d2f87b4681e69cdef71c32729->leave($__internal_5e23181356f9934973b24eb9389f05d82261003d2f87b4681e69cdef71c32729_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 88,  319 => 86,  317 => 85,  312 => 83,  306 => 80,  302 => 79,  299 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 72,  279 => 70,  275 => 68,  272 => 67,  261 => 65,  256 => 64,  253 => 63,  251 => 62,  247 => 60,  233 => 59,  228 => 58,  221 => 57,  204 => 56,  200 => 54,  197 => 53,  194 => 51,  189 => 48,  184 => 45,  167 => 43,  163 => 42,  158 => 39,  156 => 38,  154 => 37,  151 => 36,  148 => 35,  143 => 32,  127 => 29,  123 => 28,  120 => 27,  114 => 23,  104 => 20,  100 => 19,  97 => 18,  94 => 17,  90 => 14,  81 => 12,  77 => 11,  74 => 10,  65 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  {{ advert.title }} - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

{% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\" role=\"alert\"><strong>Message flash :: </strong>  {{ message }} </div>
{% endfor %}


 {# On vérifie bien qu'une image est liée à l'annonce #}
 {% if advert.image is not null %}

  <a href=\"{{ asset(advert.image.webPath) }}\">
     <img src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{  advert.image.alt }}\" title=\"{{ advert.image.alt ~ \"-\" ~ advert.image.id }}\" height=\"180px\" class=\"img-thumbnail\" width=\"300px\" />
  </a>
  {% else %}

  <p>Aucune image n'est associée à cette annonce à priori </p>

 {% endif %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }} {% if advert.email is not null %} - <a href=\"mailto:{{ advert.email }}\">{{ advert.email }}</a> {% endif %} - {{ advert.date|localizeddate('full', 'none') }}</i>

  <div class=\"well\">
    {{ advert.content|raw }}
  </div>
  {# Affichage des compétences liées à l'annonce #}
  {%  if listAdvertSkills is defined %}

  {% if listAdvertSkills|length > 0 %}
    {#  s'il y a au moins un élément dans ce tableau #}
  <div>
    Cette annonce requiert les compétences suivantes :
    <ol>
      {% for advertSkill in listAdvertSkills %}
        <li><p class=\"alert alert-success\"><strong>{{ advertSkill.skill.name }}</strong> : niveau <strong>{{ advertSkill.level }}</strong> - {{ advertSkill.advert.title }} - {{ advertSkill.advert.author }} - {{ advertSkill.advert.date|date('d/m/Y') }} </p></li>
      {% endfor %}
    </ol>
  </div>
{% else %}
  <p class=\"alert alert-info\">Aucune compétence n'est requise pour effectuer cette tâche.</p>
{% endif %}
{% endif %}

  {# Affichage des catégories de l'annonce ici #}
  {% if not advert.categories.empty %}
    <p id=\"listeCategories\">
      Cette annonce est apparue dans les catégories suivants:
      {%  for category in advert.categories %}
        <a href=\"\" class=\"\">{{ category.name }}</a> {% if not loop.last %}, {% endif %}
        {% if loop.last %}.{% endif %}
      {% endfor %}
    </p>
  {% endif %}
  {# Affichage des candidatures #}
  {% if listApplications is defined %}
  {% for application in listApplications %}
    <p class=\"alert alert-danger\"><i>{{ application.author }} </i> : {{ application.content }}</p>
  {% endfor %}
  {% endif %}

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
     {{ 'Retour à la liste'|trans }} 
    </a>
    {% if is_granted('ROLE_AUTEUR') %}
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
     {% trans %} Modifier l'annonce {% endtrans %}
    </a>
     <a href=\"{{ path('oc_platform_add') }}\" title=\"Ajouter une annonce\" class=\"btn btn-default\">
           <i class=\"glyphicon glyphicon-plus\"></i>&nbsp;{% trans %}Ajouter d'annonces{% endtrans %}</a>
       
    
      <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        {% trans %}Supprimer l'annonce {% endtrans %}
    </a>
    {% endif %}
    
        
  </p>

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
