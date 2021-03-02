<?php


namespace App\src\model;

class Site 
{
    private $idSite;
    private $libSite;
    private $ad1Site;
    private $postSite;
    private $villeSite;
    private $idPays;
    private $telSite;
    private $faxSite;
    private $idResp;
    private $siretSite;
    private $dtsync;

    /**
     * @return mixed
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * @return mixed
     */
    public function getLibSite()
    {
        return $this->libSite;
    }

    /**
     * @param mixed $libSite
     */
    public function setLibSite($libSite)
    {
        $this->libSite = $libSite;
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
    public function getAd1Site()
    {
        return $this->ad1Site;
    }

    /**
     * @param mixed $ad1Site
     */
    public function setAd1Site($ad1Site)
    {
        $this->ad1Site = $ad1Site;
    }

    /**
     * @return mixed
     */
    public function getPostSite()
    {
        return $this->postSite;
    }

    /**
     * @param mixed $postSite
     */
    public function setPostSite($postSite)
    {
        $this->postSite = $postSite;
    }

    /**
     * @return mixed
     */
    public function getVilleSite()
    {
        return $this->villeSite;
    }

    /**
     * @param mixed $villeSite
     */
    public function setVilleSite($villeSite)
    {
        $this->villeSite = $villeSite;
    }

    /**
     * @return mixed
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * @param mixed $idPays
     */
    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;
    }

    /**
     * @return mixed
     */
    public function getTelSite()
    {
        return $this->telSite;
    }

    /**
     * @param mixed $telSite
     */
    public function setTelSite($telSite)
    {
        $this->telSite = $telSite;
    }

    /**
     * @return mixed
     */
    public function getFaxSite()
    {
        return $this->faxSite;
    }

    /**
     * @param mixed $faxSite
     */
    public function setFaxSite($faxSite)
    {
        $this->faxSite = $faxSite;
    }

    /**
     * @return mixed
     */
    public function getIdResp()
    {
        return $this->idResp;
    }

    /**
     * @param mixed $idResp
     */
    public function setIdResp($idResp)
    {
        $this->idResp = $idResp;
    }

    /**
     * @return mixed
     */
    public function getSiretSite()
    {
        return $this->siretSite;
    }

    /**
     * @param mixed $siretSite
     */
    public function setSiretSite($siretSite)
    {
        $this->siretSite = $siretSite;
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