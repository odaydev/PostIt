<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c37b6ef3eb5da57cc61d3e37504b0e075c90de1e79fa0ff241ab71e59a0bb4b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8665aac4a78c84e5e6bdf7c2428202786303a70b6987c166af2b7605edcb08d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8665aac4a78c84e5e6bdf7c2428202786303a70b6987c166af2b7605edcb08d3->enter($__internal_8665aac4a78c84e5e6bdf7c2428202786303a70b6987c166af2b7605edcb08d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b14c56eb319fe84098b8f8ff6c2bb00da4f1536167dfea735d30eacd673f1dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14c56eb319fe84098b8f8ff6c2bb00da4f1536167dfea735d30eacd673f1dd1->enter($__internal_b14c56eb319fe84098b8f8ff6c2bb00da4f1536167dfea735d30eacd673f1dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8665aac4a78c84e5e6bdf7c2428202786303a70b6987c166af2b7605edcb08d3->leave($__internal_8665aac4a78c84e5e6bdf7c2428202786303a70b6987c166af2b7605edcb08d3_prof);

        
        $__internal_b14c56eb319fe84098b8f8ff6c2bb00da4f1536167dfea735d30eacd673f1dd1->leave($__internal_b14c56eb319fe84098b8f8ff6c2bb00da4f1536167dfea735d30eacd673f1dd1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_851f4c87aab511c6f1f746f8f747e181ca6c410da44988b9a438855e2ec7c0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851f4c87aab511c6f1f746f8f747e181ca6c410da44988b9a438855e2ec7c0fd->enter($__internal_851f4c87aab511c6f1f746f8f747e181ca6c410da44988b9a438855e2ec7c0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1bd750b687769a049e29dc4e4bb2f98b676abd1e1d5ea75532446ac4e7e6bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bd750b687769a049e29dc4e4bb2f98b676abd1e1d5ea75532446ac4e7e6bce->enter($__internal_d1bd750b687769a049e29dc4e4bb2f98b676abd1e1d5ea75532446ac4e7e6bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1bd750b687769a049e29dc4e4bb2f98b676abd1e1d5ea75532446ac4e7e6bce->leave($__internal_d1bd750b687769a049e29dc4e4bb2f98b676abd1e1d5ea75532446ac4e7e6bce_prof);

        
        $__internal_851f4c87aab511c6f1f746f8f747e181ca6c410da44988b9a438855e2ec7c0fd->leave($__internal_851f4c87aab511c6f1f746f8f747e181ca6c410da44988b9a438855e2ec7c0fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
