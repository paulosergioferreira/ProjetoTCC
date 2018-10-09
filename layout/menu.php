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
<body style="background-color: #DCDCDC;">
<div class="p-3 mb-2 bg-primary text-white">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="#" class="btn btn-secondary">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a  href="CadCliente.php" class="btn btn-secondary">Cad. Cliente<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a href="listaClientes.php" class="btn btn-secondary">Lista Cliente</a>
      </li>
      <li class="nav-item">
        <a  href="CadGerente.php" class="btn btn-secondary">Cad. Gerente</a>
      </li>
      <li class="nav-item">
        <a  href="listaGerentes.php" class="btn btn-secondary">Lista Gerente</a>
      </li>
      <li class="nav-item">
        <a  href="CadVenda.php" class="btn btn-secondary">Cad. Venda</a>
      </li>
      <li class="nav-item">
        <a  href="listaVendas.php" class="btn btn-secondary">Lista Venda</a>
      </li>
      <li class="nav-item">
        <a  href="CadVendedor.php" class="btn btn-secondary">Cad. Vendedor</a>
      </li>
      <li class="nav-item">
        <a  href="listaVendedores.php" class="btn btn-secondary">Lista Vendedor</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-secondary" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div>
</body>
</html>