<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $data["mensaje"]; ?></h1>
    <?php
        foreach ($data["films"] as $key => $film) {
          echo $film->title."<br>";
        }
    ?>
</body>
</html>