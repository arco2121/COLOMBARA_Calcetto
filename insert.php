<?php
require_once "CampoDaCalcio.php";

$title = "Crea Campo";

if(!empty($_POST))
{
    $nome = $_POST['nome'];
    $spettatori = intval($_POST['spettatori']);
    $url = $_POST['url'];
}
$campetto = new CampoDaCalcio($nome, $url, $spettatori);
print($campetto);
try {
    $pdo = new PDO("mysql:host=localhost;dbname=colombara1_calcetto", "root", "");
    echo "Americaya";
}catch(PDOException $error)
{
    die("Errore" . $error);
}
try{
    $sql = 'INSERT INTO campi(nome, spettatori, url) VALUES (:nome,:spettatori,:url)';
    $state = $pdo -> prepare($sql);
    $state -> bindParam(':nome', $nome);
    $state -> bindParam(':spettatori', $spettatori);
    $state -> bindParam(':url', $url);
    $state -> execute();
    $campi = $state -> fetchAll();
}catch(PDOException $error)
{
    die("Errore" . $error);
}
http_redirect("index.php");
?>