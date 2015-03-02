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
    private $exp_name;

    /**
     * @var string
     */
    private $entreprise;

    /**
     * @var \DateTime
     */
    private $date_deb;

    /**
     * @var \DateTime
     */
    private $date_fin;

    /**
     * @var \DateTime
     */
    private $date_debForm;

    /**
     * @var \DateTime
     */
    private $date_finForm;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $form_name;

    /**
     * @var string
     */
    private $univ;

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
     * @param \DateTime $age
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
     * @return \DateTime 
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
     * Set exp_name
     *
     * @param string $expName
     * @return Cv
     */
    public function setExp_Name($expName)
    {
        $this->exp_name = $expName;

        return $this;
    }

    /**
     * Get exp_name
     *
     * @return string 
     */
    public function getExp_Name()
    {
        return $this->exp_name;
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
     * Set date_deb
     *
     * @param \DateTime $dateDeb
     * @return Cv
     */
    public function setDate_Deb($dateDeb)
    {
        $this->date_deb = $dateDeb;

        return $this;
    }

    /**
     * Get date_deb
     *
     * @return \DateTime 
     */
    public function getDate_Deb()
    {
        return $this->date_deb;
    }

    /**
     * Set date_fin
     *
     * @param \DateTime $dateFin
     * @return Cv
     */
    public function setDate_Fin($dateFin)
    {
        $this->date_fin = $dateFin;

        return $this;
    }

    /**
     * Get date_fin
     *
     * @return \DateTime 
     */
    public function getDate_Fin()
    {
        return $this->date_fin;
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
     * Set form_name
     *
     * @param string $formName
     * @return Cv
     */
    public function setForm_Name($formName)
    {
        $this->form_name = $formName;

        return $this;
    }

    /**
     * Get form_name
     *
     * @return string 
     */
    public function getForm_Name()
    {
        return $this->form_name;
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
     * Set CategoryCv
     *
     * @param \Ens\CvBundle\Entity\CategoryCv $categoryCv
     * @return Cv
     */
    public function setCategoryCv(\Ens\CvBundle\Entity\CategoryCv $categoryCv = null)
    {
        $this->CategoryCv = $categoryCv;

        return $this;
    }

    /**
     * Get CategoryCv
     *
     * @return \Ens\CvBundle\Entity\CategoryCv 
     */
    public function getCategoryCv()
    {
        return $this->CategoryCv;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }

    /**
     * Set date_debForm
     *
     * @param \DateTime $dateDebForm
     * @return Cv
     */
    public function setDate_DebForm($dateDebForm)
    {
        $this->date_debForm = $dateDebForm;

        return $this;
    }

    /**
     * Get date_debForm
     *
     * @return \DateTime 
     */
    public function getDate_DebForm()
    {
        return $this->date_debForm;
    }

    /**
     * Set date_finForm
     *
     * @param \DateTime $dateFinForm
     * @return Cv
     */
    public function setDate_FinForm($dateFinForm)
    {
        $this->date_finForm = $dateFinForm;

        return $this;
    }

    /**
     * Get date_finForm
     *
     * @return \DateTime 
     */
    public function getDate_FinForm()
    {
        return $this->date_finForm;
    }
}
