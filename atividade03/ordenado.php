<?php
    include'dados.php';
?>
<!DOCTYPE html>
<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <title>Todos os dados</title> 
</head> 
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.html">
                <img src="imagem/logo.png" width="80" height="80" alt="">
            </a>
        </nav>
    </div>
    <div class="container">
        <div class="jumbotron">
            <p class="h1 text-center py-4">Manipulação de Arrays em PHP</p>
            <p class="text-center py-4">Exibindo todos os dados cadastradosem ordem alfabética crescente pelo nome.</p>
        </div>
    </div>
    <div class="container">
    <main role="main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col"> Estilo preferido</th>
                </tr>
            </thead>
            <tbody>
                <?php sort($dados)?>
                <?php foreach($dados as $linha => $item):?>
                    <tr>
                        <th scope="row"><?php echo $item['nome']?></th>
                        <td><?php echo $item['idade'] ?></td>
                        <td><?php echo $item['estilo'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    </div>
</body>
</html>