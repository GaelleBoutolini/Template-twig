<?php

use \Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__). '/vendor/autoload.php';

$loader = new FilesystemLoader(dirname(__DIR__).'/templates');
//ici, j'indique à twig que tu vas chercher les fichiers dans le template.

$twig = new \Twig\Environment($loader, [
    //'cache' => dirname(__DIR__). '/var/cache',
]);

echo $twig->render('index.html.twig'); //['the' => 'variables', 'go' => 'here']);

//ce fichier se trove dans template.
//et je l'ai crée dans le template


echo "<h2>Bonjour tout le monde</h2>";