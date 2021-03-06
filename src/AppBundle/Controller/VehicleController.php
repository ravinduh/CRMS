<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Vehicle;  
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormError;

class VehicleController extends Controller
{
	    /**
     * @Route("/vehicle/", name="vehicle_home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('vehicle_viewAll');
    }


    /**
     * @Route("/vehicle/create", name="vehicle_create")
     */
    public function createAction(Request $request)
    {

        $vehicle = new Vehicle(); 


        $form = $this->createFormBuilder($vehicle)
            ->add('name',TextType::class)
            ->add('type', TextType::class)
            ->add('plate', TextType::class)
            ->add('fuel', ChoiceType::class,array('choices'=>array('Diesel'=>'Diesel','Petrol'=>'petrol','Hybrid'=>'Hybrid')))
            ->add('transmission', ChoiceType::class, array('choices'=>array('Auto'=>'Auto','Manual'=>'Manual')))
            ->add('description', TextType::class)
            ->add('status', ChoiceType::class,array('choices'=>array('Reserved'=>'reserved','Rented'=>'rented','Available'=>'available')))

            ->add('save', SubmitType::class, array('label' => 'Create vehicle'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // ... perform some action, such as saving the task to the database

            $vehicle->save();

            return $this->redirectToRoute('vehicle_viewAll');
        }

        // replace this example code with whatever you need
        return $this->render('vehicle/create.html.twig', array('form' => $form->createView()));
    }

        /**
     * @Route("/vehicle/view", name="vehicle_viewAll")
     */
    public function viewallAction( Request $request)
    {
        
        $vehicles =  Vehicle::getAll();
        return $this->render('vehicle/viewall.html.twig', array('vehicles' => $vehicles));

    }

    /**
     * @Route("/vehicle/view/{id}", name="vehicle_view")
     */
    public function viewAction($id, Request $request)
    {
        $vehicle =  Vehicle::getOne($id);
      
        return $this->render('vehicle/view.html.twig', array('vehicle' =>$vehicle));  

    }

    /**
     * @Route("/vehicle/changeStatus/{id}/{status}", name="vehicle_dispatch")
     */

  public function changeStatusAction($id, $status , Request $request)
  {


    $vehicle = New Vehicle();
    $vehicle->changeStatus($status, $id);

      return $this->redirectToRoute('vehicle_viewAll');


  }
}