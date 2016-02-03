<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity
 */
class Car
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="text", nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var integer
     * 
     * @ORM\Column(name="nb_orders", type="integer")
     */
    private $nbOrders = 0;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_reviews", type="integer")
     */
    private $nbReviews = 0;
    
    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;
    
    /**
     * @var ArrayCollection
     *
     * * @ORM\OneToMany(targetEntity="CarReview", mappedBy="car")
     */
    protected $reviews;

    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="CarCategory", inversedBy="cars")
     */
    protected $categories;
    
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="CarOrder", mappedBy="cars")
     */
    protected $orders;

    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getName();
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
     * @return Car
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
     * Set slug
     *
     * @param string $slug
     * @return Car
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Car
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
     * Set picture
     *
     * @param string $picture
     * @return Car
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Car
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Add reviews
     *
     * @param \AppBundle\Entity\CarReview $reviews
     * @return Car
     */
    public function addReview(\AppBundle\Entity\CarReview $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \AppBundle\Entity\CarReview $reviews
     */
    public function removeReview(\AppBundle\Entity\CarReview $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    
    public function getApprovedReviews()
    {
        $reviews = array();
        foreach ($this->getReviews() as $review) {
            if ($review->getIsModerated()) {
                $reviews[] = $review;
            }
        }
        
        return $reviews;
    }
    
    /**
     * Add categories
     *
     * @param \AppBundle\Entity\CarCategory $categories
     * @return Car
     */
    public function addCategory(\AppBundle\Entity\CarCategory $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \AppBundle\Entity\CarCategory $categories
     */
    public function removeCategory(\AppBundle\Entity\CarCategory $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add orders
     *
     * @param \AppBundle\Entity\CarOrder $orders
     * @return Car
     */
    public function addOrder(\AppBundle\Entity\CarOrder $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param \AppBundle\Entity\CarOrder $orders
     */
    public function removeOrder(\AppBundle\Entity\CarOrder $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set nbOrders
     *
     * @param integer $nbOrders
     * @return Car
     */
    public function setNbOrders($nbOrders)
    {
        $this->nbOrders = $nbOrders;

        return $this;
    }

    /**
     * Get nbOrders
     *
     * @return integer 
     */
    public function getNbOrders()
    {
        return $this->nbOrders;
    }

    /**
     * Set nbReviews
     *
     * @param integer $nbReviews
     * @return Car
     */
    public function setNbReviews($nbReviews)
    {
        $this->nbReviews = $nbReviews;

        return $this;
    }

    /**
     * Get nbReviews
     *
     * @return integer 
     */
    public function getNbReviews()
    {
        return $this->nbReviews;
    }
}
