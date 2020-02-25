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

/* @Front/Default/index.html.twig */
class __TwigTemplate_25d6bc53e4ee7ffd78836f1713a89ba84ccbec06a12a294c84bd3cbc7b771fc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/index.html.twig", 1);
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

        echo "Subash || Home";
        
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
        echo "

    <section id=\"page-content\" class=\"page-wrapper\">
        <style>


            .cool-link {
                display: inline-block;
                color: #000;
                text-decoration: none;
            }

            .cool-link::after {
                content: '';
                display: block;
                width: 0px ;
                height: 2px;
                background: #ff304f;
                transition: width .3s;
                position:absolute;
                top: 27px;
            }

            .cool-link:hover::after {
                width: 25%;
                transition: width .3s;
            }




        </style>
        <div class=\"center\">

            <div class=\"featured-product-section section-bg-tb pt-80 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"cool-link\">
                                <div class=\"section-title text-left mb-40\">
                                    <h2 class=\"uppercase\" >New Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"by-brand-product\">
                        <div class=\"row active-by-brand slick-arrow-2\">

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
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
        </div>
    </section>
    <!-- BY BRAND SECTION END -->

    <!-- FEATURED PRODUCT SECTION START
    <div class=\"featured-product-section mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left mb-40\">
                        <h2 class=\"uppercase\">Featured product</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"featured-product\">
                <div class=\"row active-featured-product slick-arrow-2\">

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/1.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/2.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/3.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/4.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/4.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    FEATURED PRODUCT SECTION END -->

    <!-- UP COMMING PRODUCT SECTION START
    <div class=\"up-comming-product-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"up-comming-pro gray-bg clearfix\">
                        <div class=\"up-comming-pro-img f-left\">
                            <a href=\"#\">
                                <img src=\"img/up-comming/1.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"up-comming-pro-info f-left\">
                            <h3><a href=\"#\">Dummy Product Name</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                            <div class=\"up-comming-time\">
                                <div data-countdown=\"2017/02/02\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 hidden-sm col-xs-12\">
                    <div class=\"banner-item banner-1\">
                        <div class=\"ribbon-price\">
                            <span>\$ 896.00</span>
                        </div>
                        <div class=\"banner-img\">
                            <a href=\"#\"><img src=\"img/banner/1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"banner-info\">
                            <h3><a href=\"#\">Product Name</a></h3>
                            <ul class=\"banner-featured-list\">
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>amet, consectetur</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>adipisicing elitest,</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>eiusmod tempor</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>labore et dolore.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- UP COMMING PRODUCT SECTION END -->

    <div id=\"page-content\" class=\"page-wrapper\">

        <!-- SHOP SECTION START -->
        <div class=\"shop-section mb-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-md-push-3 col-sm-12\">
                        <div class=\"shop-content\">
                            <!-- shop-option start -->
                            <div class=\"shop-option box-shadow mb-30 clearfix\">

                                <div class=\"pro-tab-menu text-right\">

                                    <ul class=\"\" style=\"float: right;\" >
                                        <li class=\"active\"><a href=\"#popular-product\" data-toggle=\"tab\">Mobile</a></li>
                                        <li><a href=\"#new-arrival\" data-toggle=\"tab\">Clothes</a></li>
                                        <li><a href=\"#best-seller\"  data-toggle=\"tab\">Watches</a></li>
                                        <li><a href=\"#special-offer\"  data-toggle=\"tab\">Gaming</a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class=\"tab-content\">
                                <!-- grid-view -->
                                <div  class=\"tab-pane active\" id=\"popular-product\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"tab-pane\" id=\"new-arrival\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"tab-pane\" id=\"best-seller\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"special-offer\">
                                    <div class=\"row\">
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->

                                <!-- list-view -->

                            </div>
                            <!-- Tab Content end -->
                            <!-- shop-pagination start -->
                            <ul class=\"shop-pagination box-shadow text-center ptblr-10-30\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-left\"></i></a></li>
                                <li><a href=\"#\">01</a></li>
                                <li><a href=\"#\">02</a></li>
                                <li><a href=\"#\">03</a></li>
                                <li><a href=\"#\">...</a></li>
                                <li><a href=\"#\">05</a></li>
                                <li class=\"active\"><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i></a></li>
                            </ul>
                            <!-- shop-pagination end -->
                        </div>
                    </div>
                    <div class=\"col-md-3 col-md-pull-9 col-sm-12\">
                        <!-- widget-search -->
                        <aside class=\"widget-search mb-30\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Search here...\">
                                <button type=\"submit\"><i class=\"zmdi zmdi-search\"></i></button>
                            </form>
                        </aside>
                        <!-- widget-categories -->
                        <aside class=\"widget widget-categories box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">Categories</h6>
                            <div id=\"cat-treeview\" class=\"product-cat\">
                                <ul>
                                    <li class=\"closed\"><a href=\"#\">Brand One</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"open\"><a href=\"#\">Brand Two</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Accessories</a>
                                        <ul>
                                            <li><a href=\"#\">Footwear</a></li>
                                            <li><a href=\"#\">Sunglasses</a></li>
                                            <li><a href=\"#\">Watches</a></li>
                                            <li><a href=\"#\">Utilities</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Top Brands</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Jewelry</a>
                                        <ul>
                                            <li><a href=\"#\">Footwear</a></li>
                                            <li><a href=\"#\">Sunglasses</a></li>
                                            <li><a href=\"#\">Watches</a></li>
                                            <li><a href=\"#\">Utilities</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- shop-filter -->
                        <aside class=\"widget shop-filter box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">Price</h6>
                            <div class=\"price_filter\">
                                <div class=\"price_slider_amount\">
                                    <input type=\"submit\"  value=\"You range :\"/>
                                    <input type=\"text\" id=\"amount\" name=\"price\"  placeholder=\"Add Your Price\" />
                                </div>
                                <div id=\"slider-range\"></div>
                            </div>
                        </aside>
                        <!-- widget-color -->
                        <aside class=\"widget widget-color box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">color</h6>
                            <ul>
                                <li class=\"color-1\"><a href=\"#\">LightSalmon</a></li>
                                <li class=\"color-2\"><a href=\"#\">Dark Salmon</a></li>
                                <li class=\"color-3\"><a href=\"#\">Tomato</a></li>
                                <li class=\"color-4\"><a href=\"#\">Deep Sky Blue</a></li>
                                <li class=\"color-5\"><a href=\"#\">Electric Purple</a></li>
                                <li class=\"color-6\"><a href=\"#\">Atlantis</a></li>
                            </ul>
                        </aside>
                        <!-- operating-system -->
                        <aside class=\"widget operating-system box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">operating system</h6>
                            <form action=\"action_page.php\">
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Windows Phone</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Bleckgerry ios</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Android</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">ios</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Windows Phone</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Symban</label><br>
                                <label class=\"mb-0\"><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Bleckgerry os</label><br>
                            </form>
                        </aside>
                        <!-- widget-product -->
                        <aside class=\"widget widget-product box-shadow\">
                            <h6 class=\"widget-title border-left mb-20\">recent products</h6>
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"";
        // line 948
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/8.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/12.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </div>
    <!-- PRODUCT TAB SECTION END -->

    <!-- BLOG SECTION START -->

    <!-- BLOG SECTION END -->

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
                                        <!-- <img src=\"img/logo/logo.png\" alt=\"\">-->
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
                                            <a href=\"my-account.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Account</span></a>
                                        </li>
                                        <li>
                                            <a href=\"wishlist.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Wishlist</span></a>
                                        </li>
                                        <li>
                                            <a href=\"cart.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Cart</span></a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\"><i class=\"zmdi zmdi-circle\"></i><span>Sign In</span></a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\"><i class=\"zmdi zmdi-circle\"></i><span>Registration</span></a>
                                        </li>
                                        <li>
                                            <a href=\"checkout.html\"><i class=\"zmdi zmdi-circle\"></i><span>Check out</span></a>
                                        </li>
                                        <li>
                                            <a href=\"order.html\"><i class=\"zmdi zmdi-circle\"></i><span>Oder Complete</span></a>
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
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"i";
        // line 1132
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
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1269 => 1132,  1263 => 1129,  1257 => 1126,  1250 => 1122,  1103 => 978,  1085 => 963,  1067 => 948,  913 => 797,  876 => 763,  835 => 725,  798 => 691,  761 => 657,  724 => 623,  683 => 585,  646 => 551,  605 => 513,  271 => 182,  237 => 151,  202 => 119,  167 => 87,  132 => 55,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Subash || Home{% endblock %}
{% block body %}


    <section id=\"page-content\" class=\"page-wrapper\">
        <style>


            .cool-link {
                display: inline-block;
                color: #000;
                text-decoration: none;
            }

            .cool-link::after {
                content: '';
                display: block;
                width: 0px ;
                height: 2px;
                background: #ff304f;
                transition: width .3s;
                position:absolute;
                top: 27px;
            }

            .cool-link:hover::after {
                width: 25%;
                transition: width .3s;
            }




        </style>
        <div class=\"center\">

            <div class=\"featured-product-section section-bg-tb pt-80 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"cool-link\">
                                <div class=\"section-title text-left mb-40\">
                                    <h2 class=\"uppercase\" >New Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"by-brand-product\">
                        <div class=\"row active-by-brand slick-arrow-2\">

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('front/assets/img/product/5.jpg') }}\" alt=\"\"></a>

                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('front/assets/img/product/5.jpg') }}\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('front/assets/img/product/5.jpg') }}\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('front/assets/img/product/5.jpg') }}\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('front/assets/img/product/5.jpg') }}\" alt=\"\"></a>
                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">dummy Blog name</a></h5>
                                            <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\" style=\"position: absolute; top: 220px;\"></i></a>
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
        </div>
    </section>
    <!-- BY BRAND SECTION END -->

    <!-- FEATURED PRODUCT SECTION START
    <div class=\"featured-product-section mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-left mb-40\">
                        <h2 class=\"uppercase\">Featured product</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
            <div class=\"featured-product\">
                <div class=\"row active-featured-product slick-arrow-2\">

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/1.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/2.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/3.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/4.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"product-img\">
                                <a href=\"single-product.html\">
                                    <img src=\"img/product/4.jpg\" alt=\"\"/>
                                </a>
                            </div>
                            <div class=\"product-info\">
                                <h6 class=\"product-title\">
                                    <a href=\"single-product.html\">Product Name</a>
                                </h6>
                                <div class=\"pro-rating\">
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                    <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                </div>
                                <h3 class=\"pro-price\">\$ 869.00</h3>
                                <ul class=\"action-button\">
                                    <li>
                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-toggle=\"modal\"  data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    FEATURED PRODUCT SECTION END -->

    <!-- UP COMMING PRODUCT SECTION START
    <div class=\"up-comming-product-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"up-comming-pro gray-bg clearfix\">
                        <div class=\"up-comming-pro-img f-left\">
                            <a href=\"#\">
                                <img src=\"img/up-comming/1.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"up-comming-pro-info f-left\">
                            <h3><a href=\"#\">Dummy Product Name</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                            <div class=\"up-comming-time\">
                                <div data-countdown=\"2017/02/02\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 hidden-sm col-xs-12\">
                    <div class=\"banner-item banner-1\">
                        <div class=\"ribbon-price\">
                            <span>\$ 896.00</span>
                        </div>
                        <div class=\"banner-img\">
                            <a href=\"#\"><img src=\"img/banner/1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"banner-info\">
                            <h3><a href=\"#\">Product Name</a></h3>
                            <ul class=\"banner-featured-list\">
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>amet, consectetur</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>adipisicing elitest,</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>eiusmod tempor</span>
                                </li>
                                <li>
                                    <i class=\"zmdi zmdi-check\"></i><span>labore et dolore.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- UP COMMING PRODUCT SECTION END -->

    <div id=\"page-content\" class=\"page-wrapper\">

        <!-- SHOP SECTION START -->
        <div class=\"shop-section mb-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-md-push-3 col-sm-12\">
                        <div class=\"shop-content\">
                            <!-- shop-option start -->
                            <div class=\"shop-option box-shadow mb-30 clearfix\">

                                <div class=\"pro-tab-menu text-right\">

                                    <ul class=\"\" style=\"float: right;\" >
                                        <li class=\"active\"><a href=\"#popular-product\" data-toggle=\"tab\">Mobile</a></li>
                                        <li><a href=\"#new-arrival\" data-toggle=\"tab\">Clothes</a></li>
                                        <li><a href=\"#best-seller\"  data-toggle=\"tab\">Watches</a></li>
                                        <li><a href=\"#special-offer\"  data-toggle=\"tab\">Gaming</a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class=\"tab-content\">
                                <!-- grid-view -->
                                <div  class=\"tab-pane active\" id=\"popular-product\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"tab-pane\" id=\"new-arrival\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"tab-pane\" id=\"best-seller\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"special-offer\">
                                    <div class=\"row\">
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\">
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">Product Name</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">Sumsung</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                </div>

                                                <ul class=\"action-button\">
                                                    <li>
                                                        <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Compare\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\" title=\"Add to cart\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->

                                <!-- list-view -->

                            </div>
                            <!-- Tab Content end -->
                            <!-- shop-pagination start -->
                            <ul class=\"shop-pagination box-shadow text-center ptblr-10-30\">
                                <li><a href=\"#\"><i class=\"zmdi zmdi-chevron-left\"></i></a></li>
                                <li><a href=\"#\">01</a></li>
                                <li><a href=\"#\">02</a></li>
                                <li><a href=\"#\">03</a></li>
                                <li><a href=\"#\">...</a></li>
                                <li><a href=\"#\">05</a></li>
                                <li class=\"active\"><a href=\"#\"><i class=\"zmdi zmdi-chevron-right\"></i></a></li>
                            </ul>
                            <!-- shop-pagination end -->
                        </div>
                    </div>
                    <div class=\"col-md-3 col-md-pull-9 col-sm-12\">
                        <!-- widget-search -->
                        <aside class=\"widget-search mb-30\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Search here...\">
                                <button type=\"submit\"><i class=\"zmdi zmdi-search\"></i></button>
                            </form>
                        </aside>
                        <!-- widget-categories -->
                        <aside class=\"widget widget-categories box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">Categories</h6>
                            <div id=\"cat-treeview\" class=\"product-cat\">
                                <ul>
                                    <li class=\"closed\"><a href=\"#\">Brand One</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"open\"><a href=\"#\">Brand Two</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Accessories</a>
                                        <ul>
                                            <li><a href=\"#\">Footwear</a></li>
                                            <li><a href=\"#\">Sunglasses</a></li>
                                            <li><a href=\"#\">Watches</a></li>
                                            <li><a href=\"#\">Utilities</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Top Brands</a>
                                        <ul>
                                            <li><a href=\"#\">Mobile</a></li>
                                            <li><a href=\"#\">Tab</a></li>
                                            <li><a href=\"#\">Watch</a></li>
                                            <li><a href=\"#\">Head Phone</a></li>
                                            <li><a href=\"#\">Memory</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"closed\"><a href=\"#\">Jewelry</a>
                                        <ul>
                                            <li><a href=\"#\">Footwear</a></li>
                                            <li><a href=\"#\">Sunglasses</a></li>
                                            <li><a href=\"#\">Watches</a></li>
                                            <li><a href=\"#\">Utilities</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- shop-filter -->
                        <aside class=\"widget shop-filter box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">Price</h6>
                            <div class=\"price_filter\">
                                <div class=\"price_slider_amount\">
                                    <input type=\"submit\"  value=\"You range :\"/>
                                    <input type=\"text\" id=\"amount\" name=\"price\"  placeholder=\"Add Your Price\" />
                                </div>
                                <div id=\"slider-range\"></div>
                            </div>
                        </aside>
                        <!-- widget-color -->
                        <aside class=\"widget widget-color box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">color</h6>
                            <ul>
                                <li class=\"color-1\"><a href=\"#\">LightSalmon</a></li>
                                <li class=\"color-2\"><a href=\"#\">Dark Salmon</a></li>
                                <li class=\"color-3\"><a href=\"#\">Tomato</a></li>
                                <li class=\"color-4\"><a href=\"#\">Deep Sky Blue</a></li>
                                <li class=\"color-5\"><a href=\"#\">Electric Purple</a></li>
                                <li class=\"color-6\"><a href=\"#\">Atlantis</a></li>
                            </ul>
                        </aside>
                        <!-- operating-system -->
                        <aside class=\"widget operating-system box-shadow mb-30\">
                            <h6 class=\"widget-title border-left mb-20\">operating system</h6>
                            <form action=\"action_page.php\">
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Windows Phone</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Bleckgerry ios</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Android</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">ios</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Windows Phone</label><br>
                                <label><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Symban</label><br>
                                <label class=\"mb-0\"><input type=\"checkbox\" name=\"operating-1\" value=\"phone-1\">Bleckgerry os</label><br>
                            </form>
                        </aside>
                        <!-- widget-product -->
                        <aside class=\"widget widget-product box-shadow\">
                            <h6 class=\"widget-title border-left mb-20\">recent products</h6>
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"{{ asset('front/assets/img/product/4.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"{{ asset('front/assets/img/product/8.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"single-product.html\">
                                        <img src=\"{{ asset('front/assets/img/product/12.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"single-product.html\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </div>
    <!-- PRODUCT TAB SECTION END -->

    <!-- BLOG SECTION START -->

    <!-- BLOG SECTION END -->

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
                                        <!-- <img src=\"img/logo/logo.png\" alt=\"\">-->
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
                                            <a href=\"my-account.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Account</span></a>
                                        </li>
                                        <li>
                                            <a href=\"wishlist.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Wishlist</span></a>
                                        </li>
                                        <li>
                                            <a href=\"cart.html\"><i class=\"zmdi zmdi-circle\"></i><span>My Cart</span></a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\"><i class=\"zmdi zmdi-circle\"></i><span>Sign In</span></a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\"><i class=\"zmdi zmdi-circle\"></i><span>Registration</span></a>
                                        </li>
                                        <li>
                                            <a href=\"checkout.html\"><i class=\"zmdi zmdi-circle\"></i><span>Check out</span></a>
                                        </li>
                                        <li>
                                            <a href=\"order.html\"><i class=\"zmdi zmdi-circle\"></i><span>Oder Complete</span></a>
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
                                        <a href=\"#\"><img src=\"i{{ asset('front/assets/img/payment/4.jpg') }}\" alt=\"\"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>


{% endblock %}", "@Front/Default/index.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
