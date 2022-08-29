<?php
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. ";
$paragraph_length = strlen($paragraph);
$word = $_GET['word'];
$censored = str_replace( $word, "***", $paragraph );
$censored_length = strlen($censored)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<p><strong>Paragrafo: </strong><?= $paragraph ?></p>
<p><strong>Lunghezza:</strong> <?= $paragraph_length ?> caratteri.</p>
<p><strong>Parola da censurare:</strong>  <?= $word ?>.</p>
<p><strong>Testo censurato:</strong><?= $censored ?></p>
<p><strong>Lunghezza testo censurato:</strong><?= $censored_length ?></p>
</body>
</html>