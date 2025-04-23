<?php
    include_once "funcoes.php";

    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    
    $arrayData = explodir("-", $dataNascimento);
    $mes = (int)$arrayData[1];
    $dia = (int)$arrayData[2];
    $ano = (int)$arrayData[3];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <title>Formulario</title>
    </head>
    <body>
        <div class="container">
            <div class=" container">
                <nav class="navbar navbar-light bg-light ">
                    <a class=" navbar-brand " href=" #">
                        <img src="imagem/logo.svg" width=" 30 "
                            height=" 30 "
                            alt=" ">
                    </a>
                </nav>
            </div>
            <div class="container">
                <h1> Escolha uma opção:</h1>
            </div>
            <div class="container">
                <h2> Escolha uma senha:</h2>
            </div>
            <div class="container">
                <form action="resultado.php" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nome"> Nome: </label>
                                <input type="text" class="form-control" name="nome" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dataNascimento"> Data de nascimento: </label>
                                <input type="date" class="form-control" name="dataNascimento" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar </button>
                    </div>
                </form>
            </body>
        </html>
