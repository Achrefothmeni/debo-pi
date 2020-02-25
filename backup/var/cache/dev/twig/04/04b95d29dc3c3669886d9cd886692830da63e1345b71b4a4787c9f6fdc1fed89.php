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

/* @Article/Category/viewCategories.html.twig */
class __TwigTemplate_a61997df7ee135b4a0f07c6eab815717b8aff044c9113b5aaf376a9aa85c5f68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Category/viewCategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Category/viewCategories.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/Category/viewCategories.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "label", []), "html", null, true);
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
                                            Id
                                        </th>
                                        <th>
                                            Label
                                        </th>
                                        <th>
                                            Articles
                                        </th>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "idCategory", []), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "label", []), "html", null, true);
            echo "
                                            </td>
                                            <td>

                                                ";
            // line 43
            if ( !twig_test_empty(($context["form"] ?? $this->getContext($context, "form")))) {
                // line 44
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
                    // line 45
                    echo "                                                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forms"], "name", []), "html", null, true);
                    echo "</p>

                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
                                                ";
            } else {
                // line 50
                echo "                                                    <p>No Articles found for this category</p>
                                                ";
            }
            // line 52
            echo "                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <br/>
                                <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-category");
            echo "\" class=\"btn btn-primary btn-round\">View All categories </a><br>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_category", ["id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "idCategory", [])]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\">Delete this Category</a>
                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update-category", ["id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "idCategory", [])]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\">Update this Category</a>

                            </div>
                        </div>
                    </div>

                    <br/>


                </div>
            </div>
            ";
        } else {
            // line 74
            echo "                <p>No Categoy found.</p>
            ";
        }
        // line 76
        echo "        </div>

    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Article/Category/viewCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 76,  188 => 74,  173 => 62,  169 => 61,  165 => 60,  155 => 52,  151 => 50,  147 => 48,  137 => 45,  132 => 44,  130 => 43,  123 => 39,  117 => 36,  91 => 13,  85 => 9,  83 => 8,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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
                    <h1 class=\"card-title\">View Category : {{ category.label }}</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-12\">
                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead class=\" text-primary\">
                                        <th>
                                            Id
                                        </th>
                                        <th>
                                            Label
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
                                                {{ category.label }}
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
                                <a href=\"{{ path('delete_category',{'id': category.idCategory}) }}\" target=\"_blank\" class=\"btn btn-primary btn-round\">Delete this Category</a>
                                <a href=\"{{ path('update-category',{'id': category.idCategory}) }}\" target=\"_blank\" class=\"btn btn-primary btn-round\">Update this Category</a>

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
", "@Article/Category/viewCategories.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\Category\\viewCategories.html.twig");
    }
}
