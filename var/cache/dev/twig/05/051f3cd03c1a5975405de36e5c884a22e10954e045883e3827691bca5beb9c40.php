<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_318d7745c42653a52681ee0be506e218c7cce46557684471c314e32ce8e438a0 extends Twig_Template
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
        $__internal_1d63a1bb1f92281370c1e6dba7b8f02025f420297b2cfe1b38afe0a73c2b4cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d63a1bb1f92281370c1e6dba7b8f02025f420297b2cfe1b38afe0a73c2b4cb2->enter($__internal_1d63a1bb1f92281370c1e6dba7b8f02025f420297b2cfe1b38afe0a73c2b4cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5c3e9a51ea74a86bdf51fcfa7528196d70f6141fc7713da9a346a5322686dbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3e9a51ea74a86bdf51fcfa7528196d70f6141fc7713da9a346a5322686dbd5->enter($__internal_5c3e9a51ea74a86bdf51fcfa7528196d70f6141fc7713da9a346a5322686dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1d63a1bb1f92281370c1e6dba7b8f02025f420297b2cfe1b38afe0a73c2b4cb2->leave($__internal_1d63a1bb1f92281370c1e6dba7b8f02025f420297b2cfe1b38afe0a73c2b4cb2_prof);

        
        $__internal_5c3e9a51ea74a86bdf51fcfa7528196d70f6141fc7713da9a346a5322686dbd5->leave($__internal_5c3e9a51ea74a86bdf51fcfa7528196d70f6141fc7713da9a346a5322686dbd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
