<?php

namespace Ens\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\JobeetBundle\Entity\Level;

class LoadLevelData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$debutant = new Level();
		$debutant->setNom('Debutant');
		
		$pro = new Level();
		$pro->setNom('Pro');
		
		$expert = new Level();
		$expert->setNom('Expert');
		
		$em->persist($debutant);
		$em->persist($pro);
		$em->persist($expert);
		
		$em->flush();
		
		$this->addReference('level-debutant', $debutant);
		$this->addReference('level-pro', $pro);
		$this->addReference('level-expert', $expert);
	}
	
	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}