<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_ee16abf708498c986500ce18127801c90a474213f98aff4043bca1298c27b258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'searchbox' => array($this, 'block_searchbox'),
            'advert_side' => array($this, 'block_advert_side'),
            'advert_vrac' => array($this, 'block_advert_vrac'),
            'adverts_list' => array($this, 'block_adverts_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e10d12d3366822726893aeb4a5e7322201b0d66b217b3851d7a12ea6899e1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e10d12d3366822726893aeb4a5e7322201b0d66b217b3851d7a12ea6899e1f4->enter($__internal_0e10d12d3366822726893aeb4a5e7322201b0d66b217b3851d7a12ea6899e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $__internal_5f232baea2e3a5a257bf9d9ff4676f1d92e039a9d4c64ed2bfa7f1cdd4803a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f232baea2e3a5a257bf9d9ff4676f1d92e039a9d4c64ed2bfa7f1cdd4803a82->enter($__internal_5f232baea2e3a5a257bf9d9ff4676f1d92e039a9d4c64ed2bfa7f1cdd4803a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e10d12d3366822726893aeb4a5e7322201b0d66b217b3851d7a12ea6899e1f4->leave($__internal_0e10d12d3366822726893aeb4a5e7322201b0d66b217b3851d7a12ea6899e1f4_prof);

        
        $__internal_5f232baea2e3a5a257bf9d9ff4676f1d92e039a9d4c64ed2bfa7f1cdd4803a82->leave($__internal_5f232baea2e3a5a257bf9d9ff4676f1d92e039a9d4c64ed2bfa7f1cdd4803a82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd8f3a66b24c6ae8339717ba77450234bfd42ef617c10d844a1ce1a7068a9ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8f3a66b24c6ae8339717ba77450234bfd42ef617c10d844a1ce1a7068a9ec1->enter($__internal_cd8f3a66b24c6ae8339717ba77450234bfd42ef617c10d844a1ce1a7068a9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77251f684c9e990deec607796a73c8b684fc6bc0f859d21e0f79b06295249c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77251f684c9e990deec607796a73c8b684fc6bc0f859d21e0f79b06295249c29->enter($__internal_77251f684c9e990deec607796a73c8b684fc6bc0f859d21e0f79b06295249c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77251f684c9e990deec607796a73c8b684fc6bc0f859d21e0f79b06295249c29->leave($__internal_77251f684c9e990deec607796a73c8b684fc6bc0f859d21e0f79b06295249c29_prof);

        
        $__internal_cd8f3a66b24c6ae8339717ba77450234bfd42ef617c10d844a1ce1a7068a9ec1->leave($__internal_cd8f3a66b24c6ae8339717ba77450234bfd42ef617c10d844a1ce1a7068a9ec1_prof);

    }

    // line 9
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_d1695b396f1dd41dc1cc3e26f5650b965db1f5857184db83b399546062c9deaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1695b396f1dd41dc1cc3e26f5650b965db1f5857184db83b399546062c9deaf->enter($__internal_d1695b396f1dd41dc1cc3e26f5650b965db1f5857184db83b399546062c9deaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_1b10b42961b813aa05fe96dcc8c3090a7672a6a072e8cf7a677588b30f0e19f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b10b42961b813aa05fe96dcc8c3090a7672a6a072e8cf7a677588b30f0e19f3->enter($__internal_1b10b42961b813aa05fe96dcc8c3090a7672a6a072e8cf7a677588b30f0e19f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        // line 10
        echo "   ";
        $this->displayParentBlock("searchbox", $context, $blocks);
        echo "
";
        
        $__internal_1b10b42961b813aa05fe96dcc8c3090a7672a6a072e8cf7a677588b30f0e19f3->leave($__internal_1b10b42961b813aa05fe96dcc8c3090a7672a6a072e8cf7a677588b30f0e19f3_prof);

        
        $__internal_d1695b396f1dd41dc1cc3e26f5650b965db1f5857184db83b399546062c9deaf->leave($__internal_d1695b396f1dd41dc1cc3e26f5650b965db1f5857184db83b399546062c9deaf_prof);

    }

    // line 13
    public function block_advert_side($context, array $blocks = array())
    {
        $__internal_7a53de12cba27ad0de2e3e06f10249a1fa292ab878ac2d6838a4d738294e4c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a53de12cba27ad0de2e3e06f10249a1fa292ab878ac2d6838a4d738294e4c40->enter($__internal_7a53de12cba27ad0de2e3e06f10249a1fa292ab878ac2d6838a4d738294e4c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_side"));

        $__internal_ae8a99cb1f9826fc7cf7d530d990a4d41fabf4c4cbe9dad5ff147cb0242d2d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8a99cb1f9826fc7cf7d530d990a4d41fabf4c4cbe9dad5ff147cb0242d2d95->enter($__internal_ae8a99cb1f9826fc7cf7d530d990a4d41fabf4c4cbe9dad5ff147cb0242d2d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_side"));

        // line 14
        echo "\t
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 16
            echo "
       \t  <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</a></li>           
       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "       

";
        
        $__internal_ae8a99cb1f9826fc7cf7d530d990a4d41fabf4c4cbe9dad5ff147cb0242d2d95->leave($__internal_ae8a99cb1f9826fc7cf7d530d990a4d41fabf4c4cbe9dad5ff147cb0242d2d95_prof);

        
        $__internal_7a53de12cba27ad0de2e3e06f10249a1fa292ab878ac2d6838a4d738294e4c40->leave($__internal_7a53de12cba27ad0de2e3e06f10249a1fa292ab878ac2d6838a4d738294e4c40_prof);

    }

    // line 25
    public function block_advert_vrac($context, array $blocks = array())
    {
        $__internal_2ac16a1a38c1a495fd1e1feef6a1df21ae819992d1710b565df0a8fb410e96ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac16a1a38c1a495fd1e1feef6a1df21ae819992d1710b565df0a8fb410e96ae->enter($__internal_2ac16a1a38c1a495fd1e1feef6a1df21ae819992d1710b565df0a8fb410e96ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        $__internal_1f7f7e608dcb7eb13e65591e2bdb8da588f4b6c6b3647f7584159b1d1920074d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7f7e608dcb7eb13e65591e2bdb8da588f4b6c6b3647f7584159b1d1920074d->enter($__internal_1f7f7e608dcb7eb13e65591e2bdb8da588f4b6c6b3647f7584159b1d1920074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        // line 26
        echo "
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 28
            echo "

    <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo " </a> </h4>
              <span class=\"text-muted\"> postulé par ";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["advert"], "author", array())), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none"), "html", null, true);
            echo " </span>
    </div>        \t  \t\t  
        
       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        
        $__internal_1f7f7e608dcb7eb13e65591e2bdb8da588f4b6c6b3647f7584159b1d1920074d->leave($__internal_1f7f7e608dcb7eb13e65591e2bdb8da588f4b6c6b3647f7584159b1d1920074d_prof);

        
        $__internal_2ac16a1a38c1a495fd1e1feef6a1df21ae819992d1710b565df0a8fb410e96ae->leave($__internal_2ac16a1a38c1a495fd1e1feef6a1df21ae819992d1710b565df0a8fb410e96ae_prof);

    }

    // line 42
    public function block_adverts_list($context, array $blocks = array())
    {
        $__internal_f103d363c5a0e8beb0a0308d6628ed5c7c013b3428f1e2785a8646e1af6c631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f103d363c5a0e8beb0a0308d6628ed5c7c013b3428f1e2785a8646e1af6c631f->enter($__internal_f103d363c5a0e8beb0a0308d6628ed5c7c013b3428f1e2785a8646e1af6c631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adverts_list"));

        $__internal_b77cf866b95c3c5bf74b420ec7f6fe5534c65d564cf8d45a70f50f56d1600dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77cf866b95c3c5bf74b420ec7f6fe5534c65d564cf8d45a70f50f56d1600dec->enter($__internal_b77cf866b95c3c5bf74b420ec7f6fe5534c65d564cf8d45a70f50f56d1600dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adverts_list"));

        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 48
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\"> <h3> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo " </h3> </a> <h5> posté par <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "medium", "none"), "html", null, true);
            echo "</strong></h5>\t\t  \t\t  
        
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
";
        
        $__internal_b77cf866b95c3c5bf74b420ec7f6fe5534c65d564cf8d45a70f50f56d1600dec->leave($__internal_b77cf866b95c3c5bf74b420ec7f6fe5534c65d564cf8d45a70f50f56d1600dec_prof);

        
        $__internal_f103d363c5a0e8beb0a0308d6628ed5c7c013b3428f1e2785a8646e1af6c631f->leave($__internal_f103d363c5a0e8beb0a0308d6628ed5c7c013b3428f1e2785a8646e1af6c631f_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 52,  196 => 48,  191 => 47,  182 => 42,  171 => 38,  158 => 33,  152 => 32,  146 => 28,  142 => 27,  139 => 26,  130 => 25,  118 => 20,  107 => 17,  104 => 16,  100 => 15,  97 => 14,  88 => 13,  75 => 10,  66 => 9,  53 => 6,  44 => 5,  11 => 3,);
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

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block searchbox %}
   {{ parent() }}
{% endblock %}

{% block advert_side %}
\t
\t{% for advert in listAdverts %}

       \t  <li><a href=\"{{ path('oc_platform_view', {id: advert.id} ) }}\">{{ advert. title }}</a></li>           
       
    {% endfor %}
       

{% endblock %}


{% block advert_vrac %}

  {% for advert in listAdverts %}


    <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>  <a href=\"{{ path('oc_platform_view', {id: advert.id} ) }}\"> {{ advert. title }} </a> </h4>
              <span class=\"text-muted\"> postulé par {{ advert.author|upper }}  - {{ advert.date|localizeddate('medium', 'none') }} </span>
    </div>        \t  \t\t  
        
       
    {% endfor %}

{% endblock %}


{% block adverts_list %}
{#
\t<a href=\"{{ asset(advert.image.webPath) }}\">
\t\t     \t<img src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{  advert.image.alt }}\" title=\"{{ advert.image.alt ~ \"-\" ~ advert.image.id }}\" height=\"85px\" width=\"85px\"  style=\"float: left; margin: 5px\" />
\t\t \t </a> #}
    {% for advert in listAdverts %}
             <a href=\"{{ path('oc_platform_view', {id: advert.id} ) }}\"> <h3> {{ advert. title }} </h3> </a> <h5> posté par <strong>{{ advert.author }} - {{ advert.date|localizeddate('medium', 'none') }}</strong></h5>\t\t  \t\t  
        
        <hr>
    {% endfor %}

{% endblock %}


", "OCCoreBundle:Default:index.html.twig", "/opt/lampp/htdocs/Sf/src/OC/CoreBundle/Resources/views/Default/index.html.twig");
    }
}
