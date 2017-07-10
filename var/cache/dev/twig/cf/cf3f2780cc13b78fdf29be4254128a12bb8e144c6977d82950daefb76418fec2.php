<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_775cf693ef9decdcd851f506a60380c1d097848eb87646c162cf19f1ebd4d9d5 extends Twig_Template
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
        $__internal_0a6ed7ce2bde061c77b19869d591b93c14feec4bc1c5eaaeb42395c4776428ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6ed7ce2bde061c77b19869d591b93c14feec4bc1c5eaaeb42395c4776428ec->enter($__internal_0a6ed7ce2bde061c77b19869d591b93c14feec4bc1c5eaaeb42395c4776428ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_daa375ca79620e5e510f50cc7d02ae22e123bcbbabb8275c7ca1c8b7591c4778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa375ca79620e5e510f50cc7d02ae22e123bcbbabb8275c7ca1c8b7591c4778->enter($__internal_daa375ca79620e5e510f50cc7d02ae22e123bcbbabb8275c7ca1c8b7591c4778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0a6ed7ce2bde061c77b19869d591b93c14feec4bc1c5eaaeb42395c4776428ec->leave($__internal_0a6ed7ce2bde061c77b19869d591b93c14feec4bc1c5eaaeb42395c4776428ec_prof);

        
        $__internal_daa375ca79620e5e510f50cc7d02ae22e123bcbbabb8275c7ca1c8b7591c4778->leave($__internal_daa375ca79620e5e510f50cc7d02ae22e123bcbbabb8275c7ca1c8b7591c4778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
