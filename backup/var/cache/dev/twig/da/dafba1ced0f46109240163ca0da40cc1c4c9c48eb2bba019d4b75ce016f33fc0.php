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

/* @Front/Default/product.html.twig */
class __TwigTemplate_6d1d4bc221bcea227f2fc81172c8052a15ee119440a070a3816e9796adc08068 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/product.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/product.html.twig", 1);
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

        echo "Debo - Shop";
        
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
        echo "    <div id=\"page-content\" class=\"page-wrapper\">
        <div class=\"shop-section mb-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-md-push-3 col-sm-12\">
                        <div class=\"shop-content\">
                            <!-- shop-option start -->
                            <div class=\"shop-option box-shadow mb-30 clearfix\">
                                <!-- Nav tabs -->
                                <ul class=\"shop-tab f-left\" role=\"tablist\">
                                    <li class=\"active\">
                                        <a href=\"#grid-view\" data-toggle=\"tab\"><i class=\"zmdi zmdi-view-module\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#list-view\" data-toggle=\"tab\"><i class=\"zmdi zmdi-view-list-alt\"></i></a>
                                    </li>
                                </ul>
                                <!-- short-by -->
                                <div class=\"short-by f-left text-center\">
                                    <span>Sort by :</span>
                                    <select>
                                        <option value=\"volvo\">Newest items</option>
                                        <option value=\"saab\">Saab</option>
                                        <option value=\"mercedes\">Mercedes</option>
                                        <option value=\"audi\">Audi</option>
                                    </select>
                                </div>
                                <!-- showing -->
                                <div class=\"showing f-right text-right\">
                                    <span>Showing : 01-09 of 17.</span>
                                </div>
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class=\"tab-content\">
                                <!-- grid-view -->
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"grid-view\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>

                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name </a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/9.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/10.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/11.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/8.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/12.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/12.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"list-view\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 394
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/10.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"";
        // line 443
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"";
        // line 485
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 520
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/8.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"";
        // line 527
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"";
        // line 562
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                                        <img src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"";
        // line 569
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                    </div>
                                </div>
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
                                    <a href=\"";
        // line 718
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                        <img src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"";
        // line 724
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"";
        // line 733
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                        <img src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/8.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"";
        // line 739
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"";
        // line 748
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">
                                        <img src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/12.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"";
        // line 754
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_product");
        echo "\">Product Name</a>
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
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\">
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
        // line 889
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 899
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
    <!-- END FOOTER AREA -->


    <!-- END QUICKVIEW PRODUCT -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 899,  1135 => 896,  1129 => 893,  1122 => 889,  1010 => 780,  981 => 754,  973 => 749,  969 => 748,  957 => 739,  949 => 734,  945 => 733,  933 => 724,  925 => 719,  921 => 718,  769 => 569,  760 => 563,  756 => 562,  718 => 527,  709 => 521,  705 => 520,  667 => 485,  658 => 479,  654 => 478,  616 => 443,  607 => 437,  603 => 436,  565 => 401,  556 => 395,  552 => 394,  512 => 357,  504 => 352,  500 => 351,  465 => 319,  457 => 314,  453 => 313,  418 => 281,  410 => 276,  406 => 275,  371 => 243,  363 => 238,  359 => 237,  324 => 205,  316 => 200,  312 => 199,  277 => 167,  269 => 162,  265 => 161,  230 => 129,  222 => 124,  218 => 123,  183 => 91,  175 => 86,  171 => 85,  136 => 53,  127 => 47,  123 => 46,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Debo - Shop{% endblock %}
{% block body %}
    <div id=\"page-content\" class=\"page-wrapper\">
        <div class=\"shop-section mb-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-md-push-3 col-sm-12\">
                        <div class=\"shop-content\">
                            <!-- shop-option start -->
                            <div class=\"shop-option box-shadow mb-30 clearfix\">
                                <!-- Nav tabs -->
                                <ul class=\"shop-tab f-left\" role=\"tablist\">
                                    <li class=\"active\">
                                        <a href=\"#grid-view\" data-toggle=\"tab\"><i class=\"zmdi zmdi-view-module\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#list-view\" data-toggle=\"tab\"><i class=\"zmdi zmdi-view-list-alt\"></i></a>
                                    </li>
                                </ul>
                                <!-- short-by -->
                                <div class=\"short-by f-left text-center\">
                                    <span>Sort by :</span>
                                    <select>
                                        <option value=\"volvo\">Newest items</option>
                                        <option value=\"saab\">Saab</option>
                                        <option value=\"mercedes\">Mercedes</option>
                                        <option value=\"audi\">Audi</option>
                                    </select>
                                </div>
                                <!-- showing -->
                                <div class=\"showing f-right text-right\">
                                    <span>Showing : 01-09 of 17.</span>
                                </div>
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class=\"tab-content\">
                                <!-- grid-view -->
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"grid-view\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>

                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name </a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/2.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/9.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/4.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/10.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/11.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/8.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/12.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/12.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"list-view\">
                                    <div class=\"row\">
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"{{ path('single_product') }}\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/10.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"{{ path('single_product') }}\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/4.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"{{ path('single_product') }}\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/8.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"{{ path('single_product') }}\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                        <!-- product-item start -->
                                        <div class=\"col-md-12\">
                                            <div class=\"shop-list product-item\">
                                                <div class=\"product-img\">
                                                    <a href=\"{{ path('single_product') }}\">
                                                        <img src=\"{{ asset('front/assets/img/product/2.jpg') }}\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <div class=\"clearfix\">
                                                        <h6 class=\"product-title f-left\">
                                                            <a href=\"{{ path('single_product') }}\">Dummy Product Name </a>
                                                        </h6>
                                                        <div class=\"pro-rating f-right\">
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                                            <a href=\"#\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class=\"brand-name mb-30\">Brand Name</h6>
                                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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
                                        <!-- product-item end -->
                                    </div>
                                </div>
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
                                    <a href=\"{{ path('single_product') }}\">
                                        <img src=\"{{ asset('front/assets/img/product/4.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"{{ path('single_product') }}\">
                                        <img src=\"{{ asset('front/assets/img/product/8.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
                                    </h6>
                                    <h3 class=\"pro-price\">\$ 869.00</h3>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class=\"product-item\">
                                <div class=\"product-img\">
                                    <a href=\"{{ path('single_product') }}\">
                                        <img src=\"{{ asset('front/assets/img/product/12.jpg') }}\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"product-info\">
                                    <h6 class=\"product-title\">
                                        <a href=\"{{ path('single_product') }}\">Product Name</a>
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
                                        <img src=\"{{ asset('front/assets/img/logo/logo.png') }}\" alt=\"\">
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
    <!-- END FOOTER AREA -->


    <!-- END QUICKVIEW PRODUCT -->
</div>
{% endblock %}", "@Front/Default/product.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\product.html.twig");
    }
}
