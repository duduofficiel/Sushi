<?php

// Utilisation de la classe Kernel - Kernel კლასის გამოყენება
use App\Kernel;

// Inclusion de l'autoloader pour utiliser les paramètres et les classes nécessaires - ავტოლოდერის ინკლუზია, რათა გამოიყენოს პარამეტრები და აუცილებელი კლასები
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// Une fonction qui retourne un objet Kernel, lisant l'environnement et les paramètres de débogage à partir du contexte - 
// ფუნქცია, რომელიც აბრუნებს Kernel ობიექტს, წაიკითხავს კონტექსტიდან გარემოს და დიაგნოსტიკის პარამეტრებს
return function (array $context) {
    // Création de l'objet Kernel avec les contextes APP_ENV et APP_DEBUG - Kernel ობიექტის შექმნა APP_ENV და APP_DEBUG კონტექსტით
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
