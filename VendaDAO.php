<?php


require_once 'Model.php';
require_once 'DB.php';

//Classe DAO onde contem as funções de CRUD
class VendaDAO extends Model
{

    protected $table = "viagem";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`DESTINO`, `PRECO`, `TRANSPORTE`, `NIVELHOTEL`, `TRANSLADO`, `DESCRICAO`,
         `DIARIA`, `TIPO`, `USUARIOID`)VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getDestino());
        $stmt->bindValue(2, $obj->getPreco());
        $stmt->bindValue(3, $obj->getTransporte());
        $stmt->bindValue(4, $obj->getNivelHotel());
        $stmt->bindValue(5, $obj->getTranslado());
        $stmt->bindValue(6, $obj->getDescricao());
        $stmt->bindValue(7, $obj->getDiaria());
        $stmt->bindValue(8, $obj->getTipo());
        $stmt->bindValue(9, $obj->getClienteId());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET DESTINO = ?, PRECO = ?, TRANSPORTE = ?, NIVELHOTEL = ?, TRANSLADO = ?, DESCRICAO = ?,
                                                 DIARIA = ?, TIPO = ?, USUARIOID = ?
                                                 WHERE ID = ?");
        $stmt->bindValue(1, $obj->getDestino());
        $stmt->bindValue(2, $obj->getPreco());
        $stmt->bindValue(3, $obj->getTransporte());
        $stmt->bindValue(4, $obj->getNivelHotel());
        $stmt->bindValue(5, $obj->getTranslado());
        $stmt->bindValue(6, $obj->getDescricao());
        $stmt->bindValue(7, $obj->getDiaria());
        $stmt->bindValue(8, $obj->getTipo());
        $stmt->bindValue(9, $obj->getClienteId());
        $stmt->bindValue(10, $obj->getId());


        $stmt->execute();
        $stmt->closeCursor();
    }

    public function findName($nome)
    { 
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE NOME LIKE ?/* OR CPF LIKE ?*/");
        $stmt->bindValue(1, "%" . $nome . "%");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}
