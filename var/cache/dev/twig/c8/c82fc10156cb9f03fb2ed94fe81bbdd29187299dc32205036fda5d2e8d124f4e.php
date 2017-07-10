<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d35ffe77450ce583c8c81c201761f66301c1a44836618609b4a6e7ddde9b5682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b16fc0aae74046ce504ec0b0b3c79994582df61547a584cdff3eeb67a7935ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b16fc0aae74046ce504ec0b0b3c79994582df61547a584cdff3eeb67a7935ea->enter($__internal_5b16fc0aae74046ce504ec0b0b3c79994582df61547a584cdff3eeb67a7935ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c4cb110ecb88c3eacbdfc9e80ff9718a26c562e078a118b345d7293c2ddcb535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cb110ecb88c3eacbdfc9e80ff9718a26c562e078a118b345d7293c2ddcb535->enter($__internal_c4cb110ecb88c3eacbdfc9e80ff9718a26c562e078a118b345d7293c2ddcb535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b16fc0aae74046ce504ec0b0b3c79994582df61547a584cdff3eeb67a7935ea->leave($__internal_5b16fc0aae74046ce504ec0b0b3c79994582df61547a584cdff3eeb67a7935ea_prof);

        
        $__internal_c4cb110ecb88c3eacbdfc9e80ff9718a26c562e078a118b345d7293c2ddcb535->leave($__internal_c4cb110ecb88c3eacbdfc9e80ff9718a26c562e078a118b345d7293c2ddcb535_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4afc5528b4e23367b9319fd1b8fe29aca30066255996985cbe80fb9a6025df9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afc5528b4e23367b9319fd1b8fe29aca30066255996985cbe80fb9a6025df9a->enter($__internal_4afc5528b4e23367b9319fd1b8fe29aca30066255996985cbe80fb9a6025df9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b652bd1be6012733c2f482218b29bc07345f6e922a42979eee8d58d1a1a2c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b652bd1be6012733c2f482218b29bc07345f6e922a42979eee8d58d1a1a2c97->enter($__internal_8b652bd1be6012733c2f482218b29bc07345f6e922a42979eee8d58d1a1a2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b652bd1be6012733c2f482218b29bc07345f6e922a42979eee8d58d1a1a2c97->leave($__internal_8b652bd1be6012733c2f482218b29bc07345f6e922a42979eee8d58d1a1a2c97_prof);

        
        $__internal_4afc5528b4e23367b9319fd1b8fe29aca30066255996985cbe80fb9a6025df9a->leave($__internal_4afc5528b4e23367b9319fd1b8fe29aca30066255996985cbe80fb9a6025df9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d67afbc3a37e05691c762fb318ba8395a9d88d83949dd96c62f1b0d955a6696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d67afbc3a37e05691c762fb318ba8395a9d88d83949dd96c62f1b0d955a6696->enter($__internal_0d67afbc3a37e05691c762fb318ba8395a9d88d83949dd96c62f1b0d955a6696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f8744f539c406ce560123c93b082e94dfc0ad3c3e1fd2b7aaefef181dfb9a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8744f539c406ce560123c93b082e94dfc0ad3c3e1fd2b7aaefef181dfb9a54->enter($__internal_5f8744f539c406ce560123c93b082e94dfc0ad3c3e1fd2b7aaefef181dfb9a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f8744f539c406ce560123c93b082e94dfc0ad3c3e1fd2b7aaefef181dfb9a54->leave($__internal_5f8744f539c406ce560123c93b082e94dfc0ad3c3e1fd2b7aaefef181dfb9a54_prof);

        
        $__internal_0d67afbc3a37e05691c762fb318ba8395a9d88d83949dd96c62f1b0d955a6696->leave($__internal_0d67afbc3a37e05691c762fb318ba8395a9d88d83949dd96c62f1b0d955a6696_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a9eb2f669563d380e7ca8a217415d04fe37e058245cf5dda4878218b70b858c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9eb2f669563d380e7ca8a217415d04fe37e058245cf5dda4878218b70b858c->enter($__internal_6a9eb2f669563d380e7ca8a217415d04fe37e058245cf5dda4878218b70b858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63dce25968cecdd8192175e0170ff220e3c523eeafed7a116c87d8ca36ecc062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dce25968cecdd8192175e0170ff220e3c523eeafed7a116c87d8ca36ecc062->enter($__internal_63dce25968cecdd8192175e0170ff220e3c523eeafed7a116c87d8ca36ecc062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63dce25968cecdd8192175e0170ff220e3c523eeafed7a116c87d8ca36ecc062->leave($__internal_63dce25968cecdd8192175e0170ff220e3c523eeafed7a116c87d8ca36ecc062_prof);

        
        $__internal_6a9eb2f669563d380e7ca8a217415d04fe37e058245cf5dda4878218b70b858c->leave($__internal_6a9eb2f669563d380e7ca8a217415d04fe37e058245cf5dda4878218b70b858c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
