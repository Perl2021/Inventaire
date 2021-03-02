<?php
namespace App\src\controller;
//specification de l'endroit ou se trouve les classes

// classe front controller qui continent toute les fonctions qui renvoient les vues avec leurs données
class FrontController extends Controller
{

// methode accueil qui relative à la page d'acccueil
    public function accueil()
    {  
      $site = $this->siteDAO->getSite();
      $personne= $this->personneDAO->getPersonne();
      $statut=$this->statutDAO->getStatut('MORT');
        return $this->view->render('accueil', array(
            'site'=>$site,
            'personne'=>$personne,
            'statut'=>$statut
        ));
    }
    // retourne les informatiuons de chaque bateau sur la page afficher bateau
    public function afficherBateau()
    {
        
        return $this->view->render('afficherbateau', array());
    }
}