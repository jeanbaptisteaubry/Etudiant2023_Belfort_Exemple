<?php
/*
 * Ecrire le programme qui à partir d’un rayon, d’une longueur, d’une largeur et d’une hauteur, calcule :
Une circonférence : 2 * pi * rayon
La surface d’un cercle : pi * rayon²
La surface d’un rectangle : longueur * largeur
Le volume d’une sphère : 4/3*pi*rayon^3
Le volume d’un cube : longueur^3
Le volume d’un pavé : longueur * largeur * hauteur
Le volume d’un cylindre : surface du cercle de base * hauteur
Le côté long d’un triangle rectangle : Racine carrée de (longueur² * largeur²)

 */
echo "Quel est le rayon ? \n";
$rayon = readline();
echo "Quel est la longueur ? \n";
$longueur = readline();
echo "Quel est la largeur ? \n";
$largeur = readline();
echo "Quel est la hauteur ? \n";
$hauteur = readline();
$surfaceCercle = pi() * $rayon ** 2;
echo "La surface d'un cercle de rayon $rayon est de $surfaceCercle \n";
$surfaceRectangle = $longueur * $largeur;
echo "La surface d'un rectangle de longueur $longueur et de largeur $largeur est de $surfaceRectangle \n";
$volumeSphere = 4/3 * pi() * $rayon ** 3;
echo "Le volume d'une sphère de rayon $rayon est de $volumeSphere \n";
$volumeCube = $longueur ** 3;
echo "Le volume d'un cube de longueur $longueur est de $volumeCube \n";
$volumePave = $longueur * $largeur * $hauteur;
echo "Le volume d'un pavé de longueur $longueur, de largeur $largeur et de hauteur $hauteur est de $volumePave \n";
$volumeCylindre = $surfaceCercle * $hauteur;
echo "Le volume d'un cylindre de rayon $rayon et de hauteur $hauteur est de $volumeCylindre \n";
$coteTriangle = sqrt($longueur ** 2 + $largeur ** 2);
echo "Le côté long d'un triangle rectangle de longueur $longueur et de largeur $largeur est de $coteTriangle \n";