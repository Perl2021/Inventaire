<?php
    namespace App\src\DAO;
    use App\config\Parameter;
    use    App\src\model\Statut;

    class StatutDAO extends DAO
{
    private function buildObjectStatut($row)
    {
        $statut= new Statut();
        $statut->setIdStatut($row['ID_STATUT']);
        $statut->setLibStatut($row['LIB_STATUT']);
        return $statut;
    }

    public function getStatut($statutMort)
    {
        $sql="SELECT  
                STATUT.ID_STATUT,
                STATUT.LIB_STATUT
              FROM 
                STATUT
              WHERE 
                STATUT.LIB_STATUT NOT STARTING ?                                       
              ORDER BY  STATUT.LIB_STATUT";
              $resultat=$this->createQuery($sql, array($statutMort));
              $statut = array();
              foreach ($statut as $row){
                  $statutId =$row['ID_STATUT'];
                  $statut[$statutId]=$this->buildObjectStatut($row);
              }
              $resultat->closeCursor();
              return $resultat;

    }
}