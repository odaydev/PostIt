<?php

/* ::base.html.twig */
class __TwigTemplate_94460b90b3eb0f237620b83380ba312dfbe6bbd5fc44c7ac721699bf357f8873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf82c6625834275ccab3bcc201f49cc7fc9e90532b1384f5c4ad4e7d4f0f409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf82c6625834275ccab3bcc201f49cc7fc9e90532b1384f5c4ad4e7d4f0f409->enter($__internal_9cf82c6625834275ccab3bcc201f49cc7fc9e90532b1384f5c4ad4e7d4f0f409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_64233554502e1160a7f90619ae309a75cf1ba69aba9eb7213ab8d9f073c73556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64233554502e1160a7f90619ae309a75cf1ba69aba9eb7213ab8d9f073c73556->enter($__internal_64233554502e1160a7f90619ae309a75cf1ba69aba9eb7213ab8d9f073c73556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    
    <head>
        
        <meta charset=\"UTF-8\" />
        
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!--Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

        <!--<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\"/>-->
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
    </head>
    
    <body>
        <div class=\"wrap\">
    
        <header id=\"top-page\" class=\"container clearfix\">
                <div id=\"top-header\" class=\"center\">
                    <h1 class=\"clearfix\">
                        <a id=\"logo\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"Shoot | Logo\"/>
                            <span class=\"shoot\">Post it!</span>
                        </a>
                    </h1>
                    <i class=\"left-menu\"><span></span></i>                  
                    <div id=\"search\">
                        <i class=\"fa fa-search\" id=\"search-icon\"></i>                       
                    </div>
                    <div id=\"right-menu\">
                    ";
        // line 48
        echo "   
                     
                    </div>
                </div>
                <nav id=\"top-nav\" class=\"main-menu clearfix\">
                    <ul>
                        <li><a class=\"center\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"home\">Home<i class=\"fa fa-arrow-right\"></i></a></li>
                        <li><a class=\"center\" href=\"pages.php\" title=\"pages\">Pages<i class=\"fa fa-arrow-right\"></i></a></li>
                        <!--Visible seulement une fois logger-->

                        ";
        // line 58
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 59
            echo "
                        <li><a class=\"center\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" title=\"profil\">Profil<i class=\"fa fa-arrow-right\"></i></a></li>
                        ";
        }
        // line 62
        echo "                        <!--Disparait si la personne est logger-->
                        <!--Apparait une fois logger, permet de créer un topic-->
                        ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 65
            echo "                            <li><a class=\"center\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addPost");
            echo "\" title=\"inscription\">Post<i class=\"fa fa-arrow-right\"></i></a></li>
                        ";
        }
        // line 67
        echo "                        
                        ";
        // line 68
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 69
            echo "                            <li><a class=\"center\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" title=\"log\">LogOut<i class=\"fa fa-arrow-right\"></i></a></li>
                        ";
        } else {
            // line 71
            echo "                            <li><a class=\"center\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" title=\"inscription\">Inscription<i class=\"fa fa-arrow-right\"></i></a></li>
                            <li><a class=\"center\" href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" title=\"log\">Log<i class=\"fa fa-arrow-right\"></i></a></li>
                        ";
        }
        // line 74
        echo "                        
                        ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "                        <li><a class=\"center\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\" title=\"admin\">Admin<i class=\"fa fa-arrow-right\"></i></a></li>
                        ";
        }
        // line 78
        echo "                    </ul>

                    <!-- Affichage des erreurs  -->
                   
                </nav>
        </header>

        <form id=\"search-field\">
            <input type=\"search\" name=\"search\" id=\"search-input\" placeholder=\"Search\"/>
            <span id=\"reslut_search\">   </span> 
        </form>

        ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
        <section id=\"second-part\" class=\"clearfix\">
            <div id=\"article-second-part\">
               <article id=\"about\">
                    <div class=\"article-content\">
                        <h3>About MFF</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </article>
                <article id=\"keep-in-touch\">
                    <div class=\"article-content\">
                        <h3>Keep in touch</h3>
                        <aside id=\"social-connect\">
                            <a href=\"\" title=\"Shoot facebook\"><i class=\"fa fa-facebook-official\"></i></a>
                            <a href=\"\" title=\"Shoot twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"https://plus.google.com/u/0/107035950534176610317\" target=\"_blank\" title=\"Shoot google+\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"\" title=\" Shoot dribbble\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"\" title=\"Shoot behance\"><i class=\"fa fa-behance\"></i></a>
                        </aside>
                        <aside id=\"info\">
                            <div class=\"contact-info\">
                                <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/location-icon.png"), "html", null, true);
        echo "\" alt=\"adress\" height=\"24\" width=\"16\"/>
                                <h4>No 200, Av Balboa, Panamá, Panama</h4>
                            </div>
                            <div class=\"contact-info\">
                                <img src=\"img/phone-icon.png\" alt=\"phone number\" height=\"24\" width=\"16\"/>
                                <h4>+44 (0) 800 765 4321</h4>
                            </div>
                            <div class=\"contact-info\">
                                <img src=\"img/mail-icon.png\" alt=\"adress\" height=\"24\" width=\"16\"/>
                                <h4>mff.wf3@gmail.com</h4>
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
        </section>
        </div>

    </body>

    ";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "
