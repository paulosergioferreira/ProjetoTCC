<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesquisar Gerente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="background-color: #DCDCDC;">
<?php
require_once'../controller/GerenteController.php';
$gc = new GerenteController();
if (isset($_GET['d']) && $_GET['d'] != null) {
  $gc->delete($_GET['d']);
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
            <?php foreach ($gc->buscarPorNome($_GET['b']) as $clike) : ?>

              <?php if ($clike != null) { ?>
                  <tr>
                      <th scope="row"><?= $clike->id ?></th>
                      <td><?= $clike->nome ?></td>
                      <td><?= $clike->rg ?></td>
                      <td><?= $clike->cpf ?></td>
                      <td><?= $clike->telefone ?></td>
                      <td><?= $clike->login ?></td>
                     
                      <td>
                          <a href="../layout/EditarGerente.php?e=<?= $clike->id ?>" class="btn btn-primary">Editar</a>
                          <a href="?d=<?= $clike->id ?>"class="btn btn-secondary" >Deletar</a>
                      </td>
                      
                  </tr>
               <?php 
            } else {
              echo "Não conseguimos encontrar, Tente novamente!";
            } ?>
               
          <?php endforeach; ?>
              <?php else : ?>
                
              <?php foreach ($gc->findAll() as $g) : ?>
                <tr>
                    
                    <th scope="row"><?= $g->id ?></th>
                    <td><?= $g->nome ?></td>
                    <td><?= $g->rg ?></td>
                    <td><?= $g->cpf ?></td>
                    <td><?= $g->telefone ?></td>
                    <td><?= $g->login ?></td>
                    <td>
                        <a href="../layout/EditarGerente.php?e=<?= $g->id ?>" class="btn btn-primary">Editar</a>
                        <a href="?d=<?= $g->id ?>" class="btn btn-secondary" >Deletar</a>
                    </td>
                     
                    
                     </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
        <a href="../layout/Menu.php" class="btn btn-primary btn-block">Menu</a>
        <a href="../layout/CadGerente.php" class="btn btn-secondary btn-block">Cadastrar Gerentes</a>        
     
    </div>
  </div>
</div>
</body>
</html>