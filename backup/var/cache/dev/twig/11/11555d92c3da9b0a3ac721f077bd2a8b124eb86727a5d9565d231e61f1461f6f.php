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

/* @Auth/Default/add_user.html.twig */
class __TwigTemplate_2358911d5e41e73b3a1a70923abedfeeb64fdbcc0535001ede18ed41c9650b9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/add_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/add_user.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Auth/Default/add_user.html.twig", 1);
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

        echo "Gestion Utilisateurs";
        
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

        echo "Debo - Users";
        
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
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card card-user\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Ajouter un ";
        // line 11
        echo twig_escape_filter($this->env, ($context["user_type"] ?? $this->getContext($context, "user_type")), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_user", ["user_type" => ($context["user_type"] ?? $this->getContext($context, "user_type"))]), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>Username</label>
                                        <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>First Name</label>
                                        <input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Nom\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>Last Name</label>
                                        <input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Last Name\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <div class=\"form-group\">
                                        <label>Mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"password\" >
                                    </div>
                                </div>
                                <div class=\"col-md-3\" style=\"margin: auto\">
                                    <button type=\"button\" class=\"btn btn-success\" id=\"genPwd\" style=\"width: 100%\" onclick=\"demo.showPwdNotification('bottom','right')\">Générer mot de passe</button>
                                </div>

                            </div>
                            ";
        // line 55
        if ((($context["user_type"] ?? $this->getContext($context, "user_type")) == "administrateur")) {
            // line 56
            echo "                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label>Roles</label>
                                        <select class=\"form-control\" name=\"role\">
                                            <option value=\"ROLE_DELIVERY_MANAGER\">Livreur</option>
                                            <option value=\"ROLE_WAREHOUSE_MANAGER\">Magasinier</option>
                                            <option value=\"ROLE_SUPER_ADMIN\">Administrateur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                ";
        } else {
            // line 69
            echo "                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            <label>Matricule fiscale</label>
                                            <input type=\"text\" class=\"form-control\" name=\"mat_fiscale\" placeholder=\"matricule fiscale\" >
                                        </div>
                                    </div>
                                </div>

                            ";
        }
        // line 79
        echo "
                            <div class=\"row\">
                                <div class=\"update ml-auto mr-auto\">
                                    <input type=\"submit\" class=\"btn btn-primary btn-round\" value=\"Enregister\"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script>
    function stringGen(len)
    {
        var text = \" \";
        var charset = \"abcdefghijklmnopqrstuvwxyz0123456789\";
        for( var i=0; i < len; i++ )
            text += charset.charAt(Math.floor(Math.random() * charset.length));
        return text;
    }

    \$(function(){
        \$(\"#genPwd\").click(function () {
            \$(\"#password\").val(stringGen(10));
        });
    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Auth/Default/add_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 91,  185 => 79,  173 => 69,  158 => 56,  156 => 55,  112 => 14,  106 => 11,  98 => 5,  89 => 4,  71 => 3,  53 => 2,  31 => 1,);
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
{% block onglet %}Gestion Utilisateurs{% endblock %}
{% block titre %}Debo - Users{% endblock %}
{% block body %}

    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card card-user\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Ajouter un {{ user_type }}</h5>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"{{ path('add_user', {'user_type':user_type}) }}\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>Username</label>
                                        <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>First Name</label>
                                        <input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Nom\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <label>Last Name</label>
                                        <input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Last Name\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <div class=\"form-group\">
                                        <label>Mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"password\" >
                                    </div>
                                </div>
                                <div class=\"col-md-3\" style=\"margin: auto\">
                                    <button type=\"button\" class=\"btn btn-success\" id=\"genPwd\" style=\"width: 100%\" onclick=\"demo.showPwdNotification('bottom','right')\">Générer mot de passe</button>
                                </div>

                            </div>
                            {% if user_type == 'administrateur' %}
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label>Roles</label>
                                        <select class=\"form-control\" name=\"role\">
                                            <option value=\"ROLE_DELIVERY_MANAGER\">Livreur</option>
                                            <option value=\"ROLE_WAREHOUSE_MANAGER\">Magasinier</option>
                                            <option value=\"ROLE_SUPER_ADMIN\">Administrateur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                {% else %}
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            <label>Matricule fiscale</label>
                                            <input type=\"text\" class=\"form-control\" name=\"mat_fiscale\" placeholder=\"matricule fiscale\" >
                                        </div>
                                    </div>
                                </div>

                            {% endif %}

                            <div class=\"row\">
                                <div class=\"update ml-auto mr-auto\">
                                    <input type=\"submit\" class=\"btn btn-primary btn-round\" value=\"Enregister\"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('dashboard/assets/js/core/jquery.min.js') }}\"></script>
<script>
    function stringGen(len)
    {
        var text = \" \";
        var charset = \"abcdefghijklmnopqrstuvwxyz0123456789\";
        for( var i=0; i < len; i++ )
            text += charset.charAt(Math.floor(Math.random() * charset.length));
        return text;
    }

    \$(function(){
        \$(\"#genPwd\").click(function () {
            \$(\"#password\").val(stringGen(10));
        });
    });

</script>
{% endblock %}", "@Auth/Default/add_user.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\AuthBundle\\Resources\\views\\Default\\add_user.html.twig");
    }
}
