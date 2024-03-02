<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
-- una squadra di casa e
-- una squadra ospite, 
--punti fatti dalla squadra di casa e
-- punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60*/


$teams = [
    [
        "home_squad" => "Home team 1",
        "guest_squad" => "Guest team 1",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    [
        "home_squad" => "Home team 2",
        "guest_squad" => "Guest team 2",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Home team 3",
        "guest_squad" => "Guest team 3",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Home team 4",
        "guest_squad" => "Guest team 4",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Home team 5",
        "guest_squad" => "Guest team 5",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
];

foreach ($teams as $team) {
    var_dump($team);
}

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>php-snack-b1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<h1>test</h1>
        
        <script src="" async defer></script>
    </body>
</html>