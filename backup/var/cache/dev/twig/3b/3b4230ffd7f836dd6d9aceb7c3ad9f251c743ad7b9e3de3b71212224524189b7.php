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

/* @Article/ArticleFront/view.html.twig */
class __TwigTemplate_086e77e47094d569a2ada977c5c48524d07456e5b9b120bf0e9d8c4ba7702852 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/ArticleFront/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/ArticleFront/view.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/ArticleFront/view.html.twig", 1);
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
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "name", []), "html", null, true);
        echo "
                                                </td>
                                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "prix", []), "html", null, true);
        echo "</td>
                                                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "quantity", []), "html", null, true);
        echo "</td>
                                                <td>
                                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", []))), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100px;\">
                                    </div>
                                                </td>
                                                </td>


                                                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "libelle", []), "html", null, true);
        echo "</td>


                                                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", []), "html", null, true);
        echo "</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <br/>
                                    <a href=\"/article/show-articles\" class=\"btn btn-primary btn-round\">View All</a><br>
                                    <a href=\"/article/Delete-article/";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "idArticle", []), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete this Article</a>
                                </div>
                            </div>
                        </div>

                    <br/>


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
        return "@Article/ArticleFront/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  151 => 58,  145 => 55,  136 => 49,  131 => 47,  127 => 46,  122 => 44,  86 => 11,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    {{ article.name }}
                                                </td>
                                                <td>{{ article.prix }}</td>
                                                <td>{{ article.quantity }}</td>
                                                <td>
                                                    <img src=\"{{ asset('images/' ~ article.image) }}\" alt=\"\" style=\"width: 100px;\">
                                    </div>
                                                </td>
                                                </td>


                                                <td>{{ article.libelle }}</td>


                                                <td>{{ article.description }}</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <br/>
                                    <a href=\"/article/show-articles\" class=\"btn btn-primary btn-round\">View All</a><br>
                                    <a href=\"/article/Delete-article/{{ article.idArticle }}\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete this Article</a>
                                </div>
                            </div>
                        </div>

                    <br/>


                </div>
            </div>
        </div>

    </div>

    {% endblock %}
", "@Article/ArticleFront/view.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\ArticleFront\\view.html.twig");
    }
}
