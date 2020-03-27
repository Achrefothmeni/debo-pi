<?php


namespace CommandeBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
class PanierController extends Controller
{

    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('@Commande/Panier/panier.html.twig', array('articles' => $articles));
    }

    public function ajouterAction(Request $request, $id)
    {

        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');
        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');

        } else
            if ($request->query->get('qte') != null) {
                $panier[$id] = $request->query->get('qte');
            } else if (!array_key_exists($id, $panier)) {
                $panier[$id] = 1;

            }

        $session->set('panier', $panier);


        return $this->redirect($this->generateUrl('panier'));

    }

    public function panierAction(Request $request)
    {
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier', array());


        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('ArticleBundle:Article')->findArray(array_keys($session->get('panier')));

        return $this->render('@Commande/panier/afficherPanier.html.twig', array('articles' => $article,
            'panier' => $session->get('panier')));

    }

    public function supprimerAction(Request $request, $id)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            unset($panier[$id]);
            $session->set('panier', $panier);

        }

        return $this->redirect($this->generateUrl('panier'));

    }
}
