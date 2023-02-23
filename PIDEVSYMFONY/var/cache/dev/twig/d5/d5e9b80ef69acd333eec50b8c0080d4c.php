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

/* avis/index.html.twig */
class __TwigTemplate_78362507583ac5e8508c94ad6d6ee9a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "avis/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Avis ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<br>
<br>
<br>
<center>
    <h1>Avis</h1>
</center>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rating</th>
                <th>Commentaire</th>
                <th>Titre</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td> ";
            // line 27
            $this->loadTemplate("avis/rating.html.twig", "avis/index.html.twig", 27)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["avi"], "rating", [], "any", false, false, false, 27)]));
            echo "</td>                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_show", ["id" => twig_get_attribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">show</a>
                    
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "avis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 39,  162 => 35,  144 => 30,  139 => 28,  133 => 27,  129 => 26,  126 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Avis {% endblock %}

{% block body %}
<br>
<br>
<br>
<br>
<center>
    <h1>Avis</h1>
</center>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rating</th>
                <th>Commentaire</th>
                <th>Titre</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for avi in avis %}
            <tr>
                <td>{{ avi.id }}</td>
                <td> {% include 'avis/rating.html.twig' with { 'rating': avi.rating } %}</td>                <td>{{ avi.commentaire }}</td>
                <td>{{ avi.titre }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_avis_show', {'id': avi.id}) }}\">show</a>
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "avis/index.html.twig", "C:\\xampp\\htdocs\\PIDEVSYMFONY\\templates\\avis\\index.html.twig");
    }
}
