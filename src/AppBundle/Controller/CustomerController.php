<?php
nameSpace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;  
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormError;

class CustomerController extends Controller
{
	/**
	* @Route("/customer/", name="customer_home")
	*/
	public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('customer_viewAll');
    }

     /**
     * @Route("/customer/create", name="customer_create")
     */
    public function createAction(Request $request)
    {

        $customer = new Customer(); 


        $form = $this->createFormBuilder($customer)
            ->add('name',TextType::class)
            ->add('nic', TextType::class)
            ->add('contactNumber', TextType::class)
            ->add('address', TextType::class)
            ->add('email', TextType::class)
            

            ->add('save', SubmitType::class, array('label' => 'Create customer'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // ... perform some action, such as saving the task to the database

            $customer->save();

            return $this->redirectToRoute('customer_viewAll');
        }

        // replace this example code with whatever you need
        return $this->render('customer/create.html.twig', array('form' => $form->createView()));
    }


       /**
     * @Route("/customer/view", name="customer_viewAll")
     */
	public function viewallAction( Request $request)
    {
        
        $customers =  Customer::getAll();
        return $this->render('customer/viewAll.html.twig', array('customers' => $customers));

    }

     /**
     * @Route("/customer/view/{id}", name="customer_view")
     */
    public function viewAction($id, Request $request)
    {
        $customer =  Customer::getOne($id);
      
        return $this->render('customer/view.html.twig', array('customer' =>$customer));  

    }
}