<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_d2e9fa6eaad585083b0121edeae0129833fef0bfa098ca74f598b76d1ca3c64d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'searchbox' => array($this, 'block_searchbox'),
            'advert_side' => array($this, 'block_advert_side'),
            'advert_vrac' => array($this, 'block_advert_vrac'),
            'annonces_for_table' => array($this, 'block_annonces_for_table'),
            'flashBag' => array($this, 'block_flashBag'),
            'form_login_box' => array($this, 'block_form_login_box'),
            'displayAdverts' => array($this, 'block_displayAdverts'),
            'form_security' => array($this, 'block_form_security'),
            'content' => array($this, 'block_content'),
            'adverts_list' => array($this, 'block_adverts_list'),
            'contact' => array($this, 'block_contact'),
            'annonces' => array($this, 'block_annonces'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_822ade2ccc9086769ad6d737797ad3fb8154c6fa2f037207f84c9c40884c17dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822ade2ccc9086769ad6d737797ad3fb8154c6fa2f037207f84c9c40884c17dd->enter($__internal_822ade2ccc9086769ad6d737797ad3fb8154c6fa2f037207f84c9c40884c17dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_3e0546b18511622e4d1b682c0dc4e93ecd1113ab930d609283c952961605693b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0546b18511622e4d1b682c0dc4e93ecd1113ab930d609283c952961605693b->enter($__internal_3e0546b18511622e4d1b682c0dc4e93ecd1113ab930d609283c952961605693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 9
        $this->displayBlock('favicon', $context, $blocks);
        // line 12
        echo "
  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
  ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a1d1df5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a1d1df5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a1d1df5_part_1_dashboard_1.css");
            // line 22
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
  ";
            // asset "a1d1df5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a1d1df5_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a1d1df5_part_1_main_2.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
  ";
            // asset "a1d1df5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a1d1df5_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a1d1df5_bootstrap.min_2.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
  ";
        } else {
            // asset "a1d1df5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a1d1df5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a1d1df5.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
  ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "
</head>

<body>

    ";
        // line 29
        $this->displayBlock('navbar', $context, $blocks);
        // line 65
        echo "       

  <div class=\"container-fluid\">
  <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\" style=\"margin-top: -50px\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"#\">Annonces <span class=\"sr-only\">(current)</span></a></li>
              ";
        // line 72
        $this->displayBlock('advert_side', $context, $blocks);
        // line 75
        echo "          </ul>
         
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\" style=\"margin-top: -690px\">
          <h1 class=\"page-header\">Annonces en vrac</h1>

          <div class=\"row placeholders\">
          
          ";
        // line 83
        $this->displayBlock('advert_vrac', $context, $blocks);
        // line 86
        echo "                        
          </div>

          <h2 class=\"sub-header\">Annonces</h2>
          ";
        // line 90
        $this->displayBlock('annonces_for_table', $context, $blocks);
        // line 93
        echo "          
        </div>
      </div>


    ";
        // line 98
        $this->displayBlock('flashBag', $context, $blocks);
        // line 105
        echo "

    <div id=\"header\" class=\"jumbotron\" style=\"margin-top: 80px; border-radius: 0\">
    ";
        // line 108
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 109
            echo "    ";
            $this->displayBlock('form_login_box', $context, $blocks);
            // line 112
            echo "    ";
        }
        // line 113
        echo "     <p> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aujourd'hui nous sommes le"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "none"), "html", null, true);
        echo " et il est ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "none", "medium"), "html", null, true);
        echo " <br>
       ";
        // line 114
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 115
            echo "            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <br>
            <a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> Se déconnecter </a>
            ";
        } else {
            // line 118
            echo "             <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> Se connecter </a>
            ";
        }
        // line 120
        echo "     </p>
     <hr>
      <h1> ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("<div id=\"secretary-text\">My advert online support </div>", array(), "messages");
        echo "</h1>
      <p>
          ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("This project is lead by Symfony,
        and build with MOOC OpenClassrooms and SensioLabs.", array(), "messages");
        // line 128
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.devise"), "html", null, true);
        echo "
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_purge", array("days" => 20));
        echo "\" style=\"border-radius: 5\" target=\"_blank\">
          ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete adverts without applicants"), "html", null, true);
        echo " »
        </a>
         <a class=\"btn btn-success btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/creer-des-formulaires-avec-symfony\" target=\"_blank\" style=\"border-radius: 5px\">
          ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Participate with MOOC"), "html", null, true);
        echo " »
        </a>

        ";
        // line 142
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 143
            echo "        <a class=\"btn btn-danger btn-lg\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
            echo "\" style=\"border-radius: 5px\">
           ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add advert", array(), "messages"), "html", null, true);
            echo " +
        </a>
        ";
        }
        // line 147
        echo "        <a href=\"http://localhost/Sf/web/app_dev.php/_console\" class=\"btn btn-default btn-lg\" target=\"_blank\" style=\"border-radius: 5px\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Console", array(), "messages"), "html", null, true);
        echo "</a>

         <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_course_homepage");
        echo "\" class=\"btn btn-info btn-lg\" target=\"_blank\" style=\"border-radius: 5px\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Course", array(), "messages"), "html", null, true);
        echo "</a>

      </p>
    </div>

    ";
        // line 154
        $this->displayBlock('displayAdverts', $context, $blocks);
        // line 204
        echo "
    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 208
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.&nbsp;
      2017-Ousmane ALASSANE - Dév Python -Symfony-Laravel-soon </p>

    </footer>
  </div>

