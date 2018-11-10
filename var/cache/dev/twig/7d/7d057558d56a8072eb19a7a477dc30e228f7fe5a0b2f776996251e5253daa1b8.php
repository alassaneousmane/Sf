<?php

/* OCCoreBundle:Default:contact.html.twig */
class __TwigTemplate_2b124c57b856521ebd17beb61efa79b6855a80d46e81e9212051d087a1742770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Default:contact.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28de30971cce28a190c66ffb92fd32db0fd667bc517cad8d8e80b0576925600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28de30971cce28a190c66ffb92fd32db0fd667bc517cad8d8e80b0576925600e->enter($__internal_28de30971cce28a190c66ffb92fd32db0fd667bc517cad8d8e80b0576925600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:contact.html.twig"));

        $__internal_09a0734ef6be265398d79cfddddb0e0cebef440d66a13a6da7605be665db1aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0734ef6be265398d79cfddddb0e0cebef440d66a13a6da7605be665db1aa5->enter($__internal_09a0734ef6be265398d79cfddddb0e0cebef440d66a13a6da7605be665db1aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28de30971cce28a190c66ffb92fd32db0fd667bc517cad8d8e80b0576925600e->leave($__internal_28de30971cce28a190c66ffb92fd32db0fd667bc517cad8d8e80b0576925600e_prof);

        
        $__internal_09a0734ef6be265398d79cfddddb0e0cebef440d66a13a6da7605be665db1aa5->leave($__internal_09a0734ef6be265398d79cfddddb0e0cebef440d66a13a6da7605be665db1aa5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c30e995e4b7dcdb8908b8fa1a65331571956dcdafe0dede845b298c2cb9959cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30e995e4b7dcdb8908b8fa1a65331571956dcdafe0dede845b298c2cb9959cf->enter($__internal_c30e995e4b7dcdb8908b8fa1a65331571956dcdafe0dede845b298c2cb9959cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68122f785103b47576af82e5568afcc8329dbf785fd8a375f2d9143ea3b8f18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68122f785103b47576af82e5568afcc8329dbf785fd8a375f2d9143ea3b8f18c->enter($__internal_68122f785103b47576af82e5568afcc8329dbf785fd8a375f2d9143ea3b8f18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68122f785103b47576af82e5568afcc8329dbf785fd8a375f2d9143ea3b8f18c->leave($__internal_68122f785103b47576af82e5568afcc8329dbf785fd8a375f2d9143ea3b8f18c_prof);

        
        $__internal_c30e995e4b7dcdb8908b8fa1a65331571956dcdafe0dede845b298c2cb9959cf->leave($__internal_c30e995e4b7dcdb8908b8fa1a65331571956dcdafe0dede845b298c2cb9959cf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e836afc4bb40f6389643cf03fc89e6f29a71e67b8257b8275638fdbdeaa6c165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e836afc4bb40f6389643cf03fc89e6f29a71e67b8257b8275638fdbdeaa6c165->enter($__internal_e836afc4bb40f6389643cf03fc89e6f29a71e67b8257b8275638fdbdeaa6c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a0e8d29d091cbdaec80de00a6aa57fefc4ae5da3ce0354260544be878665c6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e8d29d091cbdaec80de00a6aa57fefc4ae5da3ce0354260544be878665c6fb->enter($__internal_a0e8d29d091cbdaec80de00a6aa57fefc4ae5da3ce0354260544be878665c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-9\">
\t\t\t
\t\t\t\t<div class=\"\">
\t\t\t\t\t<blockquote>
\t\t\t\t\t<p>Contact : +33 7 68 24 73 64</p>
\t\t\t\t\t<p>Email : Ousmane.Alassane@etu.univ-valenciennes.fr</p>
\t\t\t\t\t<p>Site web : <a href=\"http://alassane-ousmane.cludima.org\">Cliquer ici pour y accéder </a></p>
\t\t\t\t\t</blockquote>
\t\t\t\t</div>
\t\t\t
\t\t</div>

\t
";
        
        $__internal_a0e8d29d091cbdaec80de00a6aa57fefc4ae5da3ce0354260544be878665c6fb->leave($__internal_a0e8d29d091cbdaec80de00a6aa57fefc4ae5da3ce0354260544be878665c6fb_prof);

        
        $__internal_e836afc4bb40f6389643cf03fc89e6f29a71e67b8257b8275638fdbdeaa6c165->leave($__internal_e836afc4bb40f6389643cf03fc89e6f29a71e67b8257b8275638fdbdeaa6c165_prof);

    }

    // line 27
    public function block_contact($context, array $blocks = array())
    {
        $__internal_4a15ba96d20757e308e7ad3e207757cb9e90012e6c06a80e5ca7f743d748a15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a15ba96d20757e308e7ad3e207757cb9e90012e6c06a80e5ca7f743d748a15c->enter($__internal_4a15ba96d20757e308e7ad3e207757cb9e90012e6c06a80e5ca7f743d748a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_0a38a28db4bebfbd15d784c2a7f822deaf5d484cae303bdd521131c10a70a69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a38a28db4bebfbd15d784c2a7f822deaf5d484cae303bdd521131c10a70a69a->enter($__internal_0a38a28db4bebfbd15d784c2a7f822deaf5d484cae303bdd521131c10a70a69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "\t
<blockquote>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\tContact : +33 7 68 24 73 64
\t\t\t</div>
</blockquote>\t\t

";
        
        $__internal_0a38a28db4bebfbd15d784c2a7f822deaf5d484cae303bdd521131c10a70a69a->leave($__internal_0a38a28db4bebfbd15d784c2a7f822deaf5d484cae303bdd521131c10a70a69a_prof);

        
        $__internal_4a15ba96d20757e308e7ad3e207757cb9e90012e6c06a80e5ca7f743d748a15c->leave($__internal_4a15ba96d20757e308e7ad3e207757cb9e90012e6c06a80e5ca7f743d748a15c_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Defaut/contact.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Contact - {{ parent() }}
{% endblock %}

{% block content %}
\t
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-9\">
\t\t\t
\t\t\t\t<div class=\"\">
\t\t\t\t\t<blockquote>
\t\t\t\t\t<p>Contact : +33 7 68 24 73 64</p>
\t\t\t\t\t<p>Email : Ousmane.Alassane@etu.univ-valenciennes.fr</p>
\t\t\t\t\t<p>Site web : <a href=\"http://alassane-ousmane.cludima.org\">Cliquer ici pour y accéder </a></p>
\t\t\t\t\t</blockquote>
\t\t\t\t</div>
\t\t\t
\t\t</div>

\t
{% endblock %}

{% block contact %}\t
<blockquote>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\tContact : +33 7 68 24 73 64
\t\t\t</div>
</blockquote>\t\t

{% endblock %}
\t\t\t
\t\t


", "OCCoreBundle:Default:contact.html.twig", "/opt/lampp/htdocs/Sf/src/OC/CoreBundle/Resources/views/Default/contact.html.twig");
    }
}
