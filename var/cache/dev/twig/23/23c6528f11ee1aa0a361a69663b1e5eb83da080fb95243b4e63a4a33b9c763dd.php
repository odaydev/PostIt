<?php

/* :default:index.html.twig */
class __TwigTemplate_d2065f23c446e06030dd71fd8af1d23c0a94b99dccf983ccb844631fe07f989e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_9e9c0bf15f8b8529ed3569077d643de8dbabfb367d73ebc71dacded10222847f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9c0bf15f8b8529ed3569077d643de8dbabfb367d73ebc71dacded10222847f->enter($__internal_9e9c0bf15f8b8529ed3569077d643de8dbabfb367d73ebc71dacded10222847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_409962d76612ee0ffa99202074a34e6f71c8bc0423129b686cae1e5f9a55485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409962d76612ee0ffa99202074a34e6f71c8bc0423129b686cae1e5f9a55485e->enter($__internal_409962d76612ee0ffa99202074a34e6f71c8bc0423129b686cae1e5f9a55485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9c0bf15f8b8529ed3569077d643de8dbabfb367d73ebc71dacded10222847f->leave($__internal_9e9c0bf15f8b8529ed3569077d643de8dbabfb367d73ebc71dacded10222847f_prof);

        
        $__internal_409962d76612ee0ffa99202074a34e6f71c8bc0423129b686cae1e5f9a55485e->leave($__internal_409962d76612ee0ffa99202074a34e6f71c8bc0423129b686cae1e5f9a55485e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7171798bc6505271382e26c73364ebc5ae573b6cca1502c76fa8da9ce2fee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7171798bc6505271382e26c73364ebc5ae573b6cca1502c76fa8da9ce2fee3->enter($__internal_0e7171798bc6505271382e26c73364ebc5ae573b6cca1502c76fa8da9ce2fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c4414cd487244d514ac20da9ea099f9c2773be95455088fc0583b76026f0c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4414cd487244d514ac20da9ea099f9c2773be95455088fc0583b76026f0c39->enter($__internal_9c4414cd487244d514ac20da9ea099f9c2773be95455088fc0583b76026f0c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c4414cd487244d514ac20da9ea099f9c2773be95455088fc0583b76026f0c39->leave($__internal_9c4414cd487244d514ac20da9ea099f9c2773be95455088fc0583b76026f0c39_prof);

        
        $__internal_0e7171798bc6505271382e26c73364ebc5ae573b6cca1502c76fa8da9ce2fee3->leave($__internal_0e7171798bc6505271382e26c73364ebc5ae573b6cca1502c76fa8da9ce2fee3_prof);

    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe1bf42cea355f1405adc3c3a92d4ae7ceda3e2146c2a0851cfb6ed581afb3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1bf42cea355f1405adc3c3a92d4ae7ceda3e2146c2a0851cfb6ed581afb3fa->enter($__internal_fe1bf42cea355f1405adc3c3a92d4ae7ceda3e2146c2a0851cfb6ed581afb3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e60112900653e1dbd83025b4371630ab16c8ac129a5830953062185892af76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e60112900653e1dbd83025b4371630ab16c8ac129a5830953062185892af76f->enter($__internal_6e60112900653e1dbd83025b4371630ab16c8ac129a5830953062185892af76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e60112900653e1dbd83025b4371630ab16c8ac129a5830953062185892af76f->leave($__internal_6e60112900653e1dbd83025b4371630ab16c8ac129a5830953062185892af76f_prof);

        
        $__internal_fe1bf42cea355f1405adc3c3a92d4ae7ceda3e2146c2a0851cfb6ed581afb3fa->leave($__internal_fe1bf42cea355f1405adc3c3a92d4ae7ceda3e2146c2a0851cfb6ed581afb3fa_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
", ":default:index.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/default/index.html.twig");
    }
}
