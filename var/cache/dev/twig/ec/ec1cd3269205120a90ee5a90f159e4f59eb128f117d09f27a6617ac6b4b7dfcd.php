<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9c804577ad58f9193c98438e7268d608a14b1b44a7f2f0bc96b68a803450c1cb extends Twig_Template
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
        $__internal_df83c725de856d7a7c761918e4134008a5ca64860a498edc496f82b8c950267c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df83c725de856d7a7c761918e4134008a5ca64860a498edc496f82b8c950267c->enter($__internal_df83c725de856d7a7c761918e4134008a5ca64860a498edc496f82b8c950267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_14548db02183fe9ce7ac07f442124f1adadeadc61fdd27786a96ff1a54e93819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14548db02183fe9ce7ac07f442124f1adadeadc61fdd27786a96ff1a54e93819->enter($__internal_14548db02183fe9ce7ac07f442124f1adadeadc61fdd27786a96ff1a54e93819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_df83c725de856d7a7c761918e4134008a5ca64860a498edc496f82b8c950267c->leave($__internal_df83c725de856d7a7c761918e4134008a5ca64860a498edc496f82b8c950267c_prof);

        
        $__internal_14548db02183fe9ce7ac07f442124f1adadeadc61fdd27786a96ff1a54e93819->leave($__internal_14548db02183fe9ce7ac07f442124f1adadeadc61fdd27786a96ff1a54e93819_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
