<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a6bace8eb034fdfd9b44c4d60d889ea248e02f43abb91be995e7de5cf126776f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_dc08d9837adbfcafa9547acbd46f47aef11c9259ce32dcec1aca882987cda524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc08d9837adbfcafa9547acbd46f47aef11c9259ce32dcec1aca882987cda524->enter($__internal_dc08d9837adbfcafa9547acbd46f47aef11c9259ce32dcec1aca882987cda524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_88b478850576d6e184e9ae8ac253d1c820e41479f78d98bc2fca1b493ab91e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b478850576d6e184e9ae8ac253d1c820e41479f78d98bc2fca1b493ab91e1f->enter($__internal_88b478850576d6e184e9ae8ac253d1c820e41479f78d98bc2fca1b493ab91e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc08d9837adbfcafa9547acbd46f47aef11c9259ce32dcec1aca882987cda524->leave($__internal_dc08d9837adbfcafa9547acbd46f47aef11c9259ce32dcec1aca882987cda524_prof);

        
        $__internal_88b478850576d6e184e9ae8ac253d1c820e41479f78d98bc2fca1b493ab91e1f->leave($__internal_88b478850576d6e184e9ae8ac253d1c820e41479f78d98bc2fca1b493ab91e1f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bb84056d953da8313f072c3f5a06b97696f97c16424ea06bb961cadae670184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb84056d953da8313f072c3f5a06b97696f97c16424ea06bb961cadae670184->enter($__internal_4bb84056d953da8313f072c3f5a06b97696f97c16424ea06bb961cadae670184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3478ba31e942163bb7b383b7cbf7a9aef436b67a006a2ae8742112d15c64755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3478ba31e942163bb7b383b7cbf7a9aef436b67a006a2ae8742112d15c64755->enter($__internal_f3478ba31e942163bb7b383b7cbf7a9aef436b67a006a2ae8742112d15c64755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f3478ba31e942163bb7b383b7cbf7a9aef436b67a006a2ae8742112d15c64755->leave($__internal_f3478ba31e942163bb7b383b7cbf7a9aef436b67a006a2ae8742112d15c64755_prof);

        
        $__internal_4bb84056d953da8313f072c3f5a06b97696f97c16424ea06bb961cadae670184->leave($__internal_4bb84056d953da8313f072c3f5a06b97696f97c16424ea06bb961cadae670184_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
