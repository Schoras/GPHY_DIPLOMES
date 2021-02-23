<?php

namespace App\Controller;

use App\Entity\User;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */

    public function admin(Request $request, PaginatorInterface $paginator)
    {
        $data = $this->getDoctrine()->getRepository(User::class)->findAll(['desc']);

        $users = $paginator->paginate(
            $data,
            $request->query->getInt('page', 1), 6);

        return $this->render('admin/index.html.twig', ['users'=>$users]);
    }
}
