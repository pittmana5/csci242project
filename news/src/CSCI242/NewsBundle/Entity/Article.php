<?php
namespace CSCI242\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Article
 * 
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="CSCI242\NewsBundle\Repository\ArticleRepository")
 * @Vich\Uploadable
 */

class Article 
{
    /**
     *@var int
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     *
     * @var File
     * @Vich\UploadableField(mapping="article-image",fileNameProperty="image_name")
     */
    private $imageFile;
    /**
     *
     * @var string
     * @ORM\Column(type="string",length=255)
     */
    private $imageName;
    /**
     *
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    /**
     *
     * @var string
     * @ORM\Column(name="title",type="string")
     */
    private $title;
    /**
     *
     * @var string
     * @ORM\Column(name="content",type="text")
     */
    private $content;
    /**
     *
     * @var string
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="articles")
     */
    private $category;

/**
 * Set the Image
 * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
 * @return \NewsBundle\Entity\Article
 */
    public function setImageFile(File $image=null)
    {
        $this->imageFile=$image;
        if($image)
        {
            $this->updatedAt= new \DateTimeImmutable();
        }
        return $this;
    }
  /**
   * Set the Image Name
   * @param string $imageName
   * @return \NewsBundle\Entity\Article
   */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
        return $this;
    }
    /**
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    /**
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
/**
 *
 * @return text
 */
    public function getContent() {
        return $this->content;
    }
/**
 *
 * @return string
 */
    public function getCategory() {
        return $this->category;
    }
/**
 * Sets the title
 * @param string $title
 * @return Article
 */
    public function setTitle($title) {
        $this->title = $title;
    }
/**
 * Set the Contents
 * @param text $content
 * @return Article
 */
    public function setContent($content) {
        $this->content = $content;
    }
/**
 * Sets the Categories
 * @param string $category
 * @return Article
 */
    public function setCategory($category) {
        $this->category = $category;
    }
/**
 *
 * @return integer
 */
    public function getId() {
        return $this->id;
    }
}