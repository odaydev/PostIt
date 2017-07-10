<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6eb6a9a8ebc0c713e3d3b846396d0b1e820b63c9445c47d15cb7b699c35eeb9e extends Twig_Template
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
        $__internal_715528e91d1cf809b2a3808aa2655a3f584cf829552a53b1ba947ab5b3398c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715528e91d1cf809b2a3808aa2655a3f584cf829552a53b1ba947ab5b3398c90->enter($__internal_715528e91d1cf809b2a3808aa2655a3f584cf829552a53b1ba947ab5b3398c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7213607c5ac0a1d6c7a0ed094ff8eee7ac65ec287593b32021e35550f1289fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7213607c5ac0a1d6c7a0ed094ff8eee7ac65ec287593b32021e35550f1289fe2->enter($__internal_7213607c5ac0a1d6c7a0ed094ff8eee7ac65ec287593b32021e35550f1289fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_715528e91d1cf809b2a3808aa2655a3f584cf829552a53b1ba947ab5b3398c90->leave($__internal_715528e91d1cf809b2a3808aa2655a3f584cf829552a53b1ba947ab5b3398c90_prof);

        
        $__internal_7213607c5ac0a1d6c7a0ed094ff8eee7ac65ec287593b32021e35550f1289fe2->leave($__internal_7213607c5ac0a1d6c7a0ed094ff8eee7ac65ec287593b32021e35550f1289fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
