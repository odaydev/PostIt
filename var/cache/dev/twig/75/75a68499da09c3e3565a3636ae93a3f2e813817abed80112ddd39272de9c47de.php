<?php

/* :security:register.html.twig */
class __TwigTemplate_6b2a8c49d3a98172655e598c68481796f926a41f6d2305dbeb5efcaeea646cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9b8c88e2c70032c041e17d5aef055676ca37915ff34788f66b54d817e254e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9b8c88e2c70032c041e17d5aef055676ca37915ff34788f66b54d817e254e0->enter($__internal_8b9b8c88e2c70032c041e17d5aef055676ca37915ff34788f66b54d817e254e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:register.html.twig"));

        $__internal_b515bb4cd7c1f16ec24ad1be644aa494f9a6e90efa407b8236155f8318de4a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515bb4cd7c1f16ec24ad1be644aa494f9a6e90efa407b8236155f8318de4a34->enter($__internal_b515bb4cd7c1f16ec24ad1be644aa494f9a6e90efa407b8236155f8318de4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9b8c88e2c70032c041e17d5aef055676ca37915ff34788f66b54d817e254e0->leave($__internal_8b9b8c88e2c70032c041e17d5aef055676ca37915ff34788f66b54d817e254e0_prof);

        
        $__internal_b515bb4cd7c1f16ec24ad1be644aa494f9a6e90efa407b8236155f8318de4a34->leave($__internal_b515bb4cd7c1f16ec24ad1be644aa494f9a6e90efa407b8236155f8318de4a34_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2afb3654a02a773bb0d7f7d649f9ddb0a90c064c845fc6149f0918133187a641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afb3654a02a773bb0d7f7d649f9ddb0a90c064c845fc6149f0918133187a641->enter($__internal_2afb3654a02a773bb0d7f7d649f9ddb0a90c064c845fc6149f0918133187a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1584fc708edbee018d250c4beff2f941b1f09ff8dcfd186797122f97ca9f0565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1584fc708edbee018d250c4beff2f941b1f09ff8dcfd186797122f97ca9f0565->enter($__internal_1584fc708edbee018d250c4beff2f941b1f09ff8dcfd186797122f97ca9f0565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<section class=\"page-content inscription\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "inscription-form", "class" => "topics-centered")));
        echo "
\t<aside id=\"inscription-aside\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/register.png"), "html", null, true);
        echo "\" alt=\"Shoot | Logo\"/>
\t\t<h1>Welcome on Post it !</h1>
\t</aside>
\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</section>

";
        
        $__internal_1584fc708edbee018d250c4beff2f941b1f09ff8dcfd186797122f97ca9f0565->leave($__internal_1584fc708edbee018d250c4beff2f941b1f09ff8dcfd186797122f97ca9f0565_prof);

        
        $__internal_2afb3654a02a773bb0d7f7d649f9ddb0a90c064c845fc6149f0918133187a641->leave($__internal_2afb3654a02a773bb0d7f7d649f9ddb0a90c064c845fc6149f0918133187a641_prof);

    }

    public function getTemplateName()
    {
        return ":security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  58 => 9,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{%  block body %}

<section class=\"page-content inscription\">
\t{{ form_start(form, {'attr': {'id': 'inscription-form', 'class': 'topics-centered'}} ) }}
\t<aside id=\"inscription-aside\">
\t\t<img src=\"{{asset('img/register.png')}}\" alt=\"Shoot | Logo\"/>
\t\t<h1>Welcome on Post it !</h1>
\t</aside>
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
</section>

{% endblock %}



", ":security:register.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/security/register.html.twig");
    }
}
