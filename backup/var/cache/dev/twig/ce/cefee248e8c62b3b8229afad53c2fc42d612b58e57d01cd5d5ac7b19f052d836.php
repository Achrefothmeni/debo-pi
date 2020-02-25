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

/* @Flux/Default/afficherfacture.html.twig */
class __TwigTemplate_8e53185491eb194be6fc83d5453625d91b35c33c768bdaca31d44ef6b185b34b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/afficherfacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Flux/Default/afficherfacture.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                            <img src=\"http://via.placeholder.com/400x90?text=logo\">
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-1\">Reference Commande</p>
                            <p class=\"text-muted\">date</p>
                        </div>
                    </div>

                    <hr class=\"my-5\">

                    <div class=\"row pb-5 p-5\">
                        <div class=\"col-md-6\">
                            <p class=\"font-weight-bold mb-4\">Informations Client</p>
                            <p class=\"mb-1\">first name, last name</p>
                            <p class=\"mb-1\">Email address</p>
                            <p class=\"mb-1\">matricule fiscale </p>
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-4\">Details de paiement</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT: </span> 1425782</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT ID: </span> 10253642</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Payment Type: </span> Root</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class=\"row p-5\">
                        <div class=\"col-md-12\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">ID</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Article</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Description</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Quantité</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Prix unitaire</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Prix Total</th>
                                </tr>
                                </thead>


                                <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lignecommandes"] ?? $this->getContext($context, "lignecommandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["lignecommande"]) {
            // line 58
            echo "                                    <tr>
                                        <td>

                                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["lignecommande"], "id", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 64
            (($this->getAttribute($context["lignecommande"], "article", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lignecommande"], "article", []), "name", []), "html", null, true))) : (print ("")));
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 67
            (($this->getAttribute($context["lignecommande"], "article", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lignecommande"], "article", []), "description", []), "html", null, true))) : (print ("")));
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["lignecommande"], "qte", []), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 73
            (($this->getAttribute($context["lignecommande"], "article", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lignecommande"], "article", []), "prix", []), "html", null, true))) : (print ("")));
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 76
            (($this->getAttribute($context["lignecommande"], "article", [])) ? (print (twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["lignecommande"], "article", []), "prix", []) * $this->getAttribute($context["lignecommande"], "qte", [])), "html", null, true))) : (print ("")));
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lignecommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class=\"d-flex flex-row-reverse bg-dark text-white p-4\">
                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Grand Total</div>
                            <div class=\"h2 font-weight-light\">\$234,234</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Discount</div>
                            <div class=\"h2 font-weight-light\">10%</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Sub - Total amount</div>
                            <div class=\"h2 font-weight-light\">\$32,432</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-light mt-5 mb-5 text-center small\">by : <a class=\"text-light\" target=\"_blank\" href=\"http://totoprayogo.com\">totoprayogo.com</a></div>

</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Flux/Default/afficherfacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 80,  141 => 76,  135 => 73,  129 => 70,  123 => 67,  117 => 64,  111 => 61,  106 => 58,  102 => 57,  45 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('dashboard/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"{{ asset('dashboard/assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('dashboard/assets/js/core/jquery.min.js') }}\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                            <img src=\"http://via.placeholder.com/400x90?text=logo\">
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-1\">Reference Commande</p>
                            <p class=\"text-muted\">date</p>
                        </div>
                    </div>

                    <hr class=\"my-5\">

                    <div class=\"row pb-5 p-5\">
                        <div class=\"col-md-6\">
                            <p class=\"font-weight-bold mb-4\">Informations Client</p>
                            <p class=\"mb-1\">first name, last name</p>
                            <p class=\"mb-1\">Email address</p>
                            <p class=\"mb-1\">matricule fiscale </p>
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-4\">Details de paiement</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT: </span> 1425782</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT ID: </span> 10253642</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Payment Type: </span> Root</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class=\"row p-5\">
                        <div class=\"col-md-12\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">ID</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Article</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Description</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Quantité</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Prix unitaire</th>
                                    <th class=\"border-0 text-uppercase small font-weight-bold\">Prix Total</th>
                                </tr>
                                </thead>


                                <tbody>
                                {% for lignecommande in lignecommandes%}
                                    <tr>
                                        <td>

                                            {{lignecommande.id}}
                                        </td>
                                        <td>
                                            {{lignecommande.article ? lignecommande.article.name}}
                                        </td>
                                        <td>
                                            {{lignecommande.article ? lignecommande.article.description}}
                                        </td>
                                        <td>
                                            {{lignecommande.qte}}
                                        </td>
                                        <td>
                                            {{lignecommande.article ? lignecommande.article.prix}}
                                        </td>
                                        <td>
                                            {{lignecommande.article ? lignecommande.article.prix * lignecommande.qte}}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class=\"d-flex flex-row-reverse bg-dark text-white p-4\">
                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Grand Total</div>
                            <div class=\"h2 font-weight-light\">\$234,234</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Discount</div>
                            <div class=\"h2 font-weight-light\">10%</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Sub - Total amount</div>
                            <div class=\"h2 font-weight-light\">\$32,432</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-light mt-5 mb-5 text-center small\">by : <a class=\"text-light\" target=\"_blank\" href=\"http://totoprayogo.com\">totoprayogo.com</a></div>

</div>


", "@Flux/Default/afficherfacture.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FluxBundle\\Resources\\views\\Default\\afficherfacture.html.twig");
    }
}
