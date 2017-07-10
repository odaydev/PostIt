<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f4874626a4978991617c2b499efe229d9b7fc2842d5945495bb9ba7769a71367 extends Twig_Template
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
        $__internal_2f63c516c4a80dbdbe32b5bfbc8621205c78ba5927008f4e5986ba8b9ca447c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f63c516c4a80dbdbe32b5bfbc8621205c78ba5927008f4e5986ba8b9ca447c6->enter($__internal_2f63c516c4a80dbdbe32b5bfbc8621205c78ba5927008f4e5986ba8b9ca447c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e9b8f8a2cf6f5c79719f9b9ee5af761dbea7a92d69fa39d61af95184a26d1e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b8f8a2cf6f5c79719f9b9ee5af761dbea7a92d69fa39d61af95184a26d1e78->enter($__internal_e9b8f8a2cf6f5c79719f9b9ee5af761dbea7a92d69fa39d61af95184a26d1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f63c516c4a80dbdbe32b5bfbc8621205c78ba5927008f4e5986ba8b9ca447c6->leave($__internal_2f63c516c4a80dbdbe32b5bfbc8621205c78ba5927008f4e5986ba8b9ca447c6_prof);

        
        $__internal_e9b8f8a2cf6f5c79719f9b9ee5af761dbea7a92d69fa39d61af95184a26d1e78->leave($__internal_e9b8f8a2cf6f5c79719f9b9ee5af761dbea7a92d69fa39d61af95184a26d1e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
