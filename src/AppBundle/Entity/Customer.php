<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Controller\Connection;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nic", type="string", length=10, nullable=false)
     */
    private $nic;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_number", type="string", length=10, nullable=false)
     */
    private $contactNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=45, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
/*--------------------------manually added methods--------------------*/

    public function save()
    {

      if($this->id ==null)
        {
           
        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('INSERT INTO `customer` (`name`,`nic`, `contact_number`, `address`, `email`) VALUES (?,?, ?,?,?)');  
        $stmt->bind_param("sssss",$this->name,$this->nic,$this->contactNumber,$this->address,$this->email);  
        $stmt->execute();  
        $stmt->close();
        }
        else
        {
        $con = Connection::getConnectionObject()->getConnection();
        $stmt = $con->prepare('UPDATE vehicle SET name =?,nic=?,contact_number=?,address=?,email=? WHERE id =?');  
        $stmt->bind_param("ssssss",$this->name,$this->type,$this->plate,$this->fuel,$this->transmission,$this->description,$this->status,$this->id);  
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

        $customer = new Customer();
        $stmt = $con->prepare('SELECT customer.id, customer.name, customer.nic, customer.contact_number, customer.address, customer.email
         FROM customer where customer.id=?');
        $stmt->bind_param("s",$id);
        $stmt->execute();

        $stmt->bind_result($customer->id,$customer->name,$customer->nic,$customer->contactNumber,$customer->address,$customer->email);
        $stmt->fetch();
        $stmt->close();
        return $customer;
    }

    public static function getAll()
    {
        $con = Connection::getConnectionObject()->getConnection();
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $customers = array(); //Make an empty array
        $stmt = $con->prepare('SELECT  customer.id, customer.name, customer.nic, customer.contact_number, customer.address, customer.email FROM customer');
        $stmt->execute();
        $stmt->bind_result($id,$name,$nic,$contactNumber,$address,$email);
        while($stmt->fetch())
        {
            $customer = new Customer();
            $customer->setId($id);
            $customer->setName($name);
            $customer->setNic($nic);
            $customer->setContactNumber($contactNumber);
            $customer->setAddress($address);
            $customer->setEmail($email);
           

            array_push($customers,$customer); //Push one by one
        }
        $stmt->close();
        
        return $customers;
    }
/*----------------------------------------------------------------------*/
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Customer
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
     * Set nic
     *
     * @param string $nic
     *
     * @return Customer
     */
    public function setNic($nic)
    {
        $this->nic = $nic;

        return $this;
    }

    /**
     * Get nic
     *
     * @return string
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Set contactNumber
     *
     * @param string $contactNumber
     *
     * @return Customer
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
