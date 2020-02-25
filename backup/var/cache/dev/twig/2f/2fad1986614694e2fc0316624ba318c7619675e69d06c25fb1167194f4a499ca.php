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

/* @Front/Default/single_product.html.twig */
class __TwigTemplate_968936f270068eb529da2493058a2af2abcdca8ef1a8e5bdd513a7f1b63284e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/single_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/single_product.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/single_product.html.twig", 1);
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

        echo "Debo - Single_Product";
        
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

    <div class=\"shop-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xs-12\">
                    <!-- single-product-area start -->
                    <div class=\"single-product-area mb-80\">
                        <div class=\"row\">
                            <!-- imgs-zoom-area start -->
                            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                <div class=\"imgs-zoom-area\">
                                    <img id=\"zoom_03\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/6.jpg"), "html", null, true);
        echo "\"  data-zoom-image=\"img/product/6.jpg\" alt=\"\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div id=\"gallery_01\" class=\"carousel-btn slick-arrow-3 mt-30\">
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/2.jpg\" data-zoom-image=\"img/product/2.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/2.jpg"), "html", null, true);
        echo "\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/3.jpg\" data-zoom-image=\"img/product/3.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/3.jpg"), "html", null, true);
        echo "\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/4.jpg\" data-zoom-image=\"img/product/4.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/4.jpg"), "html", null, true);
        echo "\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/5.jpg\" data-zoom-image=\"img/product/5.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/5.jpg"), "html", null, true);
        echo "\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/6.jpg\" data-zoom-image=\"img/product/6.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/6.jpg"), "html", null, true);
        echo "\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/7.jpg\" data-zoom-image=\"img/product/7.jpg\">
                                                        <img class=\"zoom_03\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"single-product-info\">
                                    <h3 class=\"text-black-1\">Dummy Product Name </h3>
                                    <h6 class=\"brand-name-2\">brand name</h6>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class=\"single-pro-color-rating clearfix\">
                                        <div class=\"sin-pro-color f-left\">
                                            <p class=\"color-title f-left\">Color</p>
                                            <div class=\"widget-color f-left\">
                                                <ul>
                                                    <li class=\"color-1\"><a href=\"#\"></a></li>
                                                    <li class=\"color-2\"><a href=\"#\"></a></li>
                                                    <li class=\"color-3\"><a href=\"#\"></a></li>
                                                    <li class=\"color-4\"><a href=\"#\"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"pro-rating sin-pro-rating f-right\">
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                            <span class=\"text-black-5\">( 27 Rating )</span>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class=\"plus-minus-pro-action clearfix\">
                                        <div class=\"sin-plus-minus f-left clearfix\">
                                            <p class=\"color-title f-left\">Qty</p>
                                            <div class=\"cart-plus-minus f-left\">
                                                <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                            </div>
                                        </div>
                                        <div class=\"sin-pro-action f-right\">
                                            <ul class=\"action-button\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\" tabindex=\"0\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\" tabindex=\"0\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\" tabindex=\"0\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\" tabindex=\"0\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- plus-minus-pro-action end -->
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-price -->
                                    <h3 class=\"pro-price\">Price: \$ 869.00</h3>
                                    <!--  hr -->
                                    <hr>
                                    <div>
                                        <a href=\"#\" class=\"button extra-small button-black\" tabindex=\"-1\">
                                            <span class=\"text-uppercase\">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                        <!-- single-product-tab -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- hr -->
                                <hr>
                                <div class=\"single-product-tab\">
                                    <ul class=\"reviews-tab mb-20\">
                                        <li  class=\"active\"><a href=\"#description\" data-toggle=\"tab\">description</a></li>
                                        <li ><a href=\"#information\" data-toggle=\"tab\">information</a></li>
                                        <li ><a href=\"#reviews\" data-toggle=\"tab\">reviews</a></li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"information\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"reviews\">
                                            <!-- reviews-tab-desc -->
                                            <div class=\"reviews-tab-desc\">
                                                <!-- single comments -->
                                                <div class=\"media mt-30\">
                                                    <div class=\"media-left\">
                                                        <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/author/1.jpg"), "html", null, true);
        echo "\" alt=\"#\"></a>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"name-commenter pull-left\">
                                                                <h6 class=\"media-heading\"><a href=\"#\">Gerald Barnes</a></h6>
                                                                <p class=\"mb-10\">27 Jun, 2016 at 2:30pm</p>
                                                            </div>
                                                            <div class=\"pull-right\">
                                                                <ul class=\"reply-delate\">
                                                                    <li><a href=\"#\">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href=\"#\">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                                <!-- single comments -->
                                                <div class=\"media mt-30\">
                                                    <div class=\"media-left\">
                                                        <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/author/2.jpg"), "html", null, true);
        echo "\" alt=\"#\"></a>

                                                    </div>
                                                    <div class=\"media-body\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"name-commenter pull-left\">
                                                                <h6 class=\"media-heading\"><a href=\"#\">Gerald Barnes</a></h6>
                                                                <p class=\"mb-10\">27 Jun, 2016 at 2:30pm</p>
                                                            </div>
                                                            <div class=\"pull-right\">
                                                                <ul class=\"reply-delate\">
                                                                    <li><a href=\"#\">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href=\"#\">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class=\"related-product-area\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"section-title text-left mb-40\">
                                    <h2 class=\"uppercase\">related product</h2>
                                    <h6>There are many variations of passages of brands available,</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"active-related-product\">
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
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
                                <!-- product-item end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-xs-12\">
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
        // line 452
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
        // line 467
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
        // line 482
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
                                    <img src=\"img/logo/logo.png\" alt=\"\">
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
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/4.png"), "html", null, true);
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
        return "@Front/Default/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 632,  760 => 629,  754 => 626,  748 => 623,  604 => 482,  586 => 467,  568 => 452,  449 => 336,  408 => 298,  367 => 260,  326 => 222,  277 => 176,  252 => 154,  142 => 47,  134 => 42,  126 => 37,  118 => 32,  110 => 27,  102 => 22,  93 => 16,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Debo - Single_Product{% endblock %}
{% block body %}
<section id=\"page-content\" class=\"page-wrapper\">

    <div class=\"shop-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xs-12\">
                    <!-- single-product-area start -->
                    <div class=\"single-product-area mb-80\">
                        <div class=\"row\">
                            <!-- imgs-zoom-area start -->
                            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                                <div class=\"imgs-zoom-area\">
                                    <img id=\"zoom_03\" src=\"{{ asset('front/assets/img/product/6.jpg') }}\"  data-zoom-image=\"img/product/6.jpg\" alt=\"\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div id=\"gallery_01\" class=\"carousel-btn slick-arrow-3 mt-30\">
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/2.jpg\" data-zoom-image=\"img/product/2.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/2.jpg') }}\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/3.jpg\" data-zoom-image=\"img/product/3.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/3.jpg') }}\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/4.jpg\" data-zoom-image=\"img/product/4.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/4.jpg') }}\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/5.jpg\" data-zoom-image=\"img/product/5.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/5.jpg') }}\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/6.jpg\" data-zoom-image=\"img/product/6.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/6.jpg') }}\"  alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"p-c\">
                                                    <a href=\"#\" data-image=\"img/product/7.jpg\" data-zoom-image=\"img/product/7.jpg\">
                                                        <img class=\"zoom_03\" src=\"{{ asset('front/assets/img/product/7.jpg') }}\" alt=\"\">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"single-product-info\">
                                    <h3 class=\"text-black-1\">Dummy Product Name </h3>
                                    <h6 class=\"brand-name-2\">brand name</h6>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class=\"single-pro-color-rating clearfix\">
                                        <div class=\"sin-pro-color f-left\">
                                            <p class=\"color-title f-left\">Color</p>
                                            <div class=\"widget-color f-left\">
                                                <ul>
                                                    <li class=\"color-1\"><a href=\"#\"></a></li>
                                                    <li class=\"color-2\"><a href=\"#\"></a></li>
                                                    <li class=\"color-3\"><a href=\"#\"></a></li>
                                                    <li class=\"color-4\"><a href=\"#\"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"pro-rating sin-pro-rating f-right\">
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star-half\"></i></a>
                                            <a href=\"#\" tabindex=\"0\"><i class=\"zmdi zmdi-star-outline\"></i></a>
                                            <span class=\"text-black-5\">( 27 Rating )</span>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class=\"plus-minus-pro-action clearfix\">
                                        <div class=\"sin-plus-minus f-left clearfix\">
                                            <p class=\"color-title f-left\">Qty</p>
                                            <div class=\"cart-plus-minus f-left\">
                                                <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                            </div>
                                        </div>
                                        <div class=\"sin-pro-action f-right\">
                                            <ul class=\"action-button\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\" tabindex=\"0\"><i class=\"zmdi zmdi-favorite\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\" tabindex=\"0\"><i class=\"zmdi zmdi-zoom-in\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Compare\" tabindex=\"0\"><i class=\"zmdi zmdi-refresh\"></i></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\" title=\"Add to cart\" tabindex=\"0\"><i class=\"zmdi zmdi-shopping-cart-plus\"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- plus-minus-pro-action end -->
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-price -->
                                    <h3 class=\"pro-price\">Price: \$ 869.00</h3>
                                    <!--  hr -->
                                    <hr>
                                    <div>
                                        <a href=\"#\" class=\"button extra-small button-black\" tabindex=\"-1\">
                                            <span class=\"text-uppercase\">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                        <!-- single-product-tab -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- hr -->
                                <hr>
                                <div class=\"single-product-tab\">
                                    <ul class=\"reviews-tab mb-20\">
                                        <li  class=\"active\"><a href=\"#description\" data-toggle=\"tab\">description</a></li>
                                        <li ><a href=\"#information\" data-toggle=\"tab\">information</a></li>
                                        <li ><a href=\"#reviews\" data-toggle=\"tab\">reviews</a></li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"information\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"reviews\">
                                            <!-- reviews-tab-desc -->
                                            <div class=\"reviews-tab-desc\">
                                                <!-- single comments -->
                                                <div class=\"media mt-30\">
                                                    <div class=\"media-left\">
                                                        <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('front/assets/img/author/1.jpg') }}\" alt=\"#\"></a>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"name-commenter pull-left\">
                                                                <h6 class=\"media-heading\"><a href=\"#\">Gerald Barnes</a></h6>
                                                                <p class=\"mb-10\">27 Jun, 2016 at 2:30pm</p>
                                                            </div>
                                                            <div class=\"pull-right\">
                                                                <ul class=\"reply-delate\">
                                                                    <li><a href=\"#\">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href=\"#\">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                                <!-- single comments -->
                                                <div class=\"media mt-30\">
                                                    <div class=\"media-left\">
                                                        <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('front/assets/img/author/2.jpg') }}\" alt=\"#\"></a>

                                                    </div>
                                                    <div class=\"media-body\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"name-commenter pull-left\">
                                                                <h6 class=\"media-heading\"><a href=\"#\">Gerald Barnes</a></h6>
                                                                <p class=\"mb-10\">27 Jun, 2016 at 2:30pm</p>
                                                            </div>
                                                            <div class=\"pull-right\">
                                                                <ul class=\"reply-delate\">
                                                                    <li><a href=\"#\">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href=\"#\">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class=\"related-product-area\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"section-title text-left mb-40\">
                                    <h2 class=\"uppercase\">related product</h2>
                                    <h6>There are many variations of passages of brands available,</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"active-related-product\">
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"{{ asset('front/assets/img/product/1.jpg') }}\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"{{ asset('front/assets/img/product/1.jpg') }}\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"{{ asset('front/assets/img/product/1.jpg') }}\" alt=\"\"/>
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
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class=\"col-xs-12\">
                                    <div class=\"product-item\">
                                        <div class=\"product-img\">
                                            <a href=\"single-product.html\">
                                                <img src=\"{{ asset('front/assets/img/product/1.jpg') }}\" alt=\"\"/>
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
                                <!-- product-item end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-xs-12\">
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
                                    <img src=\"img/logo/logo.png\" alt=\"\">
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
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/1.png') }}\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/2.png') }}\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/3.png') }}\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/4.png') }}\" alt=\"\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{% endblock %}", "@Front/Default/single_product.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\single_product.html.twig");
    }
}
