<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2fabbcdc9358efc47d92bedabfedba410d68db88f4cf2c7b096b2e01c1e40a87 extends Twig_Template
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
        $__internal_d26d9b8f72dc4c7ebabea29ab83c25283e00cabfdc780c184dcfd1bb86118e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26d9b8f72dc4c7ebabea29ab83c25283e00cabfdc780c184dcfd1bb86118e05->enter($__internal_d26d9b8f72dc4c7ebabea29ab83c25283e00cabfdc780c184dcfd1bb86118e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4ec0052507b30c625d00c789ea517fbf93cfd73fe303e641b478a7fa57303008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec0052507b30c625d00c789ea517fbf93cfd73fe303e641b478a7fa57303008->enter($__internal_4ec0052507b30c625d00c789ea517fbf93cfd73fe303e641b478a7fa57303008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d26d9b8f72dc4c7ebabea29ab83c25283e00cabfdc780c184dcfd1bb86118e05->leave($__internal_d26d9b8f72dc4c7ebabea29ab83c25283e00cabfdc780c184dcfd1bb86118e05_prof);

        
        $__internal_4ec0052507b30c625d00c789ea517fbf93cfd73fe303e641b478a7fa57303008->leave($__internal_4ec0052507b30c625d00c789ea517fbf93cfd73fe303e641b478a7fa57303008_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
