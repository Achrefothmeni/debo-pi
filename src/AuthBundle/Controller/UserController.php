<?php

namespace AuthBundle\Controller;

use AuthBundle\Entity\User;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function getAllUsersAction()
    {
        $users=$this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return $this->render('@Auth/Default/liste_utilisateur.html.twig', array('users' => $users));
    }

    public function addUserAction($user_type, Request $request)
    {
        if ($request->isMethod('POST')) {
            $em=$this->getDoctrine()->getManager();
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            /** @var $userManager UserManagerInterface */
            $user = new User();
            $user->setEnabled(true);
            $user->setEmail($request->request->get('email'));
            $user->setUsername($request->request->get('username'));
            $user->setPlainPassword($request->request->get('password'));
            $user->setNom($request->request->get('first_name'));
            $user->setPrenom($request->request->get('last_name'));
            if ($user_type=="client" || $user_type=="fournisseur"){
                $user->setMatFiscal($request->request->get('mat_fiscale'));
                if($user_type=="client"){
                    $user->setRoles(array('ROLE_USER'));
                }
                else{
                    $user->setRoles(array('ROLE_FOURNISSEUR'));
                }
            }
            else {
                $user->setRoles(array($request->request->get('role')));
            }
            $snappy = $this->get("knp_snappy.pdf");
            $filename = $user->getUsername()."_login_credentials";
            $userManager->updateUser($user);
            $html = $this->renderView('@Auth/Default/user_credentials.html.twig', array('nom' => $request->request->get('first_name'),
                'prenom' => $request->request->get('last_name'),
                'username' => $request->request->get('username'),
                'pwd' => $request->request->get('password')));
            //return $this->redirectToRoute('users_list');
            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'content-type' => 'application/pdf',
                    'content-disposition' => 'inline; filename="'.$filename.'.pdf"'
                )
            );
        }
        else
        return $this->render('@Auth/Default/add_user.html.twig', array('user_type' => $user_type));
    }
}
