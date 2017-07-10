<?php

/* default/index.html.twig */
class __TwigTemplate_01466af7fd703eafbe62b4f60d597f73477bb98491782b928fff3f393190c2f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_d69d8ee946cdd2f5ebf9191882e84b25e390d82291dab977aec7e3f89469c8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69d8ee946cdd2f5ebf9191882e84b25e390d82291dab977aec7e3f89469c8a5->enter($__internal_d69d8ee946cdd2f5ebf9191882e84b25e390d82291dab977aec7e3f89469c8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_86b41a247499de25bebd8900295382f3041c02572a93abf64cb0285537ee6974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b41a247499de25bebd8900295382f3041c02572a93abf64cb0285537ee6974->enter($__internal_86b41a247499de25bebd8900295382f3041c02572a93abf64cb0285537ee6974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69d8ee946cdd2f5ebf9191882e84b25e390d82291dab977aec7e3f89469c8a5->leave($__internal_d69d8ee946cdd2f5ebf9191882e84b25e390d82291dab977aec7e3f89469c8a5_prof);

        
        $__internal_86b41a247499de25bebd8900295382f3041c02572a93abf64cb0285537ee6974->leave($__internal_86b41a247499de25bebd8900295382f3041c02572a93abf64cb0285537ee6974_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e6b630680289f37f1a4b53c5867907bc5388bc88d531d81bdc3590f55d196bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6b630680289f37f1a4b53c5867907bc5388bc88d531d81bdc3590f55d196bf->enter($__internal_6e6b630680289f37f1a4b53c5867907bc5388bc88d531d81bdc3590f55d196bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8948a30cc13017443ca40b85673a1ddacf2a7447e33c9c42d877fcdf5ae1ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8948a30cc13017443ca40b85673a1ddacf2a7447e33c9c42d877fcdf5ae1ebd->enter($__internal_f8948a30cc13017443ca40b85673a1ddacf2a7447e33c9c42d877fcdf5ae1ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"main-part\" class=\"clearfix\">

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "
        <figure class=\"img-content\">
                    <img src=\"img/";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["article"], "imagePost", array())), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"100%\" />
                <figcaption class=\"hover-description\">
                    <div class=\"centered\">
                        <div class=\"always-visible clearfix\">
                            <h2></h2>
                            <img src=\"img/";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "users", array()), "photo", array())), "html", null, true);
            echo "\" id=\"toficon\" alt=\"\"/>
                            <p><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute($context["article"], "users", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "users", array()), "username", array()), "html", null, true);
            echo "</a></p>
                            <i class=\"fa fa-heart-o\" id=\"hearticon\" name=\"\" alt=\"j'aime\" height=\"16\" width=\"14\"></i>
                            <p id=\"like\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "likePost", array()), "html", null, true);
            echo "</p>
                            <img src=\"img/message-icon.png\" id=\"messageicon\"alt=\"commentaire\" height=\"16\" width=\"14\"/>
                            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "commentaires", array()), "count", array()), "html", null, true);
            echo "</p>
                        </div>
                        <!--Contenu caché, apparait au survol-->
                        <div class=\"hidden-content clearfix\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "textePost", array()), 0, 150), "html", null, true);
            echo "...
                                                        }
                        </div>
                        <a class=\"more-btn\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Read More</a>

                    </div>
                </figcaption>
            </figure>
            <!-- <p>";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "commentaires", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
                // line 32
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "texteCommentaire", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</p> -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </section>


    
";
        
        $__internal_f8948a30cc13017443ca40b85673a1ddacf2a7447e33c9c42d877fcdf5ae1ebd->leave($__internal_f8948a30cc13017443ca40b85673a1ddacf2a7447e33c9c42d877fcdf5ae1ebd_prof);

        
        $__internal_6e6b630680289f37f1a4b53c5867907bc5388bc88d531d81bdc3590f55d196bf->leave($__internal_6e6b630680289f37f1a4b53c5867907bc5388bc88d531d81bdc3590f55d196bf_prof);

    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_543a7b92558bd6389728bc6282b00c8ab9151d10a99d928ac6b27f7e754a770a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543a7b92558bd6389728bc6282b00c8ab9151d10a99d928ac6b27f7e754a770a->enter($__internal_543a7b92558bd6389728bc6282b00c8ab9151d10a99d928ac6b27f7e754a770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3ed0866ddc721eaaa5ff3e0c366b16079e7f6040cbd898fdb629fbe64af02eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed0866ddc721eaaa5ff3e0c366b16079e7f6040cbd898fdb629fbe64af02eed->enter($__internal_3ed0866ddc721eaaa5ff3e0c366b16079e7f6040cbd898fdb629fbe64af02eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ed0866ddc721eaaa5ff3e0c366b16079e7f6040cbd898fdb629fbe64af02eed->leave($__internal_3ed0866ddc721eaaa5ff3e0c366b16079e7f6040cbd898fdb629fbe64af02eed_prof);

        
        $__internal_543a7b92558bd6389728bc6282b00c8ab9151d10a99d928ac6b27f7e754a770a->leave($__internal_543a7b92558bd6389728bc6282b00c8ab9151d10a99d928ac6b27f7e754a770a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 42,  127 => 35,  120 => 33,  111 => 32,  107 => 31,  99 => 26,  93 => 23,  86 => 19,  81 => 17,  74 => 15,  70 => 14,  62 => 9,  58 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <section id=\"main-part\" class=\"clearfix\">

    {% for article in articles %}

        <figure class=\"img-content\">
                    <img src=\"img/{{ asset(article.imagePost) }}\" alt=\"\" width=\"100%\" height=\"100%\" />
                <figcaption class=\"hover-description\">
                    <div class=\"centered\">
                        <div class=\"always-visible clearfix\">
                            <h2></h2>
                            <img src=\"img/{{ asset(article.users.photo) }}\" id=\"toficon\" alt=\"\"/>
                            <p><a href=\"{{path('profil', {id:article.users.id})}}\">{{article.users.username}}</a></p>
                            <i class=\"fa fa-heart-o\" id=\"hearticon\" name=\"\" alt=\"j'aime\" height=\"16\" width=\"14\"></i>
                            <p id=\"like\">{{article.likePost}}</p>
                            <img src=\"img/message-icon.png\" id=\"messageicon\"alt=\"commentaire\" height=\"16\" width=\"14\"/>
                            <p>{{ article.commentaires.count  }}</p>
                        </div>
                        <!--Contenu caché, apparait au survol-->
                        <div class=\"hidden-content clearfix\">
                            {{article.textePost | slice(0,150) }}...
                                                        }
                        </div>
                        <a class=\"more-btn\" href=\"{{path('article',{'id':article.id})}}\">Read More</a>

                    </div>
                </figcaption>
            </figure>
            <!-- <p>{% for comm in article.commentaires %}
                        {{ comm.texteCommentaire }}
                    {% endfor %}</p> -->
    {% endfor %}

    </section>


    
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app\\Resources\\views\\default\\index.html.twig");
    }
}
