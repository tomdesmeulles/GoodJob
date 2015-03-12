<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryCv
 */
class CategoryCv
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cvs;


    private $active_cvs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cvs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return CategoryCv
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add cvs
     *
     * @param \Ens\CvBundle\Entity\Cv $cvs
     * @return CategoryCv
     */
    public function addCv(\Ens\CvBundle\Entity\Cv $cvs)
    {
        $this->cvs[] = $cvs;

        return $this;
    }

    /**
     * Remove cvs
     *
     * @param \Ens\CvBundle\Entity\Cv $cvs
     */
    public function removeCv(\Ens\CvBundle\Entity\Cv $cvs)
    {
        $this->cvs->removeElement($cvs);
    }

    /**
     * Get cvs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCvs()
    {
        return $this->cvs;
    }


        public function setCategoryCv()
    {
        $this->categoryCv = $categoryCv;

        return $this;
    }


    public function getCategoryCv()
    {
        return $this->categoryCv;
    }

    public function __toString()
    {
      return $this->getName();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category_affiliatesCv;


    /**
     * Add category_affiliatesCv
     *
     * @param \Ens\CvBundle\Entity\CategoryAffiliateCv $categoryAffiliatesCv
     * @return CategoryCv
     */
    public function addCategoryAffiliatesCv(\Ens\CvBundle\Entity\CategoryAffiliateCv $categoryAffiliatesCv)
    {
        $this->category_affiliatesCv[] = $categoryAffiliatesCv;

        return $this;
    }

    /**
     * Remove category_affiliatesCv
     *
     * @param \Ens\CvBundle\Entity\CategoryAffiliateCv $categoryAffiliatesCv
     */
    public function removeCategoryAffiliatesCv(\Ens\CvBundle\Entity\CategoryAffiliateCv $categoryAffiliatesCv)
    {
        $this->category_affiliatesCv->removeElement($categoryAffiliatesCv);
    }

    /**
     * Get category_affiliatesCv
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoryAffiliatesCv()
    {
        return $this->category_affiliatesCv;
    }





 

 
      public function setActiveCvs($cvs)
      {
        $this->active_cvs = $cvs;
      }
     
      public function getActiveCvs()
      {
        return $this->active_cvs;
      }



}
