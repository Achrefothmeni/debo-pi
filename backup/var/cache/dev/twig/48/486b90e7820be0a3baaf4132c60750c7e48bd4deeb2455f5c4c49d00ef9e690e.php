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

/* @Article/Category/ShowCategory.html.twig */
class __TwigTemplate_2812a09267c9de7bfea1b87ebe50fa919c42faaabdf17fa801857d283e0fcfea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Category/ShowCategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Category/ShowCategory.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/Category/ShowCategory.html.twig", 4);
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
                            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">

                                    ";
        // line 24
        if ( !twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 25
            echo "                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>category ID</th>
                                            <th>Label</th>
                                            <th>Products</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            </thead>
                                            <tbody>
                                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 35
                echo "<tr>
                                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "IdCategory", []), "html", null, true);
                echo "</td>

                                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "label", []), "html", null, true);
                echo "</td>
    <td>  ";
                // line 39
                if ( !twig_test_empty(($context["Article"] ?? $this->getContext($context, "Article")))) {
                    // line 40
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["Article"] ?? $this->getContext($context, "Article")));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 41
                        echo "                ";
                        if (($this->getAttribute($context["a"], "label", []) == $this->getAttribute($context["c"], "label", []))) {
                            // line 42
                            echo "                <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", []), "html", null, true);
                            echo "</p>
            ";
                        }
                        // line 44
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "
        ";
                } else {
                    // line 47
                    echo "            <p>No Articles found for this category</p>
        ";
                }
                // line 49
                echo "    </td>
    <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update-category", ["id" => $this->getAttribute($context["c"], "IdCategory", [])]), "html", null, true);
                echo "\" style=\"color:#00ad5f\">Update</a></td>
    <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_category", ["id" => $this->getAttribute($context["c"], "IdCategory", [])]), "html", null, true);
                echo "\" style=\"color:#FF0000\">Delete</a></td>

</tr>

                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "

                                            </tbody>
                                        </table>
                                    ";
        } else {
            // line 61
            echo "                                        <p>No categories found.</p>
                                    ";
        }
        // line 63
        echo "                                </div>

                                <br/>
                                <a href=\"";
        // line 66
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
    </div>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Article/Category/ShowCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 66,  186 => 63,  182 => 61,  175 => 56,  164 => 51,  160 => 50,  157 => 49,  153 => 47,  149 => 45,  143 => 44,  137 => 42,  134 => 41,  129 => 40,  127 => 39,  123 => 38,  118 => 36,  115 => 35,  111 => 34,  100 => 25,  98 => 24,  79 => 7,  70 => 6,  52 => 5,  30 => 4,);
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
                            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                        <div class=\"card card-user\">
                            <div class=\"card-header\">
                                <div class=\"table-responsive\">

                                    {% if category is not empty %}
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>category ID</th>
                                            <th>Label</th>
                                            <th>Products</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            </thead>
                                            <tbody>
                                            {% for c in category %}
<tr>
                                                    <td>{{ c.IdCategory}}</td>

                                                    <td>{{ c.label }}</td>
    <td>  {% if Article is not empty %}
            {% for a in Article %}
                {% if a.label == c.label %}
                <p>{{ a.description }}</p>
            {% endif %}
            {% endfor %}

        {% else %}
            <p>No Articles found for this category</p>
        {% endif %}
    </td>
    <td><a href=\"{{ path('update-category',{'id': c.IdCategory}) }}\" style=\"color:#00ad5f\">Update</a></td>
    <td><a href=\"{{ path('delete_category',{'id': c.IdCategory}) }}\" style=\"color:#FF0000\">Delete</a></td>

</tr>

                                            {% endfor %}


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
    </div>
</div>
    {% endblock %}
", "@Article/Category/ShowCategory.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\Category\\ShowCategory.html.twig");
    }
}
