<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Users;

use AppBundle\Form\UserRegister;


class RegisterController extends Controller
{
	/**
	 *
	 * @Route("/inscription", name="register")
	 */
	function registerAction(Request $request)	
	{
		$user = new Users();

		$form = $this->createForm(UserRegister::class, $user);
		
		if($request->isMethod('post'))
		{
			$form->handleRequest($request);
		
			if($form->isSubmitted() && $form->isValid())
			{
				$password = $request->get('user_register');
				$password = $password['password']['first'];
				$encoder = $this->container->get('security.password_encoder');
				$encodedPassword = $encoder->encodePassword($user, $password);
dump($password, $request);
				/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
				$file = $user->getPhoto();
				$fileName = $this->get('app.image_post_uploader')->upload($file);

				$user->setPassword($encodedPassword);
				$user->setPhoto($fileName);
				$user->setLastConnexion(new \DateTime());
				
				$em = $this->getDoctrine()->getManager();
		        $em->persist($user);
		        $em->flush();



				return $this->redirectToRoute('home');
			}
		}

		return $this->render('security/register.html.twig', [
				    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			        'form' => $form->createView()			        
		    	]);
	}
}