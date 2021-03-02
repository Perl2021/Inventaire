<?php
    namespace App\src\DAO;
    use App\config\Parameter;
    use App\src\model\Site;

    class SiteDAO extends DAO{

        private function buildObjectSite($row){
            $site=new Site();
            $site->setLibSite($row['LIB_SITE']);
            $site->setIdSite($row['ID_SITE']);

            return $site;
        }

        public function getSite()
        {
            $sql="SELECT 
                     SITE.ID_SITE ,
                     SITE.LIB_SITE                               
                  FROM 
                     SITE                                                    
                  ORDER BY  LIB_SITE";
            $resultat=$this->createQuery($sql, array());
            /*$site=$resultat->fetch();
            $resultat->closeCursor();
            $resultat=$this->buildObjectSite($site);
            return $resultat;*/
            $site = array();
            foreach ($resultat as $row){
                $siteId= $row['ID_SITE'];
                $site[$siteId] = $this->buildObjectSite($row);
            }
            $resultat->closeCursor();
            return $site;

        }
    }