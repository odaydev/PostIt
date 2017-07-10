<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cb64de1dc1a1bd74a449bb05665df3dff79a1138057ad7247ab51a2b311f669b extends Twig_Template
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
        $__internal_58ff7872ac172e544f4cf92ca76b6c2c1678f9177c756bc1e5d3ba1bd6b0a5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ff7872ac172e544f4cf92ca76b6c2c1678f9177c756bc1e5d3ba1bd6b0a5d1->enter($__internal_58ff7872ac172e544f4cf92ca76b6c2c1678f9177c756bc1e5d3ba1bd6b0a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a956b33df222482e90fdd4e38470141d4fc00b268814e8aa1dd777d9595971a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a956b33df222482e90fdd4e38470141d4fc00b268814e8aa1dd777d9595971a8->enter($__internal_a956b33df222482e90fdd4e38470141d4fc00b268814e8aa1dd777d9595971a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_58ff7872ac172e544f4cf92ca76b6c2c1678f9177c756bc1e5d3ba1bd6b0a5d1->leave($__internal_58ff7872ac172e544f4cf92ca76b6c2c1678f9177c756bc1e5d3ba1bd6b0a5d1_prof);

        
        $__internal_a956b33df222482e90fdd4e38470141d4fc00b268814e8aa1dd777d9595971a8->leave($__internal_a956b33df222482e90fdd4e38470141d4fc00b268814e8aa1dd777d9595971a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
