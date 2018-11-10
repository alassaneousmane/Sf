<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_438eb8cd37d93b1b0660f71175424aab024124c43ac4ee37055950a55638320f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1b6a00e88835c742e5a0ebbf3afca5f9b6693da95ed4cbfa61af1295512f70bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6a00e88835c742e5a0ebbf3afca5f9b6693da95ed4cbfa61af1295512f70bf->enter($__internal_1b6a00e88835c742e5a0ebbf3afca5f9b6693da95ed4cbfa61af1295512f70bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_62dc96d3d374469b863a285f6d97d2ddb2b508f47e51cf26b5882d686f3663f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dc96d3d374469b863a285f6d97d2ddb2b508f47e51cf26b5882d686f3663f9->enter($__internal_62dc96d3d374469b863a285f6d97d2ddb2b508f47e51cf26b5882d686f3663f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6a00e88835c742e5a0ebbf3afca5f9b6693da95ed4cbfa61af1295512f70bf->leave($__internal_1b6a00e88835c742e5a0ebbf3afca5f9b6693da95ed4cbfa61af1295512f70bf_prof);

        
        $__internal_62dc96d3d374469b863a285f6d97d2ddb2b508f47e51cf26b5882d686f3663f9->leave($__internal_62dc96d3d374469b863a285f6d97d2ddb2b508f47e51cf26b5882d686f3663f9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ad37cbb46ab8e8806f2c065c2dbb37104bf6b8876e87b979731cd1ec26a03db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad37cbb46ab8e8806f2c065c2dbb37104bf6b8876e87b979731cd1ec26a03db->enter($__internal_6ad37cbb46ab8e8806f2c065c2dbb37104bf6b8876e87b979731cd1ec26a03db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26f9b05f6d340e906f9b06c72c877002770223907f791aa6135a61ab12f7bebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f9b05f6d340e906f9b06c72c877002770223907f791aa6135a61ab12f7bebd->enter($__internal_26f9b05f6d340e906f9b06c72c877002770223907f791aa6135a61ab12f7bebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_26f9b05f6d340e906f9b06c72c877002770223907f791aa6135a61ab12f7bebd->leave($__internal_26f9b05f6d340e906f9b06c72c877002770223907f791aa6135a61ab12f7bebd_prof);

        
        $__internal_6ad37cbb46ab8e8806f2c065c2dbb37104bf6b8876e87b979731cd1ec26a03db->leave($__internal_6ad37cbb46ab8e8806f2c065c2dbb37104bf6b8876e87b979731cd1ec26a03db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
