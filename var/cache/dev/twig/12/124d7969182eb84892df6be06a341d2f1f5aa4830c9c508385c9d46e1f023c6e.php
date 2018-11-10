<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_82f7d51e08eed802c794568e4b3ce93fee4b52361a993b13b983c3f968f14ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@FOSUser/layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c019222f81db99c60469641679fdda8850ac5f425fab94ed582a2642a3ff832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c019222f81db99c60469641679fdda8850ac5f425fab94ed582a2642a3ff832->enter($__internal_5c019222f81db99c60469641679fdda8850ac5f425fab94ed582a2642a3ff832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7eaaa51654ca43e19fe317ff922cfabd3768b20fdf7ca87673030d46b28a348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaaa51654ca43e19fe317ff922cfabd3768b20fdf7ca87673030d46b28a348b->enter($__internal_7eaaa51654ca43e19fe317ff922cfabd3768b20fdf7ca87673030d46b28a348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c019222f81db99c60469641679fdda8850ac5f425fab94ed582a2642a3ff832->leave($__internal_5c019222f81db99c60469641679fdda8850ac5f425fab94ed582a2642a3ff832_prof);

        
        $__internal_7eaaa51654ca43e19fe317ff922cfabd3768b20fdf7ca87673030d46b28a348b->leave($__internal_7eaaa51654ca43e19fe317ff922cfabd3768b20fdf7ca87673030d46b28a348b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_268570dd034864d423cb9b5a35acae4c3b44f267367493ca4639de4d1a1e6071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268570dd034864d423cb9b5a35acae4c3b44f267367493ca4639de4d1a1e6071->enter($__internal_268570dd034864d423cb9b5a35acae4c3b44f267367493ca4639de4d1a1e6071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_751d415784f30cb275a5d9d383616504ee1eb5052c8fd7346c31bd5ae72f369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751d415784f30cb275a5d9d383616504ee1eb5052c8fd7346c31bd5ae72f369c->enter($__internal_751d415784f30cb275a5d9d383616504ee1eb5052c8fd7346c31bd5ae72f369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_751d415784f30cb275a5d9d383616504ee1eb5052c8fd7346c31bd5ae72f369c->leave($__internal_751d415784f30cb275a5d9d383616504ee1eb5052c8fd7346c31bd5ae72f369c_prof);

        
        $__internal_268570dd034864d423cb9b5a35acae4c3b44f267367493ca4639de4d1a1e6071->leave($__internal_268570dd034864d423cb9b5a35acae4c3b44f267367493ca4639de4d1a1e6071_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15bcd3ad01d4177c24e4f500075dc737541254b21cec91e50133e5e1f4444182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bcd3ad01d4177c24e4f500075dc737541254b21cec91e50133e5e1f4444182->enter($__internal_15bcd3ad01d4177c24e4f500075dc737541254b21cec91e50133e5e1f4444182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fecd538ab9ff5c7c4ec6aecb91c4838a73280f1d878290502915c5779d4b6172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecd538ab9ff5c7c4ec6aecb91c4838a73280f1d878290502915c5779d4b6172->enter($__internal_fecd538ab9ff5c7c4ec6aecb91c4838a73280f1d878290502915c5779d4b6172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_fecd538ab9ff5c7c4ec6aecb91c4838a73280f1d878290502915c5779d4b6172->leave($__internal_fecd538ab9ff5c7c4ec6aecb91c4838a73280f1d878290502915c5779d4b6172_prof);

        
        $__internal_15bcd3ad01d4177c24e4f500075dc737541254b21cec91e50133e5e1f4444182->leave($__internal_15bcd3ad01d4177c24e4f500075dc737541254b21cec91e50133e5e1f4444182_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  100 => 19,  89 => 21,  86 => 19,  83 => 17,  77 => 16,  68 => 13,  63 => 12,  58 => 11,  53 => 10,  50 => 8,  41 => 7,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}

{# On étend notre layout #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

  {# On affiche les messages flash que définissent les contrôleurs du bundle #}
  {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}

  {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
  {% block fos_user_content %}
  {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/Sf/src/OC/UserBundle/Resources/views/layout.html.twig");
    }
}
