<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_87407a4b6ddda7e0dc2a4c26589c0bd0129e614d770cba4eae1422c1da832bee extends Twig_Template
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
        $__internal_3eabc45c9473ba1edd267a85570937d69dab882f4e5b609d14e1964640712ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eabc45c9473ba1edd267a85570937d69dab882f4e5b609d14e1964640712ae4->enter($__internal_3eabc45c9473ba1edd267a85570937d69dab882f4e5b609d14e1964640712ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ff6f47c0ca5af65c201a9d0e7e07ee06a83aadebff176eaedac5aa7d28d722cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6f47c0ca5af65c201a9d0e7e07ee06a83aadebff176eaedac5aa7d28d722cb->enter($__internal_ff6f47c0ca5af65c201a9d0e7e07ee06a83aadebff176eaedac5aa7d28d722cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3eabc45c9473ba1edd267a85570937d69dab882f4e5b609d14e1964640712ae4->leave($__internal_3eabc45c9473ba1edd267a85570937d69dab882f4e5b609d14e1964640712ae4_prof);

        
        $__internal_ff6f47c0ca5af65c201a9d0e7e07ee06a83aadebff176eaedac5aa7d28d722cb->leave($__internal_ff6f47c0ca5af65c201a9d0e7e07ee06a83aadebff176eaedac5aa7d28d722cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
