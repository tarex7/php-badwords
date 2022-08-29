<?php
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde adipisci libero iste id distinctio qui minus eius neque molestiae deleniti. Repellat aliquam quo ipsa sed dolorem assumenda ea, error consectetur.";
$paragraph_length = strlen($paragraph);
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
<p><?php echo $paragraph ?></p>
<p>Lunghezza: <?php echo $paragraph_length ?> caratteri.</p>

</body>
</html>