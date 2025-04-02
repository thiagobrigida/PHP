<?php
    $numero = $_POST['numero'];
    $numero2 = $_POST['numero2'];
?>
<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css">
    <title> Resposta do formulário.</title>
</head>
<body>
    <div class ="container">
        <nav class ="navbar navbar-light bg-light">
            <a class ="navbar-brand" href="#">
            <img src="imagem/logo.svg" width ="30" height="30" alt=" ">
            </a>
        </nav>
    </div>
    <div class ="container">
    <?php
        echo "<h3>" . $numero . "</h3><br>";
        echo "<h3>" . $numero2 . "</h3><br>";
        if ($numero !== null){
            echo "<h4>Números escolhidos!</h4><br>";
        }else{
            echo "<h4>Você não escoheu todos números!</h4><br>";
        }
        echo "<h2>MDC:</h2>";
        $aux = 1;
        while(($numero % $numero2) > 0){
            $aux = $numero % $numero2;
            $numero= $numero2;
            $numero = $aux;
        }
        echo $numero2;
    ?>
    </div>
 </body>
 </html>