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

/* dashboard_base.html.twig */
class __TwigTemplate_fc9e967552abae0663c5cddd22447893b73a7223e9896c914311900859de12af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'onglet' => [$this, 'block_onglet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/img/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- CSS Files -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>

<body class=\"\">
<div class=\"wrapper \">
    <div class=\"sidebar\" data-color=\"white\" data-active-color=\"danger\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red | yellow\"
      -->
        <div class=\"logo\">
            <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_homepage");
        echo "\" class=\"simple-text logo-mini\">
                <div class=\"logo-image-small\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/img/logo.png"), "html", null, true);
        echo "\">
                </div>
            </a>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_homepage");
        echo "\" class=\"simple-text logo-normal\">
                Debo - Dashboard
                <!-- <div class=\"logo-image-big\">
                  <img src=\"../assets/img/logo-big.png\">
                </div> -->
            </a>
        </div>
        <div class=\"sidebar-wrapper\">
            <ul class=\"nav\">
                <li class=\"active \">
                    <a href=\"./dashboard.html\">
                        <i class=\"nc-icon nc-bank\"></i>
                        <p>Stock</p>
                    </a>
                </li>
                <li>
                    <a href=\"./icons.html\">
                        <i class=\"nc-icon nc-basket\"></i>
                        <p>Commandes</p>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_livraison");
        echo "\">
                        <i class=\"nc-icon nc-delivery-fast\"></i>
                        <p>Livraison</p>
                    </a>
                </li>
                <li>
                    <a href=\"./notifications.html\">
                        <i class=\"nc-icon nc-shop\"></i>
                        <p>Resources</p>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flux_home");
        echo "\">
                        <i class=\"nc-icon nc-money-coins\"></i>
                        <p>Flux</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"nc-icon nc-paper\"></i>
                        <p>Appel d'offres</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"nc-icon nc-chart-pie-36\"></i>
                        <p>Statistique</p>
                    </a>
                </li>

                <li>
                    <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
        echo "\">
                        <i class=\"nc-icon nc-circle-10\"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent\">
            <div class=\"container-fluid\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-toggle\">
                        <button type=\"button\" class=\"navbar-toggler\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </button>
                    </div>
                    <a class=\"navbar-brand\" href=\"#pablo\">";
        // line 113
        $this->displayBlock('onglet', $context, $blocks);
        echo "</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <form>
                        <div class=\"input-group no-border\">
                            <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">
                                    <i class=\"nc-icon nc-zoom-split\"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class=\"navbar-nav\" >
                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-magnify\" href=\"#pablo\">
                                <i class=\"nc-icon nc-layout-11\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class=\"nav-item btn-rotate dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"nc-icon nc-bell-55\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Some Actions</span>
                                </p>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-rotate\" href=\"#pablo\">
                                <i class=\"nc-icon nc-settings-gear-65\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Account</span>
                                </p>
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-rotate\" href=\"#pablo\">
                                <i class=\"nc-icon nc-single-02\"></i>
                                <p style=\"text-transform: lowercase\">
                                    Connecté tant que ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "
                                </p>
                            </a>
                        </li>


                    </ul>
                    <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-danger btn-round\">Logout</button>
                    </a>
                </div>
            </div>
        </nav>

        ";
        // line 180
        $this->displayBlock('body', $context, $blocks);
        // line 181
        echo "    </div>
</div>

<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/plugins/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/js/paper-dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/assets/demo/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function() {
                demo.initChartsPages();
            });
        </script>
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_onglet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "onglet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 180,  347 => 113,  330 => 12,  309 => 194,  304 => 192,  300 => 191,  296 => 190,  292 => 189,  287 => 187,  283 => 186,  279 => 185,  275 => 184,  270 => 181,  268 => 180,  258 => 173,  248 => 166,  192 => 113,  166 => 90,  144 => 71,  129 => 59,  104 => 37,  98 => 34,  93 => 32,  80 => 22,  75 => 20,  71 => 19,  63 => 13,  61 => 12,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('dashboard/assets/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('dashboard/assets/img/favicon.png') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        {% block title %}{% endblock %}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- CSS Files -->
    <link href=\"{{ asset('dashboard/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('dashboard/assets/css/paper-dashboard.css') }}\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"{{ asset('dashboard/assets/demo/demo.css') }}\" rel=\"stylesheet\" />
