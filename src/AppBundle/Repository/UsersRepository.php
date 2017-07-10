<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository implements UserLoaderInterface
{
	
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
			            ->where('u.username = :username OR u.email = :email')
			            ->setParameter('username', $username)
			            ->setParameter('email', $username)
			            ->getQuery()
			            ->getOneOrNullResult();
    }

	public function logVerif($email, $psw){


        $rq = $this->createQueryBuilder('u');
        
        $rq->where('u.email = :email')
        ->setParameter('email', $email);
        
        $user = $rq->getQuery()->getOneOrNullResult();

       if(null === $user){

			return null;

		}else{

	        $password = $user->getPassword();
        	$pswhash = md5($psw);

        	if($pswhash == $password){

        		return $user->getId();

        	}else{

	        	return null;
        	}
	    }

	}

	
}