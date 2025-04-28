<?php

    $password = $_POST["flexRadioDefault"];
    $data = $_POST["data"];
    $nome = $_POST["nome"];

    $data = new DateTime($data);

    function Signo($data) {
        $day = (int)$data->format("d");
        $month = (int)$data->format("m");
    
        if(($month == 3 && $day >= 21) || ($month == 4 && $day <= 20)){
            return "Áries";
        } 
        elseif(($month == 4 && $day >= 21) || ($month == 5 && $day <= 20)){
            return "Touro";
        } 
        elseif(($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)){
            return "Gêmeos";
        } 
        elseif(($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)){
            return "Câncer";
        } 
        elseif(($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)){
            return "Leão";
        } 
        elseif(($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)){
            return "Virgem";
        } 
        elseif(($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)){
            return "Libra";
        } 
        elseif(($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)){
            return "Escorpião";
        } 
        elseif(($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)){
            return "Sagitário";
        } 
        elseif(($month == 12 && $day >= 22) || ($month == 1 && $day <= 20)){
            return "Capricórnio";
        } 
        elseif(($month == 1 && $day >= 21) || ($month == 2 && $day <= 18)){
            return "Aquário";
        } 
        else{
            return "Peixes";
        }
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

    <h1>Resultado obtido:</h1>

    </div>

    <div class="jumbotron"></div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Signo</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $nome; ?></th>
                    <th scope="row"><?php echo Signo($data); ?></th>
                    <th scope="row"><?php echo $password; ?></th>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
