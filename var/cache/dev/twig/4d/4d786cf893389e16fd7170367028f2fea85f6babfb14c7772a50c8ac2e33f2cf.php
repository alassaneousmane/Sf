<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f546261a2edfb03afd333d3c221eb8841870152e54f21e99f530321d42ae553c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba866223482ff5336ab9a8fba01e772ca9f5716f0b10c11b5e07d729de92380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba866223482ff5336ab9a8fba01e772ca9f5716f0b10c11b5e07d729de92380->enter($__internal_eba866223482ff5336ab9a8fba01e772ca9f5716f0b10c11b5e07d729de92380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ea4db8b0021256a2d9698e586525c6d3d54d10b0d512af9cfd11055d9a3aa956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4db8b0021256a2d9698e586525c6d3d54d10b0d512af9cfd11055d9a3aa956->enter($__internal_ea4db8b0021256a2d9698e586525c6d3d54d10b0d512af9cfd11055d9a3aa956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eba866223482ff5336ab9a8fba01e772ca9f5716f0b10c11b5e07d729de92380->leave($__internal_eba866223482ff5336ab9a8fba01e772ca9f5716f0b10c11b5e07d729de92380_prof);

        
        $__internal_ea4db8b0021256a2d9698e586525c6d3d54d10b0d512af9cfd11055d9a3aa956->leave($__internal_ea4db8b0021256a2d9698e586525c6d3d54d10b0d512af9cfd11055d9a3aa956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/Sf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
