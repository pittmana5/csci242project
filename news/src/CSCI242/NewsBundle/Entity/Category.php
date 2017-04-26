<?php

namespace CSCI242\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="CSCI242\NewsBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryName", type="string", length=100, unique=true)
     */
    private $categoryName;

    /**
     * @var array
     *
     * @ORM\Column(name="categoryArticles", type="string")
     */
    private $categoryArticles;


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
     * Set categoryName
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryArticles
     *
     * @param array $categoryArticles
     * @return Category
     */
    public function setCategoryArticles($categoryArticles)
    {
        $this->categoryArticles = $categoryArticles;

        return $this;
    }

    /**
     * Get categoryArticles
     *
     * @return array 
     */
    public function getCategoryArticles()
    {
        return $this->categoryArticles;
    }
}
