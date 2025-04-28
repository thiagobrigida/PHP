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
    <h1><span class="badge text-bg-secondary"><?php echo $android ?> pessoas preferem Android</span></h1>

    <div class="container">
        <?php
        foreach($dados as $linhas => $item){
            if()

        }
        
        
        
        ?>
        <h1><span class="badge text-bg-secondary">Pessoas preferem Android</span></h1>



    </div>


