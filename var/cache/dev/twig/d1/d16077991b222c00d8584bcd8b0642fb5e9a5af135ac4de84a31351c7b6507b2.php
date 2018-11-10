<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_d05ab767078dcce6f019ad87bd4bab25ce51ce482a1c9298c958a085f450de25 extends Twig_Template
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
        $__internal_9b0924167e4bf88b6a6ea3d62f4602cde9d459c0176020a424a87a1b249a7bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0924167e4bf88b6a6ea3d62f4602cde9d459c0176020a424a87a1b249a7bc0->enter($__internal_9b0924167e4bf88b6a6ea3d62f4602cde9d459c0176020a424a87a1b249a7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_79c0ff67173d10a2447ad44e93a2bf92b648db29e9238092d0811ce308e89f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c0ff67173d10a2447ad44e93a2bf92b648db29e9238092d0811ce308e89f3f->enter($__internal_79c0ff67173d10a2447ad44e93a2bf92b648db29e9238092d0811ce308e89f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form-submit")));
        echo "

";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
";
        // line 18
        if ($this->getAttribute(($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 19
            echo "\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2"), "label" => "Date de publication"));
            echo "
\t<div class=\"col-sm-10\">
\t\t";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            echo "
\t</div>
";
        }
        // line 24
        echo "</div>

";
        // line 29
        echo "
";
        // line 31
        echo "<div class=\"form-group\">
\t";
        // line 33
        echo "\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "

\t";
        // line 36
        echo "\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t<div class=\"col-sm-10\">
\t\t";
        // line 39
        echo "\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

";
        // line 44
        echo "<div class=\"form-group\">
\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t<div class=\"col-sm-10\">
\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

";
        // line 53
        echo "<div class=\"form-group\">
\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Auteur de l'annonce ?"));
        echo "
\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
\t<div class=\"col-sm-10\">
\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

";
        // line 62
        echo "<div class=\"form-group\">
\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Email"));
        echo "
\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t<div class=\"col-sm-10\">
\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>


";
        // line 72
        echo "<div class=\"form-group\">
";
        // line 73
        if ($this->getAttribute(($context["form"] ?? null), "published", array(), "any", true, true)) {
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Publier cette annonce ?"));
            echo "
\t";
            // line 75
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'errors');
            echo "
\t<div class=\"col-sm-10\" style=\"margin-left: 50px\">
\t\t";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'row');
            echo "
\t</div>
";
        }
        // line 79
        echo "\t
</div>

";
        // line 82
        if ($this->getAttribute(($context["form"] ?? null), "image", array(), "any", true, true)) {
            // line 83
            echo "<div class=\"form-group\">
  ";
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Sélectionnez l'image associée"));
            echo "
  ";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'errors');
            echo "
  <div class=\"col-sm-10\" style=\"margin-left: 50x\">
    ";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'widget');
            echo "
  </div>
</div>
";
        }
        // line 91
        echo "


<div class=\"form-group\" style=\"margin-left: 95px; width: 70%\">

\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()), 'row');
        echo " ";
        // line 97
        echo "
</div>

 <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>

";
        // line 104
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 107
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    /**
       \$('#form-submit').on('submit', function(event)
      {
        event.preventDefault();
        var url = \"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\";
        var query = \$(this).serialize();
        \$.ajax({
          type: 'POST',
          url: url,
          data:
           {
            query: query
            }
            ,
          beforeSend: function() {

          },
          success: function(data) {

          },
          error: function() {

          }
        });    
      });
      **/
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#oc_plat_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
   
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>

<div class=\"row\">
\t<div class=\"col-sm-4\">
\t
    </div>
    <div class=\"col-sm-8\">
    \t";
        // line 208
        echo "\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary")));
        echo "
    </div>
</div>


";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

