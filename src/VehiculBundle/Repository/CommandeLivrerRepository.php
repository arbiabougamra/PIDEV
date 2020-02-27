<?php

namespace VehiculBundle\Repository;

/**
 * CommandeLivrerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeLivrerRepository extends \Doctrine\ORM\EntityRepository
{
    public function findupdateDispoDQL($id){
        $query=$this->getEntityManager()
            ->createQuery("SELECT m from VehiculBundle:Vehicule m WHERE m.matricule=:idv")
            ->setParameter('idv',$id);
        return $query->getResult();
    }
}