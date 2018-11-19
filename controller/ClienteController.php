<?php

require_once '../Models/Cliente.php';
require_once '../DAO/ClienteDAO.php';
require_once '../lib/DB.php';
class ClienteController{
    private $c;
    private $cdao;

    public function __construct()
    {
        $this->c = new Cliente();
        $this->cdao = new ClienteDAO();
    }
    
    public function insert(
        $nome, $rg, $cpf, $sexo, $dtnasc, $telefone, $numero_casa,
        $rua, $bairro, $cidade, $estado, $cep, $login, $senha, $situacao){

        $this->c->setNome($nome);
        $this->c->setRg($rg);
        $this->c->setCpf($cpf);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($dtnasc);
        $this->c->setTelefone($telefone);
        $this->c->setNumeroCasa($numero_casa);
        $this->c->setRua($rua);
        $this->c->setBairro($bairro);
        $this->c->setCidade($cidade);
        $this->c->setEstado($estado);
        $this->c->setCep($cep);
        $this->c->setLogin($login);
        $this->c->setSenha($senha);
        $this->c->setSituacao($situacao);
        //passando os valores como objeto para a classe ClienteDÂO
        $this->cdao->insert($this->c);
    }
    
    public function update(
        $id, $nome, $rg, $cpf, $sexo, $dtnasc, $telefone, $numero_casa,
        $rua, $bairro, $cidade, $estado, $cep, $login, $senha, $situacao){

        $this->c->setId($id);
        $this->c->setNome($nome);
        $this->c->setRg($rg);
        $this->c->setCpf($cpf);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($dtnasc);
        $this->c->setTelefone($telefone);
        $this->c->setNumeroCasa($numero_casa);
        $this->c->setRua($rua);
        $this->c->setBairro($bairro);
        $this->c->setCidade($cidade);
        $this->c->setEstado($estado);
        $this->c->setCep($cep);
        $this->c->setLogin($login);
        $this->c->setSenha($senha);
        $this->c->setSituacao($situacao);
        $this->cdao->update($this->c);

    }

    public function findAll()
    {
        return $this->cdao->findAll();
    }


    public function buscarPorNome($nome)
    {
        return $this->cdao->findName($nome);
    }


    public function find($id)
    {
        return $this->cdao->find($id);
    }

    public function delete($id)
    {
        $this->cdao->delete($id);
    }



}


?>