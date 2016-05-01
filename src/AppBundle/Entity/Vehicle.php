<?php

namespace AppBundle\Entity;

use AppBundle\Controller\Connection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicle
 *
 * @ORM\Table(name="vehicle")
 * @ORM\Entity
 */
class Vehicle
{
   
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="plate", type="string", length=10, nullable=false)
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="fuel", type="string", length=15, nullable=false)
     */
    private $fuel;

    /**
     * @var string
     *
     * @ORM\Column(name="transmission", type="string", length=10, nullable=false)
     */
    private $transmission;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


/*---------------manually added mathods--------------------------------*/
    public function save()
    {

      if($this->id ==null)
        {
           
        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('INSERT INTO `vehicle` (`name`,`type`, `plate`, `fuel`, `transmission`, `description`, `status`) VALUES (?,?, ?,?,?,?,?)');  
        $stmt->bind_param("sssssss",$this->name,$this->type,$this->plate,$this->fuel,$this->transmission,$this->description,$this->status);  
        $stmt->execute();  
        $stmt->close();
        }
        else
        {
        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('UPDATE vehicle SET name =?,type=?,plate=?,fuel=?,transmission=?,description=?,status=? WHERE id =?');  
        $stmt->bind_param("sssssss",$this->name,$this->type,$this->plate,$this->fuel,$this->transmission,$this->description,$this->status,$this->id);  
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

        $vehicle = new Vehicle();
        $stmt = $con->prepare('SELECT vehicle.id, vehicle.name, vehicle.type, vehicle.plate, vehicle.fuel, vehicle.transmission, vehicle.description, vehicle.status
         FROM vehicle where vehicle.id=?');
        $stmt->bind_param("s",$id);
        $stmt->execute();

        $stmt->bind_result($vehicle->id,$vehicle->name,$vehicle->type,$vehicle->plate,$vehicle->fuel,$vehicle->transmission,$vehicle->description,$vehicle->status);
        $stmt->fetch();
        $stmt->close();
        return $vehicle;
    }

    public static function getAll()
    {
        $con = Connection::getConnectionObject()->getConnection();
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $vehicles = array(); //Make an empty array
        $stmt = $con->prepare('SELECT  vehicle.id, vehicle.name, vehicle.type, vehicle.plate, vehicle.fuel, vehicle.transmission, vehicle.description, vehicle.status FROM vehicle');
        $stmt->execute();
        $stmt->bind_result($id,$name,$type,$plate,$fuel,$transmission,$description,$status);
        while($stmt->fetch())
        {
            $vehicle = new Vehicle();
            $vehicle->setId($id);
            $vehicle->setName($name);
            $vehicle->setType($type);
            $vehicle->setPlate($plate);
            $vehicle->setFuel($fuel);
            $vehicle->setTransmission($transmission);
            $vehicle->setDescription($description);
            $vehicle->setStatus($status);
           

          

            array_push($vehicles,$vehicle); //Push one by one
        }
        $stmt->close();
        
        return $vehicles;

    }

/*-----------------------------------------------------------------------*/
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Vehicle
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
     * Set type
     *
     * @param string $type
     *
     * @return Vehicle
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set plate
     *
     * @param string $plate
     *
     * @return Vehicle
     */
    public function setPlate($plate)
    {
        $this->plate = $plate;

        return $this;
    }

    /**
     * Get plate
     *
     * @return string
     */
    public function getPlate()
    {
        return $this->plate;
    }

    /**
     * Set fuel
     *
     * @param string $fuel
     *
     * @return Vehicle
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     *
     * @return Vehicle
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Vehicle
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Vehicle
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
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

    public function setId($id)
    {
        $this->id=$id;

        return $this;
    }
}
