<?php
    $title = "Calcetto";
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=colombara1_calcetto", "root", "");
    }catch(PDOException $error)
    {
        die("Errore" . $error);
    }
    $sta = $pdo->prepare("SELECT * from campi");
    $sta->execute();
    $campi = $sta->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1><?=$title?></h1>
    <a href="creacampo.php">Crea</a>

    <?php foreach ($campi as $c) {?>
        <div ><h2><?=$c['nome']?></h2><img src="<?=$c['url']?>"><h4><?=$c['spettatori']?></h4></div>
    <?php }?>
</body>
</html>