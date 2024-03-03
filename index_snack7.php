<?php

/*

Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.


*/


$classe = array(
    array("nome" => "Mario", "cognome" => "Rossi", "voti" => 18),
    array("nome" => "Luca", "cognome" => "Bianchi", "voti" => 17),
    array("nome" => "Anna", "cognome" => "Verdi", "voti" => 16),
);


foreach($classe as $studente){

echo "Nome: " . $studente["nome"] . "<br>" . " Cognome: " . $studente["cognome"] . "<br>" . " voto: " . $studente["voti"] . "<br><br>";

}
?>