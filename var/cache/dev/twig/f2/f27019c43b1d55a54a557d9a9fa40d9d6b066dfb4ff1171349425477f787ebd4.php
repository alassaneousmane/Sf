<?php

/* OCPlatformBundle:Advert:search.html.twig */
class __TwigTemplate_f72a158d9c0976a12a0bfc479d234960319f70ffc4d962abe8ad70ff2df13967 extends Twig_Template
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
        $__internal_7a1fc61b67ff889c16eeabf0cd3136344b43350612559f3228933d11385c422e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1fc61b67ff889c16eeabf0cd3136344b43350612559f3228933d11385c422e->enter($__internal_7a1fc61b67ff889c16eeabf0cd3136344b43350612559f3228933d11385c422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:search.html.twig"));

        $__internal_fa3d6e7a1273274ae517ac5b1dc014c6e7ac39b8bc94f530f6a62c32bac3327c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3d6e7a1273274ae517ac5b1dc014c6e7ac39b8bc94f530f6a62c32bac3327c->enter($__internal_fa3d6e7a1273274ae517ac5b1dc014c6e7ac39b8bc94f530f6a62c32bac3327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:search.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["data"] ?? $this->getContext($context, "data"))) > 0)) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 5
                echo "     <div class=\"display-box-advert\">
             <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                echo "\" style=\"text-decoration: none; font-family: Arial\">
                <img src=\"";
                // line 7
                if ( !(null === $this->getAttribute($context["advert"], "image", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()) . "-") . $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "id", array())), "html", null, true);
                    echo "\" height=\"25px\" width=\"25px\" class=\"img-circle\" /> 
                ";
                }
                // line 8
                echo " &nbsp;  <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
                echo "</strong> <br>

                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "email", array()), "html", null, true);
                echo "</span><br>
                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">";
                // line 11
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none"), "html", null, true);
                echo "</span><br>

                ";
                // line 13
                if (($this->getAttribute($context["advert"], "nbApplications", array()) != 0)) {
                    echo "                               
                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "nbApplications", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("personnes ont postulé"), "html", null, true);
                    echo "</span><br>
                ";
                } else {
                    // line 16
                    echo "                        <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aucune candidature"), "html", null, true);
                    echo "</span><br>                         
                ";
                }
                // line 18
                echo "                ";
                // line 19
                echo "                ";
                if ( !$this->getAttribute($this->getAttribute($context["advert"], "categories", array()), "empty", array())) {
                    // line 20
                    echo "                 <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\"> 
                 ";
                    // line 21
                    if ((twig_length_filter($this->env, $this->getAttribute($context["advert"], "categories", array())) == 1)) {
                        // line 22
                        echo "                     ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["advert"], "categories", array()));
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
                            // line 23
                            echo "                       ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                            echo " ";
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ", ";
                            }
                            // line 24
                            echo "                       ";
                            if ($this->getAttribute($context["loop"], "last", array())) {
                                echo "<strong>.</strong>";
                            }
                            // line 25
                            echo "                     ";
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
                        echo "  </span><br>
                                   
                 ";
                    }
                    // line 28
                    echo "                
                ";
                }
                // line 29
                echo "                
              </a>
      </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 34
            echo "  <div class=\"display-box-advert\">
            <p style=\"padding: 2px; padding-left: 5px\"> Aucune correspondance trouvée.</p>
      </div>
";
        }
        
        $__internal_7a1fc61b67ff889c16eeabf0cd3136344b43350612559f3228933d11385c422e->leave($__internal_7a1fc61b67ff889c16eeabf0cd3136344b43350612559f3228933d11385c422e_prof);

        
        $__internal_fa3d6e7a1273274ae517ac5b1dc014c6e7ac39b8bc94f530f6a62c32bac3327c->leave($__internal_fa3d6e7a1273274ae517ac5b1dc014c6e7ac39b8bc94f530f6a62c32bac3327c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  146 => 29,  142 => 28,  124 => 25,  119 => 24,  112 => 23,  94 => 22,  92 => 21,  89 => 20,  86 => 19,  84 => 18,  78 => 16,  71 => 14,  67 => 13,  62 => 11,  58 => 10,  52 => 8,  41 => 7,  37 => 6,  34 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/search.html.twig #}

{% if data|length > 0 %}
{% for advert in data %}
     <div class=\"display-box-advert\">
             <a href=\"{{ path('oc_platform_view', {id: advert.id })}}\" style=\"text-decoration: none; font-family: Arial\">
                <img src=\"{% if advert.image is not null %} {{ asset(advert.image.webPath) }}\" alt=\"{{  advert.image.alt }}\" title=\"{{ advert.image.alt ~ \"-\" ~ advert.image.id }}\" height=\"25px\" width=\"25px\" class=\"img-circle\" /> 
                {% endif %} &nbsp;  <strong>{{ advert.author }}</strong> <br>

                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">{{ advert.email }}</span><br>
                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">{{ advert.date|localizeddate('medium', 'none') }}</span><br>

                {% if advert.nbApplications != 0 %}                               
                <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">{{ advert.nbApplications }} {{ \"personnes ont postulé\"|trans }}</span><br>
                {% else %}
                        <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\">{{ \"Aucune candidature\"|trans }}</span><br>                         
                {% endif %}
                {# Affichage des catégories de l'annonce ici #}
                {% if not advert.categories.empty %}
                 <span style=\" margin-left: 40px; margin-top: -40px; font-size: 11px\"> 
                 {% if advert.categories|length == 1 %}
                     {%  for category in advert.categories %}
                       {{ category.name }} {% if not loop.last %}, {% endif %}
                       {% if loop.last %}<strong>.</strong>{% endif %}
                     {% endfor %}  </span><br>
                                   
                 {% endif %}
                
                {% endif %}                
              </a>
      </div>
{% endfor %}
{% else %}
  <div class=\"display-box-advert\">
            <p style=\"padding: 2px; padding-left: 5px\"> Aucune correspondance trouvée.</p>
      </div>
{% endif %}
", "OCPlatformBundle:Advert:search.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/search.html.twig");
    }
}
