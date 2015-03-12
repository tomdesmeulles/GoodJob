<?php
namespace Ens\CvBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\CvBundle\Entity\Cv;
 
class LoadCvData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
       $cv_sensio_labs = new cv();
    $cv_sensio_labs->setCategoryCv($em->merge($this->getReference('CategoryCv-programming')));
    $cv_sensio_labs->setPhotoCv('Maphoto.gif');
    $cv_sensio_labs->setPrenom('prenom');
    $cv_sensio_labs->setNom('nom');
    $cv_sensio_labs->setAge('10/04/1988');
    $cv_sensio_labs->setEmail('tototiti@email.com');
    $cv_sensio_labs->setAdresse('9 rue du pres salle 14000 Caen');
    $cv_sensio_labs->setUrlFolio('wwww.tomdesmeulles.com');
    $cv_sensio_labs->setPostRecherche('Developpeur');
    $cv_sensio_labs->setExpName1('Vendeur chez Celio');
    $cv_sensio_labs->setEntreprise1('Celio');
    $cv_sensio_labs->setDateDeb1('10/01/2007');
    $cv_sensio_labs->setDescription1('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');    
    $cv_sensio_labs->setExpName2('Vendeur chez nike');
    $cv_sensio_labs->setEntreprise2('nike');
    $cv_sensio_labs->setDateDeb2('10/01/2007');
    $cv_sensio_labs->setDescription2('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_sensio_labs->setExpName3('Vendeur chez addidas');
    $cv_sensio_labs->setEntreprise3('addidas');
    $cv_sensio_labs->setDateDeb3('10/01/2007');
    $cv_sensio_labs->setDescription3('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_sensio_labs->setFormName1('BTS Vente');
    $cv_sensio_labs->setUniv1('Ecole de vente de Caen');
    $cv_sensio_labs->setDateDebForm1('30/02/1998');
    $cv_sensio_labs->setFormDescription1('Descriptionde la formation voici');
    $cv_sensio_labs->setFormName2('BTS Vente');
    $cv_sensio_labs->setUniv2('Ecole de vente de Caen');
    $cv_sensio_labs->setDateDebForm2('30/02/1998');
    $cv_sensio_labs->setFormDescription2('Descriptionde la formation voici');
    $cv_sensio_labs->setFormName3('BTS Vente');
    $cv_sensio_labs->setUniv3('Ecole de vente de Caen');
    $cv_sensio_labs->setDateDebForm3('30/02/1998');
    $cv_sensio_labs->setFormDescription3('Descriptionde la formation voici');
    $cv_sensio_labs->setExpiresAt(new \DateTime('2015-10-10'));

    $cv_extreme_sensio = new cv();
    $cv_extreme_sensio->setCategoryCv($em->merge($this->getReference('CategoryCv-design')));
    $cv_extreme_sensio->setPhotoCv('Maphoto.gif');
    $cv_extreme_sensio->setPrenom('prenom');
    $cv_extreme_sensio->setNom('nom');
    $cv_extreme_sensio->setAge('10/04/1988');
    $cv_extreme_sensio->setEmail('tototiti@email.com');
    $cv_extreme_sensio->setAdresse('9 rue du pres salle 14000 Caen');
    $cv_extreme_sensio->setUrlFolio('wwww.tomdesmeulles.com');
    $cv_extreme_sensio->setPostRecherche('Developpeur');
    $cv_extreme_sensio->setExpName1('Vendeur chez Celio');
    $cv_extreme_sensio->setEntreprise1('Celio');
    $cv_extreme_sensio->setDateDeb1('10/01/2007');
    $cv_extreme_sensio->setDescription1('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');    
    $cv_extreme_sensio->setExpName2('Vendeur chez nike');
    $cv_extreme_sensio->setEntreprise2('nike');
    $cv_extreme_sensio->setDateDeb2('10/01/2007');
    $cv_extreme_sensio->setDescription2('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_extreme_sensio->setExpName3('Vendeur chez addidas');
    $cv_extreme_sensio->setEntreprise3('addidas');
    $cv_extreme_sensio->setDateDeb3('10/01/2007');
    $cv_extreme_sensio->setDescription3('description du job description du jobdescription du jobdescription du jobdescription du jobdescription du jobdescription du job');
    $cv_extreme_sensio->setFormName1('BTS Vente');
    $cv_extreme_sensio->setUniv1('Ecole de vente de Caen');
    $cv_extreme_sensio->setDateDebForm1('30/02/1998');
    $cv_extreme_sensio->setFormDescription1('Descriptionde la formation voici');
    $cv_extreme_sensio->setFormName2('BTS Vente');
    $cv_extreme_sensio->setUniv2('Ecole de vente de Caen');
    $cv_extreme_sensio->setDateDebForm2('30/02/1998');
    $cv_extreme_sensio->setFormDescription2('Descriptionde la formation voici');
    $cv_extreme_sensio->setFormName3('BTS Vente');
    $cv_extreme_sensio->setUniv3('Ecole de vente de Caen');
    $cv_extreme_sensio->setDateDebForm3('30/02/1998');
    $cv_extreme_sensio->setFormDescription3('Descriptionde la formation voici');
    $cv_extreme_sensio->setExpiresAt(new \DateTime('2015-10-10'));
 
    $em->persist($cv_sensio_labs);
    $em->persist($cv_extreme_sensio);
 
    $em->flush();
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}