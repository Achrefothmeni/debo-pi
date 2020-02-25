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

/* @Article/Article/EditArticle.html.twig */
class __TwigTemplate_bc0a9eb6bd58cb39903e754b224cbcc063ea7a7deec4d1963b2847f41931417e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/EditArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/Article/EditArticle.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Article/Article/EditArticle.html.twig", 1);
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

        echo "Add article";
        
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
        echo "
<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Create an Article:</h3>
                </div>
                <div class=\"card-body\">
                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">

                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-5 pr-1\">
                                                <div class=\"form-group\">
                                                    <label>Name</label>
                                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 px-1\">
                                                <div class=\"form-group\">
                                                    <label>Price</label>
                                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "price", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 pl-1\">
                                                <div class=\"form-group\">
                                                    <label for=\"Quantity\">Quantity</label>
                                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Label</label>
                                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                        </div>


                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Description</label>
                                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>

                                        <div class=\"row\">
                                            <div class=\"update ml-auto mr-auto\" style=\"position: absolute;right: 40px;bottom: 12px;\">

                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-round"]]);
        echo "

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "@Article/Article/EditArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 70,  155 => 62,  145 => 55,  132 => 45,  121 => 37,  112 => 31,  103 => 25,  90 => 15,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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

{% block title %}Add article{% endblock %}

{% block body %}

<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Create an Article:</h3>
                </div>
                <div class=\"card-body\">
                        {{ form_start(form)}}
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">

                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-5 pr-1\">
                                                <div class=\"form-group\">
                                                    <label>Name</label>
                                                    {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 px-1\">
                                                <div class=\"form-group\">
                                                    <label>Price</label>
                                                    {{ form_widget(form.price, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 pl-1\">
                                                <div class=\"form-group\">
                                                    <label for=\"Quantity\">Quantity</label>
                                                    {{ form_widget(form.quantity, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Label</label>
                                                    {{ form_widget(form.label, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>


                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Description</label>
                                                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>

                                        <div class=\"row\">
                                            <div class=\"update ml-auto mr-auto\" style=\"position: absolute;right: 40px;bottom: 12px;\">

                                                {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary btn-round'}}) }}

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        {{ form_end(form) }}
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "@Article/Article/EditArticle.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\Article\\EditArticle.html.twig");
    }
}
