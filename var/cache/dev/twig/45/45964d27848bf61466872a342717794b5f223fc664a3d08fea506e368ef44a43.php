<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1b62004ab95f8ca7e4261b9b0942f7ba61ef33d98e18ce6ae3c8ffdb32349d87 extends Twig_Template
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
        $__internal_340ddfea3070e6b499a7a95ee9804885d3c5b3042931a6af88d65170929cfea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340ddfea3070e6b499a7a95ee9804885d3c5b3042931a6af88d65170929cfea2->enter($__internal_340ddfea3070e6b499a7a95ee9804885d3c5b3042931a6af88d65170929cfea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_aebd569c8533f30c3544da46c51965da4250361f142ebb6aa64e70275b8bbf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebd569c8533f30c3544da46c51965da4250361f142ebb6aa64e70275b8bbf16->enter($__internal_aebd569c8533f30c3544da46c51965da4250361f142ebb6aa64e70275b8bbf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_340ddfea3070e6b499a7a95ee9804885d3c5b3042931a6af88d65170929cfea2->leave($__internal_340ddfea3070e6b499a7a95ee9804885d3c5b3042931a6af88d65170929cfea2_prof);

        
        $__internal_aebd569c8533f30c3544da46c51965da4250361f142ebb6aa64e70275b8bbf16->leave($__internal_aebd569c8533f30c3544da46c51965da4250361f142ebb6aa64e70275b8bbf16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
