<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fdebfc83ec35ecf2b3f336684f8bce8b158aea57082ebd37c46db56a847425ad extends Twig_Template
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
        $__internal_222b578fff2ec52bbe1209c44ce011a406edfc44604f5518f7cfa8443dee6730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222b578fff2ec52bbe1209c44ce011a406edfc44604f5518f7cfa8443dee6730->enter($__internal_222b578fff2ec52bbe1209c44ce011a406edfc44604f5518f7cfa8443dee6730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c97671a2a19be62c94be22cef24b1d6e71aa9c0c3ed3b748dd3140a8df1760b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97671a2a19be62c94be22cef24b1d6e71aa9c0c3ed3b748dd3140a8df1760b1->enter($__internal_c97671a2a19be62c94be22cef24b1d6e71aa9c0c3ed3b748dd3140a8df1760b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_222b578fff2ec52bbe1209c44ce011a406edfc44604f5518f7cfa8443dee6730->leave($__internal_222b578fff2ec52bbe1209c44ce011a406edfc44604f5518f7cfa8443dee6730_prof);

        
        $__internal_c97671a2a19be62c94be22cef24b1d6e71aa9c0c3ed3b748dd3140a8df1760b1->leave($__internal_c97671a2a19be62c94be22cef24b1d6e71aa9c0c3ed3b748dd3140a8df1760b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
