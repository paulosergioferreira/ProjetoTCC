<?php

//Pega as informações inseridas pelos usuarios´p

require_once '../Models/Vendedor.php';
require_once '../DAO/VendedorDAO.php';
require_once '../lib/DB.php';
class VendedorController
{
    private $v;
    private $vdao;

    public function __construct()
    {
        $this->v = new Vendedor();
        $this->vdao = new VendedorDAO();
    }

    //Pegando os valores inseridos no layout de cadastro que foram trasidos pela classe save e inserindo eles nos setrs.
    public function insert(
        $nome,
        $rg,
        $cpf,
        $sexo,
        $dtnasc,
        $telefone,
        $numero_casa,
        $rua,
        $bairro,
        $cidade,
        $estado,
        $cep,
        $login,
        $senha,
        $nivel_func,
        $cargo
    ) {

        $this->v->setNome($nome);
        $this->v->setRg($rg);
        $this->v->setCpf($cpf);
        $this->v->setSexo($sexo);
        $this->v->setDtnasc($dtnasc);
        $this->v->setTelefone($telefone);
        $this->v->setNumeroCasa($numero_casa);
        $this->v->setRua($rua);
        $this->v->setBairro($bairro);
        $this->v->setCidade($cidade);
        $this->v->setEstado($estado);
        $this->v->setCep($cep);
        $this->v->setLogin($login);
        $this->v->setSenha($senha);
        $this->v->setNivelFunc($nivel_func);
        $this->v->setCargo($cargo);
       
        //passando os valores como objeto para a classe ClienteDÂO
        $this->vdao->insert($this->v);

    }

    public function update(
        $id,
        $nome,
        $rg,
        $cpf,
        $sexo,
        $dtnasc,
        $telefone,
        $numero_casa,
        $rua,
        $bairro,
        $cidade,
        $estado,
        $cep,
        $login,
        $senha,
        $nivel_func,
        $cargo
    ) {

        $this->v->setId($id);
        $this->v->setNome($nome);
        $this->v->setRg($rg);
        $this->v->setCpf($cpf);
        $this->v->setSexo($sexo);
        $this->v->setDtnasc($dtnasc);
        $this->v->setTelefone($telefone);
        $this->v->setNumeroCasa($numero_casa);
        $this->v->setRua($rua);
        $this->v->setBairro($bairro);
        $this->v->setCidade($cidade);
        $this->v->setEstado($estado);
        $this->v->setCep($cep);
        $this->v->setLogin($login);
        $this->v->setSenha($senha);
        $this->v->setNivelFunc($nivel_func);
        $this->v->setCargo($cargo);

        $this->vdao->update($this->v);


    }

    public function findAll()
    {
        return $this->vdao->findAll();
    }


    public function buscarPorNome($nome)
    {
        return $this->vdao->findName($nome);
    }


    public function find($id)
    {
        return $this->vdao->find($id);
    }

    public function delete($id)
    {
        $this->vdao->delete($id);
    }



}


?>