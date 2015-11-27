<?php

namespace AppBundle\Controller;

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
    public function registerAction() {
        
        $user = new SystemAccount();
        
        $form = $this->createFormBuilder($user)
            ->add('username','text')
            ->add('password', 'password')
            ->add('vat','integer')        
            ->add('save','submit', array('label' => 'Create User'))        
            ->getForm();
        
        
        return $this->render('invoice/register.html.twig', ['form' => $form->createView()
                ]);
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