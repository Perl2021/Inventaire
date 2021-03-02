<?php
    namespace App\src\DAO;
    use App\config\Parameter;
    use App\src\model\Personne;

    class PersonneDAO extends DAO
    {
        private function buildObjectPersonne($row)
        {
            $personne = new Personne();
            $personne->setIdPers($row['ID_PERS']);
            $personne->setNomPers($row['NOM_PERS']);
            $personne->setPrenomPers($row['PRENOM_PERS']);
            return $personne;

        }

        public function getPersonne()
        {
            $sql="SELECT  
                    PERSONNE.ID_PERS,
                    PERSONNE.NOM_PERS,
                    PERSONNE.PRENOM_PERS
                 FROM 
                        PERSONNE
                 WHERE 
                    PERSONNE.PROGRESS=1 
                 ORDER BY  PERSONNE.NOM_PERS, PERSONNE.PRENOM_PERS";
            $resultat=$this->createQuery($sql, array());
            $personne = array();
            foreach ($resultat as $row){
                $personneId= $row['ID_PERS'];
                $personne[$personneId] = $this->buildObjectPersonne($row);
            }
            $resultat->closeCursor();
            return $personne;
        }
    }