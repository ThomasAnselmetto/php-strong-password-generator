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






<?php
$password_length = ;
var_dump($password_length);

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
      <div class="col-8">
      <form action="" method="GET">
        <label for="send_psw"></label>
    <input name="send_psw" id="send_psw" type="text" class="form-control" placeholder="Insert psw length" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button  class="btn btn-outline-secondary" type="button" id="sendpsw">Send</button>
  </form>
      </div>
    </div>
  </div>
<div class="input-group mb-3">
  
</div>
  
</body>
</html>


