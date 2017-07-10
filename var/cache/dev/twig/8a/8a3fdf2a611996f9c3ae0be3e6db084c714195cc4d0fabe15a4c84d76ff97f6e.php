<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cd5a8ca908b4b768d9a0744616514471f215698f10fe1241cf5bdd2e29fb533 extends Twig_Template
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
        $__internal_ea65f4a51254bd004fc9eb17d809d1541134044c64faf859399644c88d3ec1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea65f4a51254bd004fc9eb17d809d1541134044c64faf859399644c88d3ec1bb->enter($__internal_ea65f4a51254bd004fc9eb17d809d1541134044c64faf859399644c88d3ec1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_aa720ad40871bce532f7ac4939a9e9216172cfa50be6371c97a5bae3ca5b15fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa720ad40871bce532f7ac4939a9e9216172cfa50be6371c97a5bae3ca5b15fe->enter($__internal_aa720ad40871bce532f7ac4939a9e9216172cfa50be6371c97a5bae3ca5b15fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ea65f4a51254bd004fc9eb17d809d1541134044c64faf859399644c88d3ec1bb->leave($__internal_ea65f4a51254bd004fc9eb17d809d1541134044c64faf859399644c88d3ec1bb_prof);

        
        $__internal_aa720ad40871bce532f7ac4939a9e9216172cfa50be6371c97a5bae3ca5b15fe->leave($__internal_aa720ad40871bce532f7ac4939a9e9216172cfa50be6371c97a5bae3ca5b15fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
