<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_414139a01446955fb024f1119968db27c4533765a7642e849748b7d2ce0bedb4 extends Twig_Template
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
        $__internal_dea13ef4bad7e384c3c1e2a0be9f050fd30dc51ff369578f9bdb6811bfd3a234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea13ef4bad7e384c3c1e2a0be9f050fd30dc51ff369578f9bdb6811bfd3a234->enter($__internal_dea13ef4bad7e384c3c1e2a0be9f050fd30dc51ff369578f9bdb6811bfd3a234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_416a35c9c3d038289c691b741c3f529169833f8ff0235d5b2ac9d32619e7dc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416a35c9c3d038289c691b741c3f529169833f8ff0235d5b2ac9d32619e7dc6d->enter($__internal_416a35c9c3d038289c691b741c3f529169833f8ff0235d5b2ac9d32619e7dc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dea13ef4bad7e384c3c1e2a0be9f050fd30dc51ff369578f9bdb6811bfd3a234->leave($__internal_dea13ef4bad7e384c3c1e2a0be9f050fd30dc51ff369578f9bdb6811bfd3a234_prof);

        
        $__internal_416a35c9c3d038289c691b741c3f529169833f8ff0235d5b2ac9d32619e7dc6d->leave($__internal_416a35c9c3d038289c691b741c3f529169833f8ff0235d5b2ac9d32619e7dc6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
