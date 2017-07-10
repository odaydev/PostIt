<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a7b04f7e2b1bf987a954c1a872401a87a6610fd8321241713588e036ddbe81a0 extends Twig_Template
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
        $__internal_1bf910aed3c34b980347c10d0557cbda000a86e299a16aba7a6d09d3d6050b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf910aed3c34b980347c10d0557cbda000a86e299a16aba7a6d09d3d6050b7e->enter($__internal_1bf910aed3c34b980347c10d0557cbda000a86e299a16aba7a6d09d3d6050b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f5e28cf70f420ecbd3d3491e9e437570df4f792b928e4b17ad17217fb80168c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e28cf70f420ecbd3d3491e9e437570df4f792b928e4b17ad17217fb80168c3->enter($__internal_f5e28cf70f420ecbd3d3491e9e437570df4f792b928e4b17ad17217fb80168c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1bf910aed3c34b980347c10d0557cbda000a86e299a16aba7a6d09d3d6050b7e->leave($__internal_1bf910aed3c34b980347c10d0557cbda000a86e299a16aba7a6d09d3d6050b7e_prof);

        
        $__internal_f5e28cf70f420ecbd3d3491e9e437570df4f792b928e4b17ad17217fb80168c3->leave($__internal_f5e28cf70f420ecbd3d3491e9e437570df4f792b928e4b17ad17217fb80168c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
