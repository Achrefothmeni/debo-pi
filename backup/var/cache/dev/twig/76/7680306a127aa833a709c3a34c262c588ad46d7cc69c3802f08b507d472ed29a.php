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

/* homepage.html.twig */
class __TwigTemplate_a02cbcaa8247b16f28baee28eedbc270d72c4cc135d6c26a3b8590dfcd882b8f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/icon/favicon.png"), "html", null, true);
        echo "\">
    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Nivo-slider css -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/lib/css/nivo-slider.css"), "html", null, true);
        echo "\">
    <!-- This core.css file contents all plugings css file. -->
    <link rel=\"stylesheet\" href= \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/core.css"), "html", null, true);
        echo "\">

    <!-- Theme shortcodes/elements style -->

    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/shortcode/shortcodes.css"), "html", null, true);
        echo "\">
    <!-- Theme main style -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- Responsive css -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/responsive.css"), "html", null, true);
        echo "\">
    <!-- Template color css -->
    <link href= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/color/color-core.css"), "html", null, true);
        echo "\" data-style=\"styles\" rel=\"stylesheet\">
    <!-- User style -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/custom.css"), "html", null, true);
        echo "\">

    <!-- Modernizr JS -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class=\"wrapper\">

    <!-- START HEADER AREA -->
    <header class=\"header-area header-wrapper\">
        <!-- header-top-bar -->
        <div class=\"header-top-bar plr-185\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-6 hidden-xs\">
                        <div class=\"call-us\">
                            <p class=\"mb-0 roboto\">(+88) 01234-567890</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xs-12\">
                        <div class=\"top-link clearfix\">
                            <ul class=\"link f-right\">
                                <li>
                                    <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account");
        echo "\">
                                        <i class=\"zmdi zmdi-account\"></i>
                                        My Account
                                    </a>
                                </li>

                                <li>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                                        <i class=\"zmdi zmdi-lock\"></i>
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id=\"sticky-header\" class=\"header-middle-area plr-185\" style=\"box-shadow: 0 12px 19px -10px rgba(0,0,0,.25);
           margin-bottom: 50px; background: #efecec;\" >
            <div class=\"container-fluid\">
                <div class=\"full-width-mega-dropdown\">
                    <div class=\"row\">
                        <!-- logo -->
                        <div class=\"col-md-2 col-sm-6 col-xs-12\">
                            <div class=\"logo\">
                                <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\">
                                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"main logo\" style=\"height: 50px; width: 75px; position:absolute; bottom:-5px ;left: 100px;\">

                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class=\"col-md-8 hidden-sm hidden-xs\">
                            <nav id=\"primary-menu\">
                                <ul class=\"main-menu text-center\">
                                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\">Home</a></li>
                                    <li class=\"mega-parent\"><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">Products</a>
                                        <div class=\"mega-menu-area clearfix\">
                                            <div class=\"mega-menu-link f-left\">
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Smart Phone</li>
                                                    <li>
                                                        <a href=\"#\">All Mobile Phones</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Smart phones</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Android Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Windows Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Refurbished Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">All Mobile Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Note Book</li>
                                                    <li>
                                                        <a href=\"\">All Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Smart notebooks</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Android Note Book</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Windows Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Refurbished Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Note Books Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Tablets</li>
                                                    <li>
                                                        <a href=\"\">All Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Smart tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Android Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Windows Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Refurbished Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Tablets Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"mega-menu-photo f-left\">
                                                <a href=\"#\">
                                                    <img src=\"img/mega-menu/1.jpg\" alt=\"mega menu image\">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mega-parent\"><a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order");
        echo "\">Order</a>


                                    <li>
                                        <a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About us</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class=\"col-md-2 col-sm-6 col-xs-12\">
                            <div class=\"search-top-cart  f-right\">
                                <!-- header-search -->
                                <div class=\"header-search f-left\">
                                    <div class=\"header-search-inner\">
                                        <button class=\"search-toggle\">
                                            <i class=\"zmdi zmdi-search\"></i>
                                        </button>
                                        <form action=\"#\">
                                            <div class=\"top-search-box\">
                                                <input type=\"text\" placeholder=\"Search here your product...\">
                                                <button type=\"submit\">
                                                    <i class=\"zmdi zmdi-search\"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"header-search f-left\" style=\"position: absolute; left: 200px; top: 15px;\">
                                    <div class=\"cart-toggler\">

                                        <li>
                                            <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wishlist");
        echo "\">
                                                <i class=\"zmdi zmdi-favorite\"></i>

                                            </a>
                                        </li>
                                    </div>
                                </div>
                                <!-- total-cart -->
                                <div class=\"total-cart f-left\">
                                    <div class=\"total-cart-in\">
                                        <div class=\"cart-toggler\">
                                            <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">
                                                <span class=\"cart-quantity\">02</span><br>
                                                <span class=\"cart-icon\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class=\"top-cart-inner your-cart\">
                                                    <h5 class=\"text-capitalize\">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"total-cart-pro\">
                                                    <!-- single-cart
                                                    <div class=\"single-cart clearfix\">
                                                        <div class=\"cart-img f-left\">
                                                            <a href=\"#\">
                                                                <img src=\"img/cart/1.jpg\" alt=\"Cart Product\" />
                                                            </a>
                                                            <div class=\"del-icon\">
                                                                <a href=\"#\">
                                                                    <i class=\"zmdi zmdi-close\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"cart-info f-left\">
                                                            <h6 class=\"text-capitalize\">
                                                                <a href=\"#\">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                  single-cart -->
                                                    <div class=\"single-cart clearfix\">
                                                        <div class=\"cart-img f-left\">
                                                            <a href=\"#\">
                                                                <img src=\"img/cart/1.jpg\" alt=\"Cart Product\" />
                                                            </a>
                                                            <div class=\"del-icon\">
                                                                <a href=\"#\">
                                                                    <i class=\"zmdi zmdi-close\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class=\"cart-info f-left\">
                                                             <h6 class=\"text-capitalize\">
                                                                 <a href=\"#\">Dummy Product Name</a>
                                                             </h6>
                                                             <p>
                                                                 <span>Brand <strong>:</strong></span>Brand Name
                                                             </p>
                                                             <p>
                                                                 <span>Model <strong>:</strong></span>Grand s2
                                                             </p>
                                                             <p>
                                                                 <span>Color <strong>:</strong></span>Black, White
                                                             </p>
                                                         </div>-->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner subtotal\">
                                                    <h4 class=\"text-uppercase g-font-2\">
                                                        <!--Total  =
                                                         <span>\$ 500.00</span>-->
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner view-cart\">
                                                    <h4 class=\"text-uppercase\">
                                                        <a href=\"#\">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner check-out\">
                                                    <h4 class=\"text-uppercase\">
                                                        <a href=\"#\">Check out</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class=\"mobile-menu-area hidden-lg hidden-md\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"mobile-menu\">
                        <nav id=\"dropdown\">
                            <ul>
                                <li><a href=\"";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\">Home</a></li>
                                <li>
                                    <a href=\"";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">Products</a>
                                </li>
                                <li><a href=\"#\">Pages</a>
                                    <ul>
                                        <li>
                                            <a href=\"shop.html\">Shop</a>
                                        <li>
                                            <a href=\"single-product.html\">Single Product</a>
                                        </li>
                                        <li>
                                            <a href=\"cart.html\">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href=\"wishlist.html\">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href=\"checkout.html\">Checkout</a>
                                        </li>
                                        <li>
                                            <a href=\"order.html\">Order</a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\">Login</a>
                                        </li>
                                        <li>
                                            <a href=\"My-account.html\">My Account</a>
                                        </li>
                                        <li>
                                            <a href=\"about.html\">About us</a>
                                        </li>
                                        <li>
                                            <a href=\"404.html\">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"blog.html\">Blog</a>
                                    <ul>
                                        <li>
                                            <a href=\"blog.html\">Blog</a>
                                        </li>
                                        <li>
                                            <a href=\"single-blog.html\">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About Us</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 392
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    <!-- BREADCRUMBS SETCTION START -->
    <div class=\"breadcrumbs-section plr-200 mb-80\" >
        <div class=\"breadcrumbs overlay-bg\" style=\"background-image:url(";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/entrepot.jpg"), "html", null, true);
        echo ");\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"breadcrumbs-inner\">
                            <h1 class=\"breadcrumbs-title\" >Promotion</h1>
                            <ul class=\"breadcrumb-list\">


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BREADCRUMBS SETCTION END -->
    <!-- START SLIDER AREA
    <div class=\"slider-area  plr-185  mb-80\">
        <div class=\"footer-top-inner gray-bg\" style=\"background-image: url('entrepot.jpg');\">
        <div class=\"container-fluid\">
            <div class=\"slider-content\">
                <div class=\"row\">
                    <div class=\"active-slider-1 slick-arrow-1 slick-dots-1\">

                        <div class=\"col-md-12\">
                            <div class=\"layer-1\">
                                <div class=\"slider-img\">


                                    <figure class=\"snip1344\">
                                      <div style=\"margin-top: 100px; font-size: 5rem; color: #efecec;\">
                                          Profil
                                        </div>
                                        <img src=\"carrefour.jpg\" alt=\"profile-sample1\" class=\"background\"/><img src=\"carrefour.jpg\" alt=\"profile-sample1\" class=\"profile\"/>
                                        <figcaption>
                                          <h3>#######<span>Customer</span></h3>
                                          <div class=\"icons\"><a href=\"#\"><i class=\"ion-social-reddit-outline\"></i></a><a href=\"#\"> <i class=\"ion-social-twitter-outline\"></i></a><a href=\"#\"> <i class=\"ion-social-vimeo-outline\"></i></a></div>
                                        </figcaption>
                                      </figure>

                                </div>
                                <div class=\"slider-info gray-bg\" style=\"background: #ff304f;\">
                                    <div class=\"slider-info-inner\">
                                        <h1 class=\"slider-title-1 text-uppercase text-black-1\" style=\"color: #ffffff;\">Check</h1>
                                        <div class=\"slider-brief text-black-2\">
                                            <p style=\"color: #ffffff;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                        <a href=\"#\" class=\"button extra-small button-black\">
                                            <span class=\"text-uppercase\">My orders</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>
