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

/* @Auth/Default/liste_utilisateur.html.twig */
class __TwigTemplate_2634f1a8b6a698e3b66bbbc1915cd79a37014067759ae4c526d6f884e655c3d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/liste_utilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/liste_utilisateur.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Auth/Default/liste_utilisateur.html.twig", 1);
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

        echo "Gestion utilisateurs";
        
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

        echo "Debo - Utilisateurs";
        
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
        echo "
    <div style=\"margin-top: 100px\" class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"text-align: center\">
                    <h5 style=\"text-transform: none\">Choisissez le type de votre utilisateur</h5>

                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_user", ["user_type" => "fournisseur"]);
        echo "\"> <button type=\"button\" class=\"btn btn-info\" >Fournisseur</button></a>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_user", ["user_type" => "client"]);
        echo "\"><button type=\"button\" class=\"btn btn-success\">Client</button></a>
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_user", ["user_type" => "administrateur"]);
        echo "\"><button type=\"button\" class=\"btn btn-warning\">Admin</button></a>

                </div>
            </div>
        </div>
    </div>
    <div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                        <h4 class=\"card-title\">Liste des utilisateur</h4>
                        </div>
                    <div class=\"col-lg-6\" style=\"text-align: right\">
                        <button type=\"submit\"  class=\"btn btn-outline-success  btn-round\" data-toggle=\"modal\" data-target=\"#exampleModal\" >Ajouter un utilisateur</button>
                    </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead class=\" text-primary\">
                            <th>
                                username
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                ROLES
                            </th>

                            </thead>
                            <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 60
                echo "                                            ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 61
                    echo "                                                <div class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</div>
                                            ";
                } elseif ((                // line 62
$context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 63
                    echo "                                                <div class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</div>
                                            ";
                } elseif ((                // line 64
$context["role"] == "ROLE_DELIVERY_MANAGER")) {
                    // line 65
                    echo "                                                <div class=\"badge badge-info\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</div>
                                            ";
                } elseif ((                // line 66
$context["role"] == "ROLE_WAREHOUSE_MANAGER")) {
                    // line 67
                    echo "                                                <div class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</div>
                                            ";
                } elseif ((                // line 68
$context["role"] == "ROLE_FOURNISSEUR")) {
                    // line 69
                    echo "                                                <div class=\"badge badge-dark\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</div>

                                            ";
                }
                // line 72
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                    </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        </table>
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
        return "@Auth/Default/liste_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  223 => 74,  216 => 72,  209 => 69,  207 => 68,  202 => 67,  200 => 66,  195 => 65,  193 => 64,  188 => 63,  186 => 62,  181 => 61,  178 => 60,  174 => 59,  168 => 56,  162 => 53,  158 => 51,  154 => 50,  115 => 14,  111 => 13,  107 => 12,  98 => 5,  89 => 4,  71 => 3,  53 => 2,  31 => 1,);
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
{% block onglet %}Gestion utilisateurs{% endblock %}
{% block titre %}Debo - Utilisateurs{% endblock %}
{% block body %}

    <div style=\"margin-top: 100px\" class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"text-align: center\">
                    <h5 style=\"text-transform: none\">Choisissez le type de votre utilisateur</h5>

                    <a href=\"{{ path('add_user', {user_type:'fournisseur'}) }}\"> <button type=\"button\" class=\"btn btn-info\" >Fournisseur</button></a>
                    <a href=\"{{ path('add_user', {user_type:'client'}) }}\"><button type=\"button\" class=\"btn btn-success\">Client</button></a>
                        <a href=\"{{ path('add_user', {user_type:'administrateur'}) }}\"><button type=\"button\" class=\"btn btn-warning\">Admin</button></a>

                </div>
            </div>
        </div>
    </div>
    <div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                        <h4 class=\"card-title\">Liste des utilisateur</h4>
                        </div>
                    <div class=\"col-lg-6\" style=\"text-align: right\">
                        <button type=\"submit\"  class=\"btn btn-outline-success  btn-round\" data-toggle=\"modal\" data-target=\"#exampleModal\" >Ajouter un utilisateur</button>
                    </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead class=\" text-primary\">
                            <th>
                                username
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                ROLES
                            </th>

                            </thead>
                            <tbody>
                            {% for user in users %}
                                <tr>
                                    <td>
                                        {{user.username}}
                                    </td>
                                    <td>
                                        {{user.email}}
                                    </td>
                                    <td>
                                        {% for role in user.roles %}
                                            {% if role == \"ROLE_USER\" %}
                                                <div class=\"badge badge-danger\">{{ role }}</div>
                                            {% elseif role == \"ROLE_SUPER_ADMIN\" %}
                                                <div class=\"badge badge-success\">{{ role }}</div>
                                            {% elseif role == \"ROLE_DELIVERY_MANAGER\" %}
                                                <div class=\"badge badge-info\">{{ role }}</div>
                                            {% elseif role == \"ROLE_WAREHOUSE_MANAGER\" %}
                                                <div class=\"badge badge-warning\">{{ role }}</div>
                                            {% elseif role == \"ROLE_FOURNISSEUR\" %}
                                                <div class=\"badge badge-dark\">{{ role }}</div>

                                            {% endif %}

                                        {% endfor %}
                                    </td>

                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "@Auth/Default/liste_utilisateur.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\AuthBundle\\Resources\\views\\Default\\liste_utilisateur.html.twig");
    }
}
