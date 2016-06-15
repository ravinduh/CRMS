<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Controller\Connection;

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

/////////////// change these into private and set getters and setters
    public $customerId;
    public $vehicleId;
    public $customerName;
    public $vehicleName;
    public $startDate;
    public $endDate;

/*-----------------------------Manually added methods---------------------------------*/
 //reservation validation
    public function validate()
    {

    }
    public function save()
    {
        $this->startDate = $this->startDate?$this->startDate->format('Y-m-d'):null;
        $this->endDate = $this->endDate?$this->endDate->format('Y-m-d'):null;
      if($this->id ==null)
        {

        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('INSERT INTO `customer_reserve_vehicle` (`customer_id`,`vehicle_id`, `start_date`, end_date ) VALUES (?,?,?,?)');
        $stmt->bind_param("iiss",$this->customerId,$this->vehicleId,$this->startDate,$this->endDate);
        $stmt->execute();  
        $stmt->close();
        }
        else
        {
        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('UPDATE customer_reserve_vehicle SET customer_id =?,vehicle_id=?,start_date=?,end_date=? WHERE id =?');
        $stmt->bind_param("iiss",$this->customerId,$this->vehicleId,$this->startDate,$this->endDate);
        $stmt->execute();  
        $stmt->close();   
        }
    }

    public static function getOne($id)
    {
        $con = Connection::getConnectionObject()->getConnection();
        // Check connection
        if (mysqli_connect_errno()) 
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $customerReserveVehicle = new CustomerReserveVehicle();
        $stmt = $con->prepare('SELECT customer_reserve_vehicle.id, customer_reserve_vehicle.customer_id, customer_reserve_vehicle.vehicle_id, customer_reserve_vehicle.start_date,customer_reserve_vehicle.end_date, customer.name, vehicle.name
         FROM customer_reserve_vehicle, customer, vehicle where customer_reserve_vehicle.customer_id=customer.id , customer_reserve_vehicle.vehicle_id=vehicle.id , customer_reserve_vehicle.id=?');
        $stmt->bind_param("s",$id);
        $stmt->execute();

        $stmt->bind_result($customerReserveVehicle->id,$customerReserveVehicle->customerId,$customerReserveVehicle->vehicleId,$customerReserveVehicle->startDate,$customerReserveVehicle->endDate,$customerReserveVehicle->customerName,$customerReserveVehicle->vehicleName);
        $stmt->fetch();
        $stmt->close();
        return $customerReserveVehicle;
    }


    public static function getAll()
    {
        $con = Connection::getConnectionObject()->getConnection();
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $reservations = array(); //Make an empty array
        $stmt = $con->prepare('SELECT customer_reserve_vehicle.id, customer_reserve_vehicle.customer_id, customer_reserve_vehicle.vehicle_id, customer_reserve_vehicle.start_date,customer_reserve_vehicle.end_date, customer.name, vehicle.name
         FROM customer_reserve_vehicle, customer, vehicle WHERE customer_reserve_vehicle.customer_id=customer.id and customer_reserve_vehicle.vehicle_id=vehicle.id');
        $stmt->execute();
        $stmt->bind_result($id,$customerId,$vehicleId,$startDate,$endDate,$customerName,$vehicleName);
        while($stmt->fetch())
        {
            $reservation = new CustomerReserveVehicle();
            $reservation->setId($id);
            $reservation->customerId=$customerId;
            $reservation->vehicleId=$vehicleId;
            $reservation->startDate=$startDate;
            $reservation->endDate=$endDate;
            $reservation->customerName = $customerName;
            $reservation->vehicleName=$vehicleName;


            array_push($reservations,$reservation); //Push one by one
        }
        $stmt->close();
        
        return $reservations;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }

    /*----------------------------------------------------------------------------*/


    public function setId($id)
    {
        $this->id=$id;
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
