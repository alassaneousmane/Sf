<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_556a536d9cd7f76268676a6dfc8ca3d6af26c2474ea6e2e34addc40503c8be50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_212b29e12291f7a40ca69478cff68cfcad0f605bf2c901c5991166df56263680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212b29e12291f7a40ca69478cff68cfcad0f605bf2c901c5991166df56263680->enter($__internal_212b29e12291f7a40ca69478cff68cfcad0f605bf2c901c5991166df56263680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_1b1c4bfd746b6fd7025f02568c3d3d81cdaab7525450c76859e4d9b9484fc7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1c4bfd746b6fd7025f02568c3d3d81cdaab7525450c76859e4d9b9484fc7c4->enter($__internal_1b1c4bfd746b6fd7025f02568c3d3d81cdaab7525450c76859e4d9b9484fc7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212b29e12291f7a40ca69478cff68cfcad0f605bf2c901c5991166df56263680->leave($__internal_212b29e12291f7a40ca69478cff68cfcad0f605bf2c901c5991166df56263680_prof);

        
        $__internal_1b1c4bfd746b6fd7025f02568c3d3d81cdaab7525450c76859e4d9b9484fc7c4->leave($__internal_1b1c4bfd746b6fd7025f02568c3d3d81cdaab7525450c76859e4d9b9484fc7c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd9910135edec4e321e71f7f8472b59e861c5ba5e7fcc787356ab7708013dfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9910135edec4e321e71f7f8472b59e861c5ba5e7fcc787356ab7708013dfd1->enter($__internal_fd9910135edec4e321e71f7f8472b59e861c5ba5e7fcc787356ab7708013dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d126543ef7c65843a59ba39fb07908c0314b0b2a3dc3e457772de54e29839337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d126543ef7c65843a59ba39fb07908c0314b0b2a3dc3e457772de54e29839337->enter($__internal_d126543ef7c65843a59ba39fb07908c0314b0b2a3dc3e457772de54e29839337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d126543ef7c65843a59ba39fb07908c0314b0b2a3dc3e457772de54e29839337->leave($__internal_d126543ef7c65843a59ba39fb07908c0314b0b2a3dc3e457772de54e29839337_prof);

        
        $__internal_fd9910135edec4e321e71f7f8472b59e861c5ba5e7fcc787356ab7708013dfd1->leave($__internal_fd9910135edec4e321e71f7f8472b59e861c5ba5e7fcc787356ab7708013dfd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
