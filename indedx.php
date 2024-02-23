<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>php-badwords</title>
</head>
<body>
    <div class="w-50 m-auto">
        <form action="landing.php" method="post" class="d-flex flex-column align-items-center gap-3">
            <label for="paragrafo">Inserisci un paragrafo:</label>
            <input type="text" name="paragrafo" id="paragrafo">
            <label for="censura">Inserisci una parola da censurare:</label>
            <input type="text" name="censura" id="censura">
            <input type="submit" value="Invia">
        </form>
    </div>
</body>
</html>