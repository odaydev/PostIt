<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_439a997668aa0eee15ddad738df25b2b8a375421905ebdae5fb8291b174f2606 extends Twig_Template
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
        $__internal_fd573f09ddc7eb6961d764dc54b57397c5e2d6d8aa43c8956cfadffe28189656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd573f09ddc7eb6961d764dc54b57397c5e2d6d8aa43c8956cfadffe28189656->enter($__internal_fd573f09ddc7eb6961d764dc54b57397c5e2d6d8aa43c8956cfadffe28189656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_84af1104bcf022642ed3516e9e23e4cf84ff75b6c16233c6216bbc974f85d1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84af1104bcf022642ed3516e9e23e4cf84ff75b6c16233c6216bbc974f85d1f3->enter($__internal_84af1104bcf022642ed3516e9e23e4cf84ff75b6c16233c6216bbc974f85d1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fd573f09ddc7eb6961d764dc54b57397c5e2d6d8aa43c8956cfadffe28189656->leave($__internal_fd573f09ddc7eb6961d764dc54b57397c5e2d6d8aa43c8956cfadffe28189656_prof);

        
        $__internal_84af1104bcf022642ed3516e9e23e4cf84ff75b6c16233c6216bbc974f85d1f3->leave($__internal_84af1104bcf022642ed3516e9e23e4cf84ff75b6c16233c6216bbc974f85d1f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
