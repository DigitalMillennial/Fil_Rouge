<?php

namespace App\DataFixtures;

use App\Entity\category;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use ReflectionProperty;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        include 'fil.php';

        $categoryMap = [];

        // Загружаем категории с принудительным присвоением ID
        foreach ($category as $cat) {
            $categoryDB = new category();
            
            // Принудительно устанавливаем ID
            $reflection = new ReflectionProperty(category::class, 'id');
            $reflection->setAccessible(true);
            $reflection->setValue($categoryDB, (int) $cat['id']);
        
            $categoryDB
                ->setLibelle($cat['libelle'])
                ->setImage($cat['image'])
                ->setActive($cat['active'] === 'Yes');
        
            $manager->persist($categoryDB);
            
            // 🔥 Фикс: сохраняем категорию в массив для связи с блюдами
            $categoryMap[$cat['id']] = $categoryDB;
        }
        
        $manager->flush(); // Сохраняем категории в БД

        // Загружаем блюда
        foreach ($plat as $dish) {
            if (!isset($category[$dish['id_categorie']])) {
                dump("❌ Ошибка: Категория с ID {$dish['id_categorie']} не найдена!");
                continue;
            }

            $platDB = new Plat();
            $platDB
                ->setLibelle($dish['libelle'])
                ->setDescription($dish['description'])
                ->setPrix($dish['prix'])
                ->setImage($dish['image'])
                ->setCategory($categoryMap[$dish['category_id']]);


            $manager->persist($platDB);
        }

        $manager->flush(); // Сохраняем блюда
    }
}