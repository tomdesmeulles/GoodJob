<?php

namespace Ens\CvBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\CvBundle\Entity\CategoryCv;
 
class LoadCategoryCvData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $design = new CategoryCv();
    $design->setName('Design');
 
    $programming = new CategoryCv();
    $programming->setName('Programming');
 
    $manager = new CategoryCv();
    $manager->setName('Manager');
 
    $administrator = new CategoryCv();
    $administrator->setName('Administrator');
 
    $em->persist($design);
    $em->persist($programming);
    $em->persist($manager);
    $em->persist($administrator);
 
    $em->flush();
 
    $this->addReference('CategoryCv-design', $design);
    $this->addReference('CategoryCv-programming', $programming);
    $this->addReference('CategoryCv-manager', $manager);
    $this->addReference('CategoryCv-administrator', $administrator);
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}