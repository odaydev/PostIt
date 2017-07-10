<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5d85ec0f2be5d4ffc33fef7ccca3b0197d6b8fa49ffd065d18400e6cd845d1ac extends Twig_Template
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
        $__internal_ef05fcd4f64cb4d6a72556ee98b48afd6916b94fb820a8aefc6efa7460c17455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef05fcd4f64cb4d6a72556ee98b48afd6916b94fb820a8aefc6efa7460c17455->enter($__internal_ef05fcd4f64cb4d6a72556ee98b48afd6916b94fb820a8aefc6efa7460c17455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f734560221e65b317d217c461d418a83d2a316e40ba289f17221771153aa9b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f734560221e65b317d217c461d418a83d2a316e40ba289f17221771153aa9b0d->enter($__internal_f734560221e65b317d217c461d418a83d2a316e40ba289f17221771153aa9b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef05fcd4f64cb4d6a72556ee98b48afd6916b94fb820a8aefc6efa7460c17455->leave($__internal_ef05fcd4f64cb4d6a72556ee98b48afd6916b94fb820a8aefc6efa7460c17455_prof);

        
        $__internal_f734560221e65b317d217c461d418a83d2a316e40ba289f17221771153aa9b0d->leave($__internal_f734560221e65b317d217c461d418a83d2a316e40ba289f17221771153aa9b0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
