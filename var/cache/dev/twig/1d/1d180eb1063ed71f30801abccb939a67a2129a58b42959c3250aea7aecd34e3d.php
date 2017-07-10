<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1e3e122d1930b5d4066c08d022b10be93ea16e6cf19c0ea080f375e1b5e66396 extends Twig_Template
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
        $__internal_d3e9d0d317e2b10c10c780a91f1b26cad48c3464cf32b9fabc982eeb3454a0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e9d0d317e2b10c10c780a91f1b26cad48c3464cf32b9fabc982eeb3454a0d6->enter($__internal_d3e9d0d317e2b10c10c780a91f1b26cad48c3464cf32b9fabc982eeb3454a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_43d5a933c0999ca53af84d23faa1bccd1f192063819f055e5e95ba48b00b6ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d5a933c0999ca53af84d23faa1bccd1f192063819f055e5e95ba48b00b6ad4->enter($__internal_43d5a933c0999ca53af84d23faa1bccd1f192063819f055e5e95ba48b00b6ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d3e9d0d317e2b10c10c780a91f1b26cad48c3464cf32b9fabc982eeb3454a0d6->leave($__internal_d3e9d0d317e2b10c10c780a91f1b26cad48c3464cf32b9fabc982eeb3454a0d6_prof);

        
        $__internal_43d5a933c0999ca53af84d23faa1bccd1f192063819f055e5e95ba48b00b6ad4->leave($__internal_43d5a933c0999ca53af84d23faa1bccd1f192063819f055e5e95ba48b00b6ad4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
