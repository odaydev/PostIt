<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0c3388c5cd7f001af5884db49df7d5d9c1aa9505834ecf742c9f0b37f23724ee extends Twig_Template
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
        $__internal_37d27d50ee12153b28c137641799307fbd974d4c679c933e5f1b0f9f1a1c554f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d27d50ee12153b28c137641799307fbd974d4c679c933e5f1b0f9f1a1c554f->enter($__internal_37d27d50ee12153b28c137641799307fbd974d4c679c933e5f1b0f9f1a1c554f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_da87052839bb0699c9f71af50db81825f4827e29812c20c0472d806aa5963f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da87052839bb0699c9f71af50db81825f4827e29812c20c0472d806aa5963f23->enter($__internal_da87052839bb0699c9f71af50db81825f4827e29812c20c0472d806aa5963f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37d27d50ee12153b28c137641799307fbd974d4c679c933e5f1b0f9f1a1c554f->leave($__internal_37d27d50ee12153b28c137641799307fbd974d4c679c933e5f1b0f9f1a1c554f_prof);

        
        $__internal_da87052839bb0699c9f71af50db81825f4827e29812c20c0472d806aa5963f23->leave($__internal_da87052839bb0699c9f71af50db81825f4827e29812c20c0472d806aa5963f23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
