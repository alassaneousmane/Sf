<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2ed3b8368e820dfa205620337f62fb9ecd092a235b58bfd2fe5b7d6a17be8476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5721d7c82870a1afdc3e8c1f8d1a66ec4fed7d122bd983e41f62c000092ef547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5721d7c82870a1afdc3e8c1f8d1a66ec4fed7d122bd983e41f62c000092ef547->enter($__internal_5721d7c82870a1afdc3e8c1f8d1a66ec4fed7d122bd983e41f62c000092ef547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_c1b489f9e942ebbcb88458822180322b295ed6a12b20e58f3d4d66fe561abfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b489f9e942ebbcb88458822180322b295ed6a12b20e58f3d4d66fe561abfda->enter($__internal_c1b489f9e942ebbcb88458822180322b295ed6a12b20e58f3d4d66fe561abfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5721d7c82870a1afdc3e8c1f8d1a66ec4fed7d122bd983e41f62c000092ef547->leave($__internal_5721d7c82870a1afdc3e8c1f8d1a66ec4fed7d122bd983e41f62c000092ef547_prof);

        
        $__internal_c1b489f9e942ebbcb88458822180322b295ed6a12b20e58f3d4d66fe561abfda->leave($__internal_c1b489f9e942ebbcb88458822180322b295ed6a12b20e58f3d4d66fe561abfda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a306a9bef8bfd2a47f0d860fa37976a97d3eb87f7c71473939172022e928c629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a306a9bef8bfd2a47f0d860fa37976a97d3eb87f7c71473939172022e928c629->enter($__internal_a306a9bef8bfd2a47f0d860fa37976a97d3eb87f7c71473939172022e928c629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85c76fd605e0b975b90e7a44ec669e5d7a870aaef4b47215d3963bb4e411bda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c76fd605e0b975b90e7a44ec669e5d7a870aaef4b47215d3963bb4e411bda1->enter($__internal_85c76fd605e0b975b90e7a44ec669e5d7a870aaef4b47215d3963bb4e411bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_85c76fd605e0b975b90e7a44ec669e5d7a870aaef4b47215d3963bb4e411bda1->leave($__internal_85c76fd605e0b975b90e7a44ec669e5d7a870aaef4b47215d3963bb4e411bda1_prof);

        
        $__internal_a306a9bef8bfd2a47f0d860fa37976a97d3eb87f7c71473939172022e928c629->leave($__internal_a306a9bef8bfd2a47f0d860fa37976a97d3eb87f7c71473939172022e928c629_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
