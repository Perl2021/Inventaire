<?php 
namespace App\src\model;
use App\config\Request;
class View
{
    private $file;
    private $title;
    private $request;
    private $session;
// construteur  qui instancie la classe request et fait appel la méthode getSession()
    public function __construct()
    {
        $this->request = new Request();
        $this->session = $this->request->getSession();
    }
//  la fonction render permet d'eviter de réecrire à chaque fois le chemins des vues, elle prend en parametre le nom de la vue, et les variables à renvoyé dans un tableau
    public function render($template, $data = array())
    {
        $this->file='C:/wamp/www/AppInventaire/app/src/templates/'.$template.'.php';
        $content= $this->renderFile($this->file, $data);
        $view= $this->renderFile('C:/wamp/www/AppInventaire/app/src/templates/base.php',array(
                'title' => $this->title,
                'content' => $content
            ));

        echo $view;
    }
// cette fonction va chercher le fichier indiqué, elle renvoi vers une page d'erreur si le le fichier n'est pas trouvé
    private function renderFile($file, $data)
    {
        if(file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        header('Location: index.php?route=notFound');
    }

}