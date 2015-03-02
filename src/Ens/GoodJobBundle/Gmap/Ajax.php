<?php 

namespace Ens\GoodJobBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\GoodJobBundle\Entity\Job;
use Ens\GoodJobBundle\Form\JobType;


//Récupération des infos de l'offre d'emplois pour l'envoyer en ajax 

$db = Doctrine_Manager::getInstance()->getCurrentConnection();
$requete =  "SELECT category_id, company, position, latitude, longitude, FROM job WHERE localisation.id_doc = Medecins.id_doc";
$result = $db->execute($requete);        
echo json_encode($result);



// $conn = $this->get('database_connection');
// $users = $conn->fetchAll('SELECT * FROM users');