<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_92cd5b083b66c0a0308685f1d99f479f0d0edd0f76a5173730e3a392378c7dc4 extends Twig_Template
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
        $__internal_2100f4711ba21840a14353880b748cd2589070fcd0e1a24b1d56096b1863350f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2100f4711ba21840a14353880b748cd2589070fcd0e1a24b1d56096b1863350f->enter($__internal_2100f4711ba21840a14353880b748cd2589070fcd0e1a24b1d56096b1863350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d9310689e0b2b374bb7dd174fb136d0d3bf84c1b52d4228a0f9c21b0e1cb3c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9310689e0b2b374bb7dd174fb136d0d3bf84c1b52d4228a0f9c21b0e1cb3c92->enter($__internal_d9310689e0b2b374bb7dd174fb136d0d3bf84c1b52d4228a0f9c21b0e1cb3c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2100f4711ba21840a14353880b748cd2589070fcd0e1a24b1d56096b1863350f->leave($__internal_2100f4711ba21840a14353880b748cd2589070fcd0e1a24b1d56096b1863350f_prof);

        
        $__internal_d9310689e0b2b374bb7dd174fb136d0d3bf84c1b52d4228a0f9c21b0e1cb3c92->leave($__internal_d9310689e0b2b374bb7dd174fb136d0d3bf84c1b52d4228a0f9c21b0e1cb3c92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
