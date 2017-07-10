<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6279afaf32a2d7a160d76cc5207d791e716b3f59788d5a6a61ac9b4415dbfe14 extends Twig_Template
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
        $__internal_2a55e6ae201b73681473b4511334f7b486319de0696d29e7fe52b1cad39d8eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a55e6ae201b73681473b4511334f7b486319de0696d29e7fe52b1cad39d8eec->enter($__internal_2a55e6ae201b73681473b4511334f7b486319de0696d29e7fe52b1cad39d8eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3b14739973576e6c4d95911abde81ee9e9890da82d2fc49e11ec553231c9b625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b14739973576e6c4d95911abde81ee9e9890da82d2fc49e11ec553231c9b625->enter($__internal_3b14739973576e6c4d95911abde81ee9e9890da82d2fc49e11ec553231c9b625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a55e6ae201b73681473b4511334f7b486319de0696d29e7fe52b1cad39d8eec->leave($__internal_2a55e6ae201b73681473b4511334f7b486319de0696d29e7fe52b1cad39d8eec_prof);

        
        $__internal_3b14739973576e6c4d95911abde81ee9e9890da82d2fc49e11ec553231c9b625->leave($__internal_3b14739973576e6c4d95911abde81ee9e9890da82d2fc49e11ec553231c9b625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
