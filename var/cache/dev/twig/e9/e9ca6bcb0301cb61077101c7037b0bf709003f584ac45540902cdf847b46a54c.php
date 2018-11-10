<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_0948b1aa2ff04c29c0887f224bc39998006920c943903f34cd420f535eb8f576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_054fe4e2199a7ef96c01f7959750d8bf271c0eb84ffb12b6ec2b7b8ccdbfaf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054fe4e2199a7ef96c01f7959750d8bf271c0eb84ffb12b6ec2b7b8ccdbfaf21->enter($__internal_054fe4e2199a7ef96c01f7959750d8bf271c0eb84ffb12b6ec2b7b8ccdbfaf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a0194a959d545430d35fc27d140614121468835b21077f2aff7a9abf6a484fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0194a959d545430d35fc27d140614121468835b21077f2aff7a9abf6a484fe9->enter($__internal_a0194a959d545430d35fc27d140614121468835b21077f2aff7a9abf6a484fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054fe4e2199a7ef96c01f7959750d8bf271c0eb84ffb12b6ec2b7b8ccdbfaf21->leave($__internal_054fe4e2199a7ef96c01f7959750d8bf271c0eb84ffb12b6ec2b7b8ccdbfaf21_prof);

        
        $__internal_a0194a959d545430d35fc27d140614121468835b21077f2aff7a9abf6a484fe9->leave($__internal_a0194a959d545430d35fc27d140614121468835b21077f2aff7a9abf6a484fe9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1eae0fe8603e8b76e3a1692f7309dd9b4f07065da1d685818b2e2a63d2405ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1eae0fe8603e8b76e3a1692f7309dd9b4f07065da1d685818b2e2a63d2405ef->enter($__internal_a1eae0fe8603e8b76e3a1692f7309dd9b4f07065da1d685818b2e2a63d2405ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_31f252f7927cf57d556728f19962a2959932c38c0f18a329c9bea38052be1efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f252f7927cf57d556728f19962a2959932c38c0f18a329c9bea38052be1efb->enter($__internal_31f252f7927cf57d556728f19962a2959932c38c0f18a329c9bea38052be1efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_31f252f7927cf57d556728f19962a2959932c38c0f18a329c9bea38052be1efb->leave($__internal_31f252f7927cf57d556728f19962a2959932c38c0f18a329c9bea38052be1efb_prof);

        
        $__internal_a1eae0fe8603e8b76e3a1692f7309dd9b4f07065da1d685818b2e2a63d2405ef->leave($__internal_a1eae0fe8603e8b76e3a1692f7309dd9b4f07065da1d685818b2e2a63d2405ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
