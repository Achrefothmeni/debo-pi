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

/* @Article/Article/view.html.twig */
class __TwigTemplate_c2e5b2c8a95abf54c6d921a6b4ccb20f9b0568d288f335e515a1b9858c4e10ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/view.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/Article/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "View article ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">View article ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "name", []), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"card-body\">
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">
                                <div class=\"card-header\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                quantity
                                            </th>
                                            <th>
                                                image
                                            </th>

                                            <th>
                                                Label
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            <th>
                                                Rating
                                            </th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "name", []), "html", null, true);
        echo "
                                                </td>
                                                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "price", []), "html", null, true);
        echo "<b>TND</b></td>
                                                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "quantity", []), "html", null, true);
        echo "</td>
                                                <td>
                                                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", []))), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100px;\">

                                                </td>
                                                </td>


                                                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "label", []), "html", null, true);
        echo "</td>


                                                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", []), "html", null, true);
        echo "</td>

                                                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "rating", []), "html", null, true);
        echo "</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <br/>
                                    <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-articles");
        echo "\" class=\"btn btn-primary btn-round\">View All</a><br>
                                    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update-article", ["id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "idArticle", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-round\">Update</a>
                                    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_article", ["id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "idArticle", [])]), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete</a>

                                </div>
                            </div>
                        </div>

                    <br/>


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
        return "@Article/Article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  175 => 73,  171 => 72,  159 => 63,  154 => 61,  148 => 58,  139 => 52,  134 => 50,  130 => 49,  125 => 47,  86 => 11,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard_base.html.twig\" %}

{% block title %}View article {% endblock %}

{% block body %}
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">View article {{ article.name }}</h1>
                </div>
                <div class=\"card-body\">
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">
                                <div class=\"card-header\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                quantity
                                            </th>
                                            <th>
                                                image
                                            </th>

                                            <th>
                                                Label
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            <th>
                                                Rating
                                            </th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    {{ article.name }}
                                                </td>
                                                <td>{{ article.price }}<b>TND</b></td>
                                                <td>{{ article.quantity }}</td>
                                                <td>
                                                    <img src=\"{{ asset('images/' ~ article.image) }}\" alt=\"\" style=\"width: 100px;\">

                                                </td>
                                                </td>


                                                <td>{{ article.label }}</td>


                                                <td>{{ article.description }}</td>

                                                <td>{{ article.rating }}</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <br/>
                                    <a href=\"{{path('show-articles')}}\" class=\"btn btn-primary btn-round\">View All</a><br>
                                    <a href=\"{{ path('update-article',{'id': article.idArticle}) }}\" class=\"btn btn-primary btn-round\">Update</a>
                                    <a href=\"{{ path('delete_article',{'id': article.idArticle}) }}\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete</a>

                                </div>
                            </div>
                        </div>

                    <br/>


                </div>
            </div>
        </div>
    </div>
    </div>

    {% endblock %}
", "@Article/Article/view.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\Article\\view.html.twig");
    }
}