";
        // line 473
        $this->displayBlock('body', $context, $blocks);
        // line 474
        echo "<!-- END SLIDER AREA-->

<!-- Start page content -->


<!-- END FOOTER AREA -->


<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/vendor/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap framework js -->
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- jquery.nivo.slider js -->
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/lib/js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
<!-- All js plugins included in this file. -->
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 473
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
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 473,  646 => 7,  631 => 496,  626 => 494,  621 => 492,  616 => 490,  611 => 488,  595 => 474,  593 => 473,  522 => 405,  506 => 392,  500 => 389,  451 => 343,  446 => 341,  330 => 228,  316 => 217,  285 => 189,  279 => 186,  272 => 182,  186 => 99,  182 => 98,  170 => 89,  166 => 88,  143 => 68,  133 => 61,  104 => 35,  98 => 32,  93 => 30,  88 => 28,  83 => 26,  78 => 24,  71 => 20,  66 => 18,  61 => 16,  55 => 13,  46 => 7,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}{% endblock %}</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/assets/img/icon/favicon.png') }}\">
    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/bootstrap.min.css') }}\">
    <!-- Nivo-slider css -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/lib/css/nivo-slider.css') }}\">
    <!-- This core.css file contents all plugings css file. -->
    <link rel=\"stylesheet\" href= \"{{ asset('front/assets/css/core.css') }}\">

    <!-- Theme shortcodes/elements style -->

    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/shortcode/shortcodes.css') }}\">
    <!-- Theme main style -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/style.css') }}\">
    <!-- Responsive css -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/responsive.css') }}\">
    <!-- Template color css -->
    <link href= \"{{ asset('front/assets/css/color/color-core.css') }}\" data-style=\"styles\" rel=\"stylesheet\">
    <!-- User style -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/custom.css') }}\">

    <!-- Modernizr JS -->
    <script src=\"{{ asset('front/assets/js/vendor/modernizr-2.8.3.min.js') }}\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class=\"wrapper\">

    <!-- START HEADER AREA -->
    <header class=\"header-area header-wrapper\">
        <!-- header-top-bar -->
        <div class=\"header-top-bar plr-185\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-6 hidden-xs\">
                        <div class=\"call-us\">
                            <p class=\"mb-0 roboto\">(+88) 01234-567890</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xs-12\">
                        <div class=\"top-link clearfix\">
                            <ul class=\"link f-right\">
                                <li>
                                    <a href=\"{{ path('account') }}\">
                                        <i class=\"zmdi zmdi-account\"></i>
                                        My Account
                                    </a>
                                </li>

                                <li>
                                    <a href=\"{{ path('login') }}\">
                                        <i class=\"zmdi zmdi-lock\"></i>
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id=\"sticky-header\" class=\"header-middle-area plr-185\" style=\"box-shadow: 0 12px 19px -10px rgba(0,0,0,.25);
           margin-bottom: 50px; background: #efecec;\" >
            <div class=\"container-fluid\">
                <div class=\"full-width-mega-dropdown\">
                    <div class=\"row\">
                        <!-- logo -->
                        <div class=\"col-md-2 col-sm-6 col-xs-12\">
                            <div class=\"logo\">
                                <a href=\"{{ path('front_homepage') }}\">
                                    <img src=\"{{ asset('front/assets/img/logo/logo.png') }}\" alt=\"main logo\" style=\"height: 50px; width: 75px; position:absolute; bottom:-5px ;left: 100px;\">

                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class=\"col-md-8 hidden-sm hidden-xs\">
                            <nav id=\"primary-menu\">
                                <ul class=\"main-menu text-center\">
                                    <li><a href=\"{{ path('front_homepage') }}\">Home</a></li>
                                    <li class=\"mega-parent\"><a href=\"{{ path('shop') }}\">Products</a>
                                        <div class=\"mega-menu-area clearfix\">
                                            <div class=\"mega-menu-link f-left\">
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Smart Phone</li>
                                                    <li>
                                                        <a href=\"#\">All Mobile Phones</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Smart phones</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Android Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Windows Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Refurbished Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">All Mobile Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Note Book</li>
                                                    <li>
                                                        <a href=\"\">All Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Smart notebooks</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Android Note Book</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Windows Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Refurbished Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Note Books Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class=\"single-mega-item\">
                                                    <li class=\"menu-title\">Tablets</li>
                                                    <li>
                                                        <a href=\"\">All Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Smart tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Android Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Windows Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Refurbished Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Tablets Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"mega-menu-photo f-left\">
                                                <a href=\"#\">
                                                    <img src=\"img/mega-menu/1.jpg\" alt=\"mega menu image\">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mega-parent\"><a href=\"{{ path('order') }}\">Order</a>


                                    <li>
                                        <a href=\"{{ path('about') }}\">About us</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('contact') }}\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class=\"col-md-2 col-sm-6 col-xs-12\">
                            <div class=\"search-top-cart  f-right\">
                                <!-- header-search -->
                                <div class=\"header-search f-left\">
                                    <div class=\"header-search-inner\">
                                        <button class=\"search-toggle\">
                                            <i class=\"zmdi zmdi-search\"></i>
                                        </button>
                                        <form action=\"#\">
                                            <div class=\"top-search-box\">
                                                <input type=\"text\" placeholder=\"Search here your product...\">
                                                <button type=\"submit\">
                                                    <i class=\"zmdi zmdi-search\"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"header-search f-left\" style=\"position: absolute; left: 200px; top: 15px;\">
                                    <div class=\"cart-toggler\">

                                        <li>
                                            <a href=\"{{ path('wishlist') }}\">
                                                <i class=\"zmdi zmdi-favorite\"></i>

                                            </a>
                                        </li>
                                    </div>
                                </div>
                                <!-- total-cart -->
                                <div class=\"total-cart f-left\">
                                    <div class=\"total-cart-in\">
                                        <div class=\"cart-toggler\">
                                            <a href=\"{{ path('cart') }}\">
                                                <span class=\"cart-quantity\">02</span><br>
                                                <span class=\"cart-icon\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class=\"top-cart-inner your-cart\">
                                                    <h5 class=\"text-capitalize\">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"total-cart-pro\">
                                                    <!-- single-cart
                                                    <div class=\"single-cart clearfix\">
                                                        <div class=\"cart-img f-left\">
                                                            <a href=\"#\">
                                                                <img src=\"img/cart/1.jpg\" alt=\"Cart Product\" />
                                                            </a>
                                                            <div class=\"del-icon\">
                                                                <a href=\"#\">
                                                                    <i class=\"zmdi zmdi-close\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"cart-info f-left\">
                                                            <h6 class=\"text-capitalize\">
                                                                <a href=\"#\">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                  single-cart -->
                                                    <div class=\"single-cart clearfix\">
                                                        <div class=\"cart-img f-left\">
                                                            <a href=\"#\">
                                                                <img src=\"img/cart/1.jpg\" alt=\"Cart Product\" />
                                                            </a>
                                                            <div class=\"del-icon\">
                                                                <a href=\"#\">
                                                                    <i class=\"zmdi zmdi-close\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class=\"cart-info f-left\">
                                                             <h6 class=\"text-capitalize\">
                                                                 <a href=\"#\">Dummy Product Name</a>
                                                             </h6>
                                                             <p>
                                                                 <span>Brand <strong>:</strong></span>Brand Name
                                                             </p>
                                                             <p>
                                                                 <span>Model <strong>:</strong></span>Grand s2
                                                             </p>
                                                             <p>
                                                                 <span>Color <strong>:</strong></span>Black, White
                                                             </p>
                                                         </div>-->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner subtotal\">
                                                    <h4 class=\"text-uppercase g-font-2\">
                                                        <!--Total  =
                                                         <span>\$ 500.00</span>-->
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner view-cart\">
                                                    <h4 class=\"text-uppercase\">
                                                        <a href=\"#\">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"top-cart-inner check-out\">
                                                    <h4 class=\"text-uppercase\">
                                                        <a href=\"#\">Check out</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class=\"mobile-menu-area hidden-lg hidden-md\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"mobile-menu\">
                        <nav id=\"dropdown\">
                            <ul>
                                <li><a href=\"{{ path('front_homepage') }}\">Home</a></li>
                                <li>
                                    <a href=\"{{ path('shop') }}\">Products</a>
                                </li>
                                <li><a href=\"#\">Pages</a>
                                    <ul>
                                        <li>
                                            <a href=\"shop.html\">Shop</a>
                                        <li>
                                            <a href=\"single-product.html\">Single Product</a>
                                        </li>
                                        <li>
                                            <a href=\"cart.html\">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href=\"wishlist.html\">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href=\"checkout.html\">Checkout</a>
                                        </li>
                                        <li>
                                            <a href=\"order.html\">Order</a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\">Login</a>
                                        </li>
                                        <li>
                                            <a href=\"My-account.html\">My Account</a>
                                        </li>
                                        <li>
                                            <a href=\"about.html\">About us</a>
                                        </li>
                                        <li>
                                            <a href=\"404.html\">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"blog.html\">Blog</a>
                                    <ul>
                                        <li>
                                            <a href=\"blog.html\">Blog</a>
                                        </li>
                                        <li>
                                            <a href=\"single-blog.html\">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"{{ path('about') }}\">About Us</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('contact') }}\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    <!-- BREADCRUMBS SETCTION START -->
    <div class=\"breadcrumbs-section plr-200 mb-80\" >
        <div class=\"breadcrumbs overlay-bg\" style=\"background-image:url({{ asset('front/assets/img/entrepot.jpg')}});\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"breadcrumbs-inner\">
                            <h1 class=\"breadcrumbs-title\" >Promotion</h1>
                            <ul class=\"breadcrumb-list\">


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BREADCRUMBS SETCTION END -->
    <!-- START SLIDER AREA
    <div class=\"slider-area  plr-185  mb-80\">
        <div class=\"footer-top-inner gray-bg\" style=\"background-image: url('entrepot.jpg');\">
        <div class=\"container-fluid\">
            <div class=\"slider-content\">
                <div class=\"row\">
                    <div class=\"active-slider-1 slick-arrow-1 slick-dots-1\">

                        <div class=\"col-md-12\">
                            <div class=\"layer-1\">
                                <div class=\"slider-img\">


                                    <figure class=\"snip1344\">
                                      <div style=\"margin-top: 100px; font-size: 5rem; color: #efecec;\">
                                          Profil
                                        </div>
                                        <img src=\"carrefour.jpg\" alt=\"profile-sample1\" class=\"background\"/><img src=\"carrefour.jpg\" alt=\"profile-sample1\" class=\"profile\"/>
                                        <figcaption>
                                          <h3>#######<span>Customer</span></h3>
                                          <div class=\"icons\"><a href=\"#\"><i class=\"ion-social-reddit-outline\"></i></a><a href=\"#\"> <i class=\"ion-social-twitter-outline\"></i></a><a href=\"#\"> <i class=\"ion-social-vimeo-outline\"></i></a></div>
                                        </figcaption>
                                      </figure>

                                </div>
                                <div class=\"slider-info gray-bg\" style=\"background: #ff304f;\">
                                    <div class=\"slider-info-inner\">
                                        <h1 class=\"slider-title-1 text-uppercase text-black-1\" style=\"color: #ffffff;\">Check</h1>
                                        <div class=\"slider-brief text-black-2\">
                                            <p style=\"color: #ffffff;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                        <a href=\"#\" class=\"button extra-small button-black\">
                                            <span class=\"text-uppercase\">My orders</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>
{% block body %}{% endblock %}
<!-- END SLIDER AREA-->

<!-- Start page content -->


<!-- END FOOTER AREA -->


<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src=\"{{ asset('front/assets/js/vendor/jquery-3.1.1.min.js') }}\"></script>
<!-- Bootstrap framework js -->
<script src=\"{{ asset('front/assets/js/bootstrap.min.js') }}\"></script>
<!-- jquery.nivo.slider js -->
<script src=\"{{ asset('front/assets/lib/js/jquery.nivo.slider.js') }}\"></script>
<!-- All js plugins included in this file. -->
<script src=\"{{ asset('front/assets/js/plugins.js') }}\"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src=\"{{ asset('front/assets/js/main.js') }}\"></script>

</body>

</html>", "homepage.html.twig", "C:\\xampp\\htdocs\\debo-pi\\app\\Resources\\views\\homepage.html.twig");
    }
}
