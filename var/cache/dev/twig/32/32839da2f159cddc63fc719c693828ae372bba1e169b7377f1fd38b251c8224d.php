<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_59a0dd556b900d82d0f24f596369fc93bf3012036306bdc547704cad27ce7095 extends Twig_Template
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
        $__internal_9abe3d87c52cb9047e78b8b6448827646b71d5045b7974d19254c620a138781c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abe3d87c52cb9047e78b8b6448827646b71d5045b7974d19254c620a138781c->enter($__internal_9abe3d87c52cb9047e78b8b6448827646b71d5045b7974d19254c620a138781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5d2bd75cf3703be937783a21768647504e26cfc29c1df3e27269aea2f255f0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2bd75cf3703be937783a21768647504e26cfc29c1df3e27269aea2f255f0c3->enter($__internal_5d2bd75cf3703be937783a21768647504e26cfc29c1df3e27269aea2f255f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9abe3d87c52cb9047e78b8b6448827646b71d5045b7974d19254c620a138781c->leave($__internal_9abe3d87c52cb9047e78b8b6448827646b71d5045b7974d19254c620a138781c_prof);

        
        $__internal_5d2bd75cf3703be937783a21768647504e26cfc29c1df3e27269aea2f255f0c3->leave($__internal_5d2bd75cf3703be937783a21768647504e26cfc29c1df3e27269aea2f255f0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
