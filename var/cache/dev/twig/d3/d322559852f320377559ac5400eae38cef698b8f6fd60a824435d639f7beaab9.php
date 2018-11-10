<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_73a9eb30cc10ad82453ba7118e0f658b45085f3c57417fff3176a7e5f04db1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a07305fcf73eead0c43fce17569a2388ea77398a8ad4bfb3858aa7ed6e36e947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07305fcf73eead0c43fce17569a2388ea77398a8ad4bfb3858aa7ed6e36e947->enter($__internal_a07305fcf73eead0c43fce17569a2388ea77398a8ad4bfb3858aa7ed6e36e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_918d15012a52a7ce46520f4259c731d04e1e5e412d64ff239d168ea7dee39e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918d15012a52a7ce46520f4259c731d04e1e5e412d64ff239d168ea7dee39e9a->enter($__internal_918d15012a52a7ce46520f4259c731d04e1e5e412d64ff239d168ea7dee39e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07305fcf73eead0c43fce17569a2388ea77398a8ad4bfb3858aa7ed6e36e947->leave($__internal_a07305fcf73eead0c43fce17569a2388ea77398a8ad4bfb3858aa7ed6e36e947_prof);

        
        $__internal_918d15012a52a7ce46520f4259c731d04e1e5e412d64ff239d168ea7dee39e9a->leave($__internal_918d15012a52a7ce46520f4259c731d04e1e5e412d64ff239d168ea7dee39e9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_676954e43f6f691b96d5b085f9a664483ee7e5719ddfa6bbd9a1e3666d8b33c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676954e43f6f691b96d5b085f9a664483ee7e5719ddfa6bbd9a1e3666d8b33c6->enter($__internal_676954e43f6f691b96d5b085f9a664483ee7e5719ddfa6bbd9a1e3666d8b33c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91e85e0664b3a84a38a7003a7afe74dba3e270e541ee5bf805ccb01fb017fcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e85e0664b3a84a38a7003a7afe74dba3e270e541ee5bf805ccb01fb017fcc2->enter($__internal_91e85e0664b3a84a38a7003a7afe74dba3e270e541ee5bf805ccb01fb017fcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_91e85e0664b3a84a38a7003a7afe74dba3e270e541ee5bf805ccb01fb017fcc2->leave($__internal_91e85e0664b3a84a38a7003a7afe74dba3e270e541ee5bf805ccb01fb017fcc2_prof);

        
        $__internal_676954e43f6f691b96d5b085f9a664483ee7e5719ddfa6bbd9a1e3666d8b33c6->leave($__internal_676954e43f6f691b96d5b085f9a664483ee7e5719ddfa6bbd9a1e3666d8b33c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
