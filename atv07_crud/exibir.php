<?php
    require_once 'init.php';
    $PDO = db_connect();
    $sql = "SELECT id, nome, email, cpf, dataNascimento FROM usuarios ORDER BY nome ASC";
    $stmt = $PDO -> prepare($sql);
    $stmt -> execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta mame="vievport" content="vidth=device-vidth, initial scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <title>CRUD PDO</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light ">
                <a class=" navbar-brand " href=" #">
                    <img src="imagem/logo.svg" width="30" height="30" alt=" ">
                </a>
                <div>
                    <a href="index.html">Início</a>
                    <a href="formulario.html">Cadastrar</a>
                    <a href="exibir.html">Consultar</a>
                </div>
            </nav>
        </div>
        <div class="container">
            <h5 class="card-title" style="text-align: center">Cadastro de Usuários</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Enail</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th style="text-align:center" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
<td><?php echo Suser[ id'] ?></td>
<td><?php echo Suser['nome'] ?></td>
<td><?php echo Suser['email'] ?></td>
<td><?php echo Suser['cpf'] 7></td>
<td><?php echo converteData(Suser ['dataNascimento']) ?></td>
<a>
<a href="form-edit.php?id-<?php echo Suser[id'] ?>" class="
btn Dtn-primary">Editar</a>
<a href="deletar.php?id-<?php echo Suser[”id”] ?>" omelick="
return confirm('Tem certeza de que deseja remover?”);"
class="btn btn- danger" >Remover</a>
</a>
<s/tm
<?php endwhile; ?>
</tbody>
</table>
</div>
</pody>
</html>
