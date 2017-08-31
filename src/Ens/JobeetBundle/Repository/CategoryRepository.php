<?php

namespace Ens\JobeetBundle\Repository;


/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
	public function getWithJobs()
	{
	    $em = $this->getEntityManager();
	    $query = $em->createQuery(
		        'SELECT c FROM EnsJobeetBundle:Category c LEFT JOIN c.jobs j WHERE j.expiresAt > :date AND j.isActivated = :activated'
			        )->setParameter('date', date('Y-m-d H:i:s', time()))
			        ->setParameter('activated', 1);
		
	    return $query->getResult();
	  }
				
}
