<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0166284b51edd5c251679f553c9be3b98ad892aeab20703223091561f7cca68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b48e78bbd637c5e025d8c6b7563251932cfc57bf1b386354e3f621385f6ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b48e78bbd637c5e025d8c6b7563251932cfc57bf1b386354e3f621385f6ff4->enter($__internal_b9b48e78bbd637c5e025d8c6b7563251932cfc57bf1b386354e3f621385f6ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_28a56d6910323d7b3ce6c6870d5d4bf6b3bf61d53c2a7663805ee12a7701668a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a56d6910323d7b3ce6c6870d5d4bf6b3bf61d53c2a7663805ee12a7701668a->enter($__internal_28a56d6910323d7b3ce6c6870d5d4bf6b3bf61d53c2a7663805ee12a7701668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b48e78bbd637c5e025d8c6b7563251932cfc57bf1b386354e3f621385f6ff4->leave($__internal_b9b48e78bbd637c5e025d8c6b7563251932cfc57bf1b386354e3f621385f6ff4_prof);

        
        $__internal_28a56d6910323d7b3ce6c6870d5d4bf6b3bf61d53c2a7663805ee12a7701668a->leave($__internal_28a56d6910323d7b3ce6c6870d5d4bf6b3bf61d53c2a7663805ee12a7701668a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a43ab81bb2508e236aeab02f09bc310ec0d78bc46764ce0ce39ecaf58790e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a43ab81bb2508e236aeab02f09bc310ec0d78bc46764ce0ce39ecaf58790e4f->enter($__internal_5a43ab81bb2508e236aeab02f09bc310ec0d78bc46764ce0ce39ecaf58790e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c1884b436271799dae7a04437b1d5ebd67a8855dd503daf59316bf46169874c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1884b436271799dae7a04437b1d5ebd67a8855dd503daf59316bf46169874c->enter($__internal_6c1884b436271799dae7a04437b1d5ebd67a8855dd503daf59316bf46169874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c1884b436271799dae7a04437b1d5ebd67a8855dd503daf59316bf46169874c->leave($__internal_6c1884b436271799dae7a04437b1d5ebd67a8855dd503daf59316bf46169874c_prof);

        
        $__internal_5a43ab81bb2508e236aeab02f09bc310ec0d78bc46764ce0ce39ecaf58790e4f->leave($__internal_5a43ab81bb2508e236aeab02f09bc310ec0d78bc46764ce0ce39ecaf58790e4f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_859b46cfddba924aff1749d08661c3bbffa1243f2dd2009dc179efcc4b871ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859b46cfddba924aff1749d08661c3bbffa1243f2dd2009dc179efcc4b871ee3->enter($__internal_859b46cfddba924aff1749d08661c3bbffa1243f2dd2009dc179efcc4b871ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15e229dcee4ab9625c447971035317560739dc921104b804637d2e401bc15589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e229dcee4ab9625c447971035317560739dc921104b804637d2e401bc15589->enter($__internal_15e229dcee4ab9625c447971035317560739dc921104b804637d2e401bc15589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_15e229dcee4ab9625c447971035317560739dc921104b804637d2e401bc15589->leave($__internal_15e229dcee4ab9625c447971035317560739dc921104b804637d2e401bc15589_prof);

        
        $__internal_859b46cfddba924aff1749d08661c3bbffa1243f2dd2009dc179efcc4b871ee3->leave($__internal_859b46cfddba924aff1749d08661c3bbffa1243f2dd2009dc179efcc4b871ee3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8fc686d05e74c63755f735b7d0555c30cbea54f90f3e0290b73632f1500c2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fc686d05e74c63755f735b7d0555c30cbea54f90f3e0290b73632f1500c2d7->enter($__internal_f8fc686d05e74c63755f735b7d0555c30cbea54f90f3e0290b73632f1500c2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1d00cba78fff0867e22e2bf5033d54a79fdc538d9c4a79cf1eddd090368eeb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d00cba78fff0867e22e2bf5033d54a79fdc538d9c4a79cf1eddd090368eeb7->enter($__internal_d1d00cba78fff0867e22e2bf5033d54a79fdc538d9c4a79cf1eddd090368eeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d1d00cba78fff0867e22e2bf5033d54a79fdc538d9c4a79cf1eddd090368eeb7->leave($__internal_d1d00cba78fff0867e22e2bf5033d54a79fdc538d9c4a79cf1eddd090368eeb7_prof);

        
        $__internal_f8fc686d05e74c63755f735b7d0555c30cbea54f90f3e0290b73632f1500c2d7->leave($__internal_f8fc686d05e74c63755f735b7d0555c30cbea54f90f3e0290b73632f1500c2d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
