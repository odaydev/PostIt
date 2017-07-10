<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1afd46d4d2721c8ad821f752a1f68ff7cc8827ca0c9c1e831e24059612495bf1 extends Twig_Template
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
        $__internal_362673a2e1bb585ddebdc04d21e0ada1fbf1c91eddcb55b87df97889465611ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362673a2e1bb585ddebdc04d21e0ada1fbf1c91eddcb55b87df97889465611ef->enter($__internal_362673a2e1bb585ddebdc04d21e0ada1fbf1c91eddcb55b87df97889465611ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_308314a8901415942f14213a2d13b39ca67f42e03e86cfb1548bbd18d8933ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308314a8901415942f14213a2d13b39ca67f42e03e86cfb1548bbd18d8933ce0->enter($__internal_308314a8901415942f14213a2d13b39ca67f42e03e86cfb1548bbd18d8933ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_362673a2e1bb585ddebdc04d21e0ada1fbf1c91eddcb55b87df97889465611ef->leave($__internal_362673a2e1bb585ddebdc04d21e0ada1fbf1c91eddcb55b87df97889465611ef_prof);

        
        $__internal_308314a8901415942f14213a2d13b39ca67f42e03e86cfb1548bbd18d8933ce0->leave($__internal_308314a8901415942f14213a2d13b39ca67f42e03e86cfb1548bbd18d8933ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
