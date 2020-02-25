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

/* @Auth/Default/user_credentials.html.twig */
class __TwigTemplate_d5758e2e2f7c7387c23e88a52329e62a847296640c60b3816e5aaa4b35c29a7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/user_credentials.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Auth/Default/user_credentials.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<title></title>
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
</head>

<body>
<br>
<div class=\"container\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/img/logo.png"), "html", null, true);
        echo "\" style=\"width: 95px;height: 100px\">
</div>
<div class=\"container\" style=\"text-align: center\">
    <h1>Accès au compte</h1>
    <h6>Bienvenue au sein de notre equipe</h6>
    <br><br><br><br>
    <p><strong>Nom et prénom: </strong> ";
        // line 18
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["prenom"] ?? $this->getContext($context, "prenom")), "html", null, true);
        echo "</p>
    <p><strong>Nom d'utilisateur: </strong> ";
        // line 19
        echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
        echo "</p>
    <p><strong>Mot de passe: ";
        // line 20
        echo twig_escape_filter($this->env, ($context["pwd"] ?? $this->getContext($context, "pwd")), "html", null, true);
        echo "</strong></p>
    <br><br><br><br>
    <p style=\"font-size: 13px; background-color: #ff9594\">NB: Changer votre mot de passe aprés votre 1ére connexion</p>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Auth/Default/user_credentials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  64 => 19,  58 => 18,  49 => 12,  36 => 1,);
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
<!DOCTYPE html>
<html>
<title></title>
<head>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
</head>

<body>
<br>
<div class=\"container\">
    <img src=\"{{asset('dashboard/assets/img/logo.png')}}\" style=\"width: 95px;height: 100px\">
</div>
<div class=\"container\" style=\"text-align: center\">
    <h1>Accès au compte</h1>
    <h6>Bienvenue au sein de notre equipe</h6>
    <br><br><br><br>
    <p><strong>Nom et prénom: </strong> {{nom}} {{prenom}}</p>
    <p><strong>Nom d'utilisateur: </strong> {{username}}</p>
    <p><strong>Mot de passe: {{pwd}}</strong></p>
    <br><br><br><br>
    <p style=\"font-size: 13px; background-color: #ff9594\">NB: Changer votre mot de passe aprés votre 1ére connexion</p>
</div>
</body>
</html>
", "@Auth/Default/user_credentials.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\AuthBundle\\Resources\\views\\Default\\user_credentials.html.twig");
    }
}
