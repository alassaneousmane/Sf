<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2bdcd42eca738a3523ae673fb47c8fdf96615765df7ecb633d98233fab659ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5a20fda0dc8153a84265919c8d949701b225c80f7ce17efdd7f3b50e38557a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a20fda0dc8153a84265919c8d949701b225c80f7ce17efdd7f3b50e38557a1->enter($__internal_a5a20fda0dc8153a84265919c8d949701b225c80f7ce17efdd7f3b50e38557a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a889c18ac17d4383b49e32d0dbe231fe731d532bca87c4fd020befc8f8c307ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a889c18ac17d4383b49e32d0dbe231fe731d532bca87c4fd020befc8f8c307ed->enter($__internal_a889c18ac17d4383b49e32d0dbe231fe731d532bca87c4fd020befc8f8c307ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a20fda0dc8153a84265919c8d949701b225c80f7ce17efdd7f3b50e38557a1->leave($__internal_a5a20fda0dc8153a84265919c8d949701b225c80f7ce17efdd7f3b50e38557a1_prof);

        
        $__internal_a889c18ac17d4383b49e32d0dbe231fe731d532bca87c4fd020befc8f8c307ed->leave($__internal_a889c18ac17d4383b49e32d0dbe231fe731d532bca87c4fd020befc8f8c307ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12f7f63f930a29306c0acd35b45b330fd1ecaefd7e9fd00791acf3b730d26113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f7f63f930a29306c0acd35b45b330fd1ecaefd7e9fd00791acf3b730d26113->enter($__internal_12f7f63f930a29306c0acd35b45b330fd1ecaefd7e9fd00791acf3b730d26113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5d21a5d5a24fd272019ed326b60ec36b8a19e7e1b36e80168a9567fc4c39641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d21a5d5a24fd272019ed326b60ec36b8a19e7e1b36e80168a9567fc4c39641->enter($__internal_b5d21a5d5a24fd272019ed326b60ec36b8a19e7e1b36e80168a9567fc4c39641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b5d21a5d5a24fd272019ed326b60ec36b8a19e7e1b36e80168a9567fc4c39641->leave($__internal_b5d21a5d5a24fd272019ed326b60ec36b8a19e7e1b36e80168a9567fc4c39641_prof);

        
        $__internal_12f7f63f930a29306c0acd35b45b330fd1ecaefd7e9fd00791acf3b730d26113->leave($__internal_12f7f63f930a29306c0acd35b45b330fd1ecaefd7e9fd00791acf3b730d26113_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_139f9cf1527323c4531602e9f9bffd796af250559518471875e352e2d0a1373d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139f9cf1527323c4531602e9f9bffd796af250559518471875e352e2d0a1373d->enter($__internal_139f9cf1527323c4531602e9f9bffd796af250559518471875e352e2d0a1373d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc2b11febc196c82eb7bf8d0b9eb5c26c88689313f3bf5d9ddb62e114a7a12c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2b11febc196c82eb7bf8d0b9eb5c26c88689313f3bf5d9ddb62e114a7a12c5->enter($__internal_cc2b11febc196c82eb7bf8d0b9eb5c26c88689313f3bf5d9ddb62e114a7a12c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cc2b11febc196c82eb7bf8d0b9eb5c26c88689313f3bf5d9ddb62e114a7a12c5->leave($__internal_cc2b11febc196c82eb7bf8d0b9eb5c26c88689313f3bf5d9ddb62e114a7a12c5_prof);

        
        $__internal_139f9cf1527323c4531602e9f9bffd796af250559518471875e352e2d0a1373d->leave($__internal_139f9cf1527323c4531602e9f9bffd796af250559518471875e352e2d0a1373d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
