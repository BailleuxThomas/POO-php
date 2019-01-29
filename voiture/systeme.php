<?php

class Meta{
    public function tete($title,$style){
        return ('<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href =' .$style. '>
            <title>' .$title. '</title>
        </head>
        <body>');
    }
}



class Voiture{

    public $immatriculation;
    public $datedemiseencirculation;
    public $kilometrage;
    public $modèle;
    public $marque;
    public $couleur;
    public $poids;

    public function immatriculation() {
        return "Son immatriculation $this->immatriculation <br>";
    }
    public function datedemiseencirculation() {
        return "Sa date de mise en circulation est $this->datedemiseencirculation <br>";
    }
    public function kilometrage() {
        return "Son kilometrage est de $this->kilometrage <br>";
    }
    public function modèle() {
        return "C'est un modèle $this->modèle <br>";
    }
    public function marque() {
        return "De la marque $this->marque <br>";
    }
    public function couleur() {
        return "De couleur $this->couleur <br>";
    }
    public function poids() {
        return "Et pèse $this->poids <br>";
    }
    public function img(){
        return "<img src='http://mlu-auto.com/wp-content/uploads/2017/04/20170415_143311.jpg' height='40%' width='40%'>";
    }
}
