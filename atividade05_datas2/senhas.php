<?php 

    $nome = $_POST["nome"];
    $data = $_POST["data"];
    
    $juncao = $nome . $data;

    $juncao = str_replace(" ", "", $juncao);
    $juncao = str_replace("-", "", $juncao);
    
    function CreatePassword($str){
        return substr(str_shuffle($str), 0, 8);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <nav class="p-2 navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="./img/bootstrap-solid.svg" width="30" height="30" alt="">
      </a>
    </nav>

    <h1>Escolha uma opção:</h1>

  </div>

  <div class="container">

    <form action="signo.php" method="post">

    <?php for($j=0; $j<5; $j++): ?>
        <?php $senha = CreatePassword($juncao);?>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value="<?php echo $senha;?>" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $senha;?>
            </label>
        </div>
    <?php endfor ?>

        <input type="hidden" name="data" value="<?php echo $data ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="form-group">
            <button class="btn btn-primary py-2" type="submit">Enviar</button>
        </div>
    </form>
  </div>

</body>

</html>