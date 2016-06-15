<?php

nameSpace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;
use AppBundle\Entity\CustomerReserveVehicle;  
use AppBundle\Entity\Vehicle;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormError;

// under construction

class ReservationController extends Controller
{

	/**
	* @Route("/reservation/", name="reservation_home")
	*/
	public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('reservation_viewAll');
    }


     /**
     * @Route("/reservation/create", name="reservation_create")
     */
    public function createAction(Request $request)
    {

        $reservation = new CustomerReserveVehicle(); 
        $customers = Customer::getAll(); // getting all the customers
        $vehicles = Vehicle::getAll();  // getting all the vehicles

        $customerIds = array(); // creating an array with customer ids
        foreach ($customers as $customer){
        	$customerIds[$customer->getNic()]= $customer->getId();
        }

        $vehicleIds = array(); // creating an array with vehicle ids
        foreach ($vehicles as $vehicle){
        	$vehicleIds[$vehicle->getName()] = $vehicle->getId();
        }

        $form = $this->createFormBuilder($reservation)
            ->add ('customerId',ChoiceType::class,array(
                'choices'=> $customerIds,
                'choices_as_values'=> true,
                'label'=>'Customer'
            ))

            ->add ('vehicleId',ChoiceType::class,array(
                'choices'=> $vehicleIds,
                'choices_as_values'=> true,
                'label'=>'Vehicle'
            ))

            ->add('startDate',DateType::class,array(
                'years'=>range(date('Y'),date('Y')),'months'=>range(date('m'),date('m')),'days'=>range(date('d'),date('d'))
            ))
            ->add('endDate',DateType::class,array(
                'years'=>range(date('Y'),date('Y')+2)
            ))

            ->add('save', SubmitType::class, array('label' => 'Reserve Vehicle'))
            ->getForm();

        $form->handleRequest($request);
        $vehicle= Vehicle::getOne($form["vehicleId"]->getData());
        if ($form->isSubmitted()) {
            // ... perform some action, such as saving the task to the database


            // changes vehicle status to reserved

           if ( $vehicle->isAvailable($form["startDate"]->getData(),$form["endDate"]->getData()))
           {
               // changes vehicle status to reserved
               $vehicle->changeStatus('reserved',$form["vehicleId"]->getData());
               $reservation->save();
               return $this->redirectToRoute('reservation_viewAll');
           }
            else
            {
                $vehicle->setError("Vehicle Unavailable in the given time period");
            }



        }

        // replace this example code with whatever you need

        return $this->render('reservation/create.html.twig', array('form' => $form->createView(),'form_error'=>$vehicle->getError()));
    }

    /**
     * @Route("/reservation/viewAll", name="reservation_viewAll")
     */
    public function viewAllAction(Request $request)
    {
        $reservations = CustomerReserveVehicle::getAll();
        return $this->render('reservation/viewall.html.twig', array('reservations'=>$reservations));
    }

    /**
     * @Route("/reservation/view/{id}", name="reservation_view")
     */
    public function viewAction($id,Request $request)
    {
        $reservation = CustomerReserveVehicle::getOne($id);

        return $this->render('reservation/view.html.twig', array('reservation'=>$reservation));
    }
}