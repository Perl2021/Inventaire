<?php
namespace App\src\model;

class Statut
{
    private $idStatut;
    private $libStatut;
    private $dtsync;
    private $choix;
    private $codeStatut;
  
    /** 
    * @return mixed
    */
   public function getIdStatut()
   {
       return $this->idStatut;
   }

   /**
    * @param mixed $idStatut
    */
   public function setIdStatut($idStatut)
   {
       $this->idStatut = $idStatut;
   }

   /**
    * @return mixed
    */
   public function getLibStatut()
   {
       return $this->libStatut;
   }

   /**
    * @param mixed $libStatut
    */
   public function setLibStatut($libStatut)
   {
       $this->libStatut = $libStatut;
   }

   /**
    * @return mixed
    */
   public function getDtsync()
   {
       return $this->dtsync;
   }

   /**
    * @param mixed $dtsync
    */
   public function setDtsync($dtsync)
   {
       $this->dtsync = $dtsync;
   }

   /**
    * @return mixed
    */
   public function getChoix()
   {
       return $this->choix;
   }

   /**
    * @param mixed $choix
    */
   public function setChoix($choix)
   {
       $this->choix = $choix;
   }

   /**
    * @return mixed
    */
   public function getCodeStatut()
   {
       return $this->codeStatut;
   }

   /**
    * @param mixed $codeStatut
    */
   public function setCodeStatut($codeStatut)
   {
       $this->codeStatut = $codeStatut;
   }
}