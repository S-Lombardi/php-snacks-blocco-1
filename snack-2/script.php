<?php

    //variabili per i valori inseriti nei campi input
    $name = $_GET['name'];
    $email = $_GET ['email'];
    $age = $_GET ['age'];

    //varbiabile di controllo
    $messaggio_errore = "";
    //controllo che name sia più lungo di 3 caratteri
    if(strlen($name) <= 3 ){
        $messaggio_errore .= "name deve contenere piu di 3 caratteri <br><br>";
    };

    //controllo che email contenga un punto e una chiocciola
    if( !(str_contains($email, '.') && ( str_contains($email, '@')))){
        $messaggio_errore .=  "email deve contenere sia . che @ <br><br>";
    };


    //controllo che age sia un numero
    if (!is_numeric($age)){

        $messaggio_errore .=  "l età inserita non è un numero <br><br>";
    };


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2</title>
    </head>
    <body>

        <div>
        <?php 

            if($messaggio_errore == "") {
                echo "tutto corretto";
            }
            else {
                echo $messaggio_errore;
            }
        
        ?>
        </div>

    </body>
</html>