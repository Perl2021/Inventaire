<?php
namespace App\src\controller;
use App\config\Parameter;
use App\src\DAO\FretDAO;
// classe back controller qui contient toute les fonctions qui vont permettre de traiter les données envoyer par l'utilisateur
class BackController extends Controller
{


    //méthode pour l'ajouter de bateau via le formulaire dédié
    public function formulaireBateau(Parameter $post)
    {


        if($post->get('submit')){
            $this->bateauDAO->ajouterBateau($post);
            $this->session->set('ajouter_bateau', 'Le nouveau bateau a bien été ajouté');
            header('Location: ../public/index.php');
        }
        return $this->view->render('ajouter_bateau', array(
          
        ));
    }
}