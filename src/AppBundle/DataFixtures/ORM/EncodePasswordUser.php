<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Users;
use AppBundle\Entity\Post;
use AppBundle\Entity\Commentaires;

class EncodePasswordUser implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
     //    $user = array($user1 = new Users(), $user2 = new Users(), $user3 = new Users(), $user4 = new Users(), $user5 = new Users());

     //    $plainPasswords = array('user1', 'user2', 'user3', 'user4', 'user5');
     //    $i = 0;
     //    $encoder = $this->container->get('security.password_encoder');
        
     //    foreach ($plainPasswords as $plainPassword) 
     //    {

        
	    //     $encodedPassword = $encoder->encodePassword($user[$i], $plainPassword);

	    //     $user[$i]->setName('user'.($i+1));
	    //     $user[$i]->setUsername('user'.($i+1));
	    //     $user[$i]->setPassword($encodedPassword);
	    //     $user[$i]->setEmail('user'.($i+1).'@gmail.com');
	    //     $user[$i]->setPhoto('');
	    //     $user[$i]->setPresentation('user'.($i+1).' is the best you know that!!!!');
	    //     $user[$i]->setInscription(date_create('2017-01-17 22:35:05'));
	    //     $user[$i]->setBirthday(date_create('1989-05-24'));
	    //     $user[$i]->setLastConnexion(date_create('2017-04-02 12:47:29'));
	    //     $user[$i]->setIsActive(true);
	    //     $user[$i]->setIsAccountNonExpired(true);
	    //     $user[$i]->setIsAccountNonLocked(true);
	    //     $user[$i]->setIsCredentialsNonExpired(true);
	    //     $user[$i]->setIsEnabled(true);
	    //     $user[$i]->setRoles('ROLE_USER');
	    //     $user[$i]->setSalt('oVNç_è');

	    //     $manager->persist($user[$i]);
	        
	    //     $i++;
	    // }
  //    //    	$manager->flush();
		// $user1 =  $manager
		//         	->getRepository('AppBundle:Users')
		//         	->find(8);
  //   	$user2 =  $manager
		// 	    	->getRepository('AppBundle:Users')
		// 	    	->find(9);
  //   	$user3 =  $manager
		// 	    	->getRepository('AppBundle:Users')
		// 	    	->find(10);
  // $post = new Post();

  //       $post->setCategorie('musique');
  //       $post->setTitlePost('Reggae is alive!!!!');
  //       $post->setImagePost('musique');
  //       $post->setTextePost('blablablablablablablablablablablablablablablablablablablablablablablabla musique');
  //       $post->setCreated(date_create('2017-04-09 19:39:18'));
  //       $post->setKeywords('musique, music, reggae, alive');
  //       $post->setLikePost(5);
  //       $post->setUsers($user1);

  //       $com1 = new Commentaires();

  //       $com1->setTexteCommentaire('blablablablablablablablablablablablablablablablablablablablablablablablablablabla commentaire 1');
  //       $com1->setCreated(new \DateTime());
  //       $com1->setUser($user2);

  //       $com2 = new Commentaires();
        
  //       $com2->setTexteCommentaire('blablablablablablablablablablablablablablablablablablablablablablablablablablabla commentaire 2');
  //       $com2->setCreated(new \DateTime());
  //       $com2->setUser($user3);

  //       $post->addCommentaire($com1);
  //       $post->addCommentaire($com2);



        $us1 = $manager->getRepository('AppBundle:Users')->find(8);
        $us2 = $manager->getRepository('AppBundle:Users')->find(9);
        $us3 = $manager->getRepository('AppBundle:Users')->find(10);
        $us4 = $manager->getRepository('AppBundle:Users')->find(11);
        $us5 = $manager->getRepository('AppBundle:Users')->find(12);
        $us6 = $manager->getRepository('AppBundle:Users')->find(17);

        $us1->setSalt(md5(uniqid()));
        $us2->setSalt(md5(uniqid()));
        $us3->setSalt(md5(uniqid()));
        $us4->setSalt(md5(uniqid()));
        $us5->setSalt(md5(uniqid()));
        $us6->setSalt(md5(uniqid()));

        $manager->persist($us1);
        $manager->persist($us2);
        $manager->persist($us3);
        $manager->persist($us4);
        $manager->persist($us5);
        $manager->persist($us6);
        $manager->flush();
    }

}