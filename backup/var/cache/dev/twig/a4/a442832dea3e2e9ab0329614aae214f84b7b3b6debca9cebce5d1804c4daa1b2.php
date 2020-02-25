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

/* @Article/Article/ShowArticles.html.twig */
class __TwigTemplate_7970464571d13664f49aed0a3b3ac2a480c0dd4650d2181381961a76b776bbfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/ShowArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/ShowArticles.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/Article/ShowArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Show Articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        th, td {
            padding: 10px;
        }
        th {
            text-align: right;
        }
    </style>


    <div class=\"content\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"card\">

    <div class=\"card-body\">
    <h1 class=\"card-title\">All Articles</h1>
    <h4>Search an article</h4>
    <div class=\"sidebar-search\">

        <div class=\"input-group custom-search-form\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\"><i class=\"zmdi zmdi-search\"></i>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead class=\" text-primary\">
                <th>Name</th>
                <th>Price</th>

                <th>Quantity</th>
                <th>Label</th>
                <th>Description</th>
                <th>Rating</th>
                <th>Update</th>
                <th>Delete</th>
                </thead>
            </table>
        </div>
        <ul id=\"side-menu\">
            <li>
                <a href=\"#\"> <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>


            <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
                        if (searchRequest != null)
                            searchRequest.abort();
                        searchRequest = \$.ajax({
                            type: \"GET\",
                            url: \"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_search");
        echo "\",
                            data: {
                                'q' : value
                            },
                            dataType: \"text\",
                            success: function(msg){
                                //we need to check if the value is the same
                                if (value===\$(that).val()) {
                                    var result = JSON.parse(msg);
                                    \$.each(result, function(key, arr) {
                                        \$.each(arr, function(id, value) {
                                            if (key === 'posts') {
                                                if (id !== 'error') {
                                                    console.log(value[1]);
                                                    entitySelector.append('' +
                                                        '                        ";
        // line 81
        if ( !twig_test_empty(($context["articles"] ?? $this->getContext($context, "articles")))) {
            echo "\\n'+
                                                        '                                <table class=\"table\">\\n'+
                                                        '                                    <tbody>\\n'+
                                                        '                                        <tr>\\n'+
                                                        '                                            <td>'+value[0]+'</td>\\n'+
                                                        '                                            <td>'+value[1]+'</td>\\n'+
                                                        '                                            <td>'+value[2]+'</td>\\n'+
                                                        //'                                            <td><img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/value[3]"), "html", null, true);
            echo "\" alt=\"\" width=\"90px\"></td>\\n'+
                                                        '                                            <td>'+value[4]+'</td>\\n'+
                                                        '                                            <td>'+value[5]+'</td>\\n'+
                                                        '                                            <td>'+value[6]+'</td>\\n'+
                                                        '                                            <td><a href=\"/article/update\" style=\"color:#00ad5f\">Update</a></td>\\n'+
                                                        '                                            <td><a href=\"/article/delete\" style=\"color:#FF0000\">Delete</a></td>\\n'+

                                                        '\\n'+
                                                        '                                        </tr>\\n'+
                                                        '\\n'+
                                                        '                                    </tbody>\\n'+
                                                        '                                </table>\\n'+
                                                        '                        ";
        } else {
            // line 100
            echo "\\n'+
                                                        '                            <p>No article found.</p>\\n'+
                                                        '                        ";
        }
        // line 102
        echo "\\n'+
                                                        '\\n'+
                                                        '                        <br/>\\n'+
                                                        '\\n'+
                                                        '                </div>\\n'+
                                                        '            </div>\\n'+
                                                        '        </div>\\n');
                                                } else {
                                                    entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                }
                                            }
                                        });
                                    });
                                }
                            }
                        });
                    }
                });
            });
        </script>
        <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_article");
        echo "\" target=\"_blank\" class=\"btn btn-primary btn-round\"  >Create New</a>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Article/Article/ShowArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 122,  195 => 102,  190 => 100,  174 => 88,  164 => 81,  146 => 66,  128 => 51,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Show Articles{% endblock %}
{% block body %}
    <style>
        th, td {
            padding: 10px;
        }
        th {
            text-align: right;
        }
    </style>


    <div class=\"content\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"card\">

    <div class=\"card-body\">
    <h1 class=\"card-title\">All Articles</h1>
    <h4>Search an article</h4>
    <div class=\"sidebar-search\">

        <div class=\"input-group custom-search-form\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\"><i class=\"zmdi zmdi-search\"></i>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead class=\" text-primary\">
                <th>Name</th>
                <th>Price</th>

                <th>Quantity</th>
                <th>Label</th>
                <th>Description</th>
                <th>Rating</th>
                <th>Update</th>
                <th>Delete</th>
                </thead>
            </table>
        </div>
        <ul id=\"side-menu\">
            <li>
                <a href=\"#\"> <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>


            <script type=\"text/javascript\" src=\"{{ asset('jquery.min.js') }}\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
                        if (searchRequest != null)
                            searchRequest.abort();
                        searchRequest = \$.ajax({
                            type: \"GET\",
                            url: \"{{ path('article_search') }}\",
                            data: {
                                'q' : value
                            },
                            dataType: \"text\",
                            success: function(msg){
                                //we need to check if the value is the same
                                if (value===\$(that).val()) {
                                    var result = JSON.parse(msg);
                                    \$.each(result, function(key, arr) {
                                        \$.each(arr, function(id, value) {
                                            if (key === 'posts') {
                                                if (id !== 'error') {
                                                    console.log(value[1]);
                                                    entitySelector.append('' +
                                                        '                        {% if articles is not empty %}\\n'+
                                                        '                                <table class=\"table\">\\n'+
                                                        '                                    <tbody>\\n'+
                                                        '                                        <tr>\\n'+
                                                        '                                            <td>'+value[0]+'</td>\\n'+
                                                        '                                            <td>'+value[1]+'</td>\\n'+
                                                        '                                            <td>'+value[2]+'</td>\\n'+
                                                        //'                                            <td><img src=\"{{ asset(\"images/value[3]\")}}\" alt=\"\" width=\"90px\"></td>\\n'+
                                                        '                                            <td>'+value[4]+'</td>\\n'+
                                                        '                                            <td>'+value[5]+'</td>\\n'+
                                                        '                                            <td>'+value[6]+'</td>\\n'+
                                                        '                                            <td><a href=\"/article/update\" style=\"color:#00ad5f\">Update</a></td>\\n'+
                                                        '                                            <td><a href=\"/article/delete\" style=\"color:#FF0000\">Delete</a></td>\\n'+

                                                        '\\n'+
                                                        '                                        </tr>\\n'+
                                                        '\\n'+
                                                        '                                    </tbody>\\n'+
                                                        '                                </table>\\n'+
                                                        '                        {% else %}\\n'+
                                                        '                            <p>No article found.</p>\\n'+
                                                        '                        {% endif %}\\n'+
                                                        '\\n'+
                                                        '                        <br/>\\n'+
                                                        '\\n'+
                                                        '                </div>\\n'+
                                                        '            </div>\\n'+
                                                        '        </div>\\n');
                                                } else {
                                                    entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                }
                                            }
                                        });
                                    });
                                }
                            }
                        });
                    }
                });
            });
        </script>
        <a href=\"{{ path('create_article')}}\" target=\"_blank\" class=\"btn btn-primary btn-round\"  >Create New</a>


    </div>

{% endblock %}", "@Article/Article/ShowArticles.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\Article\\ShowArticles.html.twig");
    }
}
