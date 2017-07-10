<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7c20985a593a53a3ae37d7de01382991e48d792040a8be4b027f1c609ae13556 extends Twig_Template
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
        $__internal_bfa982a32ff2d589cf271b6777f983f46cb29f662ff0fd34cb8cb04922bfd413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa982a32ff2d589cf271b6777f983f46cb29f662ff0fd34cb8cb04922bfd413->enter($__internal_bfa982a32ff2d589cf271b6777f983f46cb29f662ff0fd34cb8cb04922bfd413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b90c096961577157a6196ccdfaddc238a7cff13027a8c20842010c85eb750c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90c096961577157a6196ccdfaddc238a7cff13027a8c20842010c85eb750c1f->enter($__internal_b90c096961577157a6196ccdfaddc238a7cff13027a8c20842010c85eb750c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bfa982a32ff2d589cf271b6777f983f46cb29f662ff0fd34cb8cb04922bfd413->leave($__internal_bfa982a32ff2d589cf271b6777f983f46cb29f662ff0fd34cb8cb04922bfd413_prof);

        
        $__internal_b90c096961577157a6196ccdfaddc238a7cff13027a8c20842010c85eb750c1f->leave($__internal_b90c096961577157a6196ccdfaddc238a7cff13027a8c20842010c85eb750c1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
