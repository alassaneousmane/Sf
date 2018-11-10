<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_affe045c5d4396ced674da94130615714722f231376a6be85dae9bbfddd9ca01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_81d0b675522047bff78ea6a09f481f3bd3295c5071d21465d45e8159fa6eeb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d0b675522047bff78ea6a09f481f3bd3295c5071d21465d45e8159fa6eeb10->enter($__internal_81d0b675522047bff78ea6a09f481f3bd3295c5071d21465d45e8159fa6eeb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b1fe71abe90734214dae605158873ca2fffd0550239b168f4ffd707492e8f0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fe71abe90734214dae605158873ca2fffd0550239b168f4ffd707492e8f0e0->enter($__internal_b1fe71abe90734214dae605158873ca2fffd0550239b168f4ffd707492e8f0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d0b675522047bff78ea6a09f481f3bd3295c5071d21465d45e8159fa6eeb10->leave($__internal_81d0b675522047bff78ea6a09f481f3bd3295c5071d21465d45e8159fa6eeb10_prof);

        
        $__internal_b1fe71abe90734214dae605158873ca2fffd0550239b168f4ffd707492e8f0e0->leave($__internal_b1fe71abe90734214dae605158873ca2fffd0550239b168f4ffd707492e8f0e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fd1eea4e5d29fffbea3d3717dda1c2fc657990b4a188fde523a713586155de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd1eea4e5d29fffbea3d3717dda1c2fc657990b4a188fde523a713586155de7->enter($__internal_7fd1eea4e5d29fffbea3d3717dda1c2fc657990b4a188fde523a713586155de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d7c7eb8dc1ebd1cec8b316090012017f278bccc4f69ba9c9e0bb6179629dd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7c7eb8dc1ebd1cec8b316090012017f278bccc4f69ba9c9e0bb6179629dd91->enter($__internal_5d7c7eb8dc1ebd1cec8b316090012017f278bccc4f69ba9c9e0bb6179629dd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5d7c7eb8dc1ebd1cec8b316090012017f278bccc4f69ba9c9e0bb6179629dd91->leave($__internal_5d7c7eb8dc1ebd1cec8b316090012017f278bccc4f69ba9c9e0bb6179629dd91_prof);

        
        $__internal_7fd1eea4e5d29fffbea3d3717dda1c2fc657990b4a188fde523a713586155de7->leave($__internal_7fd1eea4e5d29fffbea3d3717dda1c2fc657990b4a188fde523a713586155de7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/Sf/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
