<?php

/* :security:login.html.twig */
class __TwigTemplate_d475658acccd616c5110ebc46645b557e3372fb6c28c8b0f0a5236dc486c4f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_0f7d80ac1a1ad3a04a46d43fcd458039ec014ae0ba6d5b4ab2ca4381603058d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7d80ac1a1ad3a04a46d43fcd458039ec014ae0ba6d5b4ab2ca4381603058d2->enter($__internal_0f7d80ac1a1ad3a04a46d43fcd458039ec014ae0ba6d5b4ab2ca4381603058d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_62ef65658f422d6e7ad59232bb5e44cea1908238ad9fe8b489bdfe4fe9330293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ef65658f422d6e7ad59232bb5e44cea1908238ad9fe8b489bdfe4fe9330293->enter($__internal_62ef65658f422d6e7ad59232bb5e44cea1908238ad9fe8b489bdfe4fe9330293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7d80ac1a1ad3a04a46d43fcd458039ec014ae0ba6d5b4ab2ca4381603058d2->leave($__internal_0f7d80ac1a1ad3a04a46d43fcd458039ec014ae0ba6d5b4ab2ca4381603058d2_prof);

        
        $__internal_62ef65658f422d6e7ad59232bb5e44cea1908238ad9fe8b489bdfe4fe9330293->leave($__internal_62ef65658f422d6e7ad59232bb5e44cea1908238ad9fe8b489bdfe4fe9330293_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b4da04bf81cb1deebd288e8915eedb01d66ad6a9056d3122c1e5815c19d4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b4da04bf81cb1deebd288e8915eedb01d66ad6a9056d3122c1e5815c19d4d4->enter($__internal_99b4da04bf81cb1deebd288e8915eedb01d66ad6a9056d3122c1e5815c19d4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1f0c3521ef1fb1d64eeee963d1d5cbc6fbbbaafb224ae4daeb1593a5dda0f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f0c3521ef1fb1d64eeee963d1d5cbc6fbbbaafb224ae4daeb1593a5dda0f5f->enter($__internal_f1f0c3521ef1fb1d64eeee963d1d5cbc6fbbbaafb224ae4daeb1593a5dda0f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
 
 ";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 25
        echo "
 <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        // line 39
        echo "
</br>
</br>

<a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">return</a>


";
        
        $__internal_f1f0c3521ef1fb1d64eeee963d1d5cbc6fbbbaafb224ae4daeb1593a5dda0f5f->leave($__internal_f1f0c3521ef1fb1d64eeee963d1d5cbc6fbbbaafb224ae4daeb1593a5dda0f5f_prof);

        
        $__internal_99b4da04bf81cb1deebd288e8915eedb01d66ad6a9056d3122c1e5815c19d4d4->leave($__internal_99b4da04bf81cb1deebd288e8915eedb01d66ad6a9056d3122c1e5815c19d4d4_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  96 => 39,  85 => 28,  80 => 26,  77 => 25,  71 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
 
 {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

 <form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

{#{{ form_start(form, {'attr': {'action': '\\login_check'} }) }}
{{ form_widget(form) }}
{{ form_end(form) }}    #}

</br>
</br>

<a href=\"{{path('login')}}\">return</a>


{% endblock %}", ":security:login.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/security/login.html.twig");
    }
}
