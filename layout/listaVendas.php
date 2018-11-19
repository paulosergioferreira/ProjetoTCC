<?php 

    require_once '../controller/ClienteController.php';
    require_once '../controller/VendaController.php';
    require_once '../Models/Model.php';
    $vdc = new VendaController();
    $cc = new ClienteController();

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
    <title>Lista de Vendas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body background="tela1.jpg"> 
    <div class="container">
        <div class="row form-cadastro">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Lista das Vendas</h5>
                    <div class="card-body" style="background-color: #DCDCDC;">
                   
          
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>COD.VENDA</th>
                            <th>DESTINO</th>
                            <th>TRANSPORTE</th>
                            <th>DIARIA</th>
                            <th>PAGAMENTO</th>
                            <th>CLIENTE</th>
                            <th>PREÇO</th>
                        </tr>
                    </thead>

                    <?php foreach ($vdc->findAll() as $key => $value) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->destino; ?></td>
                                <td><?php echo $value->transporte; ?></td>
                                <td><?php echo $value->diaria; ?></td>
                                <td><?php echo $value->tipo; ?></td>
                                <td><?= $cc->find($value->usuarioId)->nome ?></td>
                                <td><?php echo $value->preco; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-md-12">
                <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
                <a href="../layout/CadVenda.php" class="btn btn-danger btn-block">Cadastrar Vendas</a>        
            </div>
        </div>
    </div>
</body>
</html>