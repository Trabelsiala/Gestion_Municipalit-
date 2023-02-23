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

/* avis/rating.html.twig */
class __TwigTemplate_d0b6f3990e12aea350ec2028f976c900 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/rating.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/rating.html.twig"));

        // line 1
        echo "     <span class=\"rating\" >
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "      ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "        <i class=\"fas fa-star\"></i>
        
   ";
            } else {
                // line 7
                echo " <i class=\"far fa-star\"></i> 
 ";
            }
            // line 9
            echo "

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "           </span>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "avis/rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  62 => 9,  58 => 7,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("     <span class=\"rating\" >
  {% for i in 1..5 %}
      {% if i <= rating   %}
        <i class=\"fas fa-star\"></i>
        
   {% else %}
 <i class=\"far fa-star\"></i> 
 {% endif %}


      {% endfor %}
           </span>", "avis/rating.html.twig", "C:\\xampp\\htdocs\\PIDEVSYMFONY\\templates\\avis\\rating.html.twig");
    }
}
