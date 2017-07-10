<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


use AppBundle\Entity\Users;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request)
    {

        
        return new Response('admin');
    }

}
