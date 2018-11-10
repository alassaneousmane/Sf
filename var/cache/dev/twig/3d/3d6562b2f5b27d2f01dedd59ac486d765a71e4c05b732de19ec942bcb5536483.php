<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_06b0e857707b872698565cbe865f0dab41bb6bd79c3e5cccfc95d7ec8d24818a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ede0c3a614e1259735cacce06a2abc03da93093ec48a8220660acae7c124b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ede0c3a614e1259735cacce06a2abc03da93093ec48a8220660acae7c124b75->enter($__internal_9ede0c3a614e1259735cacce06a2abc03da93093ec48a8220660acae7c124b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e502fb9055d0a2e67a095b0f802ef75f13d101fdcad903140231eee4cca1292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e502fb9055d0a2e67a095b0f802ef75f13d101fdcad903140231eee4cca1292f->enter($__internal_e502fb9055d0a2e67a095b0f802ef75f13d101fdcad903140231eee4cca1292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ede0c3a614e1259735cacce06a2abc03da93093ec48a8220660acae7c124b75->leave($__internal_9ede0c3a614e1259735cacce06a2abc03da93093ec48a8220660acae7c124b75_prof);

        
        $__internal_e502fb9055d0a2e67a095b0f802ef75f13d101fdcad903140231eee4cca1292f->leave($__internal_e502fb9055d0a2e67a095b0f802ef75f13d101fdcad903140231eee4cca1292f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f0774d8038b1cea59310fd8e8350ac6bd4ed10b3cf5a7e9f207df948883ad58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0774d8038b1cea59310fd8e8350ac6bd4ed10b3cf5a7e9f207df948883ad58->enter($__internal_2f0774d8038b1cea59310fd8e8350ac6bd4ed10b3cf5a7e9f207df948883ad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e3c78c5dc6d3127f481cd825ff3be6cdace1f43b5e10ecec8fd2cb0e0cf0099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3c78c5dc6d3127f481cd825ff3be6cdace1f43b5e10ecec8fd2cb0e0cf0099->enter($__internal_9e3c78c5dc6d3127f481cd825ff3be6cdace1f43b5e10ecec8fd2cb0e0cf0099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e3c78c5dc6d3127f481cd825ff3be6cdace1f43b5e10ecec8fd2cb0e0cf0099->leave($__internal_9e3c78c5dc6d3127f481cd825ff3be6cdace1f43b5e10ecec8fd2cb0e0cf0099_prof);

        
        $__internal_2f0774d8038b1cea59310fd8e8350ac6bd4ed10b3cf5a7e9f207df948883ad58->leave($__internal_2f0774d8038b1cea59310fd8e8350ac6bd4ed10b3cf5a7e9f207df948883ad58_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
