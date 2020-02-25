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

/* @Front/Default/order.html.twig */
class __TwigTemplate_6497457da8ff8b1a8ba8c151622abf68c3189df867ab21fb5d8b90c48eabc048 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/order.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/order.html.twig", 1);
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

        echo "Debo - Order";
        
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

    <!-- SHOP SECTION START -->
    <div class=\"shop-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <ul class=\"cart-tab\">
                        <li>
                            <a class=\"active\" href=\"#shopping-cart\" data-toggle=\"tab\">
                                <span>01</span>
                                Shopping cart
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#wishlist\" data-toggle=\"tab\">
                                <span>02</span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#checkout\" data-toggle=\"tab\">
                                <span>03</span>
                                Checkout
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#order-complete\" data-toggle=\"tab\">
                                <span>04</span>
                                Order complete
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-10\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <!-- shopping-cart start -->
                        <div class=\"tab-pane\" id=\"shopping-cart\">
                            <div class=\"shopping-cart-content\">
                                <form action=\"#\">
                                    <div class=\"table-content table-responsive mb-50\">
                                        <table class=\"text-center\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-thumbnail\">product</th>
                                                <th class=\"product-price\">price</th>
                                                <th class=\"product-quantity\">Quantity</th>
                                                <th class=\"product-subtotal\">total</th>
                                                <th class=\"product-remove\">remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/1.jpg"), "html", null, true);
        echo "\" alt=\"\">

                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"coupon-discount box-shadow p-30 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">coupon discount</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <input type=\"text\" name=\"name\" placeholder=\"Enter your code here.\">
                                                <button class=\"submit-btn-1 black-bg btn-hover-2\" type=\"submit\">apply coupon</button>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"payment-details box-shadow p-30 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">payment details</h6>
                                                <table>
                                                    <tr>
                                                        <td class=\"td-title-1\">Cart Subtotal</td>
                                                        <td class=\"td-title-2\">\$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Shipping and Handing</td>
                                                        <td class=\"td-title-2\">\$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Vat</td>
                                                        <td class=\"td-title-2\">\$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"order-total\">Order Total</td>
                                                        <td class=\"order-total-price\">\$170.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"culculate-shipping box-shadow p-30\">
                                                <h6 class=\"widget-title border-left mb-20\">culculate shipping</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <div class=\"row\">
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Country\">
                                                    </div>
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Region / State\">
                                                    </div>
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Post code\">
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <button class=\"submit-btn-1 black-bg btn-hover-2\">get a quote</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                        <!-- wishlist start -->
                        <div class=\"tab-pane\" id=\"wishlist\">
                            <div class=\"wishlist-content\">
                                <form action=\"#\">
                                    <div class=\"table-content table-responsive mb-50\">
                                        <table class=\"text-center\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-thumbnail\">product</th>
                                                <th class=\"product-price\">price</th>
                                                <th class=\"product-stock\">Stock status</th>
                                                <th class=\"product-add-cart\">add to cart</th>
                                                <th class=\"product-remove\">remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/cart/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wishlist end -->
                        <!-- checkout start -->
                        <div class=\"tab-pane\" id=\"checkout\">
                            <div class=\"checkout-content box-shadow p-30\">
                                <form action=\"#\">
                                    <div class=\"row\">
                                        <!-- billing details -->
                                        <div class=\"col-md-6\">
                                            <div class=\"billing-details pr-10\">
                                                <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                                <input type=\"text\"  placeholder=\"Your Name Here...\">
                                                <input type=\"text\"  placeholder=\"Email address here...\">
                                                <input type=\"text\"  placeholder=\"Phone here...\">
                                                <input type=\"text\"  placeholder=\"Company neme here...\">
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">country</option>
                                                    <option value=\"c-1\">Australia</option>
                                                    <option value=\"c-2\">Bangladesh</option>
                                                    <option value=\"c-3\">Unitd States</option>
                                                    <option value=\"c-4\">Unitd Kingdom</option>
                                                </select>
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">State</option>
                                                    <option value=\"c-1\">Melbourne</option>
                                                    <option value=\"c-2\">Dhaka</option>
                                                    <option value=\"c-3\">New York</option>
                                                    <option value=\"c-4\">London</option>
                                                </select>
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">Town/City</option>
                                                    <option value=\"c-1\">Victoria</option>
                                                    <option value=\"c-2\">Chittagong</option>
                                                    <option value=\"c-3\">Boston</option>
                                                    <option value=\"c-4\">Cambridge</option>
                                                </select>
                                                <textarea class=\"custom-textarea\" placeholder=\"Your address here...\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <!-- our order -->
                                            <div class=\"payment-details pl-10 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">our order</h6>
                                                <table>
                                                    <tr>
                                                        <td class=\"td-title-1\">Dummy Product Name x 2</td>
                                                        <td class=\"td-title-2\">\$1855.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Dummy Product Name</td>
                                                        <td class=\"td-title-2\">\$555.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Cart Subtotal</td>
                                                        <td class=\"td-title-2\">\$2410.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Shipping and Handing</td>
                                                        <td class=\"td-title-2\">\$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Vat</td>
                                                        <td class=\"td-title-2\">\$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"order-total\">Order Total</td>
                                                        <td class=\"order-total-price\">\$2425.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- payment-method -->
                                            <div class=\"payment-method\">
                                                <h6 class=\"widget-title border-left mb-20\">payment method</h6>
                                                <div id=\"accordion\">
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#bank-transfer\" >
                                                                direct bank transfer
                                                            </a>
                                                        </h4>
                                                        <div id=\"bank-transfer\" class=\"panel-collapse collapse in\" >
                                                            <div class=\"payment-content\">
                                                                <p>Lorem Ipsum is simply in dummy text of the printing and type setting industry. Lorem Ipsum has been.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
                                                                cheque payment
                                                            </a>
                                                        </h4>
                                                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                                            <div class=\"payment-content\">
                                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" >
                                                                paypal
                                                            </a>
                                                        </h4>
                                                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" >
                                                            <div class=\"payment-content\">
                                                                <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                                <ul class=\"payent-type mt-10\">
                                                                    <li><a href=\"#\"><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- payment-method end -->
                                            <button class=\"submit-btn-1 mt-30 btn-hover-1\" type=\"submit\">place order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- checkout end -->
                        <!-- order-complete start -->
                        <div class=\"tab-pane active\" id=\"order-complete\">
                            <div class=\"order-complete-content box-shadow\">
                                <div class=\"thank-you p-30 text-center\">
                                    <h6 class=\"text-black-5 mb-0\">Thank you. Your order has been received.</h6>
                                </div>
                                <div class=\"order-info p-30 mb-10\">
                                    <ul class=\"order-info-list\">
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"row\">
                                    <!-- our order -->
                                    <div class=\"col-md-6\">
                                        <div class=\"payment-details p-30\">
                                            <h6 class=\"widget-title border-left mb-20\">our order</h6>
                                            <table>
                                                <tr>
                                                    <td class=\"td-title-1\">Dummy Product Name x 2</td>
                                                    <td class=\"td-title-2\">\$1855.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Dummy Product Name</td>
                                                    <td class=\"td-title-2\">\$555.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Cart Subtotal</td>
                                                    <td class=\"td-title-2\">\$2410.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Shipping and Handing</td>
                                                    <td class=\"td-title-2\">\$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Vat</td>
                                                    <td class=\"td-title-2\">\$00.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"order-total\">Order Total</td>
                                                    <td class=\"order-total-price\">\$2425.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"bill-details p-30\">
                                            <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                            <ul class=\"bill-address\">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"bill-details pl-30\">
                                            <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                            <ul class=\"bill-address\">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order-complete end -->
                    </div>
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
                                    <img src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/logo/logoo.png"), "html", null, true);
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
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 662
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
        return "@Front/Default/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 662,  775 => 659,  769 => 656,  763 => 653,  651 => 544,  513 => 409,  509 => 408,  505 => 407,  501 => 406,  363 => 271,  334 => 245,  305 => 219,  198 => 115,  169 => 89,  139 => 62,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Debo - Order{% endblock %}
{% block body %}

