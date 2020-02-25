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

/* @Article/CategoryFront/viewCategories.html.twig */
class __TwigTemplate_99cb1443c72325d4ddae16cd6a3e9e548fadbb12f5d1ba4c92c5108d73e470b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/CategoryFront/viewCategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/CategoryFront/viewCategories.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/CategoryFront/viewCategories.html.twig", 1);
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

        echo "View Category ";
        
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
        ";
        // line 8
        if ( !twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 9
            echo "        <div class=\"col-md-12\">
            <div class=\"card\">

                <div class=\"card-header\">
                    <h1 class=\"card-title\">View Category : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "libelle", []), "html", null, true);
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
                                            id
                                        </th>
                                        <th>
                                            label
                                        </th>
                                        <th>
                                            Articles
                                        </th>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "idCategory", []), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "libelle", []), "html", null, true);
            echo "
                                            </td>
                                            <td>

                                                ";
            // line 44
            if ( !twig_test_empty(($context["form"] ?? $this->getContext($context, "form")))) {
                // line 45
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
                    // line 46
                    echo "                                                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forms"], "name", []), "html", null, true);
                    echo "</p>

                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "
                                                ";
            } else {
                // line 51
                echo "                                                    <p>No Articles found for this category</p>
                                                ";
            }
            // line 53
            echo "                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <br/>
                                <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-category");
            echo "\" class=\"btn btn-primary btn-round\">View All categories </a><br>
                                <a href=\"/article/Delete-category/";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "idCategory", []), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete this Category</a>
                            </div>
                        </div>
                    </div>

                    <br/>


                </div>
            </div>
            ";
        } else {
            // line 73
            echo "                <p>No Categoy found.</p>
            ";
        }
        // line 75
        echo "        </div>

    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Article/CategoryFront/viewCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 75,  184 => 73,  170 => 62,  166 => 61,  156 => 53,  152 => 51,  148 => 49,  138 => 46,  133 => 45,  131 => 44,  124 => 40,  118 => 37,  91 => 13,  85 => 9,  83 => 8,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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

{% block title %}View Category {% endblock %}

{% block body %}
<div class=\"content\">
    <div class=\"row\">
        {% if category is not empty %}
        <div class=\"col-md-12\">
            <div class=\"card\">

                <div class=\"card-header\">
                    <h1 class=\"card-title\">View Category : {{ category.libelle }}</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-12\">

                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead class=\" text-primary\">
                                        <th>
                                            id
                                        </th>
                                        <th>
                                            label
                                        </th>
                                        <th>
                                            Articles
                                        </th>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                {{ category.idCategory }}
                                            </td>
                                            <td>
                                                {{ category.libelle }}
                                            </td>
                                            <td>

                                                {% if form is not empty %}
                                                    {% for forms in form %}
                                                        <p>{{ forms.name }}</p>

                                                    {% endfor %}

                                                {% else %}
                                                    <p>No Articles found for this category</p>
                                                {% endif %}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <br/>
                                <a href=\"{{ path('show-category') }}\" class=\"btn btn-primary btn-round\">View All categories </a><br>
                                <a href=\"/article/Delete-category/{{ category.idCategory }}\" target=\"_blank\" class=\"btn btn-primary btn-round\">delete this Category</a>
                            </div>
                        </div>
                    </div>

                    <br/>


                </div>
            </div>
            {% else %}
                <p>No Categoy found.</p>
            {% endif %}
        </div>

    </div>

    {% endblock %}
", "@Article/CategoryFront/viewCategories.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\CategoryFront\\viewCategories.html.twig");
    }
}
