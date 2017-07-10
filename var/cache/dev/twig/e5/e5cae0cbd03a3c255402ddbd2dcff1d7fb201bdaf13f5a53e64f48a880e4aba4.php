<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4226c632a64c28a761eefb80c2e054a6b5048b966ff20485221fefac9d9fa5ca extends Twig_Template
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
        $__internal_ff22b596da76f46bac321d8ee8f21238226b18ace275ed1171df16af810168ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff22b596da76f46bac321d8ee8f21238226b18ace275ed1171df16af810168ac->enter($__internal_ff22b596da76f46bac321d8ee8f21238226b18ace275ed1171df16af810168ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b1aa38021ea1c7b43ba2dd7725b93f5a3e376598e96506451c77c160c616caf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aa38021ea1c7b43ba2dd7725b93f5a3e376598e96506451c77c160c616caf1->enter($__internal_b1aa38021ea1c7b43ba2dd7725b93f5a3e376598e96506451c77c160c616caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ff22b596da76f46bac321d8ee8f21238226b18ace275ed1171df16af810168ac->leave($__internal_ff22b596da76f46bac321d8ee8f21238226b18ace275ed1171df16af810168ac_prof);

        
        $__internal_b1aa38021ea1c7b43ba2dd7725b93f5a3e376598e96506451c77c160c616caf1->leave($__internal_b1aa38021ea1c7b43ba2dd7725b93f5a3e376598e96506451c77c160c616caf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
