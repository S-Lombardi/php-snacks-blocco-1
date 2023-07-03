<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Tom Harris',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Gina Flò',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Paolo Pulli',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Vesna M.',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Egidio Brambilla',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
    </head>
    <body>
        <ul>
            <?php foreach($posts as $index => $date_post) {?>
                <!-- Data Post -->
                <li>
                   <h3><?php echo 'Data dei post:'.$index ?></h3>
                </li>
                <ul>
                    <?php foreach($date_post as $post) {?>
                        <li>
                            <strong><?php echo $post['title'] ?></strong>
                        </li>
                        <li>
                            <?php echo $post['author'] ?>
                        </li>
                        <li>
                            <?php echo $post['text'] ?>
                            <br><br>
                        </li>

                    <?php }?>
                </ul>
            <?php }?>
        </ul> 
    </body>
</html>