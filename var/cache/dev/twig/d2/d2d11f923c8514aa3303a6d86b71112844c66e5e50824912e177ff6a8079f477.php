<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_606f3634a17225c0f8405251ca56294b06ba33f14d35b94b9ee2745328a61718 extends Twig_Template
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
        $__internal_0b9b167f034c52ec657e8f94eaedb48738e2e98381fb14e86411acfb79863d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9b167f034c52ec657e8f94eaedb48738e2e98381fb14e86411acfb79863d54->enter($__internal_0b9b167f034c52ec657e8f94eaedb48738e2e98381fb14e86411acfb79863d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_2aa241d82cee01738be47284ef512f74948a2a3972b8bd05941ca38418a36ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa241d82cee01738be47284ef512f74948a2a3972b8bd05941ca38418a36ef8->enter($__internal_2aa241d82cee01738be47284ef512f74948a2a3972b8bd05941ca38418a36ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">

\t";
        // line 9
        echo "\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fic_2017_lille_grand_palais");
        echo "\" title=\"Voir FIC 2017 en détail\"> FIC 2017</a></li>
  
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 12
            echo "    <li>
   
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["advert"], "title", array()) . " - ") . $this->getAttribute($context["advert"], "id", array())), "html", null, true);
            echo "\">
          <img src=\"";
            // line 15
            if ( !(null === $this->getAttribute($context["advert"], "image", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()) . "-") . $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "id", array())), "html", null, true);
                echo "\" height=\"25px\" width=\"25px\" class=\"\" ";
            }
            echo "  />
          <span style=\"font-size: 13px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</span>
        </a>
        
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>";
        
        $__internal_0b9b167f034c52ec657e8f94eaedb48738e2e98381fb14e86411acfb79863d54->leave($__internal_0b9b167f034c52ec657e8f94eaedb48738e2e98381fb14e86411acfb79863d54_prof);

        
        $__internal_2aa241d82cee01738be47284ef512f74948a2a3972b8bd05941ca38418a36ef8->leave($__internal_2aa241d82cee01738be47284ef512f74948a2a3972b8bd05941ca38418a36ef8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  65 => 16,  53 => 15,  47 => 14,  43 => 12,  39 => 11,  33 => 9,  28 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">

\t{# Affcihage du lien du FIC 2017 #}
\t<li><a href=\"{{ path('fic_2017_lille_grand_palais') }}\" title=\"Voir FIC 2017 en détail\"> FIC 2017</a></li>
  
  {% for advert in listAdverts %}
    <li>
   
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" title=\" {{ advert.title ~ \" - \" ~ advert.id }}\">
          <img src=\"{% if advert.image is not null %} {{ asset(advert.image.webPath) }}\" alt=\"{{  advert.image.alt }}\" title=\"{{ advert.image.alt ~ \"-\" ~ advert.image.id }}\" height=\"25px\" width=\"25px\" class=\"\" {% endif %}  />
          <span style=\"font-size: 13px;\">{{ advert.title }}</span>
        </a>
        
    </li>
  {% endfor %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
