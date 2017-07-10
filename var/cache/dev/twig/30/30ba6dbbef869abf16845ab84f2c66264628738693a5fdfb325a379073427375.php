<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_462fb5883c5a276e5bfa6efa7029e49ad0ae7eb7481e948a5baaad6e09ad82a1 extends Twig_Template
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
        $__internal_3c4972bf658890ea2ad22cbee99e7c8e9208e196c20deaeba3181a84d51a72f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4972bf658890ea2ad22cbee99e7c8e9208e196c20deaeba3181a84d51a72f1->enter($__internal_3c4972bf658890ea2ad22cbee99e7c8e9208e196c20deaeba3181a84d51a72f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_51f5e0f2151b3836ff2ade2c724f8f63c72501023f9a9f11b059f3941046d5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f5e0f2151b3836ff2ade2c724f8f63c72501023f9a9f11b059f3941046d5c5->enter($__internal_51f5e0f2151b3836ff2ade2c724f8f63c72501023f9a9f11b059f3941046d5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3c4972bf658890ea2ad22cbee99e7c8e9208e196c20deaeba3181a84d51a72f1->leave($__internal_3c4972bf658890ea2ad22cbee99e7c8e9208e196c20deaeba3181a84d51a72f1_prof);

        
        $__internal_51f5e0f2151b3836ff2ade2c724f8f63c72501023f9a9f11b059f3941046d5c5->leave($__internal_51f5e0f2151b3836ff2ade2c724f8f63c72501023f9a9f11b059f3941046d5c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
