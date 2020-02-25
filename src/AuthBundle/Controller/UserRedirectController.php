<?php

namespace AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserRedirectController extends Controller
{
    public function userRedirectAction()
    {
        if($this->getUser()->hasRole('ROLE_SUPER_ADMIN'))
            return $this->redirect($this->generateUrl('dashboard_homepage'));

        elseif($this->getUser()->hasRole('ROLE_CLIENT'))
            return $this->redirect($this->generateUrl('front_homepage'));
        elseif($this->getUser()->hasRole('ROLE_DELIVERY_MANAGER'))
            return $this->redirect($this->generateUrl('liste_livraison'));

    }

    public function redirectToLoginAction()
    {
        return $this->redirectToRoute('fos_user_security_login');
    }

}
