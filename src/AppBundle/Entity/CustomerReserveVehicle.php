<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerReserveVehicle
 *
 * @ORM\Table(name="customer_reserve_vehicle", indexes={@ORM\Index(name="fk_customer_has_vehicle_vehicle1_idx", columns={"vehicle_id"}), @ORM\Index(name="fk_customer_has_vehicle_customer_idx", columns={"customer_id"}), @ORM\Index(name="fk_customer_reserve_vehicle_time_slot1_idx", columns={"time_slot_id"})})
 * @ORM\Entity
 */
class CustomerReserveVehicle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TimeSlot
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TimeSlot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="time_slot_id", referencedColumnName="id")
     * })
     */
    private $timeSlot;

    /**
     * @var \AppBundle\Entity\Vehicle
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vehicle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id")
     * })
     */
    private $vehicle;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;



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
     * Set timeSlot
     *
     * @param \AppBundle\Entity\TimeSlot $timeSlot
     *
     * @return CustomerReserveVehicle
     */
    public function setTimeSlot(\AppBundle\Entity\TimeSlot $timeSlot = null)
    {
        $this->timeSlot = $timeSlot;

        return $this;
    }

    /**
     * Get timeSlot
     *
     * @return \AppBundle\Entity\TimeSlot
     */
    public function getTimeSlot()
    {
        return $this->timeSlot;
    }

    /**
     * Set vehicle
     *
     * @param \AppBundle\Entity\Vehicle $vehicle
     *
     * @return CustomerReserveVehicle
     */
    public function setVehicle(\AppBundle\Entity\Vehicle $vehicle = null)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return \AppBundle\Entity\Vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return CustomerReserveVehicle
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
