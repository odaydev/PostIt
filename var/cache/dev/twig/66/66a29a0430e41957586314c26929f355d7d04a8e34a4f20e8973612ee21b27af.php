<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_380beeea7e06e9a42b1303038a6bb82f93087c7128a371f7c20736874ac08f55 extends Twig_Template
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
        $__internal_e2fc2b91903c84921871498048b2faa0355018a172ee938bba6ef315a3fac679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fc2b91903c84921871498048b2faa0355018a172ee938bba6ef315a3fac679->enter($__internal_e2fc2b91903c84921871498048b2faa0355018a172ee938bba6ef315a3fac679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a39c60c9291cd0bd4804686843d5ab0f05233ad1c424c1667a121e24c4f3686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39c60c9291cd0bd4804686843d5ab0f05233ad1c424c1667a121e24c4f3686d->enter($__internal_a39c60c9291cd0bd4804686843d5ab0f05233ad1c424c1667a121e24c4f3686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e2fc2b91903c84921871498048b2faa0355018a172ee938bba6ef315a3fac679->leave($__internal_e2fc2b91903c84921871498048b2faa0355018a172ee938bba6ef315a3fac679_prof);

        
        $__internal_a39c60c9291cd0bd4804686843d5ab0f05233ad1c424c1667a121e24c4f3686d->leave($__internal_a39c60c9291cd0bd4804686843d5ab0f05233ad1c424c1667a121e24c4f3686d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
