<?php
require_once ('vendor\autoload.php');
use Stichoza\GoogleTranslate\GoogleTranslate;

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate</title>
</head>
<body>
<form action="index.php" method="post">
  <label for="text">Texto:</label><br>
  <textarea id="text" name="text"></textarea><br>
  <label for="lang">Idioma:</label><br>
  <input type="text" id="lang" name="lang" value="pt"><br>
  <input type="submit" value="Traduzir">
</form> 

<?php 
$texto = $_POST['text'];

$traducao = new GoogleTranslate('pt'); 
$traducao->setSource();
$traducao->setTarget('pt');
$textoTraduzido = $traducao->translate($texto);


?>

    
</body>
</html>