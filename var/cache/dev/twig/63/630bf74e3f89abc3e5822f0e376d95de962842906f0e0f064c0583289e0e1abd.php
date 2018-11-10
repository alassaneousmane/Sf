<?php

/* OCPlatformBundle:Advert:list.html.twig */
class __TwigTemplate_bab5f984ac9cad62e1aacc6af038a3494c3fe95aa771cf738f6fb0e36eaf22cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:list.html.twig", 3);
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
        $__internal_a26ef73664f61572c35d8ceb98b1ea821c2fcd0c0ad313bf2af737708dd1b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26ef73664f61572c35d8ceb98b1ea821c2fcd0c0ad313bf2af737708dd1b048->enter($__internal_a26ef73664f61572c35d8ceb98b1ea821c2fcd0c0ad313bf2af737708dd1b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:list.html.twig"));

        $__internal_8d8933a7e44cdcb7b0978bff645cab6dc4c8f08294aa5abae89e8a50e89b2a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8933a7e44cdcb7b0978bff645cab6dc4c8f08294aa5abae89e8a50e89b2a8a->enter($__internal_8d8933a7e44cdcb7b0978bff645cab6dc4c8f08294aa5abae89e8a50e89b2a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26ef73664f61572c35d8ceb98b1ea821c2fcd0c0ad313bf2af737708dd1b048->leave($__internal_a26ef73664f61572c35d8ceb98b1ea821c2fcd0c0ad313bf2af737708dd1b048_prof);

        
        $__internal_8d8933a7e44cdcb7b0978bff645cab6dc4c8f08294aa5abae89e8a50e89b2a8a->leave($__internal_8d8933a7e44cdcb7b0978bff645cab6dc4c8f08294aa5abae89e8a50e89b2a8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53b46f9abab2f7639d46e31a5466ea81df7b3d32afbf343443f0719b1fc19076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b46f9abab2f7639d46e31a5466ea81df7b3d32afbf343443f0719b1fc19076->enter($__internal_53b46f9abab2f7639d46e31a5466ea81df7b3d32afbf343443f0719b1fc19076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dac8b0052e7c8fc60f8b62be06d4d9498d60a406dd2acb8574d0448178b1066f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac8b0052e7c8fc60f8b62be06d4d9498d60a406dd2acb8574d0448178b1066f->enter($__internal_dac8b0052e7c8fc60f8b62be06d4d9498d60a406dd2acb8574d0448178b1066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Liste des annonces et les candidatures - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dac8b0052e7c8fc60f8b62be06d4d9498d60a406dd2acb8574d0448178b1066f->leave($__internal_dac8b0052e7c8fc60f8b62be06d4d9498d60a406dd2acb8574d0448178b1066f_prof);

        
        $__internal_53b46f9abab2f7639d46e31a5466ea81df7b3d32afbf343443f0719b1fc19076->leave($__internal_53b46f9abab2f7639d46e31a5466ea81df7b3d32afbf343443f0719b1fc19076_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2afa4e26831ffc1b36f9bec8cbf2943d410568884239a9ee17c95861687b2d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afa4e26831ffc1b36f9bec8cbf2943d410568884239a9ee17c95861687b2d4a->enter($__internal_2afa4e26831ffc1b36f9bec8cbf2943d410568884239a9ee17c95861687b2d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4a632f2b42b18552a682a85f4a4014d809bd6792e198cd81a49b46e84be03402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a632f2b42b18552a682a85f4a4014d809bd6792e198cd81a49b46e84be03402->enter($__internal_4a632f2b42b18552a682a85f4a4014d809bd6792e198cd81a49b46e84be03402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste</h2>
  <ol>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a> - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
        <blockquote>
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()), "html", null, true);
            echo " : ";
            echo $this->getAttribute($context["item"], "content", array());
            echo "
        </blockquote>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "         <p>Pas d'annonces et de candidatures à afficher pour le moment.</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      
  </ol>


";
        
        $__internal_4a632f2b42b18552a682a85f4a4014d809bd6792e198cd81a49b46e84be03402->leave($__internal_4a632f2b42b18552a682a85f4a4014d809bd6792e198cd81a49b46e84be03402_prof);

        
        $__internal_2afa4e26831ffc1b36f9bec8cbf2943d410568884239a9ee17c95861687b2d4a->leave($__internal_2afa4e26831ffc1b36f9bec8cbf2943d410568884239a9ee17c95861687b2d4a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  105 => 21,  94 => 17,  87 => 15,  82 => 14,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/list.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Liste des annonces et les candidatures - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste</h2>
  <ol>
    {% for item in listAdverts %}
      <li><a href=\"{{ path('oc_platform_view', {'id' : item.id }) }}\">
        {{ item.title }}</a> - {{ item.date|date('d/m/Y')}}
        <blockquote>
          {{ item.author }} : {{ item.content|raw }}
        </blockquote>
      </li>
    {% else %}
         <p>Pas d'annonces et de candidatures à afficher pour le moment.</p>
        
    {% endfor %}
      
  </ol>


{% endblock %}", "OCPlatformBundle:Advert:list.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/list.html.twig");
    }
}
