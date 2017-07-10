<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_888ab7c6948f069416081b893dfc7f2442c16a81e5c2cbcb2856dfe54ecbca03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_474801c8e4a9e5554f2c69464a83e8ae9239f7f00c50eee416783b91c1f46567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474801c8e4a9e5554f2c69464a83e8ae9239f7f00c50eee416783b91c1f46567->enter($__internal_474801c8e4a9e5554f2c69464a83e8ae9239f7f00c50eee416783b91c1f46567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f9b77c730a7fc70d4fea59231e48a24cd5aa2ba922794e7662c0d1a428907a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b77c730a7fc70d4fea59231e48a24cd5aa2ba922794e7662c0d1a428907a1e->enter($__internal_f9b77c730a7fc70d4fea59231e48a24cd5aa2ba922794e7662c0d1a428907a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_474801c8e4a9e5554f2c69464a83e8ae9239f7f00c50eee416783b91c1f46567->leave($__internal_474801c8e4a9e5554f2c69464a83e8ae9239f7f00c50eee416783b91c1f46567_prof);

        
        $__internal_f9b77c730a7fc70d4fea59231e48a24cd5aa2ba922794e7662c0d1a428907a1e->leave($__internal_f9b77c730a7fc70d4fea59231e48a24cd5aa2ba922794e7662c0d1a428907a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
