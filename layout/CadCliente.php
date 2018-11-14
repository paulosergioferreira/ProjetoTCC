<!DOCTYPE html>
<html>
<head>
    
    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>

<body style="background-color: #DCDCDC;">

<?php require_once'../DAO/ClienteDAO.php';?>
    
    <div class="container">
        <form method="post" action="../Models/Save.php">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <h5 class="card-header">Cadastro de Clientes</h5>
                        <div class="card-body">
                            
                            <div class="form-row">
                                
                                <div class="form-group col-3">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" class="form-control" name="nome" placeholder="Digite seu Nome">
                                </div>
                            
                                <div class="form-group col-2">
                                    <label for="rg">RG:</label>
                                    <input type="text" id="rg" class="form-control" name="rg" placeholder="0.000.000">
                                </div>

                                <div class="form-group col-2">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf" placeholder="000.000.000-00">
                                </div>

                                <div class="form-group col-2">
                                    <label for="sexo">Sexo:</label>
                                        <select name="sexo" id="sexo" class="form-control">
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                </div>
                            
                                <div class="form-group col-3">
                                    <label for="datanasc">Data Nascimento:</label>
                                    <input type="date" id="datanasc" class="form-control" name="datanasc">
                                </div>
                            
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-3">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" id="telefone" class="form-control" name="telefone" placeholder="DDD+99999-9999">
                                </div>
                            
                            <div class="form-group col-2">
                                <label for="numero_casa">N° da casa:</label>
                                <input type="text" id="numero_casa" class="form-control" name="numero_casa" placeholder="Digite o N° da Casa">
                            </div>

                            <div class="form-group col-7">
                                <label for="rua">Rua:</label>
                                <input type="text" id="rua"  class="form-control" name="rua" placeholder="Digite sua Rua">
                            </div>
                        
                            <div class="form-group col-7">
                            
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" class="form-control" name="bairro" placeholder="Digite seu bairro">
                        
                            </div>
                      
                            <div class="form-group col-3">
                                <label for="cidade">Cidade:</label>
                                
                                <select name="cidade" id="cidade" class="form-control">
                                    <option></option>
                                    <option value="RECIFE">Recife</option>
                                    <option value="JOÃO PESSOA">João Pessoa</option>
                                    <option value="NATAL">Natal</option>
                                    <option value="RIO DE JANEIRO">Rio de Janeiro</option>
                                    <option value="SÃO PAULOP">São Paulo</option>
                                    <option value="TIMBAUBA">Timbaúba</option>
                                    <option value="CARPINA">Carpina</option>
                                    <option value="GOIANA">Goiana</option>
                                    <option value="MACEIO">Maceio</option>
                                    <option value="ALIANÇA">Aliança</option>
                                    <option value="FERREIROS">Ferreiros</option>
                                    <option value="ITAMBÉ">Itambe</option>
                                    <option value="NAZARÉ DA MATA">Nazare</option>
                                    <option value="TRACUNHAEM">Tracunhaem</option>
                                    <option value="PAUDALHO">Paudalho</option>
                                    <option value="GUADALAJARA">Guadalajara</option>
                                </select>
                            
                           </div>

                           <div class="form-group col-2">
                            
                                <label for="situacao">Situação:</label>
                                
                                <select name="situacao" id="situacao" class="form-control">
                                    <option value="Ativo">Ativo</option>
                                    <option value="Desativado">Desativado</option>
                                </select>
                            
                            </div>

                            <div class="form-group col-2">
                            
                                <label for="estado">Estado:</label>
                                    <select name="estado" id="estado" class="form-control">
                                    
                                        <option></option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PB">Paraiba</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="AL">Alagoas</option>
                                    
                                    </select>
                            
                            </div>

                            <div class="form-group col-5">
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep"  maxlength="11" class="form-control" name="cep" placeholder="00000-000">
                            </div>
                            
                            <div class="form-group col-3">
                                <label for="login">Login:</label>
                                <input type="text" id="login" class="form-control" name="login">
                            </div>
 
                            <div class="form-group col-2">
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" class="form-control" name="senha">
                            </div>

                            <input type="submit" class="btn btn-primary" name="salvandoCliente" id="salvandoCliente" value="Salvar"/>
                            <a href="ClienteBusca.php" class="btn btn-secondary">Buscar Cliente</a>
                            <a href="Menu.php" class="btn btn-danger">Voltar ao Menu</a>
                         
                    </div>
                
                </div>

</body>

</html>