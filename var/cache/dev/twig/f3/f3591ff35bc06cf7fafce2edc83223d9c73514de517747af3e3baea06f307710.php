<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_33120fc02dbfd0b030f8771750b969a44e37e1f3d32abdaeb7fe53cc0978e8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'searchbox' => array($this, 'block_searchbox'),
            'annonces_for_table' => array($this, 'block_annonces_for_table'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2f2e785f93028cf225d1fdb69e1f00dc7c9b95435d282169993b71366538dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f2e785f93028cf225d1fdb69e1f00dc7c9b95435d282169993b71366538dd1->enter($__internal_f2f2e785f93028cf225d1fdb69e1f00dc7c9b95435d282169993b71366538dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_cebfd571158f9f31cf4f32cbc0866724e820d9cfd74cc96cc36ae3d0e3f4f8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebfd571158f9f31cf4f32cbc0866724e820d9cfd74cc96cc36ae3d0e3f4f8e3->enter($__internal_cebfd571158f9f31cf4f32cbc0866724e820d9cfd74cc96cc36ae3d0e3f4f8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f2e785f93028cf225d1fdb69e1f00dc7c9b95435d282169993b71366538dd1->leave($__internal_f2f2e785f93028cf225d1fdb69e1f00dc7c9b95435d282169993b71366538dd1_prof);

        
        $__internal_cebfd571158f9f31cf4f32cbc0866724e820d9cfd74cc96cc36ae3d0e3f4f8e3->leave($__internal_cebfd571158f9f31cf4f32cbc0866724e820d9cfd74cc96cc36ae3d0e3f4f8e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da0c6ee38ce44c1e844f3fc6a74eb65e1ac6dfa73ee1fc6ebb9dbcd5b16312dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0c6ee38ce44c1e844f3fc6a74eb65e1ac6dfa73ee1fc6ebb9dbcd5b16312dc->enter($__internal_da0c6ee38ce44c1e844f3fc6a74eb65e1ac6dfa73ee1fc6ebb9dbcd5b16312dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6828cdd68e72f28ae6b03336d6f48070fa1e0a08f9305b75418ff4a9e5e6662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6828cdd68e72f28ae6b03336d6f48070fa1e0a08f9305b75418ff4a9e5e6662->enter($__internal_f6828cdd68e72f28ae6b03336d6f48070fa1e0a08f9305b75418ff4a9e5e6662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, (("(" . twig_length_filter($this->env, ($context["listAdverts"] ?? $this->getContext($context, "listAdverts")))) . " annonces publiées)"), "html", null, true);
        echo "
";
        
        $__internal_f6828cdd68e72f28ae6b03336d6f48070fa1e0a08f9305b75418ff4a9e5e6662->leave($__internal_f6828cdd68e72f28ae6b03336d6f48070fa1e0a08f9305b75418ff4a9e5e6662_prof);

        
        $__internal_da0c6ee38ce44c1e844f3fc6a74eb65e1ac6dfa73ee1fc6ebb9dbcd5b16312dc->leave($__internal_da0c6ee38ce44c1e844f3fc6a74eb65e1ac6dfa73ee1fc6ebb9dbcd5b16312dc_prof);

    }

    // line 9
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_bfdc3fccd1115610c550c014149aaa4539c01566a45fbebe012c0623c9b82f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdc3fccd1115610c550c014149aaa4539c01566a45fbebe012c0623c9b82f13->enter($__internal_bfdc3fccd1115610c550c014149aaa4539c01566a45fbebe012c0623c9b82f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_dfe2ff2e0e99c3cd51ac3e0c4dbcb16a9ba0e18124e989851fb38c7c59a12f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe2ff2e0e99c3cd51ac3e0c4dbcb16a9ba0e18124e989851fb38c7c59a12f9b->enter($__internal_dfe2ff2e0e99c3cd51ac3e0c4dbcb16a9ba0e18124e989851fb38c7c59a12f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        // line 10
        echo "    ";
        $this->displayParentBlock("searchbox", $context, $blocks);
        echo "
";
        
        $__internal_dfe2ff2e0e99c3cd51ac3e0c4dbcb16a9ba0e18124e989851fb38c7c59a12f9b->leave($__internal_dfe2ff2e0e99c3cd51ac3e0c4dbcb16a9ba0e18124e989851fb38c7c59a12f9b_prof);

        
        $__internal_bfdc3fccd1115610c550c014149aaa4539c01566a45fbebe012c0623c9b82f13->leave($__internal_bfdc3fccd1115610c550c014149aaa4539c01566a45fbebe012c0623c9b82f13_prof);

    }

    // line 12
    public function block_annonces_for_table($context, array $blocks = array())
    {
        $__internal_f2c9af9890f61b4b02af9b94d4e44340f08f356fc37d3f64561d34d78e1d7a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c9af9890f61b4b02af9b94d4e44340f08f356fc37d3f64561d34d78e1d7a25->enter($__internal_f2c9af9890f61b4b02af9b94d4e44340f08f356fc37d3f64561d34d78e1d7a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces_for_table"));

        $__internal_eca6467b4a77d6226eb1752b0fdd1d8160cfb8c4d0bfd65210fb79e1f0391632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca6467b4a77d6226eb1752b0fdd1d8160cfb8c4d0bfd65210fb79e1f0391632->enter($__internal_eca6467b4a77d6226eb1752b0fdd1d8160cfb8c4d0bfd65210fb79e1f0391632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces_for_table"));

        // line 13
        echo "     <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>IP</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                 ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 26
            echo "                      <tr>
                      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "ip", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "email", array()), "html", null, true);
            echo "</td>
                    </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                
              </tbody>
            </table>
          </div>
 ";
        
        $__internal_eca6467b4a77d6226eb1752b0fdd1d8160cfb8c4d0bfd65210fb79e1f0391632->leave($__internal_eca6467b4a77d6226eb1752b0fdd1d8160cfb8c4d0bfd65210fb79e1f0391632_prof);

        
        $__internal_f2c9af9890f61b4b02af9b94d4e44340f08f356fc37d3f64561d34d78e1d7a25->leave($__internal_f2c9af9890f61b4b02af9b94d4e44340f08f356fc37d3f64561d34d78e1d7a25_prof);

    }

    // line 39
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_79ef5773c165ede314269221f847d75167c5ab3355fbcb46ad3f2232d3149255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ef5773c165ede314269221f847d75167c5ab3355fbcb46ad3f2232d3149255->enter($__internal_79ef5773c165ede314269221f847d75167c5ab3355fbcb46ad3f2232d3149255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2a19439c43c5cc3839d283e820622aae9024ed5f9d6fd8fdfd831ace1d675cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a19439c43c5cc3839d283e820622aae9024ed5f9d6fd8fdfd831ace1d675cce->enter($__internal_2a19439c43c5cc3839d283e820622aae9024ed5f9d6fd8fdfd831ace1d675cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        echo " <!-- On réutilise ce bloc de nouveau -->


  <h2>Liste des annonces</h2>

  <ol>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 46
            echo "      <li>
        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["advert"], "author", array()) . " - ") . $this->getAttribute($context["advert"], "title", array())) . " - ") . twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none")), "html", null, true);
            echo "\">
         ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 51
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none"), "html", null, true);
            echo " - ";
            if (($this->getAttribute($context["advert"], "nbApplications", array()) == 0)) {
                echo " Pas de postulants ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "nbApplications", array()), "html", null, true);
                echo " candidatures ";
            }
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "slug", array()), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </ol>

  ";
        // line 59
        echo "  <ul class=\"pagination\">
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 61
            echo "        <li ";
            if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  </ul>
  <ol>
    ";
        // line 68
        echo "    <hr>
     <h4>Liste des annonces OussouToure </h4>
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdvertOussou"] ?? $this->getContext($context, "listAdvertOussou")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 71
            echo "      <li>
        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["advert"], "author", array()) . " - ") . $this->getAttribute($context["advert"], "title", array())) . " - ") . twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "
        le ";
            // line 75
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "      <li> Pas (encore !) d'annonces </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "  </ol>

  <ol>
    ";
        // line 84
        echo "    <hr>
    <h4>Liste des annonces de Potencier Fabien avant l'année 2017</h4>
    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdvertsFabien"] ?? $this->getContext($context, "listAdvertsFabien")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 87
            echo "        <li>
        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["advert"], "author", array()) . " - ") . $this->getAttribute($context["advert"], "title", array())) . " - ") . twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "
        le ";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "      <li> Pas (encore !) d'annonces </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "  </ol>

