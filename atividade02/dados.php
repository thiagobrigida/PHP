<?php
    $valor = $_POST['valor'];
    $periodo = $_POST['periodo'];
?>
<!DOCTYPE html>
<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <title>Investimento</title> 
</head> 
<body>
    <div class ="container">
        <img src="img/logo.png" width ="80" height ="80" alt=" " >
    </div >
    <div class="container">
        <div class="jumbotron">
            <p class="h2 text-center py-4">Rendimento Mensal</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">Mês</div>
            <div class="col-md-6">Valor Inicial</div>
            <div class="col-md-3">Valor Atualizado</div>
        </div> 
            <?php 
                $juros = 0.02;
                for($i = 1; $i <= $periodo; $i++){
                    echo "<div class='row'>";
                        echo "<div class='col-md-3'> $i </div>";
                        echo "<div class='col-md-6'> R$ " . number_format($numero, 2, ',', '.') . "</div>";
                        $numero = $numero + ($numero * $juros);
                        echo "<div class='col-md-3'> R$ " . number_format($numero, 2, ',', '.') . "</div>";
                    echo "</div>";
                }
            ?>
            <div class="container">
                <div class="row">
                    <a class="btn btn-primary" href="formulario.html">Novo Cálculo</a>
                </div>
            </div>    
    </div>
</body> 
</html>