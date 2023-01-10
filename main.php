<?php
require_once 'model/Pokemon.php';
require_once 'model/PokemonFeu.php';
require_once 'model/PokemonEau.php';
require_once 'model/PokemonPlante.php';

$miaous = new Pokemon("Miaous", 800, 132);
echo $miaous."</br>";

$salameche = new PokemonFeu("Salameche", 700, 200);
echo $salameche."</br>";

$carapuce = new PokemonEau("Carapuce", 750, 180);
echo $carapuce."</br>";

$bulbizare = new PokemonPlante("Bulbizare", 900, 120);
echo $bulbizare."</br></br>";


$salameche->attaquer($bulbizare);
echo $bulbizare->getName().PHP_EOL.$bulbizare->getHp()."</br>";

$salameche->attaquer($carapuce);
echo $carapuce->getName().PHP_EOL.$carapuce->getHp()."</br>";

$salameche->attaquer($miaous);
echo $miaous->getName().PHP_EOL.$miaous->getHp()."</br>";

$carapuce->attaquer($bulbizare);
echo $bulbizare->getName().PHP_EOL.$bulbizare->getHp()."</br>";

$carapuce->attaquer($salameche);
echo $salameche->getName().PHP_EOL.$salameche->getHp()."</br>";

$carapuce->attaquer($miaous);
echo $miaous->getName().PHP_EOL.$miaous->getHp()."</br>";

$carapuce->attaquer($salameche);
echo $salameche->getName().PHP_EOL.$salameche->getHp()."</br>";

$carapuce->attaquer($salameche);
echo $salameche->getName().PHP_EOL.$salameche->getHp()."</br>";

echo $miaous->isDead()."</br>";
echo $salameche->isDead()."</br>";

