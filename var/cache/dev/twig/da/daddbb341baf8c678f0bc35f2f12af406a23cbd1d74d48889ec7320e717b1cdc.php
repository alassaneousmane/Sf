<?php

/* OCCoreBundle::layout2.html.twig */
class __TwigTemplate_7cf3902706ea46cfdb51f6227a6fd94c363af059f1c7f837a99e351b152281f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b676522f469892a03c1bb384d5c293a5aa18145949d3ed41acd4e211f564efd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b676522f469892a03c1bb384d5c293a5aa18145949d3ed41acd4e211f564efd4->enter($__internal_b676522f469892a03c1bb384d5c293a5aa18145949d3ed41acd4e211f564efd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout2.html.twig"));

        $__internal_f1c0f55e421c85eea7d0e46192e28e93d9dc7f869db508a32168c38525ff0ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c0f55e421c85eea7d0e46192e28e93d9dc7f869db508a32168c38525ff0ded->enter($__internal_f1c0f55e421c85eea7d0e46192e28e93d9dc7f869db508a32168c38525ff0ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout2.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 10
        $this->displayBlock('favicon', $context, $blocks);
        // line 13
        echo "
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
  ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a1d1df5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a1d1df5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a1d1df5_part_1_dashboard_1.css");
            // line 23
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
        // line 25
        echo "
</head>

  <body>

    <div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">OC Platforme</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li role=\"presentation\" class=\"active\"> <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_homepage");
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
                  <li role=\"presentation\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to the platform"), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_list_adverts");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List adverts with applicants"), "html", null, true);
        echo "</a></li>
                  <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_contactpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact"), "html", null, true);
        echo "</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">Cover your page.</h1>
            <p class=\"lead\">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class=\"lead\">
              <a href=\"#\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
          </div>

          <div class=\"mastfoot\">
            <div class=\"inner\">
              <p>Cover template for <a href=\"http://getbootstrap.com\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     ";
        // line 73
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "be7a92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_jquery.min_1.js");
            // line 79
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
            // asset "be7a92b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_jquery-ui.min_2.js");
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
            // asset "be7a92b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_bootstrap.min_3.js");
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
            // asset "be7a92b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_part_4_holder.min_1.js");
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
            // asset "be7a92b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b_part_4_main_2.js");
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
        } else {
            // asset "be7a92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_be7a92b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/be7a92b.js");
            echo "            <script src=";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo " type=\"text/javascript\"></script>  
   ";
        }
        unset($context["asset_url"]);
        // line 81
        echo "  </body>
