<?php
namespace App\src\model;

class Personne
{
    private $idPers;
    private $nomPers;
    private $prenomPers;
    private $fonctionPers;
    private $tel1Pers;
    private $tel2Pers;
    private $mailPers;
    private $idService;
    private $idSite;
    private $numPers;
    private $progress;
    private $dtsync;
     
        /**
         * @return mixed
         */
        public function getIdPers()
        {
            return $this->idPers;
        }

        /**
         * @param mixed $idPers
         */
        public function setIdPers($idPers)
        {
            $this->idPers = $idPers;
        }

        /**
         * @return mixed
         */
        public function getNomPers()
        {
            return $this->nomPers;
        }

        /**
         * @param mixed $nomPers
         */
        public function setNomPers($nomPers)
        {
            $this->nomPers = $nomPers;
        }

        /**
         * @return mixed
         */
        public function getPrenomPers()
        {
            return $this->prenomPers;
        }

        /**
         * @param mixed $prenomPers
         */
        public function setPrenomPers($prenomPers)
        {
            $this->prenomPers = $prenomPers;
        }

        /**
         * @return mixed
         */
        public function getFonctionPers()
        {
            return $this->fonctionPers;
        }

        /**
         * @param mixed $fonctionPers
         */
        public function setFonctionPers($fonctionPers)
        {
            $this->fonctionPers = $fonctionPers;
        }

        /**
         * @return mixed
         */
        public function getTel1Pers()
        {
            return $this->tel1Pers;
        }

        /**
         * @param mixed $tel1Pers
         */
        public function setTel1Pers($tel1Pers)
        {
            $this->tel1Pers = $tel1Pers;
        }

        /**
         * @return mixed
         */
        public function getTel2Pers()
        {
            return $this->tel2Pers;
        }

        /**
         * @param mixed $tel2Pers
         */
        public function setTel2Pers($tel2Pers)
        {
            $this->tel2Pers = $tel2Pers;
        }

        /**
         * @return mixed
         */
        public function getMailPers()
        {
            return $this->mailPers;
        }

        /**
         * @param mixed $mailPers
         */
        public function setMailPers($mailPers)
        {
            $this->mailPers = $mailPers;
        }

        /**
         * @return mixed
         */
        public function getIdService()
        {
            return $this->idService;
        }

        /**
         * @param mixed $idService
         */
        public function setIdService($idService)
        {
            $this->idService = $idService;
        }

        /**
         * @return mixed
         */
        public function getIdSite()
        {
            return $this->idSite;
        }

        /**
         * @param mixed $idSite
         */
        public function setIdSite($idSite)
        {
            $this->idSite = $idSite;
        }

        /**
         * @return mixed
         */
        public function getNumPers()
        {
            return $this->numPers;
        }

        /**
         * @param mixed $numPers
         */
        public function setNumPers($numPers)
        {
            $this->numPers = $numPers;
        }

        /**
         * @return mixed
         */
        public function getProgress()
        {
            return $this->progress;
        }

        /**
         * @param mixed $progress
         */
        public function setProgress($progress)
        {
            $this->progress = $progress;
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
}