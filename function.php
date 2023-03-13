<?php


function generate_password($lunghezza_parola){
  $password = [];
// creo un ciclo in cui do come numero massimo di cicli il valore dato dall'utente ed utilizzo la tabella ascii dal numero 33 al 122 per assegnare lettere numeri e simboli e successivamente creo una stringa dall'array con implode per poterlo riportare appunto come stringa a schermo.
for($i = 0;$i < lunghezza_parola;$i++ ){

  $possible_character = chr(rand(33,122));
  $password[] = $possible_character;
  $password = implode('', $password);
  echo $possible_character;

}
  return $password;
};

?>