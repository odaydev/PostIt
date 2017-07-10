<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1f28061ac1d342f55d3c9196ac52864bf6ce5dd832c98f99cb3d98415bf55ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ffff0e0557b304e9203ea9d79800120fa89c34cf1de44b40e4c5bd47c66797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffff0e0557b304e9203ea9d79800120fa89c34cf1de44b40e4c5bd47c66797e->enter($__internal_0ffff0e0557b304e9203ea9d79800120fa89c34cf1de44b40e4c5bd47c66797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b761c61e54e5de7151e7d672d7113a07cc1eb3008c60ef46182fae321ce0e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b761c61e54e5de7151e7d672d7113a07cc1eb3008c60ef46182fae321ce0e645->enter($__internal_b761c61e54e5de7151e7d672d7113a07cc1eb3008c60ef46182fae321ce0e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffff0e0557b304e9203ea9d79800120fa89c34cf1de44b40e4c5bd47c66797e->leave($__internal_0ffff0e0557b304e9203ea9d79800120fa89c34cf1de44b40e4c5bd47c66797e_prof);

        
        $__internal_b761c61e54e5de7151e7d672d7113a07cc1eb3008c60ef46182fae321ce0e645->leave($__internal_b761c61e54e5de7151e7d672d7113a07cc1eb3008c60ef46182fae321ce0e645_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a04455270e354d1fda65581fac7f3d2f9093317fc981a50f983dcac7bf5f698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a04455270e354d1fda65581fac7f3d2f9093317fc981a50f983dcac7bf5f698->enter($__internal_6a04455270e354d1fda65581fac7f3d2f9093317fc981a50f983dcac7bf5f698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_560609ccde28dbc89bde76417e994da01f1e74a88fd103abab38677b91889d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560609ccde28dbc89bde76417e994da01f1e74a88fd103abab38677b91889d79->enter($__internal_560609ccde28dbc89bde76417e994da01f1e74a88fd103abab38677b91889d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_560609ccde28dbc89bde76417e994da01f1e74a88fd103abab38677b91889d79->leave($__internal_560609ccde28dbc89bde76417e994da01f1e74a88fd103abab38677b91889d79_prof);

        
        $__internal_6a04455270e354d1fda65581fac7f3d2f9093317fc981a50f983dcac7bf5f698->leave($__internal_6a04455270e354d1fda65581fac7f3d2f9093317fc981a50f983dcac7bf5f698_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_344b994124b65f6591f277a258b37ebbae691d72fc80e2af993f3e962c4f56a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344b994124b65f6591f277a258b37ebbae691d72fc80e2af993f3e962c4f56a4->enter($__internal_344b994124b65f6591f277a258b37ebbae691d72fc80e2af993f3e962c4f56a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d6237bbd497b457d555ddeabec5d2ac081df0d4b540c19f645cac506ba64fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6237bbd497b457d555ddeabec5d2ac081df0d4b540c19f645cac506ba64fcd->enter($__internal_1d6237bbd497b457d555ddeabec5d2ac081df0d4b540c19f645cac506ba64fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d6237bbd497b457d555ddeabec5d2ac081df0d4b540c19f645cac506ba64fcd->leave($__internal_1d6237bbd497b457d555ddeabec5d2ac081df0d4b540c19f645cac506ba64fcd_prof);

        
        $__internal_344b994124b65f6591f277a258b37ebbae691d72fc80e2af993f3e962c4f56a4->leave($__internal_344b994124b65f6591f277a258b37ebbae691d72fc80e2af993f3e962c4f56a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdd243834c42692d4ceb22df62957cb05e96d4e8a8ba5d258f508e65944a8abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd243834c42692d4ceb22df62957cb05e96d4e8a8ba5d258f508e65944a8abb->enter($__internal_fdd243834c42692d4ceb22df62957cb05e96d4e8a8ba5d258f508e65944a8abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c7c7d473641c0a885223fc0d4ad4b8d338be328b4344a3f79255ab93a8bef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7c7d473641c0a885223fc0d4ad4b8d338be328b4344a3f79255ab93a8bef7e->enter($__internal_3c7c7d473641c0a885223fc0d4ad4b8d338be328b4344a3f79255ab93a8bef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c7c7d473641c0a885223fc0d4ad4b8d338be328b4344a3f79255ab93a8bef7e->leave($__internal_3c7c7d473641c0a885223fc0d4ad4b8d338be328b4344a3f79255ab93a8bef7e_prof);

        
        $__internal_fdd243834c42692d4ceb22df62957cb05e96d4e8a8ba5d258f508e65944a8abb->leave($__internal_fdd243834c42692d4ceb22df62957cb05e96d4e8a8ba5d258f508e65944a8abb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
