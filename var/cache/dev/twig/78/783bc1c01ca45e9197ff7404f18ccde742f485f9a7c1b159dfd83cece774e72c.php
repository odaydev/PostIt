<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_68e0e5b2e17f04c8c684aecf929ea5eca99eea6daa6464a8e2731283de1ca444 extends Twig_Template
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
        $__internal_4ce1f685da4f2d19af2bf5805ad6cb5ba4c642ed1b90e9baf568529b3b9e473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce1f685da4f2d19af2bf5805ad6cb5ba4c642ed1b90e9baf568529b3b9e473b->enter($__internal_4ce1f685da4f2d19af2bf5805ad6cb5ba4c642ed1b90e9baf568529b3b9e473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8170d7c459e3e73d3ae2727457c8166d49f1f2aaefadf83dd48bf40891cb360d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8170d7c459e3e73d3ae2727457c8166d49f1f2aaefadf83dd48bf40891cb360d->enter($__internal_8170d7c459e3e73d3ae2727457c8166d49f1f2aaefadf83dd48bf40891cb360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4ce1f685da4f2d19af2bf5805ad6cb5ba4c642ed1b90e9baf568529b3b9e473b->leave($__internal_4ce1f685da4f2d19af2bf5805ad6cb5ba4c642ed1b90e9baf568529b3b9e473b_prof);

        
        $__internal_8170d7c459e3e73d3ae2727457c8166d49f1f2aaefadf83dd48bf40891cb360d->leave($__internal_8170d7c459e3e73d3ae2727457c8166d49f1f2aaefadf83dd48bf40891cb360d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
