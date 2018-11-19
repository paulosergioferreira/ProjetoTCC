<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background="tela1.jpg">

<?php
    require_once'../controller/ClienteController.php';
    $cc = new ClienteController();
if (isset($_GET['d']) && $_GET['d'] != null) {
    $cc->delete($_GET['d']);
}
?>

<div class="container" id="tabela">
    <div class="card">
        <h5 class="card-header">Buscar Cliente</h5>
        <div class="card-body" style="background-color: #DCDCDC;">
                      
        <div class="row mt-4">
            
            <div class="col-md-12">
                <form>
                    <div class="form-row">
                    
                        <div class="form-group col-11">
                            <input type="text" name="b" id="b" class="form-control">
                        </div>
            
                        <div class="form-group col-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>      
                    
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">LOGIN</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php if (isset($_GET['b']) && $_GET['b'] != null) : ?>
                            <?php foreach ($cc->buscarPorNome($_GET['b']) as $clike) : ?>
                                <?php if ($clike != null) { ?>
                                    <tr>
                                        <th scope="row"><?= $clike->id ?></th>
                                        <td><?= $clike->nome ?></td>
                                        <td><?= $clike->rg ?></td>
                                        <td><?= $clike->cpf ?></td>
                                        <td><?= $clike->telefone ?></td>
                                        <td><?= $clike->login ?></td>
                                        <td>
                                        <a href="EditarCliente.php?e=<?= $clike->id ?>" class="btn btn-primary">Editar</a>
                                        <a href="?d=<?= $clike->id ?>" class="btn btn-danger">Deletar</a>
                                        </td>
                                    </tr>
                                    <?php 
            
                                    } else {
                                        echo "Não conseguimos encontrar, Tente novamente!";
                                    }?>
                            <?php endforeach; ?>
                                <?php else : ?>
                                    <?php foreach ($cc->findAll() as $c) : ?>
                                        <tr>    
                                            
                                            <th scope="row"><?= $c->id ?></th>
                                                <td><?= $c->nome ?></td>
                                                <td><?= $c->rg ?></td>
                                                <td><?= $c->cpf ?></td>
                                                <td><?= $c->telefone ?></td>
                                                <td><?= $c->login ?></td>
                                                <td>
                                                <a href="EditarCliente.php?e=<?= $c->id ?>" class="btn btn-primary">Editar</a>
                                                <a href="?d=<?= $c->id ?>" class="btn btn-danger">Deletar</a>
                                                </td>

                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
        
                    </tbody>
                </table>

                <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
                <a href="../layout/CadCliente.php" class="btn btn-danger btn-block">Cadastrar Clientes</a>        
     
        </div>
    </div>
</div>

</body>
</html>