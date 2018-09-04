<?php

require_once'Venda.php';

class VendaCliente extends Venda{

    protected $usuarioId;    

    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getTransporte()
    {
        return $this->transporte;
    }

    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;
    }

    public function getNivelHotel()
    {
        return $this->nivelhotel;
    }

    public function setNivelhotel($nivelhotel)
    {
        $this->nivelhotel = $nivelhotel;
    }

    public function getTranslado()
    {
        return $this->translado;
    }

    public function setTranslado($translado)
    {
        $this->translado = $translado;
    }



    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDiaria()
    {
        return $this->diaria;
    }

    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    public function setRua($usuarioId)
    {
        $this->usuarioId = $usuarioId;
    }

    
}





?>