<section id=\"page-content\" class=\"page-wrapper\">

    <!-- SHOP SECTION START -->
    <div class=\"shop-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <ul class=\"cart-tab\">
                        <li>
                            <a class=\"active\" href=\"#shopping-cart\" data-toggle=\"tab\">
                                <span>01</span>
                                Shopping cart
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#wishlist\" data-toggle=\"tab\">
                                <span>02</span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#checkout\" data-toggle=\"tab\">
                                <span>03</span>
                                Checkout
                            </a>
                        </li>
                        <li>
                            <a class=\"active\" href=\"#order-complete\" data-toggle=\"tab\">
                                <span>04</span>
                                Order complete
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-10\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <!-- shopping-cart start -->
                        <div class=\"tab-pane\" id=\"shopping-cart\">
                            <div class=\"shopping-cart-content\">
                                <form action=\"#\">
                                    <div class=\"table-content table-responsive mb-50\">
                                        <table class=\"text-center\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-thumbnail\">product</th>
                                                <th class=\"product-price\">price</th>
                                                <th class=\"product-quantity\">Quantity</th>
                                                <th class=\"product-subtotal\">total</th>
                                                <th class=\"product-remove\">remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/1.jpg') }}\" alt=\"\">

                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/2.jpg') }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/3.jpg') }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-quantity\">
                                                    <div class=\"cart-plus-minus f-left\">
                                                        <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\">
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\">\$1020.00</td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"coupon-discount box-shadow p-30 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">coupon discount</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <input type=\"text\" name=\"name\" placeholder=\"Enter your code here.\">
                                                <button class=\"submit-btn-1 black-bg btn-hover-2\" type=\"submit\">apply coupon</button>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"payment-details box-shadow p-30 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">payment details</h6>
                                                <table>
                                                    <tr>
                                                        <td class=\"td-title-1\">Cart Subtotal</td>
                                                        <td class=\"td-title-2\">\$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Shipping and Handing</td>
                                                        <td class=\"td-title-2\">\$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Vat</td>
                                                        <td class=\"td-title-2\">\$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"order-total\">Order Total</td>
                                                        <td class=\"order-total-price\">\$170.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"culculate-shipping box-shadow p-30\">
                                                <h6 class=\"widget-title border-left mb-20\">culculate shipping</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <div class=\"row\">
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Country\">
                                                    </div>
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Region / State\">
                                                    </div>
                                                    <div class=\"col-sm-4 col-xs-12\">
                                                        <input type=\"text\"  placeholder=\"Post code\">
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <button class=\"submit-btn-1 black-bg btn-hover-2\">get a quote</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                        <!-- wishlist start -->
                        <div class=\"tab-pane\" id=\"wishlist\">
                            <div class=\"wishlist-content\">
                                <form action=\"#\">
                                    <div class=\"table-content table-responsive mb-50\">
                                        <table class=\"text-center\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-thumbnail\">product</th>
                                                <th class=\"product-price\">price</th>
                                                <th class=\"product-stock\">Stock status</th>
                                                <th class=\"product-add-cart\">add to cart</th>
                                                <th class=\"product-remove\">remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/1.jpg') }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/2.jpg') }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td class=\"product-thumbnail\">
                                                    <div class=\"pro-thumbnail-img\">
                                                        <img src=\"{{ asset('front/assets/img/cart/3.jpg') }}\" alt=\"\">
                                                    </div>
                                                    <div class=\"pro-thumbnail-info text-left\">
                                                        <h6 class=\"product-title-2\">
                                                            <a href=\"#\">dummy product name</a>
                                                        </h6>
                                                        <p>Brand: Brand Name</p>
                                                        <p>Model: Grand s2</p>
                                                        <p> Color: Black, White</p>
                                                    </div>
                                                </td>
                                                <td class=\"product-price\">\$560.00</td>
                                                <td class=\"product-stock text-uppercase\">in stoct</td>
                                                <td class=\"product-add-cart\">
                                                    <a href=\"#\" title=\"Add To Cart\">
                                                        <i class=\"zmdi zmdi-shopping-cart-plus\"></i>
                                                    </a>
                                                </td>
                                                <td class=\"product-remove\">
                                                    <a href=\"#\"><i class=\"zmdi zmdi-close\"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wishlist end -->
                        <!-- checkout start -->
                        <div class=\"tab-pane\" id=\"checkout\">
                            <div class=\"checkout-content box-shadow p-30\">
                                <form action=\"#\">
                                    <div class=\"row\">
                                        <!-- billing details -->
                                        <div class=\"col-md-6\">
                                            <div class=\"billing-details pr-10\">
                                                <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                                <input type=\"text\"  placeholder=\"Your Name Here...\">
                                                <input type=\"text\"  placeholder=\"Email address here...\">
                                                <input type=\"text\"  placeholder=\"Phone here...\">
                                                <input type=\"text\"  placeholder=\"Company neme here...\">
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">country</option>
                                                    <option value=\"c-1\">Australia</option>
                                                    <option value=\"c-2\">Bangladesh</option>
                                                    <option value=\"c-3\">Unitd States</option>
                                                    <option value=\"c-4\">Unitd Kingdom</option>
                                                </select>
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">State</option>
                                                    <option value=\"c-1\">Melbourne</option>
                                                    <option value=\"c-2\">Dhaka</option>
                                                    <option value=\"c-3\">New York</option>
                                                    <option value=\"c-4\">London</option>
                                                </select>
                                                <select class=\"custom-select\">
                                                    <option value=\"defalt\">Town/City</option>
                                                    <option value=\"c-1\">Victoria</option>
                                                    <option value=\"c-2\">Chittagong</option>
                                                    <option value=\"c-3\">Boston</option>
                                                    <option value=\"c-4\">Cambridge</option>
                                                </select>
                                                <textarea class=\"custom-textarea\" placeholder=\"Your address here...\"></textarea>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <!-- our order -->
                                            <div class=\"payment-details pl-10 mb-50\">
                                                <h6 class=\"widget-title border-left mb-20\">our order</h6>
                                                <table>
                                                    <tr>
                                                        <td class=\"td-title-1\">Dummy Product Name x 2</td>
                                                        <td class=\"td-title-2\">\$1855.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Dummy Product Name</td>
                                                        <td class=\"td-title-2\">\$555.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Cart Subtotal</td>
                                                        <td class=\"td-title-2\">\$2410.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Shipping and Handing</td>
                                                        <td class=\"td-title-2\">\$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"td-title-1\">Vat</td>
                                                        <td class=\"td-title-2\">\$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"order-total\">Order Total</td>
                                                        <td class=\"order-total-price\">\$2425.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- payment-method -->
                                            <div class=\"payment-method\">
                                                <h6 class=\"widget-title border-left mb-20\">payment method</h6>
                                                <div id=\"accordion\">
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#bank-transfer\" >
                                                                direct bank transfer
                                                            </a>
                                                        </h4>
                                                        <div id=\"bank-transfer\" class=\"panel-collapse collapse in\" >
                                                            <div class=\"payment-content\">
                                                                <p>Lorem Ipsum is simply in dummy text of the printing and type setting industry. Lorem Ipsum has been.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
                                                                cheque payment
                                                            </a>
                                                        </h4>
                                                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                                            <div class=\"payment-content\">
                                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"panel\">
                                                        <h4 class=\"payment-title box-shadow\">
                                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" >
                                                                paypal
                                                            </a>
                                                        </h4>
                                                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" >
                                                            <div class=\"payment-content\">
                                                                <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                                <ul class=\"payent-type mt-10\">
                                                                    <li><a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/1.png') }}\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/2.png') }}\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/3.png') }}\" alt=\"\"></a></li>
                                                                    <li><a href=\"#\"><img src=\"{{ asset('front/assets/img/payment/4.png') }}\" alt=\"\"></a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- payment-method end -->
                                            <button class=\"submit-btn-1 mt-30 btn-hover-1\" type=\"submit\">place order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- checkout end -->
                        <!-- order-complete start -->
                        <div class=\"tab-pane active\" id=\"order-complete\">
                            <div class=\"order-complete-content box-shadow\">
                                <div class=\"thank-you p-30 text-center\">
                                    <h6 class=\"text-black-5 mb-0\">Thank you. Your order has been received.</h6>
                                </div>
                                <div class=\"order-info p-30 mb-10\">
                                    <ul class=\"order-info-list\">
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"row\">
                                    <!-- our order -->
                                    <div class=\"col-md-6\">
                                        <div class=\"payment-details p-30\">
                                            <h6 class=\"widget-title border-left mb-20\">our order</h6>
                                            <table>
                                                <tr>
                                                    <td class=\"td-title-1\">Dummy Product Name x 2</td>
                                                    <td class=\"td-title-2\">\$1855.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Dummy Product Name</td>
                                                    <td class=\"td-title-2\">\$555.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Cart Subtotal</td>
                                                    <td class=\"td-title-2\">\$2410.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Shipping and Handing</td>
                                                    <td class=\"td-title-2\">\$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"td-title-1\">Vat</td>
                                                    <td class=\"td-title-2\">\$00.00</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"order-total\">Order Total</td>
                                                    <td class=\"order-total-price\">\$2425.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"bill-details p-30\">
                                            <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                            <ul class=\"bill-address\">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"bill-details pl-30\">
                                            <h6 class=\"widget-title border-left mb-20\">billing details</h6>
                                            <ul class=\"bill-address\">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order-complete end -->
                    </div>
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
                                    <img src=\"{{ asset('front/assets/img/logo/logoo.png') }}\" alt=\"\">
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
{% endblock %}", "@Front/Default/order.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\order.html.twig");
    }
}
