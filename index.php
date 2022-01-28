<?php
// CONSEGNA
// ========
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
// ========================================
// Definizione variabili
// paragrafo di testo
$paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto delectus blanditiis nisi iste nobis recusandae maiores, quo, placeat temporibus alias veniam molestiae. Dolore ea ducimus laboriosam odio perferendis possimus beatae! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto delectus blanditiis nisi iste nobis recusandae maiores, quo, placeat temporibus alias veniam molestiae. Dolore ea ducimus laboriosam odio perferendis possimus beatae!';
// variabile contentente lunghezza del paragrafo
$parLength = strlen($paragraph);
//ottieniamo tramite GET la parola da censurare
// nell'url inseriamento ?cens='variabile'
$cens = $_GET['cens'];
// Rimpiazza tutte le occorrenze con ***
$censParagraph = str_ireplace($cens, "***", $paragraph, $count);
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
    <?= '<h1>CONTENUTO PARAGRAFO ORIGINALE</h1>' ?>
    <p>
        <!-- stampa paragrafo -->
        <?= $paragraph; ?>
        <hr>
        <!-- stampa lunghezza paragrafo -->
        <strong>
            <?= 'LUNGHEZZA PARAGRAFO: ', $parLength;?>
        </strong>
    <?= '<h2>CONTENUTO PARAGRAFO CON CENSURA</h2>' ?>
    </p>
        <!-- stampa elemento censurato -->
        <?= '<strong>Elemento censurato: ', $cens,'<hr>'; ?>
        <!-- Stampa della frase con censura -->
        <?= $censParagraph; ?>
</body>
</html>