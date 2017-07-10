<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_305d91a7f654ce01e9318116c0b423df5d08554a5702c9606ee03b9da24295e5 extends Twig_Template
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
        $__internal_64e28950cbd566c27bb856fc135b53653b947ba3ab24dcad100650e90230059f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e28950cbd566c27bb856fc135b53653b947ba3ab24dcad100650e90230059f->enter($__internal_64e28950cbd566c27bb856fc135b53653b947ba3ab24dcad100650e90230059f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8845c2e9521580ed8ba546d1a5d3900f7a4e665c52d8105517c03c7d5c8173f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8845c2e9521580ed8ba546d1a5d3900f7a4e665c52d8105517c03c7d5c8173f8->enter($__internal_8845c2e9521580ed8ba546d1a5d3900f7a4e665c52d8105517c03c7d5c8173f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_64e28950cbd566c27bb856fc135b53653b947ba3ab24dcad100650e90230059f->leave($__internal_64e28950cbd566c27bb856fc135b53653b947ba3ab24dcad100650e90230059f_prof);

        
        $__internal_8845c2e9521580ed8ba546d1a5d3900f7a4e665c52d8105517c03c7d5c8173f8->leave($__internal_8845c2e9521580ed8ba546d1a5d3900f7a4e665c52d8105517c03c7d5c8173f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
