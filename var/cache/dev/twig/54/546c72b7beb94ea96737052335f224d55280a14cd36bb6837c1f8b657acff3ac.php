<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f55e3890845a4e4ac777c6d9ae104c7796d22f378e5430f678c1bfeb8be391a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2d9bb643f05df787b888e54b52c478a8e9e3aac051e57784ed5b38f80b51f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d9bb643f05df787b888e54b52c478a8e9e3aac051e57784ed5b38f80b51f02->enter($__internal_a2d9bb643f05df787b888e54b52c478a8e9e3aac051e57784ed5b38f80b51f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c423620fe4f99a497fe4b3609e613f61cd37742ca9da172f8b46bd52b489cc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c423620fe4f99a497fe4b3609e613f61cd37742ca9da172f8b46bd52b489cc6f->enter($__internal_c423620fe4f99a497fe4b3609e613f61cd37742ca9da172f8b46bd52b489cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d9bb643f05df787b888e54b52c478a8e9e3aac051e57784ed5b38f80b51f02->leave($__internal_a2d9bb643f05df787b888e54b52c478a8e9e3aac051e57784ed5b38f80b51f02_prof);

        
        $__internal_c423620fe4f99a497fe4b3609e613f61cd37742ca9da172f8b46bd52b489cc6f->leave($__internal_c423620fe4f99a497fe4b3609e613f61cd37742ca9da172f8b46bd52b489cc6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_100fc6cde5e25e8322cbb64acc74dc9408c490c77d4320895dd414378ea84c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100fc6cde5e25e8322cbb64acc74dc9408c490c77d4320895dd414378ea84c5d->enter($__internal_100fc6cde5e25e8322cbb64acc74dc9408c490c77d4320895dd414378ea84c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_471b3e6656347c46d121dcf141165e8682da075e5c956aa431d0975608e84e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471b3e6656347c46d121dcf141165e8682da075e5c956aa431d0975608e84e3b->enter($__internal_471b3e6656347c46d121dcf141165e8682da075e5c956aa431d0975608e84e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_471b3e6656347c46d121dcf141165e8682da075e5c956aa431d0975608e84e3b->leave($__internal_471b3e6656347c46d121dcf141165e8682da075e5c956aa431d0975608e84e3b_prof);

        
        $__internal_100fc6cde5e25e8322cbb64acc74dc9408c490c77d4320895dd414378ea84c5d->leave($__internal_100fc6cde5e25e8322cbb64acc74dc9408c490c77d4320895dd414378ea84c5d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_842fa7f748ef0c3af227e9cc779ee0ac742fe10f89db4ab2c42ce975e7eb3d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842fa7f748ef0c3af227e9cc779ee0ac742fe10f89db4ab2c42ce975e7eb3d93->enter($__internal_842fa7f748ef0c3af227e9cc779ee0ac742fe10f89db4ab2c42ce975e7eb3d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_766d9e236f0cbed3e8fb7900e52dc23c6bc5690c00738f7cdbd0872c09045bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766d9e236f0cbed3e8fb7900e52dc23c6bc5690c00738f7cdbd0872c09045bed->enter($__internal_766d9e236f0cbed3e8fb7900e52dc23c6bc5690c00738f7cdbd0872c09045bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_766d9e236f0cbed3e8fb7900e52dc23c6bc5690c00738f7cdbd0872c09045bed->leave($__internal_766d9e236f0cbed3e8fb7900e52dc23c6bc5690c00738f7cdbd0872c09045bed_prof);

        
        $__internal_842fa7f748ef0c3af227e9cc779ee0ac742fe10f89db4ab2c42ce975e7eb3d93->leave($__internal_842fa7f748ef0c3af227e9cc779ee0ac742fe10f89db4ab2c42ce975e7eb3d93_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8bbed12d50a292c7e14e7039d2d19e42e32e51221d9198442d4641ae8f1843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8bbed12d50a292c7e14e7039d2d19e42e32e51221d9198442d4641ae8f1843->enter($__internal_fe8bbed12d50a292c7e14e7039d2d19e42e32e51221d9198442d4641ae8f1843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4676ddbfa92b64adb420c8e07e87e8756d9456eff166d98c481e70fd37200c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4676ddbfa92b64adb420c8e07e87e8756d9456eff166d98c481e70fd37200c40->enter($__internal_4676ddbfa92b64adb420c8e07e87e8756d9456eff166d98c481e70fd37200c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4676ddbfa92b64adb420c8e07e87e8756d9456eff166d98c481e70fd37200c40->leave($__internal_4676ddbfa92b64adb420c8e07e87e8756d9456eff166d98c481e70fd37200c40_prof);

        
        $__internal_fe8bbed12d50a292c7e14e7039d2d19e42e32e51221d9198442d4641ae8f1843->leave($__internal_fe8bbed12d50a292c7e14e7039d2d19e42e32e51221d9198442d4641ae8f1843_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
