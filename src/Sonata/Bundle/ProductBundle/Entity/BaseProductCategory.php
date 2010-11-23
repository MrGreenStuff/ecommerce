<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Bundle\ProductBundle\Entity;

/**
 * Sonata\Bundle\ProductBundle\Entity\BaseProductCategory
 */
abstract class BaseProductCategory
{
    /**
     * @var boolean $enabled
     */
    protected $enabled;

    /**
     * @var datetime $updated_at
     */
    protected $updated_at;

    /**
     * @var datetime $created_at
     */
    protected $created_at;


    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @var Application\ProductBundle\Entity\Product
     */
    protected $Product;

    /**
     * @var Application\ProductBundle\Entity\Category
     */
    protected $Category;

    /**
     * Set Product
     *
     * @param Application\ProductBundle\Entity\Product $product
     */
    public function setProduct(\Application\ProductBundle\Entity\Product $product)
    {
        $this->Product = $product;
    }

    /**
     * Get Product
     *
     * @return Application\ProductBundle\Entity\Product $product
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set Category
     *
     * @param Application\ProductBundle\Entity\Category $category
     */
    public function setCategory(\Application\ProductBundle\Entity\Category $category)
    {
        $this->Category = $category;
    }

    /**
     * Get Category
     *
     * @return Application\ProductBundle\Entity\Category $category
     */
    public function getCategory()
    {
        return $this->Category;
    }
}