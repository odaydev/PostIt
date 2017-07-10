<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a3283a54c6afe3afcd74d4e6b9ffa395688b60f8c60810a4d21dff3ae3a87d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b00cd0d85c5088b79f0e8a7d54e8ba580940e5e45484bc6f08a6337f25274296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00cd0d85c5088b79f0e8a7d54e8ba580940e5e45484bc6f08a6337f25274296->enter($__internal_b00cd0d85c5088b79f0e8a7d54e8ba580940e5e45484bc6f08a6337f25274296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_161bea326c1bcfccfb2e0862161e2a5a5c4db4f77b59bc44f4c642701eab7664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161bea326c1bcfccfb2e0862161e2a5a5c4db4f77b59bc44f4c642701eab7664->enter($__internal_161bea326c1bcfccfb2e0862161e2a5a5c4db4f77b59bc44f4c642701eab7664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00cd0d85c5088b79f0e8a7d54e8ba580940e5e45484bc6f08a6337f25274296->leave($__internal_b00cd0d85c5088b79f0e8a7d54e8ba580940e5e45484bc6f08a6337f25274296_prof);

        
        $__internal_161bea326c1bcfccfb2e0862161e2a5a5c4db4f77b59bc44f4c642701eab7664->leave($__internal_161bea326c1bcfccfb2e0862161e2a5a5c4db4f77b59bc44f4c642701eab7664_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83d0f013c584c04ab67dd64adad1d01bca3db5aea4ab828a65f6bafef41fe926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d0f013c584c04ab67dd64adad1d01bca3db5aea4ab828a65f6bafef41fe926->enter($__internal_83d0f013c584c04ab67dd64adad1d01bca3db5aea4ab828a65f6bafef41fe926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30c38d9150d2b2e9102149016c20e822da592db41e3207e488187b26ffc14f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c38d9150d2b2e9102149016c20e822da592db41e3207e488187b26ffc14f85->enter($__internal_30c38d9150d2b2e9102149016c20e822da592db41e3207e488187b26ffc14f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_30c38d9150d2b2e9102149016c20e822da592db41e3207e488187b26ffc14f85->leave($__internal_30c38d9150d2b2e9102149016c20e822da592db41e3207e488187b26ffc14f85_prof);

        
        $__internal_83d0f013c584c04ab67dd64adad1d01bca3db5aea4ab828a65f6bafef41fe926->leave($__internal_83d0f013c584c04ab67dd64adad1d01bca3db5aea4ab828a65f6bafef41fe926_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a2ab609422707a38c694b61aaf3d5a03bc7bff5fe885b19c43c1f539dc1302c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2ab609422707a38c694b61aaf3d5a03bc7bff5fe885b19c43c1f539dc1302c->enter($__internal_6a2ab609422707a38c694b61aaf3d5a03bc7bff5fe885b19c43c1f539dc1302c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84cb501d20814c593f059da040ca9497ae5f1bb3dcc220da8c338f9c672966f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cb501d20814c593f059da040ca9497ae5f1bb3dcc220da8c338f9c672966f8->enter($__internal_84cb501d20814c593f059da040ca9497ae5f1bb3dcc220da8c338f9c672966f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_84cb501d20814c593f059da040ca9497ae5f1bb3dcc220da8c338f9c672966f8->leave($__internal_84cb501d20814c593f059da040ca9497ae5f1bb3dcc220da8c338f9c672966f8_prof);

        
        $__internal_6a2ab609422707a38c694b61aaf3d5a03bc7bff5fe885b19c43c1f539dc1302c->leave($__internal_6a2ab609422707a38c694b61aaf3d5a03bc7bff5fe885b19c43c1f539dc1302c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
