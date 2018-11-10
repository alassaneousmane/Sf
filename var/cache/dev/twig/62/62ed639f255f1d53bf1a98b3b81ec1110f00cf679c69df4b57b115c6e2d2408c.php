<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_21352177b003ef26d4e803b7dee07a2e812adb0a0073a9e89ac8fa2a810d6326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_93c3ec7326739cae63580cef7497d987d8b71460925de4d0f375b262998209dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c3ec7326739cae63580cef7497d987d8b71460925de4d0f375b262998209dd->enter($__internal_93c3ec7326739cae63580cef7497d987d8b71460925de4d0f375b262998209dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_102166125d8fca18d32ec9970d8be1929b651e2bebaba5731a27f5a00ba44f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102166125d8fca18d32ec9970d8be1929b651e2bebaba5731a27f5a00ba44f79->enter($__internal_102166125d8fca18d32ec9970d8be1929b651e2bebaba5731a27f5a00ba44f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c3ec7326739cae63580cef7497d987d8b71460925de4d0f375b262998209dd->leave($__internal_93c3ec7326739cae63580cef7497d987d8b71460925de4d0f375b262998209dd_prof);

        
        $__internal_102166125d8fca18d32ec9970d8be1929b651e2bebaba5731a27f5a00ba44f79->leave($__internal_102166125d8fca18d32ec9970d8be1929b651e2bebaba5731a27f5a00ba44f79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77982dce794d64bb46caa3e5700de066abadad078bc5ac71c05ab9b7aa347123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77982dce794d64bb46caa3e5700de066abadad078bc5ac71c05ab9b7aa347123->enter($__internal_77982dce794d64bb46caa3e5700de066abadad078bc5ac71c05ab9b7aa347123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5a8767eb074fcc67116301af0d89971dbc1b6bb00454bcaf912663468c05b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a8767eb074fcc67116301af0d89971dbc1b6bb00454bcaf912663468c05b7d->enter($__internal_e5a8767eb074fcc67116301af0d89971dbc1b6bb00454bcaf912663468c05b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e5a8767eb074fcc67116301af0d89971dbc1b6bb00454bcaf912663468c05b7d->leave($__internal_e5a8767eb074fcc67116301af0d89971dbc1b6bb00454bcaf912663468c05b7d_prof);

        
        $__internal_77982dce794d64bb46caa3e5700de066abadad078bc5ac71c05ab9b7aa347123->leave($__internal_77982dce794d64bb46caa3e5700de066abadad078bc5ac71c05ab9b7aa347123_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
