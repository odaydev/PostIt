<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_863fe07f41843e4c79ac68a33218bde5461dbb71ba5f3ba4ae086f39bed85285 extends Twig_Template
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
        $__internal_340ec9bbaab2f1efbb25bfcd7b4c1588cb37ff1f1287d961c766367247bfd061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340ec9bbaab2f1efbb25bfcd7b4c1588cb37ff1f1287d961c766367247bfd061->enter($__internal_340ec9bbaab2f1efbb25bfcd7b4c1588cb37ff1f1287d961c766367247bfd061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_280c115264f5ee3fdc0dc186f736871de3457f1b7bc1d4f2521d95d85433c428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280c115264f5ee3fdc0dc186f736871de3457f1b7bc1d4f2521d95d85433c428->enter($__internal_280c115264f5ee3fdc0dc186f736871de3457f1b7bc1d4f2521d95d85433c428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_340ec9bbaab2f1efbb25bfcd7b4c1588cb37ff1f1287d961c766367247bfd061->leave($__internal_340ec9bbaab2f1efbb25bfcd7b4c1588cb37ff1f1287d961c766367247bfd061_prof);

        
        $__internal_280c115264f5ee3fdc0dc186f736871de3457f1b7bc1d4f2521d95d85433c428->leave($__internal_280c115264f5ee3fdc0dc186f736871de3457f1b7bc1d4f2521d95d85433c428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
