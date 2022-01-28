<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
// ========================================
// Definizione variabili
// paragrafo di testo
$paragraph = "Questo paragrafo ha una lunghezza di 50 caratteri!";
// variabile contentente lunghezza del paragrafo
$parLength = strlen($paragraph);
//ottieniamo tramite GET la parola da censurare
// nell'url inseriamento ?cens='variabile'
$cens = $_GET['cens'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - BADWORDS</title>
</head>
<body>
    <p>
        <?php
        // var_dump($paragraph); check variabile
        // stampa paragrafo e sua lunghezza
        echo 'Contenuto del paragrafo: ', $paragraph,
        '<br>Lunghezza del paragrafo: ', $parLength, ' caratteri';
        var_dump($cens); // check variabile ottenuta da GET
        ?>
    </p>
</body>
</html>