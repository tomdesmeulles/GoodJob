<?php

namespace Ens\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryCvAffiliate
 */
class CategoryCvAffiliate
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
    private $AffiliateCv;


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
     * @return CategoryCvAffiliate
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
     * Set AffiliateCv
     *
     * @param \Ens\CvBundle\Entity\AffiliateCv $affiliateCv
     * @return CategoryCvAffiliate
     */
    public function setAffiliateCv(\Ens\CvBundle\Entity\AffiliateCv $affiliateCv = null)
    {
        $this->AffiliateCv = $affiliateCv;

        return $this;
    }

    /**
     * Get AffiliateCv
     *
     * @return \Ens\CvBundle\Entity\AffiliateCv 
     */
    public function getAffiliateCv()
    {
        return $this->AffiliateCv;
    }
}