";
        
        $__internal_2a19439c43c5cc3839d283e820622aae9024ed5f9d6fd8fdfd831ace1d675cce->leave($__internal_2a19439c43c5cc3839d283e820622aae9024ed5f9d6fd8fdfd831ace1d675cce_prof);

        
        $__internal_79ef5773c165ede314269221f847d75167c5ab3355fbcb46ad3f2232d3149255->leave($__internal_79ef5773c165ede314269221f847d75167c5ab3355fbcb46ad3f2232d3149255_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 96,  333 => 94,  325 => 91,  321 => 90,  312 => 88,  309 => 87,  304 => 86,  300 => 84,  295 => 80,  288 => 78,  280 => 75,  276 => 74,  267 => 72,  264 => 71,  259 => 70,  255 => 68,  251 => 65,  240 => 62,  233 => 61,  229 => 60,  226 => 59,  222 => 56,  215 => 54,  197 => 51,  193 => 50,  188 => 48,  182 => 47,  179 => 46,  174 => 45,  158 => 39,  144 => 33,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  116 => 26,  112 => 25,  98 => 13,  89 => 12,  76 => 10,  67 => 9,  52 => 6,  43 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }} {{ \"(\" ~ listAdverts|length ~ \" annonces publiées)\" }}
{% endblock %}

{% block searchbox %}
    {{ parent() }}
{% endblock %}
 {% block annonces_for_table %}
     <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>IP</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                 {% for advert in listAdverts %}
                      <tr>
                      <td>{{ advert.id }}</td>
                      <td>{{ advert.title }}</td>
                      <td>{{ advert.author }}</td>
                      <td>{{ advert.ip }}</td>
                      <td>{{ advert.email }}</td>
                    </tr>
                 {% endfor %}                
              </tbody>
            </table>
          </div>
 {% endblock %}

{% block ocplatform_body %} <!-- On réutilise ce bloc de nouveau -->


  <h2>Liste des annonces</h2>

  <ol>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" title=\"{{ advert.author ~ \" - \" ~ advert.title ~ \" - \" ~ advert.date|localizeddate('medium', 'none') }}\">
         {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|localizeddate('medium', 'none') }} - {% if advert.nbApplications == 0 %} Pas de postulants {% else %} {{ advert.nbApplications }} candidatures {% endif %} - {{ advert.slug }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ol>

  {# Partie pagination #}
  <ul class=\"pagination\">
    {% for p in range(1, nbPages) %}
        <li {% if p == page %} class=\"active\" {% endif %}>
          <a href=\"{{ path('oc_platform_home', {'page' : p}) }}\"> {{ p }}</a>
        </li>
    {% endfor %}
  </ul>
  <ol>
    {# Liste des annonces crées par OussouToure #}
    <hr>
     <h4>Liste des annonces OussouToure </h4>
    {% for advert in listAdvertOussou %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id' : advert.id }) }}\" title=\"{{ advert.author ~ \" - \" ~ advert.title ~ \" - \" ~advert.date|localizeddate('medium', 'none') }}\">{{ advert.title }}
        </a>
        par {{ advert.author }}
        le {{ advert.date|localizeddate('medium', 'none') }}
      </li>
    {% else %}
      <li> Pas (encore !) d'annonces </li>
    {% endfor %}
  </ol>

  <ol>
    {# Utilisation de la méthode findByAuthorAndDate() du repository #}
    <hr>
    <h4>Liste des annonces de Potencier Fabien avant l'année 2017</h4>
    {% for advert in listAdvertsFabien %}
        <li>
        <a href=\"{{ path('oc_platform_view', {'id' : advert.id }) }}\" title=\"{{ advert.author ~ \" - \" ~ advert.title ~ \" - \" ~advert.date|date('d/m/Y') }}\">{{ advert.title }}
        </a>
        par {{ advert.author }}
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li> Pas (encore !) d'annonces </li>
    {% endfor %}
  </ol>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
