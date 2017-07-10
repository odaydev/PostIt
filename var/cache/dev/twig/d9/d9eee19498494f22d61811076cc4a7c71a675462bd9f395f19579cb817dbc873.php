<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_46b54956c86662483f9cc87fe59586f67086acef3ead4ae70d11e4f8f37ab3e1 extends Twig_Template
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
        $__internal_f2411473a7780d0fc10d261f269267b3e6011368a546c9063c151c22e94e588a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2411473a7780d0fc10d261f269267b3e6011368a546c9063c151c22e94e588a->enter($__internal_f2411473a7780d0fc10d261f269267b3e6011368a546c9063c151c22e94e588a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5bd2173f84e781a07d2a6b7ed2133b2435699239cb33efab33a9dac4298e9530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd2173f84e781a07d2a6b7ed2133b2435699239cb33efab33a9dac4298e9530->enter($__internal_5bd2173f84e781a07d2a6b7ed2133b2435699239cb33efab33a9dac4298e9530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f2411473a7780d0fc10d261f269267b3e6011368a546c9063c151c22e94e588a->leave($__internal_f2411473a7780d0fc10d261f269267b3e6011368a546c9063c151c22e94e588a_prof);

        
        $__internal_5bd2173f84e781a07d2a6b7ed2133b2435699239cb33efab33a9dac4298e9530->leave($__internal_5bd2173f84e781a07d2a6b7ed2133b2435699239cb33efab33a9dac4298e9530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
