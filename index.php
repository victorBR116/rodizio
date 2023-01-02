    <?php
    require_once ('vendor\autoload.php');
    use Stichoza\GoogleTranslate\GoogleTranslate;

    $texto = isset($_POST['text']) ? $_POST['text'] : '';
    $lingua = isset($_POST['language']) ? $_POST['language'] : '';


    $traducao = new GoogleTranslate(); 
    $traducao->setTarget($lingua);
    $textoTraduzido = $traducao->translate($texto);

    ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Translate</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin: 16px 0;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 16px;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    textarea {
      width: 100%;
      height: 200px;
      resize: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      padding: 8px;
    }
    input[type="text"] {
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      padding: 8px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    label {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      text-align: left;
      margin: 16px 0 8px;
      padding: 8px;
      background-color: #f8f8f8;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    option {
      font-size: 18px;
      color: #333;
      text-align: left;
      margin: 16px 0 8px;
      padding: 8px;
      background-color: #f8f8f8;
      border: 1px solid #ccc;
      border-radius: 4px;
}
    select{
        font-size: 18px;
      font-weight: bold;
      color: #333;
      text-align: left;
      margin: 16px 0 8px;
      padding: 8px;
      background-color: #f8f8f8;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h1>Tradução</h1>
  <form action="index.php" method="post">
    <div>
      <label for="text">Texto</label>
      <textarea id="text" name="text"><?php echo $textoTraduzido;?></textarea>
    </div>
    <div>
    <label for="language">Escolha uma linguagem</label>
    <select name="language" id="language">
  <option value="pt">portugais</option>
  <option value="af">Africâner</option>
  <option value="sq">Albanês</option>
  <option value="en">Ingreis</option>
    </select>
    <input type="submit" value="Traduzir">
    </form>
    </body>
    </html>