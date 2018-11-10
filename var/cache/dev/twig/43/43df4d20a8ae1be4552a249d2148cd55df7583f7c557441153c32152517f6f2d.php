<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_eb7d2e3b71fe7697179da65c0bdc26fb7d5893dad3cefcaa822beb67ebcbb87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86f9f6b404a2eb2970fef1e8e65a98c0dcd43516f39bf0905ab0d69d76faf5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f9f6b404a2eb2970fef1e8e65a98c0dcd43516f39bf0905ab0d69d76faf5b0->enter($__internal_86f9f6b404a2eb2970fef1e8e65a98c0dcd43516f39bf0905ab0d69d76faf5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_0e32f3db634b7e9856d31f9663ad77e514c5d869b261067b205ca87ce14d3949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e32f3db634b7e9856d31f9663ad77e514c5d869b261067b205ca87ce14d3949->enter($__internal_0e32f3db634b7e9856d31f9663ad77e514c5d869b261067b205ca87ce14d3949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86f9f6b404a2eb2970fef1e8e65a98c0dcd43516f39bf0905ab0d69d76faf5b0->leave($__internal_86f9f6b404a2eb2970fef1e8e65a98c0dcd43516f39bf0905ab0d69d76faf5b0_prof);

        
        $__internal_0e32f3db634b7e9856d31f9663ad77e514c5d869b261067b205ca87ce14d3949->leave($__internal_0e32f3db634b7e9856d31f9663ad77e514c5d869b261067b205ca87ce14d3949_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c3168199d2081ce851efaff6bf47b00576cc65d76f8e8a613dfc6f5329f98bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3168199d2081ce851efaff6bf47b00576cc65d76f8e8a613dfc6f5329f98bc->enter($__internal_4c3168199d2081ce851efaff6bf47b00576cc65d76f8e8a613dfc6f5329f98bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45e19325bb92ddefc7590ab5c92a8b2f7777b8ba0c8c5bac38a6320e4a9c4e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e19325bb92ddefc7590ab5c92a8b2f7777b8ba0c8c5bac38a6320e4a9c4e32->enter($__internal_45e19325bb92ddefc7590ab5c92a8b2f7777b8ba0c8c5bac38a6320e4a9c4e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_45e19325bb92ddefc7590ab5c92a8b2f7777b8ba0c8c5bac38a6320e4a9c4e32->leave($__internal_45e19325bb92ddefc7590ab5c92a8b2f7777b8ba0c8c5bac38a6320e4a9c4e32_prof);

        
        $__internal_4c3168199d2081ce851efaff6bf47b00576cc65d76f8e8a613dfc6f5329f98bc->leave($__internal_4c3168199d2081ce851efaff6bf47b00576cc65d76f8e8a613dfc6f5329f98bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
