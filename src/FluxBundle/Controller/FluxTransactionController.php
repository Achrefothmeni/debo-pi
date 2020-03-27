<?php

namespace FluxBundle\Controller;

use ArticleBundle\Controller\ArticleController;
use AuthBundle\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart\PieSlice;
use CommandeBundle\Controller\CommandeController;
use CommandeBundle\Entity\lignecommande;
use FluxBundle\Entity\Facture;
use FluxBundle\Entity\FluxTransactions;
use CommandeBundle\Entity\Commande;
use ArticleBundle\Entity\Article;
use LivraisonBundle\Entity\Livraison;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FluxTransactionController extends Controller
{

    public function fluxHomeAction()
    {
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();
        return $this->render('@Flux/Default/afficher_caisse.html.twig',
            array('transactions'=>$transactions,
            'commandes'=> $commandes,
            'nb'=>0));
    }


    public function genererFactureAction($id)
    {
        $em=$this->getDoctrine()->getManager();

        $commande = $em->getRepository(Commande::class)->find($id);
        $lignecommandes = $em->getRepository(lignecommande::class)->findBy(array('idCommande' => $commande));
        $html =  $this->renderView('@Flux/default/afficherfacture.html.twig', array(
            'lignecommandes' => $lignecommandes,
            'commande' => $commande
        ));
        $snappy = $this->get("knp_snappy.pdf");
        $filename = "facture";
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'content-type' => 'application/pdf',
                'content-disposition' => 'inline; filename="'.$filename.'.pdf"'
            )
        );


    }

    public function getTransactionByDateAction(Request $request){
        $date = $request->request->get('date_t');
        $date= date_create($date);
        $transactions = $this->getDoctrine()->getRepository(FluxTransactions::class)->findBy(array('date'=>$date));
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('@Flux/default/liste_transactions_by_date.html.twig', array(
            'transactions' => $transactions,
            'commandes' => $commandes
        ));
        
    }



    public function getTransactionByNatureAction($nature){
        $em=$this->getDoctrine()->getManager();
        $transactions = $em->getRepository(FluxTransactions::class)->findBy(array('nature'=>$nature));
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('@Flux/default/liste_transactions_by_nature.html.twig', array(
            'transactions' => $transactions,
            'commandes' => $commandes
        ));

    }


    public function statistiquesAction() {
        $pieChart = new PieChart();
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        $nbTransactionsTot = 0;
        $nbTransactionsC = 0;
        $nbTransactionsD = 0;
        $nbTransactions0_500=0;
        $nbTransactions500_1000=0;
        $nbTransactions1000_2000=0;
        $nbTransactions2000=0;
        foreach($transactions as $transaction) {
            $nbTransactionsTot++;
            if ($transaction->getNature()=='C')
                $nbTransactionsC++;
            else
                $nbTransactionsD++;
            if($transaction->getSomme() <= 500)
                $nbTransactions0_500++;
            elseif ($transaction->getSomme() > 500 && $transaction->getSomme() <= 1000)
                $nbTransactions500_1000++;
            elseif ($transaction->getSomme() > 1000 && $transaction->getSomme() <= 2000)
                $nbTransactions1000_2000++;
            else $nbTransactions2000++;
        }

        $pieChart->getData()->setArrayToDataTable(
            [
                ['',''],
                ['CREDIT', $nbTransactionsC/$nbTransactionsTot],
                ['DEBIT', $nbTransactionsD/$nbTransactionsTot]
            ]
        );

        //$pieChart->getOptions()->getLegend()->setPosition('none');
        //$pieChart->getOptions()->setTitle('Nombre de transactions');
        $pieChart->getOptions()->setHeight(300);
        $pieChart->getOptions()->setWidth(400);

        $histo = new Histogram();
        $histo->getData()->setArrayToDataTable([
            ['Somme', 'Dinars'],
            ['0_500', $nbTransactions0_500],
            ['500_1000', $nbTransactions500_1000],
            ['1000_2000', $nbTransactions1000_2000],
            ['+2000', $nbTransactions2000],
        ]);

        $histo->getOptions()->setTitle('Nombre de transactions');
        $histo->getOptions()->setWidth(500);
        $histo->getOptions()->setHeight(400);
        $histo->getOptions()->getLegend()->setPosition('none');
        $histo->getOptions()->setColors(['green']);

        return $this->render('@Flux/default/statistiques.html.twig',array(
            'piechart' => $pieChart,
            'histogram' => $histo));

    }



    public function generateExcelFileAction(){
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        return $this->render('@Flux/default/transaction.xlsx.twig',array(
            'transactions' => $transactions));
    }
    public function searchAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $query = "select * from flux_transactions where flux_transactions.somme >= :min and flux_transactions.somme <= :max and flux_transactions.nature = :nature";
        //$query2 = "select * from flux_transactions";
        $statement = $em->getConnection()->prepare($query);
        $statement->bindValue('min', (int)$request->request->get('min'));
        $statement->bindValue('max', (int)$request->request->get('max'));
        $statement->bindValue('nature', $request->request->get('nature2'));
        $statement->execute();

        $transactions = $statement->fetchAll();
        $nb=0;

        foreach ($transactions as $t){
            $nb++;
        }

        /*$transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findBy(array('nature'=>$request->request->get('nature2')));*/

        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();
        return $this->render('@Flux/Default/afficher_caisse.html.twig',
            array('transactions'=>$transactions,
                'commandes'=> $commandes,
                ));
    }

    public function search2Action(Request $request) {

        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findBy(array('nature'=>'C', 'somme'=>$request->request->get('somme2')));

        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('@Flux/Default/afficher_caisse.html.twig',
            array('transactions'=>$transactions,
                'commandes'=> $commandes
                ));

    }

}
