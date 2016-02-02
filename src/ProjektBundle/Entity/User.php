<?php

namespace ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="CarOrder", mappedBy="user")
     */
    protected $orders;
    -
    /**
     * @var ArrayCollection
     * 
     * * @ORM\OneToMany(targetEntity="CarReview", mappedBy="user")
     */
    protected $reviews;
    

    public function __construct()
    {
        parent::__construct();
        
        $this->orders = new ArrayCollection();
        $this->reviews = new ArrayCollection();
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
    
    public function getOrderedCars()
    {
        $Cars = array();
        foreach ($this->getOrders() as $order) {
            foreach ($order->getCars() as $Car) {
                // Jeśli zamówienie nie jest opłaca to zostaje pominięte
                if (!$order->isPaid()) {
                    continue;
                }
                
                // Dotyczy tylko samochodów już opłaconych
                if (!array_key_exists($Car->getId(), $Cars)) {
                    $Cars[$Car->getId()] = $Car;
                }
            }
        }
        
        return $Cars;
    }
    
    public function isOrderedCar(Car $Car)
    {
        $Cars = $this->getOrderedCars();
        
        return array_key_exists($Car->getId(), $Cars);
    }

    /**
     * Add orders
     *
     * @param \ProjektBundle\Entity\CarOrder $orders
     * @return User
     */
    public function addOrder(\ProjektBundle\Entity\CarOrder $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param \ProjektBundle\Entity\CarOrder $orders
     */
    public function removeOrder(\ProjektBundle\Entity\CarOrder $orders)
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
     * Add reviews
     *
     * @param \ProjektBundle\Entity\CarReview $reviews
     * @return User
     */
    public function addReview(\ProjektBundle\Entity\CarReview $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \ProjektBundle\Entity\CarReview $reviews
     */
    public function removeReview(\ProjektBundle\Entity\CarReview $reviews)
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
}
