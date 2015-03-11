<?php
namespace Ens\CvBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\CvBundle\Entity\Cv;
 
class LoadcvData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $cv_sensio_labs = new cv();
    // $cv_sensio_labs->setCategoryCv($em->merge($this->getReference('CategoryCv-programming')));
    $cv_sensio_labs->setPhotoCv('Maphoto.gif');
    $cv_sensio_labs->setPrenom('prenom');
    $cv_sensio_labs->setNom('nom');
    $cv_sensio_labs->setAge('10/04/1988');
    $cv_sensio_labs->setEmail('tototiti@email.com');
    $cv_sensio_labs->setAdresse('9 rue du pres salle 14000 Caen');
    $cv_sensio_labs->setUrlFolio('wwww.tomdesmeulles.com');
    $cv_sensio_labs->setExpName('Vendeur chez Celio');
    $cv_sensio_labs->setEntreprise('Celio');
    $cv_sensio_labs->setDateDeb('10/01/2007');
    $cv_sensio_labs->setDateFin('10/01/2007');
    $cv_sensio_labs->setDescription('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_sensio_labs->setFormName('BTS Vente');
    $cv_sensio_labs->setUniv('Ecole de vente de Caen');
    $cv_sensio_labs->setDateDebForm('30/02/1998');
    $cv_sensio_labs->setDateFinForm('30/02/1998');
 
    $cv_extreme_sensio = new cv();
    // $cv_extreme_sensio->setCategoryCv($em->merge($this->getReference('CategoryCv-design')));
    $cv_extreme_sensio->setPhotoCv('Maphoto.gif');
    $cv_extreme_sensio->setPrenom('prenom');
    $cv_extreme_sensio->setNom('nom');
    $cv_extreme_sensio->setAge('10/04/1988');
    $cv_extreme_sensio->setEmail('tototiti@email.com');
    $cv_extreme_sensio->setAdresse('9 rue du pres salle 14000 Caen');
    $cv_extreme_sensio->setUrlFolio('wwww.tomdesmeulles.com');
    $cv_extreme_sensio->setExpName('Vendeur chez Celio');
    $cv_extreme_sensio->setEntreprise('Celio');
    $cv_extreme_sensio->setDateDeb('10/01/2007');
    $cv_extreme_sensio->setDateFin('10/01/2007');
    $cv_extreme_sensio->setDescription('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_extreme_sensio->setFormName('BTS Vente');
    $cv_extreme_sensio->setUniv('Ecole de vente de Caen');
    $cv_extreme_sensio->setDateDebForm('30/02/1998');
    $cv_extreme_sensio->setDateFinForm('30/02/1998');
 
    $em->persist($cv_sensio_labs);
    $em->persist($cv_extreme_sensio);
 
    $em->flush();
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}