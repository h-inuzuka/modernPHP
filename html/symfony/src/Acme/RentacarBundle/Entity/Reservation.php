<?php

namespace Acme\RentacarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_reservation_user", columns={"user_id"}), @ORM\Index(name="fk_reservation_type1", columns={"car_class_id"}), @ORM\Index(name="fk_reservation_location1", columns={"departure_location_id"}), @ORM\Index(name="fk_reservation_location2", columns={"return_location_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="return_at", type="datetime", nullable=false)
     */
    private $returnAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_insurance", type="boolean", nullable=false)
     */
    private $userInsurance;

    /**
     * @var string
     *
     * @ORM\Column(name="car_subtotal", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $carSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="option_subtotal", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $optionSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $totalAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \CarClass
     *
     * @ORM\ManyToOne(targetEntity="CarClass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_class_id", referencedColumnName="id")
     * })
     */
    private $carClass;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departure_location_id", referencedColumnName="id")
     * })
     */
    private $departureLocation;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="return_location_id", referencedColumnName="id")
     * })
     */
    private $returnLocation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set returnAt
     *
     * @param \DateTime $returnAt
     * @return Reservation
     */
    public function setReturnAt($returnAt)
    {
        $this->returnAt = $returnAt;

        return $this;
    }

    /**
     * Get returnAt
     *
     * @return \DateTime 
     */
    public function getReturnAt()
    {
        return $this->returnAt;
    }

    /**
     * Set userInsurance
     *
     * @param boolean $userInsurance
     * @return Reservation
     */
    public function setUserInsurance($userInsurance)
    {
        $this->userInsurance = $userInsurance;

        return $this;
    }

    /**
     * Get userInsurance
     *
     * @return boolean 
     */
    public function getUserInsurance()
    {
        return $this->userInsurance;
    }

    /**
     * Set carSubtotal
     *
     * @param string $carSubtotal
     * @return Reservation
     */
    public function setCarSubtotal($carSubtotal)
    {
        $this->carSubtotal = $carSubtotal;

        return $this;
    }

    /**
     * Get carSubtotal
     *
     * @return string 
     */
    public function getCarSubtotal()
    {
        return $this->carSubtotal;
    }

    /**
     * Set optionSubtotal
     *
     * @param string $optionSubtotal
     * @return Reservation
     */
    public function setOptionSubtotal($optionSubtotal)
    {
        $this->optionSubtotal = $optionSubtotal;

        return $this;
    }

    /**
     * Get optionSubtotal
     *
     * @return string 
     */
    public function getOptionSubtotal()
    {
        return $this->optionSubtotal;
    }

    /**
     * Set totalAmount
     *
     * @param string $totalAmount
     * @return Reservation
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return string 
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Reservation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Reservation
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Reservation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set carClass
     *
     * @param \Acme\RentacarBundle\Entity\CarClass $carClass
     * @return Reservation
     */
    public function setCarClass(\Acme\RentacarBundle\Entity\CarClass $carClass = null)
    {
        $this->carClass = $carClass;

        return $this;
    }

    /**
     * Get carClass
     *
     * @return \Acme\RentacarBundle\Entity\CarClass 
     */
    public function getCarClass()
    {
        return $this->carClass;
    }

    /**
     * Set departureLocation
     *
     * @param \Acme\RentacarBundle\Entity\Location $departureLocation
     * @return Reservation
     */
    public function setDepartureLocation(\Acme\RentacarBundle\Entity\Location $departureLocation = null)
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }

    /**
     * Get departureLocation
     *
     * @return \Acme\RentacarBundle\Entity\Location 
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Set returnLocation
     *
     * @param \Acme\RentacarBundle\Entity\Location $returnLocation
     * @return Reservation
     */
    public function setReturnLocation(\Acme\RentacarBundle\Entity\Location $returnLocation = null)
    {
        $this->returnLocation = $returnLocation;

        return $this;
    }

    /**
     * Get returnLocation
     *
     * @return \Acme\RentacarBundle\Entity\Location 
     */
    public function getReturnLocation()
    {
        return $this->returnLocation;
    }

    /**
     * Set user
     *
     * @param \Acme\RentacarBundle\Entity\User $user
     * @return Reservation
     */
    public function setUser(\Acme\RentacarBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\RentacarBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
