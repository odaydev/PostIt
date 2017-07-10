<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4a7a05f3140a964edae0e360fc57c7d396dadd360a753fb8c00eef0ef5fe1f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa7c70b74b04503b3ea34f05677ece0554f1bf1859ef4d2fbe3a1fee69c933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa7c70b74b04503b3ea34f05677ece0554f1bf1859ef4d2fbe3a1fee69c933c->enter($__internal_6fa7c70b74b04503b3ea34f05677ece0554f1bf1859ef4d2fbe3a1fee69c933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2afdb7e57ce0f02de27d5ac7d4dd45316ac4ad1de36f67a1d45c3ae1d030add6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afdb7e57ce0f02de27d5ac7d4dd45316ac4ad1de36f67a1d45c3ae1d030add6->enter($__internal_2afdb7e57ce0f02de27d5ac7d4dd45316ac4ad1de36f67a1d45c3ae1d030add6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa7c70b74b04503b3ea34f05677ece0554f1bf1859ef4d2fbe3a1fee69c933c->leave($__internal_6fa7c70b74b04503b3ea34f05677ece0554f1bf1859ef4d2fbe3a1fee69c933c_prof);

        
        $__internal_2afdb7e57ce0f02de27d5ac7d4dd45316ac4ad1de36f67a1d45c3ae1d030add6->leave($__internal_2afdb7e57ce0f02de27d5ac7d4dd45316ac4ad1de36f67a1d45c3ae1d030add6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4251739df6bb7a515ce425f8d40b9905bc91cdadeca5343bc5176aa43d4c34b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4251739df6bb7a515ce425f8d40b9905bc91cdadeca5343bc5176aa43d4c34b5->enter($__internal_4251739df6bb7a515ce425f8d40b9905bc91cdadeca5343bc5176aa43d4c34b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0146d255a683d9f05ec881d6ea795956d5499ac0b8bcd1c5d4c51614ada6088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0146d255a683d9f05ec881d6ea795956d5499ac0b8bcd1c5d4c51614ada6088->enter($__internal_b0146d255a683d9f05ec881d6ea795956d5499ac0b8bcd1c5d4c51614ada6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b0146d255a683d9f05ec881d6ea795956d5499ac0b8bcd1c5d4c51614ada6088->leave($__internal_b0146d255a683d9f05ec881d6ea795956d5499ac0b8bcd1c5d4c51614ada6088_prof);

        
        $__internal_4251739df6bb7a515ce425f8d40b9905bc91cdadeca5343bc5176aa43d4c34b5->leave($__internal_4251739df6bb7a515ce425f8d40b9905bc91cdadeca5343bc5176aa43d4c34b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8df75fcf5297a72c3674bf539e58c79f0269b4f21bdacf82ece8c616e91a9011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df75fcf5297a72c3674bf539e58c79f0269b4f21bdacf82ece8c616e91a9011->enter($__internal_8df75fcf5297a72c3674bf539e58c79f0269b4f21bdacf82ece8c616e91a9011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f52d447660750e26b3f2f7c399bd759fe1709737c214592e132f7902a2fcc3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52d447660750e26b3f2f7c399bd759fe1709737c214592e132f7902a2fcc3e6->enter($__internal_f52d447660750e26b3f2f7c399bd759fe1709737c214592e132f7902a2fcc3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f52d447660750e26b3f2f7c399bd759fe1709737c214592e132f7902a2fcc3e6->leave($__internal_f52d447660750e26b3f2f7c399bd759fe1709737c214592e132f7902a2fcc3e6_prof);

        
        $__internal_8df75fcf5297a72c3674bf539e58c79f0269b4f21bdacf82ece8c616e91a9011->leave($__internal_8df75fcf5297a72c3674bf539e58c79f0269b4f21bdacf82ece8c616e91a9011_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
