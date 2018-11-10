<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4566728224046016b822f4d0559d95666bb05ed67d4c7fbecf88fda498c0160b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66c58136ff6687fa6e71eb3b0bb399ae90f1534e83e3812003f92567b6acc6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c58136ff6687fa6e71eb3b0bb399ae90f1534e83e3812003f92567b6acc6d1->enter($__internal_66c58136ff6687fa6e71eb3b0bb399ae90f1534e83e3812003f92567b6acc6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_091f74fee3f9c5725361fa17066ece79568f49591eacddae0f3d28514b6844dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091f74fee3f9c5725361fa17066ece79568f49591eacddae0f3d28514b6844dd->enter($__internal_091f74fee3f9c5725361fa17066ece79568f49591eacddae0f3d28514b6844dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_66c58136ff6687fa6e71eb3b0bb399ae90f1534e83e3812003f92567b6acc6d1->leave($__internal_66c58136ff6687fa6e71eb3b0bb399ae90f1534e83e3812003f92567b6acc6d1_prof);

        
        $__internal_091f74fee3f9c5725361fa17066ece79568f49591eacddae0f3d28514b6844dd->leave($__internal_091f74fee3f9c5725361fa17066ece79568f49591eacddae0f3d28514b6844dd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_67519e24753ff2553bf03d19cfc6acbc6711c7be094fb904353209623d525606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67519e24753ff2553bf03d19cfc6acbc6711c7be094fb904353209623d525606->enter($__internal_67519e24753ff2553bf03d19cfc6acbc6711c7be094fb904353209623d525606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b12f17d75d9be08a290fb6d8327041fc43b50a8eacc72cc4b86598f3c7902956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12f17d75d9be08a290fb6d8327041fc43b50a8eacc72cc4b86598f3c7902956->enter($__internal_b12f17d75d9be08a290fb6d8327041fc43b50a8eacc72cc4b86598f3c7902956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b12f17d75d9be08a290fb6d8327041fc43b50a8eacc72cc4b86598f3c7902956->leave($__internal_b12f17d75d9be08a290fb6d8327041fc43b50a8eacc72cc4b86598f3c7902956_prof);

        
        $__internal_67519e24753ff2553bf03d19cfc6acbc6711c7be094fb904353209623d525606->leave($__internal_67519e24753ff2553bf03d19cfc6acbc6711c7be094fb904353209623d525606_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_efafaa5bc3044375744379bbac05c670c2dffa0e91f55f09fee2dff7f5f85906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efafaa5bc3044375744379bbac05c670c2dffa0e91f55f09fee2dff7f5f85906->enter($__internal_efafaa5bc3044375744379bbac05c670c2dffa0e91f55f09fee2dff7f5f85906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a75d51ea7b9040b094e9f72ec52f108c1b4d99e832d70af5752a9533c053f136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75d51ea7b9040b094e9f72ec52f108c1b4d99e832d70af5752a9533c053f136->enter($__internal_a75d51ea7b9040b094e9f72ec52f108c1b4d99e832d70af5752a9533c053f136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a75d51ea7b9040b094e9f72ec52f108c1b4d99e832d70af5752a9533c053f136->leave($__internal_a75d51ea7b9040b094e9f72ec52f108c1b4d99e832d70af5752a9533c053f136_prof);

        
        $__internal_efafaa5bc3044375744379bbac05c670c2dffa0e91f55f09fee2dff7f5f85906->leave($__internal_efafaa5bc3044375744379bbac05c670c2dffa0e91f55f09fee2dff7f5f85906_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c5e7e82531b24b24125379b88f4e2b1cdca08d8f455502eeecc897dbdf75013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e7e82531b24b24125379b88f4e2b1cdca08d8f455502eeecc897dbdf75013a->enter($__internal_c5e7e82531b24b24125379b88f4e2b1cdca08d8f455502eeecc897dbdf75013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_21e2c36cce0742c3dd9beddc2a19813e5588a934471f9fe7264ce350f44442f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e2c36cce0742c3dd9beddc2a19813e5588a934471f9fe7264ce350f44442f2->enter($__internal_21e2c36cce0742c3dd9beddc2a19813e5588a934471f9fe7264ce350f44442f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_21e2c36cce0742c3dd9beddc2a19813e5588a934471f9fe7264ce350f44442f2->leave($__internal_21e2c36cce0742c3dd9beddc2a19813e5588a934471f9fe7264ce350f44442f2_prof);

        
        $__internal_c5e7e82531b24b24125379b88f4e2b1cdca08d8f455502eeecc897dbdf75013a->leave($__internal_c5e7e82531b24b24125379b88f4e2b1cdca08d8f455502eeecc897dbdf75013a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
