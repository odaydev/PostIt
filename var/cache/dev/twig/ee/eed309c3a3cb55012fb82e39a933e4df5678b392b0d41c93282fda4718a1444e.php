<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cd1b0f4baeeef2235b74d531bb2883aa2aced2030133d772257df7b1ca2e47d1 extends Twig_Template
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
        $__internal_e75ba3eae233a0c8c7f5efcd9e66b79544b32808a9707e5cb2a54f62b7f3bb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75ba3eae233a0c8c7f5efcd9e66b79544b32808a9707e5cb2a54f62b7f3bb1e->enter($__internal_e75ba3eae233a0c8c7f5efcd9e66b79544b32808a9707e5cb2a54f62b7f3bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_08f9427afbf461b497ad2283c02137f0734c509c1ec59e1187761329fcdc94f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f9427afbf461b497ad2283c02137f0734c509c1ec59e1187761329fcdc94f9->enter($__internal_08f9427afbf461b497ad2283c02137f0734c509c1ec59e1187761329fcdc94f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e75ba3eae233a0c8c7f5efcd9e66b79544b32808a9707e5cb2a54f62b7f3bb1e->leave($__internal_e75ba3eae233a0c8c7f5efcd9e66b79544b32808a9707e5cb2a54f62b7f3bb1e_prof);

        
        $__internal_08f9427afbf461b497ad2283c02137f0734c509c1ec59e1187761329fcdc94f9->leave($__internal_08f9427afbf461b497ad2283c02137f0734c509c1ec59e1187761329fcdc94f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
