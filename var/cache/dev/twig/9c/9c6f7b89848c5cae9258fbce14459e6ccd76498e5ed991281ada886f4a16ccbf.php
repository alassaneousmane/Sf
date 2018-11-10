<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d60e1de2de5960b1a6d0b994db875e0ce015bb8388496d4f90060ea11bf4cfcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ff7a9c7bc2a785c281e9fda1c2d22249ad4ad1b054b8bde198e219504354c41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7a9c7bc2a785c281e9fda1c2d22249ad4ad1b054b8bde198e219504354c41e->enter($__internal_ff7a9c7bc2a785c281e9fda1c2d22249ad4ad1b054b8bde198e219504354c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_84678850d2dfacfa590a0982a6359efc148f907fbef88408f1371531ff6d50d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84678850d2dfacfa590a0982a6359efc148f907fbef88408f1371531ff6d50d0->enter($__internal_84678850d2dfacfa590a0982a6359efc148f907fbef88408f1371531ff6d50d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7a9c7bc2a785c281e9fda1c2d22249ad4ad1b054b8bde198e219504354c41e->leave($__internal_ff7a9c7bc2a785c281e9fda1c2d22249ad4ad1b054b8bde198e219504354c41e_prof);

        
        $__internal_84678850d2dfacfa590a0982a6359efc148f907fbef88408f1371531ff6d50d0->leave($__internal_84678850d2dfacfa590a0982a6359efc148f907fbef88408f1371531ff6d50d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dd01c9e630dfbfeceb5379f7025b3a215f19478bad2921f87a88cc621d565a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd01c9e630dfbfeceb5379f7025b3a215f19478bad2921f87a88cc621d565a1->enter($__internal_4dd01c9e630dfbfeceb5379f7025b3a215f19478bad2921f87a88cc621d565a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b97f700305e94d045023ec84d6ff879f2349c1105f54898178ab53b20cb6511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97f700305e94d045023ec84d6ff879f2349c1105f54898178ab53b20cb6511d->enter($__internal_b97f700305e94d045023ec84d6ff879f2349c1105f54898178ab53b20cb6511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b97f700305e94d045023ec84d6ff879f2349c1105f54898178ab53b20cb6511d->leave($__internal_b97f700305e94d045023ec84d6ff879f2349c1105f54898178ab53b20cb6511d_prof);

        
        $__internal_4dd01c9e630dfbfeceb5379f7025b3a215f19478bad2921f87a88cc621d565a1->leave($__internal_4dd01c9e630dfbfeceb5379f7025b3a215f19478bad2921f87a88cc621d565a1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0573d81012bea752478b662bc6ef354bf7613c371fdc72e193a66f4d835be7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0573d81012bea752478b662bc6ef354bf7613c371fdc72e193a66f4d835be7d3->enter($__internal_0573d81012bea752478b662bc6ef354bf7613c371fdc72e193a66f4d835be7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6eee10bb05eb83fbc817ae3fa8a324d25948cf5f934260ae8eed683ba9c5aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eee10bb05eb83fbc817ae3fa8a324d25948cf5f934260ae8eed683ba9c5aaa->enter($__internal_a6eee10bb05eb83fbc817ae3fa8a324d25948cf5f934260ae8eed683ba9c5aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6eee10bb05eb83fbc817ae3fa8a324d25948cf5f934260ae8eed683ba9c5aaa->leave($__internal_a6eee10bb05eb83fbc817ae3fa8a324d25948cf5f934260ae8eed683ba9c5aaa_prof);

        
        $__internal_0573d81012bea752478b662bc6ef354bf7613c371fdc72e193a66f4d835be7d3->leave($__internal_0573d81012bea752478b662bc6ef354bf7613c371fdc72e193a66f4d835be7d3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa3f017f016ddb053232938d88e2560b0da47ca2b405beb4a466e7b649fff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa3f017f016ddb053232938d88e2560b0da47ca2b405beb4a466e7b649fff50->enter($__internal_1fa3f017f016ddb053232938d88e2560b0da47ca2b405beb4a466e7b649fff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89caf3fafa7d23736d92fc8d86017a2ded264e1e125fca43fc3e76125845a472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89caf3fafa7d23736d92fc8d86017a2ded264e1e125fca43fc3e76125845a472->enter($__internal_89caf3fafa7d23736d92fc8d86017a2ded264e1e125fca43fc3e76125845a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_89caf3fafa7d23736d92fc8d86017a2ded264e1e125fca43fc3e76125845a472->leave($__internal_89caf3fafa7d23736d92fc8d86017a2ded264e1e125fca43fc3e76125845a472_prof);

        
        $__internal_1fa3f017f016ddb053232938d88e2560b0da47ca2b405beb4a466e7b649fff50->leave($__internal_1fa3f017f016ddb053232938d88e2560b0da47ca2b405beb4a466e7b649fff50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
