<?php

$firstNameErr = $erreurselect = $erreurbutton = "";
$erreurbox = $erreurinput = $erreurcommentary = "";

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


class Form{

    private $data;
    public $surround = 'p'; // Mettre un interligne (paragraphe) //

    public function __construct($data=array()){

        $this->data = $data;

    }

    private function surround($html){

        return "<{$this->surround}>{$html}</{$this->surround}>";

    }

    public function form(){
        return $this->surround('<form action="exo1.php" method="post">');
    }

    public function input(){
        return $this->surround('<input type="text" name="firstName" value=""/>'); 
    }

    public function select($test1,$test2){
        return $this->surround('<select>
        <option>'.$test1.'</option>
        <option>'.$test2.'</option>
        </select>');
    }

    public function buttons($buttons){
        return $this->surround('<button type="'.$buttons.'"></button>');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>
        </form>');
    }

    public function textarea($blabla){
        return $this->surround('<textarea>' .$blabla. '</textarea>');
    }

    public function radiobutton($radio){
        return $this->surround('<input type="radio"'. $radio .'>');
    }

    public function checkbox($checkbox){
        return $this->surround('<input type="chekbox"' .$checkbox .'>');
}
}

class Html{

    public $surround = 'p';

    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function image($url,$alt){
        return ('<img src="'. $url .'" alt="'. $alt .'">');
    }

    public function lien($url,$alt,$nom){
        return $this->surround('<a href="'. $url .'" alt="'. $alt .'">'. $nom .'</a>');
    }

    public function javascript($url){
        return ('<script src="'. $url .'"></script>');
    }
}