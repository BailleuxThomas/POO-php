<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>



<?php

require 'form.php';


// echo '<pre>'.print_r($form, true).'</pre>';
?>

<?php


$meta = new Meta();  // Debut de la function //
echo $meta->tete('Coucou','style.css');

$form = new Form(); // Debut de la function //
echo $form->form(); 
echo $form->input('text','');

if(isset($_POST['firstName'])) {
    $result = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));

    if(empty($result)) {
        $firstNameErr = "Un prénom est requis";
    } elseif(!preg_match("/^[a-zA-Z éèçà-]*$/", $result)) {
        $firstNameErr = "Seulement les lettres et les espaces sont autorisés";
    } else {
        $firstName = $result;
    }
}
echo $firstNameErr;

if (isset($_POST['select'])) {
    $result = trim(filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING));
        if ($result['select'] == 'blabla') {
        $erreurselect = "Il faut sélectionner un argument";
    } elseif ($result['select'] == '.$test2.') {
        echo "reter";
    } else {
        $result['select'] = null;
        $select = $result;
    }
}

echo $form->select('toto','tata');
echo $form->textarea('Inscris du texte ici!');
echo $form->radiobutton('radio');
echo $form->checkbox('checkbox');
echo $form->submit();



$html = new Html(); // Appel de la function //
echo $html->image('https://parismatch.be/app/uploads/2018/04/Macaca_nigra_self-portrait_large-e1524567086123-1100x715.jpg','voici une image de singe'); // 1=$url:2=$alt //
echo $html->lien('http://google.com','Testpouraveugles','nomdusite'); // 1=$url;2=$alt,3=$nom //
echo $html->javascript('hehe.js'); // 1=$url //
?>


</body>
</html>