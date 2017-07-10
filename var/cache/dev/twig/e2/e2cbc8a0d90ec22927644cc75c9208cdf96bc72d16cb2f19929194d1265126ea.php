<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_633958c0c43686f10ce04d610b48f1559a9fc5d6191eaa09ca9fbd0ebc9faf6d extends Twig_Template
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
        $__internal_e53e739e1d7f8c076f9f358eca9dfad534725856b5b0b0acd85b20627bd0cdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53e739e1d7f8c076f9f358eca9dfad534725856b5b0b0acd85b20627bd0cdaf->enter($__internal_e53e739e1d7f8c076f9f358eca9dfad534725856b5b0b0acd85b20627bd0cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_26bee7cf98dc29cd4e470dbeb8112a73023673694517f10b8d4200738a735d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bee7cf98dc29cd4e470dbeb8112a73023673694517f10b8d4200738a735d34->enter($__internal_26bee7cf98dc29cd4e470dbeb8112a73023673694517f10b8d4200738a735d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e53e739e1d7f8c076f9f358eca9dfad534725856b5b0b0acd85b20627bd0cdaf->leave($__internal_e53e739e1d7f8c076f9f358eca9dfad534725856b5b0b0acd85b20627bd0cdaf_prof);

        
        $__internal_26bee7cf98dc29cd4e470dbeb8112a73023673694517f10b8d4200738a735d34->leave($__internal_26bee7cf98dc29cd4e470dbeb8112a73023673694517f10b8d4200738a735d34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
