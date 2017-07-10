<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2ce838d88149040e6fc5ec59645044fa6cda6759dd46c10b860a046c5f101f86 extends Twig_Template
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
        $__internal_5a7ef1d23c1a25147c2469155080fa1c5140a008164b8da12503b19cd0ffdd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7ef1d23c1a25147c2469155080fa1c5140a008164b8da12503b19cd0ffdd60->enter($__internal_5a7ef1d23c1a25147c2469155080fa1c5140a008164b8da12503b19cd0ffdd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ef4d14f3e7fe9c39a6756c896c4f32a461dcce5203db62d8223ebc15ecaeaa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4d14f3e7fe9c39a6756c896c4f32a461dcce5203db62d8223ebc15ecaeaa8d->enter($__internal_ef4d14f3e7fe9c39a6756c896c4f32a461dcce5203db62d8223ebc15ecaeaa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5a7ef1d23c1a25147c2469155080fa1c5140a008164b8da12503b19cd0ffdd60->leave($__internal_5a7ef1d23c1a25147c2469155080fa1c5140a008164b8da12503b19cd0ffdd60_prof);

        
        $__internal_ef4d14f3e7fe9c39a6756c896c4f32a461dcce5203db62d8223ebc15ecaeaa8d->leave($__internal_ef4d14f3e7fe9c39a6756c896c4f32a461dcce5203db62d8223ebc15ecaeaa8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
