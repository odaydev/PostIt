<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f4fe1ce2ec9caea83d0f3b059b5af039b7b06147ba79e5bef4f053a08299b693 extends Twig_Template
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
        $__internal_11e58ebd48b056897b66a7cd74b8095a6bacb81b3a06833d5163eadf136e3e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e58ebd48b056897b66a7cd74b8095a6bacb81b3a06833d5163eadf136e3e08->enter($__internal_11e58ebd48b056897b66a7cd74b8095a6bacb81b3a06833d5163eadf136e3e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_55b7fe997207c7e752162eae95695637bab78ef53d050ef6577438809bdd4f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b7fe997207c7e752162eae95695637bab78ef53d050ef6577438809bdd4f5d->enter($__internal_55b7fe997207c7e752162eae95695637bab78ef53d050ef6577438809bdd4f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_11e58ebd48b056897b66a7cd74b8095a6bacb81b3a06833d5163eadf136e3e08->leave($__internal_11e58ebd48b056897b66a7cd74b8095a6bacb81b3a06833d5163eadf136e3e08_prof);

        
        $__internal_55b7fe997207c7e752162eae95695637bab78ef53d050ef6577438809bdd4f5d->leave($__internal_55b7fe997207c7e752162eae95695637bab78ef53d050ef6577438809bdd4f5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
