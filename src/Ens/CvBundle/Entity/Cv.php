<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ens\CvBundle\Utils\GoodCv as GoodCv;

/**
 * Cv
 */
class Cv
{


/**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $photoCv;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $age;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $urlFolio;

    /**
     * @var string
     */
    private $postRecherche;

    /**
     * @var string
     */
    private $expName1;

    /**
     * @var string
     */
    private $entreprise1;

    /**
     * @var string
     */
    private $dateDeb1;

    /**
     * @var string
     */
    private $description1;

    /**
     * @var string
     */
    private $expName2;

    /**
     * @var string
     */
    private $entreprise2;

    /**
     * @var string
     */
    private $dateDeb2;

    /**
     * @var string
     */
    private $description2;

    /**
     * @var string
     */
    private $expName3;

    /**
     * @var string
     */
    private $entreprise3;

    /**
     * @var string
     */
    private $dateDeb3;

    /**
     * @var string
     */
    private $description3;

    /**
     * @var string
     */
    private $formName1;

    /**
     * @var string
     */
    private $univ1;

    /**
     * @var string
     */
    private $dateDebForm1;

    /**
     * @var string
     */
    private $formName2;

    /**
     * @var string
     */
    private $univ2;

    /**
     * @var string
     */
    private $dateDebForm2;

    /**
     * @var string
     */
    private $formName3;

    /**
     * @var string
     */
    private $univ3;

    /**
     * @var string
     */
    private $dateDebForm3;

    /**
     * @var \DateTime
     */
    private $expires_at;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Ens\CvBundle\Entity\CategoryCv
     */
    private $categoryCv;



    /**
     * @var string
     */
    private $formDescription1;

    /**
     * @var string
     */
    private $formDescription2;

    /**
     * @var string
     */
    private $formDescription3;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set photoCv
     *
     * @param string $photoCv
     * @return Cv
     */
    public function setPhotoCv($photoCv)
    {
        $this->photoCv = $photoCv;

        return $this;
    }

