<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Venda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body style="background-color: #DCDCDC;">
<?php
require_once'../controller/VendaController.php';
require_once'../controller/ClienteController.php';
$vc = new VendaController();
$cc = new ClienteController();
if (isset($_GET['d']) && $_GET['d'] != null) {
  $vc->delete($_GET['d']);
}

?>
<div class="container" id="tabela">
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
      <table class="table table-sm table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">COD.VENDA</th>
            <th scope="col">DESTINO</th>
            <th scope="col">TRANSPORTE</th>
            <th scope="col">DIARIA</th>
            <th scope="col">PAGAMENTO</th>
            <th scope="col">CLIENTE</th>
            <th scope="col">PREÇO</th>
           
            
          </tr>
        </thead>
        <tbody>    
        <?php if (isset($_GET['b']) && $_GET['b'] != null) : ?>
            <?php foreach ($vc->buscarPorId($_GET['b']) as $clike) : ?>
          
              <?php if ($clike != null) { ?>
                  <tr>
                       <th scope="row"><?= $clike->id ?></th>
                      <td><?= $clike->destino ?></td>
                      <td><?= $clike->transporte ?></td>
                      <td><?= $clike->diaria ?></td>
                      <td><?= $clike->tipo ?></td>
                      <td><?= $cc->find($clike->usuarioId)->nome ?></td>
                      <td><?= $clike->preco ?></td>

                      
                      <td>
                          <a href="EditarVenda.php?e=<?= $clike->id ?>" class="btn btn-primary">Editar</a>
                          <a href="?d=<?= $clike->id ?>" class="btn btn-secondary">Deletar</a>
                      </td>
                      
                  </tr>
               <?php 
            } else {
               
              echo "Não conseguimos encontrar, Tente novamente!";
            } ?>
               
          <?php endforeach; ?>
              <?php else : ?>
                
              <?php foreach ($vc->findAll() as $v) : ?>
                <tr>
              
                    <th scope="row"><?= $v->id ?></th>
                    <td><?= $v->destino ?></td>
                    <td><?= $v->transporte ?></td>
                    <td><?= $v->diaria ?></td>
                    <td><?= $v->tipo ?></td>
                    <td><?= $cc->find($v->usuarioId)->nome ?></td>
                    <td><?= $v->preco ?></td>
                     
                    <td>
                        <a href="EditarVenda.php?e=<?= $v->id ?>" class="btn btn-primary">Editar</a>
                        <a href="?d=<?= $v->id ?>" class="btn btn-secondary">Deletar</a>
                    </td>
                     

           </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
        <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
        <a href="../layout/CadVenda.php" class="btn btn-secondary btn-block">Cadastrar Vendas</a>        
    
    </div>
  </div>
</div>
</body>
</html>