<?php


require '../debug.php';
require 'systeme.php';

$meta = new Meta();
echo $meta->tete('Voiture','style.css');


$vehicule = new voiture();
$vehicule->immatriculation = '1-CYP833'; // Ma voiture :p //
$vehicule->datedemiseencirculation = '13/6/2008';
$vehicule->kilometrage = '178549km';
$vehicule->modèle = 'FIESTA';
$vehicule->marque = 'FORD';
$vehicule->couleur = 'Bleu-marine';
$vehicule->poids = '1300kg';


echo $vehicule->immatriculation();
echo $vehicule->datedemiseencirculation();
echo $vehicule->kilometrage();
echo $vehicule->modèle();
echo $vehicule->marque();
echo $vehicule->couleur();
echo $vehicule->poids();
echo $vehicule->img();
?>