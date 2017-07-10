<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_28666a13fb125348c5f4c82e790ee70f3134195b2cfa2b501c8984b488bac292 extends Twig_Template
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
        $__internal_e20f77513fd1c26b3722550569f8cfdead0b695681c25219a0e0f357b1093cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20f77513fd1c26b3722550569f8cfdead0b695681c25219a0e0f357b1093cad->enter($__internal_e20f77513fd1c26b3722550569f8cfdead0b695681c25219a0e0f357b1093cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_31cff2b62a019a45a7b4e08c8d378fa2966642c7bf4cb9f602ad0f08675597f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cff2b62a019a45a7b4e08c8d378fa2966642c7bf4cb9f602ad0f08675597f5->enter($__internal_31cff2b62a019a45a7b4e08c8d378fa2966642c7bf4cb9f602ad0f08675597f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e20f77513fd1c26b3722550569f8cfdead0b695681c25219a0e0f357b1093cad->leave($__internal_e20f77513fd1c26b3722550569f8cfdead0b695681c25219a0e0f357b1093cad_prof);

        
        $__internal_31cff2b62a019a45a7b4e08c8d378fa2966642c7bf4cb9f602ad0f08675597f5->leave($__internal_31cff2b62a019a45a7b4e08c8d378fa2966642c7bf4cb9f602ad0f08675597f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
