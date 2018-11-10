<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f543cf7abe2324cc163ee85aa6d79ac12b0f5b2484daf75f53749d64c106d27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_07e4c225752ca1c21f8c284143f52b837f57e7de8c1b865a47cc4768a4ecff80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e4c225752ca1c21f8c284143f52b837f57e7de8c1b865a47cc4768a4ecff80->enter($__internal_07e4c225752ca1c21f8c284143f52b837f57e7de8c1b865a47cc4768a4ecff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f3bce5eaa33324270b1310755a6430d214238e3f6d91bdd48a383400ed4c299a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bce5eaa33324270b1310755a6430d214238e3f6d91bdd48a383400ed4c299a->enter($__internal_f3bce5eaa33324270b1310755a6430d214238e3f6d91bdd48a383400ed4c299a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e4c225752ca1c21f8c284143f52b837f57e7de8c1b865a47cc4768a4ecff80->leave($__internal_07e4c225752ca1c21f8c284143f52b837f57e7de8c1b865a47cc4768a4ecff80_prof);

        
        $__internal_f3bce5eaa33324270b1310755a6430d214238e3f6d91bdd48a383400ed4c299a->leave($__internal_f3bce5eaa33324270b1310755a6430d214238e3f6d91bdd48a383400ed4c299a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33e51626edc287a65c25ed735eb373951936dbff3206ec622f208f9a82d81870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e51626edc287a65c25ed735eb373951936dbff3206ec622f208f9a82d81870->enter($__internal_33e51626edc287a65c25ed735eb373951936dbff3206ec622f208f9a82d81870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b741da4e74ada704ef6b77d1d392ec94bf559552d52c5253f0100efdab4bb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b741da4e74ada704ef6b77d1d392ec94bf559552d52c5253f0100efdab4bb15->enter($__internal_9b741da4e74ada704ef6b77d1d392ec94bf559552d52c5253f0100efdab4bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9b741da4e74ada704ef6b77d1d392ec94bf559552d52c5253f0100efdab4bb15->leave($__internal_9b741da4e74ada704ef6b77d1d392ec94bf559552d52c5253f0100efdab4bb15_prof);

        
        $__internal_33e51626edc287a65c25ed735eb373951936dbff3206ec622f208f9a82d81870->leave($__internal_33e51626edc287a65c25ed735eb373951936dbff3206ec622f208f9a82d81870_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
