<?php

nameSpace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use AppBundle\Entity\Customer;

class SecurityController extends Controller
{
/**
* @Route("/login", name="login")
*/
public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    //    Signup

    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction(Request $request)
    {

        $customer = new Customer();

        $form = $this->createFormBuilder($customer)
            ->add('name', TextType::class)
            ->add('nic', TextType::class,array('label' => 'NIC Number'))
            ->add ('ContactNumber')
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array('label' => 'Sign Up'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $customer->validate()) {
            // ... perform some action, such as saving the task to the database

            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($customer);

            //Encode the password
            $encodedPassword = password_hash($customer->getPassword(),PASSWORD_BCRYPT);
            $customer->setPassword($encodedPassword);

//            $customer->setIsActive(true);
            $customer->save();


            return $this->redirectToRoute('task_success');
        }


        $error = $customer->getError(); //Set a valid error


        // replace this example code with whatever you need
        return $this->render('security/signup.html.twig', array('form' => $form->createView(),'error'         => $error,));
    }
}