<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_4a4df724b6ccbddda09113eb1947714526827d0d73e061b4c0f334179725c8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94ccc1469acd7784f53083231bc3b77f89f2fc3d47166632574eb7f93eff68a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ccc1469acd7784f53083231bc3b77f89f2fc3d47166632574eb7f93eff68a7->enter($__internal_94ccc1469acd7784f53083231bc3b77f89f2fc3d47166632574eb7f93eff68a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_88343cf43aaf0defd9fd2904c34634a5779e4951092b1672759e950d2e1ad667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88343cf43aaf0defd9fd2904c34634a5779e4951092b1672759e950d2e1ad667->enter($__internal_88343cf43aaf0defd9fd2904c34634a5779e4951092b1672759e950d2e1ad667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_94ccc1469acd7784f53083231bc3b77f89f2fc3d47166632574eb7f93eff68a7->leave($__internal_94ccc1469acd7784f53083231bc3b77f89f2fc3d47166632574eb7f93eff68a7_prof);

        
        $__internal_88343cf43aaf0defd9fd2904c34634a5779e4951092b1672759e950d2e1ad667->leave($__internal_88343cf43aaf0defd9fd2904c34634a5779e4951092b1672759e950d2e1ad667_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa16067c41eb0738774afed2fb7d5b5dd2b8fff78e687ccb009c63cccf77146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa16067c41eb0738774afed2fb7d5b5dd2b8fff78e687ccb009c63cccf77146->enter($__internal_1fa16067c41eb0738774afed2fb7d5b5dd2b8fff78e687ccb009c63cccf77146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f803410f64c27c2a5e09cbe5b1a22778da686d52bee87441c200672e9adca71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f803410f64c27c2a5e09cbe5b1a22778da686d52bee87441c200672e9adca71->enter($__internal_4f803410f64c27c2a5e09cbe5b1a22778da686d52bee87441c200672e9adca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_4f803410f64c27c2a5e09cbe5b1a22778da686d52bee87441c200672e9adca71->leave($__internal_4f803410f64c27c2a5e09cbe5b1a22778da686d52bee87441c200672e9adca71_prof);

        
        $__internal_1fa16067c41eb0738774afed2fb7d5b5dd2b8fff78e687ccb009c63cccf77146->leave($__internal_1fa16067c41eb0738774afed2fb7d5b5dd2b8fff78e687ccb009c63cccf77146_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1aa4fa78ae23fd2ef4b40f0d977a004a92d610a5ed69bb43a059bc3aba6a5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1aa4fa78ae23fd2ef4b40f0d977a004a92d610a5ed69bb43a059bc3aba6a5e8->enter($__internal_d1aa4fa78ae23fd2ef4b40f0d977a004a92d610a5ed69bb43a059bc3aba6a5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_47513866377d4b84b61e186cfcc53a21133aee0710440bead8f47411a7e18600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47513866377d4b84b61e186cfcc53a21133aee0710440bead8f47411a7e18600->enter($__internal_47513866377d4b84b61e186cfcc53a21133aee0710440bead8f47411a7e18600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_47513866377d4b84b61e186cfcc53a21133aee0710440bead8f47411a7e18600->leave($__internal_47513866377d4b84b61e186cfcc53a21133aee0710440bead8f47411a7e18600_prof);

        
        $__internal_d1aa4fa78ae23fd2ef4b40f0d977a004a92d610a5ed69bb43a059bc3aba6a5e8->leave($__internal_d1aa4fa78ae23fd2ef4b40f0d977a004a92d610a5ed69bb43a059bc3aba6a5e8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_20538ebef0ed3eb2675c52d93a9ad6179098d66b0d6535a915692c9fd2d3c4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20538ebef0ed3eb2675c52d93a9ad6179098d66b0d6535a915692c9fd2d3c4bf->enter($__internal_20538ebef0ed3eb2675c52d93a9ad6179098d66b0d6535a915692c9fd2d3c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7403c03b0b56210ddcbf8d6b8b7d1ea0112568a74eaacd48e7f5f34981ff4eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7403c03b0b56210ddcbf8d6b8b7d1ea0112568a74eaacd48e7f5f34981ff4eed->enter($__internal_7403c03b0b56210ddcbf8d6b8b7d1ea0112568a74eaacd48e7f5f34981ff4eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_7403c03b0b56210ddcbf8d6b8b7d1ea0112568a74eaacd48e7f5f34981ff4eed->leave($__internal_7403c03b0b56210ddcbf8d6b8b7d1ea0112568a74eaacd48e7f5f34981ff4eed_prof);

        
        $__internal_20538ebef0ed3eb2675c52d93a9ad6179098d66b0d6535a915692c9fd2d3c4bf->leave($__internal_20538ebef0ed3eb2675c52d93a9ad6179098d66b0d6535a915692c9fd2d3c4bf_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d77621d816609af275395454f20f93061b0c74b6310d599feaf5b7863a9dc221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77621d816609af275395454f20f93061b0c74b6310d599feaf5b7863a9dc221->enter($__internal_d77621d816609af275395454f20f93061b0c74b6310d599feaf5b7863a9dc221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d479ec4c63ffd4a7419d703f9edc8602ae4d12a3297c2c02e8a690571cd2bda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d479ec4c63ffd4a7419d703f9edc8602ae4d12a3297c2c02e8a690571cd2bda5->enter($__internal_d479ec4c63ffd4a7419d703f9edc8602ae4d12a3297c2c02e8a690571cd2bda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_d479ec4c63ffd4a7419d703f9edc8602ae4d12a3297c2c02e8a690571cd2bda5->leave($__internal_d479ec4c63ffd4a7419d703f9edc8602ae4d12a3297c2c02e8a690571cd2bda5_prof);

        
        $__internal_d77621d816609af275395454f20f93061b0c74b6310d599feaf5b7863a9dc221->leave($__internal_d77621d816609af275395454f20f93061b0c74b6310d599feaf5b7863a9dc221_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/opt/lampp/htdocs/Sf/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
