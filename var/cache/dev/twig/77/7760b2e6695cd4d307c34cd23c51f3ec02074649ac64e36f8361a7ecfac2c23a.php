<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_6be1c5c05b6a0f3fef20e7fc4d74fcf67ee74a2040f83c6c6f6df2f502371a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0a6a941386f693f4ca9e3b9aabc4ab53c996c2ebeda5181d9f95d41c9f46e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a6a941386f693f4ca9e3b9aabc4ab53c996c2ebeda5181d9f95d41c9f46e3a->enter($__internal_e0a6a941386f693f4ca9e3b9aabc4ab53c996c2ebeda5181d9f95d41c9f46e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_f4c38a5c641c99758e8a0081fd2cddd95116be11409d35350006f75b23f62812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c38a5c641c99758e8a0081fd2cddd95116be11409d35350006f75b23f62812->enter($__internal_f4c38a5c641c99758e8a0081fd2cddd95116be11409d35350006f75b23f62812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a6a941386f693f4ca9e3b9aabc4ab53c996c2ebeda5181d9f95d41c9f46e3a->leave($__internal_e0a6a941386f693f4ca9e3b9aabc4ab53c996c2ebeda5181d9f95d41c9f46e3a_prof);

        
        $__internal_f4c38a5c641c99758e8a0081fd2cddd95116be11409d35350006f75b23f62812->leave($__internal_f4c38a5c641c99758e8a0081fd2cddd95116be11409d35350006f75b23f62812_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1deaf1bf2c3d89408d3d4dc4cfe6ac42486bdc5d5cb9a8b4c1c759a14668065e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deaf1bf2c3d89408d3d4dc4cfe6ac42486bdc5d5cb9a8b4c1c759a14668065e->enter($__internal_1deaf1bf2c3d89408d3d4dc4cfe6ac42486bdc5d5cb9a8b4c1c759a14668065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_608088dd8ce02f70eb6b0b050102d2f13d4e6216716ec5ba7d696c795a872eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608088dd8ce02f70eb6b0b050102d2f13d4e6216716ec5ba7d696c795a872eae->enter($__internal_608088dd8ce02f70eb6b0b050102d2f13d4e6216716ec5ba7d696c795a872eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_608088dd8ce02f70eb6b0b050102d2f13d4e6216716ec5ba7d696c795a872eae->leave($__internal_608088dd8ce02f70eb6b0b050102d2f13d4e6216716ec5ba7d696c795a872eae_prof);

        
        $__internal_1deaf1bf2c3d89408d3d4dc4cfe6ac42486bdc5d5cb9a8b4c1c759a14668065e->leave($__internal_1deaf1bf2c3d89408d3d4dc4cfe6ac42486bdc5d5cb9a8b4c1c759a14668065e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_faa50235d5981e2b3f25b65af20ddb8977a003a269cf14c3c6cd628672b305b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa50235d5981e2b3f25b65af20ddb8977a003a269cf14c3c6cd628672b305b6->enter($__internal_faa50235d5981e2b3f25b65af20ddb8977a003a269cf14c3c6cd628672b305b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e3a3f5f3bebab4299c37cfc8e49525e37d41bd50fca30314554d83026a44a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3a3f5f3bebab4299c37cfc8e49525e37d41bd50fca30314554d83026a44a15->enter($__internal_4e3a3f5f3bebab4299c37cfc8e49525e37d41bd50fca30314554d83026a44a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_4e3a3f5f3bebab4299c37cfc8e49525e37d41bd50fca30314554d83026a44a15->leave($__internal_4e3a3f5f3bebab4299c37cfc8e49525e37d41bd50fca30314554d83026a44a15_prof);

        
        $__internal_faa50235d5981e2b3f25b65af20ddb8977a003a269cf14c3c6cd628672b305b6->leave($__internal_faa50235d5981e2b3f25b65af20ddb8977a003a269cf14c3c6cd628672b305b6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36477028b0368a865bcd0bf841ff8a7fccbfde06f9b3c8cd222a0d00acec943b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36477028b0368a865bcd0bf841ff8a7fccbfde06f9b3c8cd222a0d00acec943b->enter($__internal_36477028b0368a865bcd0bf841ff8a7fccbfde06f9b3c8cd222a0d00acec943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_021efe6176fbe19b6a674e0c518748f9857835e4c0035494e9a1af71e641570d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021efe6176fbe19b6a674e0c518748f9857835e4c0035494e9a1af71e641570d->enter($__internal_021efe6176fbe19b6a674e0c518748f9857835e4c0035494e9a1af71e641570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_021efe6176fbe19b6a674e0c518748f9857835e4c0035494e9a1af71e641570d->leave($__internal_021efe6176fbe19b6a674e0c518748f9857835e4c0035494e9a1af71e641570d_prof);

        
        $__internal_36477028b0368a865bcd0bf841ff8a7fccbfde06f9b3c8cd222a0d00acec943b->leave($__internal_36477028b0368a865bcd0bf841ff8a7fccbfde06f9b3c8cd222a0d00acec943b_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6c2fd21668982d06e680f32eacece6ffae6c7b753fcb123894ab3b49324c242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c2fd21668982d06e680f32eacece6ffae6c7b753fcb123894ab3b49324c242->enter($__internal_f6c2fd21668982d06e680f32eacece6ffae6c7b753fcb123894ab3b49324c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_78d44d01b0c7bcf816eb77fb7663399bd51c575c5d2f2d98242598c4dbcc6a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d44d01b0c7bcf816eb77fb7663399bd51c575c5d2f2d98242598c4dbcc6a2f->enter($__internal_78d44d01b0c7bcf816eb77fb7663399bd51c575c5d2f2d98242598c4dbcc6a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter(($context["commands"] ?? $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, ($context["environment"] ?? $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_78d44d01b0c7bcf816eb77fb7663399bd51c575c5d2f2d98242598c4dbcc6a2f->leave($__internal_78d44d01b0c7bcf816eb77fb7663399bd51c575c5d2f2d98242598c4dbcc6a2f_prof);

        
        $__internal_f6c2fd21668982d06e680f32eacece6ffae6c7b753fcb123894ab3b49324c242->leave($__internal_f6c2fd21668982d06e680f32eacece6ffae6c7b753fcb123894ab3b49324c242_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "/opt/lampp/htdocs/Sf/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
