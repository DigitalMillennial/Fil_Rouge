<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1deb3
 */

/**
 * Database `fil`
 */

/* `fil`.`category` */
$category = array(
  array('id' => '21','libelle' => 'Pizza','image' => 'pizza_cat.jpg','active' => '1'),
  array('id' => '22','libelle' => 'Burger','image' => 'burger_cat.jpg','active' => '1'),
  array('id' => '23','libelle' => 'Wraps','image' => 'wrap_cat.jpg','active' => '1'),
  array('id' => '24','libelle' => 'Pasta','image' => 'pasta_cat.jpg','active' => '1'),
  array('id' => '25','libelle' => 'Sandwich','image' => 'sandwich_cat.jpg','active' => '1'),
  array('id' => '26','libelle' => 'Asian Food','image' => 'asian_food_cat.jpg','active' => '0'),
  array('id' => '27','libelle' => 'Salade','image' => 'salade_cat.jpg','active' => '1'),
  array('id' => '28','libelle' => 'Veggie','image' => 'veggie_cat.jpg','active' => '1')
);

/* `fil`.`commande` */
$commande = array(
);

/* `fil`.`doctrine_migration_versions` */
$doctrine_migration_versions = array(
  array('version' => 'DoctrineMigrations\\Version20250120125440','executed_at' => '2025-01-20 12:55:08','execution_time' => '28'),
  array('version' => 'DoctrineMigrations\\Version20250120143610','executed_at' => '2025-01-20 14:36:44','execution_time' => '30'),
  array('version' => 'DoctrineMigrations\\Version20250120150315','executed_at' => '2025-01-20 15:03:30','execution_time' => '21'),
  array('version' => 'DoctrineMigrations\\Version20250204143342','executed_at' => '2025-02-04 14:33:53','execution_time' => '17')
);

/* `fil`.`messenger_messages` */
$messenger_messages = array(
  array('id' => '1','body' => 'O:36:\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\":2:{s:44:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\";a:1:{s:46:\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\";a:1:{i:0;O:46:\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\":1:{s:55:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\";s:21:\\"messenger.bus.default\\";}}}s:45:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\";O:51:\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\":2:{s:60:\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\";O:39:\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\":5:{i:0;s:41:\\"registration/confirmation_email.html.twig\\";i:1;N;i:2;a:3:{s:9:\\"signedUrl\\";s:170:\\"https://127.0.0.1:8000/verify/email?expires=1738748942&signature=KrXesrodg6FXocsR1RXWSPdugh8iFwdkBYFx1UjZlLM%3D&token=74pdzFdt%2BLDeJSo2K1nNlZKJXX%2FZ%2BCp990BXlQgJSDc%3D\\";s:19:\\"expiresAtMessageKey\\";s:26:\\"%count% hour|%count% hours\\";s:20:\\"expiresAtMessageData\\";a:1:{s:7:\\"%count%\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\":2:{s:46:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\";a:3:{s:4:\\"from\\";a:1:{i:0;O:47:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:4:\\"From\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:58:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\";a:1:{i:0;O:30:\\"Symfony\\\\Component\\\\Mime\\\\Address\\":2:{s:39:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\";s:15:\\"admin@resto.org\\";s:36:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\";s:11:\\"Admin Resto\\";}}}}s:2:\\"to\\";a:1:{i:0;O:47:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:2:\\"To\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:58:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\";a:1:{i:0;O:30:\\"Symfony\\\\Component\\\\Mime\\\\Address\\":2:{s:39:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\";s:19:\\"19boiko93@gmail.com\\";s:36:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\";s:0:\\"\\";}}}}s:7:\\"subject\\";a:1:{i:0;O:48:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:7:\\"Subject\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:55:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\";s:25:\\"Please Confirm your Email\\";}}}s:49:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\";i:76;}i:1;N;}}i:4;N;}s:61:\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\";N;}}','headers' => '[]','queue_name' => 'default','created_at' => '2025-02-05 08:49:02','available_at' => '2025-02-05 08:49:02','delivered_at' => NULL),
  array('id' => '2','body' => 'O:36:\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\":2:{s:44:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\";a:1:{s:46:\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\";a:1:{i:0;O:46:\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\":1:{s:55:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\";s:21:\\"messenger.bus.default\\";}}}s:45:\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\";O:51:\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\":2:{s:60:\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\";O:39:\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\":5:{i:0;s:41:\\"registration/confirmation_email.html.twig\\";i:1;N;i:2;a:3:{s:9:\\"signedUrl\\";s:168:\\"https://127.0.0.1:8000/verify/email?expires=1738771621&signature=k5ugLpNPBE95p9R9WmMmUMPxWuNoZpsu1qUiG91%2Bng4%3D&token=Is0oIt%2BPaCQWIIozUByJ0jqxQy30XV7F8rMO7vQSjHQ%3D\\";s:19:\\"expiresAtMessageKey\\";s:26:\\"%count% hour|%count% hours\\";s:20:\\"expiresAtMessageData\\";a:1:{s:7:\\"%count%\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\":2:{s:46:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\";a:3:{s:4:\\"from\\";a:1:{i:0;O:47:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:4:\\"From\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:58:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\";a:1:{i:0;O:30:\\"Symfony\\\\Component\\\\Mime\\\\Address\\":2:{s:39:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\";s:15:\\"admin@resto.org\\";s:36:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\";s:11:\\"Admin Resto\\";}}}}s:2:\\"to\\";a:1:{i:0;O:47:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:2:\\"To\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:58:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\";a:1:{i:0;O:30:\\"Symfony\\\\Component\\\\Mime\\\\Address\\":2:{s:39:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\";s:12:\\"123@gmail.ru\\";s:36:\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\";s:0:\\"\\";}}}}s:7:\\"subject\\";a:1:{i:0;O:48:\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\":5:{s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\";s:7:\\"Subject\\";s:56:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\";i:76;s:50:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\";N;s:53:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\";s:5:\\"utf-8\\";s:55:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\";s:25:\\"Please Confirm your Email\\";}}}s:49:\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\";i:76;}i:1;N;}}i:4;N;}s:61:\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\";N;}}','headers' => '[]','queue_name' => 'default','created_at' => '2025-02-05 15:07:01','available_at' => '2025-02-05 15:07:01','delivered_at' => NULL)
);

