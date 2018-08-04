<?php
require_once 'vendor/autoload.php';


// $loader = new Twig_Loader_Array(array(
//     'index' => 'Hello {{ name }}!',
// ));
$loader = new Twig_Loader_Filesystem('template');
// $twig = new Twig_Environment($loader, array(
//     'cache' =>false));
$twig = new Twig_Environment($loader);

$faker = Faker\Factory::create('fr_FR');
$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

echo $twig->render('index.twig.html', [
    // 'name' => 'Fabien'
    'firstname' => $faker->firstname,
    'lastname' => $faker->lastname,
    'job' => $faker->jobTitle,
    'mail' => $faker->freeEmail,
    'phone' => $faker->phoneNumber,
    'buildingNumber' => $faker->buildingNumber,
    'streetName' => $faker->streetName,
    'city' => $faker->city,
    'cityNumber' => $faker->postcode,
    'company' => $faker->company,
    'catchPhrase' => $faker->catchPhrase,


    'userImage' => $faker->imageUrl($width = 200, $height = 200, 'people'),
    'productImage' => $faker->imageUrl($width = 200, $height = 200, 'technics'),


    // 'card_url' => $card_url
    'productName' => $faker->productName,
    // 'productAdjective' => $faker->productAdjective,
    'productMaterial' => $faker->word,
    'domainName' => $faker->domainName,
    'url' => $faker->url,
    'color'=> $faker->safeColorName,
    'price' => $faker->numberBetween($min = 100, $max = 9999) 
]);