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

/* @Article/ArticleFront/ShowArticles.html.twig */
class __TwigTemplate_47f938de266ca9d9bd7f5459e7a48e67343ede2b29b6047f0d682e8f685ea14c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/ArticleFront/ShowArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Article/ArticleFront/ShowArticles.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Article/ArticleFront/ShowArticles.html.twig", 1);
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

        echo "Subas || Home";
        
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

            #starimg1:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg2:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg3:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg4:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg5:hover {
                background-color: #3e8e41;
                color: white;
            }
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
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 71
            echo "                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\" style=\"max-width: 200px;max-height: 200px;\">
                                        <a href=\"single-product.html\"><img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["article"], "image", []))), "html", null, true);
            echo "\" style=\"object-fit:cover;\"  alt=\"\"></a>

                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", []), "html", null, true);
            echo "</a></h5>
                                            <p>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "label", []), "html", null, true);
            echo "</p>
                                            <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", []), "html", null, true);
            echo "</p>
                                            <p>rating : ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "rating", []), "html", null, true);
            echo "</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    php -r \"echo ini_get('memory_limit').PHP_EOL;\"       <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
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
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

                                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 142
            echo "                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\" id=\"entitiesNav\"   >
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["r"], "image", []))), "html", null, true);
            echo "\" style=\"  object-fit:cover;max-height:200px;max-width:200px\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", []), "html", null, true);
            echo "</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "label", []), "html", null, true);
            echo "</h6>
                                                    <h3 class=\"pro-price\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "price", []), "html", null, true);
            echo "dt</h3>
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
                                                <div class=\"row\" style=\"margin-left: 26px;\">
                                                    <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate-articles-front", ["rate" => "20", "id" => $this->getAttribute($context["r"], "idArticle", [])]), "html", null, true);
            echo "\"> <img id=\"starimg1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/star.png"), "html", null, true);
            echo "\" style=\"width: 22px\"/> </a>
                                                    <a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate-articles-front", ["rate" => "40", "id" => $this->getAttribute($context["r"], "idArticle", [])]), "html", null, true);
            echo ")\"> <img id=\"starimg2\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/star.png"), "html", null, true);
            echo "\" style=\"width: 22px\"/> </a>
                                                    <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate-articles-front", ["rate" => "60", "id" => $this->getAttribute($context["r"], "idArticle", [])]), "html", null, true);
            echo ")\"> <img id=\"starimg3\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/star.png"), "html", null, true);
            echo "\" style=\"width: 22px\"/> </a>
                                                    <a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate-articles-front", ["rate" => "80", "id" => $this->getAttribute($context["r"], "idArticle", [])]), "html", null, true);
            echo ")\"> <img id=\"starimg4\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/star.png"), "html", null, true);
            echo "\" style=\"width: 22px\"/> </a>
                                                    <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate-articles-front", ["rate" => "100", "id" => $this->getAttribute($context["r"], "idArticle", [])]), "html", null, true);
            echo ")\"> <img id=\"starimg5\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/star.png"), "html", null, true);
            echo "\" style=\"width: 22px\"/> </a>
                                                    <p>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "rating", []), "html", null, true);
            echo "</p>
                                                </div>
                                            </div>

                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                                    </div>
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
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/product/7.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>
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
        // line 227
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
        // line 265
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
        // line 299
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
        // line 333
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
        // line 367
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
        // line 405
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
        // line 439
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
                                <input type=\"text\" id=\"search\" placeholder=\"Search here...\">
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
        // line 590
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
        // line 605
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
        // line 620
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
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><img src=\"i";
        // line 774
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
        return "@Article/ArticleFront/ShowArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  968 => 774,  962 => 771,  956 => 768,  949 => 764,  802 => 620,  784 => 605,  766 => 590,  612 => 439,  575 => 405,  534 => 367,  497 => 333,  460 => 299,  423 => 265,  382 => 227,  345 => 193,  333 => 183,  321 => 177,  315 => 176,  309 => 175,  303 => 174,  297 => 173,  291 => 172,  270 => 154,  266 => 153,  261 => 151,  253 => 146,  247 => 142,  243 => 141,  205 => 105,  174 => 80,  170 => 79,  166 => 78,  162 => 77,  156 => 74,  151 => 71,  147 => 70,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Subas || Home{% endblock %}
{% block body %}


    <section id=\"page-content\" class=\"page-wrapper\">
        <style>

            #starimg1:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg2:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg3:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg4:hover {
                background-color: #3e8e41;
                color: white;
            }
            #starimg5:hover {
                background-color: #3e8e41;
                color: white;
            }
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
                            {% for article in articles %}
                            <div class=\"col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"single-brand-product\" style=\"max-width: 200px;max-height: 200px;\">
                                        <a href=\"single-product.html\"><img src=\"{{ asset('images/' ~ article.image) }}\" style=\"object-fit:cover;\"  alt=\"\"></a>

                                        <div class=\"blog-desc\">
                                            <h5 class=\"blog-title\"><a href=\"single-blog.html\">{{article.name}}</a></h5>
                                            <p>{{ article.label }}</p>
                                            <p>{{ article.description }}</p>
                                            <p>rating : {{ article.rating }}</p>
                                            <div class=\"read-more\">
                                                <a href=\"single-blog.html\">Read more</a>
                                            </div>
                                            <ul class=\"blog-meta\">
                                                <li>
                                                    <a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\" style=\"position: absolute; top: 220px;\"></i></a>
                                                </li>
                                                <li>
                                                    php -r \"echo ini_get('memory_limit').PHP_EOL;\"       <a href=\"#\" data-toggle=\"modal\" data-target=\"#productModal\" title=\"Quickview\"><i class=\"zmdi zmdi-zoom-in\" style=\"position: absolute; top: 220px;\"></i></a>
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
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

                                        {% for r in articles %}
                                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                            <div class=\"product-item product-item-2\" id=\"entitiesNav\"   >
                                                <div class=\"product-img\">
                                                    <a href=\"single-product.html\">
                                                        <img src=\"{{ asset('images/' ~ r.image) }}\" style=\"  object-fit:cover;max-height:200px;max-width:200px\" alt=\"\"/>
                                                    </a>
                                                </div>
                                                <div class=\"product-info\">
                                                    <h6 class=\"product-title\">
                                                        <a href=\"single-product.html\">{{ r.name}}</a>
                                                    </h6>
                                                    <h6 class=\"brand-name\">{{r.label}}</h6>
                                                    <h3 class=\"pro-price\">{{ r.price }}dt</h3>
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
                                                <div class=\"row\" style=\"margin-left: 26px;\">
                                                    <a href=\"{{ path('rate-articles-front', {'rate':'20', 'id':r.idArticle}) }}\"> <img id=\"starimg1\" src=\"{{ asset('front/star.png') }}\" style=\"width: 22px\"/> </a>
                                                    <a href=\"{{ path('rate-articles-front', {'rate':'40', 'id':r.idArticle}) }})\"> <img id=\"starimg2\" src=\"{{ asset('front/star.png') }}\" style=\"width: 22px\"/> </a>
                                                    <a href=\"{{ path('rate-articles-front', {'rate':'60', 'id':r.idArticle}) }})\"> <img id=\"starimg3\" src=\"{{ asset('front/star.png') }}\" style=\"width: 22px\"/> </a>
                                                    <a href=\"{{ path('rate-articles-front', {'rate':'80', 'id':r.idArticle}) }})\"> <img id=\"starimg4\" src=\"{{ asset('front/star.png') }}\" style=\"width: 22px\"/> </a>
                                                    <a href=\"{{ path('rate-articles-front', {'rate':'100', 'id':r.idArticle}) }})\"> <img id=\"starimg5\" src=\"{{ asset('front/star.png') }}\" style=\"width: 22px\"/> </a>
                                                    <p>{{  r.rating }}</p>
                                                </div>
                                            </div>

                                        </div>
                                        {% endfor %}
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
                                                        <img src=\"{{ asset('front/assets/img/product/7.jpg') }}\"  alt=\"\"/>
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
                                <input type=\"text\" id=\"search\" placeholder=\"Search here...\">
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


{% endblock %}", "@Article/ArticleFront/ShowArticles.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\ArticleBundle\\Resources\\views\\ArticleFront\\ShowArticles.html.twig");
    }
}
