<?php

namespace App\Controller;

use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    #[Route('/demande/popular', name: 'demande_popular', methods: ['GET'])]
    public function popularCategories(): JsonResponse
    {
        $categories = $this->productService->getPopularCategories();
        return $this->json($categories);
    }

    #[Route('/demande/category/{id}', name: 'demande_category', methods: ['GET'])]
    public function categoryProducts(int $id): JsonResponse
    {
        $products = $this->productService->getProductsByCategory($id);
        return $this->json($products);
    }

    #[Route('/demande/search', name: 'demande_search', methods: ['GET'])]
    public function searchProducts(Request $request): Response
    {
        $query = $request->query->get('query');

        if (!$query) {
            return $this->render('search.html.twig', [
                'error' => 'Введите запрос для поиска',
                'products' => [],
                'query' => $query
            ]);
        }

        $products = $this->productService->searchProducts($query);

        if (empty($products)) {
            return $this->render('search.html.twig', [
                'error' => 'Ничего не найдено по запросу: ' . $query,
                'products' => [],
                'query' => $query
            ]);
        }

        return $this->render('search.html.twig', [
            'products' => $products,
            'query' => $query,
            'error' => null
        ]);
    }

    #[Route('/demande/search.json', name: 'demande_search_json', methods: ['GET'])]
    public function searchProductsJson(Request $request): JsonResponse
    {
        $query = $request->query->get('query');
        
        if (!$query) {
            return $this->json(['error' => 'Введите запрос для поиска'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $products = $this->productService->searchProducts($query);
        return $this->json($products);
    }

    // Новые маршруты для обработки формы

    #[Route('/demande/contact', name: 'demande_contact')]
    public function contactForm()
    {
        // Показываем форму для связи (contact.html.twig)
        return $this->render('contact.html.twig');
    }

    #[Route('/demande/process_form', name: 'demande_process_form', methods: ['POST'])]
    public function processForm(Request $request): Response
    {
        // Получаем данные формы
        $name = $request->request->get('name');
        $surname = $request->request->get('surname');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $message = $request->request->get('message');

        // Валидация данных (по желанию)
        if (empty($name) || empty($surname) || empty($email) || empty($phone) || empty($message)) {
            return $this->render('contact.html.twig', [
                'error' => 'Все поля обязательны для заполнения.',
            ]);
        }

        // Логика обработки данных, например, отправка email или сохранение в базу данных
        // Для примера просто отобразим подтверждение

        return $this->render('form_success.html.twig', [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ]);
    }
}
