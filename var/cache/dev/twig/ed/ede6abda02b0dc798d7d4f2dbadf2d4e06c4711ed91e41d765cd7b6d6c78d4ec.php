<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_be18c0855e1d9ec8b6bba17d2daf4d532e42013601a193a5c5ce0b861729990b extends Twig_Template
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
        $__internal_c5e4348fd0275edf615cf129d98c1170f31cbf43d20819da59bd572b188d8026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e4348fd0275edf615cf129d98c1170f31cbf43d20819da59bd572b188d8026->enter($__internal_c5e4348fd0275edf615cf129d98c1170f31cbf43d20819da59bd572b188d8026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7a3505a652ea32faabe314531c229b49e15b8367aebe416d58d8537030dbc6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3505a652ea32faabe314531c229b49e15b8367aebe416d58d8537030dbc6f0->enter($__internal_7a3505a652ea32faabe314531c229b49e15b8367aebe416d58d8537030dbc6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c5e4348fd0275edf615cf129d98c1170f31cbf43d20819da59bd572b188d8026->leave($__internal_c5e4348fd0275edf615cf129d98c1170f31cbf43d20819da59bd572b188d8026_prof);

        
        $__internal_7a3505a652ea32faabe314531c229b49e15b8367aebe416d58d8537030dbc6f0->leave($__internal_7a3505a652ea32faabe314531c229b49e15b8367aebe416d58d8537030dbc6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
