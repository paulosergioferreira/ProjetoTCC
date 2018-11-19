<?php 

require_once '../controller/GerenteController.php';
require_once '../Models/Model.php';
$gc = new GerenteController();

?>

<!DOCTYPE html>
<html>
<head>
    
    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Gerentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>

<body background="tela1.jpg"> 
    <div class="container">
        <div class="row form-cadastro">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Lista dos Gerentes</h5>
                    <div class="card-body" style="background-color: #DCDCDC;">
                   
          
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>  
                        <th>Cargo</th>
                        <th>Dt.Nasc</th>
                        <th>Telefone</th>
                        <th>Login</th>
                        </tr>
                    </thead>

                    <?php foreach ($gc->findAll() as $key => $value) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->nome; ?></td>
                                <td><?php echo $value->rg; ?></td>
                                <td><?php echo $value->cpf; ?></td>
                                <td><?php echo $value->cargo; ?></td>
                                <td><?php echo $value->dtnasc; ?></td>
                                <td><?php echo $value->telefone; ?></td>
                                <td><?php echo $value->login; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        <div class="col-md-12">
             <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
             <a href="../layout/CadGerente.php" class="btn btn-danger btn-block">Cadastrar Gerente</a>        
        </div>
    </div>
</div>
</table>                    
</body>
</html>