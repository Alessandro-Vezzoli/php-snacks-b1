<?php

 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 



?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <style>
        .teachers-container {
            background-color: lightgray;
            padding: 10px;
            margin-bottom: 20px;
        }

        .pm-container {
            background-color: lightgreen;
            padding: 10px;
        }
    </style>
    </head>
    <body>
    <div class="teachers-container">
        <h2>Insegnanti</h2>
        <ul>
            <?php foreach ($db['teachers'] as $teacher): ?>
                <li><?php echo $teacher['name'] . ' ' . $teacher['lastname']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="pm-container">
        <h2>Project Manager</h2>
        <ul>
            <?php foreach ($db['pm'] as $pm): ?>
                <li><?php echo $pm['name'] . ' ' . $pm['lastname']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
        
    </body>
</html>