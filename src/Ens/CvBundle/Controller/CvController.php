<?php
public function indexAction()
{
    $em = $this->getDoctrine()->getEntityManager();
 
    $entities = $em->getRepository('EnsCvBundle:Cv')->findAll();
 
    return $this->render('EnsCvBundle:Cv:index.html.twig', array(
        'entities' => $entities
    ));
}