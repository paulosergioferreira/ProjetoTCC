<?php require_once 'ClienteController.php'; ?>

<?php
$cc = new ClienteController();

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
                                    <?php foreach ($cc->findAll() as $cliente) : ?>
                                    
                                        <option selectd></option>
                                        <option value="<?= $cliente->id ?>"> <?= $cliente->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>

                        <div class="form-group col-4">
           
                                <label for="destino">Destino:</label>
                                    <select name="destino" id="destino" class="form-control">
                                        <option selectd></option>
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
                                        <option selectd></option>
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
                                    <option value="2" selectd>Não</option>
                                </select>
                        </div>
                        
                        <div class="form-group col-3">
                            <label for="diaria">Diaria:</label>
                            <input type="number" id="diaria" class="form-control" name="diaria">
                        </div>
                        
                        <div class="form-group col-3">
                            <label for="tipo">Tipo pagamento:</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option selectd></option>
                                    <option value="À VISTA">Boleto</option>
                                    <option value="CARTÃO">Cartão de credito</option>
                                </select>
                        </div>

                        <div class="form-group col-3">
                            <label for="tipo">Transporte:</label>
                                <select name="transporte" id="transporte" class="form-control">
                                    <option selectd></option>
                                    <option value="aviao">Avião</option>
                                    <option value="onibus">Ônibus</option>
                                    <option value="navio">Navio</option>
                                </select>
                        </div>

                        <div class="form-group col-12">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                        </div>
                        </div>
                            <input type="hidden" id="preco" class="form-control" name="preco">
                            
                       
                    <input type="submit" name="comprar" value="Confirmar compra" class="btn btn-primary">
                    <a href="menu.php" class="btn btn-secondary" >Voltar</a>
          
          
                    </div>
</div>
    </form>
</div>

