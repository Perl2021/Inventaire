<?php

namespace App\src\controller;
use App\src\model\View;
use App\config\Request;
use App\src\DAO\PersonneDAO;
use App\src\DAO\SiteDAO;
use App\src\DAO\StatutDAO;


abstract class Controller
{

    protected $view;
    protected $get;
    protected $post;
    protected $session;
    protected $siteDAO;
    protected $statutDAO;
    protected $personneDAO;



    public function __construct()
    {

        $this->view= new View();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
        $this->siteDAO = new SiteDAO();
        $this->personneDAO=new PersonneDAO();
        $this->statutDAO=new StatutDAO();

    }
}
