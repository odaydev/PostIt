<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c36d29bbc36b1647de89daf1379d31e1eda451e3d9001e4e282013673476b2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a658bd373ee1ebcee465c4dc099b4748f141fb5ba318fc904e584a17a23a93fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a658bd373ee1ebcee465c4dc099b4748f141fb5ba318fc904e584a17a23a93fb->enter($__internal_a658bd373ee1ebcee465c4dc099b4748f141fb5ba318fc904e584a17a23a93fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5bc9392d30ff7948091b97a4e5a581a239068a51413c4f5d92693e155b53a745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc9392d30ff7948091b97a4e5a581a239068a51413c4f5d92693e155b53a745->enter($__internal_5bc9392d30ff7948091b97a4e5a581a239068a51413c4f5d92693e155b53a745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a658bd373ee1ebcee465c4dc099b4748f141fb5ba318fc904e584a17a23a93fb->leave($__internal_a658bd373ee1ebcee465c4dc099b4748f141fb5ba318fc904e584a17a23a93fb_prof);

        
        $__internal_5bc9392d30ff7948091b97a4e5a581a239068a51413c4f5d92693e155b53a745->leave($__internal_5bc9392d30ff7948091b97a4e5a581a239068a51413c4f5d92693e155b53a745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecfa79fd6535b01753016edfdfcf4a95c92a30748b48d3493cc77bbc3a3d6381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfa79fd6535b01753016edfdfcf4a95c92a30748b48d3493cc77bbc3a3d6381->enter($__internal_ecfa79fd6535b01753016edfdfcf4a95c92a30748b48d3493cc77bbc3a3d6381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ebc165fe1e6298ce2c91dc48bf2ca477bf7860edf6eec2b53cbd88f216d7de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebc165fe1e6298ce2c91dc48bf2ca477bf7860edf6eec2b53cbd88f216d7de9->enter($__internal_5ebc165fe1e6298ce2c91dc48bf2ca477bf7860edf6eec2b53cbd88f216d7de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5ebc165fe1e6298ce2c91dc48bf2ca477bf7860edf6eec2b53cbd88f216d7de9->leave($__internal_5ebc165fe1e6298ce2c91dc48bf2ca477bf7860edf6eec2b53cbd88f216d7de9_prof);

        
        $__internal_ecfa79fd6535b01753016edfdfcf4a95c92a30748b48d3493cc77bbc3a3d6381->leave($__internal_ecfa79fd6535b01753016edfdfcf4a95c92a30748b48d3493cc77bbc3a3d6381_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
