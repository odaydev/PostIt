<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_53f42040d9c630849feddc1d34d7db1495d06784bc93334e067e17902120c066 extends Twig_Template
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
        $__internal_86cc1198df4413741f1a670c1acd9544a651cfa6674f5912c26593f1627163c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cc1198df4413741f1a670c1acd9544a651cfa6674f5912c26593f1627163c2->enter($__internal_86cc1198df4413741f1a670c1acd9544a651cfa6674f5912c26593f1627163c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_53bb4b2101a3cbad47ff2cc2d4ee0e48f56492a41ac7406710dc72eed26be1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bb4b2101a3cbad47ff2cc2d4ee0e48f56492a41ac7406710dc72eed26be1fc->enter($__internal_53bb4b2101a3cbad47ff2cc2d4ee0e48f56492a41ac7406710dc72eed26be1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_86cc1198df4413741f1a670c1acd9544a651cfa6674f5912c26593f1627163c2->leave($__internal_86cc1198df4413741f1a670c1acd9544a651cfa6674f5912c26593f1627163c2_prof);

        
        $__internal_53bb4b2101a3cbad47ff2cc2d4ee0e48f56492a41ac7406710dc72eed26be1fc->leave($__internal_53bb4b2101a3cbad47ff2cc2d4ee0e48f56492a41ac7406710dc72eed26be1fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
