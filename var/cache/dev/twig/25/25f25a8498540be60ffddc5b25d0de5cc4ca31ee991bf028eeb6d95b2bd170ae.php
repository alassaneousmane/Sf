<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0344c67406a264f87e7d39e7aaa750f4c30a66043193179d135b2c777a4b69e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04cd3fae3d6eb51e82d7dfb60191c61bf4dea01c797471038b0576bfe7ac84b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cd3fae3d6eb51e82d7dfb60191c61bf4dea01c797471038b0576bfe7ac84b0->enter($__internal_04cd3fae3d6eb51e82d7dfb60191c61bf4dea01c797471038b0576bfe7ac84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_88db4bdb32a56ab123fbac8311f9c3652fd9541b6f8a4db65ca5302b09c740d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88db4bdb32a56ab123fbac8311f9c3652fd9541b6f8a4db65ca5302b09c740d4->enter($__internal_88db4bdb32a56ab123fbac8311f9c3652fd9541b6f8a4db65ca5302b09c740d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cd3fae3d6eb51e82d7dfb60191c61bf4dea01c797471038b0576bfe7ac84b0->leave($__internal_04cd3fae3d6eb51e82d7dfb60191c61bf4dea01c797471038b0576bfe7ac84b0_prof);

        
        $__internal_88db4bdb32a56ab123fbac8311f9c3652fd9541b6f8a4db65ca5302b09c740d4->leave($__internal_88db4bdb32a56ab123fbac8311f9c3652fd9541b6f8a4db65ca5302b09c740d4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_40dfb80a526be6d7ee67b2a8510b547ac6e466bed8eacb3c5348503a6c1206cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dfb80a526be6d7ee67b2a8510b547ac6e466bed8eacb3c5348503a6c1206cc->enter($__internal_40dfb80a526be6d7ee67b2a8510b547ac6e466bed8eacb3c5348503a6c1206cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b034c76ebc54472f19cab07c7f8e4ba89a4836b0a3c49faa888e61a3de965fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b034c76ebc54472f19cab07c7f8e4ba89a4836b0a3c49faa888e61a3de965fca->enter($__internal_b034c76ebc54472f19cab07c7f8e4ba89a4836b0a3c49faa888e61a3de965fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b034c76ebc54472f19cab07c7f8e4ba89a4836b0a3c49faa888e61a3de965fca->leave($__internal_b034c76ebc54472f19cab07c7f8e4ba89a4836b0a3c49faa888e61a3de965fca_prof);

        
        $__internal_40dfb80a526be6d7ee67b2a8510b547ac6e466bed8eacb3c5348503a6c1206cc->leave($__internal_40dfb80a526be6d7ee67b2a8510b547ac6e466bed8eacb3c5348503a6c1206cc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb2c987386b84516a9787f3d32ff8d254e0ac6c90c21c04d73e7290a60ca89aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2c987386b84516a9787f3d32ff8d254e0ac6c90c21c04d73e7290a60ca89aa->enter($__internal_cb2c987386b84516a9787f3d32ff8d254e0ac6c90c21c04d73e7290a60ca89aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d69f9e3ea9b4cc99ba76214960c601413d0fb2a04533926bde430c1abc6f0c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69f9e3ea9b4cc99ba76214960c601413d0fb2a04533926bde430c1abc6f0c5e->enter($__internal_d69f9e3ea9b4cc99ba76214960c601413d0fb2a04533926bde430c1abc6f0c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d69f9e3ea9b4cc99ba76214960c601413d0fb2a04533926bde430c1abc6f0c5e->leave($__internal_d69f9e3ea9b4cc99ba76214960c601413d0fb2a04533926bde430c1abc6f0c5e_prof);

        
        $__internal_cb2c987386b84516a9787f3d32ff8d254e0ac6c90c21c04d73e7290a60ca89aa->leave($__internal_cb2c987386b84516a9787f3d32ff8d254e0ac6c90c21c04d73e7290a60ca89aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
