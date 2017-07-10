<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6b9b72f2e326b7f6f1d04292ae66d45d7a4c274efb0aa9c495f99981c1b5ebf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_9c5e3b0b9a4fba34465e755e3fbc3106f33683ca5b0b2f1c7a6c75a325f8b1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5e3b0b9a4fba34465e755e3fbc3106f33683ca5b0b2f1c7a6c75a325f8b1d4->enter($__internal_9c5e3b0b9a4fba34465e755e3fbc3106f33683ca5b0b2f1c7a6c75a325f8b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_602ba51d03b8cacae0108d10c80c05734119a99108bc1098160772bb588fabd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602ba51d03b8cacae0108d10c80c05734119a99108bc1098160772bb588fabd5->enter($__internal_602ba51d03b8cacae0108d10c80c05734119a99108bc1098160772bb588fabd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5e3b0b9a4fba34465e755e3fbc3106f33683ca5b0b2f1c7a6c75a325f8b1d4->leave($__internal_9c5e3b0b9a4fba34465e755e3fbc3106f33683ca5b0b2f1c7a6c75a325f8b1d4_prof);

        
        $__internal_602ba51d03b8cacae0108d10c80c05734119a99108bc1098160772bb588fabd5->leave($__internal_602ba51d03b8cacae0108d10c80c05734119a99108bc1098160772bb588fabd5_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d4125f0f324a260e62cb8d1ffa9b5b4c9a60c66ba7bb4c85eb2e8fb959ed0e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4125f0f324a260e62cb8d1ffa9b5b4c9a60c66ba7bb4c85eb2e8fb959ed0e2c->enter($__internal_d4125f0f324a260e62cb8d1ffa9b5b4c9a60c66ba7bb4c85eb2e8fb959ed0e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b99808ddfc80d6ce9e0ded1190af25d20d0d06e6bae1ee236f4d6f7e32ea86ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99808ddfc80d6ce9e0ded1190af25d20d0d06e6bae1ee236f4d6f7e32ea86ba->enter($__internal_b99808ddfc80d6ce9e0ded1190af25d20d0d06e6bae1ee236f4d6f7e32ea86ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b99808ddfc80d6ce9e0ded1190af25d20d0d06e6bae1ee236f4d6f7e32ea86ba->leave($__internal_b99808ddfc80d6ce9e0ded1190af25d20d0d06e6bae1ee236f4d6f7e32ea86ba_prof);

        
        $__internal_d4125f0f324a260e62cb8d1ffa9b5b4c9a60c66ba7bb4c85eb2e8fb959ed0e2c->leave($__internal_d4125f0f324a260e62cb8d1ffa9b5b4c9a60c66ba7bb4c85eb2e8fb959ed0e2c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8abca81d1f46cbecb8c77f77651b8882a316185899bea9cf0ad18ac9438c795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8abca81d1f46cbecb8c77f77651b8882a316185899bea9cf0ad18ac9438c795->enter($__internal_a8abca81d1f46cbecb8c77f77651b8882a316185899bea9cf0ad18ac9438c795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b95205f7ff20fc15042a25faf4ea5dd073d893564d2b9ec39b811ee6973fdf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95205f7ff20fc15042a25faf4ea5dd073d893564d2b9ec39b811ee6973fdf0b->enter($__internal_b95205f7ff20fc15042a25faf4ea5dd073d893564d2b9ec39b811ee6973fdf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b95205f7ff20fc15042a25faf4ea5dd073d893564d2b9ec39b811ee6973fdf0b->leave($__internal_b95205f7ff20fc15042a25faf4ea5dd073d893564d2b9ec39b811ee6973fdf0b_prof);

        
        $__internal_a8abca81d1f46cbecb8c77f77651b8882a316185899bea9cf0ad18ac9438c795->leave($__internal_a8abca81d1f46cbecb8c77f77651b8882a316185899bea9cf0ad18ac9438c795_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
