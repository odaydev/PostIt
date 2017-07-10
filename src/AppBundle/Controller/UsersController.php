<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use AppBundle\Entity\Users;
use AppBundle\Entity\Post;
use AppBundle\Entity\Commentaires;

use AppBundle\Form\UserPost;


class UsersController extends Controller{

	/**
     * @Route("/", name="home")
     */
	public function logForm(Request $request)
	{

	    $articles =  $this->getDoctrine()
		        	->getManager()
		        	->getRepository('AppBundle:Post')
		        	->findAll();
		        	// ->getArticles(1);

		return $this->render('default/index.html.twig', [
			            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			            'articles' => $articles
			        ]);        
	}

	/**
	 * @Route("/addComment", name="addComment")
	 */
	public function addComment(Request $request)
	{

        if($request->isMethod('post')){

            $values = $request->request->get('user_commentaire');
            $id_post = $values['post'];
            $texte = $values['texteCommentaire'];

            $manager = $this->getDoctrine()->getManager();

            $post = $manager->getRepository('AppBundle:Post')->find($id_post);
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            dump($id_post, $request,$user);
            $comment = new Commentaires();

            $comment->setCreated(new \DateTime());
            $comment->setTexteCommentaire($texte);
            $comment->setUsers($user);
            $comment->setLike(null);
            $comment->setPost($post);

            $manager->persist($comment);
            $manager->flush();

        }

        return $this->redirect($request->server->get('HTTP_REFERER'));

    }

	/**
	 * @Route("/post", name="post")
	 */	
	public function postAction(Request $request)
	{

		$post = new Post();
dump($post);
		$form = $this->createForm(UserPost::class, $post);
		$form->handleRequest($request);

		return $this->render('post.html.twig', [
			            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			            'form' => $form->createView(),
			        ]);	
	}

	/**
	 * @Route("/post/add", name="addPost")
	 */
	public function addPost(Request $request)
	{
		
		$post = new Post();
        
        $form = $this->createForm(UserPost::class, $post);
		$form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {

			// $file stores the uploaded PDF file
			/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
			// $file = $request->files->get('myentity')['pictureFile'];
			$file = $post->getImagePost();
			dump($file, $request);


			// Generate a unique name for the file before saving it
			$fileName = $this->get('app.image_post_uploader')->upload($file);


			$user_post = $request->get('user_post');

			$categories = $user_post['categorie'];
			$title = $user_post['titlePost'];
			$texte = $user_post['textePost'];
			$keywords = $user_post['keywords'];
dump($categories);
			$manager = $this->getDoctrine()->getManager();

			$user = $this->container->get('security.token_storage')->getToken()->getUser(); 


			$post->setCategorie($categories);
			$post->setTitlePost($title);
			$post->setImagePost($fileName);
			$post->setTextePost($texte);
			$post->setUsers($user);
			$post->setCreated(new \DateTime());
			$post->setKeywords($keywords);
			$post->setLikePost(0);

			$manager->persist($post);
			$manager->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Post bien enregistrée.');
			// dump($request->getUri());
			return $this->redirectToRoute('home');
		}

        return $this->render('post.html.twig', [
			            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			            'form' => $form->createView()
			        ]);
	}

	/**
	*@Route("/remove_com/{id}", name="removecom")
	*/
	public function removeCom(Request $request)
	{
		$add = $request->server->get("HTTP_REFERER");
		$id = $request->get("id");
		$this->getDoctrine()->getManager()->getRepository('AppBundle:Commentaires')->removeCommentaire($id);

		return $this->redirect($add);
	}

}