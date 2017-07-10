<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_adac6505bd6d1509fc3b6564923604ba8962fd2795a2ffbc70011e58f33ac899 extends Twig_Template
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
        $__internal_959903adc1155473294a27b8c6f8b1cc44c02eb03ee60073df834bce6b27a893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959903adc1155473294a27b8c6f8b1cc44c02eb03ee60073df834bce6b27a893->enter($__internal_959903adc1155473294a27b8c6f8b1cc44c02eb03ee60073df834bce6b27a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9a4e4ab22d0e2adf09c65b23cc2494b4877f11f0d862d61bce04969d781a6c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4e4ab22d0e2adf09c65b23cc2494b4877f11f0d862d61bce04969d781a6c7a->enter($__internal_9a4e4ab22d0e2adf09c65b23cc2494b4877f11f0d862d61bce04969d781a6c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_959903adc1155473294a27b8c6f8b1cc44c02eb03ee60073df834bce6b27a893->leave($__internal_959903adc1155473294a27b8c6f8b1cc44c02eb03ee60073df834bce6b27a893_prof);

        
        $__internal_9a4e4ab22d0e2adf09c65b23cc2494b4877f11f0d862d61bce04969d781a6c7a->leave($__internal_9a4e4ab22d0e2adf09c65b23cc2494b4877f11f0d862d61bce04969d781a6c7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
