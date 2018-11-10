<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cbb9cb99cf912fa81c4777db9704d25adbc16bb5f7615280f60cedd6ba3f5655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4c88157c2898d8353639ae03a5cc0e1ede9f64d9b56a67fc35d42cf8fd0f37d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c88157c2898d8353639ae03a5cc0e1ede9f64d9b56a67fc35d42cf8fd0f37d2->enter($__internal_4c88157c2898d8353639ae03a5cc0e1ede9f64d9b56a67fc35d42cf8fd0f37d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_7dcfb90b890cc74e552940359cf1966a679149e54799b4345e3fe6bdda687583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcfb90b890cc74e552940359cf1966a679149e54799b4345e3fe6bdda687583->enter($__internal_7dcfb90b890cc74e552940359cf1966a679149e54799b4345e3fe6bdda687583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c88157c2898d8353639ae03a5cc0e1ede9f64d9b56a67fc35d42cf8fd0f37d2->leave($__internal_4c88157c2898d8353639ae03a5cc0e1ede9f64d9b56a67fc35d42cf8fd0f37d2_prof);

        
        $__internal_7dcfb90b890cc74e552940359cf1966a679149e54799b4345e3fe6bdda687583->leave($__internal_7dcfb90b890cc74e552940359cf1966a679149e54799b4345e3fe6bdda687583_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8f1b72dae3f05f9b3facad9477219e1946ecb8db298f4190dc87e4d9a5d8f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f1b72dae3f05f9b3facad9477219e1946ecb8db298f4190dc87e4d9a5d8f9b->enter($__internal_a8f1b72dae3f05f9b3facad9477219e1946ecb8db298f4190dc87e4d9a5d8f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59b29b573738f8e176357b30883172c24ae91d0b1cf6a278bd9703b893f5e8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b29b573738f8e176357b30883172c24ae91d0b1cf6a278bd9703b893f5e8e1->enter($__internal_59b29b573738f8e176357b30883172c24ae91d0b1cf6a278bd9703b893f5e8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_59b29b573738f8e176357b30883172c24ae91d0b1cf6a278bd9703b893f5e8e1->leave($__internal_59b29b573738f8e176357b30883172c24ae91d0b1cf6a278bd9703b893f5e8e1_prof);

        
        $__internal_a8f1b72dae3f05f9b3facad9477219e1946ecb8db298f4190dc87e4d9a5d8f9b->leave($__internal_a8f1b72dae3f05f9b3facad9477219e1946ecb8db298f4190dc87e4d9a5d8f9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
