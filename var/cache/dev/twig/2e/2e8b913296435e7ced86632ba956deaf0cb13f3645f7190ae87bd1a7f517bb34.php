<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2864875ac8707084572f3cc4dcf8f724a79128c02da18c471c86307bb80072e6 extends Twig_Template
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
        $__internal_d7c03e656dd2271181f0d41c8543ee443df97763e91f041495046122f83ae4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c03e656dd2271181f0d41c8543ee443df97763e91f041495046122f83ae4f2->enter($__internal_d7c03e656dd2271181f0d41c8543ee443df97763e91f041495046122f83ae4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6ca491346a7ecb580ff424ef031af901579cae99a92e10dc1c19d6337cc3f601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca491346a7ecb580ff424ef031af901579cae99a92e10dc1c19d6337cc3f601->enter($__internal_6ca491346a7ecb580ff424ef031af901579cae99a92e10dc1c19d6337cc3f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d7c03e656dd2271181f0d41c8543ee443df97763e91f041495046122f83ae4f2->leave($__internal_d7c03e656dd2271181f0d41c8543ee443df97763e91f041495046122f83ae4f2_prof);

        
        $__internal_6ca491346a7ecb580ff424ef031af901579cae99a92e10dc1c19d6337cc3f601->leave($__internal_6ca491346a7ecb580ff424ef031af901579cae99a92e10dc1c19d6337cc3f601_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