";
        // line 217
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
        
        $__internal_9b0924167e4bf88b6a6ea3d62f4602cde9d459c0176020a424a87a1b249a7bc0->leave($__internal_9b0924167e4bf88b6a6ea3d62f4602cde9d459c0176020a424a87a1b249a7bc0_prof);

        
        $__internal_79c0ff67173d10a2447ad44e93a2bf92b648db29e9238092d0811ce308e89f3f->leave($__internal_79c0ff67173d10a2447ad44e93a2bf92b648db29e9238092d0811ce308e89f3f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 217,  330 => 214,  321 => 208,  224 => 113,  216 => 107,  212 => 104,  205 => 97,  202 => 96,  195 => 91,  188 => 87,  183 => 85,  179 => 84,  176 => 83,  174 => 82,  169 => 79,  163 => 77,  158 => 75,  154 => 74,  152 => 73,  149 => 72,  141 => 66,  136 => 64,  132 => 63,  129 => 62,  122 => 57,  117 => 55,  113 => 54,  110 => 53,  103 => 48,  98 => 46,  94 => 45,  91 => 44,  83 => 39,  77 => 36,  71 => 33,  68 => 31,  65 => 29,  61 => 24,  55 => 21,  49 => 19,  47 => 18,  41 => 15,  36 => 12,  33 => 11,  28 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
{{ form_start(form, {'attr': {'class' : 'form-horizontal', 'id': 'form-submit'}} ) }}

{# Les erreurs générales du formulaire #}
{{ form_errors(form) }}

<div class=\"form-group\">
{% if form.date is defined %}
\t{{ form_label(form.date, \"Date de publication\", {'label_attr': {'class': 'col-sm-2'}} ) }}
\t<div class=\"col-sm-10\">
\t\t{{ form_widget(form.date) }}
\t</div>
{% endif %}
</div>

{# C'est le form_widget(form.date) qui affiche le champs même input, select, ..
   et form_row(form.save) affiche le label, le champs et les erreurs 
#}

{# Génération manuelle et éclatéé #}
<div class=\"form-group\">
\t{# Génération du label. #}
\t{{ form_label(form.title, \"Titre de l'annonce\", {'label_attr' : {'class' : 'col-sm-2 control-label'}} ) }}

\t{# Affichage des erreurs pour ce champs précis #}
\t{{ form_errors(form.title) }}
\t<div class=\"col-sm-10\">
\t\t{# Génération de l'input #}
\t\t{{ form_widget(form.title, {'attr' : {'class' : 'form-control'}} )}}
\t</div>
</div>

{# Idem pour un autre groupe #}
<div class=\"form-group\">
\t{{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}} )}}
\t{{ form_errors(form.content)}}
\t<div class=\"col-sm-10\">
\t\t{{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
\t</div>
</div>

{# Idem pour un autre groupe #}
<div class=\"form-group\">
\t{{ form_label(form.author, \"Auteur de l'annonce ?\", {'label_attr': {'class': 'col-sm-2 control-label'}} )}}
\t{{ form_errors(form.author)}}
\t<div class=\"col-sm-10\">
\t\t{{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
\t</div>
</div>

{# Pour le champ email #}
<div class=\"form-group\">
\t{{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-2 control-label'}} ) }}
\t{{ form_errors(form.email) }}
\t<div class=\"col-sm-10\">
\t\t{{ form_widget(form.email,{'attr': {'class': 'form-control'}} ) }}
\t</div>
</div>


{# Idem pour un autre groupe #}
<div class=\"form-group\">
{% if form.published is defined %}
{{ form_label(form.published, \"Publier cette annonce ?\", {'label_attr': {'class': 'col-sm-2 control-label'}} )}}
\t{{ form_errors(form.published)}}
\t<div class=\"col-sm-10\" style=\"margin-left: 50px\">
\t\t{{ form_row(form.published) }}
\t</div>
{% endif %}\t
</div>

{% if form.image is defined %}
<div class=\"form-group\">
  {{ form_label(form.image.file, \"Sélectionnez l'image associée\", {'label_attr': {'class': 'col-sm-2 control-label'}})}}
  {{ form_errors(form.image.file) }}
  <div class=\"col-sm-10\" style=\"margin-left: 50x\">
    {{ form_widget(form.image.file) }}
  </div>
</div>
{% endif %}



<div class=\"form-group\" style=\"margin-left: 95px; width: 70%\">

\t{{ form_row(form.categories) }} {# Affiche le label, les erreurs et le champ #}

</div>

 <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>

{# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

{# Voici le script en question : #}
<script type=\"text/javascript\">
  \$(document).ready(function() {
    /**
       \$('#form-submit').on('submit', function(event)
      {
        event.preventDefault();
        var url = \"{{ path('oc_platform_add') }}\";
        var query = \$(this).serialize();
        \$.ajax({
          type: 'POST',
          url: url,
          data:
           {
            query: query
            }
            ,
          beforeSend: function() {

          },
          success: function(data) {

          },
          error: function() {

          }
        });    
      });
      **/
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#oc_plat_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
   
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>

<div class=\"row\">
\t<div class=\"col-sm-4\">
\t
    </div>
    <div class=\"col-sm-8\">
    \t{# Pour le bouton, pas de label ni d'erreur #}
\t\t{{ form_widget(form.save, {'attr': {'class': 'btn btn-lg btn-primary'}})}}
    </div>
</div>


{# Génération automatique des champs pas encore écrits #}
{{ form_rest(form) }}

{# Fermeture de la balise <form> du formulaire HTML #}
{{ form_end(form) }}

</div>", "OCPlatformBundle:Advert:form.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
