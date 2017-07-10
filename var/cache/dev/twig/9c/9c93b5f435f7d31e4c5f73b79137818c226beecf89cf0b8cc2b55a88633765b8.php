<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_417f905ca7c408b98cf12922daba3f4b495479159132085b8845dd9f8e46cb75 extends Twig_Template
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
        $__internal_458002fff17ef218b778e1e6b40e5f2668be63403dae03f51e3003d33129dc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458002fff17ef218b778e1e6b40e5f2668be63403dae03f51e3003d33129dc69->enter($__internal_458002fff17ef218b778e1e6b40e5f2668be63403dae03f51e3003d33129dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_deed1e79c29f533ce4b0ab511f84c84ba0833f492594e069638b9d6f1dbb1cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deed1e79c29f533ce4b0ab511f84c84ba0833f492594e069638b9d6f1dbb1cbb->enter($__internal_deed1e79c29f533ce4b0ab511f84c84ba0833f492594e069638b9d6f1dbb1cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_458002fff17ef218b778e1e6b40e5f2668be63403dae03f51e3003d33129dc69->leave($__internal_458002fff17ef218b778e1e6b40e5f2668be63403dae03f51e3003d33129dc69_prof);

        
        $__internal_deed1e79c29f533ce4b0ab511f84c84ba0833f492594e069638b9d6f1dbb1cbb->leave($__internal_deed1e79c29f533ce4b0ab511f84c84ba0833f492594e069638b9d6f1dbb1cbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
