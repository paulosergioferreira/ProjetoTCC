<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Gerente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body style="background-color: #DCDCDC;">
<?php
require_once'../controller/VendedorController.php';
$vc = new VendedorController();
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
            <?php foreach ($vc->buscarPorNome($_GET['b']) as $vlike) : ?>

              <?php if ($vlike != null) { ?>
                  <tr>
                      <th scope="row"><?= $vlike->id ?></th>
                      <td><?= $vlike->nome ?></td>
                      <td><?= $vlike->rg ?></td>
                      <td><?= $vlike->cpf ?></td>
                      <td><?= $vlike->telefone ?></td>
                      <td><?= $vlike->login ?></td>
                     
                      
                      <td>
                          <a href="EditarVendedor.php?e=<?= $vlike->id ?>" class="btn btn-primary">Editar</a>
                          <a href="?d=<?= $vlike->id ?>"class="btn btn-secondary" >Deletar</a>
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
                    <td><?= $v->nome ?></td>
                    <td><?= $v->rg ?></td>
                    <td><?= $v->cpf ?></td>
                    <td><?= $v->telefone ?></td>
                    <td><?= $v->login ?></td>
                    <td>
                        <a href="EditarVendedor.php?e=<?= $v->id ?>" class="btn btn-primary">Editar</a>
                        <a href="?d=<?= $v->id?>" class="btn btn-secondary" >Deletar</a>
                    </td>
                     
                    
                     </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
        <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
        <a href="../layout/CadVendedor.php" class="btn btn-secondary btn-block">Cadastrar Vendedores</a>        
    
    </div>
  </div>
</div>
</body>
</html>