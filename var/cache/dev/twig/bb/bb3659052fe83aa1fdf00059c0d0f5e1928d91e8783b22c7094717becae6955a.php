<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3720830b0bc094058410187ee4403578aef5f225ca4a3e98ddcfbed8a78b19eb extends Twig_Template
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
        $__internal_86cfe590eed7ee4c6f24bfa4c9d3aa68d93c49ed65820ff8bcdecfb9ef041a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cfe590eed7ee4c6f24bfa4c9d3aa68d93c49ed65820ff8bcdecfb9ef041a12->enter($__internal_86cfe590eed7ee4c6f24bfa4c9d3aa68d93c49ed65820ff8bcdecfb9ef041a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e949ad4d1f4281b1c42ce39b8bd6235291c05487962262c30b63183a1ddae177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e949ad4d1f4281b1c42ce39b8bd6235291c05487962262c30b63183a1ddae177->enter($__internal_e949ad4d1f4281b1c42ce39b8bd6235291c05487962262c30b63183a1ddae177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_86cfe590eed7ee4c6f24bfa4c9d3aa68d93c49ed65820ff8bcdecfb9ef041a12->leave($__internal_86cfe590eed7ee4c6f24bfa4c9d3aa68d93c49ed65820ff8bcdecfb9ef041a12_prof);

        
        $__internal_e949ad4d1f4281b1c42ce39b8bd6235291c05487962262c30b63183a1ddae177->leave($__internal_e949ad4d1f4281b1c42ce39b8bd6235291c05487962262c30b63183a1ddae177_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
