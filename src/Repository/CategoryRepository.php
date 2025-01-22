<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Category>
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * Возвращает список популярных категорий, отсортированных по названию.
     *
     * @return Category[] Возвращает массив объектов Category.
     */
    public function findPopularCategories(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.libelle', 'ASC') // Сортировка по названию категории
            ->getQuery()
            ->getResult();
    }

    /**
     * Пример метода для поиска категорий по полю.
     *
     * @param mixed $value Значение для фильтрации.
     * @return Category[] Возвращает массив объектов Category.
     */
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /**
     * Пример метода для поиска одной категории по полю.
     *
     * @param mixed $value Значение для фильтрации.
     * @return Category|null Возвращает объект Category или null, если ничего не найдено.
     */
    public function findOneBySomeField($value): ?Category
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
