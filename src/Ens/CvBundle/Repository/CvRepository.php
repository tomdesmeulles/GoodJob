<?php
namespace Ens\CvBundle\Repository;
use Doctrine\ORM\EntityRepository;
 
class CvRepository extends EntityRepository
{
	public function getActiveCvs($categoryCv_id = null, $max = null, $offset = null)
	{
		$qb = $this->createQueryBuilder('j')
		->where('j.expires_at > :date')
		->setParameter('date', date('Y-m-d H:i:s', time()))
		->orderBy('j.expires_at', 'DESC');

		if($max)
		{
			$qb->setMaxResults($max);
		}

		if($offset)
		{
			$qb->setFirstResult($offset);
		}

		if($categoryCv_id)
		{
			$qb->andWhere('j.categoryCv = :categoryCv_id')
			->setParameter('categoryCv_id', $categoryCv_id);
		}

		$query = $qb->getQuery();

		return $query->getResult();
	}





  public function countActiveCvs($categoryCv_id = null)
	{
	  $qb = $this->createQueryBuilder('j')
	    ->select('count(j.id)')
	    ->where('j.expires_at > :date')
	    ->setParameter('date', date('Y-m-d H:i:s', time()));
	 
	  if($categoryCv_id)
	  {
	    $qb->andWhere('j.categoryCv = :categoryCv_id')
	    ->setParameter('categoryCv_id', $categoryCv_id);
	  }
	 
	  $query = $qb->getQuery();
	 
	  return $query->getSingleScalarResult();
	}




}