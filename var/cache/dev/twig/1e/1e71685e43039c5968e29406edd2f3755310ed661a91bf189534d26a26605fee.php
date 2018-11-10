<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e580c21c0e856abcb9057ac9ae3d3045d020f458b343879daf210ccbfb40404a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_065198a5a5abc9b15e18dcf09b7bd13748576fd1b686b5531d8eb7e1d41ea3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065198a5a5abc9b15e18dcf09b7bd13748576fd1b686b5531d8eb7e1d41ea3e2->enter($__internal_065198a5a5abc9b15e18dcf09b7bd13748576fd1b686b5531d8eb7e1d41ea3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e45bfef8830087d7b3a9dc99d06ae33a3126803a12a056c2600d38d0dbfa5546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45bfef8830087d7b3a9dc99d06ae33a3126803a12a056c2600d38d0dbfa5546->enter($__internal_e45bfef8830087d7b3a9dc99d06ae33a3126803a12a056c2600d38d0dbfa5546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065198a5a5abc9b15e18dcf09b7bd13748576fd1b686b5531d8eb7e1d41ea3e2->leave($__internal_065198a5a5abc9b15e18dcf09b7bd13748576fd1b686b5531d8eb7e1d41ea3e2_prof);

        
        $__internal_e45bfef8830087d7b3a9dc99d06ae33a3126803a12a056c2600d38d0dbfa5546->leave($__internal_e45bfef8830087d7b3a9dc99d06ae33a3126803a12a056c2600d38d0dbfa5546_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01866b5756a9506169bd04a427fba93f898fff12a32cf8a53ae934db0398fb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01866b5756a9506169bd04a427fba93f898fff12a32cf8a53ae934db0398fb5c->enter($__internal_01866b5756a9506169bd04a427fba93f898fff12a32cf8a53ae934db0398fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4ab9b243f3ff3fed037ae0ec8ff9ac0fe57e56a623fdabb19011b17a9fa03ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ab9b243f3ff3fed037ae0ec8ff9ac0fe57e56a623fdabb19011b17a9fa03ef->enter($__internal_a4ab9b243f3ff3fed037ae0ec8ff9ac0fe57e56a623fdabb19011b17a9fa03ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a4ab9b243f3ff3fed037ae0ec8ff9ac0fe57e56a623fdabb19011b17a9fa03ef->leave($__internal_a4ab9b243f3ff3fed037ae0ec8ff9ac0fe57e56a623fdabb19011b17a9fa03ef_prof);

        
        $__internal_01866b5756a9506169bd04a427fba93f898fff12a32cf8a53ae934db0398fb5c->leave($__internal_01866b5756a9506169bd04a427fba93f898fff12a32cf8a53ae934db0398fb5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
