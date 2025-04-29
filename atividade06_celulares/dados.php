<?php
    $dados[] = array('nome' => $_POST['nomea'], 'os' => $_POST['osa']);
    $dados[] = array('nome' => $_POST['nomeb'], 'os' => $_POST['osb']);
    $dados[] = array('nome' => $_POST['nomec'], 'os' => $_POST['osc']);
    $dados[] = array('nome' => $_POST['nomed'], 'os' => $_POST['osd']);
    $dados[] = array('nome' => $_POST['nomee'], 'os' => $_POST['ose']);

    $androis = 0;
    $ios = 0;

    foreach($dados as $linhas => $item){
        if($item["os"] == "1"){
            $androisd ++;
        }else{
            $ios++;
        }
    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibindo</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="p-2 navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="./img/bootstrap-solid.svg" width="30" height="30" alt="">
      </a>
    </nav>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <p class="h1 text-center py-4">Exibindo o resultado da pesquisa</p>
        </div>
    </div>
    <?php?>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $i = 0;
                        foreach( $dados as $linha => $item ){
                            if($item['so'] == "1"){
                                $i = $i+1;?>
                                <th scope="col"><?php echo $item['nome'];}}?></th>
                             <p class="h2 text-center py-4"> <?php echo $i;?> PREFEREM ANDROID</p>
                            

            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $i = 0;
                        foreach( $dados as $linha => $item ){
                            if($item['so'] == "2"){
                                $i = $i+1;?>
                                <th scope="col"><?php echo $item['nome'];}}?></th>
                             <p class="h2 text-center py-4"> <?php echo $i;?> PREFEREM IOS</p>
            </tbody>
        </table>
    </div>
    <div class="container">
                <div class="row">
                    <a class="btn btn-primary" href="index.html">Novo Cálculo</a>
                </div>
            </div>    
    </div>
</body> 
</main>
 </html>


