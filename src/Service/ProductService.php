<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class ProductService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getPopularCategories(): array
    {
        $conn = $this->entityManager->getConnection();
        $sql = "
            SELECT c.libelle, c.image, c.id, SUM(quantite) AS total
            FROM categorie c
            LEFT JOIN plat p ON p.id_categorie = c.id
            LEFT JOIN commande comma ON comma.id_plat = p.id
            GROUP BY c.libelle
            ORDER BY total DESC
            LIMIT 6;
        ";
        return $conn->fetchAllAssociative($sql);
    }

    public function getProductsByCategory(int $idcat): array
    {
        $conn = $this->entityManager->getConnection();
        $sql = "
            SELECT id, libelle, prix, image 
            FROM plat
            WHERE id_categorie = :idcat
            LIMIT 6;
        ";
        return $conn->fetchAllAssociative($sql, ['idcat' => $idcat]);
    }

    public function searchProducts(string $query): array
    {
        $conn = $this->entityManager->getConnection();
        $sql = "
            SELECT id, libelle, prix, image
            FROM plat
            WHERE libelle LIKE :query OR description LIKE :query;
        ";
        return $conn->fetchAllAssociative($sql, ['query' => '%' . $query . '%']);
    }
}
