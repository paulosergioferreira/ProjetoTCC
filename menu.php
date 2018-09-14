<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
</head>
<body style="background-color: #838B8B;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="CadCliente.php">Cadastro de Clientes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaClientes.php">Lista de Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CadGerente.php">Cadastro de Gerentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaGerentes.php">Lista de Gerentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CadVenda.php">Cadastro de Vendas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaVendas.php">Lista de Vendas</a>
      </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary" type="submit">Search</button>
    </form>
  </div>
</nav>

</body>
</html>