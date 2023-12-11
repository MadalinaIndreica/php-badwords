<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- stampo in pagina il paragrafo originale e la sua lunghezza -->
    <p><?php echo $paragraph; ?></p>
    
    <?php $length = strlen($paragraph); ?>
    <p>La lunghezza del tuo paragrafo è <?php echo $length; ?></p>
    
    <!-- censuro le parole inserite dall'utente e stampo il nuovo paragrafo censurato con la sua lunghezza -->
    <?php $new_paragraph = str_replace( $badword, '***', $paragraph); ?>
    <p><?php echo $new_paragraph; ?></p>

    <?php $length = strlen($new_paragraph); ?>
    <p>La lunghezza del tuo  nuovo paragrafo censurato è <?php echo $length; ?></p>


</body>
</html>