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

/* @Resources/Magazin/ajouterMagazin.html.twig */
class __TwigTemplate_9da8b52988087595163535012b7cca8aa9e65e1b3104a8298001181c49f0f19c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resources/Magazin/ajouterMagazin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resources/Magazin/ajouterMagazin.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Resources/Magazin/ajouterMagazin.html.twig", 1);
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

        echo "Add Magazin";
        
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
                        <h3 class=\"card-title\">add Magazin:</h3>
                    </div>
                    <div class=\"card-body\">

                        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">

                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-5 pr-1\">
                                                <div class=\"form-group\">
                                                    <label>idMagazzin</label>
                                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_mag", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 px-1\">
                                                <div class=\"form-group\">
                                                    <label>Capacity</label>

                                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacity", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"col-md-4 pl-1\">
                                                <div class=\"form-group\">
                                                    <label for=\"Quantity\">Category</label>
                                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Location</label>
                                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                </div>
                                            </div>
                                        </div>


                                        <div class=\"row\">
                                            <div class=\"update ml-auto mr-auto\">

                                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-round"]]);
        echo "

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 68
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
        return "@Resources/Magazin/ajouterMagazin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  148 => 58,  136 => 49,  125 => 41,  114 => 33,  104 => 26,  91 => 16,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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

{% block title %}Add Magazin{% endblock %}

{% block body %}

    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">add Magazin:</h3>
                    </div>
                    <div class=\"card-body\">

                        {{ form_start(form) }}
                        <div class=\"col-md-12\">
                            <div class=\"card card-user\">

                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-5 pr-1\">
                                                <div class=\"form-group\">
                                                    <label>idMagazzin</label>
                                                    {{ form_widget(form.id_mag, {'attr':{'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-3 px-1\">
                                                <div class=\"form-group\">
                                                    <label>Capacity</label>

                                                    {{ form_widget(form.capacity, {'attr': {'class': 'form-control'}}) }}

                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"col-md-4 pl-1\">
                                                <div class=\"form-group\">
                                                    <label for=\"Quantity\">Category</label>
                                                    {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <label>Location</label>
                                                    {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
                                                </div>
                                            </div>
                                        </div>


                                        <div class=\"row\">
                                            <div class=\"update ml-auto mr-auto\">

                                                {{ form_widget(form.Ajouter, {'attr': {'class': 'btn btn-primary btn-round'}}) }}

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "@Resources/Magazin/ajouterMagazin.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ResourcesBundle\\Resources\\views\\Magazin\\ajouterMagazin.html.twig");
    }
}
