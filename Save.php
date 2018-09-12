<?php

require_once 'GerenteController.php';
require_once 'ClienteController.php';
require_once 'VendedorController.php';
require_once 'VendaController.php';
$c = new ClienteController();
$g = new GerenteController();
$v = new VendedorController();
$vc = new VendaController();
//Pegando os valores inseridos no layout, que serão usados no controller, através da função insert.
if (isset($_POST['salvandoCliente'])) {
    $c->insert(
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['situacao']
    );
    require_once 'listaClientes.php';
}

if (isset($_POST['editarCliente'])) {
    $c->update(
        $_POST['id'],
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['situacao']
    );
    require_once 'listaClientes.php';
}


if (isset($_POST['salvandoGerente'])) {
    $g->insert(
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['nivel_func'],
        $_POST['cargo']
    );
    require_once 'listaGerentes.php';
}

if (isset($_POST['editarGerente'])) {
    $g->update(
        $_POST['id'],
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['nivel_func'],
        $_POST['cargo']
    );
    require_once 'listaGerentes.php';

}

if (isset($_POST['salvandoVendedor'])) {
    $v->insert(
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['nivel_func'],
        $_POST['cargo']
    );
    require_once 'listaVendedores.php';
}

if (isset($_POST['editarVendedor'])) {
    $v->update(
        $_POST['id'],
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['telefone'],
        $_POST['numero_casa'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['login'],
        $_POST['senha'],
        $_POST['nivel_func'],
        $_POST['cargo']
    );
    require_once 'listaVendedores.php';

}



if (isset($_POST['comprar'])) {
    $destino = $_POST['destino'];
    $translado = $_POST['translado'];
    $diaria = $_POST['diaria'];
    if ($destino == "Pernambuco" && $_POST['nivelHotel'] == 1) {
        $valor = 100 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Pernambuco" && $_POST['nivelHotel'] == 2) {
        $valor = 150 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Pernambuco" && $_POST['nivelHotel'] == 3) {
        $valor = 200 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Pernambuco" && $_POST['nivelHotel'] == 4) {
        $valor = 250 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Pernambuco" && $_POST['nivelHotel'] == 5) {
        $valor = 300 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Paraiba" && $_POST['nivelHotel'] == 1) {
        $valor = 200 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Paraiba" && $_POST['nivelHotel'] == 2) {
        $valor = 250 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Paraiba" && $_POST['nivelHotel'] == 3) {
        $valor = 300 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Paraiba" && $_POST['nivelHotel'] == 4) {
        $valor = 450 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Paraiba" && $_POST['nivelHotel'] == 5) {
        $valor = 500 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio de Janeiro" && $_POST['nivelHotel'] == 1) {
        $valor = 300 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio de Janeiro" && $_POST['nivelHotel'] == 2) {
        $valor = 450 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio de Janeiro" && $_POST['nivelHotel'] == 3) {
        $valor = 500 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio de Janeiro" && $_POST['nivelHotel'] == 4) {
        $valor = 650 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio de Janeiro" && $_POST['nivelHotel'] == 5) {
        $valor = 700 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio grande do Sul" && $_POST['nivelHotel'] == 1) {
        $valor = 400 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio grande do Sul" && $_POST['nivelHotel'] == 2) {
        $valor = 550 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio grande do Sul" && $_POST['nivelHotel'] == 3) {
        $valor = 600 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio grande do Sul" && $_POST['nivelHotel'] == 4) {
        $valor = 750 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Rio grande do Sul" && $_POST['nivelHotel'] == 5) {
        $valor = 800 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Amazonas" && $_POST['nivelHotel'] == 1) {
        $valor = 500 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Amazonas" && $_POST['nivelHotel'] == 2) {
        $valor = 650 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Amazonas" && $_POST['nivelHotel'] == 3) {
        $valor = 700 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Amazonas" && $_POST['nivelHotel'] == 4) {
        $valor = 850 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "Amazonas" && $_POST['nivelHotel'] == 5) {
        $valor = 900 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "São Paulo" && $_POST['nivelHotel'] == 1) {
        $valor = 600 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "São Paulo" && $_POST['nivelHotel'] == 2) {
        $valor = 750 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "São Paulo" && $_POST['nivelHotel'] == 3) {
        $valor = 800 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "São Paulo" && $_POST['nivelHotel'] == 4) {
        $valor = 950 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;

    } else if ($destino == "São Paulo" && $_POST['nivelHotel'] == 5) {
        $valor = 1100 * $diaria;
        if ($translado == 1) {

            $valor = $valor * 2;
        }
        $_POST['preco'] = $valor;
    }








    $vc->insert(
        $_POST['destino'],
        $_POST['preco'],
        $_POST['transporte'],
        $_POST['nivelHotel'],
        $_POST['translado'],
        $_POST['descricao'],
        $_POST['diaria'],
        $_POST['tipo'],
        $_POST['clienteId']
    );
require_once'listaVendas.php';
}




?>
