<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_98088fb377fae2381d0a2f9af1dd8ff7df073ac29ff01b20ccf881e63d57ba35 extends Twig_Template
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
        $__internal_7711ccb6760a296ea1c471653e2c9a3cc50ecd3267b8d0ad7ba0f913100c4e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7711ccb6760a296ea1c471653e2c9a3cc50ecd3267b8d0ad7ba0f913100c4e87->enter($__internal_7711ccb6760a296ea1c471653e2c9a3cc50ecd3267b8d0ad7ba0f913100c4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_715a48aaf6c58b6569cd6e8eb49be7e3558cceb25ec857b384832d890d5e1aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715a48aaf6c58b6569cd6e8eb49be7e3558cceb25ec857b384832d890d5e1aac->enter($__internal_715a48aaf6c58b6569cd6e8eb49be7e3558cceb25ec857b384832d890d5e1aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7711ccb6760a296ea1c471653e2c9a3cc50ecd3267b8d0ad7ba0f913100c4e87->leave($__internal_7711ccb6760a296ea1c471653e2c9a3cc50ecd3267b8d0ad7ba0f913100c4e87_prof);

        
        $__internal_715a48aaf6c58b6569cd6e8eb49be7e3558cceb25ec857b384832d890d5e1aac->leave($__internal_715a48aaf6c58b6569cd6e8eb49be7e3558cceb25ec857b384832d890d5e1aac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
