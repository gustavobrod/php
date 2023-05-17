<?php

require 'Album.php';
require 'Musica.php';

$albuns = new SplObjectStorage();

$divide = new Album("Divide");

$albuns->attach($divide);

$scorpion = new Album("Scorpion");

$albuns->attach($scorpion);

$musicasDivide = new SplFixedArray(2);
$musicasDivide[0] = new Musica("Shape of You");
$musicasDivide[1] = new Musica("Castle on the Hill");

$musicasScorpiorn = new SplFixedArray(3);
$musicasScorpiorn[0] = new Musica("Peak");
$musicasScorpiorn[1] = new Musica("Summer Games");
$musicasScorpiorn[2] = new Musica("Jaded");

$albuns[$divide] = $musicasDivide;
$albuns[$scorpion] = $musicasScorpiorn;

foreach($albuns as $album) {
    echo "Album: " . $album->getNome() . "<br>"; 

    foreach($albuns[$album] as $musica) {
        echo "Musica: " . $musica->getNome() . "<br>";
    }

    echo "<br>";
}

