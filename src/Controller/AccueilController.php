<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findPopularCategories(6);
        return $this->render('accueil/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    // Новый маршрут для страницы категорий
    #[Route('/categories', name: 'categories')]
    public function categories(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll(); // Получаем все категории
        return $this->render('accueil/categories.html.twig', [
            'categories' => $categories,
        ]);
    }
    
    // Новый маршрут для страницы plats
    #[Route('/plats', name: 'plats')]
    public function plats(PlatRepository $platRepository): Response
    {
        $plats = $platRepository->findAll(); // Получаем все блюда
        return $this->render('accueil/plats.html.twig', [
            'plats' => $plats,
        ]);
    }
}
