<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b1c281996ce85363889589b16b957fd175512836954a6429ec6cee13ed3f609b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_34c844be872bebe34aca021bd6fee7a2277dfc011107b614eba28b5b636ae8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c844be872bebe34aca021bd6fee7a2277dfc011107b614eba28b5b636ae8f3->enter($__internal_34c844be872bebe34aca021bd6fee7a2277dfc011107b614eba28b5b636ae8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_663a6a4f7be6d8de002256fa7278351a33c7a138d4b7c9ddd32a8f87698d0e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663a6a4f7be6d8de002256fa7278351a33c7a138d4b7c9ddd32a8f87698d0e29->enter($__internal_663a6a4f7be6d8de002256fa7278351a33c7a138d4b7c9ddd32a8f87698d0e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c844be872bebe34aca021bd6fee7a2277dfc011107b614eba28b5b636ae8f3->leave($__internal_34c844be872bebe34aca021bd6fee7a2277dfc011107b614eba28b5b636ae8f3_prof);

        
        $__internal_663a6a4f7be6d8de002256fa7278351a33c7a138d4b7c9ddd32a8f87698d0e29->leave($__internal_663a6a4f7be6d8de002256fa7278351a33c7a138d4b7c9ddd32a8f87698d0e29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54ede370e7086cf881b741762b82d12957d8ed8a08203a0a2fe15983870c1610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ede370e7086cf881b741762b82d12957d8ed8a08203a0a2fe15983870c1610->enter($__internal_54ede370e7086cf881b741762b82d12957d8ed8a08203a0a2fe15983870c1610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c6fb7d4be9a7c847527ff25f89833cf3f6fe1feee89d7948d8cad3d356437ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6fb7d4be9a7c847527ff25f89833cf3f6fe1feee89d7948d8cad3d356437ea->enter($__internal_8c6fb7d4be9a7c847527ff25f89833cf3f6fe1feee89d7948d8cad3d356437ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c6fb7d4be9a7c847527ff25f89833cf3f6fe1feee89d7948d8cad3d356437ea->leave($__internal_8c6fb7d4be9a7c847527ff25f89833cf3f6fe1feee89d7948d8cad3d356437ea_prof);

        
        $__internal_54ede370e7086cf881b741762b82d12957d8ed8a08203a0a2fe15983870c1610->leave($__internal_54ede370e7086cf881b741762b82d12957d8ed8a08203a0a2fe15983870c1610_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7fd26005fd2952c85cd969e558a1356a91bad3b64c748aa5ecf5ad8fb932f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fd26005fd2952c85cd969e558a1356a91bad3b64c748aa5ecf5ad8fb932f58->enter($__internal_e7fd26005fd2952c85cd969e558a1356a91bad3b64c748aa5ecf5ad8fb932f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04c39fd242118b89077e71f62a6175623a16168344e45df1c50ee3f11994b563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c39fd242118b89077e71f62a6175623a16168344e45df1c50ee3f11994b563->enter($__internal_04c39fd242118b89077e71f62a6175623a16168344e45df1c50ee3f11994b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04c39fd242118b89077e71f62a6175623a16168344e45df1c50ee3f11994b563->leave($__internal_04c39fd242118b89077e71f62a6175623a16168344e45df1c50ee3f11994b563_prof);

        
        $__internal_e7fd26005fd2952c85cd969e558a1356a91bad3b64c748aa5ecf5ad8fb932f58->leave($__internal_e7fd26005fd2952c85cd969e558a1356a91bad3b64c748aa5ecf5ad8fb932f58_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca3c81e4633a7f7ce2a2ac94b4bd4279710c8effbbfc99c764bef039ac6e39e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3c81e4633a7f7ce2a2ac94b4bd4279710c8effbbfc99c764bef039ac6e39e1->enter($__internal_ca3c81e4633a7f7ce2a2ac94b4bd4279710c8effbbfc99c764bef039ac6e39e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25bce46413fd5d7146523d30356e9facee4b702f02e734d6320eece50dc6fd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bce46413fd5d7146523d30356e9facee4b702f02e734d6320eece50dc6fd66->enter($__internal_25bce46413fd5d7146523d30356e9facee4b702f02e734d6320eece50dc6fd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25bce46413fd5d7146523d30356e9facee4b702f02e734d6320eece50dc6fd66->leave($__internal_25bce46413fd5d7146523d30356e9facee4b702f02e734d6320eece50dc6fd66_prof);

        
        $__internal_ca3c81e4633a7f7ce2a2ac94b4bd4279710c8effbbfc99c764bef039ac6e39e1->leave($__internal_ca3c81e4633a7f7ce2a2ac94b4bd4279710c8effbbfc99c764bef039ac6e39e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
