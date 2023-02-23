<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basefront.html.twig */
class __TwigTemplate_d0d2d5235d7e11e49c413eda25d6b987 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
   ";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo " 
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap\" rel=\"stylesheet\"> 

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
     ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "</head>

<body>
    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark\">
        <div class=\"row py-2 px-lg-5\">
            <div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center text-white\">
                    <small><i class=\"fa fa-phone-alt mr-2\"></i>+0126 55888999</small>
                    <small class=\"px-3\">|</small>
                    <small><i class=\"fa fa-envelope mr-2\"></i>MUNICIPALITE.TUNIS@GMAIL.COM</small>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-white pl-2\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid p-0\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
            <a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
                <h1 class=\"m-0 text-uppercase text-primary\"></i>MUNICIPALITE DE TUNIS </h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto py-0\">
                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-item nav-link\">outil</a>
                    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-item nav-link\">vehicule</a>
                    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\" class=\"nav-item nav-link\">Reclamation</a>
                    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-item nav-link\">Documentation</a>
                    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_listavis");
        echo "\" class=\"nav-item nav-link\">Avis</a>

                </div>
                <a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
    <!-- Header Start -->
    ";
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "    <!-- Header End -->


    
    ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "
 

   
    <!-- Footer Start -->
     ";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 172
        echo "
    <!-- Back to Top -->
    ";
        // line 174
        $this->displayBlock('js', $context, $blocks);
        // line 189
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>MUNICIPALITE DE TUNIS</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo " \"rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 92
        echo "    <div class=\"jumbotron jumbotron-fluid position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
        <div class=\"container text-center my-5 py-5\">
            <h1 class=\"text-white mt-4 mb-4\">BIENVENU</h1>
            <h1 class=\"text-white display-1 mb-5\">MUNICIPALITE DE TUNIS </h1>
            <div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
              
            </div>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 107
        echo "   




      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 119
        echo "    <div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\">
        <div class=\"container mt-5 pt-5\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-5\">
                    <a href=\"index.html\" class=\"navbar-brand\">
                        <h1 class=\"mt-n2 text-uppercase text-white\"></i>MUNICIPALITE DE TUNIS </h1>
                    </a>
                    <p class=\"m-0\">Portail du Gouvernement Tunisien</p>
                </div>
                <div class=\"col-md-6 mb-5\">
                    <h3 class=\"text-white mb-4\">Newsletter</h3>
                    <div class=\"w-100\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary px-4\">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 mb-5\">
                    <h3 class=\"text-white mb-4\">Get In Touch</h3>
                    <p><i class=\"fa fa-map-marker-alt mr-2\"></i>31 Rue Italie-Moncef Bey</p>
                    <p><i class=\"fa fa-phone-alt mr-2\"></i>+0126 55888999</p>
                    <p><i class=\"fa fa-envelope mr-2\"></i>MUNICIPALITE.TUNIS@GMAIL.COM</p>
                    <div class=\"d-flex justify-content-start mt-4\">
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-twitter\"></i></a>
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-facebook-f\"></i></a>
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-linkedin-in\"></i></a>
                        <a class=\"text-white\" href=\"#\"><i class=\"fab fa-2x fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
                    <p class=\"m-0\">Copyright &copy; <a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
                    </p>
                </div>
                <div class=\"col-md-6 text-center text-md-right\">
                    <p class=\"m-0\">Designed by <a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 175
        echo "    <a href=\"#\" class=\"btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>

    
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "  \"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo " \"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 187,  402 => 184,  398 => 183,  394 => 182,  390 => 181,  382 => 175,  372 => 174,  310 => 119,  300 => 118,  285 => 107,  275 => 106,  256 => 92,  246 => 91,  234 => 25,  228 => 22,  225 => 21,  215 => 20,  196 => 6,  184 => 189,  182 => 174,  178 => 172,  176 => 118,  169 => 113,  167 => 106,  161 => 102,  159 => 91,  145 => 80,  141 => 79,  137 => 78,  133 => 77,  129 => 76,  125 => 75,  75 => 27,  73 => 20,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
   {% block titre %} <title>MUNICIPALITE DE TUNIS</title>{% endblock %} 
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap\" rel=\"stylesheet\"> 

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
     {% block css%}
    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}} \"rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('css/style.css')}} \" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark\">
        <div class=\"row py-2 px-lg-5\">
            <div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
                <div class=\"d-inline-flex align-items-center text-white\">
                    <small><i class=\"fa fa-phone-alt mr-2\"></i>+0126 55888999</small>
                    <small class=\"px-3\">|</small>
                    <small><i class=\"fa fa-envelope mr-2\"></i>MUNICIPALITE.TUNIS@GMAIL.COM</small>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                    <a class=\"text-white px-2\" href=\"\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                    <a class=\"text-white pl-2\" href=\"\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid p-0\">
        <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
            <a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
                <h1 class=\"m-0 text-uppercase text-primary\"></i>MUNICIPALITE DE TUNIS </h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto py-0\">
                    <a href=\"{{path ('app_front')}}\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"{{path ('app_front')}}\" class=\"nav-item nav-link\">outil</a>
                    <a href=\"{{path ('app_front')}}\" class=\"nav-item nav-link\">vehicule</a>
                    <a href=\"{{path ('app_reclamation_new')}}\" class=\"nav-item nav-link\">Reclamation</a>
                    <a href=\"{{path ('app_front')}}\" class=\"nav-item nav-link\">Documentation</a>
                    <a href=\"{{path ('app_avis_listavis')}}\" class=\"nav-item nav-link\">Avis</a>

                </div>
                <a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
    <!-- Header Start -->
    {% block header %}
    <div class=\"jumbotron jumbotron-fluid position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
        <div class=\"container text-center my-5 py-5\">
            <h1 class=\"text-white mt-4 mb-4\">BIENVENU</h1>
            <h1 class=\"text-white display-1 mb-5\">MUNICIPALITE DE TUNIS </h1>
            <div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
              
            </div>
        </div>
    </div>
    {% endblock %}
    <!-- Header End -->


    
    {% block body %}
   




      {%endblock%}

 

   
    <!-- Footer Start -->
     {% block footer %}
    <div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\">
        <div class=\"container mt-5 pt-5\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-5\">
                    <a href=\"index.html\" class=\"navbar-brand\">
                        <h1 class=\"mt-n2 text-uppercase text-white\"></i>MUNICIPALITE DE TUNIS </h1>
                    </a>
                    <p class=\"m-0\">Portail du Gouvernement Tunisien</p>
                </div>
                <div class=\"col-md-6 mb-5\">
                    <h3 class=\"text-white mb-4\">Newsletter</h3>
                    <div class=\"w-100\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary px-4\">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 mb-5\">
                    <h3 class=\"text-white mb-4\">Get In Touch</h3>
                    <p><i class=\"fa fa-map-marker-alt mr-2\"></i>31 Rue Italie-Moncef Bey</p>
                    <p><i class=\"fa fa-phone-alt mr-2\"></i>+0126 55888999</p>
                    <p><i class=\"fa fa-envelope mr-2\"></i>MUNICIPALITE.TUNIS@GMAIL.COM</p>
                    <div class=\"d-flex justify-content-start mt-4\">
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-twitter\"></i></a>
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-facebook-f\"></i></a>
                        <a class=\"text-white mr-4\" href=\"#\"><i class=\"fab fa-2x fa-linkedin-in\"></i></a>
                        <a class=\"text-white\" href=\"#\"><i class=\"fab fa-2x fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
                    <p class=\"m-0\">Copyright &copy; <a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
                    </p>
                </div>
                <div class=\"col-md-6 text-center text-md-right\">
                    <p class=\"m-0\">Designed by <a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
 {% endblock %}

    <!-- Back to Top -->
    {% block js %}
    <a href=\"#\" class=\"btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>

    
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('lib/easing/easing.min.js')}}  \"></script>
    <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('lib/counterup/counterup.min.js')}}\"></script>
    <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset ('js/main.js')}} \"></script>
    {% endblock %}
</body>

</html>", "basefront.html.twig", "C:\\xampp\\htdocs\\PIDEVSYMFONY\\templates\\basefront.html.twig");
    }
}
