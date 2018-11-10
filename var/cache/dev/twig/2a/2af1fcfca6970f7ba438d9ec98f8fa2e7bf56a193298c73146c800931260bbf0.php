<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0eedb6df6afa416574bd2984c3a503f7212ae4b42cf9acf144f8ea27bfefab6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723fd908a0b2549cdacc5951e5593584e3794c3e3d9e4105a603a391360a48da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723fd908a0b2549cdacc5951e5593584e3794c3e3d9e4105a603a391360a48da->enter($__internal_723fd908a0b2549cdacc5951e5593584e3794c3e3d9e4105a603a391360a48da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a8dda41dc551743b3c8161eea88827c799a2cbc4717f9f8a219cb77d955ae194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dda41dc551743b3c8161eea88827c799a2cbc4717f9f8a219cb77d955ae194->enter($__internal_a8dda41dc551743b3c8161eea88827c799a2cbc4717f9f8a219cb77d955ae194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_723fd908a0b2549cdacc5951e5593584e3794c3e3d9e4105a603a391360a48da->leave($__internal_723fd908a0b2549cdacc5951e5593584e3794c3e3d9e4105a603a391360a48da_prof);

        
        $__internal_a8dda41dc551743b3c8161eea88827c799a2cbc4717f9f8a219cb77d955ae194->leave($__internal_a8dda41dc551743b3c8161eea88827c799a2cbc4717f9f8a219cb77d955ae194_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
