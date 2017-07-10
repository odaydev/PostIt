<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8cb97aa64453d030173ad1e3864de6dae891c85c78a7e1c52ed61bdc4a16b087 extends Twig_Template
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
        $__internal_f0707c392077a7ce1a127bd0a58b5aac12d45e7c2e18ef55ca54a9744fc20204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0707c392077a7ce1a127bd0a58b5aac12d45e7c2e18ef55ca54a9744fc20204->enter($__internal_f0707c392077a7ce1a127bd0a58b5aac12d45e7c2e18ef55ca54a9744fc20204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_d469c0d5260612c35a3aedfa58a76e0baa443d0a369aa2edb94d4cefd0e14d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d469c0d5260612c35a3aedfa58a76e0baa443d0a369aa2edb94d4cefd0e14d0e->enter($__internal_d469c0d5260612c35a3aedfa58a76e0baa443d0a369aa2edb94d4cefd0e14d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f0707c392077a7ce1a127bd0a58b5aac12d45e7c2e18ef55ca54a9744fc20204->leave($__internal_f0707c392077a7ce1a127bd0a58b5aac12d45e7c2e18ef55ca54a9744fc20204_prof);

        
        $__internal_d469c0d5260612c35a3aedfa58a76e0baa443d0a369aa2edb94d4cefd0e14d0e->leave($__internal_d469c0d5260612c35a3aedfa58a76e0baa443d0a369aa2edb94d4cefd0e14d0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
