<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Users;
use AppBundle\Form\UserLog;

class SecurityController extends Controller
{
/**
	* 
	* @Route("/login", name="login")
	*/    
	public function loginAction(Request $request)
	{
	   
	    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	      return $this->redirectToRoute('home');
	    }
		
	    $user = new Users;
	    dump($user);
	    $form = $this->createForm(UserLog::class, $user); 
    
	    // Le service authentication_utils permet de récupérer le nom d'utilisateur
	    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
	    // (mauvais mot de passe par exemple)
	    $authenticationUtils = $this->get('security.authentication_utils');

	    return $this->render('security/login.html.twig', array(
	      'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
	      // 'form' => $form->createView(),
	      'last_username' => $authenticationUtils->getLastUsername(),
	      'error'         => $authenticationUtils->getLastAuthenticationError(),
	    ));
	}

	/**
	* 
	* @Route("/login_check", name="login_check")
	*/
	public function check()
	{
	    throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
	}

	/**
	* 	
	* @Route("/logout", name="logout")
	*/
	public function logout()
	{
	    throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
	}
}