<?php

/* setpicture.html.twig */
class __TwigTemplate_dfbb62dcd9a29e9f7d05b4f55afd3ef7218736e81e41c7591bb86d81d55ca540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e1472dfe38584c4f1a9a790d117fe96a6465a24eab5672737a634a861cb14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e1472dfe38584c4f1a9a790d117fe96a6465a24eab5672737a634a861cb14d->enter($__internal_43e1472dfe38584c4f1a9a790d117fe96a6465a24eab5672737a634a861cb14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "setpicture.html.twig"));

        $__internal_2f5592dfd4b0a140c89adfc9021cd5433d44b3dfa72e3fabcfb0635ba5fb99ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5592dfd4b0a140c89adfc9021cd5433d44b3dfa72e3fabcfb0635ba5fb99ef->enter($__internal_2f5592dfd4b0a140c89adfc9021cd5433d44b3dfa72e3fabcfb0635ba5fb99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "setpicture.html.twig"));

        // line 1
        echo "
\t";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'form_start');
        echo "
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'widget');
        echo "
\t";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'form_end');
        
        $__internal_43e1472dfe38584c4f1a9a790d117fe96a6465a24eab5672737a634a861cb14d->leave($__internal_43e1472dfe38584c4f1a9a790d117fe96a6465a24eab5672737a634a861cb14d_prof);

        
        $__internal_2f5592dfd4b0a140c89adfc9021cd5433d44b3dfa72e3fabcfb0635ba5fb99ef->leave($__internal_2f5592dfd4b0a140c89adfc9021cd5433d44b3dfa72e3fabcfb0635ba5fb99ef_prof);

    }

    public function getTemplateName()
    {
        return "setpicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t{{ form_start(forme)  }}
\t{{ form_widget(forme) }}
\t{{ form_end(forme) }}", "setpicture.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app\\Resources\\views\\setpicture.html.twig");
    }
}
