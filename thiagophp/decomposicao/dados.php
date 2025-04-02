<?php
    $numero = $_POST['numero'];
?>
<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css">
    <title> Resposta do formulário </title>
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
        if ($numero !== null){
            echo "<h4>Número escolhido!</h4><br>";
        }else{
            echo "<h4>Você não escoheu seu número!</h4><br>";
        }
        echo "<h2>Decomposição em fatores primos:</h2>";
        $primo = 2;
        while($numero > 1){
            if($numero % $primo == 0){
                echo $primo . " ";
                $numero = $numero / $primo;
            }else{
                $primo++;
            }
        }
    ?>
    </div>
 </body>
 </html>