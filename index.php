<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <h1>Badwords</h1>

    <h2>Inserisci del testo nel campo di input e scegli la parola da censurare</h2>
    
    <form action="result.php" method="GET">
    
        <input type="text" name="text" placeholder="Inserisci testo..." required>
        <input type="text" name="badword" placeholder="Badword" required>
    
        <button type="submit"> Vai</button>
    </form>
    
</body>
</html>