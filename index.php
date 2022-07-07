// Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

<?php
$paragrafo = "ciao forse stai leggendo questo testo, perchè è il testo più bello che si possa trovare tra tutti quelli che diconon di pubblicare un testo, 
senza però sapere che non sono realmente capaci di scrivere un testo";

$lunghezzaParagrafo = strlen($paragrafo);

echo "la lunghezza di questo testo è : " . "=" . strlen($paragrafo);

?>


<h1> questo è il paragrafo : <?php echo $paragrafo ?></h1>
<p>  questa è la lunghezza del paragrafo <strong><?php echo $lunghezzaParagrafo ?></strong> </p>