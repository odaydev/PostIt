<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_39d3f47295a1a181636f5ed3001a0d31aad0dd47a29464de255fac4b4da90b3b extends Twig_Template
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
        $__internal_dc90e9d1880d659497ab5813ef40985f487fff5ede575c4bcfd88257745661c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc90e9d1880d659497ab5813ef40985f487fff5ede575c4bcfd88257745661c9->enter($__internal_dc90e9d1880d659497ab5813ef40985f487fff5ede575c4bcfd88257745661c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ed5d02eefc598b2666404da5f9682219f0135c1f90d86164e276e085c1ad167b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5d02eefc598b2666404da5f9682219f0135c1f90d86164e276e085c1ad167b->enter($__internal_ed5d02eefc598b2666404da5f9682219f0135c1f90d86164e276e085c1ad167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dc90e9d1880d659497ab5813ef40985f487fff5ede575c4bcfd88257745661c9->leave($__internal_dc90e9d1880d659497ab5813ef40985f487fff5ede575c4bcfd88257745661c9_prof);

        
        $__internal_ed5d02eefc598b2666404da5f9682219f0135c1f90d86164e276e085c1ad167b->leave($__internal_ed5d02eefc598b2666404da5f9682219f0135c1f90d86164e276e085c1ad167b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
