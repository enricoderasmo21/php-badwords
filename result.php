<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords result</title>
</head>
<body>
    
    <h1>Badwords result</h1>

    <div> <strong> Testo inserito </strong> </div>

    <?php 

    $string = $_GET["text"];

    echo $string;

    ?>

    <br>
    <div> <strong> Lunghezza </strong> </div>
    La lunghezza del paragrafo è di <?php echo strlen($string) ?> caratteri

    <hr>

    <div> <strong> Testo inserito censurato </strong> </div>

    <?php

    $badword = $_GET["badword"];

    $newString = str_replace($badword, "***", $string);

    echo $newString;

    ?>

    <br>
    <div> <strong> Lunghezza </strong> </div>
    La lunghezza del nuovo paragrafo è di <?php echo strlen($newString) ?> caratteri
 
</body>
</html>