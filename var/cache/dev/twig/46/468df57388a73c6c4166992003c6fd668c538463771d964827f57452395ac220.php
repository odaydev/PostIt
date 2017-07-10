<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_278071a60a187b6356eb1cc916104a68e163cd5397191c2f06703e2666b7fcb0 extends Twig_Template
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
        $__internal_3597b89e68bbf941c8ca30b00a4063fe318097357cb393a76a7dcac83ca832a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3597b89e68bbf941c8ca30b00a4063fe318097357cb393a76a7dcac83ca832a2->enter($__internal_3597b89e68bbf941c8ca30b00a4063fe318097357cb393a76a7dcac83ca832a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_08195c2828140469f74c769107a0e98e1cb335ec1894c3f3bf8b7df2df399848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08195c2828140469f74c769107a0e98e1cb335ec1894c3f3bf8b7df2df399848->enter($__internal_08195c2828140469f74c769107a0e98e1cb335ec1894c3f3bf8b7df2df399848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3597b89e68bbf941c8ca30b00a4063fe318097357cb393a76a7dcac83ca832a2->leave($__internal_3597b89e68bbf941c8ca30b00a4063fe318097357cb393a76a7dcac83ca832a2_prof);

        
        $__internal_08195c2828140469f74c769107a0e98e1cb335ec1894c3f3bf8b7df2df399848->leave($__internal_08195c2828140469f74c769107a0e98e1cb335ec1894c3f3bf8b7df2df399848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
