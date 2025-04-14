<?php
    include 'dados.php';
    function filtro($a){
        return $a['estilo'] != 'Rock';
    }
    $dados = array_filter($dados, 'filtro');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" >
    <title>Todos</title>
</head>
<body>
<header>
        <div class="container-fluid">
        <nav class="w-auto p-1" style="background-color: #312d2d;">
            <a class="navbar-brand" href="index.html">
                <b><p style="color:white;">INICIO</p></b>
            </a>
        </nav>
        <div class="jumbotron bg-light jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4 text-center py-4">Manipulação com array</h1>
             <p class="lead text-center py-4">Manipule seu array!!.</p>
            </div>
        </div>
        </div>
    </header>
    <main role="main">
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Gosto Musical</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach( $dados as $linha => $item ):?>
                            <th scope="row"><?php echo $item['nome']?></th>
                            <td><?php echo $item['idade']?></td>
                            <td><?php echo $item['estilo']?></td>
                            </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body> 
</main>
</html>