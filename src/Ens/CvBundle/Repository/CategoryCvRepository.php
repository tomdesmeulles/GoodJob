<?php

namespace Ens\CvBundle\Repository;
use Doctrine\ORM\EntityRepository;
 
class CategoryCvRepository extends EntityRepository
{
  public function getWithCvs()
  {
    $query = $this->getEntityManager()->createQuery(
      'SELECT c FROM EnsCvBundle:CategoryCv c LEFT JOIN c.cvs j WHERE j.expires_at > :date'
    )->setParameter('date', date('Y-m-d H:i:s', time()));
 
    return $query->getResult();
  }
}