<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Vendedor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
include'VendedorController.php';
$vc = new VendedorController();
if(isset($_GET['d']) && $_GET['d'] != null){
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
              <input type="submit" class="btn btn-success btn-danger" value="Buscar">
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
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">LOGIN</th>
            <th scope="col">SENHA</th>
           
            
          </tr>
        </thead>
        <tbody>    
        <?php if(isset($_GET['b']) && $_GET['b'] != null):?>
            <?php foreach( $vc->buscarPorNome($_GET['b']) as $clike ): ?>

              <?php if($clike != null){ ?>
                  <tr>
                       <th scope="row"><?= $clike->id ?></th>
                      <td><?= $clike->nome ?></td>
                      <td><?= $clike->rg ?></td>
                      <td><?= $clike->cpf ?></td>
                      <td><?= $clike->login ?></td>
                      <td><?= $clike->senha ?></td>
                      
                      <td>
                          <a href="EditarVendedor.php?e=<?= $clike->id ?>">Editar</a>
                          <a href="?d=<?= $clike->id ?>">Deletar</a>
                      </td>
                      
                  </tr>
               <?php } else { echo "Não conseguimos encontrar, Tente novamente!"; } ?>
               
          <?php endforeach; ?>
              <?php else: ?>
                
              <?php foreach ($vc->findAll() as $v): ?>
                <tr>
                    
                    <th scope="row"><?= $v->id ?></th>
                    <td><?= $v->nome ?></td>
                    <td><?= $v->rg ?></td>
                    <td><?= $v->cpf ?></td>
                    <td><?= $v->login ?></td>
                    <td><?= $v->senha ?></td>
                    
                    <td>
                        <a href="EditarVendedor.php?e=<?= $v->id ?>">Editar</a>
                        <a href="?d=<?= $v->id ?>">Deletar</a>
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