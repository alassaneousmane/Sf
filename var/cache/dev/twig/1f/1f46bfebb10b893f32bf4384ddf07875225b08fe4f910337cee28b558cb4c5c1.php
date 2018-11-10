<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e88b3b02bce8c90c5aecce43d92b5628314d2fda6a609aa23beee0ef3366a1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c13c49b25b8d91f025232c83f96e3423182292be42aac83a99cf3cf2d67683b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13c49b25b8d91f025232c83f96e3423182292be42aac83a99cf3cf2d67683b2->enter($__internal_c13c49b25b8d91f025232c83f96e3423182292be42aac83a99cf3cf2d67683b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e5193fef0079dfcf74fa36f2402aba9df4021c8629be97b2f6261060faa1915d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5193fef0079dfcf74fa36f2402aba9df4021c8629be97b2f6261060faa1915d->enter($__internal_e5193fef0079dfcf74fa36f2402aba9df4021c8629be97b2f6261060faa1915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13c49b25b8d91f025232c83f96e3423182292be42aac83a99cf3cf2d67683b2->leave($__internal_c13c49b25b8d91f025232c83f96e3423182292be42aac83a99cf3cf2d67683b2_prof);

        
        $__internal_e5193fef0079dfcf74fa36f2402aba9df4021c8629be97b2f6261060faa1915d->leave($__internal_e5193fef0079dfcf74fa36f2402aba9df4021c8629be97b2f6261060faa1915d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69671131e8a6608903564d85b8341e2f3ff6a98090600d4d3a0ddf6d0e75ecf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69671131e8a6608903564d85b8341e2f3ff6a98090600d4d3a0ddf6d0e75ecf4->enter($__internal_69671131e8a6608903564d85b8341e2f3ff6a98090600d4d3a0ddf6d0e75ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_496b4fad08f48ca70a46a1f3b6233e86a4d841d1596580394175dda0d38b9b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496b4fad08f48ca70a46a1f3b6233e86a4d841d1596580394175dda0d38b9b7f->enter($__internal_496b4fad08f48ca70a46a1f3b6233e86a4d841d1596580394175dda0d38b9b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_496b4fad08f48ca70a46a1f3b6233e86a4d841d1596580394175dda0d38b9b7f->leave($__internal_496b4fad08f48ca70a46a1f3b6233e86a4d841d1596580394175dda0d38b9b7f_prof);

        
        $__internal_69671131e8a6608903564d85b8341e2f3ff6a98090600d4d3a0ddf6d0e75ecf4->leave($__internal_69671131e8a6608903564d85b8341e2f3ff6a98090600d4d3a0ddf6d0e75ecf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e503803695ed2b4ecd6cf164d367d1a4916ed32193fad7facd517886660be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e503803695ed2b4ecd6cf164d367d1a4916ed32193fad7facd517886660be4->enter($__internal_d0e503803695ed2b4ecd6cf164d367d1a4916ed32193fad7facd517886660be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93683e1ec09ea9782ba4ed13ffa2eae00cf84bdc628ea750df81a208f05a8f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93683e1ec09ea9782ba4ed13ffa2eae00cf84bdc628ea750df81a208f05a8f35->enter($__internal_93683e1ec09ea9782ba4ed13ffa2eae00cf84bdc628ea750df81a208f05a8f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_93683e1ec09ea9782ba4ed13ffa2eae00cf84bdc628ea750df81a208f05a8f35->leave($__internal_93683e1ec09ea9782ba4ed13ffa2eae00cf84bdc628ea750df81a208f05a8f35_prof);

        
        $__internal_d0e503803695ed2b4ecd6cf164d367d1a4916ed32193fad7facd517886660be4->leave($__internal_d0e503803695ed2b4ecd6cf164d367d1a4916ed32193fad7facd517886660be4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
