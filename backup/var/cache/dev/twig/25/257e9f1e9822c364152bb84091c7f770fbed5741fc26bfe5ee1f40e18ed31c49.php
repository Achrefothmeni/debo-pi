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

/* @Front/Default/about.html.twig */
class __TwigTemplate_82a459d049505882a40011dcdedbeb42a9af0e1cb06ecea6725ddbc01863a3c7 extends \Twig\Template
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
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/about.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/about.html.twig", 1);
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

        echo "Debo - About us";
        
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
        echo "<section id=\"page-content\" class=\"page-wrapper\">

    <!-- ABOUT SECTION START -->
    <div class=\"about-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left \">
                        <h2 class=\"uppercase\">about subas</h2>
                        <h6 class=\"mb-40\">There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <div class=\"about-photo p-20 bg-img-1\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/others/about.jpg"), "html", null, true);
        echo "\" alt=\"\">

                    </div>
                </div>
                <div class=\"col-md-7\">
                    <div class=\"about-description mt-50\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo
                            et dolore magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia is be deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium doloremque laudantium,</p>

                        <p>totam remes aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- TEAM SECTION START -->
    <div class=\"team-section mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left \">
                        <h2 class=\"uppercase\">team member</h2>
                        <h6 class=\"mb-40\">There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-team-member\">
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/team/1.png"), "html", null, true);
        echo "\" alt=\"\">

                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/team/2.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/team/3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/team/1.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/team/2.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM SECTION END -->
</section>
<!-- End page content -->

<!-- START FOOTER AREA -->
<footer id=\"footer\" class=\"footer-area\">
    <div class=\"footer-top\">
        <div class=\"container-fluid\">
            <div class=\"plr-185\">
                <div class=\"footer-top-inner gray-bg\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-5 col-sm-4\">
                            <div class=\"single-footer footer-about\">
                                <div class=\"footer-logo\">
                                    <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/logo/logoo.png"), "html", null, true);
        echo "\"alt=\"\">
                                </div>
                                <div class=\"footer-brief\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the subas industry's standard dummy text ever since the 1500s,</p>
                                    <p>When an unknown printer took a galley of type and If you are going to use a passage of Lorem Ipsum scrambled it to make.</p>
                                </div>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 hidden-md hidden-sm\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">Shipping</h4>
                                <ul class=\"footer-menu\">
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>New Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Discount Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Best Sell Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Popular Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Manufactirers</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Suppliers</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Special Products</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-md-3 col-sm-4\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">my account</h4>
                                <ul class=\"footer-menu\">
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Account</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Wishlist</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Cart</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Sign In</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Registration</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Check out</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Oder Complete</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">Get in touch</h4>
                                <div class=\"footer-message\">
                                    <form action=\"#\">
                                        <input type=\"text\" name=\"name\" placeholder=\"Your name here...\">
                                        <input type=\"text\" name=\"email\" placeholder=\"Your email here...\">
                                        <textarea class=\"height-80\" name=\"message\" placeholder=\"Your messege here...\"></textarea>
                                        <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\">submit message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom black-bg\">
        <div class=\"container-fluid\">
            <div class=\"plr-185\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"copyright-text\">
                                <p>&copy; <a href=\"https://freethemescloud.com/\" target=\"_blank\">Free themes Cloud</a> 2016. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-xs-12\">
                            <ul class=\"footer-payment text-right\">
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
        return "@Front/Default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 330,  431 => 327,  425 => 324,  418 => 320,  306 => 211,  261 => 169,  230 => 141,  199 => 113,  168 => 85,  136 => 56,  97 => 20,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homepage.html.twig' %}
{% block title %}Debo - About us{% endblock %}
{% block body %}
<section id=\"page-content\" class=\"page-wrapper\">

    <!-- ABOUT SECTION START -->
    <div class=\"about-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left \">
                        <h2 class=\"uppercase\">about subas</h2>
                        <h6 class=\"mb-40\">There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-5\">
                    <div class=\"about-photo p-20 bg-img-1\">
                        <img src=\"{{ asset('front/assets/img/others/about.jpg') }}\" alt=\"\">

                    </div>
                </div>
                <div class=\"col-md-7\">
                    <div class=\"about-description mt-50\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo
                            et dolore magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia is be deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium doloremque laudantium,</p>

                        <p>totam remes aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- TEAM SECTION START -->
    <div class=\"team-section mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left \">
                        <h2 class=\"uppercase\">team member</h2>
                        <h6 class=\"mb-40\">There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-team-member\">
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"{{ asset('front/assets/img/team/1.png') }}\" alt=\"\">

                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"{{ asset('front/assets/img/team/2.png') }}\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"{{ asset('front/assets/img/team/3.png') }}\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"{{ asset('front/assets/img/team/1.png') }}\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                    <!-- team-member start -->
                    <div class=\"col-md-12\">
                        <div class=\"team-member box-shadow bg-shape\">
                            <div class=\"team-member-photo\">
                                <img src=\"{{ asset('front/assets/img/team/2.png') }}\" alt=\"\">
                            </div>
                            <div class=\"team-member-info pt-20\">
                                <h5 class=\"member-name\"><a href=\"#\">Nancy holland</a></h5>
                                <p class=\"member-position\">Chairman</p>
                                <p class=\"mb-20\">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- team-member end -->
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM SECTION END -->
</section>
<!-- End page content -->

