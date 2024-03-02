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
        "home_squad" => "Olimpia Milano",
        "guest_squad" => "V.L. Pesaro",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    [
        "home_squad" => "Fortitudo Bologna",
        "guest_squad" => "Juvecaserta",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Auxilium Torino",
        "guest_squad" => "Dinamo Sassari",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Teramo Basket",
        "guest_squad" => "Brescia",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
    
    [
        "home_squad" => "Junior Casale",
        "guest_squad" => "Stamura Ancona",
        "home_points"=> rand(1,50),
        "guest_points" => rand(1,20),
    ],
];


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
<h1>PARTITE</h1>

<?php
foreach ($teams as $team) {
    //var_dump($team);
    echo $team['home_squad'] . " - " . $team['guest_squad'] . " | " . $team['home_points'] . " - " . $team['guest_points'] . "<br>";
}

?>
        
        <script src="" async defer></script>
    </body>
</html>