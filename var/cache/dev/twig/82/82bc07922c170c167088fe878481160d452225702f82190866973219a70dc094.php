<?php

/* post.html.twig */
class __TwigTemplate_125df28286f7dff112ceb97d4c3affe1b754e2248945a3dfa2d934e549724c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post.html.twig", 1);
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
        $__internal_a75c7f45fcdb887ac458667bec1e60a0ab00175e2372343d714e4ea152a2f01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75c7f45fcdb887ac458667bec1e60a0ab00175e2372343d714e4ea152a2f01e->enter($__internal_a75c7f45fcdb887ac458667bec1e60a0ab00175e2372343d714e4ea152a2f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post.html.twig"));

        $__internal_d1654c1a1a02c056126f2a12552ab6d54d9f0595ec615c9f1b576a2f13dd7418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1654c1a1a02c056126f2a12552ab6d54d9f0595ec615c9f1b576a2f13dd7418->enter($__internal_d1654c1a1a02c056126f2a12552ab6d54d9f0595ec615c9f1b576a2f13dd7418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75c7f45fcdb887ac458667bec1e60a0ab00175e2372343d714e4ea152a2f01e->leave($__internal_a75c7f45fcdb887ac458667bec1e60a0ab00175e2372343d714e4ea152a2f01e_prof);

        
        $__internal_d1654c1a1a02c056126f2a12552ab6d54d9f0595ec615c9f1b576a2f13dd7418->leave($__internal_d1654c1a1a02c056126f2a12552ab6d54d9f0595ec615c9f1b576a2f13dd7418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2c5ad5a446d54aae573231fecd53470babfbef74fff018a34ce7b9799cb7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2c5ad5a446d54aae573231fecd53470babfbef74fff018a34ce7b9799cb7a2->enter($__internal_cf2c5ad5a446d54aae573231fecd53470babfbef74fff018a34ce7b9799cb7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0c121c37d4ac4f1870d40f789d0a5f4d267d081e4fe57f7eba2bf0087a0ebea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c121c37d4ac4f1870d40f789d0a5f4d267d081e4fe57f7eba2bf0087a0ebea->enter($__internal_c0c121c37d4ac4f1870d40f789d0a5f4d267d081e4fe57f7eba2bf0087a0ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"page-content clearfix\">

\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "topics-centered", "id" => "addcontent-form")));
        echo "
\t<aside id=\"add-aside\" class=\"clearfix\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/share.png"), "html", null, true);
        echo "\" alt=\"Share\"/>
\t\t<h1>Post your mood</h1>
\t</aside>

\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagePost", array()), 'row');
        echo "
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titlePost", array()), 'row');
        echo "
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row');
        echo "
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keywords", array()), 'row');
        echo "
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "textePost", array()), 'row');
        echo "
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



\t\t\t<!-- <form id=\"addcontent-form\" class=\"topics-centered\"  method=\"POST\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addPost");
        echo "\" ENCTYPE=\"multipart/form-data\">
\t\t\t<aside id=\"add-aside\" class=\"clearfix\">
\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/share.png"), "html", null, true);
        echo "\" alt=\"Share\"/>
\t\t\t\t<h1>Post your mood</h1>
\t\t\t</aside>
\t\t\t
\t\t\t\t<h2 id=\"error-label\" style=\"color: red;\"><?=\$error?></h2>
\t\t\t\t<h2 id=\"error-label\" style=\"color: green;\"><?=\$notError?></h2>

\t\t\t<label for\"fichier\">Image</label>
\t\t\t<input type=\"file\" placeholder=\"fichier\" name=\"fichier\" class=\"FileType\" value=\"\" multiple=\"multiple\"/>
\t\t\t
\t\t\t<label for=\"title\">Title</label>
\t\t\t<input type=\"text\" placeholder=\"title\" name=\"title\" value=\"\" />

\t\t\t<label for=\"categories\">Categories</label>
\t\t\t<input type=\"text\" placeholder=\"categories\" name=\"categories\" value=\"\" />

\t\t\t<label for=\"meta\">Keywords</label>
\t\t\t<input type=\"text\" placeholder=\"meta\" name=\"keywords\" value=\"\" />

\t\t\t<label for=\"postmessage\">Your mood!</label>
\t\t\t<textarea type=\"text\" placeholder=\"postmessage\" name=\"message\" value=\"\" /></textarea>

\t\t\t<input type=\"submit\" value=\"Post it!\" />
\t\t</form> -->
\t</section>



";
        
        $__internal_c0c121c37d4ac4f1870d40f789d0a5f4d267d081e4fe57f7eba2bf0087a0ebea->leave($__internal_c0c121c37d4ac4f1870d40f789d0a5f4d267d081e4fe57f7eba2bf0087a0ebea_prof);

        
        $__internal_cf2c5ad5a446d54aae573231fecd53470babfbef74fff018a34ce7b9799cb7a2->leave($__internal_cf2c5ad5a446d54aae573231fecd53470babfbef74fff018a34ce7b9799cb7a2_prof);

    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  98 => 24,  91 => 20,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<section class=\"page-content clearfix\">

\t{{ form_start(form, {'attr': {'class': 'topics-centered', 'id':'addcontent-form'} })  }}
\t<aside id=\"add-aside\" class=\"clearfix\">
\t\t<img src=\"{{asset('img/share.png')}}\" alt=\"Share\"/>
\t\t<h1>Post your mood</h1>
\t</aside>

\t\t{{ form_row(form.imagePost) }}
\t\t{{ form_row(form.titlePost) }}
\t\t{{ form_row(form.categorie) }}
\t\t{{ form_row(form.keywords) }}
\t\t{{ form_row(form.textePost) }}
\t\t{{ form_row(form.save) }}

\t{{ form_end(form) }}



\t\t\t<!-- <form id=\"addcontent-form\" class=\"topics-centered\"  method=\"POST\" action=\"{{path('addPost')}}\" ENCTYPE=\"multipart/form-data\">
\t\t\t<aside id=\"add-aside\" class=\"clearfix\">
\t\t\t\t<img src=\"{{asset('img/share.png')}}\" alt=\"Share\"/>
\t\t\t\t<h1>Post your mood</h1>
\t\t\t</aside>
\t\t\t
\t\t\t\t<h2 id=\"error-label\" style=\"color: red;\"><?=\$error?></h2>
\t\t\t\t<h2 id=\"error-label\" style=\"color: green;\"><?=\$notError?></h2>

\t\t\t<label for\"fichier\">Image</label>
\t\t\t<input type=\"file\" placeholder=\"fichier\" name=\"fichier\" class=\"FileType\" value=\"\" multiple=\"multiple\"/>
\t\t\t
\t\t\t<label for=\"title\">Title</label>
\t\t\t<input type=\"text\" placeholder=\"title\" name=\"title\" value=\"\" />

\t\t\t<label for=\"categories\">Categories</label>
\t\t\t<input type=\"text\" placeholder=\"categories\" name=\"categories\" value=\"\" />

\t\t\t<label for=\"meta\">Keywords</label>
\t\t\t<input type=\"text\" placeholder=\"meta\" name=\"keywords\" value=\"\" />

\t\t\t<label for=\"postmessage\">Your mood!</label>
\t\t\t<textarea type=\"text\" placeholder=\"postmessage\" name=\"message\" value=\"\" /></textarea>

\t\t\t<input type=\"submit\" value=\"Post it!\" />
\t\t</form> -->
\t</section>



{% endblock %}", "post.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app\\Resources\\views\\post.html.twig");
    }
}
