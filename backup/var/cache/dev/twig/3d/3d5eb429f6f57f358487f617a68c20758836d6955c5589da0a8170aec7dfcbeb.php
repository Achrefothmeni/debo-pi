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

/* @Front/Default/my_account.html.twig */
class __TwigTemplate_31a1980bc717f96979e8e217a027983c771624e01183afa72dab0a5a48eaca84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/my_account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/my_account.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "@Front/Default/my_account.html.twig", 1);
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

        echo "Debo - Account";
        
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
        echo "<div id=\"page-content\" class=\"page-wrapper\">

    <!-- LOGIN SECTION START -->
    <div class=\"login-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"my-account-content\" id=\"accordion2\">
                        <!-- My Personal Information -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#personal_info\">My Personal Information</a>
                                </h4>
                            </div>
                            <div id=\"personal_info\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers\">
                                            <div class=\"p-30\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"First Name\">
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"last Name\">
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">country</option>
                                                            <option value=\"c-1\">Australia</option>
                                                            <option value=\"c-2\">Bangladesh</option>
                                                            <option value=\"c-3\">Unitd States</option>
                                                            <option value=\"c-4\">Unitd Kingdom</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">State</option>
                                                            <option value=\"c-1\">Melbourne</option>
                                                            <option value=\"c-2\">Dhaka</option>
                                                            <option value=\"c-3\">New York</option>
                                                            <option value=\"c-4\">London</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">Town/City</option>
                                                            <option value=\"c-1\">Victoria</option>
                                                            <option value=\"c-2\">Chittagong</option>
                                                            <option value=\"c-3\">Boston</option>
                                                            <option value=\"c-4\">Cambridge</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"Phone here...\">
                                                    </div>
                                                </div>
                                                <input type=\"text\"  placeholder=\"Company neme here...\">
                                                <input type=\"text\"  placeholder=\"Email address here...\">
                                                <input type=\"password\"  placeholder=\"Password\">
                                                <input type=\"password\"  placeholder=\"Confirm Password\">
                                                <textarea class=\"custom-textarea\" placeholder=\"Additional information...\"></textarea>
                                                <div class=\"checkbox\">
                                                    <label class=\"mr-10\">
                                                        <small>
                                                            <input type=\"checkbox\" name=\"signup\">I wish to subscribe to the 69 Fashion newsletter.
                                                        </small>
                                                    </label>
                                                    <br>
                                                    <label>
                                                        <small>
                                                            <input type=\"checkbox\" name=\"signup\">I have read and agree to the <a href=\"#\">Privacy Policy</a>
                                                        </small>
                                                    </label>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My shipping address -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#my_shipping\">My shipping address</a>
                                </h4>
                            </div>
                            <div id=\"my_shipping\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers p-30\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"First Name\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"last Name\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">country</option>
                                                        <option value=\"c-1\">Australia</option>
                                                        <option value=\"c-2\">Bangladesh</option>
                                                        <option value=\"c-3\">Unitd States</option>
                                                        <option value=\"c-4\">Unitd Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">State</option>
                                                        <option value=\"c-1\">Melbourne</option>
                                                        <option value=\"c-2\">Dhaka</option>
                                                        <option value=\"c-3\">New York</option>
                                                        <option value=\"c-4\">London</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Town/City</option>
                                                        <option value=\"c-1\">Victoria</option>
                                                        <option value=\"c-2\">Chittagong</option>
                                                        <option value=\"c-3\">Boston</option>
                                                        <option value=\"c-4\">Cambridge</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Phone here...\">
                                                </div>
                                            </div>
                                            <input type=\"text\"  placeholder=\"Company neme here...\">
                                            <input type=\"text\"  placeholder=\"Email address here...\">
                                            <textarea class=\"custom-textarea\" placeholder=\"Additional information...\"></textarea>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My billing details -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#billing_address\">My billing details</a>
                                </h4>
                            </div>
                            <div id=\"billing_address\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"billing-details p-30\">
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
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My Order info -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#My_order_info\">My Order info</a>
                                </h4>
                            </div>
                            <div id=\"My_order_info\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <!-- our order -->
                                        <div class=\"payment-details p-30\">
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
                                            <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Method -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#My_payment_method\">Payment Method</a>
                                </h4>
                            </div>
                            <div id=\"My_payment_method\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers p-30\">
                                            <select class=\"custom-select\">
                                                <option value=\"defalt\">Card Type</option>
                                                <option value=\"c-1\">Master Card</option>
                                                <option value=\"c-2\">Paypal</option>
                                                <option value=\"c-3\">Paypal</option>
                                                <option value=\"c-4\">Paypal</option>
                                            </select>
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Card Number\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Card Security Code\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Month</option>
                                                        <option value=\"c-1\">January</option>
                                                        <option value=\"c-2\">February</option>
                                                        <option value=\"c-3\">March</option>
                                                        <option value=\"c-4\">April</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Year</option>
                                                        <option value=\"c-4\">2017</option>
                                                        <option value=\"c-1\">2016</option>
                                                        <option value=\"c-2\">2015</option>
                                                        <option value=\"c-3\">2014</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">pay now</button>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">cancel order</button>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 f-right btn-hover-1\" type=\"submit\" value=\"register\">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
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
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/payment/3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li>
                                    <a href=\"#\"><img src=\"";
        // line 450
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
        return "@Front/Default/my_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 450,  530 => 447,  524 => 444,  518 => 441,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block title %}Debo - Account{% endblock %}
{% block body %}
<div id=\"page-content\" class=\"page-wrapper\">

    <!-- LOGIN SECTION START -->
    <div class=\"login-section mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"my-account-content\" id=\"accordion2\">
                        <!-- My Personal Information -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#personal_info\">My Personal Information</a>
                                </h4>
                            </div>
                            <div id=\"personal_info\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers\">
                                            <div class=\"p-30\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"First Name\">
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"last Name\">
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">country</option>
                                                            <option value=\"c-1\">Australia</option>
                                                            <option value=\"c-2\">Bangladesh</option>
                                                            <option value=\"c-3\">Unitd States</option>
                                                            <option value=\"c-4\">Unitd Kingdom</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">State</option>
                                                            <option value=\"c-1\">Melbourne</option>
                                                            <option value=\"c-2\">Dhaka</option>
                                                            <option value=\"c-3\">New York</option>
                                                            <option value=\"c-4\">London</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <select class=\"custom-select\">
                                                            <option value=\"defalt\">Town/City</option>
                                                            <option value=\"c-1\">Victoria</option>
                                                            <option value=\"c-2\">Chittagong</option>
                                                            <option value=\"c-3\">Boston</option>
                                                            <option value=\"c-4\">Cambridge</option>
                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\"  placeholder=\"Phone here...\">
                                                    </div>
                                                </div>
                                                <input type=\"text\"  placeholder=\"Company neme here...\">
                                                <input type=\"text\"  placeholder=\"Email address here...\">
                                                <input type=\"password\"  placeholder=\"Password\">
                                                <input type=\"password\"  placeholder=\"Confirm Password\">
                                                <textarea class=\"custom-textarea\" placeholder=\"Additional information...\"></textarea>
                                                <div class=\"checkbox\">
                                                    <label class=\"mr-10\">
                                                        <small>
                                                            <input type=\"checkbox\" name=\"signup\">I wish to subscribe to the 69 Fashion newsletter.
                                                        </small>
                                                    </label>
                                                    <br>
                                                    <label>
                                                        <small>
                                                            <input type=\"checkbox\" name=\"signup\">I have read and agree to the <a href=\"#\">Privacy Policy</a>
                                                        </small>
                                                    </label>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My shipping address -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#my_shipping\">My shipping address</a>
                                </h4>
                            </div>
                            <div id=\"my_shipping\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers p-30\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"First Name\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"last Name\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">country</option>
                                                        <option value=\"c-1\">Australia</option>
                                                        <option value=\"c-2\">Bangladesh</option>
                                                        <option value=\"c-3\">Unitd States</option>
                                                        <option value=\"c-4\">Unitd Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">State</option>
                                                        <option value=\"c-1\">Melbourne</option>
                                                        <option value=\"c-2\">Dhaka</option>
                                                        <option value=\"c-3\">New York</option>
                                                        <option value=\"c-4\">London</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Town/City</option>
                                                        <option value=\"c-1\">Victoria</option>
                                                        <option value=\"c-2\">Chittagong</option>
                                                        <option value=\"c-3\">Boston</option>
                                                        <option value=\"c-4\">Cambridge</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Phone here...\">
                                                </div>
                                            </div>
                                            <input type=\"text\"  placeholder=\"Company neme here...\">
                                            <input type=\"text\"  placeholder=\"Email address here...\">
                                            <textarea class=\"custom-textarea\" placeholder=\"Additional information...\"></textarea>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My billing details -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#billing_address\">My billing details</a>
                                </h4>
                            </div>
                            <div id=\"billing_address\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"billing-details p-30\">
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
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1 f-right\" type=\"reset\">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My Order info -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#My_order_info\">My Order info</a>
                                </h4>
                            </div>
                            <div id=\"My_order_info\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <!-- our order -->
                                        <div class=\"payment-details p-30\">
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
                                            <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Method -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#My_payment_method\">Payment Method</a>
                                </h4>
                            </div>
                            <div id=\"My_payment_method\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
                                <div class=\"panel-body\">
                                    <form action=\"#\">
                                        <div class=\"new-customers p-30\">
                                            <select class=\"custom-select\">
                                                <option value=\"defalt\">Card Type</option>
                                                <option value=\"c-1\">Master Card</option>
                                                <option value=\"c-2\">Paypal</option>
                                                <option value=\"c-3\">Paypal</option>
                                                <option value=\"c-4\">Paypal</option>
                                            </select>
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Card Number\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <input type=\"text\"  placeholder=\"Card Security Code\">
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Month</option>
                                                        <option value=\"c-1\">January</option>
                                                        <option value=\"c-2\">February</option>
                                                        <option value=\"c-3\">March</option>
                                                        <option value=\"c-4\">April</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <select class=\"custom-select\">
                                                        <option value=\"defalt\">Year</option>
                                                        <option value=\"c-4\">2017</option>
                                                        <option value=\"c-1\">2016</option>
                                                        <option value=\"c-2\">2015</option>
                                                        <option value=\"c-3\">2014</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">pay now</button>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 btn-hover-1\" type=\"submit\" value=\"register\">cancel order</button>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <button class=\"submit-btn-1 mt-20 f-right btn-hover-1\" type=\"submit\" value=\"register\">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
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
{% endblock %}", "@Front/Default/my_account.html.twig", "C:\\xampp\\htdocs\\debo-pi\\src\\FrontBundle\\Resources\\views\\Default\\my_account.html.twig");
    }
}
