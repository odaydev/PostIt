<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8924fc8221c54daadb99c5c30725d23ccb25f11a2dfa63ee54f6077dbe17636f extends Twig_Template
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
        $__internal_cf0b56d449491b5e3f6755e8f64aba01beea895ecf1c34195b401c2f481b2474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0b56d449491b5e3f6755e8f64aba01beea895ecf1c34195b401c2f481b2474->enter($__internal_cf0b56d449491b5e3f6755e8f64aba01beea895ecf1c34195b401c2f481b2474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5f35261f0251aff804a50f78b4a9ebc47d0787f4e0eb38e7680aa2623b355740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f35261f0251aff804a50f78b4a9ebc47d0787f4e0eb38e7680aa2623b355740->enter($__internal_5f35261f0251aff804a50f78b4a9ebc47d0787f4e0eb38e7680aa2623b355740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf0b56d449491b5e3f6755e8f64aba01beea895ecf1c34195b401c2f481b2474->leave($__internal_cf0b56d449491b5e3f6755e8f64aba01beea895ecf1c34195b401c2f481b2474_prof);

        
        $__internal_5f35261f0251aff804a50f78b4a9ebc47d0787f4e0eb38e7680aa2623b355740->leave($__internal_5f35261f0251aff804a50f78b4a9ebc47d0787f4e0eb38e7680aa2623b355740_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
