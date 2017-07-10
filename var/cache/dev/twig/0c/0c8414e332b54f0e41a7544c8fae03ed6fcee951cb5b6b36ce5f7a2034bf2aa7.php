<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e615ae97448019cba825ec5d8f8050ef56aa1e6071631a4697adc4ebb598a7c9 extends Twig_Template
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
        $__internal_9c52f3984873e3e181e4c50e853cd44d0a49d1708fdaa4b5bc03d1a7277468be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c52f3984873e3e181e4c50e853cd44d0a49d1708fdaa4b5bc03d1a7277468be->enter($__internal_9c52f3984873e3e181e4c50e853cd44d0a49d1708fdaa4b5bc03d1a7277468be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6b38a48983344d4106fbf473a844c4c696be2b6918e530b5f707af596b7bf8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b38a48983344d4106fbf473a844c4c696be2b6918e530b5f707af596b7bf8de->enter($__internal_6b38a48983344d4106fbf473a844c4c696be2b6918e530b5f707af596b7bf8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_9c52f3984873e3e181e4c50e853cd44d0a49d1708fdaa4b5bc03d1a7277468be->leave($__internal_9c52f3984873e3e181e4c50e853cd44d0a49d1708fdaa4b5bc03d1a7277468be_prof);

        
        $__internal_6b38a48983344d4106fbf473a844c4c696be2b6918e530b5f707af596b7bf8de->leave($__internal_6b38a48983344d4106fbf473a844c4c696be2b6918e530b5f707af596b7bf8de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
