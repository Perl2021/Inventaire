<?php 
namespace  App\config;
use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use App\src\controller\BackController;
use Exception;
class Router
    {
        private $frontController;
        private $errorController;
        private $backController;
        private $request;

        public function __construct()
        {
            $this->request = new Request();
            $this->frontController = new FrontController();
            $this->errorController = new ErrorController();
            $this->backController = new BackController();
        }
        
        public function run()
        {
            //$this->request->getSession()->set('test', 'jourdain');
            //var_dump($this->request->getSession()->get('test'));
            $route = $this->request->getGet()->get('route');
            try{
                if(isset($route))
                {
                    if($route=== 'accueil'){
                        $this->frontController->accueil();
                        
                    }
                    elseif($route=== 'afficherbateau') {
                        $this->frontController->afficherBateau();

                    }
                    elseif($route === 'ajouterbateau') {

                        $this->backController->formulaireBateau($this->request->getPost());

                    }else{
                        $this->errorController->pageNotFound();
                    }
                }
                else{
                    require '../index.php';
                }
            }
            catch (Exception $e)
            {
                $this->errorController->errorServer();
            }
        }
    }