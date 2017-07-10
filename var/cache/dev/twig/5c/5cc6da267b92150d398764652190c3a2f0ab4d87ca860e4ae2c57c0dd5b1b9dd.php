<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_28f1c8b6c3b7a2a47f064cc652fbb0b0a7bba71e1708a8634ec754d7fc9409ff extends Twig_Template
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
        $__internal_bc314b3e6131778257161a43b0a9fc19baded4cbc2e26df207bfb7ec97385a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc314b3e6131778257161a43b0a9fc19baded4cbc2e26df207bfb7ec97385a9a->enter($__internal_bc314b3e6131778257161a43b0a9fc19baded4cbc2e26df207bfb7ec97385a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_4653466ebbc9b9609cda439e98ecff7a4e7cd7e00cb2dec2762b9f313128f4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4653466ebbc9b9609cda439e98ecff7a4e7cd7e00cb2dec2762b9f313128f4b1->enter($__internal_4653466ebbc9b9609cda439e98ecff7a4e7cd7e00cb2dec2762b9f313128f4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bc314b3e6131778257161a43b0a9fc19baded4cbc2e26df207bfb7ec97385a9a->leave($__internal_bc314b3e6131778257161a43b0a9fc19baded4cbc2e26df207bfb7ec97385a9a_prof);

        
        $__internal_4653466ebbc9b9609cda439e98ecff7a4e7cd7e00cb2dec2762b9f313128f4b1->leave($__internal_4653466ebbc9b9609cda439e98ecff7a4e7cd7e00cb2dec2762b9f313128f4b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
