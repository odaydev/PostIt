<?php

/* ::setpicture.html.twig */
class __TwigTemplate_038ab7a3e20ce17f46f9bcd14738b9d366713e4f85e00c3a1347c957c7e3dccd extends Twig_Template
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
        $__internal_b395668437c1d6b9bc076f30eebab8cfbc3a4d868139dfc23590b95e54bddeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b395668437c1d6b9bc076f30eebab8cfbc3a4d868139dfc23590b95e54bddeae->enter($__internal_b395668437c1d6b9bc076f30eebab8cfbc3a4d868139dfc23590b95e54bddeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::setpicture.html.twig"));

        $__internal_3dbbd59d9564c940bc9603ca6dd753a3e8bc1180a7e185a109800398793ea586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbbd59d9564c940bc9603ca6dd753a3e8bc1180a7e185a109800398793ea586->enter($__internal_3dbbd59d9564c940bc9603ca6dd753a3e8bc1180a7e185a109800398793ea586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::setpicture.html.twig"));

        // line 1
        echo "
\t";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'form_start');
        echo "
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'widget');
        echo "
\t";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["forme"]) ? $context["forme"] : $this->getContext($context, "forme")), 'form_end');
        
        $__internal_b395668437c1d6b9bc076f30eebab8cfbc3a4d868139dfc23590b95e54bddeae->leave($__internal_b395668437c1d6b9bc076f30eebab8cfbc3a4d868139dfc23590b95e54bddeae_prof);

        
        $__internal_3dbbd59d9564c940bc9603ca6dd753a3e8bc1180a7e185a109800398793ea586->leave($__internal_3dbbd59d9564c940bc9603ca6dd753a3e8bc1180a7e185a109800398793ea586_prof);

    }

    public function getTemplateName()
    {
        return "::setpicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t{{ form_start(forme)  }}
\t{{ form_widget(forme) }}
\t{{ form_end(forme) }}", "::setpicture.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/setpicture.html.twig");
    }
}
