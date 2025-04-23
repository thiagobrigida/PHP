<?php
    $data = $_POST['data'];
    $datab = $_POST['datab'];
    $datac = $_POST['datac'];
    $datad = $_POST['datad'];
    
    function calculaIdade( $dataNascimento ){
        $hoje = new DateTime();
        $diff = $hoje-> diff ( new DateTime( $dataNascimento));
        return $diff->y;
 }
    $data = calculaIdade($data);
    $datab = calculaIdade($datab);
    $datac = calculaIdade($datac);
    $datad = calculaIdade($datad);

    $dados[] = array('nome' => $_POST['nome'], 'idade' => $data);
    $dados[] = array('nome' => $_POST['nomeb'], 'idade' => $datab);
    $dados[] = array('nome' => $_POST['nomec'], 'idade' => $datac);
    $dados[] = array('nome' => $_POST['nomed'], 'idade' => $datad);

    function cmp($a, $b){
        return $a['idade'] < $b['idade'];
    }
    usort($dados, 'cmp');
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta ao formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <nav class="navbar navbar - light bg - light ">
        <a class ="navbar-brand " href =" #" >
        <img src=" imagem/logo.svg" width =" 30 " height =" 30 " alt=" ">
        </a>
        </nav>
    </div>
    <div class="container">
        <div class="jumbotron">
            <p class="h2 text-center py-4">EXIBINDO IDADES EM ORDEM DECRESCENTE</p>
        </div>
    </div>
    <main role="main">
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach( $dados as $linha => $item ):?>
                            <th scope="row"><?php echo $item['nome']?></th>
                            <td><?php echo $item['idade']?></td>
                            </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="container">
                <div class="row">
                    <a class="btn btn-primary" href="formulario.html">Novo Cálculo</a>
                </div>
            </div>    
    </div>
</body> 
</main>
 </html>

    