    /**
     * Get photoCv
     *
     * @return string 
     */
    public function getPhotoCv()
    {
        return $this->photoCv;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Cv
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Cv
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Cv
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cv
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Cv
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set urlFolio
     *
     * @param string $urlFolio
     * @return Cv
     */
    public function setUrlFolio($urlFolio)
    {
        $this->urlFolio = $urlFolio;

        return $this;
    }

    /**
     * Get urlFolio
     *
     * @return string 
     */
    public function getUrlFolio()
    {
        return $this->urlFolio;
    }

    /**
     * Set postRecherche
     *
     * @param string $postRecherche
     * @return Cv
     */
    public function setPostRecherche($postRecherche)
    {
        $this->postRecherche = $postRecherche;

        return $this;
    }

    /**
     * Get postRecherche
     *
     * @return string 
     */
    public function getPostRecherche()
    {
        return $this->postRecherche;
    }

    /**
     * Set expName1
     *
     * @param string $expName1
     * @return Cv
     */
    public function setExpName1($expName1)
    {
        $this->expName1 = $expName1;

        return $this;
    }

    /**
     * Get expName1
     *
     * @return string 
     */
    public function getExpName1()
    {
        return $this->expName1;
    }

    /**
     * Set entreprise1
     *
     * @param string $entreprise1
     * @return Cv
     */
    public function setEntreprise1($entreprise1)
    {
        $this->entreprise1 = $entreprise1;

        return $this;
    }

    /**
     * Get entreprise1
     *
     * @return string 
     */
    public function getEntreprise1()
    {
        return $this->entreprise1;
    }

    /**
     * Set dateDeb1
     *
     * @param string $dateDeb1
     * @return Cv
     */
    public function setDateDeb1($dateDeb1)
    {
        $this->dateDeb1 = $dateDeb1;

        return $this;
    }

    /**
     * Get dateDeb1
     *
     * @return string 
     */
    public function getDateDeb1()
    {
        return $this->dateDeb1;
    }

    /**
     * Set description1
     *
     * @param string $description1
     * @return Cv
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;

        return $this;
    }

    /**
     * Get description1
     *
     * @return string 
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * Set expName2
     *
     * @param string $expName2
     * @return Cv
     */
    public function setExpName2($expName2)
    {
        $this->expName2 = $expName2;

        return $this;
    }

    /**
     * Get expName2
     *
     * @return string 
     */
    public function getExpName2()
    {
        return $this->expName2;
    }

    /**
     * Set entreprise2
     *
     * @param string $entreprise2
     * @return Cv
     */
    public function setEntreprise2($entreprise2)
    {
        $this->entreprise2 = $entreprise2;

        return $this;
    }

    /**
     * Get entreprise2
     *
     * @return string 
     */
    public function getEntreprise2()
    {
        return $this->entreprise2;
    }

    /**
     * Set dateDeb2
     *
     * @param string $dateDeb2
     * @return Cv
     */
    public function setDateDeb2($dateDeb2)
    {
        $this->dateDeb2 = $dateDeb2;

        return $this;
    }

    /**
     * Get dateDeb2
     *
     * @return string 
     */
    public function getDateDeb2()
    {
        return $this->dateDeb2;
    }

    /**
     * Set description2
     *
     * @param string $description2
     * @return Cv
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * Get description2
     *
     * @return string 
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Set expName3
     *
     * @param string $expName3
     * @return Cv
     */
    public function setExpName3($expName3)
    {
        $this->expName3 = $expName3;

        return $this;
    }

    /**
     * Get expName3
     *
     * @return string 
     */
    public function getExpName3()
    {
        return $this->expName3;
    }

    /**
     * Set entreprise3
     *
     * @param string $entreprise3
     * @return Cv
     */
    public function setEntreprise3($entreprise3)
    {
        $this->entreprise3 = $entreprise3;

        return $this;
    }

    /**
     * Get entreprise3
     *
     * @return string 
     */
    public function getEntreprise3()
    {
        return $this->entreprise3;
    }

    /**
     * Set dateDeb3
     *
     * @param string $dateDeb3
     * @return Cv
     */
    public function setDateDeb3($dateDeb3)
    {
        $this->dateDeb3 = $dateDeb3;

        return $this;
    }

    /**
     * Get dateDeb3
     *
     * @return string 
     */
    public function getDateDeb3()
    {
        return $this->dateDeb3;
    }

    /**
     * Set description3
     *
     * @param string $description3
     * @return Cv
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;

        return $this;
    }

    /**
     * Get description3
     *
     * @return string 
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    /**
     * Set formName1
     *
     * @param string $formName1
     * @return Cv
     */
    public function setFormName1($formName1)
    {
        $this->formName1 = $formName1;

        return $this;
    }

    /**
     * Get formName1
     *
     * @return string 
     */
    public function getFormName1()
    {
        return $this->formName1;
    }

    /**
     * Set univ1
     *
     * @param string $univ1
     * @return Cv
     */
    public function setUniv1($univ1)
    {
        $this->univ1 = $univ1;

        return $this;
    }

    /**
     * Get univ1
     *
     * @return string 
     */
    public function getUniv1()
    {
        return $this->univ1;
    }

    /**
     * Set dateDebForm1
     *
     * @param string $dateDebForm1
     * @return Cv
     */
    public function setDateDebForm1($dateDebForm1)
    {
        $this->dateDebForm1 = $dateDebForm1;

        return $this;
    }

    /**
     * Get dateDebForm1
     *
     * @return string 
     */
    public function getDateDebForm1()
    {
        return $this->dateDebForm1;
    }

    /**
     * Set formName2
     *
     * @param string $formName2
     * @return Cv
     */
    public function setFormName2($formName2)
    {
        $this->formName2 = $formName2;

        return $this;
    }

    /**
     * Get formName2
     *
     * @return string 
     */
    public function getFormName2()
    {
        return $this->formName2;
    }

    /**
     * Set univ2
     *
     * @param string $univ2
     * @return Cv
     */
    public function setUniv2($univ2)
    {
        $this->univ2 = $univ2;

        return $this;
    }

    /**
     * Get univ2
     *
     * @return string 
     */
    public function getUniv2()
    {
        return $this->univ2;
    }

    /**
     * Set dateDebForm2
     *
     * @param string $dateDebForm2
     * @return Cv
     */
    public function setDateDebForm2($dateDebForm2)
    {
        $this->dateDebForm2 = $dateDebForm2;

        return $this;
    }

    /**
     * Get dateDebForm2
     *
     * @return string 
     */
    public function getDateDebForm2()
    {
        return $this->dateDebForm2;
    }

    /**
     * Set formName3
     *
     * @param string $formName3
     * @return Cv
     */
    public function setFormName3($formName3)
    {
        $this->formName3 = $formName3;

        return $this;
    }

    /**
     * Get formName3
     *
     * @return string 
     */
    public function getFormName3()
    {
        return $this->formName3;
    }

    /**
     * Set univ3
     *
     * @param string $univ3
     * @return Cv
     */
    public function setUniv3($univ3)
    {
        $this->univ3 = $univ3;

        return $this;
    }

    /**
     * Get univ3
     *
     * @return string 
     */
    public function getUniv3()
    {
        return $this->univ3;
    }

    /**
     * Set dateDebForm3
     *
     * @param string $dateDebForm3
     * @return Cv
     */
    public function setDateDebForm3($dateDebForm3)
    {
        $this->dateDebForm3 = $dateDebForm3;

        return $this;
    }

    /**
     * Get dateDebForm3
     *
     * @return string 
     */
    public function getDateDebForm3()
    {
        return $this->dateDebForm3;
    }

    /**
     * Set expires_at
     *
     * @param \DateTime $expiresAt
     * @return Cv
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;

        return $this;
    }

    /**
     * Get expires_at
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Cv
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Cv
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set categoryCv
     *
     * @param \Ens\CvBundle\Entity\CategoryCv $categoryCv
     * @return Cv
     */
    public function setCategoryCv(\Ens\CvBundle\Entity\CategoryCv $categoryCv = null)
    {
        $this->categoryCv = $categoryCv;

        return $this;
    }

    /**
     * Get categoryCv
     *
     * @return \Ens\CvBundle\Entity\CategoryCv 
     */
    public function getCategoryCv()
    {
        return $this->categoryCv;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
          {
            $this->created_at = new \DateTime();
          }
    }

    /**
     * @ORM\PreUpdate
     */

        public function setUpdatedAtValue()
        {
          $this->updated_at = new \DateTime();
        }




    /**
     * Set formDescription1
     *
     * @param string $formDescription1
     * @return Cv
     */
    public function setFormDescription1($formDescription1)
    {
        $this->formDescription1 = $formDescription1;

        return $this;
    }

    /**
     * Get formDescription1
     *
     * @return string 
     */
    public function getFormDescription1()
    {
        return $this->formDescription1;
    }

    /**
     * Set formDescription2
     *
     * @param string $formDescription2
     * @return Cv
     */
    public function setFormDescription2($formDescription2)
    {
        $this->formDescription2 = $formDescription2;

        return $this;
    }

    /**
     * Get formDescription2
     *
     * @return string 
     */
    public function getFormDescription2()
    {
        return $this->formDescription2;
    }

    /**
     * Set formDescription3
     *
     * @param string $formDescription3
     * @return Cv
     */
    public function setFormDescription3($formDescription3)
    {
        $this->formDescription3 = $formDescription3;

        return $this;
    }

    /**
     * Get formDescription3
     *
     * @return string 
     */
    public function getFormDescription3()
    {
        return $this->formDescription3;
    }

//slugify pour changer l'url dans la barre pour chaque offre.


    public function getPrenomSlug()
    {
        return GoodCv::slugify($this->getPrenom());
    }
 


    public function getNomSlug()
    {
        return GoodCv::slugify($this->getNom());
    }
 


    public function getPostRechercheSlug()
    {
        return GoodCv::slugify($this->getPostRecherche());
    }





    /**
     * @ORM\PrePersist
     */
    public function setExpiresAtValue()
    {
      if(!$this->getExpiresAt())
      {
        $now = $this->getCreatedAt() ? $this->getCreatedAt()->format('U') : time();
        $this->expires_at = new \DateTime(date('Y-m-d H:i:s', $now + 86400 * 30));
      }
    }
}
