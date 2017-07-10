<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_61bbfcb64179a6c99d74d4e1d94d87790308ae7792e6b9c65a5f32e250a60162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5492f015bcea16a604aaa618abd9b23dc2a6e82f8f72c6a32205b84b37a1c3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5492f015bcea16a604aaa618abd9b23dc2a6e82f8f72c6a32205b84b37a1c3c8->enter($__internal_5492f015bcea16a604aaa618abd9b23dc2a6e82f8f72c6a32205b84b37a1c3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7cd8985a35fb88a25af643b1b1624c404622ea75b3e35e05efd0fed43bbaf1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd8985a35fb88a25af643b1b1624c404622ea75b3e35e05efd0fed43bbaf1a4->enter($__internal_7cd8985a35fb88a25af643b1b1624c404622ea75b3e35e05efd0fed43bbaf1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5492f015bcea16a604aaa618abd9b23dc2a6e82f8f72c6a32205b84b37a1c3c8->leave($__internal_5492f015bcea16a604aaa618abd9b23dc2a6e82f8f72c6a32205b84b37a1c3c8_prof);

        
        $__internal_7cd8985a35fb88a25af643b1b1624c404622ea75b3e35e05efd0fed43bbaf1a4->leave($__internal_7cd8985a35fb88a25af643b1b1624c404622ea75b3e35e05efd0fed43bbaf1a4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3969acf113b60fbcafe76d2aa2c328f2bb8c64d49d54202ad3b1cd1700629a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3969acf113b60fbcafe76d2aa2c328f2bb8c64d49d54202ad3b1cd1700629a7d->enter($__internal_3969acf113b60fbcafe76d2aa2c328f2bb8c64d49d54202ad3b1cd1700629a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2667288cf467ec50b4cf746489999802d3cca034279a0a4c9d59913f3094869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2667288cf467ec50b4cf746489999802d3cca034279a0a4c9d59913f3094869->enter($__internal_d2667288cf467ec50b4cf746489999802d3cca034279a0a4c9d59913f3094869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2667288cf467ec50b4cf746489999802d3cca034279a0a4c9d59913f3094869->leave($__internal_d2667288cf467ec50b4cf746489999802d3cca034279a0a4c9d59913f3094869_prof);

        
        $__internal_3969acf113b60fbcafe76d2aa2c328f2bb8c64d49d54202ad3b1cd1700629a7d->leave($__internal_3969acf113b60fbcafe76d2aa2c328f2bb8c64d49d54202ad3b1cd1700629a7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
