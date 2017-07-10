<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_927180892fd64b2d76328c3f7867ff25df18c4a84f98df65982ec6c9cec63670 extends Twig_Template
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
        $__internal_b662c765170c38e4961270e0b18efef052289dad30fbd34e8f158321f51fa5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b662c765170c38e4961270e0b18efef052289dad30fbd34e8f158321f51fa5e8->enter($__internal_b662c765170c38e4961270e0b18efef052289dad30fbd34e8f158321f51fa5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_083bbd7669b03915f934987b7e9831ea60b3739b8cd4ed4dde1f5a9848aa4677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083bbd7669b03915f934987b7e9831ea60b3739b8cd4ed4dde1f5a9848aa4677->enter($__internal_083bbd7669b03915f934987b7e9831ea60b3739b8cd4ed4dde1f5a9848aa4677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b662c765170c38e4961270e0b18efef052289dad30fbd34e8f158321f51fa5e8->leave($__internal_b662c765170c38e4961270e0b18efef052289dad30fbd34e8f158321f51fa5e8_prof);

        
        $__internal_083bbd7669b03915f934987b7e9831ea60b3739b8cd4ed4dde1f5a9848aa4677->leave($__internal_083bbd7669b03915f934987b7e9831ea60b3739b8cd4ed4dde1f5a9848aa4677_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
