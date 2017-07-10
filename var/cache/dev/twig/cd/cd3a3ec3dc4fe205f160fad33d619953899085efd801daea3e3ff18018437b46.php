<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3900a35c9521476af4be96782ae5e81ae795c52958371965d176cf3787a2a9bf extends Twig_Template
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
        $__internal_ced794f5b3ce2713a4ad903b52a99eb130179108fc8df030361b048694925e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced794f5b3ce2713a4ad903b52a99eb130179108fc8df030361b048694925e89->enter($__internal_ced794f5b3ce2713a4ad903b52a99eb130179108fc8df030361b048694925e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c5ca1f30cd0a9a7da4fcd40e8f2907f28ad37e9f6b1bdd96bfee47dbac1c16af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ca1f30cd0a9a7da4fcd40e8f2907f28ad37e9f6b1bdd96bfee47dbac1c16af->enter($__internal_c5ca1f30cd0a9a7da4fcd40e8f2907f28ad37e9f6b1bdd96bfee47dbac1c16af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ced794f5b3ce2713a4ad903b52a99eb130179108fc8df030361b048694925e89->leave($__internal_ced794f5b3ce2713a4ad903b52a99eb130179108fc8df030361b048694925e89_prof);

        
        $__internal_c5ca1f30cd0a9a7da4fcd40e8f2907f28ad37e9f6b1bdd96bfee47dbac1c16af->leave($__internal_c5ca1f30cd0a9a7da4fcd40e8f2907f28ad37e9f6b1bdd96bfee47dbac1c16af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
