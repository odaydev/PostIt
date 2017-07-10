<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_99b748b9edfcfdceca420aa543e23c3b02599df059a096b21d3b338c06202488 extends Twig_Template
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
        $__internal_49e1961a8de51e64de3280e955f19a6b5436ddf19a54673edbfd6186ef9442b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e1961a8de51e64de3280e955f19a6b5436ddf19a54673edbfd6186ef9442b4->enter($__internal_49e1961a8de51e64de3280e955f19a6b5436ddf19a54673edbfd6186ef9442b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_33223abb8b492da47851547527ee2d9ff65a446115921514b82d91e19f1f2650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33223abb8b492da47851547527ee2d9ff65a446115921514b82d91e19f1f2650->enter($__internal_33223abb8b492da47851547527ee2d9ff65a446115921514b82d91e19f1f2650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_49e1961a8de51e64de3280e955f19a6b5436ddf19a54673edbfd6186ef9442b4->leave($__internal_49e1961a8de51e64de3280e955f19a6b5436ddf19a54673edbfd6186ef9442b4_prof);

        
        $__internal_33223abb8b492da47851547527ee2d9ff65a446115921514b82d91e19f1f2650->leave($__internal_33223abb8b492da47851547527ee2d9ff65a446115921514b82d91e19f1f2650_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
