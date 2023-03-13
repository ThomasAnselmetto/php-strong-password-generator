<!-- session_start();
$_SESSION
creo un ciclo in cui do come numero massimo di cicli il valore dato dall'utente ed utilizzo la tabella ascii dal
numero 33 al 122 per assegnare lettere numeri e simboli e successivamente creo una stringa dall'array con implode per
poterlo riportare appunto come stringa a schermo. -->





<?php
function generate_password($lunghezza_parola){
  $password = [];
for($i = 0;$i < $lunghezza_parola;$i++ ){

  $possible_character = chr(rand(33,122));
  $password[] = $possible_character;
  var_dump($possible_character);
}
  $password = implode('', $password);
  
  return $password;
}

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html> -->