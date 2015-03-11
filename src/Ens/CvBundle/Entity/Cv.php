<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \DateTime
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
    private $expName;

    /**
     * @var string
     */
    private $entreprise;

    /**
     * @var \DateTime
     */
    private $dateDeb;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $formName;

    /**
     * @var string
     */
    private $univ;

    /**
     * @var \DateTime
     */
    private $dateDebForm;

    /**
     * @var \DateTime
     */
    private $dateFinForm;

    /**
     * @var \Ens\CvBundle\Entity\CategoryCv
     */
    private $CategoryCv;


   




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
     * Set expName
     *
     * @param string $expName
     * @return Cv
     */
    public function setExpName($expName)
    {
        $this->expName = $expName;

        return $this;
    }

    /**
     * Get expName
     *
     * @return string 
     */
    public function getExpName()
    {
        return $this->expName;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     * @return Cv
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set dateDeb
     *
     * @param string $dateDeb
     * @return Cv
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return string 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     * @return Cv
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Cv
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set formName
     *
     * @param string $formName
     * @return Cv
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;

        return $this;
    }

    /**
     * Get formName
     *
     * @return string 
     */
    public function getFormName()
    {
        return $this->formName;
    }

    /**
     * Set univ
     *
     * @param string $univ
     * @return Cv
     */
    public function setUniv($univ)
    {
        $this->univ = $univ;

        return $this;
    }

    /**
     * Get univ
     *
     * @return string 
     */
    public function getUniv()
    {
        return $this->univ;
    }

    /**
     * Set dateDebForm
     *
     * @param string $dateDebForm
     * @return Cv
     */
    public function setDateDebForm($dateDebForm)
    {
        $this->dateDebForm = $dateDebForm;

        return $this;
    }

    /**
     * Get dateDebForm
     *
     * @return string 
     */
    public function getDateDebForm()
    {
        return $this->dateDebForm;
    }

    /**
     * Set dateFinForm
     *
     * @param string $dateFinForm
     * @return Cv
     */
    public function setDateFinForm($dateFinForm)
    {
        $this->dateFinForm = $dateFinForm;

        return $this;
    }

    /**
     * Get dateFinForm
     *
     * @return string 
     */
    public function getDateFinForm()
    {
        return $this->dateFinForm;
    }


    /**
     * Set categoryCv
     *
     * @param \Ens\GoodJobBundle\Entity\CategoryCv $categoryCv
     * @return Cv
     */
    public function setCategoryCv()
    {
        $this->categoryCv = $categoryCv;

        return $this;
    }

    /**
     * Get categoryCv
     *
     * @return \Ens\GoodJobBundle\Entity\CategoryCv 
     */
    public function getCategoryCv()
    {
        return $this->categoryCv;
    }

    /**
     * @var string
     */
    private $manyToOne;


    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return Cv
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string 
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
}
