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

/* @Article/CategoryFront/ShowCategory.html.twig */
class __TwigTemplate_993abae2b591e86797ac035946501e2ac260a523b71bbe072bfc65a427c7abc3 extends \Twig\Template
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
        // line 4
        return "dashboard_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/CategoryFront/ShowCategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/CategoryFront/ShowCategory.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/CategoryFront/ShowCategory.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Show Categories";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">All Categories</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-12\">

                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">
                                    ";
        // line 21
        if ( !twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 22
            echo "                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>category ID</th>
                                            <th>Label</th>
                                            </thead>
                                            <tbody>
                                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorys"]) {
                // line 29
                echo "                                                <tr>
                                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorys"], "IdCategory", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorys"], "Libelle", []), "html", null, true);
                echo "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                            <tr>
                                                ";
            // line 35
            if ( !twig_test_empty(($context["form"] ?? $this->getContext($context, "form")))) {
                // line 36
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
                    // line 37
                    echo "                                                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forms"], "name", []), "html", null, true);
                    echo "</p>

                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "
                                                ";
            } else {
                // line 42
                echo "                                                    <p>No Articles found for this category</p>
                                                ";
            }
            // line 44
            echo "                                            </tr>
                                            </tbody>
                                        </table>
                                    ";
        } else {
            // line 48
            echo "                                        <p>No categories found.</p>
                                    ";
        }
        // line 50
        echo "                                </div>

                                <br/>
                                <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_category");
        echo "\" class=\"btn btn-primary btn-round\">Create New</a>
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
        return "@Article/CategoryFront/ShowCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 53,  163 => 50,  159 => 48,  153 => 44,  149 => 42,  145 => 40,  135 => 37,  130 => 36,  128 => 35,  125 => 34,  116 => 31,  112 => 30,  109 => 29,  105 => 28,  97 => 22,  95 => 21,  79 => 7,  70 => 6,  52 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("


{% extends \"dashboard_base.html.twig\" %}
{% block title %}Show Categories{% endblock %}
{% block body %}

<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">All Categories</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-12\">

                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">
                                    {% if category is not empty %}
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>category ID</th>
                                            <th>Label</th>
                                            </thead>
                                            <tbody>
                                            {% for categorys in category %}
                                                <tr>
                                                    <td>{{ categorys.IdCategory}}</td>
                                                    <td>{{ categorys.Libelle }}</td>
                                                </tr>
                                            {% endfor %}
                                            <tr>
                                                {% if form is not empty %}
                                                    {% for forms in form %}
                                                        <p>{{ forms.name }}</p>

                                                    {% endfor %}

                                                {% else %}
                                                    <p>No Articles found for this category</p>
                                                {% endif %}
                                            </tr>
                                            </tbody>
                                        </table>
                                    {% else %}
                                        <p>No categories found.</p>
                                    {% endif %}
                                </div>

                                <br/>
                                <a href=\"{{ path('create_category') }}\" class=\"btn btn-primary btn-round\">Create New</a>
                            </div>
                        </div>
                    </div>

                    <br/>


                </div>
            </div>
        </div>

    </div>

    {% endblock %}
", "@Article/CategoryFront/ShowCategory.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\CategoryFront\\ShowCategory.html.twig");
    }
}
