<?php
$text = $_GET['text'];
$badword = $_GET['badword'];
$censored_text = str_replace($badword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>
</head>

<body>
    <div>Il testo è: <?= $text ?></div>
    <div>La sua lunghezza è: <?= strlen(trim($text)) ?> caratteri.</div>
    <div>Il testo censurato è: <?= $censored_text ?></div>
    <div>La sua lunghezza è: <?= strlen(trim($censored_text)) ?> caratteri.</div>
</body>
</html>