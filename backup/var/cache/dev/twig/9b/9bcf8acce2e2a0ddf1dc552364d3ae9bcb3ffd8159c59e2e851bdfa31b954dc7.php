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

/* @Livraison/Default/singleLivraison.html.twig */
class __TwigTemplate_6ce34dff7b4204f16b78429dc71135a04c1359cb1fe4dd371dfa89c3bcdfbcce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Livraison/Default/singleLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Livraison/Default/singleLivraison.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Livraison/Default/singleLivraison.html.twig", 1);
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

        echo "Gestion livraisons";
        
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

        echo "Debo - Livraison";
        
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
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">livraison n° ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "id", []), "html", null, true);
        echo "</h4>
                    </div>
                    <div class=\"card-body\">
                        <h6><strong>Date de depart:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "dateDepart", []), "Y-m-d H:i:s"), "html", null, true);
        echo " </h6><br>
                        <h6><strong>Status: </strong>
                            ";
        // line 15
        if (($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []) == "En cours")) {
            // line 16
            echo "                                <div class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []), "html", null, true);
            echo "</div>
                            ";
        } elseif (($this->getAttribute(        // line 17
($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []) == "Terminée")) {
            // line 18
            echo "                                <div class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []), "html", null, true);
            echo "</div>
                            ";
        } elseif (($this->getAttribute(        // line 19
($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []) == "Annulée")) {
            // line 20
            echo "                                <div class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []), "html", null, true);
            echo "</div>
                            ";
        } else {
            // line 22
            echo "                                <div class=\"badge badge-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "status", []), "html", null, true);
            echo "</div>

                            ";
        }
        // line 25
        echo "                        </h6><br>
                        <h6><strong>Livreur: </strong>";
        // line 26
        (($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "livreur", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "livreur", []), "nom", []), "html", null, true))) : (print ("")));
        echo " ";
        (($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "livreur", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "livreur", []), "prenom", []), "html", null, true))) : (print ("")));
        echo "</h6>
                        <h6><br>
                            <strong>Mise à jour status</strong>
                            <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_single_livraison", ["id" => $this->getAttribute(($context["livraison"] ?? $this->getContext($context, "livraison")), "id", [])]), "html", null, true);
        echo "\", method=\"post\">
                                <br>
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"status\">
                                            <option value=\"En cours\">En cours</option>
                                            <option value=\"Terminée\">Terminée</option>
                                            <option value=\"Annulée\">Annulée</option>
                                        </select>
                                    </div>

                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Mise à jour\" />
                            </form>

                        </h6>
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
        return "@Livraison/Default/singleLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 29,  148 => 26,  145 => 25,  138 => 22,  132 => 20,  130 => 19,  125 => 18,  123 => 17,  118 => 16,  116 => 15,  111 => 13,  105 => 10,  98 => 5,  89 => 4,  71 => 3,  53 => 2,  31 => 1,);
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
{% block onglet %}Gestion livraisons{% endblock %}
{% block titre %}Debo - Livraison{% endblock %}
{% block body %}
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">livraison n° {{ livraison.id }}</h4>
                    </div>
                    <div class=\"card-body\">
                        <h6><strong>Date de depart:</strong> {{livraison.dateDepart|date('Y-m-d H:i:s')}} </h6><br>
                        <h6><strong>Status: </strong>
                            {% if livraison.status == \"En cours\" %}
                                <div class=\"badge badge-info\">{{ livraison.status }}</div>
                            {% elseif livraison.status == \"Terminée\" %}
                                <div class=\"badge badge-success\">{{ livraison.status }}</div>
                            {% elseif livraison.status == \"Annulée\" %}
                                <div class=\"badge badge-danger\">{{ livraison.status }}</div>
                            {% else%}
                                <div class=\"badge badge-warning\">{{ livraison.status }}</div>

                            {% endif %}
                        </h6><br>
                        <h6><strong>Livreur: </strong>{{ livraison.livreur ? livraison.livreur.nom }} {{ livraison.livreur ? livraison.livreur.prenom }}</h6>
                        <h6><br>
                            <strong>Mise à jour status</strong>
                            <form action=\"{{ path('update_single_livraison', {'id':livraison.id}) }}\", method=\"post\">
                                <br>
                                    <div class=\"form-group\">
                                        <select class=\"form-control\" name=\"status\">
                                            <option value=\"En cours\">En cours</option>
                                            <option value=\"Terminée\">Terminée</option>
                                            <option value=\"Annulée\">Annulée</option>
                                        </select>
                                    </div>

                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Mise à jour\" />
                            </form>

                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Livraison/Default/singleLivraison.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\LivraisonBundle\\Resources\\views\\Default\\singleLivraison.html.twig");
    }
}
