<?php

namespace App\Controller;
use App\Repository\CategoryRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
  
    #[Route('/plats/{categorie_id}', name:"plats_by_category")]
     
    public function platsByCategory(int $categorie_id, PlatRepository $platRepository): Response
    {
        // Получаем все блюда из указанной категории
        $plats = $platRepository->findBy(['category' => $categorie_id]);

        // Передаем данные в шаблон
        return $this->render('catalogue/plats.html.twig', [
            'plats' => $plats,
        ]);
    }

   // Новый маршрут для страницы категорий
   #[Route('/categories', name: 'categories')]
   public function categories(CategoryRepository $categoryRepository): Response
   {
       $categories = $categoryRepository->findAll(); // Получаем все категории
       return $this->render('catalogue/categories.html.twig', [
           'categories' => $categories,
       ]);
   } 
   
    // Новый маршрут для страницы plats
    #[Route('/plats', name: 'plats')]
    public function plats(PlatRepository $platRepository): Response
    {
        $plats = $platRepository->findAll(); // Получаем все блюда
        return $this->render('catalogue/plats.html.twig', [
            'plats' => $plats,
        ]);
    }
}
