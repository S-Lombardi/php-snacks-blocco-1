<?php
    //Creo l'array contenente le partire di basket
    $matches = [
        [
            'teams' => 'Squadra D - Squadra M ',
            'score' =>  '20-10'
        ],
        [
            'teams' => 'Squadra B - Squadra K ',
            'score' =>  '30-10'
        ],
        [
            'teams' => 'Squadra V - Squadra E ',
            'score' =>  '10-25'
        ],
        [
            'teams' => 'Squadra J - Squadra T ',
            'score' =>  '50-10'
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <h2>Lista partite // squadre - punteggio</h2>
        <!-- Lista delle partite -->
        <ul>
         <?php foreach($matches as $match) { ?> 
            <li>
                <?php echo $match['teams']."| ".$match['score']; ?>
            </li>
         <?php }?>
        </ul>
    </body>
</html>