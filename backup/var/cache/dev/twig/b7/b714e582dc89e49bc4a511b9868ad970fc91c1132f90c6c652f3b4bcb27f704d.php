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

/* @Commande/pannier/panier.html.twig */
class __TwigTemplate_d69680e97da3faca6e514f0f1821d90d0f58ed59b27b674a71a2b6ea97fef0de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Commande/pannier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Commande/pannier/panier.html.twig"));

        // line 1
        echo "<table>
    <thead>
    <tr>
        <th>nom</th>
        <th>prix</th>
        <th>Quantité</th>


    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandelignes"] ?? $this->getContext($context, "commandelignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commandeligne"]) {
            // line 13
            echo "        <tr>


            <td>";
            // line 16
            (($this->getAttribute(($context["commandelignes"] ?? $this->getContext($context, "commandelignes")), "article", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commandelignes"] ?? $this->getContext($context, "commandelignes")), "article", []), "nom", []), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 17
            (($this->getAttribute(($context["commandelignes"] ?? $this->getContext($context, "commandelignes")), "article", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commandelignes"] ?? $this->getContext($context, "commandelignes")), "article", []), "prix", []), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["commandeligne"], "qte", []), "html", null, true);
            echo "</td>



        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandeligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Commande/pannier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  66 => 18,  62 => 17,  58 => 16,  53 => 13,  49 => 12,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <thead>
    <tr>
        <th>nom</th>
        <th>prix</th>
        <th>Quantité</th>


    </tr>
    </thead>
    <tbody>
    {% for commandeligne in commandelignes %}
        <tr>


            <td>{{ commandelignes.article ? commandelignes.article.nom  }}</td>
            <td>{{ commandelignes.article ? commandelignes.article.prix }}</td>
            <td>{{ commandeligne.qte }}</td>



        </tr>
    {% endfor %}
    </tbody>
</table>", "@Commande/pannier/panier.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\CommandeBundle\\Resources\\views\\pannier\\panier.html.twig");
    }
}
