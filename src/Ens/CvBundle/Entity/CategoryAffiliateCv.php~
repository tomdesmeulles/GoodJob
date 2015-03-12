<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliateCv
 */
class CategoryAffiliateCv
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ens\CvBundle\Entity\CategoryCv
     */
    private $categoryCv;

    /**
     * @var \Ens\CvBundle\Entity\AffiliateCv
     */
    private $affiliateCv;


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
     * Set categoryCv
     *
     * @param \Ens\CvBundle\Entity\CategoryCv $categoryCv
     * @return CategoryAffiliateCv
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
     * Set affiliateCv
     *
     * @param \Ens\CvBundle\Entity\AffiliateCv $affiliateCv
     * @return CategoryAffiliateCv
     */
    public function setAffiliateCv(\Ens\CvBundle\Entity\AffiliateCv $affiliateCv = null)
    {
        $this->affiliateCv = $affiliateCv;

        return $this;
    }

    /**
     * Get affiliateCv
     *
     * @return \Ens\CvBundle\Entity\AffiliateCv 
     */
    public function getAffiliateCv()
    {
        return $this->affiliateCv;
    }
}
