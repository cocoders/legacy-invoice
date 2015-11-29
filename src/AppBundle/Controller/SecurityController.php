<?php

namespace AppBundle\Controller;

use AppBundle\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\SystemAccount;



class SecurityController extends Controller
{
    /**
     * @Route ("/login", name="login")
     */
    public function loginAction(Request $request) {
        //$error = $authenticationUtils->getLastAuthenticationError();
        //$lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('invoice/login.html.twig',[
          //  'last_username' => $lastUsername,
          // 'error' => $error,
                ]); 
    }
    /**
     * @Route ("/login_check", name="login_check")
     */
    public function login_checkAction() {
               
    }
    /**
     * @Route ("/logout", name="logout")
     */
    public function logoutAction() {
        
    }
    /**
     * @Route ("/register", name="register")
     */
    public function registerAction(Request $request) {
        
        $form = $this->createForm(new RegisterType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->get('register_user')->execute($form->getData());

            $this->addFlash('success', 'User created!');

            return $this->redirectToRoute('login');
        }

        
        return $this->render('invoice/register.html.twig', ['form' => $form->createView()]);
    }
    
//    /**
//     * 
//     * @Route ("/registerUser","registerUser")
//     */
//    public function registerUserAction() {
////        
////        
////        
////        
////        $user = new SystemAccount();
////        $user = setUsername($username);
////        $user = setPassword($password);
////        $user = setVatIdNumber($vat);
////        
////        $em = $this->getDoctrine()->getManager();
////        $em->persist($user);
////        $em->flush();
////        
////        return new Response('Created new User');
////       
//    }
    
}
