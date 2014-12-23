<?php

namespace Ens\GoodJobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ens\GoodJobBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Ens\GoodJobBundle\Entity\Affiliate
     */
    private $affiliate;


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
     * Set category
     *
     * @param \Ens\GoodJobBundle\Entity\Category $category
     * @return CategoryAffiliate
     */
    public function setCategory(\Ens\GoodJobBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Ens\GoodJobBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \Ens\GoodJobBundle\Entity\Affiliate $affiliate
     * @return CategoryAffiliate
     */
    public function setAffiliate(\Ens\GoodJobBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \Ens\GoodJobBundle\Entity\Affiliate 
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}
