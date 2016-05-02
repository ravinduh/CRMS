<?php
nameSpace AppBundle/Controller;


class VehicleController extends Controller
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
}