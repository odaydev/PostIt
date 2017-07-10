<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;


class ProfilController extends Controller
{
	/**
	 *
	 * @Route("/profil/{id}", name="profil")
	 */
	function profilAction($id)	
	{
		
		$profil = $this->getDoctrine()->getManager()->getRepository('AppBundle:Users')->find($id);

	dump($profil);
		return $this->render('profil.html.twig', [
		    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
	        'user' => $profil			        
    	]);
	}
}