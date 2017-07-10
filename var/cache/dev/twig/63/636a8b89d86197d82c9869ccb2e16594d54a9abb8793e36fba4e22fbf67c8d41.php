<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fb98a080417c7e4d7722f2228bbf2864c4ea5d4e7ba99f5d9e2025dcd8869fd0 extends Twig_Template
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
        $__internal_2adc9b62514ebed55d77741b3195e4237e74227f28c511449702a417295ff03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adc9b62514ebed55d77741b3195e4237e74227f28c511449702a417295ff03f->enter($__internal_2adc9b62514ebed55d77741b3195e4237e74227f28c511449702a417295ff03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1de0fd7c3f64455693d49880b31b7304b26c1299afd89ec16523419f1d007b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de0fd7c3f64455693d49880b31b7304b26c1299afd89ec16523419f1d007b41->enter($__internal_1de0fd7c3f64455693d49880b31b7304b26c1299afd89ec16523419f1d007b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2adc9b62514ebed55d77741b3195e4237e74227f28c511449702a417295ff03f->leave($__internal_2adc9b62514ebed55d77741b3195e4237e74227f28c511449702a417295ff03f_prof);

        
        $__internal_1de0fd7c3f64455693d49880b31b7304b26c1299afd89ec16523419f1d007b41->leave($__internal_1de0fd7c3f64455693d49880b31b7304b26c1299afd89ec16523419f1d007b41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
