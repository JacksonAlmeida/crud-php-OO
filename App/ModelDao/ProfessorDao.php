<?php

namespace App\ModelDao;

use App\DbConfig\Connection;
use App\Model\Professor;
use PDO;

class ProfessorDao
{

    public function createProfessor(Professor $p)
    {
        $sql = 'INSERT INTO `tb_professor`(`nome`, `dt_nascimento`) VALUES (?,?) ';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDtNascimento());
        $stmt->execute();
    }

    public function findAll()
    {
        $sql = 'SELECT `id`, `nome`,`dt_nascimento` FROM `tb_professor` ORDER BY `id`';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;
    }

    public function updateProfessor(Professor $p)
    {
        $sql = 'UPDATE `tb_professor` SET `nome`= ? ,`dt_nascimento`= ? WHERE id = ?';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDtNascimento());
        $stmt->bindValue(3, $p->getId());
        $stmt->execute();
    }

    public function deleteId($id)
    {
        $sql = 'DELETE FROM `tb_professor` where `id_professor` = id = ?';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        }

        public function findById($termo){

            $sql = 'SELECT * FROM `tb_professor` WHERE `nome` LIKE ?';
            $stmt = Connection::getConnection()->prepare($sql); 
            $stmt->bindValue(1, "%".$termo."%");   
            $stmt->execute();
        }
}
