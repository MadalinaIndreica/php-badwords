<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciao! inserisci il tuo paragrafo e la parola da censurare.</h1>

    <form action="greeting.php" method="GET">
        <label for="paragraph">Paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="badword">parola da censurare</label>
        <input type="text" id="badword" name="badword">

        <button type="submit">Invia</button>
    </form>
    


</body>
</html>