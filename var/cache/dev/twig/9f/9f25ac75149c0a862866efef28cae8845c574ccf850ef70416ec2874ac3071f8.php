<?php

/* security/register.html.twig */
class __TwigTemplate_e66291173c0a1228325b38c683e6218eba48e392321cca544ae1e197e0f08a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c018576c636793c52dfd8c073e71315f173c7bfa3ca8352f907714bd0dcd8fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c018576c636793c52dfd8c073e71315f173c7bfa3ca8352f907714bd0dcd8fc6->enter($__internal_c018576c636793c52dfd8c073e71315f173c7bfa3ca8352f907714bd0dcd8fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_165a9e0337c48e7665bc307be1fa338adffeae8e3eb98342dd1dbf1e1992e270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165a9e0337c48e7665bc307be1fa338adffeae8e3eb98342dd1dbf1e1992e270->enter($__internal_165a9e0337c48e7665bc307be1fa338adffeae8e3eb98342dd1dbf1e1992e270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c018576c636793c52dfd8c073e71315f173c7bfa3ca8352f907714bd0dcd8fc6->leave($__internal_c018576c636793c52dfd8c073e71315f173c7bfa3ca8352f907714bd0dcd8fc6_prof);

        
        $__internal_165a9e0337c48e7665bc307be1fa338adffeae8e3eb98342dd1dbf1e1992e270->leave($__internal_165a9e0337c48e7665bc307be1fa338adffeae8e3eb98342dd1dbf1e1992e270_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9426d4a4bbaa3c2e961e7c6e0c8f9c120838cedc855d29465120155fa1180500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9426d4a4bbaa3c2e961e7c6e0c8f9c120838cedc855d29465120155fa1180500->enter($__internal_9426d4a4bbaa3c2e961e7c6e0c8f9c120838cedc855d29465120155fa1180500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a3d38f100c79a07eaeddb5c7ff2561031998aa1bc6d05c61813073609f08921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3d38f100c79a07eaeddb5c7ff2561031998aa1bc6d05c61813073609f08921->enter($__internal_5a3d38f100c79a07eaeddb5c7ff2561031998aa1bc6d05c61813073609f08921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<section class=\"page-content inscription\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "inscription-form", "class" => "topics-centered")));
        echo "
\t<aside id=\"inscription-aside\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/register.png"), "html", null, true);
        echo "\" alt=\"Shoot | Logo\"/>
\t\t<h1>Welcome on Post it !</h1>
\t</aside>
\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</section>

";
        
        $__internal_5a3d38f100c79a07eaeddb5c7ff2561031998aa1bc6d05c61813073609f08921->leave($__internal_5a3d38f100c79a07eaeddb5c7ff2561031998aa1bc6d05c61813073609f08921_prof);

        
        $__internal_9426d4a4bbaa3c2e961e7c6e0c8f9c120838cedc855d29465120155fa1180500->leave($__internal_9426d4a4bbaa3c2e961e7c6e0c8f9c120838cedc855d29465120155fa1180500_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  58 => 9,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{%  block body %}

<section class=\"page-content inscription\">
\t{{ form_start(form, {'attr': {'id': 'inscription-form', 'class': 'topics-centered'}} ) }}
\t<aside id=\"inscription-aside\">
\t\t<img src=\"{{asset('img/register.png')}}\" alt=\"Shoot | Logo\"/>
\t\t<h1>Welcome on Post it !</h1>
\t</aside>
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
</section>

{% endblock %}



", "security/register.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app\\Resources\\views\\security\\register.html.twig");
    }
}
