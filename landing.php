<?php
    $paragrafo = $_POST['paragrafo'];
    $censura = $_POST['censura'];
?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords-landing</title>
</head>
<body>
    <div>
        <h2>
            Il paragrafo è:
        </h2>
        <?php echo $paragrafo; ?>
        <h3>è lungo:</h3>
        <?php
            echo strlen($paragrafo);
        ?>
            <h3>il paragrafo censurato è</h3>
            <?php
                echo $paragrafoCensurato = str_replace($censura, '***', $paragrafo );
            ?>
            <h3>è lungo:</h3>
            <?php
                echo strlen($paragrafoCensurato);
            ?>
    </div>
</body>
</html>