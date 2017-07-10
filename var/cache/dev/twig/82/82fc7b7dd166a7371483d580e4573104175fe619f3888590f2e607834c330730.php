<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_db2b233ba93a132c4ee913987d1fa07384f80673c12b6fe4b38a903d6975c75a extends Twig_Template
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
        $__internal_b2b4e21926f2ef959ca70ace799398c552bbae45b63b4c968deab4bf5bf3efac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b4e21926f2ef959ca70ace799398c552bbae45b63b4c968deab4bf5bf3efac->enter($__internal_b2b4e21926f2ef959ca70ace799398c552bbae45b63b4c968deab4bf5bf3efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3ccc74a63b0fe34c578bfb06ee6cb7a6b13ca836ee58f6abe16f75913bd85407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccc74a63b0fe34c578bfb06ee6cb7a6b13ca836ee58f6abe16f75913bd85407->enter($__internal_3ccc74a63b0fe34c578bfb06ee6cb7a6b13ca836ee58f6abe16f75913bd85407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b2b4e21926f2ef959ca70ace799398c552bbae45b63b4c968deab4bf5bf3efac->leave($__internal_b2b4e21926f2ef959ca70ace799398c552bbae45b63b4c968deab4bf5bf3efac_prof);

        
        $__internal_3ccc74a63b0fe34c578bfb06ee6cb7a6b13ca836ee58f6abe16f75913bd85407->leave($__internal_3ccc74a63b0fe34c578bfb06ee6cb7a6b13ca836ee58f6abe16f75913bd85407_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