";
        // line 215
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "be7a92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_jquery.min_1.js");
            // line 221
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
            // asset "be7a92b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_jquery-ui.min_2.js");
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
            // asset "be7a92b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_bootstrap.min_3.js");
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
            // asset "be7a92b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_part_4_holder.min_1.js");
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
            // asset "be7a92b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_part_4_main_2.js");
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
        } else {
            // asset "be7a92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b.js");
            echo "  <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>
  
  ";
        }
        unset($context["asset_url"]);
        // line 224
        echo "
 <script>
 \$(document).ready(function()
 {
   
   \$('input#searchbox').on('keyup', function()
  {
      var query = \$(this).val();
     

       if(query.length > 0)
       {
           \$.ajax({
               type: 'POST',
               url: \"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_search_ajax");
        echo "\",
               data: {
                   query: query
               },
               beforeSend: function()
               {
                   \$('#display-results').html(' <span style=\"margin-left: 50px\" id=\"spinner\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i>&nbsp;Recherche en cours</span>').show();
               },
               error: function () {
                   \$('#display-results').html(' <span style=\"margin-left: 50px\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i>&nbsp;Recherche en cours</span>').show();

               },
               success: function(data) {
                if(data != ' ') {
                  \$('#display-results').html(data).show().css('width', '246px');
                  \$('#spinner').hide();
                    \$('.display-box-advert').css({
                        'padding': '4px',
                        'border-top': '1px solid #dedede',
                        'hauteur': '70px',
                        'font-size': '14px',
                        'background-color': 'white',
                        'position': 'relative',
                        'display': 'block'
                    });
                    \$('.display-box-advert').on('mouseenter', function () {

                        \$(this).css({
                            'background-color': '#3b5998',
                            'color': 'white',
                            'cursor': 'pointer'
                        });
                    });
                    \$('.display-box-advert a').css({
                        'color': '#333',
                        'text-decoration': 'none'
                    });
                    \$('.display-box-advert a').on('mouseenter', function() {
                        \$(this).css({
                            'color': 'white',
                            'text-decoration': 'none'
                        });
                    });
                    \$('.display-box-advert a').on('mouseleave', function() {
                        \$(this).css({
                            'color': '#333',
                            'text-decoration': 'none'
                        });
                    });

                    \$('.display-box-advert').on('mouseleave', function () {

                        \$(this).css({
                            'background-color': '#fff',
                            'color': 'black'
                        });


                    });
                } else {
                    \$('#display-results').html(' <span style=\"margin-left: 70px\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Recherche en cours</span>').show();

                }
               }
           });
       }

  });
 });
 </script>
 
