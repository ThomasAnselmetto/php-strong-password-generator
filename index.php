<!-- Milestone 1

Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*
Milestone 2

Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale
Milestone 3 (BONUS)

Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente.
Milestone 4 (BONUS)

Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->





<!-- invio una cifra che sara' poi il numero di lettere,cifre e simboli che comporranno la psw -->
<?php
$lunghezza_parola = $_GET['lunghezza_parola'] ?? '';
var_dump($lunghezza_parola);

// utilizzo il dato ricevuto in una funzione che restituira' la password

function generate_password($lunghezza_parola){

// creo un ciclo in cui do come numero massimo di cicli il valore dato dall'utente ed utilizzo la tabella ascii dal numero 33 al 122 per assegnare lettere numeri e simboli e successivamente creo una stringa dall'array con implode per poterlo riportare appunto come stringa a schermo.
for($i = 0;$i < lunghezza_parola;$i++ ){

  $possible_character = chr(rand(33,122));
  $password[] = $possible_character;
  $password = implode('', $password);
}
  return $password;
  
};
  
?>
  
  
  
  



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Semi-Secure PSW</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- creo un form che invii con method get la langhezza della nostra psw -->
        <form  method="GET">
        <label for="lunghezza_parola">Lunghezza della parola</label>
          <input name="lunghezza_parola" id="lunghezza_parola" type="number"  placeholder="Inserisci un numero..." >
          <button>SEND</button>
        </form>
      </div>
    </div>
  </div>
          
</body>
</html>

  


