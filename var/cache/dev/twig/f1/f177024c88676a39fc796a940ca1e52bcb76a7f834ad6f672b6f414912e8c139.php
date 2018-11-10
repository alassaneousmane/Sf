<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_eeb8bfd42ab306f0b0d88f97aea013c3e7b7fe47e63b51d26776f0b27862e54f extends Twig_Template
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
        $__internal_4a72b23ddf337053f4a003d8ed2e1cfdc1da881e56b943ff9bc09ec842b2929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a72b23ddf337053f4a003d8ed2e1cfdc1da881e56b943ff9bc09ec842b2929d->enter($__internal_4a72b23ddf337053f4a003d8ed2e1cfdc1da881e56b943ff9bc09ec842b2929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_5f9619428373778aa289c9b2cd112fcbf434d992e81c7c17a775072424a7eafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9619428373778aa289c9b2cd112fcbf434d992e81c7c17a775072424a7eafd->enter($__internal_5f9619428373778aa289c9b2cd112fcbf434d992e81c7c17a775072424a7eafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 2
        echo "
<!doctype html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css\">
    <title> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => "ALASSANE", "%prenom%" => "Ousmane"), "messages"), "html", null, true);
        echo "</title>
</head>
<body style=\"margin-top: 20px;\">

<h1>  ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => "ALASSANE", "%prenom%" => "Ousmane"), "messages"), "html", null, true);
        echo " <br>
</h1>

";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bye"), "html", null, true);
        echo "

<p>
 ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bonjour", array(), "messages"), "html", null, true);
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Translate this text in french", array(), "messages");
        // line 25
        echo "</p>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js\"></script>
</body>
</html>";
        
        $__internal_4a72b23ddf337053f4a003d8ed2e1cfdc1da881e56b943ff9bc09ec842b2929d->leave($__internal_4a72b23ddf337053f4a003d8ed2e1cfdc1da881e56b943ff9bc09ec842b2929d_prof);

        
        $__internal_5f9619428373778aa289c9b2cd112fcbf434d992e81c7c17a775072424a7eafd->leave($__internal_5f9619428373778aa289c9b2cd112fcbf434d992e81c7c17a775072424a7eafd_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  59 => 22,  55 => 21,  49 => 18,  43 => 15,  36 => 11,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig #}

<!doctype html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css\">
    <title> {{ 'Hello'|trans({'%name%': 'ALASSANE', '%prenom%': 'Ousmane' }, 'messages' ) }}</title>
</head>
<body style=\"margin-top: 20px;\">

<h1>  {{ 'Hello'|trans({'%name%': 'ALASSANE', '%prenom%': 'Ousmane' }, 'messages') }} <br>
</h1>

{{ 'Bye'|trans }}

<p>
 {{ 'Bonjour'|trans({}, 'messages')}}
    {% trans from 'messages' %}
        Translate this text in french
    {% endtrans %}
</p>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js\"></script>
</body>
</html>", "OCPlatformBundle:Advert:translation.html.twig", "/opt/lampp/htdocs/Sf/src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
