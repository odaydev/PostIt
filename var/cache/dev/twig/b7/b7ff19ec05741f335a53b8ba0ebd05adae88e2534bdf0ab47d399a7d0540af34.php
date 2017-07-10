<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_2f69bc57a845ab1b689db96ef16fb395d3f8e735507bd6af021ae5a2961d1dd9 extends Twig_Template
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
        $__internal_9233fcebef54203cc5d3340dec07e628c40d540773ff14771fd7a75a2c09ba6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9233fcebef54203cc5d3340dec07e628c40d540773ff14771fd7a75a2c09ba6e->enter($__internal_9233fcebef54203cc5d3340dec07e628c40d540773ff14771fd7a75a2c09ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_31f64f4f51f51f73791a75d2c3cd51f500a690fa5f96830ca53a32d80431e2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f64f4f51f51f73791a75d2c3cd51f500a690fa5f96830ca53a32d80431e2bf->enter($__internal_31f64f4f51f51f73791a75d2c3cd51f500a690fa5f96830ca53a32d80431e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_9233fcebef54203cc5d3340dec07e628c40d540773ff14771fd7a75a2c09ba6e->leave($__internal_9233fcebef54203cc5d3340dec07e628c40d540773ff14771fd7a75a2c09ba6e_prof);

        
        $__internal_31f64f4f51f51f73791a75d2c3cd51f500a690fa5f96830ca53a32d80431e2bf->leave($__internal_31f64f4f51f51f73791a75d2c3cd51f500a690fa5f96830ca53a32d80431e2bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
