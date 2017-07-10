<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce6603f4243144b7b02d3e4196508b0b7f5af3eff807d3247f197a33eb70c547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fd629bd1ce33b659f17880e598a433612ff58df839f1cedc1d3f005af407cf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd629bd1ce33b659f17880e598a433612ff58df839f1cedc1d3f005af407cf80->enter($__internal_fd629bd1ce33b659f17880e598a433612ff58df839f1cedc1d3f005af407cf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ada6b1abc5b8312ba9a9815f6a5c1f2aae6ac274c300e64cfa267b57e31a07ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada6b1abc5b8312ba9a9815f6a5c1f2aae6ac274c300e64cfa267b57e31a07ab->enter($__internal_ada6b1abc5b8312ba9a9815f6a5c1f2aae6ac274c300e64cfa267b57e31a07ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd629bd1ce33b659f17880e598a433612ff58df839f1cedc1d3f005af407cf80->leave($__internal_fd629bd1ce33b659f17880e598a433612ff58df839f1cedc1d3f005af407cf80_prof);

        
        $__internal_ada6b1abc5b8312ba9a9815f6a5c1f2aae6ac274c300e64cfa267b57e31a07ab->leave($__internal_ada6b1abc5b8312ba9a9815f6a5c1f2aae6ac274c300e64cfa267b57e31a07ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc59215ed8ca6c9116d025df92c991bbb62f3735515d8873df5eb31175de5ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc59215ed8ca6c9116d025df92c991bbb62f3735515d8873df5eb31175de5ddc->enter($__internal_fc59215ed8ca6c9116d025df92c991bbb62f3735515d8873df5eb31175de5ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a3e88aacd148e36e028c8048f3e3f7b9897a6d0f28e9d7e549d01f3979b17a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3e88aacd148e36e028c8048f3e3f7b9897a6d0f28e9d7e549d01f3979b17a2->enter($__internal_4a3e88aacd148e36e028c8048f3e3f7b9897a6d0f28e9d7e549d01f3979b17a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4a3e88aacd148e36e028c8048f3e3f7b9897a6d0f28e9d7e549d01f3979b17a2->leave($__internal_4a3e88aacd148e36e028c8048f3e3f7b9897a6d0f28e9d7e549d01f3979b17a2_prof);

        
        $__internal_fc59215ed8ca6c9116d025df92c991bbb62f3735515d8873df5eb31175de5ddc->leave($__internal_fc59215ed8ca6c9116d025df92c991bbb62f3735515d8873df5eb31175de5ddc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cd8b65ed8b2b8a13c962d118ce31a2f0fda1096525aa6ccbf716c1020a1f408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd8b65ed8b2b8a13c962d118ce31a2f0fda1096525aa6ccbf716c1020a1f408->enter($__internal_0cd8b65ed8b2b8a13c962d118ce31a2f0fda1096525aa6ccbf716c1020a1f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1139c568d3d5c8fe123eea400aede9b08d2af8d1ef774dc41cae5f7f01686826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1139c568d3d5c8fe123eea400aede9b08d2af8d1ef774dc41cae5f7f01686826->enter($__internal_1139c568d3d5c8fe123eea400aede9b08d2af8d1ef774dc41cae5f7f01686826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1139c568d3d5c8fe123eea400aede9b08d2af8d1ef774dc41cae5f7f01686826->leave($__internal_1139c568d3d5c8fe123eea400aede9b08d2af8d1ef774dc41cae5f7f01686826_prof);

        
        $__internal_0cd8b65ed8b2b8a13c962d118ce31a2f0fda1096525aa6ccbf716c1020a1f408->leave($__internal_0cd8b65ed8b2b8a13c962d118ce31a2f0fda1096525aa6ccbf716c1020a1f408_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e6877a5322245149d41ee9796f3626efee0145bdae508d1ef78071f5a142753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6877a5322245149d41ee9796f3626efee0145bdae508d1ef78071f5a142753->enter($__internal_9e6877a5322245149d41ee9796f3626efee0145bdae508d1ef78071f5a142753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88c4680684a0015723688398b082bd1a7575cbab80458a9a9a8a14a82cb431f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c4680684a0015723688398b082bd1a7575cbab80458a9a9a8a14a82cb431f4->enter($__internal_88c4680684a0015723688398b082bd1a7575cbab80458a9a9a8a14a82cb431f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_88c4680684a0015723688398b082bd1a7575cbab80458a9a9a8a14a82cb431f4->leave($__internal_88c4680684a0015723688398b082bd1a7575cbab80458a9a9a8a14a82cb431f4_prof);

        
        $__internal_9e6877a5322245149d41ee9796f3626efee0145bdae508d1ef78071f5a142753->leave($__internal_9e6877a5322245149d41ee9796f3626efee0145bdae508d1ef78071f5a142753_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
