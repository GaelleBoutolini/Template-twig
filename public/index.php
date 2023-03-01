<?php

use EsperoSoft\Faker\Faker;
use \Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__). '/vendor/autoload.php';

$loader = new FilesystemLoader(dirname(__DIR__).'/templates');
//ici, j'indique à twig que tu vas chercher les fichiers dans le template.

$twig = new \Twig\Environment($loader, [
    //'cache' => dirname(__DIR__). '/var/cache',
]);

$faker = new Faker();
//j'ai récupéré ce code dans la doc.

    $users = [];
    //ce tableau vide sera rempli avec les users
    for($i = 0; $i <40; $i++)
    //ici, je renseigne le nombre de users que je veux
{
    $users[$i] = $faker->full_name();
    //je renseigne les attributs des users
}

echo $twig->render('index.html.twig', [
    "title" => "Page Accueil",
    "users" => $users
]);










//pour transmettre les données au template, c'est par l'intermédiaire d'un tableau. Avec la boucle for, on peut transmettre autant de données quon veut.

//['the' => 'variables', 'go' => 'here']);
//dans ce fichier, je mets en parametres de mes users


//ce fichier se trove dans template.
//et je l'ai crée dans le template


// echo "<h2>Bonjour tout le monde</h2>";


//1-j'ai tapé cette commande pour installé faker: composer require espero-soft/faker:dev-master


//2-ensuite, il faut faire un "require_once 'vendor/autoload.php';", si ce n'est pas encore fait.


//3-Enfin, il faut initialiser un objet "faker": $faker = new EsperoSoft\Faker\Faker();



/*
la première ligne crée une nouvelle instance de la classe Faker qui permet de générer des données aléatoires pour différents types de données tels que les noms, adresses, numéros de téléphone, etc.

Ensuite, un tableau vide appelé $users est créé pour stocker les utilisateurs générés. Une boucle for est utilisée pour générer neuf utilisateurs, comme indiqué par la condition $i < 9.

A l'intérieur de la boucle, la ligne $users[$i] = $faker->full_name(); ajoute un nom complet aléatoire à l'index $i du tableau $users.

Finalement, la ligne echo $twig->render('index.html.twig', []); utilise le moteur de template Twig pour afficher la page d'index HTML avec les données simulées. Ici, le tableau vide [] est passé en tant que paramètre pour Twig, ce qui signifie qu'aucune donnée n'est utilisée pour remplir le modèle HTML.

En résumé, ce code génère neuf noms complets aléatoires à l'aide de la bibliothèque Faker et utilise Twig pour afficher une page HTML d'index vide.
 */


