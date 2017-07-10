<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_305f393034813953f7f06a306bd81239b6d96e93b5a4db4fc1ef98210a0b7d7a extends Twig_Template
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
        $__internal_a0e9e403563e943664984c57f8aa40aca1a9f917f1b6c6d1a2b303a51741069f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e9e403563e943664984c57f8aa40aca1a9f917f1b6c6d1a2b303a51741069f->enter($__internal_a0e9e403563e943664984c57f8aa40aca1a9f917f1b6c6d1a2b303a51741069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bb264a38db8c5d1194eb24a21938364719d35cf0802a59b46383ae8f17af5752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb264a38db8c5d1194eb24a21938364719d35cf0802a59b46383ae8f17af5752->enter($__internal_bb264a38db8c5d1194eb24a21938364719d35cf0802a59b46383ae8f17af5752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a0e9e403563e943664984c57f8aa40aca1a9f917f1b6c6d1a2b303a51741069f->leave($__internal_a0e9e403563e943664984c57f8aa40aca1a9f917f1b6c6d1a2b303a51741069f_prof);

        
        $__internal_bb264a38db8c5d1194eb24a21938364719d35cf0802a59b46383ae8f17af5752->leave($__internal_bb264a38db8c5d1194eb24a21938364719d35cf0802a59b46383ae8f17af5752_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
