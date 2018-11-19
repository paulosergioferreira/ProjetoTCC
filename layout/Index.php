<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript" src="js/jquery-3.3.1.min"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once '../controller/clienteController.php';

        $cc = new ClienteController();
    
    ?>

</head>

<body background = "tela1.jpg" >
    </br></br></br></br></br>
    <div class="container" >
        <div class="row">
            
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                    <center><h5 class="card-header" >S.O Turismo</h5></center>
                        <div class="card-body" style="background-color: #DCDCDC;"> 
        
        <?php
            if (isset($_POST['Acessar']) && $_POST['login'] != null && $_POST['senha'] != null) {
                header("location: ../layout/menu.php");
            }

        ?>

        <form method="post" class="form-login">
            <div class="form-row">
        
                <div class="form-group col-12">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Entre com seu Login">
                </div>
        
            </div>
      
            <div class="form-row">
            
                <div class="form-group col-12">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Entre com sua senha">
                </div>
        
            </div>
            
            <input type="submit" name="Acessar" id="Acessar" class="btn btn-danger" value="Acessar">
          
        </form>

</body>
</html>