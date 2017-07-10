<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ed72506b69da5f8ffdec4b007ecf405d1388ab2e8e7aefe6211488cb684f4b1a extends Twig_Template
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
        $__internal_7d7ae518eb2235adf718c00e8eba5ae2786d790a54a94ac3571cdd82d227b2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7ae518eb2235adf718c00e8eba5ae2786d790a54a94ac3571cdd82d227b2f4->enter($__internal_7d7ae518eb2235adf718c00e8eba5ae2786d790a54a94ac3571cdd82d227b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f9b9132ffb49b75f8fad115f2b142a22d5822cfeec98bff0c12ecd022c1438cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b9132ffb49b75f8fad115f2b142a22d5822cfeec98bff0c12ecd022c1438cc->enter($__internal_f9b9132ffb49b75f8fad115f2b142a22d5822cfeec98bff0c12ecd022c1438cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7d7ae518eb2235adf718c00e8eba5ae2786d790a54a94ac3571cdd82d227b2f4->leave($__internal_7d7ae518eb2235adf718c00e8eba5ae2786d790a54a94ac3571cdd82d227b2f4_prof);

        
        $__internal_f9b9132ffb49b75f8fad115f2b142a22d5822cfeec98bff0c12ecd022c1438cc->leave($__internal_f9b9132ffb49b75f8fad115f2b142a22d5822cfeec98bff0c12ecd022c1438cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
