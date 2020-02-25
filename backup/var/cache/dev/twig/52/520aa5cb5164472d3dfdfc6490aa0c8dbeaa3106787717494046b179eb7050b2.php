<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Resources/Magazin/afficherMagazin.html.twig */
class __TwigTemplate_cdf21f35ab12ff390dad1cd163e9cc87167cbaaba286ebbd223f586684bd5acc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'onglet' => [$this, 'block_onglet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resources/Magazin/afficherMagazin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resources/Magazin/afficherMagazin.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Resources/Magazin/afficherMagazin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_onglet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        echo "Magazin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des Magazins</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">
                                <th>id_magazin</th>
                                <th>capacity</th>
                                <th>location</th>
                                <th>category</th>
                                <th>modifier</th>
                                <th>supprimer</th>

                                </thead>
                                <tbody>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["magazin"] ?? $this->getContext($context, "magazin")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "                                    <tr>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idMag", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capacity", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "location", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "category", []), "libelle", []), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazin_modif", ["id_mag" => $this->getAttribute($context["m"], "idMag", [])]), "html", null, true);
            echo "\" style=\"color:#00ad5f\">modifier</a></td>
                                        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazin_supp", ["id_mag" => $this->getAttribute($context["m"], "idMag", [])]), "html", null, true);
            echo "\" style=\"color:#FF0000\">supprimer</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Resources/Magazin/afficherMagazin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  105 => 26,  101 => 25,  79 => 5,  70 => 4,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'dashboard_base.html.twig' %}
    {% block onglet %}Magazin{% endblock %}

    {% block body %}
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des Magazins</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">
                                <th>id_magazin</th>
                                <th>capacity</th>
                                <th>location</th>
                                <th>category</th>
                                <th>modifier</th>
                                <th>supprimer</th>

                                </thead>
                                <tbody>
                                {% for m in magazin %}
                                    <tr>
                                        <td>{{ m.idMag }}</td>
                                        <td>{{ m.capacity }}</td>
                                        <td>{{ m.location }}</td>
                                        <td>{{ m.category.libelle }}</td>
                                        <td><a href=\"{{ path('magazin_modif',{ 'id_mag' : m.idMag }) }}\" style=\"color:#00ad5f\">modifier</a></td>
                                        <td><a href=\"{{ path('magazin_supp',{ 'id_mag' : m.idMag }) }}\" style=\"color:#FF0000\">supprimer</a></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        {% endblock %}
", "@Resources/Magazin/afficherMagazin.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ResourcesBundle\\Resources\\views\\Magazin\\afficherMagazin.html.twig");
    }
}
