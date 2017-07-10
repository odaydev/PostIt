<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d9be52a7ab42d65535e490efbeefd700164830827c6c436eb2da35689dbe4656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_ba70f2d0e6e7d730e64d41c7e51f1f3ab64ee3e1ac552282d214e18c55b14671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba70f2d0e6e7d730e64d41c7e51f1f3ab64ee3e1ac552282d214e18c55b14671->enter($__internal_ba70f2d0e6e7d730e64d41c7e51f1f3ab64ee3e1ac552282d214e18c55b14671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d1bd71b5860c0e0b469dd89b839cbc91055ddce33d5239a9702449e6a41f3406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bd71b5860c0e0b469dd89b839cbc91055ddce33d5239a9702449e6a41f3406->enter($__internal_d1bd71b5860c0e0b469dd89b839cbc91055ddce33d5239a9702449e6a41f3406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba70f2d0e6e7d730e64d41c7e51f1f3ab64ee3e1ac552282d214e18c55b14671->leave($__internal_ba70f2d0e6e7d730e64d41c7e51f1f3ab64ee3e1ac552282d214e18c55b14671_prof);

        
        $__internal_d1bd71b5860c0e0b469dd89b839cbc91055ddce33d5239a9702449e6a41f3406->leave($__internal_d1bd71b5860c0e0b469dd89b839cbc91055ddce33d5239a9702449e6a41f3406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78724235bcc5b58b1b6b0f3590186a87270fc8b24972f50149732722b127be20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78724235bcc5b58b1b6b0f3590186a87270fc8b24972f50149732722b127be20->enter($__internal_78724235bcc5b58b1b6b0f3590186a87270fc8b24972f50149732722b127be20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eed01cd3c7070e33fbad92cbcff2c64ab02ad57081da8bce5625bc993b85736b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed01cd3c7070e33fbad92cbcff2c64ab02ad57081da8bce5625bc993b85736b->enter($__internal_eed01cd3c7070e33fbad92cbcff2c64ab02ad57081da8bce5625bc993b85736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eed01cd3c7070e33fbad92cbcff2c64ab02ad57081da8bce5625bc993b85736b->leave($__internal_eed01cd3c7070e33fbad92cbcff2c64ab02ad57081da8bce5625bc993b85736b_prof);

        
        $__internal_78724235bcc5b58b1b6b0f3590186a87270fc8b24972f50149732722b127be20->leave($__internal_78724235bcc5b58b1b6b0f3590186a87270fc8b24972f50149732722b127be20_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7c5b12a081103c16368eee2f33842057ed2544639eaedfa0021822810c7f5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c5b12a081103c16368eee2f33842057ed2544639eaedfa0021822810c7f5ca->enter($__internal_b7c5b12a081103c16368eee2f33842057ed2544639eaedfa0021822810c7f5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7e398d7c549fe98d9b3192f80b7977167579d0b93f4d79bc152575592037582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e398d7c549fe98d9b3192f80b7977167579d0b93f4d79bc152575592037582->enter($__internal_f7e398d7c549fe98d9b3192f80b7977167579d0b93f4d79bc152575592037582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7e398d7c549fe98d9b3192f80b7977167579d0b93f4d79bc152575592037582->leave($__internal_f7e398d7c549fe98d9b3192f80b7977167579d0b93f4d79bc152575592037582_prof);

        
        $__internal_b7c5b12a081103c16368eee2f33842057ed2544639eaedfa0021822810c7f5ca->leave($__internal_b7c5b12a081103c16368eee2f33842057ed2544639eaedfa0021822810c7f5ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
