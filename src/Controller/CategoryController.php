<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
  
    public function index(CategoryRepository $repo): Response
    {
        $categories = $repo-> findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    
    #[Route('/category/{name}', name: 'app_category')]
    public function getCategory(string $name, CategoryRepository $categoryRepo, PostRepository $postRepo, CategoryRepository $repo): Response
    {
        $categories = $repo-> findAll();
        $category = $categoryRepo-> findOneByName($name);
        $posts = $postRepo-> findByCategory($category-> getId());

        return $this->render(
            'category/category.html.twig', 
            [
                'categories' => $categories,
                'category' => $category,
                'posts' => $posts
            ]
        );
    }

}
