<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3891b7e44d268a55bc963fea918181fd25401c9a2a2244c5d35938a230bea567 extends Twig_Template
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
        $__internal_788201b95bdc9004851f5e7805f4f911e0a7427e70222710ccc9565ba9f02945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788201b95bdc9004851f5e7805f4f911e0a7427e70222710ccc9565ba9f02945->enter($__internal_788201b95bdc9004851f5e7805f4f911e0a7427e70222710ccc9565ba9f02945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e0ac9e90bf3c200f3f01b77ce4fd71ced3564c0848723c3045ab34d143a10752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ac9e90bf3c200f3f01b77ce4fd71ced3564c0848723c3045ab34d143a10752->enter($__internal_e0ac9e90bf3c200f3f01b77ce4fd71ced3564c0848723c3045ab34d143a10752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_788201b95bdc9004851f5e7805f4f911e0a7427e70222710ccc9565ba9f02945->leave($__internal_788201b95bdc9004851f5e7805f4f911e0a7427e70222710ccc9565ba9f02945_prof);

        
        $__internal_e0ac9e90bf3c200f3f01b77ce4fd71ced3564c0848723c3045ab34d143a10752->leave($__internal_e0ac9e90bf3c200f3f01b77ce4fd71ced3564c0848723c3045ab34d143a10752_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
