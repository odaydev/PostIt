<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_63257e219138663ab0600ac136f0f8ab6aee544567ded7666745f59bd1269467 extends Twig_Template
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
        $__internal_ecf592f268cd5b7f661fa6080f462c6796160e8597b13d2d6dab398a06fd1c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf592f268cd5b7f661fa6080f462c6796160e8597b13d2d6dab398a06fd1c5c->enter($__internal_ecf592f268cd5b7f661fa6080f462c6796160e8597b13d2d6dab398a06fd1c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_479b89ef5de28d027b533fb418ce112c27a1dc0e65081b2e1e32aefffb92fba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479b89ef5de28d027b533fb418ce112c27a1dc0e65081b2e1e32aefffb92fba2->enter($__internal_479b89ef5de28d027b533fb418ce112c27a1dc0e65081b2e1e32aefffb92fba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ecf592f268cd5b7f661fa6080f462c6796160e8597b13d2d6dab398a06fd1c5c->leave($__internal_ecf592f268cd5b7f661fa6080f462c6796160e8597b13d2d6dab398a06fd1c5c_prof);

        
        $__internal_479b89ef5de28d027b533fb418ce112c27a1dc0e65081b2e1e32aefffb92fba2->leave($__internal_479b89ef5de28d027b533fb418ce112c27a1dc0e65081b2e1e32aefffb92fba2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
