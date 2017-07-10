<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_13bfd2ae663f3cc33bf79e4dc08cfcea4eae5df57058d4e1eb4153b9ccfd861b extends Twig_Template
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
        $__internal_2ffd817fdb6ec47004167d154b51a785fa74d2d4bc7338a12d16f5105f2a1f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffd817fdb6ec47004167d154b51a785fa74d2d4bc7338a12d16f5105f2a1f77->enter($__internal_2ffd817fdb6ec47004167d154b51a785fa74d2d4bc7338a12d16f5105f2a1f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e398269ce0d1953f6e0de890b94d7eda0d64b1053c5d275fa9130be36918935b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e398269ce0d1953f6e0de890b94d7eda0d64b1053c5d275fa9130be36918935b->enter($__internal_e398269ce0d1953f6e0de890b94d7eda0d64b1053c5d275fa9130be36918935b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2ffd817fdb6ec47004167d154b51a785fa74d2d4bc7338a12d16f5105f2a1f77->leave($__internal_2ffd817fdb6ec47004167d154b51a785fa74d2d4bc7338a12d16f5105f2a1f77_prof);

        
        $__internal_e398269ce0d1953f6e0de890b94d7eda0d64b1053c5d275fa9130be36918935b->leave($__internal_e398269ce0d1953f6e0de890b94d7eda0d64b1053c5d275fa9130be36918935b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
