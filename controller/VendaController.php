 <?php

//Pega as informações inseridas pelos usuarios´p

require_once '../Models/VendaCliente.php';
require_once '../DAO/VendaDAO.php';
require_once '../lib/DB.php';

class VendaController
{
    private $vc;
    private $vcdao;

    public function __construct()
    {
        $this->vc = new VendaCliente();
        $this->vcdao = new VendaDAO();
    }

    //Pegando os valores inseridos no layout de cadastro que foram trasidos pela classe save e inserindo eles nos setrs.
    public function insert($destino, $preco, $transporte, $nivelHotel, $translado, $descricao, $diaria, $tipo, $clienteId)
    {

        $this->vc->setDestino($destino);
        $this->vc->setPreco($preco);
        $this->vc->setTransporte($transporte);
        $this->vc->setNivelHotel($nivelHotel);
        $this->vc->setTranslado($translado);
        $this->vc->setDescricao($descricao);
        $this->vc->setDiaria($diaria);
        $this->vc->setTipo($tipo);
        $this->vc->setClienteId($clienteId);
         
       
        //passando os valores como objeto para a classe ClienteDÂO
        $this->vcdao->insert($this->vc);

    }

    public function update($id, $destino, $preco, $transporte, $nivelHotel, $translado, $descricao, $diaria, $tipo, $clienteId)
    {

        $this->vc->setId($id);
        $this->vc->setDestino($destino);
        $this->vc->setPreco($preco);
        $this->vc->setTransporte($transporte);
        $this->vc->setNivelHotel($nivelHotel);
        $this->vc->setTranslado($translado);
        $this->vc->setDescricao($descricao);
        $this->vc->setDiaria($diaria);
        $this->vc->setTipo($tipo);
        $this->vc->setClienteId($clienteId);
        $this->vcdao->update($this->vc);

    }

    public function findAll()
    {
        return $this->vcdao->findAll();
    }


    public function buscarPoriD($clienteId)
    {
        return $this->vcdao->findId($clienteId);
    }

    public function buscarPorNome($nome)
    {
        return $this->vcdao->findId($nome);
    }



    public function find($id)
    {
        return $this->vcdao->find($id);
    }

    public function delete($id)
    {
        $this->vcdao->delete($id);
    }



}


?>