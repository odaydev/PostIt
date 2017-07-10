<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ce6aa6c0faac4a03fea228a9905e11d9673499bbc106ffbbe055215a0c255a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61467e16cecfe2eabd38ec2bfa8ca93d7c088de195bf7255b617438438c7bfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61467e16cecfe2eabd38ec2bfa8ca93d7c088de195bf7255b617438438c7bfa6->enter($__internal_61467e16cecfe2eabd38ec2bfa8ca93d7c088de195bf7255b617438438c7bfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cb807dae1537ad5bb1d3a68c209c561eec9b6b83343b08bb0f798bbf06bc72ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb807dae1537ad5bb1d3a68c209c561eec9b6b83343b08bb0f798bbf06bc72ee->enter($__internal_cb807dae1537ad5bb1d3a68c209c561eec9b6b83343b08bb0f798bbf06bc72ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61467e16cecfe2eabd38ec2bfa8ca93d7c088de195bf7255b617438438c7bfa6->leave($__internal_61467e16cecfe2eabd38ec2bfa8ca93d7c088de195bf7255b617438438c7bfa6_prof);

        
        $__internal_cb807dae1537ad5bb1d3a68c209c561eec9b6b83343b08bb0f798bbf06bc72ee->leave($__internal_cb807dae1537ad5bb1d3a68c209c561eec9b6b83343b08bb0f798bbf06bc72ee_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a422de9d61034d133bad7bb2b0d7638e68bee65e27a69d6cd87e57452d9a13fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422de9d61034d133bad7bb2b0d7638e68bee65e27a69d6cd87e57452d9a13fc->enter($__internal_a422de9d61034d133bad7bb2b0d7638e68bee65e27a69d6cd87e57452d9a13fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_40ac42808de1ee98d3670ae309b5d7738af87876496b4499137cdd2d394f3c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ac42808de1ee98d3670ae309b5d7738af87876496b4499137cdd2d394f3c0a->enter($__internal_40ac42808de1ee98d3670ae309b5d7738af87876496b4499137cdd2d394f3c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_40ac42808de1ee98d3670ae309b5d7738af87876496b4499137cdd2d394f3c0a->leave($__internal_40ac42808de1ee98d3670ae309b5d7738af87876496b4499137cdd2d394f3c0a_prof);

        
        $__internal_a422de9d61034d133bad7bb2b0d7638e68bee65e27a69d6cd87e57452d9a13fc->leave($__internal_a422de9d61034d133bad7bb2b0d7638e68bee65e27a69d6cd87e57452d9a13fc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df38fef6a0eed4e6b16a0a5a96a0b716bb8d46edb6fafc1182a50f39aa6438c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df38fef6a0eed4e6b16a0a5a96a0b716bb8d46edb6fafc1182a50f39aa6438c2->enter($__internal_df38fef6a0eed4e6b16a0a5a96a0b716bb8d46edb6fafc1182a50f39aa6438c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74bbb85f00635ee846625309338dcbe0c2693da395e5a6ccc3f560b25ff0fc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bbb85f00635ee846625309338dcbe0c2693da395e5a6ccc3f560b25ff0fc09->enter($__internal_74bbb85f00635ee846625309338dcbe0c2693da395e5a6ccc3f560b25ff0fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_74bbb85f00635ee846625309338dcbe0c2693da395e5a6ccc3f560b25ff0fc09->leave($__internal_74bbb85f00635ee846625309338dcbe0c2693da395e5a6ccc3f560b25ff0fc09_prof);

        
        $__internal_df38fef6a0eed4e6b16a0a5a96a0b716bb8d46edb6fafc1182a50f39aa6438c2->leave($__internal_df38fef6a0eed4e6b16a0a5a96a0b716bb8d46edb6fafc1182a50f39aa6438c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
