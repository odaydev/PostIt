<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_995f8b45ca1b2105b106292936945fcd498f0d976188b5dbeb1bb42054a0e688 extends Twig_Template
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
        $__internal_a45b890e5b2a107c89e5740295e06bb8d46275cccb79afe4b7b94a800ed87e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45b890e5b2a107c89e5740295e06bb8d46275cccb79afe4b7b94a800ed87e08->enter($__internal_a45b890e5b2a107c89e5740295e06bb8d46275cccb79afe4b7b94a800ed87e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f81f7fedb97b013ace1674b76ec7d8e6dd38852a7c9c39a4e771f9d4d9da2706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f7fedb97b013ace1674b76ec7d8e6dd38852a7c9c39a4e771f9d4d9da2706->enter($__internal_f81f7fedb97b013ace1674b76ec7d8e6dd38852a7c9c39a4e771f9d4d9da2706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a45b890e5b2a107c89e5740295e06bb8d46275cccb79afe4b7b94a800ed87e08->leave($__internal_a45b890e5b2a107c89e5740295e06bb8d46275cccb79afe4b7b94a800ed87e08_prof);

        
        $__internal_f81f7fedb97b013ace1674b76ec7d8e6dd38852a7c9c39a4e771f9d4d9da2706->leave($__internal_f81f7fedb97b013ace1674b76ec7d8e6dd38852a7c9c39a4e771f9d4d9da2706_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
