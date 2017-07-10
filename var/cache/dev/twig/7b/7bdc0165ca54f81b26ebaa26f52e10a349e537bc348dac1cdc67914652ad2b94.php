<?php

/* ::profil.html.twig */
class __TwigTemplate_2480373e3cfe32f22ab0db2e215290e99a31726173b31d6a5468c6217698d033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::profil.html.twig", 1);
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
        $__internal_787f9ef0a3798a27e5f0d0249ba3ea89cac51556461b61bc7d7c2c5f8adb994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f9ef0a3798a27e5f0d0249ba3ea89cac51556461b61bc7d7c2c5f8adb994d->enter($__internal_787f9ef0a3798a27e5f0d0249ba3ea89cac51556461b61bc7d7c2c5f8adb994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::profil.html.twig"));

        $__internal_d5af24cde9a2416132b16e38369e3a9d9ccf8147ba22026f076f34a67cfb4fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5af24cde9a2416132b16e38369e3a9d9ccf8147ba22026f076f34a67cfb4fef->enter($__internal_d5af24cde9a2416132b16e38369e3a9d9ccf8147ba22026f076f34a67cfb4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787f9ef0a3798a27e5f0d0249ba3ea89cac51556461b61bc7d7c2c5f8adb994d->leave($__internal_787f9ef0a3798a27e5f0d0249ba3ea89cac51556461b61bc7d7c2c5f8adb994d_prof);

        
        $__internal_d5af24cde9a2416132b16e38369e3a9d9ccf8147ba22026f076f34a67cfb4fef->leave($__internal_d5af24cde9a2416132b16e38369e3a9d9ccf8147ba22026f076f34a67cfb4fef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b636e9acea6374e2fdf91f5f920e4e7625ad5c332a407cff81670082243e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b636e9acea6374e2fdf91f5f920e4e7625ad5c332a407cff81670082243e03->enter($__internal_d7b636e9acea6374e2fdf91f5f920e4e7625ad5c332a407cff81670082243e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ea4d1f214cc92c9e5f6d67981c53ff5f9e0bf57e81950057af9b4ee942a7370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea4d1f214cc92c9e5f6d67981c53ff5f9e0bf57e81950057af9b4ee942a7370->enter($__internal_3ea4d1f214cc92c9e5f6d67981c53ff5f9e0bf57e81950057af9b4ee942a7370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"page-content profil clearfix \">
\t<article class=\"users-panel\">
\t\t<div class=\"info-box dark\">
\t\t\t<img src=\"../img/";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\" style=\"width:65px;height:65px;border-radius:50%;\"/>

\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"info-box dark\">
\t\t\t\t\t<h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<h4>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array()), "d-m-Y"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Post de ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "post", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "d-m-Y"), "html", null, true);
            echo " // <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titlePost", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>(<a href=\"\">Supp.</a>)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t \t<h4>Nb de commentaires de ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "commentaires", array()), "count", array()), "html", null, true);
        echo "</h4> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Inscrit depuis le ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "inscription", array()), "d-m-Y"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Dernière connexion le ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastConnexion", array()), "d-m-Y h:m:s"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t</section>
";
        
        $__internal_3ea4d1f214cc92c9e5f6d67981c53ff5f9e0bf57e81950057af9b4ee942a7370->leave($__internal_3ea4d1f214cc92c9e5f6d67981c53ff5f9e0bf57e81950057af9b4ee942a7370_prof);

        
        $__internal_d7b636e9acea6374e2fdf91f5f920e4e7625ad5c332a407cff81670082243e03->leave($__internal_d7b636e9acea6374e2fdf91f5f920e4e7625ad5c332a407cff81670082243e03_prof);

    }

    public function getTemplateName()
    {
        return "::profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  126 => 42,  118 => 39,  111 => 34,  97 => 32,  93 => 31,  84 => 25,  77 => 21,  70 => 17,  63 => 13,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

<section class=\"page-content profil clearfix \">
\t<article class=\"users-panel\">
\t\t<div class=\"info-box dark\">
\t\t\t<img src=\"../img/{{user.photo}}\" style=\"width:65px;height:65px;border-radius:50%;\"/>

\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"info-box dark\">
\t\t\t\t\t<h4>{{user.username}}</h4>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t<h4>{{user.email}}</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<h4>{{user.birthday|date('d-m-Y')}}</h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Post de {{user.username}} :</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for post in user.post %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>{{post.created|date('d-m-Y')}} // <a href=\"{{path('article',{'id':post.id})}}\">{{post.titlePost}}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>(<a href=\"\">Supp.</a>)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t \t<h4>Nb de commentaires de {{user.username}} : {{user.commentaires.count}}</h4> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Inscrit depuis le {{ user.inscription|date('d-m-Y') }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-box meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Dernière connexion le {{ user.lastConnexion|date('d-m-Y h:m:s') }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t</section>
{% endblock %}", "::profil.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/profil.html.twig");
    }
}