</html>
";
        
        $__internal_9cf82c6625834275ccab3bcc201f49cc7fc9e90532b1384f5c4ad4e7d4f0f409->leave($__internal_9cf82c6625834275ccab3bcc201f49cc7fc9e90532b1384f5c4ad4e7d4f0f409_prof);

        
        $__internal_64233554502e1160a7f90619ae309a75cf1ba69aba9eb7213ab8d9f073c73556->leave($__internal_64233554502e1160a7f90619ae309a75cf1ba69aba9eb7213ab8d9f073c73556_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e6977421c4011c5ed0743132797f892f076d847d43f4ed709198f9a1a14ac1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6977421c4011c5ed0743132797f892f076d847d43f4ed709198f9a1a14ac1e->enter($__internal_4e6977421c4011c5ed0743132797f892f076d847d43f4ed709198f9a1a14ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1467baf22a5d33d3815a0902b734810b8ca4ba2c321f4f1cfa7b853fe65126fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1467baf22a5d33d3815a0902b734810b8ca4ba2c321f4f1cfa7b853fe65126fa->enter($__internal_1467baf22a5d33d3815a0902b734810b8ca4ba2c321f4f1cfa7b853fe65126fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1467baf22a5d33d3815a0902b734810b8ca4ba2c321f4f1cfa7b853fe65126fa->leave($__internal_1467baf22a5d33d3815a0902b734810b8ca4ba2c321f4f1cfa7b853fe65126fa_prof);

        
        $__internal_4e6977421c4011c5ed0743132797f892f076d847d43f4ed709198f9a1a14ac1e->leave($__internal_4e6977421c4011c5ed0743132797f892f076d847d43f4ed709198f9a1a14ac1e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_925f49dc6a1ac05271dba8748f1ed4be47b17e229dbe40b66c28e0a59c1afacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925f49dc6a1ac05271dba8748f1ed4be47b17e229dbe40b66c28e0a59c1afacd->enter($__internal_925f49dc6a1ac05271dba8748f1ed4be47b17e229dbe40b66c28e0a59c1afacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_518d323d07cc37f4889a2e327144eb62c66799233f614d0b21efff932efeed44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518d323d07cc37f4889a2e327144eb62c66799233f614d0b21efff932efeed44->enter($__internal_518d323d07cc37f4889a2e327144eb62c66799233f614d0b21efff932efeed44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f116c3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7f116c3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7f116c3_part_1_animsition_1.css");
            // line 22
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "7f116c3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7f116c3_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7f116c3_part_1_jquery-ui_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "7f116c3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7f116c3_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7f116c3_part_1_reset_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "7f116c3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7f116c3_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7f116c3_part_1_style_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "7f116c3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7f116c3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7f116c3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
        
        $__internal_518d323d07cc37f4889a2e327144eb62c66799233f614d0b21efff932efeed44->leave($__internal_518d323d07cc37f4889a2e327144eb62c66799233f614d0b21efff932efeed44_prof);

        
        $__internal_925f49dc6a1ac05271dba8748f1ed4be47b17e229dbe40b66c28e0a59c1afacd->leave($__internal_925f49dc6a1ac05271dba8748f1ed4be47b17e229dbe40b66c28e0a59c1afacd_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e66ecc3afb46f3b57803f8cd10bfdf91b210f11f1c9413b2e5113369a6a39dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e66ecc3afb46f3b57803f8cd10bfdf91b210f11f1c9413b2e5113369a6a39dc->enter($__internal_0e66ecc3afb46f3b57803f8cd10bfdf91b210f11f1c9413b2e5113369a6a39dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ce808a5041dde0bc497a8444f15614f1a46a5d911356fbca2f4800662e59662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce808a5041dde0bc497a8444f15614f1a46a5d911356fbca2f4800662e59662->enter($__internal_4ce808a5041dde0bc497a8444f15614f1a46a5d911356fbca2f4800662e59662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ce808a5041dde0bc497a8444f15614f1a46a5d911356fbca2f4800662e59662->leave($__internal_4ce808a5041dde0bc497a8444f15614f1a46a5d911356fbca2f4800662e59662_prof);

        
        $__internal_0e66ecc3afb46f3b57803f8cd10bfdf91b210f11f1c9413b2e5113369a6a39dc->leave($__internal_0e66ecc3afb46f3b57803f8cd10bfdf91b210f11f1c9413b2e5113369a6a39dc_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b833da399375e8815f508569aee5a6dc5d8e2cc4f21d10d6bbb57a5c1f4de43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b833da399375e8815f508569aee5a6dc5d8e2cc4f21d10d6bbb57a5c1f4de43->enter($__internal_8b833da399375e8815f508569aee5a6dc5d8e2cc4f21d10d6bbb57a5c1f4de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4dfe53d92d0f429e73ea90f2a166d87035af8ac5790c40c863214aca4030e1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfe53d92d0f429e73ea90f2a166d87035af8ac5790c40c863214aca4030e1fd->enter($__internal_4dfe53d92d0f429e73ea90f2a166d87035af8ac5790c40c863214aca4030e1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "    <!--";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ccca1cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ccca1cb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ccca1cb_part_1_bootstrap.min_1.js");
            // line 141
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "ccca1cb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ccca1cb_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ccca1cb_part_1_jquery-3.2.1.min_2.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "ccca1cb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ccca1cb_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ccca1cb_part_1_moment.min_3.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "ccca1cb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ccca1cb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/ccca1cb.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 142
        echo "-->
    <script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script type=\"text/javascript\">
        \$( function() {
            \$( \".datepicker\" ).datepicker({
                minDate: new Date(1950, 1 - 1, 1),
                changeMonth: true,
                changeYear: true
            });
        } );
    </script>

    ";
        
        $__internal_4dfe53d92d0f429e73ea90f2a166d87035af8ac5790c40c863214aca4030e1fd->leave($__internal_4dfe53d92d0f429e73ea90f2a166d87035af8ac5790c40c863214aca4030e1fd_prof);

        
        $__internal_8b833da399375e8815f508569aee5a6dc5d8e2cc4f21d10d6bbb57a5c1f4de43->leave($__internal_8b833da399375e8815f508569aee5a6dc5d8e2cc4f21d10d6bbb57a5c1f4de43_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 145,  379 => 144,  375 => 143,  372 => 142,  346 => 141,  341 => 138,  332 => 137,  315 => 90,  305 => 24,  273 => 22,  268 => 19,  259 => 18,  241 => 8,  229 => 159,  227 => 137,  204 => 117,  176 => 91,  174 => 90,  160 => 78,  154 => 76,  152 => 75,  149 => 74,  144 => 72,  139 => 71,  133 => 69,  131 => 68,  128 => 67,  122 => 65,  120 => 64,  116 => 62,  111 => 60,  108 => 59,  106 => 58,  99 => 54,  91 => 48,  79 => 37,  75 => 36,  62 => 26,  59 => 25,  57 => 18,  53 => 17,  49 => 16,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    
    <head>
        
        <meta charset=\"UTF-8\" />
        
        <title>{% block title %}Welcome!{% endblock %}</title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!--Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

        <!--<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{asset('css/reset.css')}}\"/>-->
        {% block stylesheets %}
            {% stylesheets 'css/*'
                filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    
    </head>
    
    <body>
        <div class=\"wrap\">
    
        <header id=\"top-page\" class=\"container clearfix\">
                <div id=\"top-header\" class=\"center\">
                    <h1 class=\"clearfix\">
                        <a id=\"logo\" href=\"{{path('home')}}\">
                            <img src=\"{{asset('img/Logo.png')}}\" alt=\"Shoot | Logo\"/>
                            <span class=\"shoot\">Post it!</span>
                        </a>
                    </h1>
                    <i class=\"left-menu\"><span></span></i>                  
                    <div id=\"search\">
                        <i class=\"fa fa-search\" id=\"search-icon\"></i>                       
                    </div>
                    <div id=\"right-menu\">
                    {# {{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}  #}   
                     
                    </div>
                </div>
                <nav id=\"top-nav\" class=\"main-menu clearfix\">
                    <ul>
                        <li><a class=\"center\" href=\"{{path('home')}}\" title=\"home\">Home<i class=\"fa fa-arrow-right\"></i></a></li>
                        <li><a class=\"center\" href=\"pages.php\" title=\"pages\">Pages<i class=\"fa fa-arrow-right\"></i></a></li>
                        <!--Visible seulement une fois logger-->

                        {% if is_granted('ROLE_USER') %}

                        <li><a class=\"center\" href=\"{{path('profil', {id:app.user.id})}}\" title=\"profil\">Profil<i class=\"fa fa-arrow-right\"></i></a></li>
                        {% endif %}
                        <!--Disparait si la personne est logger-->
                        <!--Apparait une fois logger, permet de créer un topic-->
                        {% if is_granted('ROLE_USER') %}
                            <li><a class=\"center\" href=\"{{path('addPost')}}\" title=\"inscription\">Post<i class=\"fa fa-arrow-right\"></i></a></li>
                        {% endif %}
                        
                        {% if is_granted('ROLE_USER') %}
                            <li><a class=\"center\" href=\"{{path('logout')}}\" title=\"log\">LogOut<i class=\"fa fa-arrow-right\"></i></a></li>
                        {% else %}
                            <li><a class=\"center\" href=\"{{path('register')}}\" title=\"inscription\">Inscription<i class=\"fa fa-arrow-right\"></i></a></li>
                            <li><a class=\"center\" href=\"{{path('login')}}\" title=\"log\">Log<i class=\"fa fa-arrow-right\"></i></a></li>
                        {% endif %}
                        
                        {% if is_granted('ROLE_ADMIN') %}
                        <li><a class=\"center\" href=\"{{path('admin')}}\" title=\"admin\">Admin<i class=\"fa fa-arrow-right\"></i></a></li>
                        {% endif %}
                    </ul>

                    <!-- Affichage des erreurs  -->
                   
                </nav>
        </header>

        <form id=\"search-field\">
            <input type=\"search\" name=\"search\" id=\"search-input\" placeholder=\"Search\"/>
            <span id=\"reslut_search\">   </span> 
        </form>

        {% block body %}{% endblock %}

        <section id=\"second-part\" class=\"clearfix\">
            <div id=\"article-second-part\">
               <article id=\"about\">
                    <div class=\"article-content\">
                        <h3>About MFF</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </article>
                <article id=\"keep-in-touch\">
                    <div class=\"article-content\">
                        <h3>Keep in touch</h3>
                        <aside id=\"social-connect\">
                            <a href=\"\" title=\"Shoot facebook\"><i class=\"fa fa-facebook-official\"></i></a>
                            <a href=\"\" title=\"Shoot twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"https://plus.google.com/u/0/107035950534176610317\" target=\"_blank\" title=\"Shoot google+\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"\" title=\" Shoot dribbble\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"\" title=\"Shoot behance\"><i class=\"fa fa-behance\"></i></a>
                        </aside>
                        <aside id=\"info\">
                            <div class=\"contact-info\">
                                <img src=\"{{ asset('img/location-icon.png') }}\" alt=\"adress\" height=\"24\" width=\"16\"/>
                                <h4>No 200, Av Balboa, Panamá, Panama</h4>
                            </div>
                            <div class=\"contact-info\">
                                <img src=\"img/phone-icon.png\" alt=\"phone number\" height=\"24\" width=\"16\"/>
                                <h4>+44 (0) 800 765 4321</h4>
                            </div>
                            <div class=\"contact-info\">
                                <img src=\"img/mail-icon.png\" alt=\"adress\" height=\"24\" width=\"16\"/>
                                <h4>mff.wf3@gmail.com</h4>
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
        </section>
        </div>

    </body>

    {% block javascripts %}
    <!--{% javascripts
                    'js/*'
                    %}
                    <script type=\"text/javascript\" src=\"{{asset_url}}\"></script>
                    {% endjavascripts %}-->
    <script type=\"text/javascript\" src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/moment.min.js')}}\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script type=\"text/javascript\">
        \$( function() {
            \$( \".datepicker\" ).datepicker({
                minDate: new Date(1950, 1 - 1, 1),
                changeMonth: true,
                changeYear: true
            });
        } );
    </script>

    {% endblock %}

</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\SymfonyTest\\Nouveau dossier\\pro\\app/Resources\\views/base.html.twig");
    }
}
