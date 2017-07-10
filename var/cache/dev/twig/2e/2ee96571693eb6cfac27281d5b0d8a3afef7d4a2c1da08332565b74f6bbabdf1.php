<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ba7dc4438751bcd8bc79e417c521a13e6099975664457d3a4f2387b25a913773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_8980f2f18acc247ef13acfa49db62804537ff9c4a91f2629f76189246b6d9484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8980f2f18acc247ef13acfa49db62804537ff9c4a91f2629f76189246b6d9484->enter($__internal_8980f2f18acc247ef13acfa49db62804537ff9c4a91f2629f76189246b6d9484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c88be9ad4a9f9e2c1d9f9b3b606d910b83d8d6dab0a300d8d6ce4bbdceda8c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88be9ad4a9f9e2c1d9f9b3b606d910b83d8d6dab0a300d8d6ce4bbdceda8c38->enter($__internal_c88be9ad4a9f9e2c1d9f9b3b606d910b83d8d6dab0a300d8d6ce4bbdceda8c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8980f2f18acc247ef13acfa49db62804537ff9c4a91f2629f76189246b6d9484->leave($__internal_8980f2f18acc247ef13acfa49db62804537ff9c4a91f2629f76189246b6d9484_prof);

        
        $__internal_c88be9ad4a9f9e2c1d9f9b3b606d910b83d8d6dab0a300d8d6ce4bbdceda8c38->leave($__internal_c88be9ad4a9f9e2c1d9f9b3b606d910b83d8d6dab0a300d8d6ce4bbdceda8c38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f76e969e562ab7c8d4393d73b0c39a8651537c727cc124ade71a1aeb0cd0faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f76e969e562ab7c8d4393d73b0c39a8651537c727cc124ade71a1aeb0cd0faa->enter($__internal_7f76e969e562ab7c8d4393d73b0c39a8651537c727cc124ade71a1aeb0cd0faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e5a1fd978a0c8e56bfe8bac24e63103b93dc9a492033d9f22f2fcb1e34bbe28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5a1fd978a0c8e56bfe8bac24e63103b93dc9a492033d9f22f2fcb1e34bbe28->enter($__internal_5e5a1fd978a0c8e56bfe8bac24e63103b93dc9a492033d9f22f2fcb1e34bbe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5e5a1fd978a0c8e56bfe8bac24e63103b93dc9a492033d9f22f2fcb1e34bbe28->leave($__internal_5e5a1fd978a0c8e56bfe8bac24e63103b93dc9a492033d9f22f2fcb1e34bbe28_prof);

        
        $__internal_7f76e969e562ab7c8d4393d73b0c39a8651537c727cc124ade71a1aeb0cd0faa->leave($__internal_7f76e969e562ab7c8d4393d73b0c39a8651537c727cc124ade71a1aeb0cd0faa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9066cab85e41755d2b1cc2ccf6f6db8c45476128f5232aa3353e2c59ad216282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9066cab85e41755d2b1cc2ccf6f6db8c45476128f5232aa3353e2c59ad216282->enter($__internal_9066cab85e41755d2b1cc2ccf6f6db8c45476128f5232aa3353e2c59ad216282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_811269fcc8ac58431f7ccc3766e80a5691ad2fac1c59d43205bf74e81935629c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811269fcc8ac58431f7ccc3766e80a5691ad2fac1c59d43205bf74e81935629c->enter($__internal_811269fcc8ac58431f7ccc3766e80a5691ad2fac1c59d43205bf74e81935629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_811269fcc8ac58431f7ccc3766e80a5691ad2fac1c59d43205bf74e81935629c->leave($__internal_811269fcc8ac58431f7ccc3766e80a5691ad2fac1c59d43205bf74e81935629c_prof);

        
        $__internal_9066cab85e41755d2b1cc2ccf6f6db8c45476128f5232aa3353e2c59ad216282->leave($__internal_9066cab85e41755d2b1cc2ccf6f6db8c45476128f5232aa3353e2c59ad216282_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
