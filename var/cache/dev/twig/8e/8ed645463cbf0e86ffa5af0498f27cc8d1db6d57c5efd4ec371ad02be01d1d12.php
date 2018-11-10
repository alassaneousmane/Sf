<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_eea16e1368862c390784ef2fe20397aba49dfed26445228eac02c12e0ada76c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'searchbox' => array($this, 'block_searchbox'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'advert_vrac' => array($this, 'block_advert_vrac'),
            'head_oc_platform' => array($this, 'block_head_oc_platform'),
            'annonces' => array($this, 'block_annonces'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d0d7b9cf7eae2b52db338c2aa454e9494f36d4c2b6a3a4bd2b87446f1a471e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0d7b9cf7eae2b52db338c2aa454e9494f36d4c2b6a3a4bd2b87446f1a471e4->enter($__internal_2d0d7b9cf7eae2b52db338c2aa454e9494f36d4c2b6a3a4bd2b87446f1a471e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_39b9593edaedd24f308c7e3014ce99c90a654468f57766466c2df95209850ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b9593edaedd24f308c7e3014ce99c90a654468f57766466c2df95209850ce3->enter($__internal_39b9593edaedd24f308c7e3014ce99c90a654468f57766466c2df95209850ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0d7b9cf7eae2b52db338c2aa454e9494f36d4c2b6a3a4bd2b87446f1a471e4->leave($__internal_2d0d7b9cf7eae2b52db338c2aa454e9494f36d4c2b6a3a4bd2b87446f1a471e4_prof);

        
        $__internal_39b9593edaedd24f308c7e3014ce99c90a654468f57766466c2df95209850ce3->leave($__internal_39b9593edaedd24f308c7e3014ce99c90a654468f57766466c2df95209850ce3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18a377fc3f88c4bd5ad72bea73963dde3dd7529ff840c080bde0881008a77232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a377fc3f88c4bd5ad72bea73963dde3dd7529ff840c080bde0881008a77232->enter($__internal_18a377fc3f88c4bd5ad72bea73963dde3dd7529ff840c080bde0881008a77232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8869a66896dc813f1e37ccf5542631b6216e27dbb05e0aed9065649815ef626d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8869a66896dc813f1e37ccf5542631b6216e27dbb05e0aed9065649815ef626d->enter($__internal_8869a66896dc813f1e37ccf5542631b6216e27dbb05e0aed9065649815ef626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8869a66896dc813f1e37ccf5542631b6216e27dbb05e0aed9065649815ef626d->leave($__internal_8869a66896dc813f1e37ccf5542631b6216e27dbb05e0aed9065649815ef626d_prof);

        
        $__internal_18a377fc3f88c4bd5ad72bea73963dde3dd7529ff840c080bde0881008a77232->leave($__internal_18a377fc3f88c4bd5ad72bea73963dde3dd7529ff840c080bde0881008a77232_prof);

    }

    // line 8
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_6404b74d98e1fc3cc12abbb71ebbd03db1a634add2d2d4854975b1c12f279613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6404b74d98e1fc3cc12abbb71ebbd03db1a634add2d2d4854975b1c12f279613->enter($__internal_6404b74d98e1fc3cc12abbb71ebbd03db1a634add2d2d4854975b1c12f279613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_6b883dc3ff257f5bda82eb60285aef0f35bf5c9f011e046a6d1a390c052d4699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b883dc3ff257f5bda82eb60285aef0f35bf5c9f011e046a6d1a390c052d4699->enter($__internal_6b883dc3ff257f5bda82eb60285aef0f35bf5c9f011e046a6d1a390c052d4699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        // line 9
        echo "
    ";
        // line 10
        $this->displayParentBlock("searchbox", $context, $blocks);
        echo "

";
        
        $__internal_6b883dc3ff257f5bda82eb60285aef0f35bf5c9f011e046a6d1a390c052d4699->leave($__internal_6b883dc3ff257f5bda82eb60285aef0f35bf5c9f011e046a6d1a390c052d4699_prof);

        
        $__internal_6404b74d98e1fc3cc12abbb71ebbd03db1a634add2d2d4854975b1c12f279613->leave($__internal_6404b74d98e1fc3cc12abbb71ebbd03db1a634add2d2d4854975b1c12f279613_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_48c1deb22df6e9d2f4a934fbe6537356cd9f611776d6790bc28e988366b73437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c1deb22df6e9d2f4a934fbe6537356cd9f611776d6790bc28e988366b73437->enter($__internal_48c1deb22df6e9d2f4a934fbe6537356cd9f611776d6790bc28e988366b73437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf0bc6664c4e1041b3fd1d7a87de35a2aef4258a5969313587b3deffe164cf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0bc6664c4e1041b3fd1d7a87de35a2aef4258a5969313587b3deffe164cf43->enter($__internal_bf0bc6664c4e1041b3fd1d7a87de35a2aef4258a5969313587b3deffe164cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "  ";
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('advert_vrac', $context, $blocks);
        // line 21
        echo "
  
  ";
        // line 23
        $this->displayBlock('head_oc_platform', $context, $blocks);
        // line 26
        echo "  ";
        $this->displayBlock('annonces', $context, $blocks);
        // line 34
        echo "  <hr>

  ";
        // line 37
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 40
        echo "
";
        
        $__internal_bf0bc6664c4e1041b3fd1d7a87de35a2aef4258a5969313587b3deffe164cf43->leave($__internal_bf0bc6664c4e1041b3fd1d7a87de35a2aef4258a5969313587b3deffe164cf43_prof);

        
        $__internal_48c1deb22df6e9d2f4a934fbe6537356cd9f611776d6790bc28e988366b73437->leave($__internal_48c1deb22df6e9d2f4a934fbe6537356cd9f611776d6790bc28e988366b73437_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_2063669ec79640af365f67f981ae5772564595172307dee1b49654f817bce995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2063669ec79640af365f67f981ae5772564595172307dee1b49654f817bce995->enter($__internal_2063669ec79640af365f67f981ae5772564595172307dee1b49654f817bce995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_928b34edd22ddd978d7929c8ddab9b696429dea2171df68882bbcd82dbd49eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928b34edd22ddd978d7929c8ddab9b696429dea2171df68882bbcd82dbd49eb2->enter($__internal_928b34edd22ddd978d7929c8ddab9b696429dea2171df68882bbcd82dbd49eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_928b34edd22ddd978d7929c8ddab9b696429dea2171df68882bbcd82dbd49eb2->leave($__internal_928b34edd22ddd978d7929c8ddab9b696429dea2171df68882bbcd82dbd49eb2_prof);

        
        $__internal_2063669ec79640af365f67f981ae5772564595172307dee1b49654f817bce995->leave($__internal_2063669ec79640af365f67f981ae5772564595172307dee1b49654f817bce995_prof);

    }

    // line 18
    public function block_advert_vrac($context, array $blocks = array())
    {
        $__internal_bde10b95620b381b36e2c9ffb335fdc93af34abe172a2bc2ab1317aa2430312e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde10b95620b381b36e2c9ffb335fdc93af34abe172a2bc2ab1317aa2430312e->enter($__internal_bde10b95620b381b36e2c9ffb335fdc93af34abe172a2bc2ab1317aa2430312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        $__internal_da1723bc96b6189d02e7ce6ed70b5472708ca9ec958b35e89def7069f3409449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1723bc96b6189d02e7ce6ed70b5472708ca9ec958b35e89def7069f3409449->enter($__internal_da1723bc96b6189d02e7ce6ed70b5472708ca9ec958b35e89def7069f3409449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        // line 19
        echo "      ";
        $this->displayParentBlock("advert_vrac", $context, $blocks);
        echo "
  ";
        
        $__internal_da1723bc96b6189d02e7ce6ed70b5472708ca9ec958b35e89def7069f3409449->leave($__internal_da1723bc96b6189d02e7ce6ed70b5472708ca9ec958b35e89def7069f3409449_prof);

        
        $__internal_bde10b95620b381b36e2c9ffb335fdc93af34abe172a2bc2ab1317aa2430312e->leave($__internal_bde10b95620b381b36e2c9ffb335fdc93af34abe172a2bc2ab1317aa2430312e_prof);

    }

    // line 23
    public function block_head_oc_platform($context, array $blocks = array())
    {
        $__internal_13bd8d68c5cf957503f1ec45b167e2106fb59e7c57cbbba17eb52c551f7a52ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bd8d68c5cf957503f1ec45b167e2106fb59e7c57cbbba17eb52c551f7a52ec->enter($__internal_13bd8d68c5cf957503f1ec45b167e2106fb59e7c57cbbba17eb52c551f7a52ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_oc_platform"));

        $__internal_c44501cc68edea38f627430089a50c5f95ef7b9fb2c3880badb68ec98c09b7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44501cc68edea38f627430089a50c5f95ef7b9fb2c3880badb68ec98c09b7c8->enter($__internal_c44501cc68edea38f627430089a50c5f95ef7b9fb2c3880badb68ec98c09b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_oc_platform"));

        // line 24
        echo "      <h1>Annonces</h1>
  ";
        
        $__internal_c44501cc68edea38f627430089a50c5f95ef7b9fb2c3880badb68ec98c09b7c8->leave($__internal_c44501cc68edea38f627430089a50c5f95ef7b9fb2c3880badb68ec98c09b7c8_prof);

        
        $__internal_13bd8d68c5cf957503f1ec45b167e2106fb59e7c57cbbba17eb52c551f7a52ec->leave($__internal_13bd8d68c5cf957503f1ec45b167e2106fb59e7c57cbbba17eb52c551f7a52ec_prof);

    }

    // line 26
    public function block_annonces($context, array $blocks = array())
    {
        $__internal_83fa7076d125e5d91f47f408b72e81fede1b861b8f09658eb3dd0476b3a9f46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fa7076d125e5d91f47f408b72e81fede1b861b8f09658eb3dd0476b3a9f46c->enter($__internal_83fa7076d125e5d91f47f408b72e81fede1b861b8f09658eb3dd0476b3a9f46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        $__internal_9ddc9652a9f25bb431f6f6431320e9f6b9f0350da6a7bd0c8f1e27a3bf1afb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddc9652a9f25bb431f6f6431320e9f6b9f0350da6a7bd0c8f1e27a3bf1afb8f->enter($__internal_9ddc9652a9f25bb431f6f6431320e9f6b9f0350da6a7bd0c8f1e27a3bf1afb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        echo " ";
        $this->displayParentBlock("annonces", $context, $blocks);
        echo "
  \t";
        // line 32
        echo "  
  ";
        
        $__internal_9ddc9652a9f25bb431f6f6431320e9f6b9f0350da6a7bd0c8f1e27a3bf1afb8f->leave($__internal_9ddc9652a9f25bb431f6f6431320e9f6b9f0350da6a7bd0c8f1e27a3bf1afb8f_prof);

        
        $__internal_83fa7076d125e5d91f47f408b72e81fede1b861b8f09658eb3dd0476b3a9f46c->leave($__internal_83fa7076d125e5d91f47f408b72e81fede1b861b8f09658eb3dd0476b3a9f46c_prof);

    }

    // line 37
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a04758d2ccad9330799d13ed320a051ac5a7edd96a28cb4f793e9410b3b53b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04758d2ccad9330799d13ed320a051ac5a7edd96a28cb4f793e9410b3b53b55->enter($__internal_a04758d2ccad9330799d13ed320a051ac5a7edd96a28cb4f793e9410b3b53b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f8e57be9dbe46039b6423ca0d038bab20ce55cf02b5745050235c33287783b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e57be9dbe46039b6423ca0d038bab20ce55cf02b5745050235c33287783b41->enter($__internal_f8e57be9dbe46039b6423ca0d038bab20ce55cf02b5745050235c33287783b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 38
        echo "  
  ";
        
        $__internal_f8e57be9dbe46039b6423ca0d038bab20ce55cf02b5745050235c33287783b41->leave($__internal_f8e57be9dbe46039b6423ca0d038bab20ce55cf02b5745050235c33287783b41_prof);

        
        $__internal_a04758d2ccad9330799d13ed320a051ac5a7edd96a28cb4f793e9410b3b53b55->leave($__internal_a04758d2ccad9330799d13ed320a051ac5a7edd96a28cb4f793e9410b3b53b55_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 38,  222 => 37,  211 => 32,  198 => 26,  187 => 24,  178 => 23,  165 => 19,  156 => 18,  139 => 14,  128 => 40,  125 => 37,  121 => 34,  118 => 26,  116 => 23,  112 => 21,  110 => 18,  107 => 17,  105 => 16,  103 => 14,  94 => 13,  81 => 10,  78 => 9,  69 => 8,  56 => 6,  47 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}
{% block searchbox %}

    {{ parent() }}

{% endblock %}
{% block body %}
{% block content%}
{% endblock %}
  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}

  {% block advert_vrac %}
      {{ parent() }}
  {% endblock %}

  
  {% block head_oc_platform %}
      <h1>Annonces</h1>
  {% endblock %}
  {% block annonces %} {{ parent() }}
  \t{# \t<h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>#}
  
  {% endblock %}
  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  
  {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
