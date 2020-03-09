<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;

class userAdmin extends AbstractController
{
    /**
     * @Route("/admin/user", name="admin_user")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
        
         $user = $em ->getRepository(User::class)->findAll();
       
        
        return $this->render('admin/user.html.twig', 
                ['user'=> $user]);
    }
    
    /**
     * @Route(name="deleteUser", path="/delete/User/{id}", requirements={"id": "\d+"})
     */
    public function deleteUser ($id){
        $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository(User::class)->findOneById($id);
        
        $id = $id - 1;
        $em->remove($user); 
        
        $em->flush();
        
        return new RedirectResponse('/admin/user');
    }
    
}