</body>
</html>";
        
        $__internal_822ade2ccc9086769ad6d737797ad3fb8154c6fa2f037207f84c9c40884c17dd->leave($__internal_822ade2ccc9086769ad6d737797ad3fb8154c6fa2f037207f84c9c40884c17dd_prof);

        
        $__internal_3e0546b18511622e4d1b682c0dc4e93ecd1113ab930d609283c952961605693b->leave($__internal_3e0546b18511622e4d1b682c0dc4e93ecd1113ab930d609283c952961605693b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dc61832f8987f6d9b5c02cbc05093371ee7bd4735967944ccb42b923fc4786a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc61832f8987f6d9b5c02cbc05093371ee7bd4735967944ccb42b923fc4786a->enter($__internal_6dc61832f8987f6d9b5c02cbc05093371ee7bd4735967944ccb42b923fc4786a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19f53f2b47b589e0fd4273e8ba4e5aa2d693d746e2477a6ed494924ace20322c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f53f2b47b589e0fd4273e8ba4e5aa2d693d746e2477a6ed494924ace20322c->enter($__internal_19f53f2b47b589e0fd4273e8ba4e5aa2d693d746e2477a6ed494924ace20322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_19f53f2b47b589e0fd4273e8ba4e5aa2d693d746e2477a6ed494924ace20322c->leave($__internal_19f53f2b47b589e0fd4273e8ba4e5aa2d693d746e2477a6ed494924ace20322c_prof);

        
        $__internal_6dc61832f8987f6d9b5c02cbc05093371ee7bd4735967944ccb42b923fc4786a->leave($__internal_6dc61832f8987f6d9b5c02cbc05093371ee7bd4735967944ccb42b923fc4786a_prof);

    }

    // line 9
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_d490967c266bede8b11d9ccc4600750e14dcc9ab9a11f816e6c1c712b016bb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d490967c266bede8b11d9ccc4600750e14dcc9ab9a11f816e6c1c712b016bb58->enter($__internal_d490967c266bede8b11d9ccc4600750e14dcc9ab9a11f816e6c1c712b016bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        $__internal_ed39f39f14f826d5f7e34f63d5562e6427265cb6267c89b7ff9445b9fd37a812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed39f39f14f826d5f7e34f63d5562e6427265cb6267c89b7ff9445b9fd37a812->enter($__internal_ed39f39f14f826d5f7e34f63d5562e6427265cb6267c89b7ff9445b9fd37a812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 10
        echo "      <link rel=\"icon\" href=\"https://bolt.cm/theme/bolt-v300/images/symfony_logo.png?59b03a9be7\" type=\"image/png\" />
  ";
        
        $__internal_ed39f39f14f826d5f7e34f63d5562e6427265cb6267c89b7ff9445b9fd37a812->leave($__internal_ed39f39f14f826d5f7e34f63d5562e6427265cb6267c89b7ff9445b9fd37a812_prof);

        
        $__internal_d490967c266bede8b11d9ccc4600750e14dcc9ab9a11f816e6c1c712b016bb58->leave($__internal_d490967c266bede8b11d9ccc4600750e14dcc9ab9a11f816e6c1c712b016bb58_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41202f9f0a43dd7da1e65bb369825e1c3555f3e4ef9a9bdb2cb8fc2510e368d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41202f9f0a43dd7da1e65bb369825e1c3555f3e4ef9a9bdb2cb8fc2510e368d4->enter($__internal_41202f9f0a43dd7da1e65bb369825e1c3555f3e4ef9a9bdb2cb8fc2510e368d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6375d11974f191d24f1ccd601ddc2bb9efd91abf291fff09f95b1af6b430e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6375d11974f191d24f1ccd601ddc2bb9efd91abf291fff09f95b1af6b430e3f->enter($__internal_f6375d11974f191d24f1ccd601ddc2bb9efd91abf291fff09f95b1af6b430e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    ";
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">   
  ";
        
        $__internal_f6375d11974f191d24f1ccd601ddc2bb9efd91abf291fff09f95b1af6b430e3f->leave($__internal_f6375d11974f191d24f1ccd601ddc2bb9efd91abf291fff09f95b1af6b430e3f_prof);

        
        $__internal_41202f9f0a43dd7da1e65bb369825e1c3555f3e4ef9a9bdb2cb8fc2510e368d4->leave($__internal_41202f9f0a43dd7da1e65bb369825e1c3555f3e4ef9a9bdb2cb8fc2510e368d4_prof);

    }

    // line 29
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_3bb01fa80896478cbedfde41a749231f011f8c5f477dda5cc8cff8be0c12f813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb01fa80896478cbedfde41a749231f011f8c5f477dda5cc8cff8be0c12f813->enter($__internal_3bb01fa80896478cbedfde41a749231f011f8c5f477dda5cc8cff8be0c12f813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_dac85a36c30c62d442cd55f981005600163829b61dc76150ac760314415ea997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac85a36c30c62d442cd55f981005600163829b61dc76150ac760314415ea997->enter($__internal_dac85a36c30c62d442cd55f981005600163829b61dc76150ac760314415ea997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 30
        echo "           <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
           <a class=\"navbar-brand\"> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OCPlatformEchange"), "html", null, true);
        echo " </a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
           <li role=\"presentation\"> <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_homepage");
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
            <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to the platform"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_list_adverts");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List adverts with applicants"), "html", null, true);
        echo "</a></li>
            <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_contactpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact"), "html", null, true);
        echo "</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>

        ";
        // line 53
        echo "        ";
        $this->displayBlock('searchbox', $context, $blocks);
        // line 61
        echo "
        </div>
      </div>
    </nav>
     ";
        
        $__internal_dac85a36c30c62d442cd55f981005600163829b61dc76150ac760314415ea997->leave($__internal_dac85a36c30c62d442cd55f981005600163829b61dc76150ac760314415ea997_prof);

        
        $__internal_3bb01fa80896478cbedfde41a749231f011f8c5f477dda5cc8cff8be0c12f813->leave($__internal_3bb01fa80896478cbedfde41a749231f011f8c5f477dda5cc8cff8be0c12f813_prof);

    }

    // line 53
    public function block_searchbox($context, array $blocks = array())
    {
        $__internal_7688b38af9406312d8b50c837cc6c5ba20a7af934afc6c067418e77391625a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7688b38af9406312d8b50c837cc6c5ba20a7af934afc6c067418e77391625a52->enter($__internal_7688b38af9406312d8b50c837cc6c5ba20a7af934afc6c067418e77391625a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        $__internal_c5045ab2de3a1e1652f814fe72e476e07948e45c2d7106721152f34307d95b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5045ab2de3a1e1652f814fe72e476e07948e45c2d7106721152f34307d95b77->enter($__internal_c5045ab2de3a1e1652f814fe72e476e07948e45c2d7106721152f34307d95b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbox"));

        // line 54
        echo "            <form action=\"\" class=\"navbar-form navbar-right\" >
                <input type=\"text\" class=\"form-control\" style=\"border-radius: 0; color:rbg(117, 2, 42)\"; placeholder=\" ";
        // line 55
        if (array_key_exists("listAdverts", $context)) {
            echo " ";
            if ((twig_length_filter($this->env, ($context["listAdverts"] ?? $this->getContext($context, "listAdverts"))) == 0)) {
                echo " Aucune annonce pour le moment  ";
            } elseif ((twig_length_filter($this->env, ($context["listAdverts"] ?? $this->getContext($context, "listAdverts"))) == 1)) {
                echo " Chercher l'annonce disponible ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["listAdverts"] ?? $this->getContext($context, "listAdverts"))), "html", null, true);
                echo " disponibles";
            }
            echo " ";
        } else {
            echo " Entrer votre recherche ici";
        }
        echo "\"; width=\"60%\" id=\"searchbox\">
            </form>
            <div id=\"display-results\">

            </div>
        ";
        
        $__internal_c5045ab2de3a1e1652f814fe72e476e07948e45c2d7106721152f34307d95b77->leave($__internal_c5045ab2de3a1e1652f814fe72e476e07948e45c2d7106721152f34307d95b77_prof);

        
        $__internal_7688b38af9406312d8b50c837cc6c5ba20a7af934afc6c067418e77391625a52->leave($__internal_7688b38af9406312d8b50c837cc6c5ba20a7af934afc6c067418e77391625a52_prof);

    }

    // line 72
    public function block_advert_side($context, array $blocks = array())
    {
        $__internal_fcdb8cb1b985923ec103f80b4ffd3880748ff11a9e074cb7f232272de9476eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdb8cb1b985923ec103f80b4ffd3880748ff11a9e074cb7f232272de9476eda->enter($__internal_fcdb8cb1b985923ec103f80b4ffd3880748ff11a9e074cb7f232272de9476eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_side"));

        $__internal_007407fd328bf23c9dd2f8e3e1ef0f3bdd2696032441e562ea7250ce561bd67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007407fd328bf23c9dd2f8e3e1ef0f3bdd2696032441e562ea7250ce561bd67f->enter($__internal_007407fd328bf23c9dd2f8e3e1ef0f3bdd2696032441e562ea7250ce561bd67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_side"));

        // line 73
        echo "                  
              ";
        
        $__internal_007407fd328bf23c9dd2f8e3e1ef0f3bdd2696032441e562ea7250ce561bd67f->leave($__internal_007407fd328bf23c9dd2f8e3e1ef0f3bdd2696032441e562ea7250ce561bd67f_prof);

        
        $__internal_fcdb8cb1b985923ec103f80b4ffd3880748ff11a9e074cb7f232272de9476eda->leave($__internal_fcdb8cb1b985923ec103f80b4ffd3880748ff11a9e074cb7f232272de9476eda_prof);

    }

    // line 83
    public function block_advert_vrac($context, array $blocks = array())
    {
        $__internal_bc0ca0621615a45aca5cb3cd32f9b8f05fc8ad57d727c7d5d4bba51feb3f9a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0ca0621615a45aca5cb3cd32f9b8f05fc8ad57d727c7d5d4bba51feb3f9a32->enter($__internal_bc0ca0621615a45aca5cb3cd32f9b8f05fc8ad57d727c7d5d4bba51feb3f9a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        $__internal_a610a287fca425081b8ccefaec762d51734acd81e0a1eafe184d82532ed177e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a610a287fca425081b8ccefaec762d51734acd81e0a1eafe184d82532ed177e4->enter($__internal_a610a287fca425081b8ccefaec762d51734acd81e0a1eafe184d82532ed177e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "advert_vrac"));

        // line 84
        echo "              
          ";
        
        $__internal_a610a287fca425081b8ccefaec762d51734acd81e0a1eafe184d82532ed177e4->leave($__internal_a610a287fca425081b8ccefaec762d51734acd81e0a1eafe184d82532ed177e4_prof);

        
        $__internal_bc0ca0621615a45aca5cb3cd32f9b8f05fc8ad57d727c7d5d4bba51feb3f9a32->leave($__internal_bc0ca0621615a45aca5cb3cd32f9b8f05fc8ad57d727c7d5d4bba51feb3f9a32_prof);

    }

    // line 90
    public function block_annonces_for_table($context, array $blocks = array())
    {
        $__internal_f761c0ef7bd21589c836c017bf4f26bc1d878ba10d98fb2c58a2b9fd3a474d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f761c0ef7bd21589c836c017bf4f26bc1d878ba10d98fb2c58a2b9fd3a474d00->enter($__internal_f761c0ef7bd21589c836c017bf4f26bc1d878ba10d98fb2c58a2b9fd3a474d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces_for_table"));

        $__internal_74044895199f43c918980ad2d17f841803b51a9f0fb295ba3541f261fb7a3f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74044895199f43c918980ad2d17f841803b51a9f0fb295ba3541f261fb7a3f17->enter($__internal_74044895199f43c918980ad2d17f841803b51a9f0fb295ba3541f261fb7a3f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces_for_table"));

        // line 91
        echo "              
          ";
        
        $__internal_74044895199f43c918980ad2d17f841803b51a9f0fb295ba3541f261fb7a3f17->leave($__internal_74044895199f43c918980ad2d17f841803b51a9f0fb295ba3541f261fb7a3f17_prof);

        
        $__internal_f761c0ef7bd21589c836c017bf4f26bc1d878ba10d98fb2c58a2b9fd3a474d00->leave($__internal_f761c0ef7bd21589c836c017bf4f26bc1d878ba10d98fb2c58a2b9fd3a474d00_prof);

    }

    // line 98
    public function block_flashBag($context, array $blocks = array())
    {
        $__internal_24d7e7a74587fe0fa785fbd82eda6e64e30d18da4980c8ad82a69f352bb1b7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d7e7a74587fe0fa785fbd82eda6e64e30d18da4980c8ad82a69f352bb1b7a4->enter($__internal_24d7e7a74587fe0fa785fbd82eda6e64e30d18da4980c8ad82a69f352bb1b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashBag"));

        $__internal_0c2f37467fba5f74ba69240d648ee84f5a81b58923c8371d3c3597bea6fd39ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2f37467fba5f74ba69240d648ee84f5a81b58923c8371d3c3597bea6fd39ff->enter($__internal_0c2f37467fba5f74ba69240d648ee84f5a81b58923c8371d3c3597bea6fd39ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashBag"));

        // line 99
        echo "      <div>
    ";
        // line 103
        echo "  </div>
    ";
        
        $__internal_0c2f37467fba5f74ba69240d648ee84f5a81b58923c8371d3c3597bea6fd39ff->leave($__internal_0c2f37467fba5f74ba69240d648ee84f5a81b58923c8371d3c3597bea6fd39ff_prof);

        
        $__internal_24d7e7a74587fe0fa785fbd82eda6e64e30d18da4980c8ad82a69f352bb1b7a4->leave($__internal_24d7e7a74587fe0fa785fbd82eda6e64e30d18da4980c8ad82a69f352bb1b7a4_prof);

    }

    // line 109
    public function block_form_login_box($context, array $blocks = array())
    {
        $__internal_a8fb4c9809fe93ce77eda49a4af2c916d46918c8f81ac9141059079625099baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fb4c9809fe93ce77eda49a4af2c916d46918c8f81ac9141059079625099baf->enter($__internal_a8fb4c9809fe93ce77eda49a4af2c916d46918c8f81ac9141059079625099baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_login_box"));

        $__internal_46026dbf4359c2181c3dc8a1044a509e10a913b2ee5ec64165589237d8aa88d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46026dbf4359c2181c3dc8a1044a509e10a913b2ee5ec64165589237d8aa88d5->enter($__internal_46026dbf4359c2181c3dc8a1044a509e10a913b2ee5ec64165589237d8aa88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_login_box"));

        // line 110
        echo "
    ";
        
        $__internal_46026dbf4359c2181c3dc8a1044a509e10a913b2ee5ec64165589237d8aa88d5->leave($__internal_46026dbf4359c2181c3dc8a1044a509e10a913b2ee5ec64165589237d8aa88d5_prof);

        
        $__internal_a8fb4c9809fe93ce77eda49a4af2c916d46918c8f81ac9141059079625099baf->leave($__internal_a8fb4c9809fe93ce77eda49a4af2c916d46918c8f81ac9141059079625099baf_prof);

    }

    // line 154
    public function block_displayAdverts($context, array $blocks = array())
    {
        $__internal_ad6c8420398f4344d435b8182ee06636cb232baeebaeda01a6bb65ece294ac34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6c8420398f4344d435b8182ee06636cb232baeebaeda01a6bb65ece294ac34->enter($__internal_ad6c8420398f4344d435b8182ee06636cb232baeebaeda01a6bb65ece294ac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "displayAdverts"));

        $__internal_3f6fc9e2bf75c0f02e009ebe0564fd3ed125b86eb6a1e954e0ffbb51ce002d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6fc9e2bf75c0f02e009ebe0564fd3ed125b86eb6a1e954e0ffbb51ce002d91->enter($__internal_3f6fc9e2bf75c0f02e009ebe0564fd3ed125b86eb6a1e954e0ffbb51ce002d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "displayAdverts"));

        // line 155
        echo "    <div class=\"row\">
      <div class=\"col-sm-3\">

      </div>
      <div class=\"col-sm-9\">
        ";
        // line 160
        $this->displayBlock('form_security', $context, $blocks);
        // line 163
        echo "      </div>
    </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
           <h4>Dernières annonces - Platforme - Annonces</h4>
           ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 16)));
        echo "        
        </div>
        ";
        // line 170
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "        ";
        $this->displayBlock('annonces', $context, $blocks);
        // line 197
        echo "
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 199
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "      </div>
    </div>
    ";
        
        $__internal_3f6fc9e2bf75c0f02e009ebe0564fd3ed125b86eb6a1e954e0ffbb51ce002d91->leave($__internal_3f6fc9e2bf75c0f02e009ebe0564fd3ed125b86eb6a1e954e0ffbb51ce002d91_prof);

        
        $__internal_ad6c8420398f4344d435b8182ee06636cb232baeebaeda01a6bb65ece294ac34->leave($__internal_ad6c8420398f4344d435b8182ee06636cb232baeebaeda01a6bb65ece294ac34_prof);

    }

    // line 160
    public function block_form_security($context, array $blocks = array())
    {
        $__internal_55d81c46b207586445074dea5f8fa788ab0702e55518f8273e8b070ad63ec745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d81c46b207586445074dea5f8fa788ab0702e55518f8273e8b070ad63ec745->enter($__internal_55d81c46b207586445074dea5f8fa788ab0702e55518f8273e8b070ad63ec745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_security"));

        $__internal_669561fd26a9ca979f82be633f3bc930f85f1e0cc99e8edfd821b2f74c63e9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669561fd26a9ca979f82be633f3bc930f85f1e0cc99e8edfd821b2f74c63e9a5->enter($__internal_669561fd26a9ca979f82be633f3bc930f85f1e0cc99e8edfd821b2f74c63e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_security"));

        // line 161
        echo "
        ";
        
        $__internal_669561fd26a9ca979f82be633f3bc930f85f1e0cc99e8edfd821b2f74c63e9a5->leave($__internal_669561fd26a9ca979f82be633f3bc930f85f1e0cc99e8edfd821b2f74c63e9a5_prof);

        
        $__internal_55d81c46b207586445074dea5f8fa788ab0702e55518f8273e8b070ad63ec745->leave($__internal_55d81c46b207586445074dea5f8fa788ab0702e55518f8273e8b070ad63ec745_prof);

    }

    // line 170
    public function block_content($context, array $blocks = array())
    {
        $__internal_54ee54d631612c199332dc2af7a8392049feafbbe5f8e48b5de85a9c77c6ca58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ee54d631612c199332dc2af7a8392049feafbbe5f8e48b5de85a9c77c6ca58->enter($__internal_54ee54d631612c199332dc2af7a8392049feafbbe5f8e48b5de85a9c77c6ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_76495a86b103d1159ecf164d3d9a3cd843c278c85bcd0aec6afb61e0a5bce469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76495a86b103d1159ecf164d3d9a3cd843c278c85bcd0aec6afb61e0a5bce469->enter($__internal_76495a86b103d1159ecf164d3d9a3cd843c278c85bcd0aec6afb61e0a5bce469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 171
        echo "        <div class=\"col-md-9\">
        ";
        // line 172
        $this->displayBlock('adverts_list', $context, $blocks);
        // line 192
        echo "
          ";
        // line 193
        $this->displayBlock('contact', $context, $blocks);
        // line 194
        echo "        </div>
      ";
        
        $__internal_76495a86b103d1159ecf164d3d9a3cd843c278c85bcd0aec6afb61e0a5bce469->leave($__internal_76495a86b103d1159ecf164d3d9a3cd843c278c85bcd0aec6afb61e0a5bce469_prof);

        
        $__internal_54ee54d631612c199332dc2af7a8392049feafbbe5f8e48b5de85a9c77c6ca58->leave($__internal_54ee54d631612c199332dc2af7a8392049feafbbe5f8e48b5de85a9c77c6ca58_prof);

    }

    // line 172
    public function block_adverts_list($context, array $blocks = array())
    {
        $__internal_a1ba1853496123e69b94b9939ca13a1d2af0cee816ccc2ba3fc1e3290273167d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ba1853496123e69b94b9939ca13a1d2af0cee816ccc2ba3fc1e3290273167d->enter($__internal_a1ba1853496123e69b94b9939ca13a1d2af0cee816ccc2ba3fc1e3290273167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adverts_list"));

        $__internal_d3826e7f83e6d8586b459b42a5c65b8c2bbb41c61bfa2a4a06757536633be20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3826e7f83e6d8586b459b42a5c65b8c2bbb41c61bfa2a4a06757536633be20d->enter($__internal_d3826e7f83e6d8586b459b42a5c65b8c2bbb41c61bfa2a4a06757536633be20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adverts_list"));

        // line 173
        echo "              <div class=\"alert alert-success\">
             Concrètement, cela veut dire que vous ne devez pas faire la moindre requête SQL ailleurs que dans un repository, c'est la règle. <br/>
             <p>Doctrine Language Query DQL : SELECT a FROM OCPlatformBundle:Advert a;</p>
             <p>QueryBuilder : \$queryBuilder->select('a')->from('OCPlatformBundle', 'a')->andWhere('champ = 1');</p>
             <p>La méthode getResult() retourne toujours un tableau d'objets.getArrayResult() retourne lui un simple tableau de résultats et pas un objet.getScalair() retourne les résultats sous forme de valeurs.On peut utiliser cette méthode lorsqu'on a une valeur valeur à retourner comme avec SELECT COUNT(*) FROM ...
              \$values = \$qb-getQuery()->getScalairResult(); foreach(\$values as \$value) {
              \$value } getOneOrNullResult()<br>
             getSingleResult() retourne un seul résultat <br>
             getSingleScalairResult() retourne un résultat valeur <br>

           </p>
           <p>
             <h4>Conditions générales d'utilisations</h4>
             ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 187
            echo "                 <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("charte.donnee." . $context["i"])), "html", null, true);
            echo "</p>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "           </p>
          </div>
        ";
        
        $__internal_d3826e7f83e6d8586b459b42a5c65b8c2bbb41c61bfa2a4a06757536633be20d->leave($__internal_d3826e7f83e6d8586b459b42a5c65b8c2bbb41c61bfa2a4a06757536633be20d_prof);

        
        $__internal_a1ba1853496123e69b94b9939ca13a1d2af0cee816ccc2ba3fc1e3290273167d->leave($__internal_a1ba1853496123e69b94b9939ca13a1d2af0cee816ccc2ba3fc1e3290273167d_prof);

    }

    // line 193
    public function block_contact($context, array $blocks = array())
    {
        $__internal_a0235e6cda4c88ccd86f45c001d5948fbba947d942094976cce5718106ed59c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0235e6cda4c88ccd86f45c001d5948fbba947d942094976cce5718106ed59c6->enter($__internal_a0235e6cda4c88ccd86f45c001d5948fbba947d942094976cce5718106ed59c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_cf3ff0fdcc6a1166d01c0e6f6352129930be5b195babae5d08b151eeb485dc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3ff0fdcc6a1166d01c0e6f6352129930be5b195babae5d08b151eeb485dc79->enter($__internal_cf3ff0fdcc6a1166d01c0e6f6352129930be5b195babae5d08b151eeb485dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        
        $__internal_cf3ff0fdcc6a1166d01c0e6f6352129930be5b195babae5d08b151eeb485dc79->leave($__internal_cf3ff0fdcc6a1166d01c0e6f6352129930be5b195babae5d08b151eeb485dc79_prof);

        
        $__internal_a0235e6cda4c88ccd86f45c001d5948fbba947d942094976cce5718106ed59c6->leave($__internal_a0235e6cda4c88ccd86f45c001d5948fbba947d942094976cce5718106ed59c6_prof);

    }

    // line 196
    public function block_annonces($context, array $blocks = array())
    {
        $__internal_6512baad8dfdc4c26d6819dddb47c1940150fbdfb467f8f38999a7635420e3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6512baad8dfdc4c26d6819dddb47c1940150fbdfb467f8f38999a7635420e3a5->enter($__internal_6512baad8dfdc4c26d6819dddb47c1940150fbdfb467f8f38999a7635420e3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        $__internal_974df8dc097d3300b82552849b9f31bea1ae85c43ddf3d76e224d36d97424674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974df8dc097d3300b82552849b9f31bea1ae85c43ddf3d76e224d36d97424674->enter($__internal_974df8dc097d3300b82552849b9f31bea1ae85c43ddf3d76e224d36d97424674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "annonces"));

        
        $__internal_974df8dc097d3300b82552849b9f31bea1ae85c43ddf3d76e224d36d97424674->leave($__internal_974df8dc097d3300b82552849b9f31bea1ae85c43ddf3d76e224d36d97424674_prof);

        
        $__internal_6512baad8dfdc4c26d6819dddb47c1940150fbdfb467f8f38999a7635420e3a5->leave($__internal_6512baad8dfdc4c26d6819dddb47c1940150fbdfb467f8f38999a7635420e3a5_prof);

    }

    // line 199
    public function block_body($context, array $blocks = array())
    {
        $__internal_5899a2f8637a41c4a1ce04f36eafa3008270e1aa0236547f8d9bf9b3d4916448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5899a2f8637a41c4a1ce04f36eafa3008270e1aa0236547f8d9bf9b3d4916448->enter($__internal_5899a2f8637a41c4a1ce04f36eafa3008270e1aa0236547f8d9bf9b3d4916448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32116175f05612f59a5f03e3f9987a3e2275113b3ed0f9dd14d6e6713d863f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32116175f05612f59a5f03e3f9987a3e2275113b3ed0f9dd14d6e6713d863f2c->enter($__internal_32116175f05612f59a5f03e3f9987a3e2275113b3ed0f9dd14d6e6713d863f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 200
        echo "        ";
        
        $__internal_32116175f05612f59a5f03e3f9987a3e2275113b3ed0f9dd14d6e6713d863f2c->leave($__internal_32116175f05612f59a5f03e3f9987a3e2275113b3ed0f9dd14d6e6713d863f2c_prof);

        
        $__internal_5899a2f8637a41c4a1ce04f36eafa3008270e1aa0236547f8d9bf9b3d4916448->leave($__internal_5899a2f8637a41c4a1ce04f36eafa3008270e1aa0236547f8d9bf9b3d4916448_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  884 => 200,  875 => 199,  858 => 196,  841 => 193,  829 => 189,  820 => 187,  816 => 186,  801 => 173,  792 => 172,  781 => 194,  779 => 193,  776 => 192,  774 => 172,  771 => 171,  762 => 170,  751 => 161,  742 => 160,  730 => 201,  728 => 199,  724 => 197,  721 => 196,  719 => 170,  714 => 168,  707 => 163,  705 => 160,  698 => 155,  689 => 154,  678 => 110,  669 => 109,  658 => 103,  655 => 99,  646 => 98,  635 => 91,  626 => 90,  615 => 84,  606 => 83,  595 => 73,  586 => 72,  556 => 55,  553 => 54,  544 => 53,  530 => 61,  527 => 53,  518 => 46,  512 => 45,  506 => 44,  500 => 43,  493 => 39,  482 => 30,  473 => 29,  462 => 15,  460 => 14,  451 => 13,  440 => 10,  431 => 9,  413 => 8,  330 => 238,  314 => 224,  270 => 221,  265 => 215,  256 => 208,  250 => 204,  248 => 154,  238 => 149,  232 => 147,  226 => 144,  221 => 143,  218 => 142,  212 => 135,  206 => 132,  202 => 131,  195 => 128,  192 => 124,  187 => 122,  183 => 120,  177 => 118,  172 => 116,  167 => 115,  165 => 114,  156 => 113,  153 => 112,  150 => 109,  148 => 108,  143 => 105,  141 => 98,  134 => 93,  132 => 90,  126 => 86,  124 => 83,  114 => 75,  112 => 72,  103 => 65,  101 => 29,  94 => 24,  68 => 22,  64 => 18,  61 => 17,  59 => 13,  56 => 12,  54 => 9,  50 => 8,  42 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>
  {% block favicon %}
      <link rel=\"icon\" href=\"https://bolt.cm/theme/bolt-v300/images/symfony_logo.png?59b03a9be7\" type=\"image/png\" />
  {% endblock %}

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">   
  {% endblock %}

  {% stylesheets filter='cssrewrite, ?scssphp'
    'bundles/ocplatform/css/*'
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'
  %}
  <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
  {% endstylesheets %}

</head>

<body>

    {% block navbar %}
           <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
           <a class=\"navbar-brand\"> {{ \"OCPlatformEchange\"|trans }} </a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
           <li role=\"presentation\"> <a href=\"{{ path('oc_core_homepage') }}\" > {{ 'Home'|trans }}</a></li>
            <li role=\"presentation\"><a href=\"{{ path('oc_platform_home') }}\">{{ 'Go to the platform'|trans }}</a></li>
            <li><a href=\"{{ path('oc_platform_list_adverts') }}\">{{ 'List adverts with applicants'|trans }}</a></li>
            <li role=\"presentation\"><a href=\"{{ path('oc_core_contactpage') }}\">{{ 'Contact'|trans }}</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>

        {# Un champ de recherche à insérer ici 
        style=\"position: absolute; margin-top: 24px; top: 25px; left: 351px; width: 19%; border-radius: 0px\"
        #}
        {% block searchbox %}
            <form action=\"\" class=\"navbar-form navbar-right\" >
                <input type=\"text\" class=\"form-control\" style=\"border-radius: 0; color:rbg(117, 2, 42)\"; placeholder=\" {% if listAdverts is defined %} {% if listAdverts|length == 0 %} Aucune annonce pour le moment  {% elseif listAdverts|length == 1%} Chercher l'annonce disponible {% else %} {{ listAdverts|length }} disponibles{% endif %} {% else %} Entrer votre recherche ici{% endif %}\"; width=\"60%\" id=\"searchbox\">
            </form>
            <div id=\"display-results\">

            </div>
        {% endblock %}

        </div>
      </div>
    </nav>
     {% endblock %}       

  <div class=\"container-fluid\">
  <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\" style=\"margin-top: -50px\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"#\">Annonces <span class=\"sr-only\">(current)</span></a></li>
              {% block advert_side %}
                  
              {% endblock %}
          </ul>
         
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\" style=\"margin-top: -690px\">
          <h1 class=\"page-header\">Annonces en vrac</h1>

          <div class=\"row placeholders\">
          
          {% block advert_vrac %}
              
          {% endblock %}
                        
          </div>

          <h2 class=\"sub-header\">Annonces</h2>
          {% block annonces_for_table %}
              
          {% endblock %}
          
        </div>
      </div>


    {% block flashBag %}
      <div>
    {# for message in app.session.flashbag.get('info') %}
      <div class=\"alert alert-info\" role=\"alert\"><strong>Message flash :: </strong>  {{ message }} </div>
    {% endfor #}
  </div>
    {% endblock %}


    <div id=\"header\" class=\"jumbotron\" style=\"margin-top: 80px; border-radius: 0\">
    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
    {% block form_login_box %}

    {% endblock %}
    {% endif %}
     <p> {{ \"Aujourd'hui nous sommes le\"|trans }} {{ 'now'|localizeddate('full', 'none') }} et il est {{ 'now'|localizeddate('none', 'medium') }} <br>
       {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            Connecté en tant que {{ app.user.username }} <br>
            <a href=\"{{ path('fos_user_security_logout') }}\"> Se déconnecter </a>
            {% else %}
             <a href=\"{{ path('fos_user_security_login') }}\"> Se connecter </a>
            {% endif %}
     </p>
     <hr>
      <h1> {% trans %}<div id=\"secretary-text\">My advert online support </div>{% endtrans %}</h1>
      <p>
          {% trans %}
        This project is lead by Symfony,
        and build with MOOC OpenClassrooms and SensioLabs.
          {% endtrans %}
          {{ 'site.devise'|trans }}
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('oc_platform_purge', {'days': 20}) }}\" style=\"border-radius: 5\" target=\"_blank\">
          {{ 'Delete adverts without applicants'|trans }} »
        </a>
         <a class=\"btn btn-success btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/creer-des-formulaires-avec-symfony\" target=\"_blank\" style=\"border-radius: 5px\">
          {{ 'Participate with MOOC'|trans  }} »
        </a>

        {# On n'affiche le lien d'ajout d'annonces qu'aux auteurs et admins évidemment
         IS_GRANTED() EST UN RACCOURCI POUR EXECUTER isGranted() du
          service security.authorization_checker
          #}
        {% if is_granted('ROLE_AUTEUR') %}
        <a class=\"btn btn-danger btn-lg\" href=\"{{ path('oc_platform_add')}}\" style=\"border-radius: 5px\">
           {{ 'Add advert'|trans({}, 'messages')  }} +
        </a>
        {% endif %}
        <a href=\"http://localhost/Sf/web/app_dev.php/_console\" class=\"btn btn-default btn-lg\" target=\"_blank\" style=\"border-radius: 5px\">{{ 'Console'|trans({}, 'messages') }}</a>

         <a href=\"{{ path('oc_course_homepage')}}\" class=\"btn btn-info btn-lg\" target=\"_blank\" style=\"border-radius: 5px\">{{ 'Course'|trans({}, 'messages') }}</a>

      </p>
    </div>

    {% block displayAdverts %}
    <div class=\"row\">
      <div class=\"col-sm-3\">

      </div>
      <div class=\"col-sm-9\">
        {% block form_security %}

        {% endblock %}
      </div>
    </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
           <h4>Dernières annonces - Platforme - Annonces</h4>
           {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 16})) }}        
        </div>
        {% block content %}
        <div class=\"col-md-9\">
        {% block adverts_list %}
              <div class=\"alert alert-success\">
             Concrètement, cela veut dire que vous ne devez pas faire la moindre requête SQL ailleurs que dans un repository, c'est la règle. <br/>
             <p>Doctrine Language Query DQL : SELECT a FROM OCPlatformBundle:Advert a;</p>
             <p>QueryBuilder : \$queryBuilder->select('a')->from('OCPlatformBundle', 'a')->andWhere('champ = 1');</p>
             <p>La méthode getResult() retourne toujours un tableau d'objets.getArrayResult() retourne lui un simple tableau de résultats et pas un objet.getScalair() retourne les résultats sous forme de valeurs.On peut utiliser cette méthode lorsqu'on a une valeur valeur à retourner comme avec SELECT COUNT(*) FROM ...
              \$values = \$qb-getQuery()->getScalairResult(); foreach(\$values as \$value) {
              \$value } getOneOrNullResult()<br>
             getSingleResult() retourne un seul résultat <br>
             getSingleScalairResult() retourne un résultat valeur <br>

           </p>
           <p>
             <h4>Conditions générales d'utilisations</h4>
             {% for i in 0..2 %}
                 <p>{{('charte.donnee.' ~ i )|trans }}</p>
             {% endfor %}
           </p>
          </div>
        {% endblock %}

          {% block contact %}{% endblock %}
        </div>
      {% endblock %}
        {% block annonces %}{% endblock %}

      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>
    {% endblock %}

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.&nbsp;
      2017-Ousmane ALASSANE - Dév Python -Symfony-Laravel-soon </p>

    </footer>
  </div>

{#   'https://use.fontawesome.com/2f2399c73e.js'#}
  {% javascripts filter='jsqueeze'
    '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'
    'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js'
    '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'  
    'bundles/ocplatform/js/*'
   %}
  <script src={{ asset_url }} type=\"text/javascript\"></script>
  
  {% endjavascripts %}

 <script>
 \$(document).ready(function()
 {
   
   \$('input#searchbox').on('keyup', function()
  {
      var query = \$(this).val();
     

       if(query.length > 0)
       {
           \$.ajax({
               type: 'POST',
               url: \"{{ path('oc_platform_search_ajax') }}\",
               data: {
                   query: query
               },
               beforeSend: function()
               {
                   \$('#display-results').html(' <span style=\"margin-left: 50px\" id=\"spinner\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i>&nbsp;Recherche en cours</span>').show();
               },
               error: function () {
                   \$('#display-results').html(' <span style=\"margin-left: 50px\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i>&nbsp;Recherche en cours</span>').show();

               },
               success: function(data) {
                if(data != ' ') {
                  \$('#display-results').html(data).show().css('width', '246px');
                  \$('#spinner').hide();
                    \$('.display-box-advert').css({
                        'padding': '4px',
                        'border-top': '1px solid #dedede',
                        'hauteur': '70px',
                        'font-size': '14px',
                        'background-color': 'white',
                        'position': 'relative',
                        'display': 'block'
                    });
                    \$('.display-box-advert').on('mouseenter', function () {

                        \$(this).css({
                            'background-color': '#3b5998',
                            'color': 'white',
                            'cursor': 'pointer'
                        });
                    });
                    \$('.display-box-advert a').css({
                        'color': '#333',
                        'text-decoration': 'none'
                    });
                    \$('.display-box-advert a').on('mouseenter', function() {
                        \$(this).css({
                            'color': 'white',
                            'text-decoration': 'none'
                        });
                    });
                    \$('.display-box-advert a').on('mouseleave', function() {
                        \$(this).css({
                            'color': '#333',
                            'text-decoration': 'none'
                        });
                    });

                    \$('.display-box-advert').on('mouseleave', function () {

                        \$(this).css({
                            'background-color': '#fff',
                            'color': 'black'
                        });


                    });
                } else {
                    \$('#display-results').html(' <span style=\"margin-left: 70px\"><i class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Recherche en cours</span>').show();

                }
               }
           });
       }

  });
 });
 </script>
 
</body>
</html>", "OCCoreBundle::layout.html.twig", "/opt/lampp/htdocs/Sf/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
