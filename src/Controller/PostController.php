<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post/{slug}', name: 'app_post')]
    public function index(string $slug, PostRepository $repo, CategoryRepository $catRepo): Response
    {
        $post = $repo-> findOneBySlug($slug);
        $category = $catRepo-> findOneById($post -> getCategory());

        return $this->render('post/index.html.twig', [
            'post' => $post,
            'category' => $category
        ]);
    }


}