/* `fil`.`plat` */
$plat = array(
  array('id' => '14','category_id' => '22','libelle' => 'District Burger','image' => 'hamburger.jpg','description' => 'Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .','prix' => '8'),
  array('id' => '15','category_id' => '21','libelle' => 'Pizza Bianca','image' => 'pizza-salmon.png','description' => 'Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.','prix' => '14'),
  array('id' => '16','category_id' => '23','libelle' => 'Buffalo Chicken Wrap','image' => 'buffalo-chicken.webp','description' => 'Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.','prix' => '5'),
  array('id' => '17','category_id' => '22','libelle' => 'Cheeseburger','image' => 'cheesburger.jpg','description' => 'Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.','prix' => '8'),
  array('id' => '18','category_id' => '24','libelle' => 'Spaghetti aux légumes','image' => 'spaghetti-legumes.jpg','description' => 'Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide','prix' => '10'),
  array('id' => '19','category_id' => '27','libelle' => 'Salade César','image' => 'cesar_salad.jpg','description' => 'Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l\'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.','prix' => '7'),
  array('id' => '20','category_id' => '21','libelle' => 'Pizza Margherita','image' => 'pizza-margherita.jpg','description' => 'Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...','prix' => '14'),
  array('id' => '21','category_id' => '28','libelle' => 'Courgettes farcies au quinoa et duxelles de champignons','image' => 'courgettes_farcies.jpg','description' => 'Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!','prix' => '8'),
  array('id' => '22','category_id' => '24','libelle' => 'Lasagnes','image' => 'lasagnes_viande.jpg
','description' => 'Découvrez notre recette des lasagnes, l\'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l\'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.

','prix' => '12'),
  array('id' => '23','category_id' => '24','libelle' => 'Tagliatelles au saumon','image' => 'tagliatelles_saumon.webp
','description' => 'Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!  

','prix' => '12'),
  array('id' => '24','category_id' => '27','libelle' => 'Olivie','image' => '6745db46063f9.png','description' => 'Olivier salad is a traditional Russian potato salad ','prix' => '5.25')
);

/* `fil`.`user` */
$user = array(
  array('id' => '1','email' => '19boiko93@gmail.com','password' => '$2y$13$d9kzxfrXQY27abGUmqYBKOWTu66x3j9hiSLUxjbfwUU2fz1n0cA1m','roles' => '["ROLE_ADMIN"]','is_verified' => '0'),
  array('id' => '2','email' => '123@gmail.ru','password' => '$2y$13$BTmnCI/srn4rM5IwJm.oU.qGRWlbd7gfL/CdyBeI2lRs36HJ.eWDO','roles' => '["ROLE_USER"]','is_verified' => '0')
);
