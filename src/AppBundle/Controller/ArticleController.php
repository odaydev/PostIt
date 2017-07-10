<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commentaires;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Form\UserCommentaire;

class ArticleController extends Controller
{
	/**
	 *
	 * @Route("/art/{id}", name="article")
	 */
	function articleAction($id, Request $request)
	{
		
		$article = new Commentaires();

        $form = $this->createForm(UserCommentaire::class, $article, array(
            'action' => $this->generateUrl('addComment'),
            ));

        $article_view = $this->getDoctrine()->getManager()->getRepository('AppBundle:Post')->find($id);

        if (null === $article_view) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

		return $this->render('article.html.twig', [
		    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
	        'article' => $article_view,
	        'form' => $form->createView()
    	]);
	}
}