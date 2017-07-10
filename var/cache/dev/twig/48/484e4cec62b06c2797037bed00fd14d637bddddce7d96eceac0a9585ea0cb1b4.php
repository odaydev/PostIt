<?php

/* security/login.html.twig */
class __TwigTemplate_31e72d8b3fca50a79a5bf19fea1f4fe52542e9164e405e74219b15332dbbd894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_4cb936d4de0b785f76b514b91148d4c3611eeb1b56b0fdbfffa1888294898ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb936d4de0b785f76b514b91148d4c3611eeb1b56b0fdbfffa1888294898ddb->enter($__internal_4cb936d4de0b785f76b514b91148d4c3611eeb1b56b0fdbfffa1888294898ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_ac8ae31597add0def59a44dc1247f089cffaf546be0ad48079d6af67754dcb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8ae31597add0def59a44dc1247f089cffaf546be0ad48079d6af67754dcb47->enter($__internal_ac8ae31597add0def59a44dc1247f089cffaf546be0ad48079d6af67754dcb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb936d4de0b785f76b514b91148d4c3611eeb1b56b0fdbfffa1888294898ddb->leave($__internal_4cb936d4de0b785f76b514b91148d4c3611eeb1b56b0fdbfffa1888294898ddb_prof);

        
        $__internal_ac8ae31597add0def59a44dc1247f089cffaf546be0ad48079d6af67754dcb47->leave($__internal_ac8ae31597add0def59a44dc1247f089cffaf546be0ad48079d6af67754dcb47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e20c31924bc5be56fc44e56d36cc4f06ddd6f48eac6295360db4784d421384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e20c31924bc5be56fc44e56d36cc4f06ddd6f48eac6295360db4784d421384->enter($__internal_e3e20c31924bc5be56fc44e56d36cc4f06ddd6f48eac6295360db4784d421384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_021d95598e121ec0508ede1e89e8601780bdacba59ce9cd4c9e0e6d311b2b362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021d95598e121ec0508ede1e89e8601780bdacba59ce9cd4c9e0e6d311b2b362->enter($__internal_021d95598e121ec0508ede1e89e8601780bdacba59ce9cd4c9e0e6d311b2b362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_021d95598e121ec0508ede1e89e8601780bdacba59ce9cd4c9e0e6d311b2b362->leave($__internal_021d95598e121ec0508ede1e89e8601780bdacba59ce9cd4c9e0e6d311b2b362_prof);

        
        $__internal_e3e20c31924bc5be56fc44e56d36cc4f06ddd6f48eac6295360db4784d421384->leave($__internal_e3e20c31924bc5be56fc44e56d36cc4f06ddd6f48eac6295360db4784d421384_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
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


{% endblock %}", "security/login.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app\\Resources\\views\\security\\login.html.twig");
    }
}
