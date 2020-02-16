<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Front/Default/index.html.twig');
    }
    public function shopAction()
    {
        return $this->render('@Front/Default/product.html.twig');
    }
    public function orderAction()
    {
        return $this->render('@Front/Default/order.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('@Front/Default/about.html.twig');
    }
    public function contactAction()
    {
        return $this->render('@Front/Default/contact.html.twig');
    }
    public function loginAction()
    {
        return $this->render('@Front/Default/login.html.twig');
    }
    public function accountAction()
    {
        return $this->render('@Front/Default/my_account.html.twig');
    }
    public function checkoutAction()
    {
        return $this->render('@Front/Default/checkout.html.twig');
    }
    public function cartAction()
    {
        return $this->render('@Front/Default/cart.html.twig');
    }
    public function wishlistAction()
    {
        return $this->render('@Front/Default/wishlist.html.twig');
    }
    public function single_productAction()
    {
        return $this->render('@Front/Default/single_product.html.twig');
    }
}
