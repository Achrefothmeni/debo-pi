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

/* @Flux/Default/liste_transactions_by_date.html.twig */
class __TwigTemplate_4d226ade55693bbc8191bf53c1fcb23196cc2e9e7dee1dc882ae4d38f375fbe6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'onglet' => [$this, 'block_onglet'],
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/liste_transactions_by_date.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/liste_transactions_by_date.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Flux/Default/liste_transactions_by_date.html.twig", 1);
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

        echo "Gestion des Flux";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Debo - Flux";
        
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
        <h4 class=\"card-title\">Caisse</h4>

        <div class=\"row\">

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <h4 class=\"card-title\" style=\"font-size: 18px\">Liste des transactions</h4>
                            </div>
                            <div class=\"col-lg-6\" style=\"text-align: end\">
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generer_excel");
        echo "\" target=\"_blank\"> <button type=\"button\" class=\"btn btn-info\">Générer fichier excel</button></a>
                            </div>
                        </div>
                        <form>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"input-group date\" data-provide=\"datepicker\">
                                        <input type=\"text\" class=\"form-control\">
                                        <div class=\"input-group-addon\">
                                            <span class=\"glyphicon glyphicon-th\"></span>
                                        </div>
                                    </div>                            </div>
                                <div class=\"col-lg-6\" style=\"align-content: center\">
                                    <input type=\"submit\" class=\"btn btn-sm btn-info\" value=\"chercher\">
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">

                                <th>
                                    Id
                                </th>
                                <th>
                                    Somme
                                </th>
                                <th>
                                    nature
                                </th>

                                <th>
                                    Date
                                </th>
                                </thead>
                                <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "somme", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "nature", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "Date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des factures par commande</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">
                                <th>
                                    Id Commande
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>

                                </th>
                                </thead>
                                <tbody>
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 102
            echo "
                                    <td>
                                        ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", []), "html", null, true);
            echo "
                                    </td>

                                    <td>
                                        ";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generer_facture", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
            echo "\">

                                            <button type=\"button\" class=\"btn btn-info\" style=\"position: center; bottom: 10px;\">Voir plus</button>
                                        </a>
                                    </td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                </tbody>
                                </thead>
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
        return "@Flux/Default/liste_transactions_by_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 119,  242 => 111,  236 => 108,  229 => 104,  225 => 102,  221 => 101,  191 => 73,  181 => 69,  175 => 66,  169 => 63,  163 => 60,  159 => 58,  155 => 57,  113 => 18,  98 => 5,  89 => 4,  71 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard_base.html.twig' %}
{% block onglet %}Gestion des Flux{% endblock %}
{% block titre %}Debo - Flux{% endblock %}
{% block body %}
    <div class=\"content\">
        <h4 class=\"card-title\">Caisse</h4>

        <div class=\"row\">

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <h4 class=\"card-title\" style=\"font-size: 18px\">Liste des transactions</h4>
                            </div>
                            <div class=\"col-lg-6\" style=\"text-align: end\">
                                <a href=\"{{ path('generer_excel') }}\" target=\"_blank\"> <button type=\"button\" class=\"btn btn-info\">Générer fichier excel</button></a>
                            </div>
                        </div>
                        <form>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"input-group date\" data-provide=\"datepicker\">
                                        <input type=\"text\" class=\"form-control\">
                                        <div class=\"input-group-addon\">
                                            <span class=\"glyphicon glyphicon-th\"></span>
                                        </div>
                                    </div>                            </div>
                                <div class=\"col-lg-6\" style=\"align-content: center\">
                                    <input type=\"submit\" class=\"btn btn-sm btn-info\" value=\"chercher\">
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">

                                <th>
                                    Id
                                </th>
                                <th>
                                    Somme
                                </th>
                                <th>
                                    nature
                                </th>

                                <th>
                                    Date
                                </th>
                                </thead>
                                <tbody>
                                {% for transaction in transactions%}
                                    <tr>
                                        <td>
                                            {{transaction.id}}
                                        </td>
                                        <td>
                                            {{transaction.somme}}
                                        </td>
                                        <td>
                                            {{transaction.nature}}
                                        </td>
                                        <td>
                                            {{transaction.Date|date('Y-m-d H:i:s')}}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des factures par commande</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" text-primary\">
                                <th>
                                    Id Commande
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>

                                </th>
                                </thead>
                                <tbody>
                                {% for commande in commandes%}

                                    <td>
                                        {{commande.id}}
                                    </td>

                                    <td>
                                        {{commande.date|date('Y-m-d H:i:s')}}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('generer_facture', {id:commande.id}) }}\">

                                            <button type=\"button\" class=\"btn btn-info\" style=\"position: center; bottom: 10px;\">Voir plus</button>
                                        </a>
                                    </td>

                                    </tr>
                                {% endfor %}
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "@Flux/Default/liste_transactions_by_date.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FluxBundle\\Resources\\views\\Default\\liste_transactions_by_date.html.twig");
    }
}