</head>

<body class=\"\">
<div class=\"wrapper \">
    <div class=\"sidebar\" data-color=\"white\" data-active-color=\"danger\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red | yellow\"
      -->
        <div class=\"logo\">
            <a href=\"{{ path('dashboard_homepage') }}\" class=\"simple-text logo-mini\">
                <div class=\"logo-image-small\">
                    <img src=\"{{ asset('dashboard/assets/img/logo.png') }}\">
                </div>
            </a>
            <a href=\"{{ path('dashboard_homepage') }}\" class=\"simple-text logo-normal\">
                Debo - Dashboard
                <!-- <div class=\"logo-image-big\">
                  <img src=\"../assets/img/logo-big.png\">
                </div> -->
            </a>
        </div>
        <div class=\"sidebar-wrapper\">
            <ul class=\"nav\">
                <li class=\"active \">
                    <a href=\"./dashboard.html\">
                        <i class=\"nc-icon nc-bank\"></i>
                        <p>Stock</p>
                    </a>
                </li>
                <li>
                    <a href=\"./icons.html\">
                        <i class=\"nc-icon nc-basket\"></i>
                        <p>Commandes</p>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('liste_livraison') }}\">
                        <i class=\"nc-icon nc-delivery-fast\"></i>
                        <p>Livraison</p>
                    </a>
                </li>
                <li>
                    <a href=\"./notifications.html\">
                        <i class=\"nc-icon nc-shop\"></i>
                        <p>Resources</p>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path ('flux_home') }}\">
                        <i class=\"nc-icon nc-money-coins\"></i>
                        <p>Flux</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"nc-icon nc-paper\"></i>
                        <p>Appel d'offres</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"nc-icon nc-chart-pie-36\"></i>
                        <p>Statistique</p>
                    </a>
                </li>

                <li>
                    <a href=\"{{ path('users_list') }}\">
                        <i class=\"nc-icon nc-circle-10\"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent\">
            <div class=\"container-fluid\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-toggle\">
                        <button type=\"button\" class=\"navbar-toggler\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </button>
                    </div>
                    <a class=\"navbar-brand\" href=\"#pablo\">{% block onglet %}{% endblock %}</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <form>
                        <div class=\"input-group no-border\">
                            <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">
                                    <i class=\"nc-icon nc-zoom-split\"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class=\"navbar-nav\" >
                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-magnify\" href=\"#pablo\">
                                <i class=\"nc-icon nc-layout-11\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class=\"nav-item btn-rotate dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"nc-icon nc-bell-55\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Some Actions</span>
                                </p>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-rotate\" href=\"#pablo\">
                                <i class=\"nc-icon nc-settings-gear-65\"></i>
                                <p>
                                    <span class=\"d-lg-none d-md-block\">Account</span>
                                </p>
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link btn-rotate\" href=\"#pablo\">
                                <i class=\"nc-icon nc-single-02\"></i>
                                <p style=\"text-transform: lowercase\">
                                    Connecté tant que {{ app.user.username }}
                                </p>
                            </a>
                        </li>


                    </ul>
                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        <button type=\"submit\" class=\"btn btn-danger btn-round\">Logout</button>
                    </a>
                </div>
            </div>
        </nav>

        {% block body %}{% endblock %}
    </div>
</div>

<script src=\"{{ asset('dashboard/assets/js/core/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('dashboard/assets/js/core/popper.min.js') }}\"></script>
        <script src=\"{{ asset('dashboard/assets/js/core/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
        <script src=\"{{ asset('dashboard/assets/js/plugins/chartjs.min.js') }}\"></script>
        <script src=\"{{ asset('dashboard/assets/js/plugins/bootstrap-notify.js') }}\"></script>
        <script src=\"{{ asset('dashboard/assets/js/paper-dashboard.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('dashboard/assets/demo/demo.js') }}\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
<script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>
        <script>
            \$(document).ready(function() {
                demo.initChartsPages();
            });
        </script>
</body>

</html>

", "dashboard_base.html.twig", "C:\\xampp\\htdocs\\debo-pi\\app\\Resources\\views\\dashboard_base.html.twig");
    }
}