<!-- START FOOTER AREA -->
<footer id=\"footer\" class=\"footer-area\">
    <div class=\"footer-top\">
        <div class=\"container-fluid\">
            <div class=\"plr-185\">
                <div class=\"footer-top-inner gray-bg\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-5 col-sm-4\">
                            <div class=\"single-footer footer-about\">
                                <div class=\"footer-logo\">
                                    <img src=\"{{ asset('front/assets/logo/logoo.png') }}\"alt=\"\">
                                </div>
                                <div class=\"footer-brief\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the subas industry's standard dummy text ever since the 1500s,</p>
                                    <p>When an unknown printer took a galley of type and If you are going to use a passage of Lorem Ipsum scrambled it to make.</p>
                                </div>
                                <ul class=\"footer-social\">
                                    <li>
                                        <a class=\"facebook\" href=\"\" title=\"Facebook\"><i class=\"zmdi zmdi-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"google-plus\" href=\"\" title=\"Google Plus\"><i class=\"zmdi zmdi-google-plus\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"twitter\" href=\"\" title=\"Twitter\"><i class=\"zmdi zmdi-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a class=\"rss\" href=\"\" title=\"RSS\"><i class=\"zmdi zmdi-rss\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 hidden-md hidden-sm\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">Shipping</h4>
                                <ul class=\"footer-menu\">
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>New Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Discount Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Best Sell Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Popular Products</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Manufactirers</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Suppliers</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Special Products</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-md-3 col-sm-4\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">my account</h4>
                                <ul class=\"footer-menu\">
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Account</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Wishlist</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>My Cart</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Sign In</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Registration</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Check out</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"zmdi zmdi-circle\"></i><span>Oder Complete</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                            <div class=\"single-footer\">
                                <h4 class=\"footer-title border-left\">Get in touch</h4>
                                <div class=\"footer-message\">
                                    <form action=\"#\">
                                        <input type=\"text\" name=\"name\" placeholder=\"Your name here...\">
                                        <input type=\"text\" name=\"email\" placeholder=\"Your email here...\">
                                        <textarea class=\"height-80\" name=\"message\" placeholder=\"Your messege here...\"></textarea>
                                        <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\">submit message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom black-bg\">
        <div class=\"container-fluid\">
            <div class=\"plr-185\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"copyright-text\">
                                <p>&copy; <a href=\"https://freethemescloud.com/\" target=\"_blank\">Free themes Cloud</a> 2016. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-xs-12\">
                            <ul class=\"footer-payment text-right\">
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/1.jpg') }}\" alt=\"\"></a>

                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/2.jpg') }}\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/3.jpg') }}\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/4.jpg') }}\" alt=\"\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{% endblock %}", "@Front/Default/about.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\about.html.twig");
    }
}
