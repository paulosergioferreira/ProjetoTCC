<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Gerente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
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
            <div class="form-group col-10">
              <input type="text" name="b" id="b" class="form-control">
            </div>
            <div class="form-group col-1">
              <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
            <div class="form-group col-1">
       
            <a href="CadVendedor.php" class="btn btn-secondary" >Voltar</a>
          
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
            <th scope="col">LOGIN</th>
            <th scope="col">SENHA</th>
          
            
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
                      <td><?= $vlike->login ?></td>
                      <td><?= $vlike->senha ?></td>
                  
                      
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
                    <td><?= $v->login ?></td>
                    <td><?= $v->senha ?></td>
                    <td>
                        <a href="EditarVendedor.php?e=<?= $v->id ?>" class="btn btn-primary">Editar</a>
                        <a href="?d=<?= $v->id?>" class="btn btn-secondary" >Deletar</a>
                    </td>
                     
                    
                     </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>