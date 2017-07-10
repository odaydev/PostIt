<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b3b4306ac35b2bcf95d57daf4be4c9291f9aa360da528816fd8c3b32ba434459 extends Twig_Template
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
        $__internal_710e0fd55a16dc78b930fcc9d72d0d07a9836f94ab1a5b9cc281424712802856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710e0fd55a16dc78b930fcc9d72d0d07a9836f94ab1a5b9cc281424712802856->enter($__internal_710e0fd55a16dc78b930fcc9d72d0d07a9836f94ab1a5b9cc281424712802856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1cb44f5e9fcc83faf6c3f75fcaaf6aa8595664b09c8c49f24a4a2fb0601ad4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb44f5e9fcc83faf6c3f75fcaaf6aa8595664b09c8c49f24a4a2fb0601ad4d6->enter($__internal_1cb44f5e9fcc83faf6c3f75fcaaf6aa8595664b09c8c49f24a4a2fb0601ad4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_710e0fd55a16dc78b930fcc9d72d0d07a9836f94ab1a5b9cc281424712802856->leave($__internal_710e0fd55a16dc78b930fcc9d72d0d07a9836f94ab1a5b9cc281424712802856_prof);

        
        $__internal_1cb44f5e9fcc83faf6c3f75fcaaf6aa8595664b09c8c49f24a4a2fb0601ad4d6->leave($__internal_1cb44f5e9fcc83faf6c3f75fcaaf6aa8595664b09c8c49f24a4a2fb0601ad4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
