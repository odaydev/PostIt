<?php

/* ::article.html.twig */
class __TwigTemplate_6c925233dd2676ed8fae25c1e30ea3b2e602498048a315076144a68df80f74bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0058c15fdb9da691c5407993cdbf0ae4b043c0016648d2edd6064c7bf7f185bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0058c15fdb9da691c5407993cdbf0ae4b043c0016648d2edd6064c7bf7f185bd->enter($__internal_0058c15fdb9da691c5407993cdbf0ae4b043c0016648d2edd6064c7bf7f185bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::article.html.twig"));

        $__internal_f0ab95534c5873192603fb25ce7f6de735fddf6a1aa9519f712c3c9573b678fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ab95534c5873192603fb25ce7f6de735fddf6a1aa9519f712c3c9573b678fa->enter($__internal_f0ab95534c5873192603fb25ce7f6de735fddf6a1aa9519f712c3c9573b678fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0058c15fdb9da691c5407993cdbf0ae4b043c0016648d2edd6064c7bf7f185bd->leave($__internal_0058c15fdb9da691c5407993cdbf0ae4b043c0016648d2edd6064c7bf7f185bd_prof);

        
        $__internal_f0ab95534c5873192603fb25ce7f6de735fddf6a1aa9519f712c3c9573b678fa->leave($__internal_f0ab95534c5873192603fb25ce7f6de735fddf6a1aa9519f712c3c9573b678fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f5d14ffdee342e08afe465b572317568356c6ec61675eecdc01c4a7196a761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f5d14ffdee342e08afe465b572317568356c6ec61675eecdc01c4a7196a761->enter($__internal_23f5d14ffdee342e08afe465b572317568356c6ec61675eecdc01c4a7196a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46e778fc2d00e01e881288a8856c0ad12049289a5162a2ef20b8937d8b16759c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e778fc2d00e01e881288a8856c0ad12049289a5162a2ef20b8937d8b16759c->enter($__internal_46e778fc2d00e01e881288a8856c0ad12049289a5162a2ef20b8937d8b16759c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<section class=\"content clearfix\">

    <nav class=\"nav-slide\">
        <a class=\"prev\" href=\"content.php?idpost=<?=\$nav[1];?>\">
            <i class=\"fa fa-chevron-right fa-3x\"></i>
        </a>
        <a class=\"next\" href=\"content.php?idpost=<?=\$nav[0]?>\">
            <i class=\"fa fa-chevron-left fa-3x\"></i>
        </a>
    </nav>

    <div class=\"content-centered\">
        <div class=\"topic clearfix\">
            <figure><img src=\"../img";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "imagePost", array())), "html", null, true);
        echo "\"></figure>
            <article class=\"clearfix\">
                <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titlePost", array()), "html", null, true);
        echo "</h2>

                <div class=\"user-comments\">
                    <h2> <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "users", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "users", array()), "username", array()), "html", null, true);
        echo "</a></h2>
                    <h4>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "created", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
                </div>

                <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "textePost", array()), "html", null, true);
        echo "</p>
            </article>
        </div>
        <!--Commentaires des autres utilisateurs-->
        <aside class=\" comments-submit clearfix\">
            <h2>Commentaires</h2>
            ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 34
            echo "
                ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form-comm")));
            echo "
                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texteCommentaire", array()), 'row', array("attr" => array("placeholder" => "Ajouter un commentaire", "name" => "text-comm")));
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'row', array("value" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array())));
            echo "
                    ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("name" => "comment"));
            echo "
                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

            ";
        } else {
            // line 43
            echo "                 Il faut être logger pour poster un commentaire !
            ";
        }
        // line 45
        echo "        </aside>

        <div class=\"comments clearfix\">

            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "commentaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 50
            echo "
                    <article class=\"comments-box clearfix\">
                        <div class=\"user-comments\">
                            <div id=\"id-user-box\">
                                <img src=\"../img/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comm"], "users", array()), "photo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comm"], "users", array()), "username", array()), "html", null, true);
            echo "\" height=\"64\" width=\"64\"/>
                                <h2> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comm"], "users", array()), "username", array()), "html", null, true);
            echo " </h2>
                                <h4>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comm"], "created", array()), "d-m-Y"), "html", null, true);
            echo "</h4>
                            </div>
                            <p>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "texteCommentaire", array()), "html", null, true);
            echo "</p>
                            ";
            // line 59
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 60
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["comm"], "users", array()), "id", array()))) {
                    // line 61
                    echo "                                    <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removecom", array("id" => $this->getAttribute($context["comm"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a></p>
                                ";
                }
                // line 63
                echo "                            ";
            }
            // line 64
            echo "                        </div>
                    </article>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
        </div>

</section>




";
        
        $__internal_46e778fc2d00e01e881288a8856c0ad12049289a5162a2ef20b8937d8b16759c->leave($__internal_46e778fc2d00e01e881288a8856c0ad12049289a5162a2ef20b8937d8b16759c_prof);

        
        $__internal_23f5d14ffdee342e08afe465b572317568356c6ec61675eecdc01c4a7196a761->leave($__internal_23f5d14ffdee342e08afe465b572317568356c6ec61675eecdc01c4a7196a761_prof);

    }

    // line 78
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3e18ced9491caad7f2de637889905552f14a296d20f4a744bb6b50ebc0d81d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e18ced9491caad7f2de637889905552f14a296d20f4a744bb6b50ebc0d81d9->enter($__internal_a3e18ced9491caad7f2de637889905552f14a296d20f4a744bb6b50ebc0d81d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4deba131e1e9b9387731445fb143a23bf2be33fa0de26a3c58a3a6c023dbf664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4deba131e1e9b9387731445fb143a23bf2be33fa0de26a3c58a3a6c023dbf664->enter($__internal_4deba131e1e9b9387731445fb143a23bf2be33fa0de26a3c58a3a6c023dbf664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4deba131e1e9b9387731445fb143a23bf2be33fa0de26a3c58a3a6c023dbf664->leave($__internal_4deba131e1e9b9387731445fb143a23bf2be33fa0de26a3c58a3a6c023dbf664_prof);

        
        $__internal_a3e18ced9491caad7f2de637889905552f14a296d20f4a744bb6b50ebc0d81d9->leave($__internal_a3e18ced9491caad7f2de637889905552f14a296d20f4a744bb6b50ebc0d81d9_prof);

    }

    public function getTemplateName()
    {
        return "::article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 78,  191 => 68,  182 => 64,  179 => 63,  173 => 61,  170 => 60,  168 => 59,  164 => 58,  159 => 56,  155 => 55,  149 => 54,  143 => 50,  139 => 49,  133 => 45,  129 => 43,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  100 => 34,  98 => 33,  89 => 27,  83 => 24,  77 => 23,  71 => 20,  66 => 18,  50 => 4,  41 => 3,  11 => 1,);
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
    
<section class=\"content clearfix\">

    <nav class=\"nav-slide\">
        <a class=\"prev\" href=\"content.php?idpost=<?=\$nav[1];?>\">
            <i class=\"fa fa-chevron-right fa-3x\"></i>
        </a>
        <a class=\"next\" href=\"content.php?idpost=<?=\$nav[0]?>\">
            <i class=\"fa fa-chevron-left fa-3x\"></i>
        </a>
    </nav>

    <div class=\"content-centered\">
        <div class=\"topic clearfix\">
            <figure><img src=\"../img{{asset(article.imagePost)}}\"></figure>
            <article class=\"clearfix\">
                <h2>{{ article.titlePost }}</h2>

                <div class=\"user-comments\">
                    <h2> <a href=\"{{path('profil',{'id':article.users.id})}}\">{{article.users.username}}</a></h2>
                    <h4>{{article.created|date('Y-m-d')}}</h4>
                </div>

                <p>{{article.textePost}}</p>
            </article>
        </div>
        <!--Commentaires des autres utilisateurs-->
        <aside class=\" comments-submit clearfix\">
            <h2>Commentaires</h2>
            {% if is_granted('ROLE_USER') %}

                {{ form_start(form, {'attr': {'id': 'form-comm'}} ) }}
                    {{ form_row(form.texteCommentaire, {'attr': {'placeholder':'Ajouter un commentaire', 'name': 'text-comm'}} ) }}
                    {{ form_row(form.post, {'value': article.id}) }}
                    {{ form_row(form.save, {'name': 'comment'}) }}
                    {{ form_rest(form) }}
                {{ form_end(form) }}

            {% else %}
                 Il faut être logger pour poster un commentaire !
            {% endif %}
        </aside>

        <div class=\"comments clearfix\">

            {% for comm in article.commentaires %}

                    <article class=\"comments-box clearfix\">
                        <div class=\"user-comments\">
                            <div id=\"id-user-box\">
                                <img src=\"../img/{{comm.users.photo}}\" alt=\"{{comm.users.username}}\" height=\"64\" width=\"64\"/>
                                <h2> {{comm.users.username}} </h2>
                                <h4>{{comm.created|date('d-m-Y')}}</h4>
                            </div>
                            <p>{{comm.texteCommentaire}}</p>
                            {% if app.user.id is defined %}
                                {% if app.user.id == comm.users.id %}
                                    <p><a href=\"{{path('removecom', {id:comm.id})}}\">Supprimer</a></p>
                                {% endif %}
                            {% endif %}
                        </div>
                    </article>

            {% endfor %}

        </div>

</section>




{% endblock %}

{% block stylesheets %}
{% endblock %}
", "::article.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/article.html.twig");
    }
}
