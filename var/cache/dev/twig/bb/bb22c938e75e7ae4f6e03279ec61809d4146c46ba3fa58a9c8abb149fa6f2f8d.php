<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2f1fce2f63173320df0c611be974f2f24b3e58894b10570afcbf00058a552414 extends Twig_Template
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
        $__internal_661c441dddd83fc87b51340774d39cb189608862a3d2ac9f9f2ed724706d8dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661c441dddd83fc87b51340774d39cb189608862a3d2ac9f9f2ed724706d8dbc->enter($__internal_661c441dddd83fc87b51340774d39cb189608862a3d2ac9f9f2ed724706d8dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ebc341629156b9964a10b8a86f3330e0e58df3bb5220133cb093197448b42531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc341629156b9964a10b8a86f3330e0e58df3bb5220133cb093197448b42531->enter($__internal_ebc341629156b9964a10b8a86f3330e0e58df3bb5220133cb093197448b42531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_661c441dddd83fc87b51340774d39cb189608862a3d2ac9f9f2ed724706d8dbc->leave($__internal_661c441dddd83fc87b51340774d39cb189608862a3d2ac9f9f2ed724706d8dbc_prof);

        
        $__internal_ebc341629156b9964a10b8a86f3330e0e58df3bb5220133cb093197448b42531->leave($__internal_ebc341629156b9964a10b8a86f3330e0e58df3bb5220133cb093197448b42531_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
