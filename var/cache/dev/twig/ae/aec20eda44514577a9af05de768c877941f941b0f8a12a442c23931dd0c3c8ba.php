<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8e7b89c6853cb9b46380a4ce83c741dcd7e23e03ed8253a5b780453d7cd666fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48cbd16b8531baa4a770ef3e8f2c1d821cb643cd896740a959b1738028eb01af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cbd16b8531baa4a770ef3e8f2c1d821cb643cd896740a959b1738028eb01af->enter($__internal_48cbd16b8531baa4a770ef3e8f2c1d821cb643cd896740a959b1738028eb01af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_dd0e44585135915794ad5e80fdab50e5fafa69baa25898125c9e938e2a21a0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0e44585135915794ad5e80fdab50e5fafa69baa25898125c9e938e2a21a0b1->enter($__internal_dd0e44585135915794ad5e80fdab50e5fafa69baa25898125c9e938e2a21a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_48cbd16b8531baa4a770ef3e8f2c1d821cb643cd896740a959b1738028eb01af->leave($__internal_48cbd16b8531baa4a770ef3e8f2c1d821cb643cd896740a959b1738028eb01af_prof);

        
        $__internal_dd0e44585135915794ad5e80fdab50e5fafa69baa25898125c9e938e2a21a0b1->leave($__internal_dd0e44585135915794ad5e80fdab50e5fafa69baa25898125c9e938e2a21a0b1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a68d8bb87e7257d3a78fd0c3d90be64593dfed9b3f4d7c485a7ac9b53d0125ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d8bb87e7257d3a78fd0c3d90be64593dfed9b3f4d7c485a7ac9b53d0125ba->enter($__internal_a68d8bb87e7257d3a78fd0c3d90be64593dfed9b3f4d7c485a7ac9b53d0125ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5f344b34cef636fb2e7822acf0435b7398b6a037fe016dc078676f2bec0935cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f344b34cef636fb2e7822acf0435b7398b6a037fe016dc078676f2bec0935cb->enter($__internal_5f344b34cef636fb2e7822acf0435b7398b6a037fe016dc078676f2bec0935cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5f344b34cef636fb2e7822acf0435b7398b6a037fe016dc078676f2bec0935cb->leave($__internal_5f344b34cef636fb2e7822acf0435b7398b6a037fe016dc078676f2bec0935cb_prof);

        
        $__internal_a68d8bb87e7257d3a78fd0c3d90be64593dfed9b3f4d7c485a7ac9b53d0125ba->leave($__internal_a68d8bb87e7257d3a78fd0c3d90be64593dfed9b3f4d7c485a7ac9b53d0125ba_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71257ab5d4e653ad5b86f190eb26093d133cae16bca3a81862e1c09130d6f3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71257ab5d4e653ad5b86f190eb26093d133cae16bca3a81862e1c09130d6f3eb->enter($__internal_71257ab5d4e653ad5b86f190eb26093d133cae16bca3a81862e1c09130d6f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ce47617ec068f5d166483f02103c9bf9cc9e530ffdd458b91261edb02e4478ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce47617ec068f5d166483f02103c9bf9cc9e530ffdd458b91261edb02e4478ad->enter($__internal_ce47617ec068f5d166483f02103c9bf9cc9e530ffdd458b91261edb02e4478ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ce47617ec068f5d166483f02103c9bf9cc9e530ffdd458b91261edb02e4478ad->leave($__internal_ce47617ec068f5d166483f02103c9bf9cc9e530ffdd458b91261edb02e4478ad_prof);

        
        $__internal_71257ab5d4e653ad5b86f190eb26093d133cae16bca3a81862e1c09130d6f3eb->leave($__internal_71257ab5d4e653ad5b86f190eb26093d133cae16bca3a81862e1c09130d6f3eb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6dc5393ea11b2437fc5793670d30414e43e090e8a3196417f58613d6c8e694f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc5393ea11b2437fc5793670d30414e43e090e8a3196417f58613d6c8e694f0->enter($__internal_6dc5393ea11b2437fc5793670d30414e43e090e8a3196417f58613d6c8e694f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bd6b0cb169e1f4c94f3ba5c992f266a60742e3f70ae27e7211410de8a1407eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6b0cb169e1f4c94f3ba5c992f266a60742e3f70ae27e7211410de8a1407eec->enter($__internal_bd6b0cb169e1f4c94f3ba5c992f266a60742e3f70ae27e7211410de8a1407eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd6b0cb169e1f4c94f3ba5c992f266a60742e3f70ae27e7211410de8a1407eec->leave($__internal_bd6b0cb169e1f4c94f3ba5c992f266a60742e3f70ae27e7211410de8a1407eec_prof);

        
        $__internal_6dc5393ea11b2437fc5793670d30414e43e090e8a3196417f58613d6c8e694f0->leave($__internal_6dc5393ea11b2437fc5793670d30414e43e090e8a3196417f58613d6c8e694f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
