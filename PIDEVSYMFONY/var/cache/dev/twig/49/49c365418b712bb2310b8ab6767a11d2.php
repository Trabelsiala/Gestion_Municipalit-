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

/* baseback.html.twig */
class __TwigTemplate_453d3d1295c62631dbf34bb9dd10dae4 extends Template
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
            'menu' => [$this, 'block_menu'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"./assets/img/apple-icon.png\">
  <link rel=\"icon\" type=\"image/png\" href=\"./assets/img/favicon.png\">
  ";
        // line 23
        $this->displayBlock('titre', $context, $blocks);
        // line 24
        echo "  <!--     Fonts and icons     -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Nucleo Icons -->
  ";
        // line 27
        $this->displayBlock('css', $context, $blocks);
        // line 45
        echo "</head>
";
        // line 46
        $this->displayBlock('menu', $context, $blocks);
        // line 144
        echo "  ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 157
        echo "    <!-- End Navbar -->
    ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 193
        echo "    </div>
  </main>
  
  <!--   Core JS Files   -->
  ";
        // line 197
        $this->displayBlock('js', $context, $blocks);
        // line 205
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " <title> MUNICIPALITE DE TUNIS  </title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 28
        echo "  <link href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" />
 
  <link href=\"  ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" />
 
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <link href=\" ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <!-- CSS Files -->



    <!-- Copy CSS from https://getbootstrap.com/docs/5.0/getting-started/introduction/#css -->



  <link id=\"pagestyle\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/argon-dashboard.css?v=2.0.4"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 47
        echo "<body class=\"g-sidenav-show   bg-gray-1000\">
  <div class=\"min-height-150 bg-primary position-absolute w-100\"></div>
  <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
        <img src=\"/assets/img/logo-ct-dark.jpg\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold\">MENUCIPALITE </span>
      </a>
    </div>
    <hr class=\"horizontal dark mt-0\">
    <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"./pages/dashboard.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">User</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/tables.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-calendar-grid-58 text-warning text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Documentation</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">outil</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Reclamation</span>
          </a>
        </li>
         <li class=\"nav-item\">
          <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_index");
        echo "\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">TypeReclamation</span>
          </a>
        </li>
         <li class=\"nav-item\">
          <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        echo "\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Avis</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/rtl.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-world-2 text-danger text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">vehicule</span>
          </a>
        </li>
       
       
       
        <li class=\"nav-item mt-3\">
          <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/profile.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Profile</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/sign-in.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign out </span>
          </a>
        </li>
        
      </ul>
    </div>
   
  </aside>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 145
        echo "  <main class=\"main-content position-relative border-radius-lg \">
   <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
            <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-white\" href=\"javascript:;\">MUNICIPALITE</a></li>
          </ol>
        </nav>
      </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "






    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 169
        echo "      <footer class=\"footer pt-3  \">
        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              
            </div>
            <div class=\"col-lg-6\">
              <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 198
        echo "  <script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\" ";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\" ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
   <!-- Copy JavaScript from https://getbootstrap.com/docs/5.0/getting-started/introduction/#js -->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  438 => 202,  434 => 201,  430 => 200,  426 => 199,  421 => 198,  411 => 197,  378 => 169,  368 => 168,  350 => 159,  340 => 158,  319 => 145,  309 => 144,  256 => 101,  245 => 93,  234 => 85,  194 => 47,  184 => 46,  172 => 43,  160 => 34,  153 => 30,  147 => 28,  137 => 27,  118 => 23,  107 => 205,  105 => 197,  99 => 193,  96 => 168,  94 => 158,  91 => 157,  88 => 144,  86 => 46,  83 => 45,  81 => 27,  76 => 24,  74 => 23,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"./assets/img/apple-icon.png\">
  <link rel=\"icon\" type=\"image/png\" href=\"./assets/img/favicon.png\">
  {% block titre %} <title> MUNICIPALITE DE TUNIS  </title> {% endblock %}
  <!--     Fonts and icons     -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Nucleo Icons -->
  {% block css%}
  <link href=\" {{asset('css/nucleo-icons.css')}} \" rel=\"stylesheet\" />
 
  <link href=\"  {{asset('css/nucleo-icons.css')}} \" rel=\"stylesheet\" />
 
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <link href=\" {{asset('css/nucleo-svg.css')}}\" rel=\"stylesheet\" />
  <!-- CSS Files -->



    <!-- Copy CSS from https://getbootstrap.com/docs/5.0/getting-started/introduction/#css -->



  <link id=\"pagestyle\" href=\"{{asset('css/argon-dashboard.css?v=2.0.4')}}\" rel=\"stylesheet\" />
  {% endblock %}
</head>
{% block menu%}
<body class=\"g-sidenav-show   bg-gray-1000\">
  <div class=\"min-height-150 bg-primary position-absolute w-100\"></div>
  <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
        <img src=\"/assets/img/logo-ct-dark.jpg\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold\">MENUCIPALITE </span>
      </a>
    </div>
    <hr class=\"horizontal dark mt-0\">
    <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"./pages/dashboard.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">User</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/tables.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-calendar-grid-58 text-warning text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Documentation</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">outil</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a href=\"{{path ('app_reclamation_index')}}\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Reclamation</span>
          </a>
        </li>
         <li class=\"nav-item\">
          <a href=\"{{path ('app_type_index')}}\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">TypeReclamation</span>
          </a>
        </li>
         <li class=\"nav-item\">
          <a href=\"{{path ('app_avis_index')}}\" class=\"nav-item nav-link\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-app text-info text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Avis</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/rtl.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-world-2 text-danger text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">vehicule</span>
          </a>
        </li>
       
       
       
        <li class=\"nav-item mt-3\">
          <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/profile.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Profile</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"./pages/sign-in.html\">
            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
            </div>
            <span class=\"nav-link-text ms-1\">Sign out </span>
          </a>
        </li>
        
      </ul>
    </div>
   
  </aside>
   {% endblock %}
  {%block navbar%}
  <main class=\"main-content position-relative border-radius-lg \">
   <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
            <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-white\" href=\"javascript:;\">MUNICIPALITE</a></li>
          </ol>
        </nav>
      </div>
    </nav>
    {%endblock%}
    <!-- End Navbar -->
    {% block body%}







    
    {% endblock %}
    {% block footer%}
      <footer class=\"footer pt-3  \">
        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              
            </div>
            <div class=\"col-lg-6\">
              <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
      {%endblock%}
    </div>
  </main>
  
  <!--   Core JS Files   -->
  {% block js%}
  <script src=\" {{asset('js/core/popper.min.js')}}\"></script>
  <script src=\" {{asset('js/core/bootstrap.min.js')}}\"></script>
  <script src=\" {{asset('js/plugins/perfect-scrollbar.min.js')}}\"></script>
  <script src=\"{{asset('js/plugins/smooth-scrollbar.min.js')}}\"></script>
  <script src=\"{{asset('js/plugins/chartjs.min.js')}}\"></script>
   <!-- Copy JavaScript from https://getbootstrap.com/docs/5.0/getting-started/introduction/#js -->
 {%endblock%}

</html>", "baseback.html.twig", "C:\\xampp\\htdocs\\PIDEVSYMFONY\\templates\\baseback.html.twig");
    }
}
