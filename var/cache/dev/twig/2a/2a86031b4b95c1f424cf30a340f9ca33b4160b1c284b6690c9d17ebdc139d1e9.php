<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_28b1ccacc585718ac964b97c6d0bca21bcdeea04dc4244b949f633e26c8e97e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_7c11c9856ed25689e2900bc0abddd6fe8a22a30f764276b9d98a33175ac353af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c11c9856ed25689e2900bc0abddd6fe8a22a30f764276b9d98a33175ac353af->enter($__internal_7c11c9856ed25689e2900bc0abddd6fe8a22a30f764276b9d98a33175ac353af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3dac19a3c93ede87ea2fc593fd6d1db9d5940844012ad23cb33b1f845846f2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dac19a3c93ede87ea2fc593fd6d1db9d5940844012ad23cb33b1f845846f2d3->enter($__internal_3dac19a3c93ede87ea2fc593fd6d1db9d5940844012ad23cb33b1f845846f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c11c9856ed25689e2900bc0abddd6fe8a22a30f764276b9d98a33175ac353af->leave($__internal_7c11c9856ed25689e2900bc0abddd6fe8a22a30f764276b9d98a33175ac353af_prof);

        
        $__internal_3dac19a3c93ede87ea2fc593fd6d1db9d5940844012ad23cb33b1f845846f2d3->leave($__internal_3dac19a3c93ede87ea2fc593fd6d1db9d5940844012ad23cb33b1f845846f2d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccc84313c5e49be7d9d155161961f8773479886e3fd60d1a997eecf37eb876cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc84313c5e49be7d9d155161961f8773479886e3fd60d1a997eecf37eb876cd->enter($__internal_ccc84313c5e49be7d9d155161961f8773479886e3fd60d1a997eecf37eb876cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fb664d41797c677962b345d546237b4e7135783fc4f942213cda31d060cc8cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb664d41797c677962b345d546237b4e7135783fc4f942213cda31d060cc8cf0->enter($__internal_fb664d41797c677962b345d546237b4e7135783fc4f942213cda31d060cc8cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fb664d41797c677962b345d546237b4e7135783fc4f942213cda31d060cc8cf0->leave($__internal_fb664d41797c677962b345d546237b4e7135783fc4f942213cda31d060cc8cf0_prof);

        
        $__internal_ccc84313c5e49be7d9d155161961f8773479886e3fd60d1a997eecf37eb876cd->leave($__internal_ccc84313c5e49be7d9d155161961f8773479886e3fd60d1a997eecf37eb876cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
