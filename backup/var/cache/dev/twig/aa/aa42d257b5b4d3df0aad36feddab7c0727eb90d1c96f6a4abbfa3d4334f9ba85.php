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

/* @Dashboard/Default/index.html.twig */
class __TwigTemplate_acfbd990af16bcfd62255d3ebfba13ad71a0d98da8892894e24db2f9555460ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'onglet' => [$this, 'block_onglet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "dashboard_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Dashboard/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Dashboard/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard_base.html.twig", "@Dashboard/Default/index.html.twig", 2);
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

        echo "Debo - Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_onglet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        echo "Statistique";
        
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
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-globe text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Produit</p>
                                        <p class=\"card-title\">150GB
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-refresh\"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-money-coins text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Revenue</p>
                                        <p class=\"card-title\">\$ 1,345
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-calendar-o\"></i> Last day
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-vector text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Errors</p>
                                        <p class=\"card-title\">23
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-clock-o\"></i> In the last hour
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-favourite-28 text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Followers</p>
                                        <p class=\"card-title\">+45K
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-refresh\"></i> Update now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card \">
                        <div class=\"card-header \">
                            <h5 class=\"card-title\">Users Behavior</h5>
                            <p class=\"card-category\">24 Hours performance</p>
                        </div>
                        <div class=\"card-body \">
                            <canvas id=chartHours width=\"400\" height=\"100\"></canvas>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card \">
                        <div class=\"card-header \">
                            <h5 class=\"card-title\">Email Statistics</h5>
                            <p class=\"card-category\">Last Campaign Performance</p>
                        </div>
                        <div class=\"card-body \">
                            <canvas id=\"chartEmail\"></canvas>
                        </div>
                        <div class=\"card-footer \">
                            <div class=\"legend\">
                                <i class=\"fa fa-circle text-primary\"></i> Opened
                                <i class=\"fa fa-circle text-warning\"></i> Read
                                <i class=\"fa fa-circle text-danger\"></i> Deleted
                                <i class=\"fa fa-circle text-gray\"></i> Unopened
                            </div>
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-calendar\"></i> Number of emails sent
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card card-chart\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">NASDAQ: AAPL</h5>
                            <p class=\"card-category\">Line Chart with Points</p>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"speedChart\" width=\"400\" height=\"100\"></canvas>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"chart-legend\">
                                <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                            </div>
                            <hr/>
                            <div class=\"card-stats\">
                                <i class=\"fa fa-check\"></i> Data information certified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"footer footer-black  footer-white \">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <nav class=\"footer-nav\">
                        <ul>
                            <li>
                                <a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com/\" target=\"_blank\">Blog</a>
                            </li>
                            <li>
                                <a href=\"https://www.creative-tim.com/license\" target=\"_blank\">Licenses</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"credits ml-auto\">
              <span class=\"copyright\">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class=\"fa fa-heart heart\"></i> by Creative Tim
              </span>
                    </div>
                </div>
            </div>
        </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 6,  89 => 5,  71 => 4,  53 => 3,  31 => 2,);
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
{% extends 'dashboard_base.html.twig' %}
{% block title %}Debo - Dashboard{% endblock %}
{% block onglet %}Statistique{% endblock %}
{% block body %}




        <div class=\"content\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-globe text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Produit</p>
                                        <p class=\"card-title\">150GB
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-refresh\"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-money-coins text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Revenue</p>
                                        <p class=\"card-title\">\$ 1,345
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-calendar-o\"></i> Last day
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-vector text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Errors</p>
                                        <p class=\"card-title\">23
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-clock-o\"></i> In the last hour
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card card-stats\">
                        <div class=\"card-body \">
                            <div class=\"row\">
                                <div class=\"col-5 col-md-4\">
                                    <div class=\"icon-big text-center icon-warning\">
                                        <i class=\"nc-icon nc-favourite-28 text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"col-7 col-md-8\">
                                    <div class=\"numbers\">
                                        <p class=\"card-category\">Followers</p>
                                        <p class=\"card-title\">+45K
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-refresh\"></i> Update now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card \">
                        <div class=\"card-header \">
                            <h5 class=\"card-title\">Users Behavior</h5>
                            <p class=\"card-category\">24 Hours performance</p>
                        </div>
                        <div class=\"card-body \">
                            <canvas id=chartHours width=\"400\" height=\"100\"></canvas>
                        </div>
                        <div class=\"card-footer \">
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card \">
                        <div class=\"card-header \">
                            <h5 class=\"card-title\">Email Statistics</h5>
                            <p class=\"card-category\">Last Campaign Performance</p>
                        </div>
                        <div class=\"card-body \">
                            <canvas id=\"chartEmail\"></canvas>
                        </div>
                        <div class=\"card-footer \">
                            <div class=\"legend\">
                                <i class=\"fa fa-circle text-primary\"></i> Opened
                                <i class=\"fa fa-circle text-warning\"></i> Read
                                <i class=\"fa fa-circle text-danger\"></i> Deleted
                                <i class=\"fa fa-circle text-gray\"></i> Unopened
                            </div>
                            <hr>
                            <div class=\"stats\">
                                <i class=\"fa fa-calendar\"></i> Number of emails sent
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card card-chart\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">NASDAQ: AAPL</h5>
                            <p class=\"card-category\">Line Chart with Points</p>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"speedChart\" width=\"400\" height=\"100\"></canvas>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"chart-legend\">
                                <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                            </div>
                            <hr/>
                            <div class=\"card-stats\">
                                <i class=\"fa fa-check\"></i> Data information certified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"footer footer-black  footer-white \">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <nav class=\"footer-nav\">
                        <ul>
                            <li>
                                <a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com/\" target=\"_blank\">Blog</a>
                            </li>
                            <li>
                                <a href=\"https://www.creative-tim.com/license\" target=\"_blank\">Licenses</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"credits ml-auto\">
              <span class=\"copyright\">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class=\"fa fa-heart heart\"></i> by Creative Tim
              </span>
                    </div>
                </div>
            </div>
        </footer>
{% endblock %}", "@Dashboard/Default/index.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\DashboardBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
