<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9fd64e64e8b8df831edf8decf1738d76c8a5a22aa18679ef90d7c4090291866d extends Twig_Template
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
        $__internal_5fb99a61f9fd7cece89af580d548bbaf38a01fd3a7d076a7622899cad5e0de7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb99a61f9fd7cece89af580d548bbaf38a01fd3a7d076a7622899cad5e0de7b->enter($__internal_5fb99a61f9fd7cece89af580d548bbaf38a01fd3a7d076a7622899cad5e0de7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_74b5a4971deaf9360768a9a4934a23b3f718bef41dade16aef4eeff421544e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b5a4971deaf9360768a9a4934a23b3f718bef41dade16aef4eeff421544e49->enter($__internal_74b5a4971deaf9360768a9a4934a23b3f718bef41dade16aef4eeff421544e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5fb99a61f9fd7cece89af580d548bbaf38a01fd3a7d076a7622899cad5e0de7b->leave($__internal_5fb99a61f9fd7cece89af580d548bbaf38a01fd3a7d076a7622899cad5e0de7b_prof);

        
        $__internal_74b5a4971deaf9360768a9a4934a23b3f718bef41dade16aef4eeff421544e49->leave($__internal_74b5a4971deaf9360768a9a4934a23b3f718bef41dade16aef4eeff421544e49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
