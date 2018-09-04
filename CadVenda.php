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

    <form method="post" action="Save.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <input type="number" name="estado" value="1" hidden>

                <div class="card">
                    <h5 class="card-header">Compra da Viagem</h5>
                    

                        <div class="form-row">
                            <div class="form-group col-5">
                                <label for="clienteId">Cliente:</label>
                                <select name="clienteId" id="clienteId" class="form-control">
                                    <?php foreach ($cc->findAll() as $cliente):?>
                                 
                                        <option value="<?= $cliente->id ?>"> <?= $cliente->nome?></option>
                                    <?php endforeach;?>
                                </select>
                        </div>

                        <div class="form-group col-4">
           
                                <label for="destino">Destino:</label>
                                    <select name="destino" id="destino" class="form-control">
                                        <option value="Pernambuco">PE</option>
                                        <option value="Paraiba">PB</option>
                                        <option value="Rio de Janeiro">RJ</option>
                                        <option value="Rio grande do Sul">RS</option>
                                        <option value="Amazonas">AM</option>
                                        <option value="São Paulo">SP</option>
                                    </select>
                        
                        </div>

                        <div class="form-group col-3">
                                <label for="nivelHotel">Nivel do Hotel:</label>
                                   <select name="nivelHotel" id="nivelHotel" class="form-control">
                                        <option value="1">1 estrelas</option>
                                        <option value="2">2 estrelas</option>
                                        <option value="3">3 estrelas</option>
                                        <option value="4">4 estrelas</option>
                                        <option value="5">5 estrelas</option>
                                   </select>
                        </div>

                        <div class="form-group col-3">
                            <label for="translado">Translado:</label>
                                <select name="translado" id="translado" class="form-control">
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                        </div>
                        
                        <div class="form-group col-3">
                            <label for="diaria">Diaria:</label>
                            <input type="number" id="diaria" class="form-control" name="diaria">
                        </div>
                        
                        <div class="form-group col-3">
                            <label for="tipo">Tipo pagamento:</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option value="À VISTA">Boleto</option>
                                    <option value="CARTÃO">Cartão de credito</option>
                                </select>
                        </div>

                        <div class="form-group col-3">
                            <label for="tipo">Transporte:</label>
                                <select name="transporte" id="transporte" class="form-control">
                                    <option value="avião">Avião</option>
                                    <option value="carro">Carro</option>
                                </select>
                        </div>

                          <div class="form-group col-3">
                            <label for="diaria">Preço:</label>
                            <input type="text" id="preco" class="form-control" name="preco">
                            
                        </div>
                        <div class="form-group col-3">
                            <label for="diaria">Descrição:</label>
                            <input type="text" id="descricao" class="form-control" name="descricao">
                            
                        </div>
                        
                    <input type="submit" name="comprar" value="comprar" class="btn btn-success btn-block">
                    </div>
</div>
    </form>
</div>

