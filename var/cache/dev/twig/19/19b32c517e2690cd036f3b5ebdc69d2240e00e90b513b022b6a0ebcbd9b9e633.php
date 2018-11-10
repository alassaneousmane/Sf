<?php

/* OCCourseBundle:Course:index.html.twig */
class __TwigTemplate_4a3efc5d54b4c3c6d11c03d0da3bcb52f506f0c9420626d294df46d6e0017b2f extends Twig_Template
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
        $__internal_844d275c576ab3d9283b0265c958d8c88362065c1b602b2715c02222b838c993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844d275c576ab3d9283b0265c958d8c88362065c1b602b2715c02222b838c993->enter($__internal_844d275c576ab3d9283b0265c958d8c88362065c1b602b2715c02222b838c993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCourseBundle:Course:index.html.twig"));

        $__internal_8357e0611704167504d220b949c65408223e7d225d83dd00892cf6fecf3aad93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8357e0611704167504d220b949c65408223e7d225d83dd00892cf6fecf3aad93->enter($__internal_8357e0611704167504d220b949c65408223e7d225d83dd00892cf6fecf3aad93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCourseBundle:Course:index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"iso-8859-1\">
\t\t<title>A. Martin - Développeur web</title>
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "acf05e0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_acf05e0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/acf05e0_bootstrap.min_1.css");
            // line 10
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
        ";
            // asset "acf05e0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_acf05e0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/acf05e0_jquery-ui_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
        ";
        } else {
            // asset "acf05e0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_acf05e0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/acf05e0.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t</head>

\t<body>
\t<div class=\"main-content\">
\t\t<div class=\"container\">
\t\t<!--image dans le coin supérieur droit-->
\t\t<div style=\"position: absolute; right: 200px; top: 20px\">
\t\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c757949_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c757949_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c757949_photo-professionnel_1.png");
            // line 20
            echo "         <img src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" title=\"Ousmane ALASSANE\" alt=\"Ousmane ALASSANE\" border=\"0\" height=\"100\" />
        ";
        } else {
            // asset "c757949"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c757949") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c757949.png");
            echo "         <img src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" title=\"Ousmane ALASSANE\" alt=\"Ousmane ALASSANE\" border=\"0\" height=\"100\" />
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "
\t\t</div>
\t\t<div class=\"enteteCV\">
\t\t\tAmaury Martin <br>
\t\t\t<div id=\"divAge\">30/11/1984</div>
\t\t\tE-mail:
\t\t\t<a href=\"mailto:martin@gmail.fr\">amartin@gmail.com</a><br>
\t\t\t<a href=\"javascript:MailPopup.afficher();\">Contact</a><br>
\t\t\t<input type=\"text\" id=\"datepicker\" placeholder=\"Select date\" >
\t\t</div>

\t\t<div id=\"titreCV\" class=\"titreCV\">
\t\t\tDéveloppeur web
\t\t</div>

\t\t";
        // line 38
        echo "\t\t<input type=\"button\" id=\"ajoutOnglet\" value=\"Ajouter un onglet\" />
\t\t<div id=\"onglets\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t<a href=\"#onglet-1\">Sécuriser</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#onglet-2\">Evaluer</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#onglet-3\">Prévenir les secours</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span></li>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div id=\"onglet-1\">
\t\t\t\t<p>Evaluer la situation et les dangers qu'elle comporte et sécuriser le lieu de l'accident. En cas d'accident...</p>
\t\t\t</div>
\t\t\t<div id=\"onglet-2\">
\t\t\t\t<p>Appreciez l'état de la situation</p>
\t\t\t</div>
\t\t\t<div id=\"onglet-3\">
\t\t\t\t<p>Il est très important de bien expliquer la situation...</p>
\t\t\t</div>
\t\t</div>

\t\t<!--SECTION1-->
\t\t<div class=\"titreSelection\">EXPÉRIENCES: </div>
\t\t<div class=\"dateCV\">2010</div>
\t\tFreelance Développeur Web <br>
\t\t<div class=\"dateCV\">2007</div>
\t    Amélioration des sites web de la société facesoft <br>

\t   <!--SECTION2-->
\t   <div class=\"titreSelection\">
\t\t   Formation:
\t   </div>
\t   <div class=\"dateCV\">2007</div>
\t\tDipôme de Technicien SUpérieur en jQuery <br>
\t\t<div class=\"dateCV\">2005</div>
\t\tBaccaulauréat Scientique <br>

\t   <!--SECTION3-->
\t\t<div class=\"titreSelection\" id=\"divers\">
\t\t\tDIVERS:
\t\t</div>
\t\t- Brevet secourisme <br>
\t    - Photoshop <br>
\t\t- Pratique de tennis <br>


\t\t</div>
\t</div>


        ";
        // line 92
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1483758_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1483758_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1483758_jquery.min_1.js");
            // line 98
            echo "\t\t<script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
        ";
            // asset "1483758_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1483758_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1483758_jquery-ui.min_2.js");
            echo "\t\t<script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
        ";
            // asset "1483758_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1483758_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1483758_bootstrap.min_3.js");
            echo "\t\t<script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
        ";
        } else {
            // asset "1483758"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1483758") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1483758.js");
            echo "\t\t<script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 100
        echo "


\t\t<script>
\t\t\t\$(document).ready(function () {

\t\t\t\t\t\$('#onglets').tabs({
\t\t\t\t\t\ttabTemplate: \"<li><a href='{href}'>#{label}</a><span class='ui-icon ui-icon-close'>Suppression</a></li>\",
\t\t\t\t\t\tadd: function(event, ui) {
\t\t\t\t\t\t\t\$( ui.panel ).apppend(\"<p>Contenu de mon onglet</p>\");
\t\t\t\t\t\t},
\t\t\t\t\t    events: \"mouseover\",
\t\t\t\t\t\tcollapsible: true
\t\t\t\t\t\t}).find('.ui-tabs-nav').sortable({ axis: \"x\" });
\t\t\t\t\t\$('#ajoutOnglet').bind('click',function() {
\t\t\t\t\t\tajoutOnglet();
\t\t\t\t\t});

\t\t\t\t\tfunction ajouteOnglet() {
\t\t\t\t\t\tidNouvelOnglet = \$('#onglets ul li').length+1;
\t\t\t\t\t\t\$('#onglets').tabs(
\t\t\t\t\t\t\t\"add\",
\t\t\t\t\t\t\t\"#onglet-\"+ idNouvelOnglet,
\t\t\t\t\t\t\t\"onglet \"+idNouvelOnglet 
\t\t\t\t\t\t\t);
\t\t\t\t\t}

\t\t\t\t\t\$('span.ui-icon-close').on('click', function () {
\t\t\t\t\t\tvar i = \$('#onglets>ul>li').index(\$(this).parent());
\t\t\t\t\t\t\$('#onglets').tabs(\"remove\", i);
\t\t\t\t\t});
\t\t\t   \$('#datepicker').datepicker({\t\t\t\t
\t\t\t\t   changeMonth: true,
\t\t\t\t   changeYear: true,
\t\t\t\t   showOtherMonths: true,
\t\t\t\t   selectOtherMonths: true
\t\t\t   });
\t\t       \$('.titreSelection').draggable(
\t\t\t\t   {
\t\t\t\t\t   axis: \"y\",
\t\t\t\t\t   revert: true, 
\t\t\t\t\t   cursor: \"move\",  // La souris change pendant le déplacement
\t\t\t\t\t    grid: [90, 10], // Le déplacement se fait sur une grille de 150 pixels * 10 pixels
\t\t\t\t\t\t//helper: \"clone\" // l'élément déplacé est copié. Il reste donc un élément à l'emplacement original
\t\t\t\t\t\t}
\t\t\t\t\t\t);


\t\t\t\t\$('#titreCV').draggable({revert: true}).html('Spécialiste jQuery').animate({
\t\t\t\t\t'backgroundColor': 'white',
\t\t\t\t\t'opacity': 0.90,
\t\t\t\t\t'left': '+=200'
\t\t\t\t}, 4000,'easeInBounce', function()
\t\t\t\t{
\t\t\t\t\t\$('#titreCV').html('Développeur Web Symfony');
\t\t\t\t});

\t\t\t\t// On calcule l'age
\t\t\t\tvar maintenant = new Date();
\t\t\t\tvar maDateDeNaissance = new Date(1984, 10, 30);
\t\t\t\t// Les mois commencent à 0 en JavaScript, janvier --0
\t\t\t\t// On calcule le nombre d'années
\t\t\t\tvar monAge = maintenant.getFullYear() - maDateDeNaissance.getFullYear();
\t\t\t\t\$('#divAge').html(monAge+ ' ans');
\t\t\t\t// SI l'anniversaire est déja passé on ajoute 1 an
\t\t\t\tif(maDateDeNaissance.getMonth() > maintenant.getMonth())
\t\t\t\t{
\t\t\t\t    monAge += 1;
\t\t\t\t}
\t\t\t\telse if(maintenant.getMonth() == maDateDeNaissance.getMonth() && maDateDeNaissance.getDate() > maintenant.getDate())
\t\t\t\t{
\t\t\t\t    monAge += 1;
\t\t\t\t}
\t\t\t\t// On effectue la mise à jour
\t\t\t\t\$('#divAge').html(monAge + ' ans');
\t\t\t\t
\t\t\t\t// La personne qui regarde le CV le regarde la semaine
\t\t\t\tif(maintenant.getDay() == 4)
\t\t\t\t{
\t\t\t\t\t\$('#divers').after('- Disponible en semaine <br>');
\t\t\t\t}

\t\t\t\t// La personne qui s'interesse au CV le regarde le weekend

\t\t\t\tif(maintenant.getDay() == 0 || maintenant.getDay() == 6)
\t\t\t\t{
\t\t\t\t    \$('#divers').after('- Horaires souples (week-end..)<br>');
\t\t\t\t}
\t\t\t\t/* \$('.titreSelection').eq(0).addClass('titreBleu');
\t\t\t\t\$('.titreSelection').eq(1).addClass('titreRouge');
                \$('.titreSelection').eq(2).toggleClass('titreBleu');
                */
                \$('.titreselection').css('border', '0px solid #555');

                \$('.titreSelection').css({
\t\t\t\t 'color': 'white',
\t\t\t\t 'background-color': 'green',
\t\t\t\t 'padding': '4px'
\t\t\t\t});
                var bibliothequeJQuery = jQuery.noConflict();
                // La personne qui s'intéresse à mon CV le regarde depuis IE
\t\t\t\tif(\$.browser.msie) {
\t\t\t\t    // Alors c'est le cas
\t\t\t\t}
\t\t\t


            });
\t\t</script>



\t</body>
</html>
";
        
        $__internal_844d275c576ab3d9283b0265c958d8c88362065c1b602b2715c02222b838c993->leave($__internal_844d275c576ab3d9283b0265c958d8c88362065c1b602b2715c02222b838c993_prof);

        
        $__internal_8357e0611704167504d220b949c65408223e7d225d83dd00892cf6fecf3aad93->leave($__internal_8357e0611704167504d220b949c65408223e7d225d83dd00892cf6fecf3aad93_prof);

    }

    public function getTemplateName()
    {
        return "OCCourseBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 100,  159 => 98,  155 => 92,  99 => 38,  82 => 22,  68 => 20,  64 => 19,  55 => 12,  35 => 10,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"iso-8859-1\">
\t\t<title>A. Martin - Développeur web</title>
        {% stylesheets filter='cssrewrite, ?scssphp'
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'
\t\t'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css'
\t\t'bundles/occourse/css/*'
        %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
        {% endstylesheets %}
\t</head>

\t<body>
\t<div class=\"main-content\">
\t\t<div class=\"container\">
\t\t<!--image dans le coin supérieur droit-->
\t\t<div style=\"position: absolute; right: 200px; top: 20px\">
\t\t{% image '@OCCourseBundle/Resources/public/img/photo-professionnel.png' %}
         <img src=\"{{ asset_url }}\" title=\"Ousmane ALASSANE\" alt=\"Ousmane ALASSANE\" border=\"0\" height=\"100\" />
        {% endimage %}

\t\t</div>
\t\t<div class=\"enteteCV\">
\t\t\tAmaury Martin <br>
\t\t\t<div id=\"divAge\">30/11/1984</div>
\t\t\tE-mail:
\t\t\t<a href=\"mailto:martin@gmail.fr\">amartin@gmail.com</a><br>
\t\t\t<a href=\"javascript:MailPopup.afficher();\">Contact</a><br>
\t\t\t<input type=\"text\" id=\"datepicker\" placeholder=\"Select date\" >
\t\t</div>

\t\t<div id=\"titreCV\" class=\"titreCV\">
\t\t\tDéveloppeur web
\t\t</div>

\t\t{# ---Menu onglets avec JqqueryUI #}
\t\t<input type=\"button\" id=\"ajoutOnglet\" value=\"Ajouter un onglet\" />
\t\t<div id=\"onglets\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t<a href=\"#onglet-1\">Sécuriser</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#onglet-2\">Evaluer</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#onglet-3\">Prévenir les secours</a>
\t\t\t\t<span class=\"ui-icon ui-icon-close\">Suppression</span></li>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div id=\"onglet-1\">
\t\t\t\t<p>Evaluer la situation et les dangers qu'elle comporte et sécuriser le lieu de l'accident. En cas d'accident...</p>
\t\t\t</div>
\t\t\t<div id=\"onglet-2\">
\t\t\t\t<p>Appreciez l'état de la situation</p>
\t\t\t</div>
\t\t\t<div id=\"onglet-3\">
\t\t\t\t<p>Il est très important de bien expliquer la situation...</p>
\t\t\t</div>
\t\t</div>

\t\t<!--SECTION1-->
\t\t<div class=\"titreSelection\">EXPÉRIENCES: </div>
\t\t<div class=\"dateCV\">2010</div>
\t\tFreelance Développeur Web <br>
\t\t<div class=\"dateCV\">2007</div>
\t    Amélioration des sites web de la société facesoft <br>

\t   <!--SECTION2-->
\t   <div class=\"titreSelection\">
\t\t   Formation:
\t   </div>
\t   <div class=\"dateCV\">2007</div>
\t\tDipôme de Technicien SUpérieur en jQuery <br>
\t\t<div class=\"dateCV\">2005</div>
\t\tBaccaulauréat Scientique <br>

\t   <!--SECTION3-->
\t\t<div class=\"titreSelection\" id=\"divers\">
\t\t\tDIVERS:
\t\t</div>
\t\t- Brevet secourisme <br>
\t    - Photoshop <br>
\t\t- Pratique de tennis <br>


\t\t</div>
\t</div>


        {% javascripts filter='jsqueeze'
        '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'
\t\t'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js'
        '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'
\t\t'bundles/occourse/js/*'
        %}
\t\t<script src={{ asset_url }} type=\"text/javascript\"></script>
        {% endjavascripts %}



\t\t<script>
\t\t\t\$(document).ready(function () {

\t\t\t\t\t\$('#onglets').tabs({
\t\t\t\t\t\ttabTemplate: \"<li><a href='{href}'>#{label}</a><span class='ui-icon ui-icon-close'>Suppression</a></li>\",
\t\t\t\t\t\tadd: function(event, ui) {
\t\t\t\t\t\t\t\$( ui.panel ).apppend(\"<p>Contenu de mon onglet</p>\");
\t\t\t\t\t\t},
\t\t\t\t\t    events: \"mouseover\",
\t\t\t\t\t\tcollapsible: true
\t\t\t\t\t\t}).find('.ui-tabs-nav').sortable({ axis: \"x\" });
\t\t\t\t\t\$('#ajoutOnglet').bind('click',function() {
\t\t\t\t\t\tajoutOnglet();
\t\t\t\t\t});

\t\t\t\t\tfunction ajouteOnglet() {
\t\t\t\t\t\tidNouvelOnglet = \$('#onglets ul li').length+1;
\t\t\t\t\t\t\$('#onglets').tabs(
\t\t\t\t\t\t\t\"add\",
\t\t\t\t\t\t\t\"#onglet-\"+ idNouvelOnglet,
\t\t\t\t\t\t\t\"onglet \"+idNouvelOnglet 
\t\t\t\t\t\t\t);
\t\t\t\t\t}

\t\t\t\t\t\$('span.ui-icon-close').on('click', function () {
\t\t\t\t\t\tvar i = \$('#onglets>ul>li').index(\$(this).parent());
\t\t\t\t\t\t\$('#onglets').tabs(\"remove\", i);
\t\t\t\t\t});
\t\t\t   \$('#datepicker').datepicker({\t\t\t\t
\t\t\t\t   changeMonth: true,
\t\t\t\t   changeYear: true,
\t\t\t\t   showOtherMonths: true,
\t\t\t\t   selectOtherMonths: true
\t\t\t   });
\t\t       \$('.titreSelection').draggable(
\t\t\t\t   {
\t\t\t\t\t   axis: \"y\",
\t\t\t\t\t   revert: true, 
\t\t\t\t\t   cursor: \"move\",  // La souris change pendant le déplacement
\t\t\t\t\t    grid: [90, 10], // Le déplacement se fait sur une grille de 150 pixels * 10 pixels
\t\t\t\t\t\t//helper: \"clone\" // l'élément déplacé est copié. Il reste donc un élément à l'emplacement original
\t\t\t\t\t\t}
\t\t\t\t\t\t);


\t\t\t\t\$('#titreCV').draggable({revert: true}).html('Spécialiste jQuery').animate({
\t\t\t\t\t'backgroundColor': 'white',
\t\t\t\t\t'opacity': 0.90,
\t\t\t\t\t'left': '+=200'
\t\t\t\t}, 4000,'easeInBounce', function()
\t\t\t\t{
\t\t\t\t\t\$('#titreCV').html('Développeur Web Symfony');
\t\t\t\t});

\t\t\t\t// On calcule l'age
\t\t\t\tvar maintenant = new Date();
\t\t\t\tvar maDateDeNaissance = new Date(1984, 10, 30);
\t\t\t\t// Les mois commencent à 0 en JavaScript, janvier --0
\t\t\t\t// On calcule le nombre d'années
\t\t\t\tvar monAge = maintenant.getFullYear() - maDateDeNaissance.getFullYear();
\t\t\t\t\$('#divAge').html(monAge+ ' ans');
\t\t\t\t// SI l'anniversaire est déja passé on ajoute 1 an
\t\t\t\tif(maDateDeNaissance.getMonth() > maintenant.getMonth())
\t\t\t\t{
\t\t\t\t    monAge += 1;
\t\t\t\t}
\t\t\t\telse if(maintenant.getMonth() == maDateDeNaissance.getMonth() && maDateDeNaissance.getDate() > maintenant.getDate())
\t\t\t\t{
\t\t\t\t    monAge += 1;
\t\t\t\t}
\t\t\t\t// On effectue la mise à jour
\t\t\t\t\$('#divAge').html(monAge + ' ans');
\t\t\t\t
\t\t\t\t// La personne qui regarde le CV le regarde la semaine
\t\t\t\tif(maintenant.getDay() == 4)
\t\t\t\t{
\t\t\t\t\t\$('#divers').after('- Disponible en semaine <br>');
\t\t\t\t}

\t\t\t\t// La personne qui s'interesse au CV le regarde le weekend

\t\t\t\tif(maintenant.getDay() == 0 || maintenant.getDay() == 6)
\t\t\t\t{
\t\t\t\t    \$('#divers').after('- Horaires souples (week-end..)<br>');
\t\t\t\t}
\t\t\t\t/* \$('.titreSelection').eq(0).addClass('titreBleu');
\t\t\t\t\$('.titreSelection').eq(1).addClass('titreRouge');
                \$('.titreSelection').eq(2).toggleClass('titreBleu');
                */
                \$('.titreselection').css('border', '0px solid #555');

                \$('.titreSelection').css({
\t\t\t\t 'color': 'white',
\t\t\t\t 'background-color': 'green',
\t\t\t\t 'padding': '4px'
\t\t\t\t});
                var bibliothequeJQuery = jQuery.noConflict();
                // La personne qui s'intéresse à mon CV le regarde depuis IE
\t\t\t\tif(\$.browser.msie) {
\t\t\t\t    // Alors c'est le cas
\t\t\t\t}
\t\t\t


            });
\t\t</script>



\t</body>
</html>
", "OCCourseBundle:Course:index.html.twig", "/opt/lampp/htdocs/Sf/src/OC/CourseBundle/Resources/views/Course/index.html.twig");
    }
}
