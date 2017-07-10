<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ad0944881dbf7062e602c908f88bf55a04a272f78f760f78466febbad18c0865 extends Twig_Template
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
        $__internal_bfe0cb3fb73c843483478118cae37ca1326f2b3a721a58782900846ca9f9243b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe0cb3fb73c843483478118cae37ca1326f2b3a721a58782900846ca9f9243b->enter($__internal_bfe0cb3fb73c843483478118cae37ca1326f2b3a721a58782900846ca9f9243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a635b35f5ac1dc8c5319d996d8e397bf6a6ad8c759f1a351b7513b29fde321b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a635b35f5ac1dc8c5319d996d8e397bf6a6ad8c759f1a351b7513b29fde321b6->enter($__internal_a635b35f5ac1dc8c5319d996d8e397bf6a6ad8c759f1a351b7513b29fde321b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bfe0cb3fb73c843483478118cae37ca1326f2b3a721a58782900846ca9f9243b->leave($__internal_bfe0cb3fb73c843483478118cae37ca1326f2b3a721a58782900846ca9f9243b_prof);

        
        $__internal_a635b35f5ac1dc8c5319d996d8e397bf6a6ad8c759f1a351b7513b29fde321b6->leave($__internal_a635b35f5ac1dc8c5319d996d8e397bf6a6ad8c759f1a351b7513b29fde321b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