</html>
";
        
        $__internal_b676522f469892a03c1bb384d5c293a5aa18145949d3ed41acd4e211f564efd4->leave($__internal_b676522f469892a03c1bb384d5c293a5aa18145949d3ed41acd4e211f564efd4_prof);

        
        $__internal_f1c0f55e421c85eea7d0e46192e28e93d9dc7f869db508a32168c38525ff0ded->leave($__internal_f1c0f55e421c85eea7d0e46192e28e93d9dc7f869db508a32168c38525ff0ded_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dfa5bd3ac03b8207fb2743842c58acc348f8a1e7bbd153000563ecae32f5703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa5bd3ac03b8207fb2743842c58acc348f8a1e7bbd153000563ecae32f5703->enter($__internal_7dfa5bd3ac03b8207fb2743842c58acc348f8a1e7bbd153000563ecae32f5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f7858da0a8a1fdd193751b33df6dfd236a4f4e70a988401d9f15264d2350f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7858da0a8a1fdd193751b33df6dfd236a4f4e70a988401d9f15264d2350f08->enter($__internal_4f7858da0a8a1fdd193751b33df6dfd236a4f4e70a988401d9f15264d2350f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4f7858da0a8a1fdd193751b33df6dfd236a4f4e70a988401d9f15264d2350f08->leave($__internal_4f7858da0a8a1fdd193751b33df6dfd236a4f4e70a988401d9f15264d2350f08_prof);

        
        $__internal_7dfa5bd3ac03b8207fb2743842c58acc348f8a1e7bbd153000563ecae32f5703->leave($__internal_7dfa5bd3ac03b8207fb2743842c58acc348f8a1e7bbd153000563ecae32f5703_prof);

    }

    // line 10
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_7ab3322bd40931abfbf6e825e953825b1775fbafbc843d9ee54ea1b59a4b7335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab3322bd40931abfbf6e825e953825b1775fbafbc843d9ee54ea1b59a4b7335->enter($__internal_7ab3322bd40931abfbf6e825e953825b1775fbafbc843d9ee54ea1b59a4b7335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        $__internal_7a43cea2f0b1ed01050d9047400974f0d4a5baed913a15864be933d175edf627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43cea2f0b1ed01050d9047400974f0d4a5baed913a15864be933d175edf627->enter($__internal_7a43cea2f0b1ed01050d9047400974f0d4a5baed913a15864be933d175edf627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 11
        echo "      <link rel=\"icon\" href=\"https://bolt.cm/theme/bolt-v300/images/symfony_logo.png?59b03a9be7\" type=\"image/png\" />
  ";
        
        $__internal_7a43cea2f0b1ed01050d9047400974f0d4a5baed913a15864be933d175edf627->leave($__internal_7a43cea2f0b1ed01050d9047400974f0d4a5baed913a15864be933d175edf627_prof);

        
        $__internal_7ab3322bd40931abfbf6e825e953825b1775fbafbc843d9ee54ea1b59a4b7335->leave($__internal_7ab3322bd40931abfbf6e825e953825b1775fbafbc843d9ee54ea1b59a4b7335_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23eab91758bcd43f15497b91c3fdc7dcf6ad73726d65d6ac1dfa0caf5dfcf1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23eab91758bcd43f15497b91c3fdc7dcf6ad73726d65d6ac1dfa0caf5dfcf1ed->enter($__internal_23eab91758bcd43f15497b91c3fdc7dcf6ad73726d65d6ac1dfa0caf5dfcf1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_218c8a7747ab62ab4d3550e6dbc88ed8fb261265fc68276debc26032b0342ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218c8a7747ab62ab4d3550e6dbc88ed8fb261265fc68276debc26032b0342ac3->enter($__internal_218c8a7747ab62ab4d3550e6dbc88ed8fb261265fc68276debc26032b0342ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">   
  ";
        
        $__internal_218c8a7747ab62ab4d3550e6dbc88ed8fb261265fc68276debc26032b0342ac3->leave($__internal_218c8a7747ab62ab4d3550e6dbc88ed8fb261265fc68276debc26032b0342ac3_prof);

        
        $__internal_23eab91758bcd43f15497b91c3fdc7dcf6ad73726d65d6ac1dfa0caf5dfcf1ed->leave($__internal_23eab91758bcd43f15497b91c3fdc7dcf6ad73726d65d6ac1dfa0caf5dfcf1ed_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 16,  252 => 15,  243 => 14,  232 => 11,  223 => 10,  205 => 9,  193 => 81,  155 => 79,  151 => 73,  117 => 44,  111 => 43,  105 => 42,  99 => 41,  81 => 25,  55 => 23,  51 => 19,  48 => 18,  46 => 14,  43 => 13,  41 => 10,  37 => 9,  28 => 2,);
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

    <div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">OC Platforme</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li role=\"presentation\" class=\"active\"> <a href=\"{{ path('oc_core_homepage') }}\" > {{ 'Home'|trans }}</a></li>
                  <li role=\"presentation\"><a href=\"{{ path('oc_platform_home') }}\">{{ 'Go to the platform'|trans }}</a></li>
                  <li><a href=\"{{ path('oc_platform_list_adverts') }}\">{{ 'List adverts with applicants'|trans }}</a></li>
                  <li role=\"presentation\"><a href=\"{{ path('oc_core_contactpage') }}\">{{ 'Contact'|trans }}</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">Cover your page.</h1>
            <p class=\"lead\">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class=\"lead\">
              <a href=\"#\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
          </div>

          <div class=\"mastfoot\">
            <div class=\"inner\">
              <p>Cover template for <a href=\"http://getbootstrap.com\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     {% javascripts filter='jsqueeze'
          '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'
          'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js'
          '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'  
          'bundles/ocplatform/js/*'
         %}
            <script src={{ asset_url }} type=\"text/javascript\"></script>  
   {% endjavascripts %}
  </body>
</html>
", "OCCoreBundle::layout2.html.twig", "/opt/lampp/htdocs/Sf/src/OC/CoreBundle/Resources/views/layout2.html.twig");
    }
}
