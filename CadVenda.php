<?php require_once'ClienteController.php';?>

<?php
    $cc = new ClienteController();

/*
    $cc = new \Controllers\ClienteController();
    $gc = new \Controllers\GarcomController();
    $mc = new \Controllers\MesaController();
    $pc = new \Controllers\ProdutoController();

    include __DIR__ . "/../layout/menucozinheiro.php";
*/
?>

<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <form method="post" action="resumo.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <input type="number" name="estado" value="1" hidden>

                <div class="card">
                    <h5 class="card-header">Compra da Viagem</h5>
                    

                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="cliente">Cliente:</label>
                                <select name="clienteid" id="cliente" class="form-control">
                                    <?php foreach ($cc->findAll() as $cliente):?>
                                    <option value="<?= $cliente->id ?>"> <?= $cliente->nome?></option>
                                    
                                    <?php endforeach;?>
                                </select>
                            </div>


                          

                        
                        <input type="submit" name="abrirpedido" value="Abrir Pedido" class="btn btn-success btn-block">
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>

